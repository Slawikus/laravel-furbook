@extends('layouts.master')

@section('header')
    <h2>Edit a cat</h2>
@endsection

@section('content')
    {!! Form::model($cat, ['url' => '/cat/'.$cat->id, 'method' => 'put']) !!}
    @include('partials.forms.cats')
    {!! Form::close() !!}
@endsection
