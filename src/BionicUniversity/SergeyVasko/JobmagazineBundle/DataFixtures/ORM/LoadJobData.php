<?php

namespace BionicUniversity\SergeyVasko\JobmagazineBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job;
 
class LoadJobData extends AbstractFixture implements OrderedFixtureInterface
{
    public function load(ObjectManager $em)
    {
        $job_expired = new Job();
        $job_expired->setCategory($em->merge($this->getReference('category-programming')));
        $job_expired->setType('полный день');
        $job_expired->setCompany('Microsoft');
        $job_expired->setLogo('logo.gif');
        $job_expired->setUrl('http://www.microsoft.com/');
        $job_expired->setPosition('Разработчик (устаревшая вакансия)');
        $job_expired->setLocation('Лондон, Великобритания');
        $job_expired->setDescription('Требования супер-мэна.');
        $job_expired->setHowToApply('Отправляйте резюме на lorem.ipsum [at] dolor.sit');
        $job_expired->setIsPublic(true);
        $job_expired->setIsActivated(true);
        $job_expired->setToken('job_expired');
        $job_expired->setEmail('job@example.com');
        $job_expired->setCreatedAt(new \DateTime('2013-11-14'));
        
        $job_bu_prog = new Job();
        $job_bu_prog->setCategory($em->merge($this->getReference('category-programming')));
        $job_bu_prog->setType('половина дня');
        $job_bu_prog->setCompany('Bionic University');
        $job_bu_prog->setLogo('bionic.gif');
        $job_bu_prog->setUrl('http://bionic-university.com/developing/');
        $job_bu_prog->setPosition('Web Developer');
        $job_bu_prog->setLocation('Киев, Украина');
        $job_bu_prog->setDescription('Опыт работы от года при разработке сложных проектов на РНР. Знание фермворков.');
        $job_bu_prog->setHowToApply('Отправляйте резюме на info [at] bionic.com');
        $job_bu_prog->setIsPublic(true);
        $job_bu_prog->setIsActivated(true);
        $job_bu_prog->setToken('job_bionic_des');
        $job_bu_prog->setEmail('job@example.com');
        $job_bu_prog->setExpiresAt(new \DateTime('+30 days'));
        
        $job_bu_design = new Job();
        $job_bu_design->setCategory($em->merge($this->getReference('category-design')));
        $job_bu_design->setType('полный день');
        $job_bu_design->setCompany('Bionic University');
        $job_bu_design->setLogo('bionic.gif');
        $job_bu_design->setUrl('http://bionic-university.com/designe/');
        $job_bu_design->setPosition('Web Designer');
        $job_bu_design->setLocation('Киев, Украина');
        $job_bu_design->setDescription('Креативность, наличие портфолио работ.');
        $job_bu_design->setHowToApply('Отправляйте резюме на info [at] bionic.com');
        $job_bu_design->setIsPublic(true);
        $job_bu_design->setIsActivated(true);
        $job_bu_design->setToken('job_bionic_dev');
        $job_bu_design->setEmail('job@example.com');
        $job_bu_design->setExpiresAt(new \DateTime('+30 days'));
        
        $job_bu_1 = new Job();
        $job_bu_1->setCategory($em->merge($this->getReference('category-design')));
        $job_bu_1->setType('полный день');
        $job_bu_1->setCompany('Bionic University');
        $job_bu_1->setLogo('bionic.gif');
        $job_bu_1->setUrl('http://bionic-university.com/1/');
        $job_bu_1->setPosition('Креативный директор');
        $job_bu_1->setLocation('Киев, Украина');
        $job_bu_1->setDescription('Креативность, наличие портфолио работ.');
        $job_bu_1->setHowToApply('Отправляйте резюме на info [at] bionic.com');
        $job_bu_1->setIsPublic(true);
        $job_bu_1->setIsActivated(true);
        $job_bu_1->setToken('job_bionic_creative');
        $job_bu_1->setEmail('job@example.com');
        $job_bu_1->setExpiresAt(new \DateTime('+30 days'));
        
        $em->persist($job_bu_prog);
        $em->persist($job_bu_design);
        $em->persist($job_bu_1);
        $em->persist($job_expired);
        
        for ($i = 100; $i <= 130; $i++) {
            $job1 = new Job();
            $job1->setCategory($em->merge($this->getReference('category-administrator')));
            $job1->setType('полный день');
            $job1->setCompany('Company '.$i);
            $job1->setPosition('Администратор '.$i);
            $job1->setLocation('Харьков, Украина');
            $job1->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job1->setHowToApply('Отправтье резюме на почту lorem.ipsum [at] dolor.sit');
            $job1->setIsPublic(true);
            $job1->setIsActivated(true);
            $job1->setToken('job1_'.$i);
            $job1->setEmail('job@example.com');
            $job1->setExpiresAt(new \DateTime('+30 days'));
     
            $em->persist($job1);
        }
        
        for ($i = 200; $i <= 225; $i++) {
            $job2 = new Job();
            $job2->setCategory($em->merge($this->getReference('category-manager')));
            $job2->setType('половина дня');
            $job2->setCompany('Company '.$i);
            $job2->setPosition('Менеджер '.$i);
            $job2->setLocation('Львов, Украина');
            $job2->setDescription('Lorem ipsum dolor sit amet, consectetur adipisicing elit.');
            $job2->setHowToApply('Отправтье резюме на почту lorem.ipsum [at] dolor.sit');
            $job2->setIsPublic(true);
            $job2->setIsActivated(true);
            $job2->setToken('job2_'.$i);
            $job2->setEmail('job@example.com');
            $job2->setExpiresAt(new \DateTime('+30 days'));
     
            $em->persist($job2);
        }
        
        $em->flush();
    }
 
    public function getOrder()
    {
        return 2; // the order in which fixtures will be loaded
    }
}