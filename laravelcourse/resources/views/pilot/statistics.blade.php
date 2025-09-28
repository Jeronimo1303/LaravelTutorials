@extends('layouts.app2')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="col-md-4 col-lg-3 mb-2">
        <div class="card">
            <p>Pilots in LA: {{ $viewData['pilots_in_LA'] }}</p>
            <p>Pilots in Tokio: {{ $viewData['pilots_in_Tokio'] }}</p>
            <p>Avergare Nitro Level: {{ $viewData['average_nitro_level'] }}</p>
        </div>
    </div>
@endsection