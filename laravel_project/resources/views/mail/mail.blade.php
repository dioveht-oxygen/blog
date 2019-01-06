@extends('layouts.layout')
@section('main')
    <form method="post">
        {{ csrf_field() }}
        <input type="text" name="name" placeholder="ten cua ban">
        <input type="text" name="mail" placeholder="mail cua ban">
        <input type="text" name="content" placeholder="noi dung cua ban">
        <button type="submit">gui</button>
    </form>
@endsection