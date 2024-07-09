<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Model;

class PgnSaveModel extends AbstractMessageModel
{
    protected string $pgn;

    public function getPgn(): string
    {
        return $this->pgn;
    }

    protected function getRequiredKeys(): array
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
