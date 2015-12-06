<?php
/**
 * Created by PhpStorm.
 * User: griga
 * Date: 26.11.2015
 * Time: 22:33
 */

namespace My\AnzeigenBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use \stdClass;

class AnzeigeController extends Controller
{
    public function indexAction()
    {
        $anzeige = new \stdClass();
        $anzeige->name = 'test';
        return $this->render('MyAnzeigenBundle:Anzeige:index.html.twig', array('anzeigen' => array($anzeige)));
    }

}