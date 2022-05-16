@section('title')
Nhà hàng 
@stop
@extends('blog.general.master')
@section('content')
<style> .pagination svg{width: 20px;} </style>
        <div class="container">
            <div class="row">
                <h1>Danh sách nhà hàng</h1>
                <hr>
                <table class="table table-stripe">
                    <tr>
                        <td> ID </td>
                        <td> Tên nhà hàng </td>
                        <td> Hành động </td>
                    </tr>
                    @foreach($blogCategory as $key=>$value)
                    <tr>
                        <td>{{$value->id}}</td>
                        <td>{{$value->title}}</td>
                        <td> 
                            <button> <a href="{{url('blog/category/detail')}}/{{$value->id}}"> Xem </a> </button>                          
                            <button> <a href="{{url('blog/category/edit')}}/{{$value->id}}"> Chỉnh sửa </a> </button>
                            <button> <a href="javascript:(0)" onclick="return confirmDelete('{{url('blog/category/delete')}}/{{$value->id}}','Bạn có muốn xóa không?')">Xóa</a> </button>  
                        </td>
                        
                    </tr>
                    @endforeach
                </table>
                <hr>                
                <div class="col-12">
                    <div class="pagination">{{$blogCategory->render()}};  </div>         
                </div> 
            </div>
        </div>
    </body>
@stop
 