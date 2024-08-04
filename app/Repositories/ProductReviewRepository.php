<?php

namespace App\Repositories;

use App\Models\ProductReview;

class ProductReviewRepository {

    protected $productReview;

    public function __construct(ProductReview $productReview)
    {
        $this->productReview = $productReview;
    }

    public function getAll()
    {
        return $this->productReview->get();
    }

    public function getById($id)
    {
        return $this->productReview->find($id);
    }

    public function getByProductId($id)
    {
        return $this->productReview->where('product_id', $id)->first();
    }

    public function create($data)
    {
        $productReview = $this->productReview;

        $productReview->product_id = $data['product_id'];
        $productReview->user_id = $data['user_id'];
        $productReview->review = $data['review'];
        $productReview->star = $data['star'];

        $productReview->save();

        return $productReview->fresh();
    }

    public function update($data, $id)
    {
        $productReview = $this->productReview;

        $productReview->product_id = $data['product_id'];
        $productReview->user_id = $data['user_id'];
        $productReview->review = $data['review'];
        $productReview->star = $data['star'];
        
        $productReview->update();

        return $productReview;
    }
}

?>