<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\LoggerFactory;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;
use Psr\Log\LoggerInterface;
use StanislavPivovartsev\InterestingStatistics\Utils\Contract\LoggerFactoryInterface;

class LoggerStreamerFactory implements LoggerFactoryInterface
{
    public function __construct(
        private readonly string $loggerName,
        private readonly string $logLevel,
    ) {
    }

    public function createLogger(): LoggerInterface
    {
        $logger = new Logger($this->loggerName);
        $logger->pushHandler(new StreamHandler('php://stdout', Level::fromName($this->logLevel)));

        return $logger;
    }
}