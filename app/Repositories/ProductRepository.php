<?php 

namespace App\Repositories;

use App\Models\Product;

class ProductRepository {

    protected $product;

    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    public function getAll() 
    {
        return $this->product->get();
    }

    public function getById($id) 
    {
        return $this->product->find($id);
    }

    public function create($data) 
    {
        $product = $this->product;

        $product->name = $data['name'];
        $product->stok = $data['stok'];
        $product->description = ['description'];
        $product->price = $data['price'];
        $product->photo = $data['photo'];
        $product->seller_id = $data['seller_id']; // ubah dengan mengambil id dari authentikasi
        $product->status = $data['status'];

        $product->save();

        return $product->fresh();
    }

    public function update($data, $id)
    {
        $product = $this->product->find($id);

        $product->name = $data['name'];
        $product->stok = $data['stok'];
        $product->description = $data['description'];
        $product->price = $data['price'];
        $product->photo = $data['photo'];
        
        $product->update($data);

        return $product;
    }

    public function updateStatus($data, $id) 
    {
        $product = $this->product->find($id);

        $product->status = $data['status'];

        $product->update($data);

        return $product;
    }
}

?>