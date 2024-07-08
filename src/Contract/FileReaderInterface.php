<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

interface FileReaderInterface
{
    public function read(): string;
}