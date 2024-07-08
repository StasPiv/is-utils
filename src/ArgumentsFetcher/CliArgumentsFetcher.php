<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ArgumentsFetcher;

use StanislavPivovartsev\InterestingStatistics\Utils\Contract\ArgumentsFetcherInterface;

class CliArgumentsFetcher implements ArgumentsFetcherInterface
{
    public function fetchArguments(): array
    {
        global $argv;

        return $argv;
    }
}