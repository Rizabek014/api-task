<?php

namespace App\Services\StoreAuthor;

use App\Models\Repository\Authors;

class StoreAuthorService
{
    public function execute($command)
    {
        $repository = new Authors();
        $result = $repository->storeAuthor($command->getName(), $command->getEmail(), $command->getImage());

        return $result;
    }
}
