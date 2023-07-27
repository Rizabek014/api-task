<?php

namespace App\Services\GetAllAuthors;

use App\Models\Repository\Authors;

class GetAllAuthorsService
{
    public function execute()
    {
        $repository = new Authors();
        $result = $repository->getAllAuthors();

        return $result;
    }
}
