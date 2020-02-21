<?php

namespace App\Model\Game\Entity;

class Game
{
    private Id $id;
    private string $language;
    private string $sport;
    private string $league;
    private string $team1;
    private string $team2;
    private \DateTimeImmutable $start;
    private string $source;
    
    public function __construct(
        Id $id,
        string $language,
        string $sport,
        string $league,
        string $team1,
        string $team2,
        \DateTimeImmutable $start,
        string $source
    )
    {
        $this->id = $id;
        $this->language = $language;
        $this->sport = $sport;
        $this->league = $league;
        $this->team1 = $team1;
        $this->team2 = $team2;
        $this->start = $start;
        $this->source = $source;
    }
}