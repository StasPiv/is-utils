<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\ConnectionFactory;

use mysqli;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\MysqlConnectionFactoryInterface;

class MysqlConnectionFactory implements MysqlConnectionFactoryInterface
{
    public function createMysqlConnection(): mysqli
    {
        $mysqli = new mysqli(...func_get_args());

        // Check connection
        if ($mysqli->connect_error) {
            throw new \RuntimeException("Connection failed: " . $mysqli->connect_error);
        }

        return $mysqli;
    }
}