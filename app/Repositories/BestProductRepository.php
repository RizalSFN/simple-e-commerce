<?php

namespace App\Repositories;

use App\Models\BestProduct;

class BestProductRepository {

    protected $bestProduct;

    public function __construct(BestProduct $bestProduct)
    {   
        $this->bestProduct = $bestProduct;
    }

    public function getAll()
    {
        return $this->bestProduct->get();
    }

    public function create($data) 
    {
        $bestProduct = $this->bestProduct;

        $bestProduct->product_id = $data['product_id'];
        $bestProduct->status = $data['status'];

        $bestProduct->save();

        return $bestProduct->fresh();
    }

    public function update($data, $id)
    {
        $bestProduct = $this->bestProduct->find($id);

        $bestProduct->product_id = $data['product_id'];
        $bestProduct->status = $data['status'];

        $bestProduct->update();

        return $bestProduct;
    }

    public function delete($id)
    {
        $bestProduct = $this->bestProduct->find($id);
        $bestProduct->delete();

        return $bestProduct;
    }
}
?>