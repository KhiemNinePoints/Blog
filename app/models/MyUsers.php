<?php
/**
 * Created by PhpStorm.
 * User: Khiem
 * Date: 15/04/2014
 * Time: 15:30
 */
class MyUsers extends Eloquent{
    public $table = "users";

    public function MyBlogPost(){
        return $this->hasMany('blog_post');
    }

    public static function check_login($user, $pass){
        $array1 = array('user'=>$user);
        $rules = array('user'=>'email');
        $check = false;
        if(Validator::make($array1,$rules)->fails()){
            $check = MyUsers::where("username","=",$user)->where("password","=",$pass)->count();
        } else {
            $check = MyUsers::where("email","=",$user)->where("password","=",$pass)->count();
        }
        if($check>0){
            return true;
        } else {
            return false;
        }
    }
}