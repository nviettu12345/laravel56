@extends('admin::layouts.master')

@section('content')
<div class=" justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin.home')}}">Trang chủ</a></li>
    <li class="breadcrumb-item"><a href="{{route('admin.get.list.category')}}" title="danh mục">Danh mục</a></li>
    <li class="breadcrumb-item active" aria-current="page">Data</li>
  </ol>
</nav>
    </div>
    <div class="table-responsive">
        <h2>Quản lý danh mục <a  href="{{route('admin.get.create.category')}}" class="float-right">thêm mới</a></h2>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th>#</th>
              <th>Tên danh mục</th>
              <th>Title Seo</th>
              <th>Trạng thái</th>
              <th>Thao tác</th>
            </tr>
          </thead>
          <tbody>
          @if(isset($categories))
            @foreach($categories as $category)
                <tr>
                  <td>{{$category->id}}</td>
                  <td>{{$category->c_name}}</td>
                  <td>{{$category->c_title_seo}}</td>
                  <td><a href="">{{$category->getStatus($category->c_active)['name']}}</a></td>
                  <td>
                  <a href="{{route('admin.get.edit.category',$category->id)}}">edit</a>
                  <a href="{{route('admin.get.action.category',['delete',$category->id])}}">delete</a>
               
                  </td>
                </tr>
            @endforeach
          @endif
          </tbody>
        </table>
@stop