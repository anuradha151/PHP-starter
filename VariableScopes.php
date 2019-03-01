<?php
/**
 * Created by PhpStorm.
 * User: Sameera
 * Date: 3/1/2019
 * Time: 2:44 PM
 */


function myTest()
{
    $x = 5;
    echo "<h2>Variable x is : $x</h2>h2>";

    /**
     * The PHP strpos() function searches for a specific text within a string.
     * If a match is found, the function returns the character position of the first match. If no match is found, it will return FALSE
     */
    echo strpos("Hello world!", "world"); // outputs 6

    /**
     * The PHP strrev() function reverses a string:
     */
    echo strrev("Hello world!");  // outputs !dlrow olleH

    /**
     * The PHP str_word_count() function counts the number of words in a string:
     */
    echo str_word_count("Hello world!"); // outputs 2

    /**
     * The PHP strlen() function returns the length of a string.
     */
    echo strlen("Hello world!"); // outputs 12

    /**
     * The PHP str_replace() function replaces some characters with some other characters in a string.
     */
    echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

}
