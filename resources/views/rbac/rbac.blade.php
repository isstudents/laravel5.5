@extends('layouts')

@section('header')
    我是头部!
    @stop
@section('content')
    我是内容!
    <p>{{$name}}</p>
    <p>{{date('Y-m-d H:i:s',time())}}</p>
    <p>@{{ $name }}</p>
    <a href="{{url('urlTest')}}">url()</a>
    <a href="{{action('rbacController@urlTest')}}">我是action</a>
    <br>
    <a href="{{route('url')}}">我是route</a>
    @include('rbac.commo',['me'=>'我是错误信息']);
    @stop
@section('footer')
    我是尾巴
    @stop