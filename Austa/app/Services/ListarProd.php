<?php
namespace App\Services;
use App\Models\ProductModel;


class ListarProd{
    protected $productModel;


    public function __construct(ProductModel $productModel){
        $this->productModel = $productModel;
    }

    public function Listar($id){
        $result = $this->productModel->Listar($id);
    
        if($result == true){
            return $result;
            
          }else{
            return false;
          }
    
    }
}