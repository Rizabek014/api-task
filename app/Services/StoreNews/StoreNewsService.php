<?php

namespace App\Services\StoreNews;

use App\Models\Repository\News;

class StoreNewsService
{
    public function execute($command)
    {
        $repository = new News();
        $result = $repository->storeNews($command->getHeader(), $command->getAnnouncement(), $command->getText(), $command->getAuthorId(), $command->getRubricId());

        return $result;
    }
}
