<?php


namespace App\Tests\Unit\Model\Game\Entity;


use App\Model\Game\Entity\Game;
use PHPUnit\Framework\TestCase;

class GameTest extends TestCase
{
    public function testSuccess(): void
    {
        $game = new Game(
            $language = 'ru',
            $sport = 'football',
            $league = 'League UEFA',
            $team1 = 'Real M',
            $team2 = 'Barcelona',
            $start = new \DateTimeImmutable(),
            $source = 'sportdata.com'
        );
        
        self::assertEquals($language, $game->getLanguage());
        self::assertEquals($sport, $game->getSport());
        self::assertEquals($league, $game->getLeague());
        self::assertEquals($team1, $game->getTeam1());
        self::assertEquals($team2, $game->getTeam2());
        self::assertEquals($source, $game->getSource());
    }
}