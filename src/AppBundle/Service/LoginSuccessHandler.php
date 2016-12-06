<?php
/**
 * Created by PhpStorm.
 * User: mantas
 * Date: 16.12.6
 * Time: 12.58
 */

namespace AppBundle\Service;

use Symfony\Component\Security\Core\Authorization\AuthorizationCheckerInterface;
use Symfony\Component\Security\Http\Authentication\AuthenticationSuccessHandlerInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\Routing\Router;

class LoginSuccessHandler implements AuthenticationSuccessHandlerInterface
{
    protected $router;
    protected $security;

    public function __construct(Router $router, AuthorizationCheckerInterface $security)
    {
        $this->router   = $router;
        $this->security = $security;
    }

    public function onAuthenticationSuccess(Request $request, TokenInterface $token)
    {
        if ($this->security->isGranted('ROLE_ADMIN'))
        {
            $response = new RedirectResponse($this->router->generate('admin_home'));
        }
        elseif ($this->security->isGranted('ROLE_LECTOR'))
        {
            $response = new RedirectResponse($this->router->generate('lector_home'));
        }
        elseif ($this->security->isGranted('ROLE_STUDENT'))
        {
            $response = new RedirectResponse($this->router->generate('student_home'));
        }
        return $response;
    }
}