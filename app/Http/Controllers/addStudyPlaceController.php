<?php

namespace App\Http\Controllers;

use App\Models\StudyPlace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class addStudyPlaceController extends Controller
{
    public function Add_Study(){
        return View('auth/registareStudy');
    }
    public function registerStudy(Request $request){
        if ($request->password == $request->password_confirmation){
            $place = DB::table('study_places')->insert(['name'=>$request->name, 'email'=>$request->email, 'password'=>$request->password, 'confirmed'=>false]);
            return $this->AuthPlace();
        }
        else{
            return View('auth/registareStudy', ['data'=>'пароли не совпадают']);
        }

    }
    public function AuthPlace(){
        return View('auth/AuthPlace');
    }
}
