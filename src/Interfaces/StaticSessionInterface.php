<?php
/**
 * @author Instantech
 * @copyright 2019
 */

namespace Instantech\Interfaces;

/**
 * Interface SessionInterface
 * @package Instantech
 * A Static interface of basic session implémentation
 */
interface StaticSessionInterface
{
    /**
     * @param string $key
     * @param array $data
     * @return mixed
     * Add an array data to the exist key
     * Session::add('test',['name => 'toto', 'age'=>18]
     */
    public static function add(string $key, array $data);
    /**
     * @param string $key
     * @return mixed|null
     * Return value save in session that matched this key or null
     */
    public static function get(string $key);

    /**
     * @param string $key
     * @param mixed $data
     * @return mixed
     * Set any value with key in the global session
     */
    public static function set(string $key, $data);

    /**
     * @param string $key
     * @return bool
     * Cheick if this key exist in the session
     */
    public static function has(string $key):bool;

    /**
     * @param string $key
     * @return mixed
     * Remove all data storage in the session with this key
     */
    public static function remove(string $key);

    /**
     * @return mixed
     * Destroy the session
     */
    public static function destroy();

    /**
     * @return array|mixed|null
     * Return all data storage in the session
     */
    public static function all();

    /**
     * @return mixed
     * Remove all data storage in the session
     */
    public static function clear();
}