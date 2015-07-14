<address>
    @foreach($dateclient as $date)
    <strong>Nume client:{{$date->nume}}</strong><br/>
    Judet: {{$date->judet}}<br/>
    Oras: {{$date->oras}}<br/>
    Adresa: {{$date->adresa}}<br/>
    Serie CI: {{$date->serieci}}<br/>
    Numar CI: {{$date->numarci}}<br/>
    CNP: {{$date->cnp}}<br/>
    @endforeach
</address>

