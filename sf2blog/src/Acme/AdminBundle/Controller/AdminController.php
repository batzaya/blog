<?php

namespace Acme\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Acme\AdminBundle\Entity\Posts;


class AdminController extends Controller
{
    public function addPostAction(Request $request) {
        if($request->isMethod('post')) {
            $em = $this->get('doctrine')->getManager();

            $post = new Posts();
            $title = $request->request->get('garchig');
            $post->setGarchig($title);
            $content = $request->request->get('myPost');
            $post->setMypost($content);
            $dateTimeNow = new \DateTime('now');
            $post->setTime($dateTimeNow);
            $em->persist($post);
            $em->flush();
        }
       
        return $this->render('AcmeAdminBundle:Default:add.html.php');
    }
}
