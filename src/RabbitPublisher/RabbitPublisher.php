<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\RabbitPublisher;

use PhpAmqpLib\Channel\AMQPChannel;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitMessageConverterInterface;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitPublisherInterface;
use StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel;

class RabbitPublisher implements RabbitPublisherInterface
{
    public function __construct(
        private readonly RabbitMessageConverterInterface $rabbitMessageConverter,
        private readonly AMQPChannel $channel,
        private readonly string $queue,
    ) {
    }

    public function publish(AbstractMessageModel $messageModel): void
    {
        $this->channel->basic_publish(
            $this->rabbitMessageConverter->convertToAMQPMessage($messageModel),
            '',
            $this->queue,
        );
    }
}