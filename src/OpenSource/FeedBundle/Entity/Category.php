<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;




/**
* Category
*
* @ORM\Table()
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
  * @Assert\NotNull(message="Name Can't Be Empty")
  * @ORM\Column(name="name", type="string", length=64)
  */
  private $name;


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
  *
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
  * @ORM\OneToMany(targetEntity="Post", mappedBy="category")
  */
  private $posts;
  public function __construct() {
    $this->posts = new ArrayCollection();
  }
  /**
  * Convert Category Object to String
  * @return string
  */
  public function __toString() {
    return (string) $this->name;
  }

    /**
     * Add post
     *
     * @param \OpenSource\FeedBundle\Entity\Post $post
     *
     * @return Category
     */
    public function addPost(\OpenSource\FeedBundle\Entity\Post $post)
    {
        $this->posts[] = $post;

        return $this;
    }

    /**
     * Remove post
     *
     * @param \OpenSource\FeedBundle\Entity\Post $post
     */
    public function removePost(\OpenSource\FeedBundle\Entity\Post $post)
    {
        $this->posts->removeElement($post);
    }

    /**
     * Get posts
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPosts()
    {
        return $this->posts;
    }
}
