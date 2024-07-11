<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use StanislavPivovartsev\InterestingStatistics\Utils\Model\AbstractMessageModel;

interface RabbitPublisherInterface
{
    public function publish(AbstractMessageModel $messageModel): void;
}