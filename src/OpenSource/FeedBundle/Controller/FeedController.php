<?php
namespace OpenSource\FeedBundle\Controller;

use \Symfony\Component\OptionsResolver\Options;
use \Doctrine\Bundle\DoctrineBundle\Registry;
use Debril\RssAtomBundle\Provider\FeedContentProviderInterface;
use Debril\RssAtomBundle\Exception\FeedException\FeedNotFoundException;
use Debril\RssAtomBundle\Protocol\Parser\FeedContent as FeedContent;
use Debril\RssAtomBundle\Protocol\Parser\Item;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FeedController extends Controller implements FeedContentProviderInterface
{

  /**
  * @var \Doctrine\Bundle\DoctrineBundle\Registry
  */
  protected $doctrine;

  /**
  * @param \Doctrine\Bundle\DoctrineBundle\Registry $doctrine
  */
  public function __construct(Registry $doctrine)
  {
    $this->doctrine = $doctrine;

  }

  /**
  * @param \Symfony\Component\OptionsResolver\Options $options
  * @return \Debril\FeedAggregatorBundle\Provider\Feed
  * @throws FeedNotFoundException
  */
  public function getFeedContent(array $options)
  {
    // fetch feed from data repository
    /*  $qb->select( 'e' )
    ->from( 'Entity\Event',  'e' )
    ->Where(
    $qb->expr()->andX(
    $qb->expr()->between('e.dateStart', ':from', ':to')
    )
    )
    ->orderBy('e.dateStart', 'ASC')
    ->setFirstResult( $offset )
    ->setMaxResults( $limit );*/
    $repository = $this->doctrine
    ->getRepository('OpenSourceFeedBundle:Post');

    // createQueryBuilder automatically selects FROM AppBundle:Product
    // and aliases it to "p"
    $query = $repository->createQueryBuilder('p')
    ->orderBy('p.date', 'DESC')
    ->setMaxResults(10)
    ->getQuery();

    $entities = $query->getResult();
    $feed = new FeedContent();
    //$feed -> setLastModified();
    $feed -> setLastModified(new \DateTime());
    foreach($entities as $post)
    {
      $item = new Item();
      $item -> setTitle($post->getTitle());
      $item -> setUpdated($post -> getDate());
      $item -> setLink($this->generateUrl('post_show', array('id' => $post->getId(), 'slug' => $post -> getSlug())));
      $feed -> addItem($item);
    }
    /*$feed = new FeedContent;
    *
    * $feed->setLastModified($lastTimeANewsWasUpdated);
    *
    * $feed->setTitle('your feed title');
    * $feed->setDescription('the description');
    * $feed->addItem($item);*/
    // if the feed is an actual FeedOut instance, then return it
    //if ($feed instanceof \Debril\RssAtomBundle\Protocol\FeedOut)
    return $feed;
    // $feed is null, which means no Feed was found with this id.
    throw new FeedNotFoundException();
  }

  /**
  * @return \Doctrine\Bundle\DoctrineBundle\Registry
  */
  public function getDoctrine()
  {
    return $this->doctrine;
  }
}
?>
