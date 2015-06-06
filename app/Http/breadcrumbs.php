<?php

// Home
Breadcrumbs::register('home', function($breadcrumbs) {
    $breadcrumbs->push('Home', url('admin'));
});

// Home > Regiuni
Breadcrumbs::register('regiuni', function($breadcrumbs) {
    $breadcrumbs->parent('home');
    $breadcrumbs->push('Regiuni', url('admin/regiuni'));
});

//Home > Regiuni > Create
Breadcrumbs::register('createregiuni', function($breadcrumbs) {
    $breadcrumbs->parent('regiuni');
    $breadcrumbs->push('Creaza Regiuni', url('admin/regiuni/create'));
});

//Home > Regiuni > Edit
Breadcrumbs::register('editreg', function($breadcrumbs, $regiuni) {
    $breadcrumbs->parent('regiuni');
    $breadcrumbs->push('Editare Regiuni', route('edit', $regiuni->id));
});

//Home > Regiuni > Detalii
Breadcrumbs::register('detaliireg', function($breadcrumbs, $regiuni) {
    $breadcrumbs->parent('regiuni');
    $breadcrumbs->push('Detalii Regiuni', route('showreg', $regiuni->id));
});
