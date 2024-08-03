<?php

namespace App\Services;

use App\Repositories\FormJoinRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class FormJoinService {

    protected $formJoinRepository;

    public function __construct(FormJoinRepository $formJoinRepository)
    {
        $this->formJoinRepository = $formJoinRepository;
    }

    public function getAll()
    {
        return $this->formJoinRepository->getAll();
    }

    public function createFormJoin($data)
    {
        $validator = Validator::make($data, [
            'fullname' => 'required',
            'email' => 'required|email',
            'telephone' => 'required|numeric',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->formJoinRepository->create($data);
    }

    public function updateStatus($data, $id)
    {
        $validator = Validator::make($data, [
            'product_id' => 'required|numeric',
            'status' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedStatus = $this->formJoinRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update status data');
        }

        DB::commit();

        return $updatedStatus;
        
    }
}

?>