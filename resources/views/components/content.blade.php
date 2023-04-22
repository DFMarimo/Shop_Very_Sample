@extends('layouts.master')

@section('title' , $title)

@section('content')
    {{--Navbar--}}
    @includeIf('layouts.sections.navbar')

    {{ $slot ?? '' }}
@endsection
