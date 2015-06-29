@extends('{!! Config::newpixel('master_layouts') !!}')

@section('clientipj')

    <h1>Clientipf</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $clientipf->id }}</td><td>{{ $clientipf->name }}</td>
            </tr>
        </table>
    </div>

@endsection
