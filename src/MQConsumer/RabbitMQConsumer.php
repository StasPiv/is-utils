<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\MQConsumer;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\MQConsumerInterface;

class RabbitMQConsumer implements MQConsumerInterface
{
    public function __construct(
        private readonly AbstractConnection $connection,
        private readonly AMQPChannel    $channel,
    ) {
    }

    /**
     * @throws \Exception
     */
    public function consume(string $queueName, callable $callback): void
    {
        $this->channel->basic_qos(0, 1, true);
        $this->channel->basic_consume($queueName, '', false, false, false, false, $callback);

        try {
            $this->channel->consume();
        } catch (\Throwable $exception) {
            echo $exception->getMessage();
        }

        $this->channel->close();
        $this->connection->close();
    }
}