<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

use StanislavPivovartsev\InterestingStatistics\Utils\RabbitMessageConverter\RabbitMessageConverterInterface;

interface RabbitMessageConverterFactoryInterface
{
    public function createRabbitMessageConverter(): RabbitMessageConverterInterface;
}