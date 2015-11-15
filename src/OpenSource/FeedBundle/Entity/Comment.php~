<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* Comment
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="OpenSource\FeedBundle\Entity\CommentRepository")
*/
class Comment
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
  * @ORM\Column(name="name", type="string", length=255)
  */
  private $name;

  /**
  * @var \DateTime
  *
  * @ORM\Column(name="date", type="date")
  */
  private $date;

  /**
  * @var string
  *
  * @ORM\Column(name="reference", type="string", length=255)
  */
  private $reference;

  /**
  * @var string
  *
  * @ORM\Column(name="message", type="text")
  */
  private $message;


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
  * @return Comment
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
  * Set reference
  *
  * @param string $reference
  *
  * @return Comment
  */
  public function setReference($reference)
  {
    $this->reference = $reference;

    return $this;
  }

  /**
  * Get reference
  *
  * @return string
  */
  public function getReference()
  {
    return $this->reference;
  }

  /**
  * Set message
  *
  * @param string $message
  *
  * @return Comment
  */
  public function setMessage($message)
  {
    $this->message = $message;

    return $this;
  }

  /**
  * Get message
  *
  * @return string
  */
  public function getMessage()
  {
    return $this->message;
  }

  /**
  * @ORM\ManyToOne(targetEntity="Post", inversedBy="comments")
  * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
  */
  private $post;

  /**
  * Set Post
  *
  * @param Post $post
  *
  * @return Comment
  */
  public function setPost($post)
  {
    $this->post = $post;

    return $this;
  }

  /**
  * Get Post
  *
  * @return Post
  */
  public function getPost()
  {
    return $this->post;
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

  public function __construct() {

    $this->date = new \DateTime();
  }
}
