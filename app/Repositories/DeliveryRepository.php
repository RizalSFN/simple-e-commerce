<?php 

namespace App\Repositories;

use App\Models\Delivery;

class DeliveryRepository {

    protected $delivery;

    public function __construct(Delivery $delivery)
    {
        $this->delivery = $delivery;
    }

    public function getAll()
    {
        return $this->delivery->get();
    }

    public function getById($id) 
    {
        return $this->delivery->find($id);
    }

    public function create($data)
    {
        $delivery = $this->delivery;

        $delivery->name = $data['name'];
        $delivery->description = $data['description'];
        $delivery->service_fee = $data['service_fee'];

        $delivery->save();

        return $delivery->fresh();
    }

    public function update($data, $id)
    {
        $delivery = $this->delivery->find($id);

        $delivery->name = $data['name'];
        $delivery->description = $data['description'];
        $delivery->service_fee = $data['service_fee'];

        $delivery->update();

        return $delivery;
    }
}

?>