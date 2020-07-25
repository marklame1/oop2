<?php


class BattleResult
{
private $usedJediPowers;

private $winningShip;

private $losingShip;

public function __construct($usedJediPowers, ship $losingShip = null, ship $winningShip = null)
{
    $this->usedJediPowers = $usedJediPowers;
    $this->losingShip = $losingShip;
    $this->winningShip = $winningShip;
}

    /**
     * @return boolean
     */
    public function getUsedJediPowers()
    {
        return $this->usedJediPowers;
    }

    /**
     * @return ship/null
     */
    public function getWinningShip()
    {
        return $this->winningShip;
    }

    /**
     * @return ship/null
     */
    public function getLosingShip()
    {
        return $this->losingShip;
    }
    public function isThereAWinner() {
        Return $this->getWinningShip() == !null;
        }

}