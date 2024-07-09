<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\MQConsumer;

use PhpAmqpLib\Channel\AMQPChannel;
use PhpAmqpLib\Connection\AbstractConnection;
use PhpAmqpLib\Message\AMQPMessage;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\AMQPMessageReceiverInterface;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\MQConsumerInterface;

class RabbitMQConsumer implements MQConsumerInterface
{
    public function __construct(
        private readonly AbstractConnection $connection,
        private readonly AMQPChannel    $channel,
        private readonly AMQPMessageReceiverInterface $amqpMessageReceiver,
    ) {
    }

    /**
     * @throws \Exception
     */
    public function consume(string $queueName): void
    {
        $this->channel->basic_qos(0, 1, true);
        $this->channel->basic_consume($queueName, '', false, false, false, false, [$this->amqpMessageReceiver, 'onReceive']);

        try {
            $this->channel->consume();
        } catch (\Throwable $exception) {
            echo $exception->getMessage();
        }

        $this->channel->close();
        $this->connection->close();
    }
}