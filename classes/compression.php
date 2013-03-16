<?php

defined('SYSPATH') or die('No direct script access.');

/**
 * 
 * @package Compression
 * @author Guillaume Poirier-Morency <guillaumepoiriermorency@gmail.com>
 */
abstract class Compression {

    protected static $_instances = array();
    public static $default = "Zlib";

    /**
     * 
     * @param string $group configuration group.
     * @return \Compression
     */
    public static function instance($group = NULL) {

        if ($group === NULL) {
            $group = static::$default;
        }

        if (isset(Compression::$_instances[$group])) {
            return Compression::$_instances[$group];
        }

        $config = Kohana::$config->load("compression.$group");

        $driver = "Compression" . ucfirst($config["driver"]);

        return new $driver($group);
    }

    /**
     *
     * @var array 
     */
    private $_config;

    protected function __construct(array $config) {
        $this->_config = $config;
    }

    public function config($array, $path, $default = NULL, $delimiter = NULL) {
        return Arr::path($array, $path, $default, $delimiter);
    }

    public abstract function compress($input);

    public abstract function uncompress($input);
}

?>
