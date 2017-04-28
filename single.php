<?php

namespace App\Theme;

/*
|------------------------------------------------------------------
| Single Controller
|------------------------------------------------------------------
|
| Think about theme template files as some sort of controllers
| from MVC design pattern. They should link application
| logic with your theme view templates files.
|
*/

use function App\Theme\template;

/**
 * Renders single post.
 *
 * @uses resources/templates/single.tpl.php
 */
template('single');