@extends('index')

@section('title' , $title)

<style>
.form {
    display: flex;
    justify-content: center;
    align-items: center;
}

.register {
    width: 600px;
    height: 600px;
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

.register h2 {
    border-bottom: 2px solid #aaa;
    margin-bottom: 1em;
    padding-bottom: .5em;
}
</style>
@section('wrap')

<div class="form">
    <div class="register">
        <form action="/user/register" method="post">
            @csrf
            <h2>會員註冊</h2>
            <div class="form-group row">
                <label for="email" class="col-4">信箱：</label>
                <input type="text" class="form-control col-8" id="email" name="email" value="{{old('email')}}">
            </div>
            <div class="form-group row">
                <label for="nickname" class="col-4">暱稱：</label>
                <input type="text" class="form-control col-8" id="nickname" name="nickname">
            </div>
            <div class="form-group row">
                <label for="pawd" class="col-4">密碼：</label>
                <input type="password" class="form-control col-8" id="pawd" name="pawd">
            </div>
            <div class="form-group row">
                <label for="phone" class="col-4">手機：</label>
                <input type="text" class="form-control col-8" id="phone" name="phone">
            </div>
            <div class="form-group row">
                <label for="status" class="col-4">狀態：</label>
                <select name="status" id="status" class="form-control col-8">
                    <option value="" disabled>請選擇狀態</option>
                    <option value="1">活躍</option>
                    <option value="2">非活躍</option>
                </select>
            </div>
            <div class="row justify-content-end">
                <button type="submit" class="btn btn-info">註冊</button>
            </div>
        </form>
    </div>
</div>
@endsection