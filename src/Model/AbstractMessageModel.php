<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

abstract class AbstractMessageModel
{
    abstract public function toArray(): array;

    public function __toString(): string
    {
        return json_encode($this->toArray());
    }
}
