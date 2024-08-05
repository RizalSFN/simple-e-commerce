<?php

namespace App\Services;

use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use InvalidArgumentException;

class OrderService {

    protected $orderRepository;

    public function __construct(OrderRepository $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    public function getAllOrder()
    {
        return $this->orderRepository->getAll();
    }

    public function getOrderById($id)
    {
        return $this->orderRepository->getById($id);
    }

    public function getOrderByUser($id)
    {
        return $this->orderRepository->getByUser($id);
    }

    public function getOrderByDelivery($id)
    {
        return $this->orderRepository->getByDelivery($id);
    }

    public function getOrderByExpedition($id)
    {
        return $this->orderRepository->getByExpedition($id);
    }

    public function getOrderByPayment($id)
    {
        return $this->orderRepository->getByPayment($id);
    }

    public function getOrderByStatus($id)
    {
        return $this->orderRepository->getByStatus($id);
    }

    public function createNewOrder($data)
    {
        $validator = Validator::make($data, [
            'user_id' => 'required|numeric',
            'delivery_id' => 'required|numeric',
            'expedition_id' => 'required|numeric',
            'payment_id' => 'required|numeric',
            'delivery_service_fee' => 'required|numeric',
            'expedition_service_fee' => 'required|numeric',
            'payment_service_fee' => 'required|numeric',
            'sub_total' => 'required|numeric',
            'total_payment' => 'required|numeric',
            'sender_address' => 'required',
            'destination_address' => 'required',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->orderRepository->create($data);

        return $result;
    }

    public function updateOrderStatus($status, $id)
    {
        DB::beginTransaction();

        try {
            $updatedStatus = $this->orderRepository->updateStatus($status, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update order status');
        }

        DB::commit();

        return $updatedStatus;
    }
}

?>