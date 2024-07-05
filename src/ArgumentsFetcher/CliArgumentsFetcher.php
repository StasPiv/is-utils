<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ArgumentsFetcher;

class CliArgumentsFetcher implements ArgumentsFetcherInterface
{
    public function fetchArguments(): array
    {
        global $argv;

        return $argv;
    }
}