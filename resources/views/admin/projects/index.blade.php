@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class=" my-4">
            lista progetti
        </h2>

        @dump($projects);
        <div class="row justify-content-center">
            <div class="col">
                <div class="card">

                </div>
            </div>
        </div>
    </div>
@endsection
