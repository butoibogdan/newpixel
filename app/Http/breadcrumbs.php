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

//Home > Regiuni >Edit
Breadcrumbs::register('edit', function($breadcrumbs, $regiuni) {
    $breadcrumbs->parent('regiuni');
    $breadcrumbs->push('Edit', route('edit', $regiuni->id));
});
