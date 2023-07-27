<?php

namespace App\Services\GetNewsByHeader;

use App\Models\Repository\News;

class GetNewsByHeaderService
{
    public function execute($command)
    {
        $repository = new News();
        $result = $repository->getNewsByHeader($command->getHeader());

        return $result;
    }
}
