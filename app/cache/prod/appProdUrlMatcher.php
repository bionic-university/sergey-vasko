<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // JobmagazineBundle_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'JobmagazineBundle_homepage');
            }

            return array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::indexAction',  '_route' => 'JobmagazineBundle_homepage',);
        }

        if (0 === strpos($pathinfo, '/job')) {
            // job
            if (rtrim($pathinfo, '/') === '/job') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'job');
                }

                return array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::indexAction',  '_route' => 'job',);
            }

            // job_show
            if (preg_match('#^/job/(?P<id>\\d+)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_show')), array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::showAction',));
            }

            // job_new
            if ($pathinfo === '/job/new') {
                return array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::newAction',  '_route' => 'job_new',);
            }

            // job_create
            if ($pathinfo === '/job/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_job_create;
                }

                return array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::createAction',  '_route' => 'job_create',);
            }
            not_job_create:

            // job_edit
            if (preg_match('#^/job/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_edit')), array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::editAction',));
            }

            // job_update
            if (preg_match('#^/job/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_job_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_update')), array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::updateAction',));
            }
            not_job_update:

            // job_delete
            if (preg_match('#^/job/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_job_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'job_delete')), array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\JobController::deleteAction',));
            }
            not_job_delete:

        }

        // JobmagazineBundle_category
        if (0 === strpos($pathinfo, '/category') && preg_match('#^/category/(?P<slug>[^/]++)(?:/(?P<page>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'JobmagazineBundle_category')), array (  '_controller' => 'BionicUniversity\\SergeyVasko\\JobmagazineBundle\\Controller\\CategoryController::showAction',  'page' => 1,));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
