<?php
namespace App\classes;
class Product
{
    protected $products=[];
public function getAllProduct()
{
    return[
        0=>[
            'id' => 1,
            'name' => 'T-shirt',
            'category' => 'Man Fashion',
            'Brand' => 'Yellow',
            'price' => '3500',
            'description' => 'Very brautiful T-Shirt',
            'image' => 'p1.jpg'
        ],
        1=>[
            'id' => 2,
            'name' => 'Mobile',
            'category' => 'Electronics',
            'Brand' => 'Realme',
            'price' => '12000',
            'description' => ' Excellent Mobile',
            'image' => 'p2.jpg'
        ],
        2=>[
            'id' => 3,
            'name' => 'Smart Watch',
            'category' => 'Man Fashion',
            'Brand' => 'Huawei',
            'price' => '3900',
            'description' => ' Really useful watch',
            'image' => 'p3.jpg'
        ],
    ];
}
public function getProductById($id)
{
  $this->products = $this->getAllProduct();
  foreach($this->products as $product)
  {
      if($product['id'] == $id)
      {
          return $product;
      }
  }
}

}