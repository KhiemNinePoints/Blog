<?php

class BlogPost extends Eloquent{
    public $table = "blog_post";

    public function MyUsers(){
        return $this->belongTo("users","id");
    }
}