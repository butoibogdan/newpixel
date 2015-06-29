@extends('{!! Config::newpixel('master_layouts') !!}')

@section('clientipj')

    <h1>Clientipj</h1>
    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>ID.</th><th>Name</th>
            </tr>
            <tr>
                <td>{{ $clientipj->id }}</td><td>{{ $clientipj->name }}</td>
            </tr>
        </table>
    </div>

@endsection
