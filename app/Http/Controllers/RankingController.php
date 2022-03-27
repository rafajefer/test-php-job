<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\RankingService;
use Illuminate\Http\JsonResponse;

class RankingController extends Controller
{
    protected $rankingService;

    public function __construct(RankingService $rankingService)
    {
        $this->rankingService = $rankingService;
    }

    public function get(Request $request): JsonResponse
    {
        $ranking = $this->rankingService->getRanking($request->input('page'));

        return response()->json($ranking);

        // return response()->json([
        //     'message' => 'Product created successfully!,
        //     'data' => $product
        //   ], Response::HTTP_CREATED);   
        // }
    }
}
