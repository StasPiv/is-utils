<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ConnectionFactory;

use PhpAmqpLib\Connection\AMQPStreamConnection;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitConnectionFactoryInterface;

class AMQPStreamConnectionFactory implements RabbitConnectionFactoryInterface
{
    public function createAmqpStreamConnection(): AMQPStreamConnection
    {
        return new AMQPStreamConnection(...func_get_args());
    }
}