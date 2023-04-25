<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Profile; // for use of model class News

class ProfileController extends Controller
{
    //
        public function add()
    {
        return view('admin.profile.create');
    }

    public function create(Request $request)
    {
        // dd($request);
        // Validation
        $this->validate($request, Profile::$rules);
        
        $profile = new Profile;
        $form = $request->all();

        // delete unnecessary items
        unset($form['_token']);

        // store all data in news table
        $profile->fill($form);
        $profile->save();
        dd($form);
        
        return redirect('admin/profile/create');
    }

    public function edit()
    {
        return view('admin.profile.edit');
    }

    public function update()
    {
        return redirect('admin/profile/edit');
    }
}
