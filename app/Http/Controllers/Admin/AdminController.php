<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Auth;
use App\Models\Admin;
use App\Models\Category;

class AdminController extends Controller
{
    //

    public function login(Request $request){
        if($request->isMethod('post')){
            $data = $request->all();

            if(Auth::guard('admin')->attempt(['email'=>$data['email'],'password'=>$data['password']]))
            {
                return redirect ('admin/dashboard');  
            }
            else{
                return redirect()->back();
            }

        }

        return view('Admin.login');
    }
    public function dashboard(){
         return view('Admin.dashboard');
    }
    public function logout(){
        Auth::guard('admin')->logout();

        return redirect('/admin');
    }
    public function createcategory(){
        return view('Admin.category.create');
    }
    public function getAll(){
        return view('admin.all.index')->with([
            "categories" => Category::all()
            
        ]);
    }
    
}
