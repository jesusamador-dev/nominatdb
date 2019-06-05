@extends('layouts.admin')

@section('content')
<section class="content">
  <div class="container-fluid">
    <div class="block-header">
      <h2>DEPARTAMENTOS</h2>
    </div>
      <div class="row clearfix">
      	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="card">
            <div class="header">
                @if(session('status'))
                  <div class="alert bg-green alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                      {{session('status')}}
                  </div>
                @endif
                @if($errors->any())
                  <div class="alert bg-red alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
                    <ul>
                        @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
                <h2>
                    Lista de Departamentos
                </h2>
                <button type="button"  data-tooltip="tooltip" data-placement="top" title="Nuevo equipo" class="btn bg-teal btn-circle waves-effect waves-circle waves-float right" data-toggle="modal" data-target="#createModal">
                  <i class="material-icons">add</i>    
                </button>
            </div>
            <div class="body table-responsive">
              <table id="datatable" class="table table-hover table-striped table-bordered col-xs-12">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Presupuesto</th>
                    <th>Acciones</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($departamentos as $depto)
                    <tr data-id="{{$depto->id_depto}}">
                      <th scope="row">{{  $loop->iteration }}</th>
                       <th>{{$depto->nombre}}</th>
                       <th>{{$depto->presupuesto}}</th>
                      <td>
                        <a href="{{url('/departamentos/'.$depto->id_depto.'/edit')}}" data-tooltip="tooltip" data-placement="top" title="Editar" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
                          <i class="material-icons">edit</i>
                        </a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
            	</table>
						</div>
          </div>
        </div>
      </div>
  	</div>
  </div>
@include('departamentos.create')
</section>
@endsection
