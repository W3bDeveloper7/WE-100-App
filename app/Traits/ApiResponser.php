<?php

namespace App\Traits;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Collection;

trait ApiResponser
{
    private function successResponse($data, $code)
    {
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code)
    {
        return response()->json(['message' => $message, 'state' => 0], $code);
    }

    protected function showAll(Collection $collection, $code=200)
    {
        return $this->successResponse(['data' => $collection, 'state' => 1], $code);
    }

    protected function showOne(Model $model, $code=200)
    {
        return $this->successResponse(['data' => $model, 'state' => 1], $code);
    }
}