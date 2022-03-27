<?php

namespace App\Services;

use App\Repositories\RankingRepository;

class RankingService
{
    protected $rankingRepository;

    public function __construct(RankingRepository $rankingRepository)
    {
        $this->rankingRepository = $rankingRepository;
    }

    public function getRanking(int $movementId)
    {
        $ranking = $this->rankingRepository->getRanking($movementId);
        $ranking = (new HighestUserRecord($ranking))->execute();
        return (new UserPositionRanking($ranking))->execute();
    }
}