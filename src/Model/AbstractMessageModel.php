<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

abstract class AbstractMessageModel
{
    abstract public function toArray(): array;

    abstract protected static function getRequiredKeys(): array;

    public function __toString(): string
    {
        return json_encode($this->toArray());
    }

    /**
     * @throws \JsonException
     */
    public static function fromString(string $body): static
    {
        $data = json_decode($body, true, 512, JSON_THROW_ON_ERROR);

        if (!is_array($data)) {
            throw new \JsonException("Can not decode body " . $body);
        }

        $arguments = [];
        foreach (static::getRequiredKeys() as $key) {
            if (!isset($data[$key])) {
                throw new \RuntimeException("Property $key is not found in the data " . $body);
            }

            $arguments[] = $data[$key];
        }

        return new static(...$arguments);
    }
}
