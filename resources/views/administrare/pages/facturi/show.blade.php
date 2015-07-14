@extends('administrare.dashboard')

@section('facturi')

    <h1>Facturi</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $facturi->id }}</td><td>{{ $facturi->name }}</td>
            </tr>
        </table>
    </div>

@endsection
