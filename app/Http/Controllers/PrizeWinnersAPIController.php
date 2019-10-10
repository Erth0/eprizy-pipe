<?php

namespace App\Http\Controllers;

use Eprizy/Models\PrizeWinners;
use App\Http\Resources\PrizeWinnersCollection;
use App\Http\Resources\PrizeWinnersResource;
 
class PrizeWinnersAPIController extends Controller
{
    public function index()
    {
        return new PrizeWinnersCollection(PrizeWinners::paginate());
    }
 
    public function show(PrizeWinners $prizeWinners)
    {
        return new PrizeWinnersResource($prizeWinners->load(['prize']));
    }

    public function store(Request $request)
    {
        return new PrizeWinnersResource(PrizeWinners::create($request->all()));
    }

    public function update(Request $request, PrizeWinners $prizeWinners)
    {
        $prizeWinners->update($request->all());

        return new PrizeWinnersResource($prizeWinners);
    }

    public function destroy(Request $request, PrizeWinners $prizeWinners)
    {
        $prizeWinners->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}