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
            <a class="navbar-brand" href="{{ route('contacts.index') }}">联系人管理</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            {{--<form class="navbar-form navbar-left">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="查找联系人">
                </div>
                <button type="submit" class="btn btn-default">确认</button>
            </form>--}}
            <ul class="nav navbar-nav navbar-right">
                <li><a href="{{ route('contacts.create') }}">新建联系人</a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </nav>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>编号</th>
            <th>姓名</th>
            <th>联系方式</th>
            <th>欠款情况</th>
            <th>操作</th>
        </tr>
        </thead>
        <tbody>
        @foreach($contacts as $contact)
            <tr>
                <th>{{ $contact->id }}</th>
                <th>{{ $contact->name }}</th>
                <th>{{ $contact->mobile }}</th>
                <th>0</th>
                <th>
                    <a href="{{ route('contacts.destroy', $contact->id) }}">删除</a> |
                    <a href="{{ route('contacts.show', $contact->id) }}">编辑</a>
                </th>
            </tr>
        @endforeach
        </tbody>
    </table>
    {!! $contacts->render() !!}
@stop