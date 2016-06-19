<?php


/**
 * Abstract Class Player
 */
abstract class Player
{
    /**
     * @var name
     */
    protected $name;

    /**
     * Player constructor.
     * @param $name
     */
    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    abstract function activity();
}

/**
 * Class Forward
 */
class Forward extends Player
{
    /**
     * Player activity
     */
    public function activity()
    {
        echo $this->name . ' from class ' . __CLASS__ . ' try to open the score';
    }
}

/**
 * Class Defender
 */
class Defender extends Player
{
    /**
     * Player activity
     */
    public function activity()
    {
        echo $this->name . ' from class ' . __CLASS__ . ' try to stop forward';
    }
}

/**
 * Class Midfield
 */
class Midfield extends Player
{
    /**
     * Player activity
     */
    public function activity()
    {
        echo $this->name . ' from class ' . __CLASS__ . 'try to pass the ball to his partner';
    }
}

/**
 * Class Team
 */
class Team
{
    /**
     * @var array
     */
    public $players = [];

    /**
     * @var array
     */
    public static $positions = ['Forward', 'Defender', 'Midfield'];

    /**
     * @param Player $player
     */
    public function addPlayerToSquad(Player $player)
    {
        array_push($this->players, $player);
    }

    /**
     * @param $name
     */
    public function choosePlayerForSquad($name)
    {
        $class = self::$positions[rand(1, count(self::$positions) - 1)];
        $this->addPlayerToSquad(new $class($name));
    }
}