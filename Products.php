<?php
class Products
{
    

    public $products = [
        [
            "id" => 1,
            "name" => "Product 1",
            "image" => "https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80",
            "price" => 10,
        ],
        [
            "id" => 2,
            "name" => "Product 2",
            "image" => "https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80",
            "price" => 20,
        ],
        [
            "id" => 3,
            "name" => "Product 3",
            "image" => "https://images.unsplash.com/photo-1511499767150-a48a237f0083?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1160&q=80",
            "price" => 30,
        ],
    ];

    // 新增產品
    public function addProduct($product){
        array_push($this->products,$product);
    }

    // 查詢產品(id)
    public function findProduct($id)
    {
      $key = array_search($id, array_column($this->products, 'id'));
      return $this->products[$key];
    }
}

return new Products();
