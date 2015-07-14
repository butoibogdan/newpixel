@extends('administrare.dashboard')

@section('facilitati')

    <h1>Facilitati</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $facilitati->id }}</td><td>{{ $facilitati->name }}</td>
            </tr>
        </table>
    </div>

@endsection
