@extends('layouts.admin')

@section('content')
<section class="content">
	<div class="container-fluid">
		<div class="block-header">
			<h2>EMPLEADOS</h2>
		</div>
		<div class="row clearfix">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<div class="card">
					<div class="header">
						@isset($status)
						<div class="alert bg-red alert-dismissible" role="alert">
							<button type="button" class="close" data-dismiss="alert" aria-label="Cerrar"><span aria-hidden="true">&times;</span></button>
							{{$status}}
						</div>
						@endisset
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
							Editar Empleado: @isset($empleado){{ $empleado['rfc'] }}@endisset
						</h2>
					</div>
					<div class="body">
						{!!Form::open(['url' => '/empleados/'.$empleado['rfc'], 'method' => 'PATCH']) !!}
						@csrf
						<div class="form-group form-float">
							<div class="form-line">
								<!-- {{Form::text('nombre', '' ,['id' => 'nombre', 'disabled', 'class' => 'form-control', 'required', 'maxlength' => '10'])}}
								{{Form::label('lblnombre', 'Nombre', ['class' => 'form-label'])}} -->
								<input type="text" name="nombre" value="{{$empleado['nombre']}}" disabled class="form-control">
								<label class="form-label">Nombre</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<!-- {{Form::number('salario', '', ['id' => 'salario', 'class' => 'form-control', 'required', 'maxlength' => '10', 'min' => '1000', 'max' => '70000' ])}}
								{{Form::label('lblsalario', 'Salario', ['class' => 'form-label'])}} -->
								<input type="number" value="{{$empleado['salario']}}" name="salario" class="form-control" min="1000" max="70000" required>
								<label class="form-label">Salario</label>
							</div>
						</div>
						<div class="form-group form-float">
							<div class="form-line">
								<!-- {{Form::number('salario', '', ['id' => 'salario', 'class' => 'form-control', 'required', 'maxlength' => '10', 'min' => '1000', 'max' => '70000' ])}}
								{{Form::label('lblsalario', 'Salario', ['class' => 'form-label'])}} -->
								<select name="depto" class="form-control show-tick">
									<option value="">-- Departamento --</option>
									@foreach($departamentos as $depto)
										@if($empleado['id_depto'] == $depto->id_depto)
										<option selected="true" value="{{$depto->id_depto}}">{{$depto->nombre}}</option>
										@endif
									<option value="{{$depto->id_depto}}">{{$depto->nombre}}</option>
									@endforeach
								</select>
							</div>
						</div>
						<button type="submit" class="btn btn-success waves-effect">
							<i class="material-icons">save</i><span>Guardar cambios</span>
						</button>
						<a href="{{url('/empleados')}}" class="btn btn-link waves-effect right">
							<i class="material-icons"></i><span>Regresar</span>
						</a>
						{!!Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
@endsection