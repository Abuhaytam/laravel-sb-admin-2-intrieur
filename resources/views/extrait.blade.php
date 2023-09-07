@extends('layouts.admin')
@section('main-content')


<div class="d-flex align-items-center justify-content-between">

<h1 class="mb-0">Extrait de naissance</h1>
<a href="" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> </a>

</div>
<hr/>
<div class=" table-responsive-sm"style="text-align:center;">


    <table class="table table-bordred ">
        <thead class="table-primary thead-light">
    <tr>
        <th>#</th>
        <th>Nom</th>
        <th>Prenom</th>
        <th>Né(é)le</th>
        <th>Naissance(lettres) </th>
        <th>naissance (chiffres)</th>
        <th>Ville de naissance</th>
        <th>sexe</th>
        <th>Nationalité</th>
        <th>Nom pere</th>
        <th>Nom mere</th>
        <th>MGD</th>
        <th>Certifié</th>
        <th>Bureau</th>
        <th>Lieu</th>
        <th>Date signature</th>

    </tr>

</thead>
</table>
</div>


@endsection
