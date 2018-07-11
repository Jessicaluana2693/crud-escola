<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Database\Eloquent\Model;
use App\Professor;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Collective\Html\Eloquent\FormAccessible;

class ProfessoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $professores = Professor::get();
        return view('professores.lista', ['professores'=>$professores]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function novo()
    {
        return view('professores.formulario');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function salvar(Request $request)
    {
        $professor = new Professor();
        $professor = $professor->create($request->all());
        \Session::flash('mensagem_sucesso', 'Dados inseridos com sucesso!');
        return Redirect::to('professores/novo');
    }

    public function editar($id)
    {
       
        $professor = Professor::findOrFail($id);
        
        return view('professores.formulario', ['professor'=>$professor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function atualizar(Request $request, $id_professor)
    {
        $professor = Professor::findOrFail($id_professor);

        $professor->update($request->all());
        
        \Session::flash('mensagem_sucesso', 'Dados atualizados com sucesso!');
        return Redirect::to('professores/'.$professor->id_professor.'/editar');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function deletar($id_professor)
    {
        $professor = Professor::findOrFail($id_professor);

        $professor->delete();

        \Session::flash('mensagem_sucesso', 'Dados excluidos com sucesso!');
        return Redirect::to('professores/');
    }

}
