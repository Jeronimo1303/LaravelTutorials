@extends('layouts.app2')
@section('title', $viewData["title"])
@section('subtitle', $viewData["subtitle"])
@section('content')
    <div class="row">
        @foreach ($viewData["pilots"] as $pilot)
            <div class="col-md-4 col-lg-3 mb-2">
                <div class="card">
                    <img src="https://laravel.com/img/logotype.min.svg" class="card-img-top img-card">
                    <div class="card-body text-center">
                        <p>ID: {{ $pilot->getId() }}</p>
                        @if ($pilot->getCityOfOrigin() == 'Tokio')
                            <p>Name: {{ $pilot->getName() }}; Reto Tokio!</p>
                        @else
                            <p style="color: aqua">Name: {{ $pilot->getName() }}</p>
                        @endif
                        <p>City of Origin: {{ $pilot->getCityOfOrigin() }}</p>
                        <p>Nitro Level: {{ $pilot->getNitroLevel() }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection