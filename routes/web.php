<?php

/*
One to One
*/

Route::get('/', function () {
    return view('welcome');
});

$this->get('one-to-one', 'OneToOneController@oneToOne');
