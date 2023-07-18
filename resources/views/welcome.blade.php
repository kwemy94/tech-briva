@extends('layouts.layout')

@section('front-content')
    <!-- ====== Hero Start ====== -->
    @include('partials._home')
    <!-- ====== Hero End ====== -->

    <!-- ====== Features Start ====== -->
    @include('partials._features')
    <!-- ====== Features End ====== -->

    <!-- ====== About Start ====== -->
    @include('partials._about')
    <!-- ====== About End ====== -->

    <!-- ====== Team Start ====== -->
    @include('partials._team')
    <!-- ====== Team End ====== -->

    <!-- ====== FAQ Start ====== -->
    @include('partials._faq')
    <!-- ====== FAQ End ====== -->

    <!-- ====== Contact Start ====== -->
    @include('partials._contact')
    <!-- ====== Contact End ====== -->

    
@endsection
