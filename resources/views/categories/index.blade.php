@extends('layouts.app')

@section('content')
<div class="container">
  <div class="card">
    <div class="card-header bg-success text-white text-bold ">
      CATEGORIAS
    </div>
    <div class="card-body">
      <h5 class="card-title">Todas las Categorias</h5>

      <a href="{{route('categories.create')}}" class="btn btn-success">CREAR</a>
      <hr>
      {!! Form::open(['method'=>'GET','route'=>'categories.index'])!!}
          {!! Form::text('filter',request()->get('filter'),['class'=>'form-control col-lg-4','placeholder'=>'Buscar Categorias'])!!}

      {!! Form::close()!!}
      <hr>
      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">SLUG</th>
      <th scope="col">DESCRIPTION</th>
      <th scope="col">ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    @forelse ($categorias as $categoria)
      <tr>
      <th scope="row">{{$categoria->id}}</th>
        <td>{{$categoria->name}}</td>
        <td>{{$categoria->slug}}</td>
        <td>{{$categoria->description}}</td>
        <td>
        <a href="{{route('categories.edit',$categoria)}}">EDITAR</a>
          |
       
       

        
           </td>
      </tr>
    @empty
    <tr>
        <td colspan="4">No hay registros</td>

      </tr>
        
    @endforelse
   
  </tbody>
</table>{!! $categorias->render() !!}


    </div>
  </div>
</div>

@endsection