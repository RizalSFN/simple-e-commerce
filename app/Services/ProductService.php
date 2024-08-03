<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Exception;
use Illuminate\Support\Facades\Validator;
use App\Repositories\ProductRepository;
use InvalidArgumentException;
// use Intervention\Image\Laravel\Facades\Image;

class ProductService {

    protected $productRepository;

    public function __construct(ProductRepository $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function getAll() 
    {
        return $this->productRepository->getAll();
    }

    public function getProductById($id)
    {
        return $this->productRepository->getById($id);
    }

    public function createNewProduct($data) 
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'stok' => 'required|numeric',
            'description' => 'required',
            'price' => 'required|numeric',
            'photo' => 'nullable',
            'seller_id' => 'required|numeric',
            'status' => 'required'
        ]);

        // if ($data['image']) {
        //     $image = Image::make($data['image']);
        //     $image->resize(300, 300);

        //     $filename = time() . '.' . $data['image']->getClientOriginalExtension();
        //     $path = public_path('images/' . $filename);
        //     $image->save($path);
        // } DO THIS IN CONTROLLER


        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->productRepository->create($data);

        return $result;
    }

    public function updateProduct($data, $id) 
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'stok' => 'required|numeric',
            'description' => 'required',
            'price' => 'required|numeric',
            'photo' => 'nullable'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedProduct = $this->productRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update product');
        }

        DB::commit();

        return $updatedProduct;
    }

    public function updateStatusProduct($newStatus, $id) 
    {
        DB::beginTransaction();

        try {
            $updatedStatusProduct = $this->productRepository->updateStatus($newStatus, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update product status');
        }

        DB::commit();

        return $updatedStatusProduct;
    }
}

?>