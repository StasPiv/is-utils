<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ArgumentsFetcher;

interface ArgumentsFetcherInterface
{
    /**
     * @return array<int, string>
     */
    public function fetchArguments(): array;
}