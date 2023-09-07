@extends('layouts.admin')

@section('main-content')
<div class="d-flex align-items-center justify-content-between">

    <h1 class="mb-0">Transcription de deces</h1>
    <a href="" class="btn btn-primary"><i class="fa fa-plus" aria-hidden="true"></i> </a>

    </div>
    <hr/>
    <div class=" table-responsive-sm"style="text-align:center;">


    <table class="table table-bordred ">
    <thead class="table-primary thead-light">
        <tr>
            <th>#</th>
            <th>Bureau d'etat civile</th>
            <th>Nature d'acte</th>
            <th>Année d'inscription</th>
            <th>Numéro d'acte </th>
            <th>Article</th>


        </tr>

    </thead>
    </table>
    </div>


    @endsection
