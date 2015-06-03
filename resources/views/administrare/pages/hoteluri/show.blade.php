@extends('administrare.dashboard_body')

@section('hoteluri')
    <div class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>

                    <div class="panel-body">
                        <h1>hoteluri</h1>
                        <div class="table-responsive">
                            <table class="table">
                                <tr>
                                    <th>ID.</th><th>Name</th>
                                </tr>
                                <tr>
                                    <td>{{ $hoteluri->id }}</td><td>{{ $hoteluri->name }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection