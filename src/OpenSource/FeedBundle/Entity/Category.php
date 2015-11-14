<?php

namespace OpenSource\FeedBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;



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
}
