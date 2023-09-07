@extends('layouts.admin')
@section('main-content')


<div class="d-flex align-items-center justify-content-between">

<h1 class="mb-0" style="text-align:center;" >Registre de mariage</h1>
<h2>Mentions Marginales de mariage
    </h2>
<a href="" class="btn btn-primary">Ajouter </a>

</div>
<hr/>
<div class=" table-responsive-sm"style="text-align:center;">


    <table class="table table-bordred ">
        <thead class="table-primary thead-light">
    <tr>
        <th>#</th>
        <th>Bureau d'etat civile</th>
        <th>Type de registre</th>
        <th>Date de registre </th>
        <th>Numéro de registre</th>
        <th>Article</th>

    </tr>

</thead>
</table>
</div>


@endsection
