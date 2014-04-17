@extends('template.main')

@section('content')
<form method="post" action="{{Asset('postArticles')}}" id="form-post-articles">
    <h2>Bài đăng của {{$user}}</h2>

    <input type="text" height="" name="title" placeholder="Tiêu đề" id="title" class="form-control">
    <input type="text" name="content" id="content" placeholder="Nội dung" class="form-control">
    <input type="text" name="image_url" id="content" placeholder="Nội dung" class="form-control">
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