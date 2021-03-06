<?php


namespace PhpUseful;

/**
 * Class Functions
 * @package PhpUseful
 *
 * This class list all commonly used methods tha can be referenced statically
 */
class Functions
{
    /**
     * Returns a randomly generated string for given length
     * @param int $length
     * @return string
     */
    public static function randomString(int $length): string
    {
        $characters = 'AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz0123456789';
        $string = '';
        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[rand(0, strlen($characters) - 1)];
        }
        return $string;
    }

    /**
     * escapes a given string
     * @param string $input
     * @return string
     */
    public static function escapeInput(string $input): string
    {
        $escaped_input = htmlspecialchars(stripslashes(trim($input)));
        return $escaped_input;
    }


}