@extends('layouts.app2')
@section("title", $viewData["title"])
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Register Pilot</div>
                    <div class="card-body">
                        @if($errors->any())
                            <ul id="errors" class="alert alert-danger list-unstyled">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif
                        <form method="POST" action="{{ route('pilot.save') }}">
                            @csrf
                            <input type="text" class="form-control mb-2" placeholder="Enter pilot name" name="name"
                                value="{{ old('name') }}" />
                            <p></p>
                            <label for="city_of_origin">Enter city of origin: </label>
                            <select name="city of origin" id="city_of_origin">
                                <option value="LA">LA</option>
                                <option value="Tokio">Tokio</option>
                            </select>
                            <p></p>
                            <input type="text" class="form-control mb-2" placeholder="Enter the pilot's nitro level"
                                name="nitro_level" value="{{ old('nitro_level') }}" />
                            <input type="submit" class="btn btn-primary" value="Send" />
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection