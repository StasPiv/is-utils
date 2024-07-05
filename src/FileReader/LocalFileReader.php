<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\FileReader;

class LocalFileReader implements FileReaderInterface
{
    /**
     * @param array<int, string> $arguments
     */
    public function __construct(
        private readonly string $gamesDir,
        private readonly array $arguments,
    ) {
    }

    public function read(): string
    {
        return $this->gamesDir . DIRECTORY_SEPARATOR . $this->arguments[1];
    }
}