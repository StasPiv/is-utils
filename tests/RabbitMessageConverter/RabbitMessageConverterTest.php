<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Tests\RabbitMessageConverter;

use PhpAmqpLib\Message\AMQPMessage;
use PHPUnit\Framework\TestCase;
use StanislavPivovartsev\InterestingStatistics\Utils\RabbitMessageConverter\RabbitMessageConverter;

class RabbitMessageConverterTest extends TestCase
{
    /**
     * @param array<string, string> $data
     *
     * @dataProvider \StanislavPivovartsev\InterestingStatistics\Utils\Tests\RabbitMessageConverter\RabbitMessageConverterDataProvider::provideDataForConvertToAmqpMessage
     */
    public function testConvertToAmqpMessage(array $data, AMQPMessage $expectedMessage): void
    {
        // arrange
        $converter = new RabbitMessageConverter();

        // act
        $actualMessage = $converter->convertToAMQPMessage($data);

        // assert
        self::assertEquals($expectedMessage, $actualMessage);
    }
}
