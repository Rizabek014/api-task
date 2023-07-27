<?php

namespace App\Models\Repository;

use App\Models\News as NewsModel;

class News
{
    /**
     * get news by id
     *
     * @param int $id
     * @return NewsModel|null
     *
     */
    public function GetOneNewsById($id)
    {
        return NewsModel::where('id', $id)->first();
    }

    /**
     * get news by header
     *
     * @param string $header
     * @return NewsModel|null
     *
     */
    public function GetNewsByHeader($header)
    {
        return NewsModel::where('header', $header)->get();
    }

    /**
     * get news by Author id
     *
     * @param int $author_id
     * @return NewsModel|null
     *
     */
    public function GetAllNewsByAuthor($author_id)
    {
        return NewsModel::where('author_id', $author_id)->get();
    }

    /**
     * get news by Rubric id
     *
     * @param int $rubric_id
     * @return NewsModel|null
     *
     */
    public function GetAllNewsByRubric($rubric_id)
    {
        return NewsModel::where('rubric_id', $rubric_id)->get();
    }

    /**
     * store news
     *
     * @param string $header
     * @param string $announcement
     * @param string $text
     * @param int $author_id
     * @param int $rubric_id
     * @return NewsModel|null
     *
     */
    public function StoreNews($header, $announcement, $text, $author_id, $rubric_id)
    {
        $news = NewsModel::create([
            'header' => $header,
            'announcement' => $announcement,
            'text' => $text,
            'author_id' => $author_id,
            'rubric_id' => $rubric_id,
        ]);

        return $news;
    }
}
