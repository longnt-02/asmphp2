<?php
    namespace App\Controllers;
    use App\Controllers\BaseController;
    use App\Models\Product;



    class ProductController extends BaseController{
        public function index(){
            // $product = new Product; 
            // return $product->table;
            //hiển thị danh sách sản phẩm bằng reder() của bladeOne
            $viewName='product.index';
            $data=[
                
            ];
            return $this->render($viewName,$data);

            
            
        }
        public function getProducts(){
            $viewName='product.list';
            $data = [
                'array' => [
                    ['id'=>1,'name'=>'Váy dài','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng'], 
                    ['id'=>2,'name'=>'Chân váy','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng'], 
                    ['id'=>3,'name'=>'Áo dài','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng']
                ],
                'products'=> Product::all()//Lấy ra tất cả bản ghi dưới dạng 1 collection
            ];
            // $data=[
                
            // ];
            return $this->render($viewName,$data);
        }
        public function addProduct(){
            $viewName = 'product.create';
            $data=[];
            return $this->render($viewName,$data);
        }
        public function detailProduct($id){
            $viewName='product.detail';
            
            $data = [
                'array' => [
                    ['id'=>1,'name'=>'Váy dài','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng'], 
                    ['id'=>2,'name'=>'Chân váy','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng'], 
                    ['id'=>3,'name'=>'Áo dài','price'=>'200000', 'image_url'=>'abc.jqg', 'category_id'=>'1', 'status'=>'Còn hàng']
                ]
            ];
            return $this->render($viewName,$data);
        }
    }
?>