<?php


namespace Core\Bundle\CoreBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Core\Bundle\CoreBundle\Entity\Activity;

class LoadActivityData implements FixtureInterface
{

    /**
     * {@inheritdoc}
     */
    public function load(ObjectManager $manager)
    {
        $activity = new Activity();
        $activity->setName('walk');
        $activity->setStartedAt(new \DateTime());

        $manager->persist($activity);
        $manager->flush();
    }
}
