<?php

namespace App\Http\Controllers;

use App\Models\LamunGroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function create(Request $request)
    {
        try{
            
            $field = $request->validate([
                'location' => 'required|string',
                'verification' => 'required|string',       
            ]);
            
            if(Auth::check()){
                $field['by_Admin'] = 1;
                $lamun_group = LamunGroup::create($field);
                $lamun_group->admin_report()->create();

            }else{
                $field['by_Admin'] = 0;
                $lamun_group = LamunGroup::create($field);
                $lamun_group->guest_report()->create();
            }

            return redirect('');
        
        }catch(\Exception $e){    
        }
    }

    public function destroy(Request $request, LamunGroup $LamunGroup)
    {
        try{

        }catch(\Exception $e){

        }
    }

    public function update(Request $request, LamunGroup $lamunGroup)
    {
        try{
            $field = $request->validate([
                'location' => 'required|string',
                'verification' => 'required|string',       
            ]);
            
            $lamunGroup->update($field);

        }catch(\Exception $e){
            
        }
    }

    public function index()
    {
        try{

        }catch(\Exception $e){
            
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
