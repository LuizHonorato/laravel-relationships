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

//One to many
$this->get('one-to-many', 'OneToManyController@oneToMany');
$this->get('many-to-one', 'OneToManyController@manyToOne');
$this->get('one-to-many-two', 'OneToManyController@oneToManyTwo');
$this->get('one-to-many-insert', 'OneToManyController@oneToManyInsert');
$this->get('one-to-many-insert-two', 'OneToManyController@oneToManyInsertTwo');
$this->get('has-many-through', 'OneToManyController@hasManyThrough');
