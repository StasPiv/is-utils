<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class PgnSaveModel extends AbstractMessageModel
{
    public function __construct(
        protected string $pgn,
    ) {
    }

    public function getPgn(): string
    {
        return $this->pgn;
    }

    protected static function getRequiredKeys(): array
    {
        return ['pgn'];
    }

    public function toArray(): array
    {
        return [
            'pgn' => $this->getPgn(),
        ];
    }
}
