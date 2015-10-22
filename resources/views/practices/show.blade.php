@extends('layouts.practices')

@section('content')
    @include('sections.practices-show-description')
    @if (view()->exists($activity))
        @include($activity)
    @endif
@stop