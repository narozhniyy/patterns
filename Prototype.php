<?php

/**
 * Class PlayersLessons
 */
class PlayersLessons
{
    /**
     * @var Forward
     */
    private $forward;
    /**
     * @var Midfield
     */
    private $midfield;
    /**
     * @var Defender
     */
    private $defender;

    public function __construct(Forward $forward, Midfield $midfield, Defender $defender)
    {
        $this->forward = $forward;
        $this->midfield = $midfield;
        $this->defender = $defender;
    }

    /**
     * @return Forward
     */
    public function getForward()
    {
        return clone $this->forward;
    }

    /**
     * @return Midfield
     */
    public function getMidfield()
    {
        return clone $this->midfield;
    }

    /**
     * @return Defender
     */
    public function getDefender()
    {
        return clone $this->defender;
    }

    /**
     * @param $obj
     * @throws Exception
     */
    public function lesson($obj)
    {
        $className = get_parent_class($obj);
        switch($className) {
            case 'Forward':
                $this->forward->kick++;
                break;
            case 'Midfield':
                $this->midfield->pass++;
                break;
            case 'Defender':
                $this->defender->foul++;
                break;
            default:
                throw new Exception("Try to lesson undefined position");
                break;
        }
    }

}

/**
 * Class Forward
 */
abstract class Forward
{
    /**
     * @var int
     */
    public $kick = 10;

    public function __construct()
    {
        echo "<p>" . get_class($this) . " object created</p>";
    }

}

/**
 * Class CentreForward
 */
class CentreForward extends Forward
{

}

/**
 * Class LeftForward
 */
class LeftForward extends Forward
{

}

/**
 * Class RightForward
 */
class RightForward extends Forward
{

}

/**
 * Class Midfield
 */
abstract class Midfield
{
    /**
     * @var int
     */
    public $pass = 10;

    public function __construct()
    {
        echo "<p>" . get_class($this) . " object created</p>";
    }

}

/**
 * Class CentreMidfield
 */
class CentreMidfield extends Midfield
{

}

/**
 * Class LeftMidfield
 */
class LeftMidfield extends Midfield
{

}

/**
 * Class RightMidfield
 */
class RightMidfield extends Midfield
{

}

/**
 * Class Defender
 */
abstract class Defender
{
    /**
     * @var int
     */
    public $foul = 10;

    public function __construct()
    {
        echo "<p>" . get_class($this) . " object created</p>";
    }

}

/**
 * Class CentreDefender
 */
class CentreDefender extends Defender
{

}

/**
 * Class LeftDefender
 */
class LeftDefender extends Defender
{

}

/**
 * Class RightDefender
 */
class RightDefender extends Defender
{

}
