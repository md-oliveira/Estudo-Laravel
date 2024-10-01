<?php
    namespace App\Services;

    use App\Models\UserModel;

    class Verificacao{

        protected $userModel;

        public function __construct(UserModel $userModel){
            $this->userModel = $userModel;
        }


        public function VerificaLogin($user,$senha){
          $result = $this->userModel->VerificaUsuario($user, $senha);
        //  return $result;
          //var_dump($result);

          if($result == true){
            return"liberado";
            
          }else{
            return"nop";
          }
        }
    }

