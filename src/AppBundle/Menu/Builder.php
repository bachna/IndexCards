<?php
namespace AppBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerAwareTrait;
//use Knp\Menu\Matcher\Matcher;
//use Knp\Menu\MenuFactory;
//use Knp\Menu\Renderer\ListRenderer;

//class Builder implements ContainerAwareInterface
//{
//    use ContainerAwareTrait;
//
//    public function mainMenu(FactoryInterface $factory, array $options)
//    {
//        $menu = $factory->createItem("root");
//
//        $menu->addChild("Register", array("route" => "fos_user_registration_register"));
//        $menu->addChild("Login", array ("route" => "fos_user_security_login"));
//
//        return $menu;
//    }
//}

//class Builder
//    implements ContainerAwareInterface
//{
//    use ContainerAwareTrait;
//
//    public function mainMenu(FactoryInterface $factory, array $options)
//    {
//        $factory = new MenuFactory();
//        $menu = $factory->createItem("root");
//        $menu->addChild("Register", array("uri" => "fos_user_registration_register"));
//        $menu->addChild("Login", array ("uri" => "fos_user_security_login"));
//
//        $renderer = new ListRenderer(new Matcher());
//        echo $renderer->render($menu);
//    }
//}

class Builder implements ContainerAwareInterface
{
    use ContainerAwareTrait;

    public function mainMenu(FactoryInterface $factory, array $options)
    {
        $menu = $factory->createItem("root");

        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_FULLY')) {
            $menu
                ->addChild("Logout", array("route" => "fos_user_security_logout"))
                ->setLinkAttribute('class', 'item');
        } else {
            $menu
                ->addChild("Register", array("route" => "fos_user_registration_register"))
                ->setLinkAttribute('class', 'item');
            $menu
                ->addChild("Login", array("route" => "fos_user_security_login"))
                ->setLinkAttribute('class', 'item');
        }

        return $menu;
    }
}

