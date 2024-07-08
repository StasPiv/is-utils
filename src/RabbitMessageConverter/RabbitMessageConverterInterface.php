<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\RabbitMessageConverter;

use PhpAmqpLib\Message\AMQPMessage;

interface RabbitMessageConverterInterface
{
    /**
     * @param array<mixed> $data
     *
     * @throws \JsonException
     */
    public function convertToAMQPMessage(array $data): AMQPMessage;
}