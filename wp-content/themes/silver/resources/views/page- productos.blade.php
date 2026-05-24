@extends('layouts.app')

@section('content')
  {{-- Solo incluimos lo que es ÚNICO de esta página --}}
  @include('sections.productos.productospage')

@endsection