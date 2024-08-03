<?php

namespace App\Services;

use App\Repositories\BestProductRepository;
use Exception;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use InvalidArgumentException;

class BestProductService {

    protected $bestProductRepository;

    public function __construct(BestProductRepository $bestProductRepository)
    {
        $this->bestProductRepository = $bestProductRepository;
    }

    public function getBestProduct()
    {
        return $this->bestProductRepository->getAll();
    }

    public function createBestProduct($data)
    {
        $validator = Validator::make($data, [
            'product_id' => 'required|numeric',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->bestProductRepository->create($data);

        return $result;
    }

    public function updateBestProduct($data, $id)
    {
        $validator = Validator::make($data, [
            'product_id' => 'required|numeric',
            'status' => 'required',
        ]);

        if ($validator->fails()){
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedBestProduct = $this->bestProductRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();

            throw new InvalidArgumentException('Unable to update best product data');
        }

        DB::commit();

        return $updatedBestProduct;
    }

    public function deleteBestProduct($id) 
    {
        DB::beginTransaction();

        try {
            $deletedBestProduct = $this->bestProductRepository->delete($id);
        } catch (Exception $e) {
            DB::rollBack();

            throw new InvalidArgumentException('Unable to delete best product data');
        }

        DB::commit();

        return $deletedBestProduct;
    }
}

?>