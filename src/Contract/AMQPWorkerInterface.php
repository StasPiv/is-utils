<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use PhpAmqpLib\Message\AMQPMessage;

interface AMQPWorkerInterface
{
    public function onReceive(AMQPMessage $receivedMessage): void;
}