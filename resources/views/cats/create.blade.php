@extends('layouts.master')

@section('header')
    <h2>Add a new cat</h2>
@endsection

@section('content')
    {!! Form::open(['url' => '/cat']) !!}
        @include('partials.forms.cats')
    {!! Form::close() !!}
@endsection
