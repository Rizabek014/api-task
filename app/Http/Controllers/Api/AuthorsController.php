<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\VersionResource;
use App\Services\GetAllAuthors\GetAllAuthorsService;
use App\Services\StoreAuthor\Command as StoreAuthorCommand;
use App\Services\StoreAuthor\StoreAuthorService;
use App\Http\Requests\AuthorsRequest;

class AuthorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $authors = (new GetAllAuthorsService())->execute();
        return new VersionResource($authors);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\AuthorsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AuthorsRequest $request)
    {
        $command = new StoreAuthorCommand;
        $command->setName($request->Name);
        $command->setEmail($request->email);
        $command->setImage($request->img);

        $storeAuthors = (new StoreAuthorService())->execute($command);
        return $storeAuthors;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
