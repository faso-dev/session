<?php
/**
 * @author Instantech
 */

namespace Instantech\Interfaces;

/**
 * Interface StaticNotificationInterface
 * @package Instantech\Interfaces
 */
interface StaticNotificationInterface
{
    /**
     * @param string $key
     * @param string $message
     * @return void
     * Store message with key in the message array in the global session
     */
    public static function addFlash(string $key, string $message);

    /**
     * @param string $key
     * @return string|null
     * Get message that matched this key
     */
    public static function flash(string $key) ;

    /**
     * @param string $key
     * @return bool
     * Check if this key exist in the message array
     */
    public static function hasFlash(string $key): bool ;

    public static function flashes(): array ;
}