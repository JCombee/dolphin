@extends('template.container')


@section('body')

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                @yield('frame')
            </div>
        </div>
    </div>

@endsection