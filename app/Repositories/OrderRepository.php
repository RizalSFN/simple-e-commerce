<?php

namespace App\Repositories;

use App\Models\Order;

class OrderRepository {

    protected $order;

    public function __construct(Order $order)
    {
        $this->order = $order;
    }

    public function getAll()
    {
        return $this->order->get();
    }

    public function getById($id)
    {
        return $this->order->find($id);
    }

    public function getByUser($id)
    {
        return $this->order->where('user_id', $id)->get();
    }

    public function getByDelivery($id)
    {
        return $this->order->where('delivery_id', $id)->get();
    }

    public function getByExpedition($id)
    {
        return $this->order->where('expedition_id', $id)->get();
    }

    public function getByPayment($id)
    {
        return $this->order->where('payment_id', $id)->get();
    }

    public function getByStatus($status)
    {
        return $this->order->where('status', $status)->get();
    }

    public function create($data)
    {
        $order = $this->order;

        $order->user_id = $data['user_id'];
        $order->delivery_id = $data['delivery_id'];
        $order->expedition_id = $data['expedition_id'];
        $order->payment_id = $data['payment_id'];
        $order->delivery_service_fee = $data['delivery_service_fee'];
        $order->expedition_service_fee = $data['expedition_service_fee'];
        $order->payment_service_fee = $data['payment_service_fee'];
        $order->sub_total = $data['sub_total'];
        $order->total_payment = $data['total_payment'];
        $order->sender_address = $data['sender_address'];
        $order->destination_address = $data['destination_address'];
        $order->status = $data['status'];

        $order->save();

        return $order->fresh();
    }

    public function updateStatus($data, $id)
    {
        $order = $this->order->find($id);

        $order->status = $data['status'];

        $order->update();

        return $order;
    }
}

?>