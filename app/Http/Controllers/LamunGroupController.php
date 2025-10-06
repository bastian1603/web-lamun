<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\GroupPic;
use App\Models\LamunGroup;

class LamunGroupController extends Controller
{
    public function store(Request $request)
    {
        try{
            $field = $request->validate([
                'name' => 'required|string',
                'location' => 'required|string',
                'condition' => 'required|string',
                'wide' => 'required|numeric|min:0'
            ]);       

            $lamun_group = LamunGroup::create($field);

            if($request->hasFile('pics')){
                
                foreach($request->file('pics') as $pic){
                    $new_pic = $lamun_group->has_pic()->create([]);
                    $new_pic['path'] = $new_pic['id'] . $pic->getClientOriginalExtension();
                    $new_pic->save();
                    
                    $pic->storeAs('foto', $new_pic['path'], 'public');
                }
            }

            return response()->json([
                'message' => 'Berhasil menambahkan group baru'
            ]);


        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    public function update(Request $request, LamunGroup $lamun)
    {
        try{
            $field = $request->validate([
                'name' => 'required|string',
                'location' => 'required|string',
                'condition' => 'required|string',
                'wide' => 'required|numeric|min:0'
            ]);       

           $lamun->update($field);

            return response()->json([
                'message' => 'Berhasil mengedit group'
            ]);


        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    public function destroy(LamunGroup $lamun)
    {
        try{
            $name = $lamun['name'];
            $lamun->delete();
            
            return response()->json([
                'message' => 'Berhasil menghapus' . $name
            ]);
        }catch(\Exception $e){
            return response()->json([
                'message' => $e->getMessage()
            ]);
        }
    }

    public function index()
    {
        return view('admin.lamun_organize', [
            'lamun_groups'=> LamunGroup::all()
        ]);
    }

    public function show()
    {

    }
    
}
