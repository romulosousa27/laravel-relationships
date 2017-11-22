<?php

Route::get('/', function(){
    return "Laravel Relationship";
});

/*
 * Routes -  One To One
 */
$this->get('one-to-one', 'OneToOneController@OneToOne');
$this->get('one-to-one-inverse', 'OneToOneController@OneToOneInverse');
$this->get('one-to-one-insert', 'OneToOneController@OneToOneInsert');

/*
    Relacionamento 1 para muitos - One To Many
*/
$this->get('one-to-many', 'OneToManyController@OneToMany');


/* Rota padrão do Laravel
Route::get('/', function () {
    return view('welcome');
});
*/