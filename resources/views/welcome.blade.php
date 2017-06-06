@extends('layouts.app')

@section('content')

    @push('sidebar')
        <a href="#" class="list-group-item">Sidebar list item</a>
    @endpush

    @prepend('sidebar')
        <a href="#" class="list-group-item">First Sidebar Item</a>
    @endprepend    

    <h1>News</h1>
@endsection
