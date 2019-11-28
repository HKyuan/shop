@extends('index')

@section('title',$title)

@section('wrap')

<div class="form col-12 col-md-9">
        <form action="/login" method="post" >
        @csrf
            <div class="form-group row">
                <label for="email" class="col-4">信箱</label>
                <input type="text" name="email" id="email" class="form-control col-4">
            </div>    
            <div class="form-group row">
                    <label for="pawd" class="col-4">密碼</label>
                    <input type="password" name="pawd" id="pawd" class="form-control col-4">
            </div>
        </form>
    </div>
    
@endsection