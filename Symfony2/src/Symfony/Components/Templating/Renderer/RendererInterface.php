<?php

namespace Symfony\Components\Templating\Renderer;

use Symfony\Components\Templating\Engine;
use Symfony\Components\Templating\Storage\Storage;

/*
 * This file is part of the symfony package.
 *
 * (c) Fabien Potencier <fabien.potencier@symfony-project.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * RendererInterface is the interface all renderer classes must implement.
 *
 * @package    symfony
 * @subpackage templating
 * @author     Fabien Potencier <fabien.potencier@symfony-project.com>
 * @version    SVN: $Id$
 */
interface RendererInterface
{
  /**
   * Evaluates a template.
   *
   * @param Storage $template   The template to render
   * @param array             $parameters An array of parameters to pass to the template
   *
   * @return string|false The evaluated template, or false if the renderer is unable to render the template
   */
  function evaluate(Storage $template, array $parameters = array());

  /**
   * Sets the template engine associated with this renderer.
   *
   * @param Engine $engine A Engine instance
   */
  function setEngine(Engine $engine);
}
