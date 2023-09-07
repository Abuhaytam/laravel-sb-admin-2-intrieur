@extends('layouts.admin')
@section('main-content')


<div class="d-flex align-items-center justify-content-between">

<h1 class="mb-0">Liste des citoyens</h1>
<a href="{{route('gestion.create')}}" class="btn btn-primary">Ajouter </a>

</div>
<hr/>
<div class=" table-responsive-sm"style="text-align:center;">


    <table class="table table-bordred ">
        <thead class="table-primary thead-light">
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Numero d'extrait</th>
        <th>Date de naissance</th>

    </tr>

</thead>
</table>
</div>


@endsection
