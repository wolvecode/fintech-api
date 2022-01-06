<?php

namespace App\Http\Controllers;

use App\Http\Data\StockData;
use App\Models\Stock;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class StockController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param Request $request
     * @return JsonResponse
     */
    public function index(Request $request): JsonResponse
    {
        $stocks = Stock::limit(10);

        if ($request->query('sort')) {
            $sort_key = $request->query('sort');
            $stocks = $this->sortBy($stocks, $sort_key);
        }

        $stocks = $stocks->get();
        return response()->json(['data' => StockData::collection($stocks)], Response::HTTP_OK);
    }

    /**
     * Display the specified resource.
     *
     * @param Stock $stock
     * @return JsonResponse
     */
    public function show(Stock $stock): JsonResponse
    {
        return response()->json(['data' => new StockData($stock)], Response::HTTP_OK);
    }

}
