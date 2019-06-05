<div class="modal fade" id="createModal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
  {!!Form::open(['url' => '/departamentos', 'method' => 'POST']) !!}
   @csrf
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="defaultModalLabel">Registrar nuevo departamento</h4>
      </div>
      <div class="modal-body">
        <div class="form-group form-float">
          <div class="form-line">
						{{Form::text('nombre', '', ['class' => 'form-control', 'required', 'maxlength' => '30'])}}
						{{Form::label('lblnombre', 'Departamento', ['class' => 'form-label'])}}
          </div>
				</div>
				<div class="form-group form-float">
          	<div class="form-line">
							{{Form::number('presupuesto', '', ['id' => 'presupuesto', 'class' => 'form-control', 'required', 'maxlength' => '10', 'min' => '1000', 'max' => '70000' ])}}
							{{Form::label('lblpresupuesto', 'Presupuesto', ['class' => 'form-label'])}}
          	</div>
				</div>
      </div>
      <div class="modal-footer">
				<button type="submit" class="btn btn-success waves-effect">
          <i class="material-icons">create</i><span>Registrar</span>
				</button>
				<button type="button" class="btn waves-effect" data-dismiss="modal">
          <i class="material-icons">clear</i><span>Cancelar</span>
        </button>
      </div>
    </div>
  {!!Form::close() !!}
  </div>
</div>