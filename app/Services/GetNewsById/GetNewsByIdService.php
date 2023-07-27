<?php

namespace App\Services\GetNewsById;

use App\Models\Repository\News;

class GetNewsByIdService
{
    public function execute($command)
    {
        $repository = new News();
        $result = $repository->getOneNewsById($command->getId());

        return $result;
    }
}
