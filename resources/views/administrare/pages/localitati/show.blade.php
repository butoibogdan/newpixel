@extends('administrare.dashboard')

@section('localitati')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>localitati</h1>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID.</th><th>Name</th>
                                </tr>
                                <tr>
                                    <td>{{ $localitati->id }}</td><td>{{ $localitati->name }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection