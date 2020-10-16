<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContatoController extends Controller
{
    public function lista()
    {
        $html = '<h1>Listagem de contatos com Laravel</h1>';
        $html .= '<ul>';
        $contatos = DB::select('select * from contato');
        foreach ($contatos as $c) {
            $html .= '<li> Nome: '. $c->nome .',
            telefone: '. $c->telefone .',
            email: '. $c->email . '</li>';
        }

        $html .= '</ul>';
        return $html;
    }

    public function home()
    {
        return view('admin.pages.contato.teste');
    } 
}
