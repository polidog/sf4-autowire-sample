<?php


namespace App\Controller;
use App\Service\ServiceInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

/**
 * @Route("/")
 *
 * Class TopController
 * @package App\Controller
 */
class TopController
{
    /**
     * @var ServiceInterface
     */
    private $service;

    /**
     * @param ServiceInterface $service
     */
    public function __construct(ServiceInterface $service)
    {
        $this->service = $service;
    }

    public function __invoke()
    {
        return new Response($this->service->run());
    }
}
