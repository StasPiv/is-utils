<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class MoveModel extends AbstractMessageModel
{
    public function __construct(
        private readonly int $moveNumber,
        private readonly string $side,
        private readonly string $player,
        private readonly string $opponent,
        private readonly string $moveNotation,
        private readonly string $fenBefore,
        private readonly string $fenAfter,
    ) {
    }

    public function toArray(): array
    {
        return [
            'moveNumber' => $this->moveNumber,
            'side' => $this->side,
            'player' => $this->player,
            'opponent' => $this->opponent,
            'moveNotation' => $this->moveNotation,
            'fenBefore' => $this->fenBefore,
            'fenAfter' => $this->fenAfter,
        ];
    }

    protected static function getRequiredKeys(): array
    {
        return ['moveNumber', 'side', 'player', 'opponent', 'moveNotation', 'fenBefore', 'fenAfter'];
    }

    public function getMoveNumber(): int
    {
        return $this->moveNumber;
    }

    public function getSide(): string
    {
        return $this->side;
    }

    public function getPlayer(): string
    {
        return $this->player;
    }

    public function getOpponent(): string
    {
        return $this->opponent;
    }

    public function getMoveNotation(): string
    {
        return $this->moveNotation;
    }

    public function getFenBefore(): string
    {
        return $this->fenBefore;
    }

    public function getFenAfter(): string
    {
        return $this->fenAfter;
    }
}