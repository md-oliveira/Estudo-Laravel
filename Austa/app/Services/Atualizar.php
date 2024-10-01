<?php
namespace App\Services;
use App\Models\ProductModel;
 
class Atualizar{
    protected $productModel;

    public function __construct(ProductModel $productModel){
        $this->productModel = $productModel;
    }

    public function Atualizar($id,$nome,$qnt){
        $result = $this->productModel->Atualizar($id,$nome,$qnt);
    }



}