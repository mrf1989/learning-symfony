<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    #[Route(
        '/blog',
        name: 'blog_list',
        methods: ['GET']
    )]
    public function list(LoggerInterface $logger): Response
    {
        $logger->info('Getting the blog list');
        return new Response('blog-list');
    }
}
