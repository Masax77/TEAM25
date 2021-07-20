@extends('layout')
@section('title', 'カレンダー')
@section('content')
<head>
    <form name="Logout" method="post" action="/cgi-bin/Logout.cgi">
        <input type="submit" value="Logout" />
    </form>
    @if (Auth::check())
        <p>USER: {{$user->name . ' (' . $user->email . ')'}}</p>
        @else<p>※ログインしていません。(<a href="/login">ログイン</a> | <a href="/register">登録</a> )</p>
    @endif
</head>
<a href="{{ url('/holiday') }}">休日設定</a>
    {!!$cal_tag!!}
@endsection
