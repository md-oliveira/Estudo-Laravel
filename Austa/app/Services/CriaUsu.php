<?php
namespace App\Services;
use App\Models\UserModel;
 

class CriaUsu{
    
    protected $userModel;

    public function __construct(UserModel $userModel){
        $this->userModel = $userModel;
    }
    
    
    public function CriaUsu($nome, $senha){
        $result = $this->userModel->CriaUsu($nome, $senha);
    }
}