<?php
namespace App\Services;
use App\Models\ProductModel;
 


class Excluir{
    protected $productModel;

    public function __construct(ProductModel $productModel){
        $this->productModel = $productModel;
    }

    public function Excluir($id){
        $result = $this->productModel->Excluir($id);

    }
}
 