<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\NewsRequest;
use App\Http\Resources\VersionResource;
use App\Services\GetNewsById\Command as NewsByIdCommand;
use App\Services\GetNewsById\GetNewsByIdService;
use App\Services\GetNewsByHeader\Command as NewsByHeaderCommand;;
use App\Services\GetNewsByHeader\GetNewsByHeaderService;
use App\Services\GetNewsByAuthor\Command as NewsByAuthorCommand;
use App\Services\GetNewsByAuthor\GetNewsByAuthorService;
use App\Services\GetNewsByRubric\Command as NewsByRubricCommand;
use App\Services\GetNewsByRubric\GetNewsByRubricService;
use App\Services\GetNewsByRubricAndParentRubric\Command as NewsByRubricAndParentRubricCommand;
use App\Services\GetNewsByRubricAndParentRubric\GetNewsByRubricAndParentRubricService;
use App\Services\StoreNews\Command as StoreNewsCommand;
use App\Services\StoreNews\StoreNewsService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    public function newsHeader($header)
    {
        $command = new NewsByHeaderCommand;
        $command->setHeader($header);

        $newsByHedaer = (new GetNewsByHeaderService())->execute($command);
        return new VersionResource($newsByHedaer);
    }

    public function author($author_id)
    {
        $command = new NewsByAuthorCommand();
        $command->setAuthorId($author_id);

        $newsByAuthor = (new GetNewsByAuthorService())->execute($command);
        return new VersionResource($newsByAuthor);
    }

    public function rubric($rubric_id)
    {
        $command = new NewsByRubricCommand;
        $command->setRubricId($rubric_id);

        $newsByRubric = (new GetNewsByRubricService())->execute($command);
        return new VersionResource($newsByRubric);
    }

    public function rubrics($rubric_id)
    {
        $command = new NewsByRubricAndParentRubricCommand;
        $command->setRubricId($rubric_id);

        $newsByRubricAndChildRubric = (new GetNewsByRubricAndParentRubricService())->execute($command);
        return new VersionResource($newsByRubricAndChildRubric);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\NewsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        $command = new StoreNewsCommand;
        $command->setHeader($request->header);
        $command->setAnnouncement($request->announcement);
        $command->setText($request->text);
        $command->setAuthorId($request->author_id);
        $command->setRubricId($request->rubric_id);

        $storeNews = (new StoreNewsService())->execute($command);
        return $storeNews;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $command = new NewsByIdCommand();
        $command->setId($id);

        $newsById = (new GetNewsByIdService())->execute($command);
        return new VersionResource($newsById);
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
