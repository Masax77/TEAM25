@extends('layout')
@section('title', 'カレンダー')
@section('content')
<head>
    <form name="Logout" method="post" action="/cgi-bin/Logout.cgi">
    </form>
</head>
<a href="{{ url('/holiday') }}">休日設定</a><br>
<a href="{{ url('/home') }}">ホームからのログアウト</a>
    {!!$cal_tag!!}
@endsection
