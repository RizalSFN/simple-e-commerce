<?php

namespace App\Repositories;

use App\Models\Complain;

class ComplainRepository {

    protected $complain;

    public function __construct(Complain $complain)
    {
        $this->complain = $complain;
    }

    public function getAll()
    {
        return $this->complain->get();
    }

    public function getById($id) 
    {
        return $this->complain->find($id);
    }

    public function getByUserId($id)
    {
        return $this->complain->where('user_id', $id)->get();
    }

    public function getByOrderId($id)
    {
        return $this->complain->where('order_id', $id)->get();
    }

    public function getByType($type)
    {
        return $this->complain->where('type', $type)->get();
    }

    public function create($data)
    {
        $complain = $this->complain;

        $complain->user_id = $data['user_id'];
        $complain->order_id = $data['order_id'];
        $complain->type = $data['type'];
        $complain->description = $data['description'];

        $complain->save();

        return $complain->fresh();
    }

    public function update($data, $id)
    {
        $complain = $this->complain->find($id);

        $complain->description = $data['description'];

        return $complain;
    }
}

?>