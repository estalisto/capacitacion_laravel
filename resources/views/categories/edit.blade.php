@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-info text-white text-bold ">
      EDITAR CATEGORIAS
    </div>
    <div class="card-body">
      <h5 class="card-title">Editando las categorias</h5>
      <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      <a href="{{route('categories.index')}}" class="btn btn-info">ATRAS</a>

      
        {!! Form::open(['route'=>['categories.update',$category],'method'=>'PUT']) !!}
        {!! Field::text('name',$category->name,['label'=>'Descripcion', 'placeholder'=>'Ingresa el nombre']) !!}

        {!! Field::textarea('descripcion',$category->description,['label'=>'Descripcion', 'placeholder'=>'Ingresa la Descripcion']) !!}

        {!! Form::submit('Process',['class'=>'btn btn-danger']) !!}

{!! Form::close() !!}



    </div>
  </div>
</div>

@endsection