<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use OpenSource\FeedBundle\Entity\Category as Category;
use Doctrine\Common\Collections\ArrayCollection as ArrayCollection;


/**
* Content
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="OpenSource\FeedBundle\Entity\PostRepository")
*/
class Post
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
  * @ORM\Column(name="title", type="string", length=255)
  */
  private $title;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="date", type="date")
  */
  private $date;

  /**
  * @var string
  *
  * @ORM\Column(name="pre_text", type="text")
  */
  private $preText;

  /**
  * @var string
  *
  * @ORM\Column(name="summary", type="text")
  */
  private $summary;

  /**
  * @var string
  *
  * @ORM\Column(name="link", type="string", length=255)
  */
  private $link;


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
  * Set title
  *
  * @param string $title
  *
  * @return Content
  */
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
  * Get title
  *
  * @return string
  */
  public function getTitle()
  {
    return $this->title;
  }

  /**
  * Set date
  *
  * @param \DateTime $date
  *
  * @return Content
  */
  public function setDate($date)
  {
    $this->date = $date;

    return $this;
  }

  /**
  * Get date
  *
  * @return \DateTime
  */
  public function getDate()
  {
    return $this->date;
  }

  /**
  * Set preText
  *
  * @param string $preText
  *
  * @return Content
  */
  public function setPreText($preText)
  {
    $this->preText = $preText;

    return $this;
  }

  /**
  * Get preText
  *
  * @return string
  */
  public function getPreText()
  {
    return $this->preText;
  }

  /**
  * Set summary
  *
  * @param string $summary
  *
  * @return Content
  */
  public function setSummary($summary)
  {
    $this->summary = $summary;

    return $this;
  }

  /**
  * Get summary
  *
  * @return string
  */
  public function getSummary()
  {
    return $this->summary;
  }

  /**
  * Set link
  *
  * @param string $link
  *
  * @return Content
  */
  public function setLink($link)
  {
    $this->link = $link;

    return $this;
  }

  /**
  * Get link
  *
  * @return string
  */
  public function getLink()
  {
    return $this->link;
  }

  /**
  * @ORM\ManyToOne(targetEntity="Category", inversedBy="posts")
  * @ORM\JoinColumn(name="category_id", referencedColumnName="id")
  */
  private $category;

  /**
  * Set Category
  *
  * @param Category $category
  *
  * @return Post
  */
  public function setCategory($category)
  {
    $this->category = $category;

    return $this;
  }

  /**
  * Get category
  *
  * @return Category
  */
  public function getCategory()
  {
    return $this->category;
  }

  /**
  * @ORM\OneToMany(targetEntity="Comment", mappedBy="post")
  */
  private $comments;
  public function __construct() {

    $this->date = new \DateTime();

    $this->comments = new ArrayCollection();
  }

  /**
  * Convert Post Object to String
  * @return string
  */
  public function __toString() {
    return (string) $this->title;
  }
}
