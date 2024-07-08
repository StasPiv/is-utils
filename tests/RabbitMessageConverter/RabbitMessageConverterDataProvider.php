<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Tests\RabbitMessageConverter;

use PhpAmqpLib\Message\AMQPMessage;

class RabbitMessageConverterDataProvider
{
    public static function provideDataForConvertToAmqpMessage(): \Iterator
    {
        yield 'message converted correctly' => [
            'data' => ['pgn' => 'some-pgn'],
            'expectedMessage' => new AMQPMessage('{"pgn":"some-pgn"}'),
        ];
    }
}