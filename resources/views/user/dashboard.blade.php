@extends('user.layouts.app')
@section('content')
<h1>Welcome {{ Auth::user()->email }}</h1>
<a href="{{ route('logout') }}">Log Out</a>
@endsection