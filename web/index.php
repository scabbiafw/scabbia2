<?php
/**
 * Scabbia2 Standard Package
 * https://github.com/eserozvataf/scabbia2
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @link        https://github.com/eserozvataf/scabbia2 for the canonical source repository
 * @copyright   2010-2016 Eser Ozvataf. (http://eser.ozvataf.com/)
 * @license     http://www.apache.org/licenses/LICENSE-2.0 - Apache License, Version 2.0
 */

$tProject = require __DIR__ . "/../src/bootstrap.php";

// load project configuration file(s)
$tProject->addConfig(__DIR__ . "/../etc/project.yml");

/*
// pick an application
$tCore->pickApplication(function () {
    // ...
});

// pick an application
$tCore->pickEnvironment(function () {
    // ...
});

// run
$tCore->run();
*/
