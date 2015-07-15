@extends('administrare.dashboard_body')

@section('voucher')

    <h1>Voucher</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $voucher->id }}</td><td>{{ $voucher->name }}</td>
            </tr>
        </table>
    </div>

@endsection
