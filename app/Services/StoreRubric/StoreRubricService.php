<?php

namespace App\Services\StoreRubric;

use App\Models\Repository\Rubrics;

class StoreRubricService
{
    public function execute($command)
    {
        $repository = new Rubrics();
        $result = $repository->storeRubric($command->getParentId(), $command->getName());

        return $result;
    }
}
