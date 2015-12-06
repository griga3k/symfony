<?php

namespace Roal\JewelryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 */
class Product
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $categoryId;

    /**
     * @var integer
     */
    private $userId;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $notice;

    /**
     * @var \DateTime
     */
    private $creationTs;

    /**
     * @var \DateTime
     */
    private $changeTs;


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
     * Set categoryId
     *
     * @param integer $categoryId
     * @return Product
     */
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    
        return $this;
    }

    /**
     * Get categoryId
     *
     * @return integer 
     */
    public function getCategoryId()
    {
        return $this->categoryId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Product
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
    
        return $this;
    }

    /**
     * Get userId
     *
     * @return integer 
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set name
     *
     * @param string $name
     * @return Product
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
     * Set description
     *
     * @param string $description
     * @return Product
     */
    public function setDescription($description)
    {
        $this->description = $description;
    
        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set notice
     *
     * @param string $notice
     * @return Product
     */
    public function setNotice($notice)
    {
        $this->notice = $notice;
    
        return $this;
    }

    /**
     * Get notice
     *
     * @return string 
     */
    public function getNotice()
    {
        return $this->notice;
    }

    /**
     * Set creationTs
     *
     * @param \DateTime $creationTs
     * @return Product
     */
    public function setCreationTs($creationTs)
    {
        $this->creationTs = $creationTs;
    
        return $this;
    }

    /**
     * Get creationTs
     *
     * @return \DateTime 
     */
    public function getCreationTs()
    {
        return $this->creationTs;
    }

    /**
     * Set changeTs
     *
     * @param \DateTime $changeTs
     * @return Product
     */
    public function setChangeTs($changeTs)
    {
        $this->changeTs = $changeTs;
    
        return $this;
    }

    /**
     * Get changeTs
     *
     * @return \DateTime 
     */
    public function getChangeTs()
    {
        return $this->changeTs;
    }
}
