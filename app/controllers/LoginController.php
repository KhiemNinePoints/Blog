<?php
/**
 * Created by PhpStorm.
 * User: Khiem
 * Date: 16/04/2014
 * Time: 09:17
 */

class LoginController extends BaseController{
    public function checkLogin(){
        $user = Input::get('username');
        $pass = md5(sha1(Input::get('password')));
        if(MyUsers::check_login($user,$pass)){
            Session::put('user',$user);
        } else {
            echo "<div id = error>Lỗi đăng nhập!</div>";
        }
        $postsB = MyUsers::paginate(5);
        return View::make('template.login', array('postBlog'=>$postsB));
    }
} 