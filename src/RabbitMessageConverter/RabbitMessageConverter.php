<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\RabbitMessageConverter;

use PhpAmqpLib\Message\AMQPMessage;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitMessageConverterInterface;

class RabbitMessageConverter implements RabbitMessageConverterInterface
{
    /**
     * @param array<mixed> $data
     *
     * @throws \JsonException
     */
    public function convertToAMQPMessage(array $data): AMQPMessage
    {
        $message = json_encode($data, JSON_THROW_ON_ERROR);

        return new AMQPMessage($message);
    }
}