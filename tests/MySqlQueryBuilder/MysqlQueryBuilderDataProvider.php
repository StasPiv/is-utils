<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Tests\MySqlQueryBuilder;

class MysqlQueryBuilderDataProvider
{
    public static function provideDataForBuildInsertSql(): \Iterator
    {
        yield 'build correct sql' => [
            'table' => 'games',
            'data' => [
                'id' => 'some-id',
                'pgn' => 'some-pgn',
                'pgn_hash' => 'some-pgn-hash',
            ],
            'escapeStringCalls' => [
                'some-id',
                'some-pgn',
                'some-pgn-hash',
            ],
            'expectedSql' => "INSERT INTO games SET `id` = 'some-id', `pgn` = 'some-pgn', `pgn_hash` = 'some-pgn-hash'",
        ];

        yield 'escape values' => [
            'table' => 'games',
            'data' => [
                'id' => "some-id '; DROP TABLE games'",
                'pgn' => 'some-pgn',
                'pgn_hash' => 'some-pgn-hash',
            ],
            'escapeStringCalls' => [
                'some-id; \\\'DROP TABLE games\\\'',
                'some-pgn',
                'some-pgn-hash',
            ],
            'expectedSql' => "INSERT INTO games SET `id` = 'some-id; \'DROP TABLE games\'', `pgn` = 'some-pgn', `pgn_hash` = 'some-pgn-hash'",
        ];
    }
}