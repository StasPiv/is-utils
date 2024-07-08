<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

interface UuidGeneratorInterface
{
    public function generate($data = null): string;
}