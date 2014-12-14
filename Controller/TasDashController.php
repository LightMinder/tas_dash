<?php
/**
 * @file
 * Contains \Drupal\tas_dash\Controller\TasDashController.
 */

namespace Drupal\tas_dash\Controller;
/*
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\Datetime\DateFormatter;
use Drupal\Core\Flood\FloodInterface;
use Drupal\contact\ContactFormInterface;
use Drupal\user\UserInterface;
use Drupal\Component\Utility\String;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpKernel\Exception\AccessDeniedHttpException;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
*/

/**
 * Controller routines for contact routes.
 */
//class ContactController extends ControllerBase {
class TasDashController  {
    public function tas_dash() {
        return array(
          "#markup" => t('Hello World!'),
        );
    }
}
