<?php

namespace App\Models;

use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class ProductModel extends Model
{
    use HasFactory;

    protected $table = 'produtos';

    public function Insert($nome , $quant){
        $n = $nome;
        $q = $quant;

        $id = session()->get('idUser');

        /*var_dump($n);
        var_dump($q);
        var_dump($id);*/

        $query = "INSERT INTO produtos (nome, qnt, idUser) VALUES (:n , :q , :id)";
        $result = DB::insert($query, ['n' => $n, 'q' => $q , 'id' => $id ]);

        
        


    if(!empty($result)){
     //return $result[0];
    } 

    return false;
}


    public function Listar($id){
        $i = $id;

        $query = "SELECT*FROM produtos WHERE idUser = :i";
        $result = DB::select($query,['i'=>$id]);

        if(!empty($result)){
            
                       
            return $result;
           } 
       
           return false;

    }


    public function Excluir($id){
        $i = $id;

        //var_dump($i);

        $sql = "DELETE  FROM produtos WHERE id = :i";
        $result = DB::delete($sql,['i'=>$id]);
        
        if(!empty($result)){
            
                       
            return true;
           } 
       
           return false;
    }


    public function Atualizar($id,$nome,$qnt){
        $i = $id;
        $n = $nome;
        $q = $qnt;
        
        //var_dump($i, $n, $q);
        
        $sql = "UPDATE produtos SET nome = :n , qnt = :q WHERE id = :i ";
        $result = DB::update($sql,['i'=>$id , 'n'=>$nome , 'q' => $qnt]);
        
    }


    






}
