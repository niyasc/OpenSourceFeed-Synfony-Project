<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
* NewsLetter
*
* @ORM\Table()
* @ORM\Entity(repositoryClass="OpenSource\FeedBundle\Entity\NewsLetterRepository")
*/
class NewsLetter
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
  * @ORM\Column(name="name", type="string", length=64)
  * @Assert\NotNull(message="Name Can't Be Empty")
  */
  private $name;

  /**
  * @var string
  *
  * @ORM\Column(name="link", type="string", length=255)
  * @Assert\NotNull(message="Link Can't Be Empty")
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
  * Set name
  *
  * @param string $name
  *
  * @return NewsLetter
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
  * Set link
  *
  * @param string $link
  *
  * @return NewsLetter
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
}
