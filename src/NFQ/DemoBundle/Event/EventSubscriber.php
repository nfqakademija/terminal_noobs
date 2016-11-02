<?php
/**
 * Created by PhpStorm.
 * User: matas
 * Date: 16.11.2
 * Time: 17.41
 */

namespace NFQ\DemoBundle\Event;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\Event\FilterResponseEvent;
use NFQ\DemoBundle\Event\Events;
class EventSubscriber implements EventSubscriberInterface
{

    public static function getSubscribedEvents()
    {
        return array(
            /*Events::DO_SOMETHING => array(
                array('onKernelResponsePre', 10),
                array('onKernelResponsePost', -10),
            ),*/
            Events::DO_SOMETHING => 'onDoSomething',
        );
    }

    public function onKernelResponsePre(FilterResponseEvent $event)
    {
        // ...
    }

    public function onKernelResponsePost(FilterResponseEvent $event)
    {
        // ...
    }

    public function onDoSomething(PreCreateEvent $event)
    {

        $shoes = $event->getShoes();
        if( is_array ($shoes)) {
            foreach ($shoes as $shoe) {
                $shoe->setShoeColour("RLY BLACK");
            }
        } else {
            $shoes->setShoeColour("RLY BLACK");
        }
    }

}