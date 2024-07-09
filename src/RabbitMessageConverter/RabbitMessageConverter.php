<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\RabbitMessageConverter;

use PhpAmqpLib\Message\AMQPMessage;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitMessageConverterInterface;
use StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel;

class RabbitMessageConverter implements RabbitMessageConverterInterface
{
    /**
     * @param \StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel $model
     *
     * @throws \JsonException
     */
    public function convertToAMQPMessage(AbstractMessageModel $model): AMQPMessage
    {
        return new AMQPMessage((string) $model);
    }
}
