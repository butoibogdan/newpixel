<?php

return [

	// info generale proiect
	'numeProiect' => 'Travel CMS',

	// dimensiuni crop imagini
   'width'        =>200,
   'height'       =>200,
   'master_layouts'=>'administrare.dashboard',
   'controller_link'=> 'AdminController\Pages\\',
   'tipuri_documente'=>[
       0=>'factura proforma',
       1=>'factura fiscala',
       2=>'chitanta',
       3=>'voucher'
       ]
];