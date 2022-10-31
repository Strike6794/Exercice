<?php

namespace App\DataFixtures;

use App\Entity\Author;
use App\Entity\Book;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {   
        
        $author= new Author();
        $author->setLastname("test");
        $manager->persist($author);
        $manager->flush();
        for ($i=0; $i <5 ; $i++) { 
            $book= new Book();
            $book->setTitle("harry ".$i)
            ->setPublisher("maison")
            ->setIsbn(5464*$i)
            ->setYear(2000+$i)
            ->addAuthor($author);
            $manager->persist($book);
        }
        
        




        $manager->flush();
    }
}
