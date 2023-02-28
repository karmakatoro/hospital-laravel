
@extends('admin.layouts.base')

@section('content')
    <!-- navbar -->
    @include('admin.partials.navbar')
    <!-- side bar-->
    @include('admin.partials.sidebar')
    <!--page wrapper-->
    @include('admin.partials.components.doctorsedit')    
@endsection
        