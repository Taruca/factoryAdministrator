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
            <a class="navbar-brand" href="{{ route('contacts.index') }}">新建联系人</a>
        </div>
    </nav>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-9">
            <form action="{{ route('contacts.store') }}" method="post">
                {{ csrf_field() }}
                @include('shared.errors')
                <div class="form-group">
                    <label for="name">姓名</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="姓名" value="{{ old('name') }}">
                </div>
                <div class="form-group">
                    <label for="mobile">联系方式</label>
                    <input type="text" class="form-control" id="mobile" name="mobile" placeholder="联系方式" value="{{ old('mobile') }}">
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