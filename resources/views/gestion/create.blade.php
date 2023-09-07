@extends('layouts.app')

@section('main-content')


<h1 class="mb-0">Ajouter citoyen</h1>
<hr/>
<form action="{{route('gestion.store')}}" method="post" enctype="multipart/form-data">
@csrf

<div class="row mb-3">
    <div class="col">
        <input type="text" name="nom" class="form-control" placeholder="Nom">

    </div>
    <div class="col">
        <input type="text" name="nom" class="form-control" placeholder="Nom">

    </div>
    <div class="col">
        <input type="text" name="nom" class="form-control" placeholder="Nom">

    </div>
    <div class="col">
        <input type="text" name="nom" class="form-control" placeholder="Nom">

    </div>
</div>
<div class="row">
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Enregistrer</button>

    </div>

</div>
</form>
@endsection
