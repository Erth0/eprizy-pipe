<?php

namespace App\Http\Controllers;

use Eprizy/Models\EprizyTokens;
use App\Http\Resources\EprizyTokensCollection;
use App\Http\Resources\EprizyTokensResource;
 
class EprizyTokensAPIController extends Controller
{
    public function index()
    {
        return new EprizyTokensCollection(EprizyTokens::paginate());
    }
 
    public function show(EprizyTokens $eprizyTokens)
    {
        return new EprizyTokensResource($eprizyTokens->load([]));
    }

    public function store(Request $request)
    {
        return new EprizyTokensResource(EprizyTokens::create($request->all()));
    }

    public function update(Request $request, EprizyTokens $eprizyTokens)
    {
        $eprizyTokens->update($request->all());

        return new EprizyTokensResource($eprizyTokens);
    }

    public function destroy(Request $request, EprizyTokens $eprizyTokens)
    {
        $eprizyTokens->delete();

        return response()->json([], \Illuminate\Http\Response::HTTP_NO_CONTENT);
    }
}