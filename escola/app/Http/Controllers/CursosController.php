<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Curso;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class CursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = Curso::get();
        return view('cursos.lista', ['cursos'=>$cursos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo()
    {
        return view('cursos.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $curso = new Curso();
        $curso = $curso->create($request->all());
        \Session::flash('mensagem_sucesso', 'Dados inseridos com sucesso!');
        return Redirect::to('cursos/novo');
    }

  /* /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     
    public function show($id)
    {
        //
    } */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function editar($id)
    {
       
        $curso = Curso::findOrFail($id);
        
        return view('cursos.formulario', ['curso'=>$curso]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id_curso)
    {
        $curso = Curso::findOrFail($id_curso);

        $curso->update($request->all());
        
        \Session::flash('mensagem_sucesso', 'Dados atualizados com sucesso!');
        return Redirect::to('cursos/'.$curso->id_curso.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id_curso)
    {
        $curso = Curso::findOrFail($id_curso);

        $curso->delete();

        \Session::flash('mensagem_sucesso', 'Dados excluidos com sucesso!');
        return Redirect::to('cursos/');
    }
}
