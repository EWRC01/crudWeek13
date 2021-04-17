<x-slot name="header">

<h2>Ejemplo CRUD</h2>
</x-slot>
<div class="container">
@include('livewire.create')
@include('livewire.edit')
@if (session()->has('message'))

<div class="alert alert-success alert-dismissible fade-show" role="alert">

{{session('message')}}
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">x</span>
</button>
</div>

@endif
<table class="table table-dark table-bordered">

<thead>

<tr>

<th>ID</th>
<th>Nombre</th>
<th>Apellido</th>
<th>Nota 1</th>
<th>Nota 2</th>
<th>Nota 3</th>
<th>Promedio</th>
<th>Observaciones</th>
<th>Acciones</th>

</tr>
</thead>
<tbody>


@foreach($students as $student)
<tr>

<td>{{ $student->id }}</td>
<td>{{ $student->firstName }}</td>
<td>{{ $student->lastName }}</td>
<td>{{ $student->Score1 }}</td>
<td>{{ $student->Score2 }}</td>
<td>{{ $student->Score3 }}</td>

<td>{{ $promedio=round(($student->Score1 + $student->Score2 + $student->Score3)/3, 2)}}</td>

@if ($promedio >= 7)
<td>Aprobado</td>
@else
<td>Necesita Mejorar</td>
@endif




<td><button class="btn btn-info text-white" data-toggle="modal" data-target="#myModalEdit" type="button" wire:click="edit({{$student -> id}})">Editar</button>
<button class="btn btn-danger text-white" wire:click="delete({{$student -> id}})">Eliminar</button></td>


@endforeach
</tbody>
</table>

</div>