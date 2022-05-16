@section('title')
Trang đăng nhập
@stop
@extends('blog.general.master')
@section('content')
        <div class="container">
            <div class="alert alert-success"> Web giới thiệu nhà hàng </div>
            @if(Session::has('error-message'))
            <div class="alert alert-warning"> {{Session::get('error-message')}} </div>
            @endif
            <div class="row">
                <div class="col-12">
                <h1>Đăng nhập</h1>
                    <hr>
                    <form action="{{url('login')}}" method="POST">
                        @csrf
                        <!-- Equivalent to... -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />    
                        <label for="email"><b>Nhập email</b></label>
                        <input type="email" placeholder="exam@gmail.com" name="email">
                        <label for="password"><b>Nhập mật khẩu</b></label>
                        <input type="password" placeholder="password" name="password">
                        <hr>
                        <input type="submit" value="Đăng nhập">
                    </form>
                </div>
            </div>
        </div>
    </body>
@stop
