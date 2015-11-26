<?php
/**
 * This class handles configuration credentials from the env
 *
 * @package Sirolad\app\base\controllers\EmojiController
 * @author  Surajudeen Akande <surajudeen.akande@andela.com>
 * @license MIT <https://opensource.org/licenses/MIT>
 * @link http://www.github.com/andela-sakande
 */

namespace Sirolad\app\base;

use Dotenv\Dotenv;

/**
* Accessing the env file
*/
class Config
{
    public static function loadenv()
    {
        $dotenv = new Dotenv(__DIR__. '/../..');
        $dotenv->load();
    }
}