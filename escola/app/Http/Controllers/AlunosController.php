<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Aluno;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Database\Eloquent\Model;
use Collective\Html\Eloquent\FormAccessible;

class AlunosController extends Controller
{
    public function index(){
        $alunos = Aluno::get();
        return view('alunos.lista', ['alunos'=>$alunos]);
    }

    public function novo(){
        return view('alunos.formulario');
    }

    public function salvar(Request $request){
       
        $aluno = new Aluno();
        $aluno = $aluno->create($request->all());
        \Session::flash('mensagem_sucesso', 'Dados inseridos com sucesso!');
        return Redirect::to('alunos/novo');
    }

    public function editar($id){
        
        $aluno = Aluno::findOrFail($id);
        
        return view('alunos.formulario', ['aluno'=>$aluno]);
    }

    public function atualizar($id, Request $request){
        $aluno = Aluno::findOrFail($id);

        $aluno->update($request->all());
        
        \Session::flash('mensagem_sucesso', 'Dados atualizados com sucesso!');
        return Redirect::to('alunos/'.$aluno->id.'/editar');
    }

    public function deletar($id){
        $aluno = Aluno::findOrFail($id);

        $aluno->delete();

        \Session::flash('mensagem_sucesso', 'Dados excluidos com sucesso!');
        return Redirect::to('alunos/');
    } 
}
