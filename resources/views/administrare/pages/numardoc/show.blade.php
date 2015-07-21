@extends('administrare.dashboard')

@section('numerefacturi')

    <h1>Numerefacturi</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $numerefacturi->id }}</td><td>{{ $numerefacturi->name }}</td>
            </tr>
        </table>
    </div>

@endsection
