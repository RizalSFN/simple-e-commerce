<?php

namespace App\Services;

use App\Repositories\OrderDetailRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use InvalidArgumentException;

class OrderDetailService {

    protected $orderDetailRepository;

    public function __construct(OrderDetailRepository $orderDetailRepository)
    {
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function getAllOrderDetail()
    {
        return $this->orderDetailRepository->getAll();
    }

    public function getOrderDetailById($id)
    {
        return $this->orderDetailRepository->getById($id);
    }

    public function getOrderDetailByOrderId($id)
    {
        return $this->orderDetailRepository->getByOrder($id);
    }

    public function createNewOrderDetail($data)
    {
        $validator = Validator::make($data, [
            'order_id' => 'required|numeric',
            'product_id' => 'required|numeric',
            'quantity' => 'required|numeric',
            'sub_total' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->orderDetailRepository->create($data);

        return $result;
    }

    public function updateOrderDetail($data, $id)
    {
        $validator = Validator::make($data, [
            'quantity' => 'required|numeric',
            'sub_total' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedOrderDetail = $this->orderDetailRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException("Unable to update order detail data");
        }

        DB::commit();

        return $updatedOrderDetail;
    }
}

?>