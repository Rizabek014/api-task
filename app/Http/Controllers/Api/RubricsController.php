<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RubricsRequest;
use App\Services\StoreRubric\Command as StoreRubricCommand;
use App\Services\StoreRubric\StoreRubricService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RubricsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RubricsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RubricsRequest $request)
    {
        $command = new StoreRubricCommand;
        $command->setParentId($request->parent_id);
        $command->setName($request->name);

        $storeRubric = (new StoreRubricService())->execute($command);
        return $storeRubric;
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
