<?php

namespace App\Http\Controllers;

use Illuminate\Http\{ Response, JsonResponse };
use App\Services\RankingService;

class MovementController extends Controller
{
    protected $rankingService;

    public function __construct(RankingService $rankingService)
    {
        $this->rankingService = $rankingService;
    }


    public function getRanking(int $movementId): JsonResponse
    {
        $ranking = $this->rankingService->getRanking($movementId);

        return response()->json([
            'message' => 'Ranking retrieved successfully!',
            'data' => $ranking
          ], Response::HTTP_OK);   
    }
}
