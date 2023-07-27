<?php

namespace App\Models\Repository;

use App\Models\Rubrics as RubricsModel;

class Rubrics
{

    /**
     * get Rubrics by parent id
     *
     * @param int $rubric_id
     * @return RubricsModel|null
     *
     */
    public function getRubricsIdByParentId($rubric_id)
    {
        return RubricsModel::where('parent_id', $rubric_id)->get();
    }

    /**
     * store news
     *
     * @param int $parent_id
     * @param string $name
     * @return RubricsModel|null
     *
     */
    public function storeRubric($parent_id, $name)
    {
        $news = RubricsModel::create([
            'parent_id' => $parent_id,
            'name' => $name,
        ]);

        return $news;
    }
}
