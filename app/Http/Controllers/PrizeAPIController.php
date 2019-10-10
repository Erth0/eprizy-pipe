<?php

namespace App\Http\Controllers;

use Eprizy/Models\Prize;
use App\Http\Resources\PrizeCollection;
use App\Http\Resources\PrizeResource;
 
class PrizeAPIController extends Controller
{
    public function index()
    {
        return new PrizeCollection(Prize::paginate());
    }
 
    public function show(Prize $prize)
    {
        return new PrizeResource($prize->load(['prizeWinners', 'category']));
    }

    public function store(Request $request)
    {
        return new PrizeResource(Prize::create($request->all()));
    }

    public function update(Request $request, Prize $prize)
    {
        $prize->update($request->all());

        return new PrizeResource($prize);
    }

    public function destroy(Request $request, Prize $prize)
    {
        $prize->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}