<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\MQConsumer;

interface MQConsumerInterface
{
    public function consume(string $queueName, callable $callback);
}