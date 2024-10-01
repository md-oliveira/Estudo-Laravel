<?php

namespace App\Models;
use GuzzleHttp\Psr7\Query;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table ='users';

    protected $fillable = ['id','nome', 'senha'];

    public function VerificaUsuario($usuario, $senha){
        $u = $usuario;
        $s =$senha;

        //var_dump($u);
        //var_dump($s);    
        
        $query = "SELECT * FROM users WHERE nome =:u AND senha =:s ";
        $result = DB::select($query, ['u' => $u, 's' => $s]);
        


       if(!empty($result)){
              
            $result = $result[0];
            
            
            session(['idUser' => $result->id]);
        
            //var_dump(session()->get('idUser'));
            






        return $result;
       } 

       return false;


    }


    public function CriaUsu($usuario, $senha){
        $u = $usuario;
        $s = $senha;

        //var_dump($u);
        //var_dump($s);

        $sql  ="SELECT*FROM users WHERE nome = :u AND senha = :s";
        $result = DB::select($sql, ['u' => $u, 's' => $s]);

        if(!empty($result)){
           
        }else{
            $u = $usuario;
            $s = $senha;
    
            $sql  ="INSERT INTO users (nome , senha) VALUES (:u ,:s)";
            $result = DB::insert($sql, ['u' => $u, 's' => $s]);

           

           
    
        }


    }





}
