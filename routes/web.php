<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){
    $this->get('/', 'AdminController@index')->name('admin.home');
    $this->get('pacientes', 'PacienteController@index')->name('admin.pacientes');
    $this->get('balance', 'BalanceController@index')->name('admin.balance');
});


$this->get('/', 'Site\SiteController@index');



Auth::routes();

