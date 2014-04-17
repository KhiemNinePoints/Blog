<?php
/**
 * Created by PhpStorm.
 * User: Khiem
 * Date: 15/04/2014
 * Time: 18:29
 */

class RegisterController extends BaseController{
    public function addUser(){
        $rules = array(
            "username'=>'required|min:3",
            "password'=>'required|min6",
            "email"=>"required|email",
        );
        $allUser =Input::all();
        if(!Validator::make($allUser,$rules)->fails()){
            $user = new MyUsers();
            $user->username = Input::get("username");
            $user->password = md5(sha1(Input::get("password")));
            $user->email = Input::get("email");
            $user->save();
            return View::make("template.login");
        } else {
            return View::make('template.register');
        }
    }


} 