<?php

namespace App\Services\GetNewsByRubricAndParentRubric;

use App\Models\Repository\News;
use App\Models\Repository\Rubrics;

class GetNewsByRubricAndParentRubricService
{
    public function execute($command)
    {
        $repository_news = new News();
        $repository_rubrics = new Rubrics();

        $parentRubric = $repository_news->GetAllNewsByRubric($command->getRubricId());
        $result = [$parentRubric];

        $childRubrics = $repository_rubrics->getRubricsIdByParentId($command->getRubricId());

        foreach ($childRubrics as $childRubric)
        {
            $result[] = $repository_news->GetAllNewsByRubric($childRubric->id);
        }

        return $result;
    }
}
