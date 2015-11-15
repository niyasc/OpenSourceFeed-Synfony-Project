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
  * @ORM\Column(type="string", length=255)
  */
  private $slug;

  /**
  * @var string
  *
  * @ORM\Column(name="title", type="string", length=255)
  */
  private $title;

  /**
  * @var \Date
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
  * @ORM\Column(name="post_text", type="text")
  */
  private $postText;

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

    $this->setSlug($this->title);

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
  * Set postText
  *
  * @param string $postText
  *
  * @return Content
  */
  public function setPostText($postText)
  {
    $this->postText = $postText;

    return $this;
  }

  /**
  * Get postText
  *
  * @return string
  */
  public function getPostText()
  {
    return $this->postText;
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
  * @ORM\OneToMany(targetEntity="Comment", mappedBy="post", orphanRemoval=true, cascade={"persist", "remove"})
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

  /**
  * Set slug
  *
  * @param string $slug
  *
  * @return Post
  */
  public function setSlug($slug)
  {
    $this->slug = $this->slugify($slug);

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
  * Add comment
  *
  * @param \OpenSource\FeedBundle\Entity\Comment $comment
  *
  * @return Post
  */
  public function addComment(\OpenSource\FeedBundle\Entity\Comment $comment)
  {
    $this->comments[] = $comment;

    return $this;
  }

  /**
  * Remove comment
  *
  * @param \OpenSource\FeedBundle\Entity\Comment $comment
  */
  public function removeComment(\OpenSource\FeedBundle\Entity\Comment $comment)
  {
    $this->comments->removeElement($comment);
  }

  /**
  * Get comments
  *
  * @return \Doctrine\Common\Collections\Collection
  */
  public function getComments()
  {
    return $this->comments;
  }
  /**
  * Generate custom url from title
  * @return String
  */
  public function slugify($text)
  {
    // replace non letter or digits by -
    $text = preg_replace('#[^\\pL\d]+#u', '-', $text);

    // trim
    $text = trim($text, '-');

    // transliterate
    if (function_exists('iconv'))
    {
      $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
    }

    // lowercase
    $text = strtolower($text);

    // remove unwanted characters
    $text = preg_replace('#[^-\w]+#', '', $text);

    if (empty($text))
    {
      return 'n-a';
    }

    return $text;
  }
}
