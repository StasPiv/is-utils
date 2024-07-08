<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use PhpAmqpLib\Connection\AMQPStreamConnection;

interface RabbitConnectionFactoryInterface
{
    public function createAmqpStreamConnection(): AMQPStreamConnection;
}