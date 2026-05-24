{{-- resources/views/page.blade.php --}}

@extends('layouts.app')

@section('content')
  {{-- Si el HERO es exclusivo de ciertas páginas, lo llamas aquí --}}
  @include('sections.home.hero')

  @while(have_posts()) @php(the_post())
    @include('partials.page-header')
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
@endsection