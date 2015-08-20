<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OpenSource\FeedBundle\Entity\Category;

/**
 * Subcategory
 *
 * @ORM\Table("subcategory")
 * @ORM\Entity(repositoryClass="OpenSource\FeedBundle\Entity\SubcategoryRepository")
 */
class Subcategory
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
     * @var Category
     * @ORM\ManyToOne(targetEntity="Category", inversedBy="categories")
     * @ORM\JoinColumn(name="category_id", referencedColumnName="id", nullable=false)
     */
    private $category;

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
     * @return Subcategory
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
     * Set category
     *
     * @param \OpenSource\FeedBundle\Entity\Category $category
     * @return Subcategory
     */
    public function setCategory(\OpenSource\FeedBundle\Entity\Category $category)
    {
        $this->category = $category;

        return $this;
    }

    /**
     * Get category
     *
     * @return \OpenSource\FeedBundle\Entity\Category 
     */
    public function getCategory()
    {
        return $this->category;
    }
}
