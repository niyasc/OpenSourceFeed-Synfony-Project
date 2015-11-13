<?php
namespace AppBundle\Handler;

use Symfony\Component\Security\Http\Logout\LogoutSuccessHandlerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\DependencyInjection\ContainerAware;

class LogoutSuccessHandler extends ContainerAware implements LogoutSuccessHandlerInterface
{
  public function onLogoutSuccess(Request $request)
  {
    // dynamic route logic

    return new RedirectResponse($this->container->get('router')->generate('dynamic_route_name'));
  }
}
?>
