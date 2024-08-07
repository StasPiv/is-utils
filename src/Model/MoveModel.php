<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class MoveModel extends AbstractMessageModel
{
    private string $gameId;

    public function __construct(
        private readonly int $moveNumber,
        private readonly string $side,
        private readonly PlayerModel $player,
        private readonly PlayerModel $opponent,
        private readonly string $moveNotation,
        private readonly string $fenBefore,
        private readonly string $fenAfter,
    ) {
    }

    public function toArray(): array
    {
        return [
            'gameId' => $this->gameId,
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

    public function getGameId(): string
    {
        return $this->gameId;
    }

    public function setGameId(string $gameId): MoveModel
    {
        $this->gameId = $gameId;

        return $this;
    }

    public function getMoveNumber(): int
    {
        return $this->moveNumber;
    }

    public function getSide(): string
    {
        return $this->side;
    }

    public function getPlayer(): PlayerModel
    {
        return $this->player;
    }

    public function getOpponent(): PlayerModel
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