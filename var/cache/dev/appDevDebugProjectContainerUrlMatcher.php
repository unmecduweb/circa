<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/admin')) {
            // mweb_admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'mweb_admin');
                }

                return array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\ManageController::indexAction',  '_route' => 'mweb_admin',);
            }

            // mweb_admin_list_entity
            if (0 === strpos($pathinfo, '/admin/list') && preg_match('#^/admin/list/(?P<entityAlias>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mweb_admin_list_entity')), array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\ManageController::listAction',));
            }

            // mweb_admin_edit_entity
            if (0 === strpos($pathinfo, '/admin/edit') && preg_match('#^/admin/edit/(?P<_locale>[^/]++)/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mweb_admin_edit_entity')), array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\ManageController::editAction',));
            }

            // mweb_admin_view_entity
            if (0 === strpos($pathinfo, '/admin/view') && preg_match('#^/admin/view/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mweb_admin_view_entity')), array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\ManageController::viewAction',));
            }

            // mweb_admin_delete_entity
            if (0 === strpos($pathinfo, '/admin/delete') && preg_match('#^/admin/delete/(?P<entityAlias>[^/]++)/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'mweb_admin_delete_entity')), array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\ManageController::deleteAction',));
            }

            if (0 === strpos($pathinfo, '/admin/t')) {
                // mweb_admin_tinymce_browser
                if (0 === strpos($pathinfo, '/admin/tinymceBrowser') && preg_match('#^/admin/tinymceBrowser(?:/(?P<file>.+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'mweb_admin_tinymce_browser')), array (  '_controller' => 'Mweb\\AdminBundle\\Controller\\TinymceController::browserAction',  'file' => NULL,));
                }

                if (0 === strpos($pathinfo, '/admin/trans')) {
                    // lexik_translation_overview
                    if (rtrim($pathinfo, '/') === '/admin/trans') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_lexik_translation_overview;
                        }

                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'lexik_translation_overview');
                        }

                        return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::overviewAction',  '_route' => 'lexik_translation_overview',);
                    }
                    not_lexik_translation_overview:

                    // lexik_translation_grid
                    if ($pathinfo === '/admin/trans/grid') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_lexik_translation_grid;
                        }

                        return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::gridAction',  '_route' => 'lexik_translation_grid',);
                    }
                    not_lexik_translation_grid:

                    // lexik_translation_new
                    if ($pathinfo === '/admin/trans/new') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_lexik_translation_new;
                        }

                        return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::newAction',  '_route' => 'lexik_translation_new',);
                    }
                    not_lexik_translation_new:

                    // lexik_translation_invalidate_cache
                    if ($pathinfo === '/admin/trans/invalidate-cache') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_lexik_translation_invalidate_cache;
                        }

                        return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\TranslationController::invalidateCacheAction',  '_route' => 'lexik_translation_invalidate_cache',);
                    }
                    not_lexik_translation_invalidate_cache:

                    if (0 === strpos($pathinfo, '/admin/trans/api/translations')) {
                        // lexik_translation_list
                        if ($pathinfo === '/admin/trans/api/translations') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_lexik_translation_list;
                            }

                            return array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::listAction',  '_route' => 'lexik_translation_list',);
                        }
                        not_lexik_translation_list:

                        // lexik_translation_profiler
                        if (0 === strpos($pathinfo, '/admin/trans/api/translations/profiler') && preg_match('#^/admin/trans/api/translations/profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_lexik_translation_profiler;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_profiler')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::listByProfileAction',));
                        }
                        not_lexik_translation_profiler:

                        // lexik_translation_update
                        if (preg_match('#^/admin/trans/api/translations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'PUT') {
                                $allow[] = 'PUT';
                                goto not_lexik_translation_update;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_update')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::updateAction',));
                        }
                        not_lexik_translation_update:

                        // lexik_translation_delete_locale
                        if (preg_match('#^/admin/trans/api/translations/(?P<id>[^/]++)/(?P<locale>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_lexik_translation_delete_locale;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_delete_locale')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::deleteTranslationAction',));
                        }
                        not_lexik_translation_delete_locale:

                        // lexik_translation_delete
                        if (preg_match('#^/admin/trans/api/translations/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                            if ($this->context->getMethod() != 'DELETE') {
                                $allow[] = 'DELETE';
                                goto not_lexik_translation_delete;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'lexik_translation_delete')), array (  '_controller' => 'Lexik\\Bundle\\TranslationBundle\\Controller\\RestController::deleteAction',));
                        }
                        not_lexik_translation_delete:

                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        // _homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_homepage');
            }

            return array (  '_controller' => 'Mweb\\CoreBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'fr',  '_route' => '_homepage',);
        }

        // circa_page
        if (0 === strpos($pathinfo, '/festival') && preg_match('#^/festival/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'circa_page')), array (  '_controller' => 'Mweb\\CoreBundle\\Controller\\DefaultController::pageAction',  '_locale' => 'fr',));
        }

        // circa_news
        if (0 === strpos($pathinfo, '/actu') && preg_match('#^/actu/(?P<slugNews>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'circa_news')), array (  '_controller' => 'Mweb\\CoreBundle\\Controller\\DefaultController::newsAction',  '_locale' => 'fr',));
        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
