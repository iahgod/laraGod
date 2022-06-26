<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Tarefa;

class TarefasController extends Controller
{
    public function list(){
        $list = Tarefa::orderBy('id','desc')->get();
        //$list = Tarefa::where('resolvido',1)->get();

        $titulo = 'Listagem';
        return view('Tarefa.list', [
            'titulo' => $titulo,
            'tarefas' => $list
        ]);
    }
    public function add(){
        $titulo = 'Adição de tarefa';
        return view('Tarefa.add', [
            'titulo' => $titulo
        ]);
    }
    public function addAction(Request $request){

        $request->validate([
            'titulo' => 'required',
            'resolvido' => 'required'
            ]);

        $t = new Tarefa;
        $t->titulo = $request->titulo;
        $t->resolvido = $request->resolvido;
        $t->save();

        return redirect()->route('tarefas.list')
        ->with('success','Tarefa criada com sucesso.');
    }
    public function edit($id){
        $data = Tarefa::find($id);
        $titulo = 'Edição de tarefa '.$data->titulo;

        return view('Tarefa.edit', [
            'titulo' => $titulo,
            'tarefa' => $data
        ]);
    }
    public function editAction(Request $request, $id){
        $request->validate([
            'titulo' => 'required',
            'resolvido' => 'required'
            ]);

        $t = Tarefa::find($id);
        $t->titulo = $request->titulo;
        $t->resolvido = $request->resolvido;
        $t->save();

        return redirect()->route('tarefas.list')
        ->with('success','Tarefa editada com sucesso.');
    }
    public function del($id){
        $t = Tarefa::find($id);
        $t->delete();
        return redirect()->route('tarefas.list')
        ->with('success','Tarefa <b>'.$t->titulo.'</b> deletada com sucesso.');
    }

    public function status($id){
        $t = Tarefa::find($id);
        ($t->resolvido == 1) ? $t->resolvido = 0 : $t->resolvido = 1;

        $t->save();
        return redirect()->route('tarefas.list')
        ->with('success','Tarefa <b>'.$t->titulo.'</b> alterada com sucesso.');
    }
}
