<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Models\GroupPic;
use App\Models\LamunGroup;

class LamunGroupController extends Controller
{
    public function create(Request $request)
    {
        $field = $request->validate([
            ''
        ]);       

        $new_item = LamunGroup::create();
    }

    public function update()
    {

    }

    public function destroy()
    {

    }

    public function index()
    {

    }

    public function 
    
}
