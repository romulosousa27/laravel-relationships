<?php

/*
 * Routes -  One To One
 */
$this->get('one-to-one', 'OneToOneController@OneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@OneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@OneToOneInsert');

Route::get('/', function () {
    return view('welcome');
});
