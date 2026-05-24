{{-- resources/views/page.blade.php --}}

@extends('layouts.app')

@section('content')
  {{-- Si el HERO es exclusivo de ciertas páginas, lo llamas aquí --}}
  @include('sections.home.hero')
  @include('sections.home.productesp')
  
  {{-- El loop de WordPress, para mostrar el contenido del editor de cada página --}}

  {{--@while(have_posts()) @php(the_post())
    @include('partials.page-header')
  @endwhile--}}
@endsection