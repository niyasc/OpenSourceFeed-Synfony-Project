<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            if (0 === strpos($pathinfo, '/_configurator')) {
                // _configurator_home
                if (rtrim($pathinfo, '/') === '/_configurator') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_configurator_home');
                    }

                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
                }

                // _configurator_step
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/category')) {
                // category
                if (rtrim($pathinfo, '/') === '/category') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'category');
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category',);
                }
                not_category:

                // category_create
                if ($pathinfo === '/category/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_category_create;
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::createAction',  '_route' => 'category_create',);
                }
                not_category_create:

                // category_new
                if ($pathinfo === '/category/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_new;
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }
                not_category_new:

                // category_show
                if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::showAction',));
                }
                not_category_show:

                // category_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::editAction',));
                }
                not_category_edit:

                // category_update
                if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_category_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_update')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::updateAction',));
                }
                not_category_update:

                // category_delete
                if (preg_match('#^/category/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/comment')) {
                // comment
                if (rtrim($pathinfo, '/') === '/comment') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'comment');
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::indexAction',  '_route' => 'comment',);
                }
                not_comment:

                // comment_create
                if ($pathinfo === '/comment/') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_comment_create;
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::createAction',  '_route' => 'comment_create',);
                }
                not_comment_create:

                // comment_new
                if ($pathinfo === '/comment/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment_new;
                    }

                    return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::newAction',  '_route' => 'comment_new',);
                }
                not_comment_new:

                // comment_show
                if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_show')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::showAction',));
                }
                not_comment_show:

                // comment_edit
                if (preg_match('#^/comment/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_comment_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_edit')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::editAction',));
                }
                not_comment_edit:

                // comment_update
                if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'PUT') {
                        $allow[] = 'PUT';
                        goto not_comment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_update')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::updateAction',));
                }
                not_comment_update:

                // comment_delete
                if (preg_match('#^/comment/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'comment_delete')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\CommentController::deleteAction',));
                }
                not_comment_delete:

            }

        }

        // opensource_feed_default_index
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'opensource_feed_default_index')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/newsletter')) {
            // newsletter
            if (rtrim($pathinfo, '/') === '/newsletter') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'newsletter');
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::indexAction',  '_route' => 'newsletter',);
            }
            not_newsletter:

            // newsletter_create
            if ($pathinfo === '/newsletter/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_newsletter_create;
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::createAction',  '_route' => 'newsletter_create',);
            }
            not_newsletter_create:

            // newsletter_new
            if ($pathinfo === '/newsletter/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_new;
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::newAction',  '_route' => 'newsletter_new',);
            }
            not_newsletter_new:

            // newsletter_show
            if (preg_match('#^/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_show')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::showAction',));
            }
            not_newsletter_show:

            // newsletter_edit
            if (preg_match('#^/newsletter/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_newsletter_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_edit')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::editAction',));
            }
            not_newsletter_edit:

            // newsletter_update
            if (preg_match('#^/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_newsletter_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_update')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::updateAction',));
            }
            not_newsletter_update:

            // newsletter_delete
            if (preg_match('#^/newsletter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_newsletter_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'newsletter_delete')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\NewsLetterController::deleteAction',));
            }
            not_newsletter_delete:

        }

        if (0 === strpos($pathinfo, '/post')) {
            // post
            if (rtrim($pathinfo, '/') === '/post') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'post');
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::indexAction',  '_route' => 'post',);
            }
            not_post:

            // post_create
            if ($pathinfo === '/post/') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_create;
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::createAction',  '_route' => 'post_create',);
            }
            not_post_create:

            // post_new
            if ($pathinfo === '/post/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_new;
                }

                return array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::newAction',  '_route' => 'post_new',);
            }
            not_post_new:

            // post_show
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_show')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::showAction',));
            }
            not_post_show:

            // post_edit
            if (preg_match('#^/post/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_post_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_edit')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::editAction',));
            }
            not_post_edit:

            // post_update
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'PUT') {
                    $allow[] = 'PUT';
                    goto not_post_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_update')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::updateAction',));
            }
            not_post_update:

            // post_delete
            if (preg_match('#^/post/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_post_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_delete')), array (  '_controller' => 'OpenSource\\FeedBundle\\Controller\\PostController::deleteAction',));
            }
            not_post_delete:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // login_route
                if ($pathinfo === '/login') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginAction',  '_route' => 'login_route',);
                }

                // login_check
                if ($pathinfo === '/login_check') {
                    return array (  '_controller' => 'AppBundle\\Controller\\SecurityController::loginCheckAction',  '_route' => 'login_check',);
                }

            }

            // logout
            if ($pathinfo === '/logout') {
                return array('_route' => 'logout');
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
