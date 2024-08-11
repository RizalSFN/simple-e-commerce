<?php

namespace App\Services;

use App\Repositories\ComplainRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Exception;
use InvalidArgumentException;

class ComplainService {

    protected $complainRepository;

    public function __construct(ComplainRepository $complainRepository)
    {
        $this->complainRepository = $complainRepository;
    }

    public function getAllComplain()
    {
        return $this->complainRepository->getAll();
    }

    public function getComplainById($id)
    {
        return $this->complainRepository->getById($id);
    }

    public function getComplainByUserId($id)
    {
        return $this->complainRepository->getByUserId($id);
    }

    public function getComplainByOrderId($id)
    {
        return $this->complainRepository->getByOrderId($id);
    }

    public function getComplainByType($type)
    {
        return $this->complainRepository->getByType($type);
    }

    public function createNewComplain($data)
    {
        $validator = Validator::make($data, [
            'user_id' => 'required|numeric',
            'order_id' => 'required|numeric',
            'type' => 'required',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->complainRepository->create($data);

        return $result;
    }

    public function updateComplain($data, $id)
    {
        $validator = Validator::make($data, [
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedComplain = $this->complainRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException("Unable to update complain");
        }

        DB::commit();

        return $updatedComplain;
    }
}

?>