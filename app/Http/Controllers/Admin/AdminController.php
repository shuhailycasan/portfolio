<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view("admin.dashboard");
    }

    public function profile() {
        return view('admin.profile');
    }

    public function experience() {
        return view('admin.experience');
    }

    public function education() {
        return view('admin.education');
    }

    public function certifications() {
        return view('admin.certifications');
    }

    public function projects() {
        return view('admin.projects');
    }

    public function techstack() {
        return view('admin.techstacks');
    }

    public function updateProfile(Request $request) {

        $validate = $request->validate([ 

            
        ]);
    }

}
