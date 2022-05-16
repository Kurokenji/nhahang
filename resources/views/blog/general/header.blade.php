<html>
    <head>
        <title>@yield('title') </title>
	    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>    
	    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" />
	</head>
    <body>
        <header class="mb-2">
            <div class="container">
                @if(Auth::user())
                    {{Auth::user()->name}}
                    <a href="{{url('')}}"> Trang chủ </a>
                    <a href="{{url('blog/category/create')}}"> Đăng bài mới </a>
                    <a href="{{url('blog/category')}}"> Danh sách nhà hàng </a>
                    <a href="{{url('logout')}}"> Đăng xuất </a>
                @else
                    <a href="{{url('register')}}"> Đăng kí </a>
                    <a href="{{url('login')}}"> Đăng nhập </a>
                @endif
              
            </div>
        </header>