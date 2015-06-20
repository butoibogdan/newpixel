@extends('administrare.dashboard_body')

@section('oferte')

    <h1>Ofertestatice</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $ofertestatice->id }}</td><td>{{ $ofertestatice->name }}</td>
            </tr>
        </table>
    </div>

@endsection
