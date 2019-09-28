@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-info text-white text-bold ">
      INGRESO CATEGORIAS
    </div>
    <div class="card-body">
      <h5 class="card-title">Special title treatment</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="{{route('categories.index')}}" class="btn btn-info">ATRAS</a>
      {!! Form::open(['route'=>'categories.store','method'=>'POST']) !!}
            {!! Field::text('name',null,['label'=>'Nombres','placeholder'=>'Ingrese el Nombre'])!!}
            {!! Field::textarea('description',null,['label'=>'Descripión','placeholder'=>'Ingrese la Desripción'])!!}
            {!! Form::submit('Process',['class'=>'btn btn-danger']) !!}

        {!! Form::close() !!}




    </div>
  </div>
</div>

@endsection