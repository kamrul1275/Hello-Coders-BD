<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
     function adminLoginForm(){

        return view('backend.auth.login');
     }// end method


     function adminDashboard(){

        return view('backend.layout.master');
     }// end method



     public function adminLogout(Request $request)
     {
         Auth::guard('web')->logout();
 
         $request->session()->invalidate();
 
         $request->session()->regenerateToken();
 
 
         $notification = array(
             'message' => 'Admin logout Successfully',
             'alert-type' => 'success'
         );
 
         return redirect('/admin/login')->with($notification);
     }


}
