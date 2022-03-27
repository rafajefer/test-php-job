<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\HighestUserRecordService;

class HighestUserRecordServiceTest extends TestCase
{
    
    private function getRakingFake(): array
    {
        $ranking = [];
        foreach (range(1, 3) as $i) {
            $ranking[] = (object) [
                'movementName' => 'Deadlift',
                'userName' => 'Jose',
                'userId' => $i,
                'record' => $i,
                'date' => '2021-01-06 00:00:00'
            ];
        }
        foreach (range(1, 3) as $i) {
            $ranking[] = (object) [
                'movementName' => 'Deadlift',
                'userName' => 'Jose',
                'userId' => $i,
                'record' => $i*2,
                'date' => '2021-01-06 00:00:00'
            ];
        }
        return $ranking;
    }

    public function test_should_return_record_highest_of_users()
    {
        $sut = (new HighestUserRecordService($this->getRakingFake()))->execute();
        $this->assertEquals(2, $sut[0]->record);
        $this->assertEquals(4, $sut[1]->record);
        $this->assertEquals(6, $sut[2]->record);
    }

    public function test_should_return_array_empty_when_no_record_found()
    {
        $sut = (new HighestUserRecordService([]))->execute();
        $this->assertEquals([], $sut);
    }
}
