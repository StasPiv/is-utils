<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class PgnParseModel extends AbstractMessageModel
{
    public function __construct(
        protected readonly string $id,
        protected readonly string $pgn,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getPgn(): string
    {
        return $this->pgn;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'pgn' => $this->pgn,
        ];
    }

    protected static function getRequiredKeys(): array
    {
        return ['id', 'pgn'];
    }
}