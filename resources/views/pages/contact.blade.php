@extends('assets.header')

@section('content')

<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />


<div class="p-5">
    <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><span class="material-symbols-outlined">
            account_circle
            </span></span>
        <input type="text" class="form-control" placeholder="Nombre y Apellido" aria-label="Username" aria-describedby="basic-addon1">
      </div>
      
      <div class="input-group mb-3">
        <span class="input-group-text" id="basic-addon1"><span class="material-symbols-outlined">
            mail
            </span></span>
        <input type="text" class="form-control" placeholder="Correo electronico
        " aria-label="Username" aria-describedby="basic-addon1">
      </div>
      <div class="input-group">
        <span class="input-group-text"><span class="material-symbols-outlined">
            chat
            </span></span>
        <textarea class="form-control" placeholder="Mensaje" aria-label="With textarea"></textarea>
      </div>
</div>

@endsection