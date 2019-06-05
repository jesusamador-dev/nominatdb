<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		{!!Form::open(['url' => '/empleados', 'method' => 'POST']) !!}
		@csrf
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title" id="defaultModalLabel">Registrar nuevo departamento</h4>
			</div>
			<div class="modal-body">
				<div class="form-group form-float">
					<div class="form-line">
						{{Form::text('nombre', '', ['class' => 'form-control', 'required', 'maxlength' => '30'])}}
						{{Form::label('lblnombre', 'Nombre de empleado', ['class' => 'form-label'])}}
					</div>
				</div>
				<div class="form-group form-float">
					<div class="form-line">
						{{Form::text('apellido', '', ['class' => 'form-control', 'required', 'maxlength' => '30'])}}
						{{Form::label('lblapellido', 'Apellido', ['class' => 'form-label'])}}
					</div>
				</div>
				<div class="form-group form-float">
					<div class="form-line">
						{{Form::text('rfc', '', ['class' => 'form-control', 'required', 'maxlength' => '20'])}}
						{{Form::label('lblrfc', 'RFC', ['class' => 'form-label'])}}
					</div>
				</div>
				<div class="form-group form-float">
					<div class="form-line">
						{{Form::number('salario', '', ['id' => 'salario', 'class' => 'form-control', 'required', 'maxlength' => '10', 'min' => '1000', 'max' => '70000' ])}}
						{{Form::label('lblsalario', 'Salario', ['class' => 'form-label'])}}
					</div>
				</div>
				<div class="form-group form-float">
					<div class="form-line">
						<select name="depto" class="form-control show-tick">
							<option value="">-- Departamento --</option>
							@foreach($departamentos as $depto)
							<option value="{{$depto->id_depto}}">{{$depto->nombre}}</option>
							@endforeach
						</select>
					</div>
				</div>
			</div>
			<div class="modal-footer">
				<button type="submit" class="btn btn-success waves-effect">
					<i class="material-icons">create</i><span>Dar de alta</span>
				</button>
				<button type="button" class="btn waves-effect" data-dismiss="modal">
					<i class="material-icons">clear</i><span>Cancelar</span>
				</button>
			</div>
		</div>
		{!!Form::close() !!}
	</div>
</div>