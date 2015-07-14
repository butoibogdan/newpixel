@extends('{!! Config::newpixel('master_layouts') !!}')

@section('facturiproduse')

    <h1>Facturiproduses <a href="{{ url('/facturiproduse/create') }}" class="btn btn-primary pull-right btn-sm">Add New Facturiproduse</a></h1>
    <div class="table">
        <table class="table table-bordered table-striped table-hover">
            <tr>
                <th>SL.</th><th>Name</th><th>Actions</th>
            </tr>
            {{-- */$x=0;/* --}}
            @foreach($facturiproduses as $item)
                {{-- */$x++;/* --}}
                <tr>
                    <td>{{ $x }}</td>
                    <td>
                        <a href="{{ url('/facturiproduse', $item->id) }}">{{ $item->name }}</a>
                    </td>
                    <td>
                        <a href="{{ url('/facturiproduse/edit/'.$item->id) }}"><button type="submit" class="btn btn-primary btn-xs">Edit</button></a>  
                        <a href="{{ url('/facturiproduse/destroy/'.$item->id) }}"><button type="submit" class="btn btn-danger btn-xs">Delete</button></a>  
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection
