@extends('administrare.dashboard')

@section('clienti')

    <h1>Clienti</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $clienti->id }}</td><td>{{ $clienti->name }}</td>
            </tr>
        </table>
    </div>

@endsection
