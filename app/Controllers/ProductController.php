<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ProductModel;
class ProductController extends BaseController
{
    private $product;
     public function __construct() 
    {
        $this->product = new \App\Models\ProductModel();
    }

    public function product($product)
    {
        echo $product;
    }
    public function jape()
    {
        $data['product'] = $this->product->findAll();
        return view('products', $data);
    }
    public function save($id = null){

        $id =$_POST['id'];
        $data = [
            'ProductName' => $this->request->getVar('ProductName'),
            'ProductDescription' => $this->request->getVar('ProductDescription'),
            'ProductCategory' => $this->request->getVar('ProductCategory'),
            'ProductQuantity' => $this->request->getVar('ProductQuantity'),
            'ProductPrice' => $this->request->getVar('ProductPrice'),
        ];
        if($id!= null)
        {
            $this->product->set($data)->where('id', $id)->update();
        }else
        {
            $this->product->save($data);
        }
        return redirect()->to('/product');
    }
    public function delete($id){
        $product= new ProductModel();
        $record = $product->find($id);

        if($record){
            $product->delete($id);
            return redirect()->to('/product');
        }
        else{
            return "record not found";
        }
    }

    public function edit($id)
    {
        $data=
        [
            'product' => $this->product->findAll(),
            'pro'=> $this->product->where('id',$id)->first(),
        ];
        return view('/products', $data);
    }
    public function index()
    {

    }
    
}
