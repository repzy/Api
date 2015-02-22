<?php
namespace Acme\DemoBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Acme\DemoBundle\Entity\Post;

class LoadPostData implements FixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {
        $post1 = new Post();
        $post1->setTitle('Hello Title');
        $post1->setDate(new \DateTime());
        $post1->setBody(
            'Lorem ipsum dolor sit amet, consequat blandit scelerisque lacus in quis.
             Felis cras, adipisci in ac donec donec nulla quis. Luctus justo ultricies at, ligula dolor quis,
             dictum libero facilisis potenti. Ipsum consequat, purus nibh eget ea pede dis. Neque in qui aenean
             purus. Quis orci sed at aliquet, tempor facilisis turpis sapien molestie rutrum, mus orci
             malesuada dis integer dignissim dui, tempor ligula commodo lobortis ac. Ut urna varius quis
             odio tortor, elementum enim vestibulum. Sed lorem. Amet diam, aptent facere, nec ullamcorper,
             viverra nam et ut suscipit, ornare ut sed urna sem cursus id.'
        );

        $manager->persist($post1);

        $post2 = new Post();
        $post2->setTitle('A day with Symfony2');
        $post2->setDate(new \DateTime("2011-07-23 06:12:33"));
        $post2->setBody(
            'Lorem ipsum dolor sit amet, consequat blandit scelerisque lacus in quis.
             Felis cras, adipisci in ac donec donec nulla quis. Luctus justo ultricies at, ligula dolor quis,
             dictum libero facilisis potenti. Ipsum consequat, purus nibh eget ea pede dis. Neque in qui aenean
             purus. Quis orci sed at aliquet, tempor facilisis turpis sapien molestie rutrum, mus orci
             malesuada dis integer dignissim dui, tempor ligula commodo lobortis ac. Ut urna varius quis
             odio tortor, elementum enim vestibulum. Sed lorem. Amet diam, aptent facere, nec ullamcorper,
             viverra nam et ut suscipit, ornare ut sed urna sem cursus id.'
        );

        $manager->persist($post2);

        $post3 = new Post();
        $post3->setTitle('The pool on the roof must have a leak');
        $post3->setDate(new \DateTime("2011-07-16 16:14:06"));
        $post3->setBody(
            'Lorem ipsum dolor sit amet, consequat blandit scelerisque lacus in quis.
             Felis cras, adipisci in ac donec donec nulla quis. Luctus justo ultricies at, ligula dolor quis,
             dictum libero facilisis potenti. Ipsum consequat, purus nibh eget ea pede dis. Neque in qui aenean
             purus. Quis orci sed at aliquet, tempor facilisis turpis sapien molestie rutrum, mus orci
             malesuada dis integer dignissim dui, tempor ligula commodo lobortis ac. Ut urna varius quis
             odio tortor, elementum enim vestibulum. Sed lorem. Amet diam, aptent facere, nec ullamcorper,
             viverra nam et ut suscipit, ornare ut sed urna sem cursus id.'
        );

        $manager->persist($post3);

        $post4 = new Post();
        $post4->setTitle('The grid - A digital frontier');
        $post4->setDate(new \DateTime("2011-06-02 18:54:12"));
        $post4->setBody(
            'Lorem ipsum dolor sit amet, consequat blandit scelerisque lacus in quis.
             Felis cras, adipisci in ac donec donec nulla quis. Luctus justo ultricies at, ligula dolor quis,
             dictum libero facilisis potenti. Ipsum consequat, purus nibh eget ea pede dis. Neque in qui aenean
             purus. Quis orci sed at aliquet, tempor facilisis turpis sapien molestie rutrum, mus orci
             malesuada dis integer dignissim dui, tempor ligula commodo lobortis ac. Ut urna varius quis
             odio tortor, elementum enim vestibulum. Sed lorem. Amet diam, aptent facere, nec ullamcorper,
             viverra nam et ut suscipit, ornare ut sed urna sem cursus id.'
        );

        $manager->persist($post4);

        $post5 = new Post();
        $post5->setTitle('You\'re either a one or a zero. Alive or dead');
        $post5->setDate(new \DateTime("2011-04-25 15:34:18"));
        $post5->setBody(
            'Lorem ipsum dolor sit amet, consequat blandit scelerisque lacus in quis.
             Felis cras, adipisci in ac donec donec nulla quis. Luctus justo ultricies at, ligula dolor quis,
             dictum libero facilisis potenti. Ipsum consequat, purus nibh eget ea pede dis. Neque in qui aenean
             purus. Quis orci sed at aliquet, tempor facilisis turpis sapien molestie rutrum, mus orci
             malesuada dis integer dignissim dui, tempor ligula commodo lobortis ac. Ut urna varius quis
             odio tortor, elementum enim vestibulum. Sed lorem. Amet diam, aptent facere, nec ullamcorper,
             viverra nam et ut suscipit, ornare ut sed urna sem cursus id.'
        );

        $manager->persist($post5);

        $manager->flush();
    }

    public function getOrder()
    {
        return 1;
    }
}