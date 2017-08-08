@extends('layouts.master')
@section('header')
    <h2>About page</h2>
@endsection
@section('content')
    <p>There are over {{ $number_of_cats }} cats on this site!</p>
@endsection
