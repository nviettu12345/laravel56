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
    <div class="">
    
       @include("admin::category.form")
      
    </div>
@stop