<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ConnectionFactory;

use mysqli;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\MysqlConnectionFactoryInterface;

class MysqlConnectionFactory implements MysqlConnectionFactoryInterface
{
    public function createMysqlConnection(...$arguments): mysqli
    {
        $mysqli = new mysqli(...$arguments);

        // Check connection
        if ($mysqli->connect_error) {
            throw new \RuntimeException("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}