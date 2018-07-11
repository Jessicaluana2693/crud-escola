<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

//Route::get('cadastrar', 'CadastrarController@index');


Route::group(['middleware'=>['web']], function () {
    Route::get('/', 'HomeController@index');

   

    Route::get('/home', 'HomeController@index')->name('home');

    Route::get('alunos', 'AlunosController@index');
    Route::get('alunos/novo', 'AlunosController@novo');
    Route::get('alunos/{aluno}/editar', 'AlunosController@editar');
    Route::post('alunos/salvar', 'AlunosController@salvar');
    Route::patch('alunos/{aluno}', 'AlunosController@atualizar');
    Route::delete('alunos/{aluno}', 'AlunosController@deletar');
    
    Route::get('cursos', 'CursosController@index');
    Route::get('cursos/novo', 'CursosController@novo');
    Route::get('cursos/{id_curso}/editar', 'CursosController@editar');
    Route::post('cursos/salvar', 'CursosController@salvar');
    Route::patch('cursos/{curso}', 'CursosController@atualizar');
    Route::delete('cursos/{curso}', 'CursosController@deletar');

    Route::get('professores', 'ProfessoresController@index');
    Route::get('professores/novo', 'ProfessoresController@novo');
    Route::get('professores/{id_professor}/editar', 'ProfessoresController@editar');
    Route::post('professores/salvar', 'ProfessoresController@salvar');
    Route::patch('professores/{professor}', 'ProfessoresController@atualizar');
    Route::delete('professores/{professor}', 'ProfessoresController@deletar');
});
