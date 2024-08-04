<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use App\Repositories\PaymentRepository;
use Illuminate\Support\Facades\Validator;
use Exception;
use InvalidArgumentException;

class PaymentService {

    protected $paymentRepository;

    public function __construct(PaymentRepository $paymentRepository)
    {
        $this->paymentRepository = $paymentRepository;
    }

    public function getAllPayment()
    {
        return $this->paymentRepository->getAll();
    }

    public function getPaymentById($id)
    {
        return $this->paymentRepository->getById($id);
    }

    public function createNewPayment($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'service_fee' => 'required|numeric',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->paymentRepository->create($data);

        return $result;
    }

    public function updatePayment($data, $id)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'service_fee' => 'required|numeric',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedPayment = $this->paymentRepository->update($data, $id);
        } catch(Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update payment data');
        }

        DB::commit();

        return $updatedPayment;
    }
}

?>