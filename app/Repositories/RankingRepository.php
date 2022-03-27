<?php

namespace App\Repositories;

use App\Models\Ranking;

class RankingRepository
{
    protected $ranking;

    public function __construct(Ranking $ranking)
    {
        $this->ranking = $ranking;
    }

    public function getRanking(int $movementId)
    {
        return $this->ranking::getRanking($movementId);
    }
} 