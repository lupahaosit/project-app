<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;
use App\Models\User;
use Mockery\Exception;

class UserController extends Controller
{
    public function getAll() : \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Foundation\Application
    {
        $x = 5;
            (Mail::send(['html'=>'mail', 'subject'=>'hello world'], ['data'=>$x], function ($message) use($x){
                $message->to('igor2002vlad@mail.ru', 'To web dev blog')->subject('Test Email');

                $message->from('igor2002vld@gmail.com', 'To web dev blog');
            }));

        $contact = DB::table('users')->get();

        return View('message');
    }
    public function create(Request $request): View
    {
        $x = 7;
        return View('test', ['data'=>$request->someName] );
    }
    public function getPage(){
        return View('message');
    }

}
