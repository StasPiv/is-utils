<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\FileReader;

interface FileReaderInterface
{
    public function read(): string;
}