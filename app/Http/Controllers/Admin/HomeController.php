<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Home;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class HomeController extends Controller
{


    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function homeUpdate(Request $request){
        Home::find(1)->update([
            'name' => $request->name,
            'title' => $request->title,
            'desc' => $request->desc,
            ]);

        return redirect()->back();

    }

}
