<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use PhpAmqpLib\Message\AMQPMessage;
use StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel;

interface RabbitMessageConverterInterface
{
    /**
     * @param \StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel $data
     *
     * @throws \JsonException
     */
    public function convertToAMQPMessage(AbstractMessageModel $model): AMQPMessage;
}