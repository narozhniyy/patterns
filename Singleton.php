<?php

class Singleton
{
    /**
     * @var Singleton int attribute
     */
    public $step;

    /**
     * @var Singleton The reference to Singleton instance of this class
     */
    private static $_instance;

    /**
     * Protected constructor to prevent creating a new instance of the
     * Singleton via the `new` operator from outside of this class.
     */
    private function __construct()
    {

    }

    /**
     * Returns the Singleton instance of this class.
     *
     * @return Singleton The Singleton instance.
     */
    public static function getInstance()
    {
        if (self::$_instance === null) {
            self::$_instance = new Singleton();
        }

        return self::$_instance;
    }

    /**
     * Set the Singleton step attribute
     *
     * @param $step int
     */
    public function setStep($step)
    {
        $this->step = $step;
    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * Singleton instance.
     *
     * @return void
     */
    private function __clone()
    {

    }

    /**
     * Private unserialize method to prevent unserializing of the Singleton
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {

    }

}