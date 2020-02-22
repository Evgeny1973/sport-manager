<?php


namespace App\Model\Game\Entity;


use \Ramsey\Uuid\Uuid;
use Webmozart\Assert\Assert;

class Id
{
    /**
     * @var string
     */
    public string $value;
    
    public function __construct(string $value)
    {
        Assert::notEmpty($value);
        $this->value = $value;
    }
    
    /**
     * @return string
     * @throws \Exception
     */
    public static function next(): string
    {
        return new self(Uuid::uuid4()->toString());
    }
    
    /**
     * @return string
     */
    public function getValue(): string
    {
        return $this->value;
    }
    
    public function __toString()
    {
        return $this->value;
    }
}