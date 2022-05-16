@section('title')
Tạo
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
                <h1>Thêm nhà hàng</h1>
                   
                    <form action="{{url('blog/category/create')}}" method="POST" enctype="multipart/form-data">    
                        @csrf
                        <!-- Equivalent to... -->
                        <input type="hidden" name="_token" value="{{ csrf_token() }}" />   
                        <table class="table table-stripe">
                            <tr>
                                <td> Tên nhà hàng: </td>
                                <td>   <input class="form-control" type="text" placeholder="Nhập tên nhà hàng" name="title">   </td>
                            </tr>
                            <tr>
                                <td> Địa chỉ: </td>
                                <td>    <textarea class="form-control" name="address" placeholder="địa chỉ"></textarea> </td>
                            </tr>
                            <tr>
                                <td> Mô tả: </td>
                                <td>   <textarea class="form-control" name="content" placeholder="Mô tả nhà hàng"></textarea>  </td>
                              
                            </tr>
                            <tr>
                                <td> Thêm hình ảnh: </td>
                                <td>   <input type="file" name="file_upload"> </td>
                              
                            </tr>                                       
                            <hr>
                         
                            
                            <hr>
                        </table>
                        <input type="submit" value="Đăng bài">
                    </form>
                </div>
            </div>
        </div>
    </body>
@stop
 