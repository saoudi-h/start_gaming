<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{

    public function __construct(
        private UserPasswordHasherInterface $passwordHasher
    ) {
    }

    public function load(ObjectManager $manager): void
    {
        $this->loadUsers($manager);
    }

    private function loadUsers(ObjectManager $manager): void
    {
        $i = 1;
        foreach ($this->getUserData() as [$password, $email, $roles]) {
            $user = new User();
            $user->setPassword($this->passwordHasher->hashPassword($user, $password));
            $user->setEmail($email);
            $user->setRoles($roles);

            if (in_array('ROLE_USER', $roles)) {
                $this->addReference('user_' . $i, $user);
                $i++;
            }

            $manager->persist($user);
        }

        $manager->flush();
    }


    private function getUserData(): array
    {
        return [
            // $userData = [$password, $email, $roles];
            ['pass', 'user1@site.com', ['ROLE_USER']],
            ['pass', 'user2@site.com', ['ROLE_USER']],
            ['pass', 'user3@site.com', ['ROLE_USER']],
            ['pass', 'user4@site.com', ['ROLE_USER']],
            ['pass', 'admin1@site.com', ['ROLE_ADMIN']],
            ['pass', 'admin2@site.com', ['ROLE_ADMIN']],
        ];
    }
}
