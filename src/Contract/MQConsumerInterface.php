<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

interface MQConsumerInterface
{
    public function consume(string $queueName);
}