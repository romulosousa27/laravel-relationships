<?php

Route::get('/', function(){
    return view('welcome');
});

// Relacionamento ONE TO ONE - Um Para Um
$this->get('one-to-one', 'OneToOneController@OneToOne');
$this->get('one-to-one-inverso', 'OneToOneController@OneToOneInverso');
$this->get('one-to-one-inserir', 'OneToOneController@OneToOneInserir');

//Relacionamento ONE TO MANY - Um Para Muitos (Pais/Estado)
$this->get('one-to-many', 'OneToManyController@OneToMany');

//Relacionamento MANY TO ONE - Muitos para Um (Estado/Pais)
$this->get('many-to-one', 'OneToManyController@ManyToOne');

//Relacionamento MANY TO ONE - Muitos para Um (Cidades)
$this->get('one-to-many-cidade', 'OneToManyController@OneToManyCidade');

$this->get('one-to-many-inserir', 'OneToManyController@OneToManyInserir');

// Relacionamento Has Many Through - Tem Muitos Através
$this->get('has-many-through' ,'OneToManyController@HasManyThrought');

//Relacionamento MANY TO MANY -  Muitos para Muitos.
$this->get('many-to-many', 'ManyToManyController@ManyToMany');
//Relacionamento MANY TO MANY -  Muitos para Muitos Inverso.
$this->get('many-to-many-inverso', 'ManyToManyController@ManyToManyInverso');