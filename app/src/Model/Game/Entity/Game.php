<?php

namespace App\Model\Game\Entity;

class Game
{
    private Id $id;
    private string $language;
    private string $sport;
    private string $league;
    private string $firstTeam;
    private string $secondTeam;
    private \DateTimeImmutable $start;
    private string $source;
    
    public function __construct(
        Id $id,
        string $language,
        string $sport,
        string $league,
        string $firstTeam,
        string $secondTeam,
        \DateTimeImmutable $start,
        string $source
    )
    {
        $this->id = $id;
        $this->language = $language;
        $this->sport = $sport;
        $this->league = $league;
        $this->firstTeam = $firstTeam;
        $this->secondTeam = $secondTeam;
        $this->start = $start;
        $this->source = $source;
    }
}