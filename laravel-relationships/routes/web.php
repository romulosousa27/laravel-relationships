<?php

Route::get('/', function(){
    return "Laravel Relationship";
});

// Relacionamento ONE TO ONE - Um Para Um
$this->get('one-to-one', 'OneToOneController@OneToOne');
$this->get('one-to-one-inverso', 'OneToOneController@OneToOneInverso');
$this->get('one-to-one-inserir', 'OneToOneController@OneToOneInserir');

//Relacionamento ONE TO MANY - Um Para Muitos
$this->get('one-to-many', 'OneToManyController@OneToMany');
//Relacionamento MANY TO ONE - Muitos para Um
$this->get('many-to-one', 'OneToManyController@ManyToOne');