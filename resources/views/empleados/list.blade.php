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
							Lista de Empleados
						</h2>
						<button type="button" data-tooltip="tooltip" data-placement="top" title="Nuevo equipo" class="btn bg-teal btn-circle waves-effect waves-circle waves-float right" data-toggle="modal" data-target="#createModal">
							<i class="material-icons">add</i>
						</button>
					</div>
					<div class="body table-responsive">
						<table id="datatable" class="table table-hover table-striped table-bordered col-xs-12">
							<thead>
								<tr>
									<th>RFC</th>
									<th>Nombre</th>
									<th>Apellidos</th>
									<th>Salario</th>
									<th>Departamento</th>
									<th>Acciones</th>
								</tr>
							</thead>
							<tbody>
								@foreach($empleados as $empleado)
								<tr data-id="{{$empleado->rfc}}">
									<th scope="row">{{ $empleado->rfc }}</th>
									<th>{{$empleado->nombre}}</th>
									<th>{{$empleado->apellido}}</th>
									<th>{{$empleado->salario}}</th>
									<th>{{$empleado->nombre_depto}}</th>
									<td>
										<a href="{{url('/empleados/'.$empleado->rfc.'/edit')}}" data-tooltip="tooltip" data-placement="top" title="Editar" class="btn btn-success btn-circle waves-effect waves-circle waves-float">
											<i class="material-icons">edit</i>
										</a>
										<button type="button" id="deleteEmpleado" data-toggle="modal" data-tooltip="tooltip" data-placement="top" title="Eliminar" data-target="#deleteModal" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
											<i class="material-icons">delete_sweep</i>
										</button>
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
	@include('empleados.create')
	@include('empleados.delete')
</section>
@endsection