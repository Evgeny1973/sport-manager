<?php


namespace App\Tests\Unit\Model\Game\Entity;


use App\Model\Game\Entity\Game;
use App\Model\Game\Entity\Id;
use PHPUnit\Framework\TestCase;
use Ramsey\Uuid\Uuid;

class GameTest extends TestCase
{
    public function testSuccess(): void
    {
        $game = new Game(
            $id = new Id(Uuid::uuid4()->toString()),
            $language = 'ru',
            $sport = 'football',
            $league = 'League UEFA',
            $firstTeam = 'Real M',
            $secondTeam = 'Barcelona',
            $start = new \DateTimeImmutable(),
            $source = 'sportdata.com'
        );
        
        self::assertEquals($id, $game->getId());
        self::assertEquals($language, $game->getLanguage());
        self::assertEquals($sport, $game->getSport());
        self::assertEquals($league, $game->getLeague());
        self::assertEquals($firstTeam, $game->getfirstTeam());
        self::assertEquals($secondTeam, $game->getsecondTeam());
        self::assertEquals($source, $game->getSource());
    }
}