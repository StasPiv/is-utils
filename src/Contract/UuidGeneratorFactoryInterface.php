<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

interface UuidGeneratorFactoryInterface
{
    public function createUuidGenerator(): UuidGeneratorInterface;
}