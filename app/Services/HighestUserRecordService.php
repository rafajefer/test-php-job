<?php

namespace App\Services;

class HighestUserRecordService
{
    private array $ranking;

    public function __construct(array $ranking)
    {
        $this->ranking = $ranking;
        return $this;
    }

    public function execute(): array
    {
        $highestRecord = [];
        foreach ($this->ranking as $r) {
            if (array_key_exists($r->userId, $highestRecord)) {
                if ($highestRecord[$r->userId]->record < $r->record) {
                    $highestRecord[$r->userId] = $r;
                }
            } else {
                $highestRecord[$r->userId] = $r;
            }
        }
        return array_values($highestRecord);
    }
}