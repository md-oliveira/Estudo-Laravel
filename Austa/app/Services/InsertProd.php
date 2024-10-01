<?php
    namespace App\Services;
    use App\Models\ProductModel;



    class InsertProd{
       protected $productModel;
    
       
    public function __construct(ProductModel $productModel){
        $this->productModel = $productModel; 
      
    }

    public function Insert($nome, $quant){
        $result = $this->productModel->Insert($nome,$quant);

        //var_dump($result);

        if($result == true){
            return"liberado";
            
          }else{
            return"nop";
          }
    }







}
  
    
    
