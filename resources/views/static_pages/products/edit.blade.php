@extends('layouts.default')
@section('content')
    <nav class="navbar navbar-default">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ route('products.edit') }}">编辑商品</a>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <form action="{{ route('products.update', $product->id) }}" method="post">
                {{ method_field('PATCH') }}
                {{ csrf_field() }}
                @include('shared.errors')
                <div class="form-group">
                    <label for="name">商品名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="商品名" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="price">单价</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="单价" value="{{ $product->price }}">
                </div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-default">确认</button>
                </div>
                <div class="col-md-9"></div>
                <div class="col-md-1">
                    <button type="submit" class="btn btn-default" onclick="javascript:history.back(-1);">返回</button>
                </div>
            </form>
        </div>
    </div>
@stop