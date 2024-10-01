<?php

namespace App\Http\Controllers;
use App\Services\InsertProd;
use App\Services\ListarProd;
use App\Services\Excluir;
use App\Services\Atualizar;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    protected $insertProd;
    protected $listarProd;
    protected $excluir;
    protected $atualizar;

    public function __construct(InsertProd $insertProd, ListarProd $listarProd, Excluir $excluir, Atualizar $atualizar){
       $this->insertProd = $insertProd;
       $this->listarProd = $listarProd;
       $this->excluir = $excluir;
       $this->atualizar = $atualizar;
    }

    public function Insert(Request $request){
        $nome = $request->input('_nome');
        $quant = $request->input('_quant');

        $insert = $this->insertProd->Insert($nome, $quant);

        if($insert == true){
            return view('dashboard');
            return "Sucesso";
            
          }else{
            return "erro";
            
          }

    }

    public function Listar(){
      $id = session()->get('idUser');

      $listar = $this->listarProd->Listar($id);

      if($listar == true){
       // return view('dashboard');
        //return "Sucesso"

        session()->put('listaProd',$listar);
        // view()->share('produtos', $listar);

        //var_dump($lista);
        //var_dump($listar);
        return view('listarTarefas',['produtos'=>$listar]);
      
      }else{
        return "erro";
        
      }
    }


   public function Excluir(Request $request){
      $id = $request->input('_id');

      //var_dump($id);

      $excluir = $this->excluir->Excluir($id);

      #atualiza a session
      $userId = session()->get('idUser');
      $listar = $this->listarProd->Listar($userId);
  
     
      session()->put('listaProd', $listar);
      
      return view('/delProd');
      ########################################
      

   }

   public function Atualizar(Request $request){
      $id = $request->input('_id');
      $nome = $request->input('_nome');
      $qnt = $request->input('_qnt');

      $atualizar = $this->atualizar->Atualizar($id,$nome,$qnt);
      
      $userId = session()->get('idUser');
      $listar = $this->listarProd->Listar($userId);
  
  
      session()->put('listaProd', $listar);
  
     
      return view('listarUpt', ['produtos' => $listar]);

   }





  }
