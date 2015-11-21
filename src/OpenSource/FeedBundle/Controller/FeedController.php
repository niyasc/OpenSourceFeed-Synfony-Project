<?php
namespace OpenSource\FeedBundle\Controller;

use \Symfony\Component\OptionsResolver\Options;
use \Doctrine\Bundle\DoctrineBundle\Registry;
use Debril\RssAtomBundle\Provider\FeedContentProviderInterface;
use \Debril\RssAtomBundle\Exception\FeedNotFoundException;

class FeedController implements FeedContentProviderInterface
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
        echo "teaches here";
        // fetch feed from data repository
        $feed = $this->getDoctrine()
                ->getManager()
                ->getRepository('OpenSourceFeedBundle:Post')
                ->getFeed($options['id']);
        echo "test";
        // if the feed is an actual FeedOut instance, then return it
        if ($feed instanceof \Debril\RssAtomBundle\Protocol\FeedOut)
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
