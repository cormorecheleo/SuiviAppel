<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\User;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $user = new User();
        $user->setEmail('lolo@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'motdepasse'
        ));
        $manager->persist($user);

        $manager->flush();
    }
}
