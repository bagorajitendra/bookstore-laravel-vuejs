@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
    
        @if(session()->get('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <edit-book :book = "{{$data}}"></edit-book>
    </div>
</div>
@endsection