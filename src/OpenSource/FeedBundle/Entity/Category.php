<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
 * Category
 *
 * @ORM\Table("category")
 * @ORM\Entity(repositoryClass="OpenSource\FeedBundle\Entity\CategoryRepository")
 */
class Category
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=32)
     */
    private $name;

    /**
     * @var ArrayCollection
     * @ORM\OneToMany(targetEntity="Subcategory", mappedBy="category")
     *
     */
    private $subcategories;

    public function __construct() {
      $this -> subcategories = new ArrayCollection();
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
     * Add subcategories
     *
     * @param \OpenSource\FeedBundle\Entity\Subcategory $subcategories
     * @return Category
     */
    public function addSubcategory(\OpenSource\FeedBundle\Entity\Subcategory $subcategories)
    {
        $this->subcategories[] = $subcategories;

        return $this;
    }

    /**
     * Remove subcategories
     *
     * @param \OpenSource\FeedBundle\Entity\Subcategory $subcategories
     */
    public function removeSubcategory(\OpenSource\FeedBundle\Entity\Subcategory $subcategories)
    {
        $this->subcategories->removeElement($subcategories);
    }

    /**
     * Get subcategories
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getSubcategories()
    {
        return $this->subcategories;
    }

    /**
     * Get string name of Category
     *
     * @return string
     */

     public function __toString() {
       return $this -> getName();
     }
}
