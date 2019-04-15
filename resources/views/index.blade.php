@extends('layouts.default')

@section('title', 'QandA')

@section('header')
    <nav class="navbar navbar-expand-sm navbar-light">
        <h2>
            <a class="navbar-brand text-white" href="/">QandA</a>
        </h2>
        <button class="navbar-toggler" data-toggle="collapse" data-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div id="menu" class="collapse navbar-collapse">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="/add" class="nav-link">アカウント登録</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/login">ログイン</a>
                </li>
            </ul>
        </div>
    </nav>
@endsection

@section('content')
    <div class="contents">
        <img class="rounded-circle mx-auto d-block bg-image" src="{{ asset('/img/bg.png') }}">
        <p class="display-4">
            QandA<br>
            <a class="btn btn-primary" href="/add">無料で始める</a>
        </p>
    </div>
@endsection
