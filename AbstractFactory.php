<?php

/**
 * Class Squad
 */
abstract class Squad
{
    public $players;

    abstract function addForward();
    abstract function addMidfield();
    abstract function addDefender();
}

/**
 * Class Forward
 */
abstract class Forward
{
    const CENTREFORWARD = 'CF';
    const RIGHTFROWARD  = 'RF';
    const LEFTFORWAD    = 'LF';


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
    const CENTREMIDFIELD = 'CM';
    const LEFTMIDFIELD   = 'LM';
    const RIGHTMIDFIELD  = 'RM';


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
    const CENTREBACK = 'CB';
    const LEFTBACK   = 'LB';
    const RIGHTBACK  = 'RB';


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

/**
 * Class SquadManager
 */
class SquadManager extends Squad
{
    /**
     * @return ForwardManager
     */
    public function addForward()
    {
        return new ForwardManager();
    }

    /**
     * @return MidfieldManager
     */
    public function addMidfield()
    {
        return new MidfieldManager();
    }

    /**
     * @return DefenderManager
     */
    public function addDefender()
    {
        return new DefenderManager();
    }

}

/**
 * Class ForwardManager
 */
class ForwardManager extends Forward
{
    /**
     * @param $position
     * @return CentreForward|LeftForward|RightForward
     * @throws Exception
     */
    public function getForward($position)
    {
        switch($position) {
            case static::CENTREFORWARD:
                return new CentreForward();
            break;
            case static::LEFTFORWAD:
                return new LeftForward();
            break;
            case static::RIGHTFROWARD:
                return new RightForward();
            break;
            default:
                throw new Exception("Can't create object " . get_parent_class($this) . " for this position $position");
                break;
        }
    }
}

/**
 * Class MidfieldManager
 */
class MidfieldManager extends Midfield
{
    /**
     * @param $position
     * @return CentreMidfield|LeftMidfield|RightMidfield
     * @throws Exception
     */
    public function getMidfield($position)
    {
        switch($position) {
            case static::CENTREMIDFIELD:
                return new CentreMidfield();
                break;
            case static::LEFTMIDFIELD:
                return new LeftMidfield();
                break;
            case static::RIGHTMIDFIELD:
                return new RightMidfield();
                break;
            default:
                throw new Exception("Can't create object " . get_parent_class($this) . " for this position $position");
                break;
        }
    }
}

/**
 * Class DefenderManager
 */
class DefenderManager extends Defender
{
    /**
     * @param $position
     * @return CentreDefender|LeftDefender|RightDefender
     * @throws Exception
     */
    public function getDefender($position)
    {
        switch($position) {
            case static::CENTREBACK:
                return new CentreDefender();
                break;
            case static::LEFTBACK:
                return new LeftDefender();
                break;
            case static::RIGHTBACK:
                return new RightDefender();
                break;
            default:
                throw new Exception("Can't create object " . get_parent_class($this) . " for this position $position");
                break;
        }
    }
}