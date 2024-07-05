<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\UuidGenerator;

interface UuidGeneratorInterface
{
    public function generate($data = null): string;
}