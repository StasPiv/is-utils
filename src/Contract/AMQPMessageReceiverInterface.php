<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use PhpAmqpLib\Message\AMQPMessage;

interface AMQPMessageReceiverInterface
{
    public function onReceive(AMQPMessage $message): void;
}