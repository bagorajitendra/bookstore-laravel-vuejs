@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        @if(session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <book-page :book = "{{$data}}"></book-page>
    </div>
</div>
@endsection