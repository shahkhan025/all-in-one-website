<?php


namespace App\classes;


class Product
{
    private $product;
    private $products;

    public function getAllProduct()
    {
        return[
            0 => [
                'id' => 1,
                'name' => 'New t-Shirt',
                'price' => 'Tk. 2550',
                'description' => 'This Is product description About new tshirt available good quality and cheap price',
                'image' => 'Ts1.jpg',
            ],
            1 => [
                'id' => 2,
                'name' => 'New Men Shoes',
                'price' => 'Tk. 3050',
                'description' => 'This Is Shoes description About new shoes available good quality and cheap price',
                'image' => 's1.jpg',
            ],
            2 => [
                'id' => 3,
                'name' => 'New Jeans pant',
                'price' => 'Tk. 2250',
                'description' => 'This Is jeans product detail About new jeans available good quality and cheap price',
                'image' => 'j3.jpg',
            ],
            3 => [
                'id' => 4,
                'name' => 'NewShirt for men',
                'price' => 'Tk. 1550',
                'description' => 'This Is sunglasses description About new sunglasses available good quality and cheap price',
                'image' => 'sun1.jpg',
            ]
        ];
    }
    public function getProductById($id)
    {
        $this->products = $this->getAllProduct();
        foreach ($this->products as $product)
        {
            if ($product['id']== $id)
                return $product;
        }
    }

}