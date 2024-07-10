<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class PlayerModel extends AbstractMessageModel
{
    public function __construct(
        private readonly string $name,
        private readonly int $elo,
    ) {
    }

    public function toArray(): array
    {
        return [
            'name' => $this->name,
            'elo' => $this->elo,
        ];
    }

    protected static function getRequiredKeys(): array
    {
        return ['name', 'elo'];
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getElo(): int
    {
        return $this->elo;
    }
}