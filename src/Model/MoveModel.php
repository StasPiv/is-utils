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
}