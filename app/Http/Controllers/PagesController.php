<?php

namespace App\Http\Controllers;

use Input;
use DB;
use Auth, View;
use App\Providers\ComposerServiceProvider;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;  // <----
use App\Models\Show;                  // <----
use Illuminate\Database\Eloquent\Model;

class PagesController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
    }

    public function code()
    {
        return view('pages.code');
    }

    public function sea()
    {
        return view('pages.sea');
    }
    
    public function mountain()
    {
        return view('pages.mountain');
    }

    public function spa()
    {
        return view('pages.spa');
    }
    
    public function city()
    {
        return view('pages.city');
    }

    public function admin()
    {
           /* $user_model=new Show();
        $users_data=$user_model->getUsers();
        //foreach ($users_data as $sdata)//{ echo $sdata_id; }*/
        $showusers = DB::table('users')->get();
        return view('admin.page', ['users' => $showusers]);
    }


}
