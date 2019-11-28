@extends('index')

@section('title' , $title)

<style>
.form {
    display: flex;
    justify-content: center;
    align-items: center;
}

.login {
    width: 400px;
    height: 400px;
    color: #fff;
    background-color: rgba(0, 0, 0, .5);
    border-radius: 5px;
    border: 5px solid #fff;
    box-shadow: 0 0 60px #000;
    backdrop-filter: blur(5px);
    display: flex;
    justify-content: center;
    align-items: center;
}

.login h2 {
    border-bottom: 2px solid #aaa;
    margin-bottom: 1em;
    padding-bottom: .5em;
}
</style>
@section('wrap')


<div class="form">
    <div class="login">
        <form action="/user/login" method="post">
            @csrf
            <h2>會員登入</h2>
            <div class="form-group row">
                <label for="email" class="col-4">信箱：</label>
                <input type="text" class="form-control col-8" name="email" id="email" value="{{old('email')}}">
            </div>
            <div class="form-group row">
                <label for="pawd" class="col-4">密碼：</label>
                <input type="password" class="form-control col-8" name="pawd" id="pawd">
            </div>
            <div class="form-group row justify-content-end">
                <a href="{{url('user/register')}}" class="btn btn-info">註冊</a>
                <button type="submit" class="btn btn-success">登入</button>
            </div>
        </form>
    </div>
</div>
@endsection