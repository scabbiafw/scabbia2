<?php
/**
 * Scabbia2 Standard Package
 * http://www.scabbiafw.com/
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        http://github.com/scabbiafw/scabbia2 for the canonical source repository
 * @copyright   2010-2014 Scabbia Framework Organization. (http://www.scabbiafw.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

namespace MyProject\FrontModule\Models;

/**
 * HomeModel model
 *
 * @package     MyProject\FrontModule\Models
 * @author      Eser Ozvataf <eser@sent.com>
 * @since       2.0.0
 */
class HomeModel
{
    /**
     * Gets the welcome message
     *
     * @return string
    */
    public function getWelcomeMessage()
    {
        return "Welcome!";
    }
}