<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class PgnSaveModel extends AbstractMessageModel
{
    public function __construct(
        private readonly string $pgn,
    ) {
    }

    public function getPgn(): string
    {
        return $this->pgn;
    }

    public function toArray(): array
    {
        return [
            'pgn' => $this->getPgn(),
        ];
    }
}
