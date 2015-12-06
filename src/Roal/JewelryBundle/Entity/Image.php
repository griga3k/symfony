<?php

namespace Roal\JewelryBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Image
 */
class Image
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $productId;

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
    private $path;

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
     * Set productId
     *
     * @param integer $productId
     * @return Image
     */
    public function setProductId($productId)
    {
        $this->productId = $productId;
    
        return $this;
    }

    /**
     * Get productId
     *
     * @return integer 
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * Set userId
     *
     * @param integer $userId
     * @return Image
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
     * @return Image
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
     * Set path
     *
     * @param string $path
     * @return Image
     */
    public function setPath($path)
    {
        $this->path = $path;
    
        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set creationTs
     *
     * @param \DateTime $creationTs
     * @return Image
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
     * @return Image
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
