<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use StanislavPivovartsev\InterestingStatistics\Utils\Contract\RabbitMessageConverterInterface;

interface RabbitMessageConverterFactoryInterface
{
    public function createRabbitMessageConverter(): RabbitMessageConverterInterface;
}