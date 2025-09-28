@extends('layouts.app')
@section('title', 'Contact - Online Store')
@section('subtitle', 'Contacts')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-4 ms-auto">
                <p class="lead">Email: {{ $viewData['email'] }}</p>
            </div>
            <div class="col-lg-4 ms-auto">
                <p class="lead">Address: {{ $viewData['address'] }}</p>
            </div>
            <div class="col-lg-4 ms-auto">
                <p class="lead">Number: {{ $viewData['number'] }}</p>
            </div>
        </div>
    </div>
@endsection