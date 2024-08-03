<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;
use Exception;
use App\Repositories\DeliveryRepository;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class DeliveryService {

    protected $deliveryRepository;

    public function __construct(DeliveryRepository $deliveryRepository)
    {
        $this->deliveryRepository = $deliveryRepository;
    }

    public function getAllDelivery()
    {
        return $this->deliveryRepository->getAll();
    }

    public function getDeliveryById($id) 
    {
        return $this->deliveryRepository->getById($id);
    }

    public function createNewDelivery($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'description' => 'required',
            'service_fee' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->deliveryRepository->create($data);

        return $result;
    }

    public function updateDelivery($data, $id) 
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'description' => 'required',
            'service_fee' => 'required|numeric'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedDelivery = $this->deliveryRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update delivery');
        }

        DB::commit();

        return $updatedDelivery;
    }
}

?>