<?php
/*
  +------------------------------------------------------------------------+
  | PhalconEye CMS                                                         |
  +------------------------------------------------------------------------+
  | Copyright (c) 2013 PhalconEye Team (http://phalconeye.com/)            |
  +------------------------------------------------------------------------+
  | This source file is subject to the New BSD License that is bundled     |
  | with this package in the file LICENSE.txt.                             |
  |                                                                        |
  | If you did not receive a copy of the license and are unable to         |
  | obtain it through the world-wide-web, please send an email             |
  | to license@phalconeye.com so we can send you a copy immediately.       |
  +------------------------------------------------------------------------+
*/

%header%

namespace %nameUpper%\Controller;

use Core\Controller\ControllerBase;

/**
 * Index controller.
 *
 * @category PhalconEye Module
 * @package  Controller
 *
 * @RoutePrefix("/%name%s", name="%name%s")
 */
class IndexController extends ControllerBase
{
    /**
     * @Route("/", methods={"GET"}, name="%name%s")
     */
    public function indexAction()
    {

    }
}
