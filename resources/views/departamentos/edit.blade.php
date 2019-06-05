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
							Editar Departamento: @isset($departamento){{ $departamento['nombre'] }}@endisset
						</h2>
					</div>
					<div class="body">
						{!!Form::open(['url' => '/departamentos/'.$departamento['id'], 'method' => 'PATCH']) !!}
						@csrf
						<div class="form-group form-float">
							<div class="form-line">
								{{Form::number('presupuesto', '', ['id' => 'presupuesto', 'class' => 'form-control', 'required', 'maxlength' => '10', 'min' => '1000', 'max' => '70000' ])}}
								{{Form::label('lblpresupuesto', 'Presupuesto', ['class' => 'form-label'])}}
							</div>
						</div>
						<button type="submit" class="btn btn-success waves-effect">
							<i class="material-icons">save</i><span>Guardar cambios</span>
						</button>
						<a href="{{url('/departamentos')}}" class="btn btn-link waves-effect right">
							<i class="material-icons"></i><span>Regresar</span>
						</a>
						{!!Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<script>
		document.getElementById('presupuesto').value = {{$departamento['presupuesto']}};
	</script>
</section>
@endsection