<?php 

namespace App\Repositories;

use App\Models\OrderDetail;

class OrderDetailRepository {

    protected $orderDetail;

    public function __construct(OrderDetail $orderDetail)
    {
        $this->orderDetail = $orderDetail;
    }

    public function getAll()
    {
        return $this->orderDetail->get();
    }

    public function getById($id)
    {
        return $this->orderDetail->find($id);
    }

    public function getByOrder($id)
    {
        return $this->orderDetail->where('order_id', $id)->get();
    }

    public function create($data)
    {
        $orderDetail = $this->orderDetail;

        $orderDetail->order_id = $data['order_id'];
        $orderDetail->product_id = $data['product_id'];
        $orderDetail->quantity = $data['quantity'];
        $orderDetail->sub_total = $data['sub_total'];

        $orderDetail->save();

        return $orderDetail->fresh();
    }

    public function update($data, $id)
    {
        $orderDetail = $this->orderDetail->find($id);

        $orderDetail->quantity = $data['quantity'];
        $orderDetail->sub_total = $data['sub_total'];

        $orderDetail->update();

        return $orderDetail;
    }
}

?>