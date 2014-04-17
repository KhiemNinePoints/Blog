@extends('template.main')

@section('content')
    <form method="post" action="{{Asset('login')}}" id="form-login">
        <h2>Đăng nhập</h2>

        <input type="text" name="username" placeholder="User name or email" id="username" class="form-control">
        <input type="password" name="password" id="password" placeholder="Password" class="form-control">
        <button class="btn btn-lg btn-primary btn-block">Đăng nhập</button>
    </form>
    <script type = "text/javascript">
        $("#form-login").validate({
            rules:{
                username:{
                    required: true,
                    minlength:3
                },
                password:{
                    required: true,
                    minlength: 6
                }
            }
        })
    </script>
@endsection

@section('footer')
        <div class="container" id = "phantrang">
            <table border="1px" class="table">
                <tr>
                    <th>User name</th>
                    <th>Password</th>
                    <th>Email</th>
                </tr>
                @foreach($postBlog as $postB)
                    <tr>
                        <td>{{$postB->username}}</td>
                        <td>{{$postB->password}}</td>
                        <td>{{$postB->email}}</td>
                    </tr>
                @endforeach
            </table>
        </div>
    {{$postBlog->links()}}
@endsection