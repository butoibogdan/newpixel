<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Example 1</title>
        <link type="text/css" href="{{asset('backend/invoice/style.css')}}" rel="stylesheet">
    </head>

    <body>
        <div id='wattermark'><p>PREVIEW</p></div>
        <div class="continut" style="page-break-after:always;">
            <header class="clearfix">
                <table>
                    <tr>
                        <td>
                            <div class="datefact">
                                Serie Factura: {{$seriefactura}}<br/>
                                Numar Factura: {{$numarfactura}}<br/>
                                Data Factura: {{$datafactura}}<br/>
                            </div>  
                        </td>
                        <td>
                            <div id="logo">
                                <img src="{{URL::asset('backend/invoice/logo.png')}}">
                            </div>
                        </td>
                    </tr>
                </table>
                <h1>
                    @if($tipfactura==0)
                    FACTURA PROFORMA
                    @elseif($tipfactura==1)
                    FACTURA FISCALA
                    @endif
                </h1>

                <table>
                    <tr>
                        <td>
                            <div id="project">
                                <div><span>PROJECT</span> Website development</div>
                                <div><span>CLIENT</span> John Doe</div>
                                <div><span>ADDRESS</span> 796 Silver Harbour, TX 79273, US</div>
                                <div><span>EMAIL</span> <a href="mailto:john@example.com">john@example.com</a></div>
                                <div><span>DATE</span> August 17, 2015</div>
                                <div><span>DUE DATE</span> September 17, 2015</div>
                            </div>
                        </td>
                        <td>
                            @if($client==1)
                            <div id="company" class="clearfix">
                                <div>Nume: {{$numeclient}}</div>
                                <div>Adresa: {{$adresa}}</div>
                                <div>Judet: {{$judet}}, Oras: {{$oras}}</div>
                                <div>Serie CI: {{$serieci}} Nr: {{$numarci}}</div>
                                <div>CNP: {{$cnp}}</div>
                            </div>
                            @elseif($client==0)
                            <div id="company" class="clearfix">
                                <div>Nume soc: {{$numeclient}}</div>
                                <div>Adresa: {{$adresa}}</div>
                                <div>Judet: {{$judet}}, Oras: {{$oras}}</div>
                                <div>CUI: {{$cui}}</div>
                                <div>CIF: {{$cif}}</div>
                                <div>IBAN: {{$iban}}</div>
                                <div>Banca: {{$banca}}</div>
                            </div>
                            @endif
                        </td>
                    </tr>
                </table>
            </header>
            <main>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="desc">PRODUS</th>
                            <th>QTY</th>
                            <th>PRET</th>
                            <th>TVA</th>
                            <th>TOTAL</th>
                        </tr>
                    </thead>
                    <tbody>
                        @for($i=0;$i<$contor;$i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td class="desc">{{$produse[$i]}}</td>
                            <td class="qty">{{$cantitate[$i]}}</td>
                            <td class="total">{{$valoare[$i]}}</td>
                            <td class="total">{{$tva[$i]}}</td>
                            <td class="total">{{$valoare[$i]+$tva[$i]}}</td>
                        </tr>
                        @endfor
                        <tr>
                            <td colspan="4">SUBTOTAL</td>
                            <td class="total">$5,200.00</td>
                        </tr>
                        <tr>
                            <td colspan="4">TAX 25%</td>
                            <td class="total">$1,300.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="grand total">GRAND TOTAL</td>
                            <td class="grand total">$6,500.00</td>
                        </tr>
                    </tbody>
                </table>
                <div id="notices">
                    <div>NOTICE:</div>
                    <div class="notice">A finance charge of 1.5% will be made on unpaid balances after 30 days.</div>
                </div>
            </main>
            <footer>
                Invoice was created on a computer and is valid without the signature and seal.
            </footer>
        </div>
    </body>
</html>