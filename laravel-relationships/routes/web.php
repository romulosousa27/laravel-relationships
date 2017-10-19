<?php

/*
 * Routes -  One To One
 */
$this->get('one-to-one', 'OneToOneController@OneToOne');

Route::get('/', function () {
    return view('welcome');
});
