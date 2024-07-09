<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use mysqli;

interface MysqlConnectionFactoryInterface
{
    public function createMysqlConnection(...$arguments): mysqli;
}
