<?php

namespace App\Model\Game\Entity;

class Game
{
    private $id;
    private $language;
    private $sport;
    private $league;
    private $team1;
    private $team2;
    private $start;
    private $source;
    
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