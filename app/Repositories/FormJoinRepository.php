<?php


namespace App\Repositories;

use App\Models\FormJoin;

class FormJoinRepository {

    protected $formJoin;

    public function __construct(FormJoin $formJoin)
    {
        $this->formJoin = $formJoin;
    }

    public function getAll()
    {
        return $this->formJoin->get();
    }

    public function create($data)
    {
        $formJoin = $this->formJoin;

        $formJoin->fullname = $data['fullname'];
        $formJoin->email = $data['email'];
        $formJoin->telephone = $data['telephone'];
        $formJoin->status = $data['status'];

        $formJoin->save();

        return $formJoin->fresh();
    }

    public function update($data, $id)
    {
        $formJoin = $this->formJoin->find($id);

        $formJoin->status = $data['status'];

        $formJoin->update();

        return $formJoin;
    }
}

?>