<?php
declare(strict_types=1);

class Player
{
    private array $cards;
    private bool $lost;

    /**
     * @param bool $lost
     */
    public function __construct(bool $lost)
    {
        $this->lost = false;
    }

    public function hit()
    {

    }

    public function surrender()
    {

    }

    public function getScore()
    {

    }

    public function hasLost()
    {

    }


}