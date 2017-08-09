@extends('layouts.master')

@section('header')
    @if(isset($breed))
        <a href="{{ url('/') }}">Back to the overview</a>
    @endif
    <h2>
        All @if(isset($breed)) {{ $breed->name }} @endif Cats
        <a href="{{ url('cat/create') }}" class="btn btn-primary pull-right">Add new cat</a>
    </h2>
@endsection

@section('content')
    @foreach($cats as $cat)
        <div class="cat">
            <a href="{{ url('cat/'.$cat->id) }}">
                <strong>{{ $cat->name }}</strong> - {{ $cat->breed->name }}
            </a>
        </div>
    @endforeach
@endsection
