<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use Psr\Log\LoggerInterface;

interface LoggerFactoryInterface
{
    public function createLogger(): LoggerInterface;
}