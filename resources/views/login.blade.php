@extends('student-layout.master')

@section('title', 'Title login')

@section('header', 'Header login extends')

@section('content')
    <form method="POST" action="{{ route('post-login') }}">
        @csrf
        <input name="username" placeholder="Username" type="text">
        <input name="password" placeholder="Password" type="password">
        <button type="submit">Submit</button>
    
    </form>

@endsection

@section('footer', 'Footer login extends')
    