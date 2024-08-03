<?php

namespace App\Services;

use App\Repositories\ExpeditionRepository;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use InvalidArgumentException;

class ExpeditionService {

    protected $expeditionRepository;

    public function __construct(ExpeditionRepository $expeditionRepository)
    {
        $this->expeditionRepository = $expeditionRepository;
    }

    public function getAllExpedition()
    {
        return $this->expeditionRepository->getAll();
    }

    public function getExpeditionById($id)
    {
        return $this->expeditionRepository->getById($id);
    }

    public function createNewExpedition($data)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'rate' => 'required|numeric',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        $result = $this->expeditionRepository->create($data);

        return $result;
    }

    public function updateExpedition($data, $id)
    {
        $validator = Validator::make($data, [
            'name' => 'required',
            'rate' => 'required|numeric',
            'description' => 'required'
        ]);

        if ($validator->fails()) {
            throw new InvalidArgumentException($validator->errors()->first());
        }

        DB::beginTransaction();

        try {
            $updatedExpedition = $this->expeditionRepository->update($data, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update expedition data');
        }

        DB::commit();

        return $updatedExpedition;
    }

    public function updateExpeditionStatus($status, $id)
    {
        DB::beginTransaction();

        try {
            $updatedExpeditionStatus = $this->expeditionRepository->updateStatus($status, $id);
        } catch (Exception $e) {
            DB::rollBack();
            throw new InvalidArgumentException('Unable to update expedition status');
        }

        DB::commit();

        return $updatedExpeditionStatus;
    }
}

?>