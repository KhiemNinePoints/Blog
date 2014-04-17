@extends('template.main')

@section('title')
Đăng ký
@endsection

@section('content')
    <form method="post" action="{{Asset('register')}}" id="form-register">
        <h2>Đăng ký</h2>
        <input type="text" name="username" placeholder="User name" id="username" class="form-control">
        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-Password" class="form-control">
        <input type="email" name="email" id="email" placeholder="Email" class="form-control">
        <button class="btn btn-lg btn-primary btn-block">Đăng ký</button>
    </form>
    <script type = "text/javascript">
        $("#form-register").validate({
            rules:{
                username:{
                    required: true,
                    minlength:3
                },
                password:{
                    required: true,
                    minlength: 6
                },
                password_confirmation:{
                    equalTo:"#password"
                },
                email:{
                    required:true,
                    email:true
                }
            }
        })
    </script>
@endsection