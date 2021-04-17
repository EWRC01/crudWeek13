<div wire:ignore.self class="modal" id="myModalEdit" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Edita los datos de un estudiante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <form>

<label class="form-label" for="firstname">Nombre</label>
<input class="form-control" type="text" id="firstname" wire:model="firstName" placeholder="Ingrese su nombre">
@error('firstName') <span class="text-danger">{{$message}}</span>@enderror
<label class="form-label" for="lastname">Apellido</label>
<input class="form-control" type="text" id="lastname" wire:model="lastName" placeholder="Ingrese su apellido">
@error('lastName') <span class="text-danger">{{$message}}</span>@enderror
<label class="form-label" for="score1">Nota 1</label>
<input class="form-control" type="number" id="score1" wire:model="Score1" placeholder="Ingrese la primera nota">
@error('Score1') <span class="text-danger">{{$message}}</span>@enderror
<label class="form-label" for="score2">Nota 2</label>
<input class="form-control"  type="number" id="score2" wire:model="Score2" placeholder="Ingrese la segunda nota">
@error('Score2') <span class="text-danger">{{$message}}</span>@enderror
<label class="form-label"  for="score3">Nota 3</label>
<input class="form-control" type="number" id="score3" wire:model="Score3" placeholder="Ingrese la tercera nota">
@error('Score3') <span class="text-danger">{{$message}}</span>@enderror
</form>
      </div>
      <div class="modal-footer">
      <button class="btn btn-danger" wire:click.prevent="update()" type="button">Guardar</button>
      <button class="btn btn-danger close-btn" data-dismiss="modal" type="button">Cerrar</button>
      </div>
    </div>
  </div>
</div>
