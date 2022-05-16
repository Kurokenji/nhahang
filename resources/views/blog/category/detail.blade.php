@section('title')
Nhà hàng {{$category->title}}
@stop
@extends('blog.general.master')
@section('content')
        <div class="container">
            <div class="row">
                <div class="col-12">                    
                <h1>Thông tin nhà hàng</h1>
                <table class="table table-stripe">
                            <tr>
                                <td> Tên nhà hàng: </td>
                                <td> {{$category->title}} </td>
                            </tr>
                            <tr>
                                <td> Địa chỉ: </td>
                                <td> {{$category->address}} </td>
                            </tr>
                            <tr>
                                <td> Mô tả: </td>
                                <td> {!!nl2br($category->content)!!} </td>
                              
                            </tr>
                            <tr>
                                <td> Hình ảnh: </td>
                                <td> <img src="{{('/uploads')}}/{{$category->image}}" width="400"> </td>
                              
                            </tr>
                            <tr>
                                <td> Ngày đăng: </td>
                                <td> {{$category->created_at}} </td>
                              
                            </tr>                                                  
                        </table>
                    <div>
                        Tùy chọn:
                    </div>
                    <button> <a href="{{url('blog/category/edit')}}/{{$category->id}}"> Chỉnh sửa </a> </button>
                    <button> <a href="javascript:(0)" onclick="return confirmDelete('{{url('blog/category/delete')}}/{{$category->id}}','Bạn có muốn xóa không?')">Xóa</a> </button>  
                </div>
            </div>
        </div>
    </body>
@stop
 