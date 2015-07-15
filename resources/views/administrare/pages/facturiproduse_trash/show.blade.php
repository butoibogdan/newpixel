@extends('{!! Config::newpixel('master_layouts') !!}')

@section('%%crudName%%')

    <h1>Facturiproduse</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $facturiproduse->id }}</td><td>{{ $facturiproduse->name }}</td>
            </tr>
        </table>
    </div>

@endsection
