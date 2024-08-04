<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\ProductReviewRepository;
use Illuminate\Support\Facades\Validator;
use Exception;
use InvalidArgumentException;

class ProductReviewService {

    protected $productReviewRepository;

    public function __construct(ProductReviewRepository $productReviewRepository)
    {
        $this->productReviewRepository = $productReviewRepository;
    }

    public function getAllProductReview()
    {
        return $this->productReviewRepository->getAll();
    }

    public function getProductReviewById($id)
    {
        return $this->productReviewRepository->getById($id);
    }

    public function getProductReviewByProductId($id)
    {
        return $this->productReviewRepository->getByProductId($id);
    }

    public function createNewProductReview($data)
    {
        $validator = Validator::make($data, [
            'product_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'review' => 'required',
            'star' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->productReviewRepository->create($data);

        return $result;
    }

    public function updateProductReview($data, $id)
    {
        $validator = Validator::make($data, [
            'product_id' => 'required|numeric',
            'user_id' => 'required|numeric',
            'review' => 'required',
            'star' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedProductReview = $this->productReviewRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::commit();

        return $updatedProductReview;
    }
}

?>