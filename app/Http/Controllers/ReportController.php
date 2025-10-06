<?php

namespace App\Http\Controllers;

use App\Models\LamunGroup;
use App\Models\Report;
use App\Models\ReportByAdmin;
use App\Models\ReportByGuest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function index()
    {
        return view('admin.report_organize', [
            'reports' => Report::all()
        ]);
    }

    public function create()
    {
        return view('new_report', [
            'lamun_groups' => LamunGroup::all()
        ]);
    }

    public function store(Request $request)
    {
        try{
            $login = Auth::check();
            $content = [
                'location' => 'required|string',
                'lamun_group_id' => 'required|numeric',       
            ];

            if (!$login) {
                $content['name'] = 'required|string';
                $content['phone_no'] = 'required|string'; 
            }
            
            $field = $request->validate($content);

            if($login){
                $field['by_admin'] = 1;
                
                $report = Report::create($field);
                ReportByAdmin::create([
                    'admin_id' => Auth::user()->id,
                    'report_id' => $report->id
                ]);

            }else{
                $field['by_admin'] = 0;

                $report = Report::create($field);            
                ReportByGuest::create([
                    'name' => $field['name'],
                    'phone_no' => $field['phone_no'],
                    'report_id' => $report->id    
                ]);
            }

            return redirect()->back()->with('success', 'Berhasil menambahkan laporan');
        
        }catch(\Exception $e){    
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy(Request $request, Report $report)
    {
        try{
            $pic = $report->pics();

            $report->delete();
        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function update(Request $request, Report $report)
    {
        try{
            $field = $request->validate([
                'location' => 'required|string',
                'verification' => 'required|string',       
            ]);
            
            $report->update($field);

        }catch(\Exception $e){
            return redirect()->back()->with('error', $e->getMessage());
            
        }
    }

    public function show(LamunGroup $lamunGroup)
    {
        try{

        }catch(\Exception $e){
            
        }
    }

    public function verifying()
    {
        try{

        }catch(\Exception $e){

        }
    }
}
