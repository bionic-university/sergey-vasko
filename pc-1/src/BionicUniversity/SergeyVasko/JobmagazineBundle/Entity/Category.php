<?php

namespace BionicUniversity\SergeyVasko\JobmagazineBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use BionicUniversity\SergeyVasko\JobmagazineBundle\Utils\Jobmagazine as Jobmagazine;

/**
 * Category
 */
class Category
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $jobs;

    /**
     * @var \Doctrine\Common\Collections\Collection
     */
    private $affiliates;
    
    /**
     * @var ...
     */
    private $active_jobs;
    
    /**
     * @var ...
     */
    private $more_jobs;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->jobs = new \Doctrine\Common\Collections\ArrayCollection();
        $this->affiliates = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * ToString
     */
    public function __toString() 
    {
        return $this->getName() ? $this->getName() : ""; 
    }

    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add jobs
     *
     * @param \BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job $jobs
     * @return Category
     */
    public function addJob(\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job $jobs)
    {
        $this->jobs[] = $jobs;

        return $this;
    }

    /**
     * Remove jobs
     *
     * @param \BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job $jobs
     */
    public function removeJob(\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Job $jobs)
    {
        $this->jobs->removeElement($jobs);
    }

    /**
     * Get jobs
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getJobs()
    {
        return $this->jobs;
    }

    /**
     * Add affiliates
     *
     * @param \BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Affiliate $affiliates
     * @return Category
     */
    public function addAffiliate(\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates[] = $affiliates;

        return $this;
    }

    /**
     * Remove affiliates
     *
     * @param \BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Affiliate $affiliates
     */
    public function removeAffiliate(\BionicUniversity\SergeyVasko\JobmagazineBundle\Entity\Affiliate $affiliates)
    {
        $this->affiliates->removeElement($affiliates);
    }

    /**
     * Get affiliates
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAffiliates()
    {
        return $this->affiliates;
    }
    
    /**
     * Set active jobs
     *
     * @param ...
     * @return ...
     */
    public function setActiveJobs($jobs)
    {
        $this->active_jobs = $jobs;
    }
    
    /**
     * Get active jobs
     *
     * @return ...
     */
    public function getActiveJobs()
    {
        return $this->active_jobs;
    }
    
    /**
     * Set active jobs
     *
     * @param ...
     * @return ...
     */
    public function setMoreJobs($jobs)
    {
        $this->more_jobs = $jobs >=  0 ? $jobs : 0;
    }
    
    /**
     * Get active jobs
     *
     * @return ...
     */
    public function getMoreJobs()
    {
        return $this->more_jobs;
    }
    /**
     * @var string
     */
    private $slug;


    /**
     * Set slug
     *
     * @param string $slug
     * @return Category
     */
    public function setSlug($slug)
    {
        $this->slug = $slug;

        return $this;
    }

    /**
     * Get slug
     *
     * @return string 
     */
    public function getSlug()
    {
        return $this->slug;
    }
    /**
     * @ORM\PrePersist
     */
    public function setSlugValue()
    {
        $this->slug = Jobmagazine::slugify($this->getName());
    }
}
