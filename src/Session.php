<?php


namespace Instantech;

use Instantech\Interfaces\
{
    StaticNotificationInterface,
    StaticSessionInterface
};

class Session implements StaticSessionInterface, StaticNotificationInterface
{

    /**
     * @inheritDoc
     */
    public static function get(string $key)
    {
        if (self::has($key)) {
            return $_SESSION[$key];
        }
        return null;
    }

    /**
     * @inheritDoc
     */
    public static function set(string $key, $data)
    {
        $_SESSION[$key] = $data;
    }

    /**
     * @inheritDoc
     */
    public static function has(string $key): bool
    {
        return isset($_SESSION[$key]);
    }

    /**
     * @inheritDoc
     */
    public static function remove(string $key)
    {
        unset($_SESSION[$key]);
    }

    /**
     * @inheritDoc
     */
    public static function destroy()
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_destroy();
        }
    }

    /**
     * @inheritDoc
     */
    public static function all()
    {
        return $_SESSION;
    }

    /**
     * @inheritDoc
     */
    public static function add(string $key, array $data)
    {
        if (self::has($key)) {
            $_SESSION[$key][] = $data;
        }
    }

    /**
     * @inheritDoc
     */
    public static function clear()
    {
        $_SESSION = [];
    }

    /**
     * @inheritDoc
     */
    public static function addFlash(string $key, string $message)
    {
       $_SESSION['flash'][$key] = $message;
    }

    /**
     * @inheritDoc
     */
    public static function flash(string $key)
    {
       if (self::hasFlash($key)){
           /**
            * @var string
            */
           $message = $_SESSION['flash'][$key];
           unset($_SESSION['flash'][$key]);
           return $message;
       }
       return null;
    }

    /**
     * @inheritDoc
     */
    public static function hasFlash(string $key): bool
    {
       return isset($_SESSION['flash'][$key]);
    }

    /**
     * @inheritDoc
     */
    public static function flashes(): array
    {
        return $_SESSION['flash'];
    }
}