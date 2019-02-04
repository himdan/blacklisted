<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($rawPathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($rawPathinfo);
        $context = $this->context;
        $request = $this->request ?: $this->createRequest($pathinfo);

        if (0 === strpos($pathinfo, '/mobile')) {
            // mobile_register
            if ('/mobile/register' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mobile_register;
                }

                return array (  '_controller' => 'MobileBundle\\Controller\\DefaultController::registerAction',  '_route' => 'mobile_register',);
            }
            not_mobile_register:

            // mobile_login
            if ('/mobile/login' === $pathinfo) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_mobile_login;
                }

                return array (  '_controller' => 'MobileBundle\\Controller\\DefaultController::loginAction',  '_route' => 'mobile_login',);
            }
            not_mobile_login:

            // image_show
            if (0 === strpos($pathinfo, '/mobile/image') && preg_match('#^/mobile/image/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_image_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_show')), array (  '_controller' => 'MobileBundle\\Controller\\MediaController::getMediumContentAction',));
            }
            not_image_show:

            if (0 === strpos($pathinfo, '/mobile/c')) {
                if (0 === strpos($pathinfo, '/mobile/categories')) {
                    // get_categories
                    if (preg_match('#^/mobile/categories(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_categories;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_categories')), array (  '_controller' => 'MobileBundle\\Controller\\CategoriesController::getCategoriesAction',  '_format' => 'json',));
                    }
                    not_get_categories:

                    // get_category
                    if (preg_match('#^/mobile/categories/(?P<category>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_category')), array (  '_controller' => 'MobileBundle\\Controller\\CategoriesController::getCategoryAction',  '_format' => 'json',));
                    }
                    not_get_category:

                }

                if (0 === strpos($pathinfo, '/mobile/claims')) {
                    // get_claims
                    if (preg_match('#^/mobile/claims(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_claims;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_claims')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::getClaimsAction',  '_format' => 'json',));
                    }
                    not_get_claims:

                    // post_claims
                    if (preg_match('#^/mobile/claims(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_post_claims;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_claims')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::postClaimsAction',  '_format' => 'json',));
                    }
                    not_post_claims:

                    // get_claim
                    if (preg_match('#^/mobile/claims/(?P<claim>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_claim;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_claim')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::getClaimAction',  '_format' => 'json',));
                    }
                    not_get_claim:

                    // get_claim_by_category
                    if (preg_match('#^/mobile/claims/(?P<category>[^/]++)/by/category(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_get_claim_by_category;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_claim_by_category')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::getClaimByCategoryAction',  '_format' => 'json',));
                    }
                    not_get_claim_by_category:

                }

            }

            // post_new_claim
            if (0 === strpos($pathinfo, '/mobile/news/claims') && preg_match('#^/mobile/news/claims(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_new_claim;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_new_claim')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::postNewClaimAction',  '_format' => 'json',));
            }
            not_post_new_claim:

            // post_update_claim
            if (0 === strpos($pathinfo, '/mobile/updates/claims') && preg_match('#^/mobile/updates/claims(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_update_claim;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_update_claim')), array (  '_controller' => 'MobileBundle\\Controller\\ClaimController::postUpdateClaimAction',  '_format' => 'json',));
            }
            not_post_update_claim:

            if (0 === strpos($pathinfo, '/mobile/media')) {
                // get_media
                if (preg_match('#^/mobile/media(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_media;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_media')), array (  '_controller' => 'MobileBundle\\Controller\\MediaController::getMediaAction',  '_format' => 'json',));
                }
                not_get_media:

                // get_medium
                if (preg_match('#^/mobile/media/(?P<medium>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_medium;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_medium')), array (  '_controller' => 'MobileBundle\\Controller\\MediaController::getMediumAction',  '_format' => 'json',));
                }
                not_get_medium:

                // get_medium_content
                if (preg_match('#^/mobile/media/(?P<medium>[^/]++)/content(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_get_medium_content;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'get_medium_content')), array (  '_controller' => 'MobileBundle\\Controller\\MediaController::getMediumContentAction',  '_format' => 'json',));
                }
                not_get_medium_content:

                // post_medium
                if (preg_match('#^/mobile/media/(?P<claim>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_post_medium;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_medium')), array (  '_controller' => 'MobileBundle\\Controller\\MediaController::postMediumAction',  '_format' => 'json',));
                }
                not_post_medium:

            }

            // post_location
            if (0 === strpos($pathinfo, '/mobile/locations') && preg_match('#^/mobile/locations/(?P<claim>[^/\\.]++)(?:\\.(?P<_format>xml|json|html))?$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_post_location;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'post_location')), array (  '_controller' => 'MobileBundle\\Controller\\LocationController::postLocationAction',  '_format' => 'json',));
            }
            not_post_location:

        }

        if (0 === strpos($pathinfo, '/authority')) {
            // authority_index
            if ('/authority' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_authority_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'authority_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_authority_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthorityController::indexAction',  '_route' => 'authority_index',);
            }
            not_authority_index:

            // authority_new
            if ('/authority/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_authority_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\AuthorityController::newAction',  '_route' => 'authority_new',);
            }
            not_authority_new:

            // authority_show
            if (preg_match('#^/authority/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_authority_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'authority_show')), array (  '_controller' => 'AppBundle\\Controller\\AuthorityController::showAction',));
            }
            not_authority_show:

            // authority_edit
            if (preg_match('#^/authority/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_authority_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'authority_edit')), array (  '_controller' => 'AppBundle\\Controller\\AuthorityController::editAction',));
            }
            not_authority_edit:

            // authority_delete
            if (preg_match('#^/authority/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_authority_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'authority_delete')), array (  '_controller' => 'AppBundle\\Controller\\AuthorityController::deleteAction',));
            }
            not_authority_delete:

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/category')) {
                // category_index
                if ('/category' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_category_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'category_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::indexAction',  '_route' => 'category_index',);
                }
                not_category_index:

                // category_new
                if ('/category/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\CategoryController::newAction',  '_route' => 'category_new',);
                }
                not_category_new:

                // category_show
                if (preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_category_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_show')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::showAction',));
                }
                not_category_show:

                // category_edit
                if (preg_match('#^/category/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_category_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_edit')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::editAction',));
                }
                not_category_edit:

                // category_delete
                if (preg_match('#^/category/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_category_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_delete')), array (  '_controller' => 'AppBundle\\Controller\\CategoryController::deleteAction',));
                }
                not_category_delete:

            }

            if (0 === strpos($pathinfo, '/claim')) {
                // claim_index
                if ('/claim' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_claim_index;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'claim_index');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_claim_index;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ClaimController::indexAction',  '_route' => 'claim_index',);
                }
                not_claim_index:

                // claim_new
                if ('/claim/new' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_claim_new;
                    }

                    return array (  '_controller' => 'AppBundle\\Controller\\ClaimController::newAction',  '_route' => 'claim_new',);
                }
                not_claim_new:

                // claim_show
                if (preg_match('#^/claim/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_claim_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'claim_show')), array (  '_controller' => 'AppBundle\\Controller\\ClaimController::showAction',));
                }
                not_claim_show:

                // claim_edit
                if (preg_match('#^/claim/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_claim_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'claim_edit')), array (  '_controller' => 'AppBundle\\Controller\\ClaimController::editAction',));
                }
                not_claim_edit:

                // claim_delete
                if (preg_match('#^/claim/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_claim_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'claim_delete')), array (  '_controller' => 'AppBundle\\Controller\\ClaimController::deleteAction',));
                }
                not_claim_delete:

                // add_medium
                if (preg_match('#^/claim/(?P<id>[^/]++)/addmedium$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_add_medium;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'add_medium')), array (  '_controller' => 'AppBundle\\Controller\\ClaimController::addMediumAction',));
                }
                not_add_medium:

                // set_location
                if (preg_match('#^/claim/(?P<id>[^/]++)/setlocation$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_set_location;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'set_location')), array (  '_controller' => 'AppBundle\\Controller\\ClaimController::addLocation',));
                }
                not_set_location:

            }

        }

        // homepage
        if ('' === rtrim($pathinfo, '/')) {
            if ('/' === substr($pathinfo, -1)) {
                // no-op
            } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                goto not_homepage;
            } else {
                return $this->redirect($rawPathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/contact')) {
            // contact
            if ('/contact' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactAction',  '_route' => 'contact',);
            }

            // contact-success
            if (preg_match('#^/contact/(?P<id>[^/]++)/show$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contact-success')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::contactSuccessAction',));
            }

        }

        // aboutus
        if ('/aboutus' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::aboutUsAction',  '_route' => 'aboutus',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            // category_view
            if (0 === strpos($pathinfo, '/categories') && preg_match('#^/categories/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'category_view')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showCategoryAction',));
            }

            // claim_view
            if (0 === strpos($pathinfo, '/claim') && preg_match('#^/claim/(?P<id>[^/]++)/view$#sD', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'claim_view')), array (  '_controller' => 'AppBundle\\Controller\\DefaultController::showClaimAction',));
            }

        }

        if (0 === strpos($pathinfo, '/location')) {
            // location_index
            if ('/location' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_location_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'location_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_location_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LocationController::indexAction',  '_route' => 'location_index',);
            }
            not_location_index:

            // location_new
            if ('/location/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_location_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\LocationController::newAction',  '_route' => 'location_new',);
            }
            not_location_new:

            // location_show
            if (preg_match('#^/location/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_location_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_show')), array (  '_controller' => 'AppBundle\\Controller\\LocationController::showAction',));
            }
            not_location_show:

            // location_edit
            if (preg_match('#^/location/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_location_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_edit')), array (  '_controller' => 'AppBundle\\Controller\\LocationController::editAction',));
            }
            not_location_edit:

            // location_delete
            if (preg_match('#^/location/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_location_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'location_delete')), array (  '_controller' => 'AppBundle\\Controller\\LocationController::deleteAction',));
            }
            not_location_delete:

        }

        if (0 === strpos($pathinfo, '/media')) {
            // media_index
            if ('/media' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_media_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'media_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_media_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MediaController::indexAction',  '_route' => 'media_index',);
            }
            not_media_index:

            // media_new
            if ('/media/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_media_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\MediaController::newAction',  '_route' => 'media_new',);
            }
            not_media_new:

            // media_show
            if (preg_match('#^/media/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_media_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_show')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::showAction',));
            }
            not_media_show:

            // media_edit
            if (preg_match('#^/media/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_media_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_edit')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::editAction',));
            }
            not_media_edit:

            // media_delete
            if (preg_match('#^/media/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_media_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'media_delete')), array (  '_controller' => 'AppBundle\\Controller\\MediaController::deleteAction',));
            }
            not_media_delete:

        }

        if (0 === strpos($pathinfo, '/resolution')) {
            // resolution_index
            if ('/resolution' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_resolution_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'resolution_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resolution_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ResolutionController::indexAction',  '_route' => 'resolution_index',);
            }
            not_resolution_index:

            // resolution_new
            if ('/resolution/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_resolution_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ResolutionController::newAction',  '_route' => 'resolution_new',);
            }
            not_resolution_new:

            // resolution_show
            if (preg_match('#^/resolution/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_resolution_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resolution_show')), array (  '_controller' => 'AppBundle\\Controller\\ResolutionController::showAction',));
            }
            not_resolution_show:

            // resolution_edit
            if (preg_match('#^/resolution/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_resolution_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resolution_edit')), array (  '_controller' => 'AppBundle\\Controller\\ResolutionController::editAction',));
            }
            not_resolution_edit:

            // resolution_delete
            if (preg_match('#^/resolution/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_resolution_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'resolution_delete')), array (  '_controller' => 'AppBundle\\Controller\\ResolutionController::deleteAction',));
            }
            not_resolution_delete:

        }

        if (0 === strpos($pathinfo, '/servicelocation')) {
            // servicelocation_index
            if ('/servicelocation' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_servicelocation_index;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'servicelocation_index');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicelocation_index;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServiceLocationController::indexAction',  '_route' => 'servicelocation_index',);
            }
            not_servicelocation_index:

            // servicelocation_new
            if ('/servicelocation/new' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_servicelocation_new;
                }

                return array (  '_controller' => 'AppBundle\\Controller\\ServiceLocationController::newAction',  '_route' => 'servicelocation_new',);
            }
            not_servicelocation_new:

            // servicelocation_show
            if (preg_match('#^/servicelocation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_servicelocation_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicelocation_show')), array (  '_controller' => 'AppBundle\\Controller\\ServiceLocationController::showAction',));
            }
            not_servicelocation_show:

            // servicelocation_edit
            if (preg_match('#^/servicelocation/(?P<id>[^/]++)/edit$#sD', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_servicelocation_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicelocation_edit')), array (  '_controller' => 'AppBundle\\Controller\\ServiceLocationController::editAction',));
            }
            not_servicelocation_edit:

            // servicelocation_delete
            if (preg_match('#^/servicelocation/(?P<id>[^/]++)$#sD', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_servicelocation_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'servicelocation_delete')), array (  '_controller' => 'AppBundle\\Controller\\ServiceLocationController::deleteAction',));
            }
            not_servicelocation_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ('/login' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ('/login_check' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'fos_user.security.controller:checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ('/logout' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'fos_user.security.controller:logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if ('/profile' === rtrim($pathinfo, '/')) {
                if ('/' === substr($pathinfo, -1)) {
                    // no-op
                } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                    goto not_fos_user_profile_show;
                } else {
                    return $this->redirect($rawPathinfo.'/', 'fos_user_profile_show');
                }

                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                return array (  '_controller' => 'fos_user.profile.controller:showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ('/profile/edit' === $pathinfo) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'fos_user.profile.controller:editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if ('/register' === rtrim($pathinfo, '/')) {
                    if ('/' === substr($pathinfo, -1)) {
                        // no-op
                    } elseif (!in_array($this->context->getMethod(), array('HEAD', 'GET'))) {
                        goto not_fos_user_registration_register;
                    } else {
                        return $this->redirect($rawPathinfo.'/', 'fos_user_registration_register');
                    }

                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    return array (  '_controller' => 'fos_user.registration.controller:registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ('/register/check-email' === $pathinfo) {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'fos_user.registration.controller:checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'fos_user.registration.controller:confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ('/register/confirmed' === $pathinfo) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'fos_user.registration.controller:confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ('/resetting/request' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ('/resetting/send-email' === $pathinfo) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ('/resetting/check-email' === $pathinfo) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'fos_user.resetting.controller:checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#sD', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'fos_user.resetting.controller:resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ('/profile/change-password' === $pathinfo) {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'fos_user.change_password.controller:changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
