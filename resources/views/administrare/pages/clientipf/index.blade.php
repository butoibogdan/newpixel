@extends('{!! Config::newpixel('master_layouts') !!}')

@section('clientipf')

    <h1>Clientipfs <a href="{{ url('/clientipf/create') }}" class="btn btn-primary pull-right btn-sm">Add New Clientipf</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($clientipfs as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('/clientipf', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/clientipf/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                        <a href="{{ url('/clientipf/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
