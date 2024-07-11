<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Tests\MySqlQueryBuilder;

use mysqli;
use PHPUnit\Framework\TestCase;
use StanislavPivovartsev\InterestingStatistics\Utils\MySqlQueryBuilder\MySqlQueryBuilder;

class MySqlQueryBuilderTest extends TestCase
{
    /**
     * @param array<string, string> $data
     * @param array<int, string> $escapeStringCalls
     *
     * @dataProvider \StanislavPivovartsev\InterestingStatistics\Utils\Tests\MySqlQueryBuilder\MysqlQueryBuilderDataProvider::provideDataForBuildInsertSql
     */
    public function testBuildInsertSql(string $table, array $data, array $escapeStringCalls, string $expectedSql): void
    {
        // arrange
        $mysqli = $this->createMock(mysqli::class);
        $mysqli->method('real_escape_string')->willReturnOnConsecutiveCalls(...$escapeStringCalls);
        $queryBuilder = new MySqlQueryBuilder($mysqli);

        // act
        $actualSql = $queryBuilder->buildInsertSql($table, $data);

        // assert
        self::assertSame($expectedSql, $actualSql);
    }
}
