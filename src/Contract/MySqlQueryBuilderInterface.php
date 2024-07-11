<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Contract;

interface MySqlQueryBuilderInterface
{
    /**
     * @param array<string, string> $data
     */
    public function buildInsertSql(string $table, array $data): string;
}