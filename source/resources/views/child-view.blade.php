@extends('layout')

@section('title')
    The title
@stop
@section('header')
    <h1>This is a header</h1>
@stop

@section('content')
    @include('home-content')
@stop

@section('footer')
    <h1>This is a footer</h1>
@stop