@extends('template.container')


@section('body')

    @include('../navigation/navigation', array('items' => $Navigation->roots()));

    <div id="page-wrapper">

        @yield('wrapper')

    </div>

@endsection