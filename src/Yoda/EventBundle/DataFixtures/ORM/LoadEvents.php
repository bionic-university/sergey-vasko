<?php


namespace Yoda\EventBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Yoda\EventBundle\Entity\Event;

class LoadEvents implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $event = new Event();
        $event->setName('Dart\'s surprise birthday party!' );
        $event->setLocation('Deathstar');
        $event->setTime(new \DateTime('tomorrow noon'));
        $event->setDetails('Ha! Darth HATES surprises!');
        $manager->persist($event);
        $manager->flush();

        $event2 = new Event();
        $event2->setName('name2' );
        $event2->setLocation('location2');
        $event2->setTime(new \DateTime('Thursday noon'));
        $event2->setDetails('descr2');
        $manager->persist($event2);
        $manager->flush();
    }
}