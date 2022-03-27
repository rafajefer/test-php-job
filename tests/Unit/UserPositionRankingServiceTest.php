<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Services\UserPositionRankingService;

class UserPositionRankingServiceTest extends TestCase
{

    private function getRakingFake(): array
    {
        $ranking = [];
        foreach (range(1, 10) as $i) {
            $ranking[] = (object) [
                'movementName' => 'Deadlift',
                'userName' => 'Jose',
                'userId' => $i,
                'record' => $i,
                'date' => '2021-01-06 00:00:00'
            ];
        }
        return $ranking;
    }

    public function test_should_set_position_to_object_from_array()
    {
        $sut = (new UserPositionRankingService($this->getRakingFake()))->execute();
        $this->assertObjectHasAttribute('position', $sut[0]);
        $this->assertEquals(10, $sut[0]->position);
        $this->assertEquals(1, $sut[9]->position);
    }

    public function test_should_return_array_empty_when_no_record_found()
    {
        $sut = (new UserPositionRankingService([]))->execute();
        $this->assertEquals([], $sut);
    }

}
