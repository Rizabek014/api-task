<?php

namespace App\Models\Repository;

use App\Models\Authors as AuthorsModel;

class Authors
{
    /**
     * get all authors
     *
     *
     * @return AuthorsModel|null
     *
     */
    public function getAllAuthors()
    {
        return AuthorsModel::all();
    }

    /**
     * store author
     *
     * @param string $name
     * @param string $email
     * @param string $img
     * @return AuthorsModel|null
     *
     */
    public function StoreAuthor($name, $email, $img)
    {
        $news = AuthorsModel::create([
            'Name' => $name,
            'email' => $email,
            'img' => $img,
        ]);

        return $news;
    }
}
