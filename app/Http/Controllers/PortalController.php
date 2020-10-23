<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    //
    public $teams =[
        'Desportivo das Aves',
        'Moreirense',
        'Famalicão'
    ];
    public function index ()
    {
    	return view('entrada');
    }
   public function listarEquipas (Request $request) {
    //Vamos verificar se no objeto request existe a propriedade chave
    if (isset($request->chave)) {
        if (is_numeric($request->chave) && $request->chave>=0 && $request->chave<count($this->teams)) {
            //obter o nome da equipa pretendida através do ID
            $equipa = $this->teams[$request->chave];
        }
        else {
            $equipa = "Não foi possivel obter a info pretendida.";
        }
        return view('listar-equipas', ['equipa' =>$equipa]);
    }
    else {
        return view('listar-equipas', ['equipas'=>$this->teams]);
    }   

}
    public function mostrarForm() {
        return view('contacto');
    }
    public function processarForm (Request $request) {
        $nome = $request->nome;
        $morada = $request->morada;
        $automovel = $request ->automovel;

        return view('form-enviado',[   
            'nome' =>$nome,
            'morada'=>$morada,
            'automovel'=>$automovel
        ]);
    }


}
