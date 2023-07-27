<?php

namespace App\Services\GetNewsByRubric;

use App\Models\Repository\News;

class GetNewsByRubricService
{
    public function execute($command)
    {
        $repository = new News();
        $result = $repository->getAllNewsByRubric($command->getRubricId());

        return $result;
    }
}
