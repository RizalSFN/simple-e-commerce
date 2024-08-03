<?php

namespace App\Repositories;

use App\Models\Expedition;

class ExpeditionRepository {

    protected $expedition;

    public function __construct(Expedition $expedition)
    {
        $this->expedition = $expedition;
    }

    public function getAll()
    {
        return $this->expedition->get();
    }

    public function getById($id) 
    {
        return $this->expedition->find($id);
    }

    public function create($data)
    {
        $expedition = $this->expedition;

        $expedition->name = $data['name'];
        $expedition->rate = $data['rate'];
        $expedition->description = $data['description'];
        $expedition->status = $data['status'];

        $expedition->save();

        return $expedition->fresh();
    }

    public function update($data, $id)
    {
        $expedition = $this->expedition->find($id);

        $expedition->name = $data['name'];
        $expedition->rate = $data['rate'];
        $expedition->description = $data['description'];

        $expedition->update();

        return $expedition;
    }

    public function updateStatus($data, $id)
    {
        $expedition = $this->expedition->find($id);

        $expedition->status = $data['status'];

        $expedition->update();

        return $expedition;
    }
}

?>