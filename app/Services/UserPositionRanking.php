<?php

namespace App\Services;

class UserPositionRanking
{
    private array $ranking;

    public function __construct(array $ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    public function execute(): array
    {
        $records = [];
        $positionInitial = 0;
        foreach ($this->sortByRecord($this->ranking) as $r) {
            if (in_array($r->record, $records)) {
                $r->position = $positionInitial;
            } else {
                $r->position = ++$positionInitial;
            }
            $records[] = $r->record;
        }
        return $this->ranking;
    }

    private function sortByRecord(array $array): array
    {
        usort($array, fn($a, $b) => strcmp($b->record, $a->record));
        return $array;
    }
}