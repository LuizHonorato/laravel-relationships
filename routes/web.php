<?php

/*
One to One
*/

Route::get('/', function () {
    return view('welcome');
});

$this->get('one-to-one', 'OneToOneController@oneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@oneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@oneToOneInsert');
