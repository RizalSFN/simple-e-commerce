<?php

namespace App\Repositories;

use App\Models\Payment;

class PaymentRepository {
    
    protected $payment;

    public function __construct(Payment $payment)
    {
        $this->payment = $payment;
    }

    public function getAll()
    {
        return $this->payment->get();
    }

    public function getById($id)
    {
        return $this->payment->find($id);
    }

    public function create($data)
    {
        $payment = $this->payment;

        $payment->name = $data['name'];
        $payment->service_fee = $data['service_fee'];
        $payment->desccription = $data['description'];

        $payment->save();

        return $payment->fresh();
    }

    public function update($data, $id)
    {
        $payment = $this->payment->find($id);

        $payment->name = $data['name'];
        $payment->service_fee = $data['service_fee'];
        $payment->description = $data['desccription'];

        $payment->update();

        return $payment;
    }
}

?>