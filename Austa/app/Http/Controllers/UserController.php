<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Services\Verificacao;
use App\Services\CriaUsu;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    protected $verificacao;
    protected $criaUsu;
    
    public function __construct(Verificacao $verificacao, CriaUsu $criaUsu){
        $this->verificacao = $verificacao;
        $this->criaUsu = $criaUsu;
    }

    public function Verificar(Request $request){
        $user = $request->input('_usuario');
        $senha = $request->input('_senha');

        $login = $this->verificacao->VerificaLogin($user,$senha);
        
        //var_dump($login);

          if($login == 'liberado'){
            return view('dashboard');
            
          }else{
            return view('erro');
            
          }
    }

    public function CriaUsu(Request $request){
      $user = $request->input('_nome');
      $senha = $request->input('_senha');

      $login = $this->criaUsu->CriaUsu($user,$senha);

      return view('/dashboard');
    }


    public function Sair(Request $request){
     
    Auth::logout();


    $request->session()->invalidate();
    $request->session()->regenerateToken();

    return redirect('/');
}
    


}
