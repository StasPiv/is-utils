<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

abstract class AbstractMessageModel
{
    abstract public function toArray(): array;

    abstract protected function getRequiredKeys(): array;

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

        $instance = new static();

        foreach ($instance->getRequiredKeys() as $key) {
            if (!isset($data[$key])) {
                throw new \RuntimeException("Property $key is not found in the data " . $body);
            }
        }

        foreach ($data as $key => $value) {
            if (!property_exists($instance, $key)) {
                throw new \RuntimeException("Property $key is not found in the model " . static::class);
            }

            $instance->{$key} = $value;
        }

        return $instance;
    }
}
