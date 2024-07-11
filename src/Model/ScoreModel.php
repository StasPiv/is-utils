<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class ScoreModel extends AbstractMessageModel
{
    public function __construct(
        private readonly string $fen,
    ) {
    }

    public function toArray(): array
    {
        return [
            'fen' => $this->fen,
        ];
    }

    protected static function getRequiredKeys(): array
    {
        return ['fen'];
    }
}