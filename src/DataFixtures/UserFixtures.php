<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordHasherInterface $encoder)
    {
        $this->encoder = $encoder; 
    }


    public function load(ObjectManager $manager): void
    {
        $user = new User();
        $user->setName('Martinel');
        $user->setFirstname('Lea');
        $user->setEmail('Leamartinel@admin.com');
        $user->setRoles(["ROLE_USER", "ROLE_ADMIN"]);
        $encodePassword = $this->encoder->hashPassword($user, 'passadmin');
        $user->setPassword($encodePassword);
        $manager->persist($user);

        $manager->flush();
    }
}
