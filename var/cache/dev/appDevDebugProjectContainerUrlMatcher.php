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

                // _profiler_open_file
                if ($pathinfo === '/_profiler/open') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        // newCompetence
        if ($pathinfo === '/newCompetence') {
            return array (  '_controller' => 'AppBundle\\Controller\\CompetenceController::newCompetenceAction',  '_route' => 'newCompetence',);
        }

        if (0 === strpos($pathinfo, '/projets')) {
            // editCompetence
            if (0 === strpos($pathinfo, '/projets/editCompetence') && preg_match('#^/projets/editCompetence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editCompetence')), array (  '_controller' => 'AppBundle\\Controller\\CompetenceController::editCompetenceAction',));
            }

            // deleteCompetence
            if (0 === strpos($pathinfo, '/projets/deleteCompetence') && preg_match('#^/projets/deleteCompetence/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteCompetence')), array (  '_controller' => 'AppBundle\\Controller\\CompetenceController::deleteCompetenceAction',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::logoutAction',  '_route' => 'logout',);
        }

        // newInsc
        if (0 === strpos($pathinfo, '/newInsc') && preg_match('#^/newInsc/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newInsc')), array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::newInscAction',));
        }

        // desincProjet
        if (0 === strpos($pathinfo, '/projets/desincProjet') && preg_match('#^/projets/desincProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'desincProjet')), array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::desincProjetAction',));
        }

        // accepter
        if (0 === strpos($pathinfo, '/accepter') && preg_match('#^/accepter/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'accepter')), array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::accepterAction',));
        }

        // refuser
        if (0 === strpos($pathinfo, '/refuser') && preg_match('#^/refuser/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'refuser')), array (  '_controller' => 'AppBundle\\Controller\\InscriptionController::refuserAction',));
        }

        // newMessage
        if (0 === strpos($pathinfo, '/newMessage') && preg_match('#^/newMessage/(?P<IdDestinataire>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'newMessage')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::newMessageAction',));
        }

        if (0 === strpos($pathinfo, '/messages')) {
            // showMessage
            if (0 === strpos($pathinfo, '/messages/showMessage') && preg_match('#^/messages/showMessage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showMessage')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::showMessageAction',));
            }

            // deleteMessage
            if (0 === strpos($pathinfo, '/messages/deleteMessage') && preg_match('#^/messages/deleteMessage/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteMessage')), array (  '_controller' => 'AppBundle\\Controller\\MessageController::deleteMessageAction',));
            }

        }

        if (0 === strpos($pathinfo, '/projets')) {
            // projets
            if ($pathinfo === '/projets') {
                return array (  '_controller' => 'AppBundle\\Controller\\ProjetController::projetsAction',  '_route' => 'projets',);
            }

            // showProjet
            if (0 === strpos($pathinfo, '/projets/showProjet') && preg_match('#^/projets/showProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'showProjet')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::showProjetAction',));
            }

            if (0 === strpos($pathinfo, '/projets/newProjet')) {
                // newProjet
                if ($pathinfo === '/projets/newProjet') {
                    return array (  '_controller' => 'AppBundle\\Controller\\ProjetController::newProjetAction',  '_route' => 'newProjet',);
                }

                // newProjetImage
                if (0 === strpos($pathinfo, '/projets/newProjetImage') && preg_match('#^/projets/newProjetImage/(?P<idProjet>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'newProjetImage')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::newProjetImageAction',));
                }

            }

            // editProjet
            if (0 === strpos($pathinfo, '/projets/editProjet') && preg_match('#^/projets/editProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'editProjet')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::editProjetAction',));
            }

            // deleteProjet
            if (0 === strpos($pathinfo, '/projets/deleteProjet') && preg_match('#^/projets/deleteProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteProjet')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::deleteProjetAction',));
            }

            // tropheeProjet
            if (0 === strpos($pathinfo, '/projets/tropheeProjet') && preg_match('#^/projets/tropheeProjet/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tropheeProjet')), array (  '_controller' => 'AppBundle\\Controller\\ProjetController::tropheeProjetAction',));
            }

        }

        // newReseaux
        if ($pathinfo === '/newReseaux') {
            return array (  '_controller' => 'AppBundle\\Controller\\ReseauxController::newReseauxAction',  '_route' => 'newReseaux',);
        }

        // editReseaux
        if (0 === strpos($pathinfo, '/editReseaux') && preg_match('#^/editReseaux/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'editReseaux')), array (  '_controller' => 'AppBundle\\Controller\\ReseauxController::editReseauxAction',));
        }

        if (0 === strpos($pathinfo, '/mes')) {
            if (0 === strpos($pathinfo, '/mesP')) {
                // mesProjets
                if ($pathinfo === '/mesProjets') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesProjetAction',  '_route' => 'mesProjets',);
                }

                // mesParticipations
                if ($pathinfo === '/mesParticipations') {
                    return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesParticipationsAction',  '_route' => 'mesParticipations',);
                }

            }

            // mesCompetences
            if ($pathinfo === '/mesCompetences') {
                return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesCompetencesAction',  '_route' => 'mesCompetences',);
            }

            // mesMessages
            if ($pathinfo === '/mesMessages') {
                return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesMessagesAction',  '_route' => 'mesMessages',);
            }

        }

        if (0 === strpos($pathinfo, '/p')) {
            if (0 === strpos($pathinfo, '/pro')) {
                // profilDe
                if (0 === strpos($pathinfo, '/profilDe') && preg_match('#^/profilDe/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'profilDe')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::profilDeAction',));
                }

                // projetDe
                if (0 === strpos($pathinfo, '/projetDe') && preg_match('#^/projetDe/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'projetDe')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::projetDeAction',));
                }

            }

            // participationDe
            if (0 === strpos($pathinfo, '/participationDe') && preg_match('#^/participationDe/(?P<username>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'participationDe')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::participationDeAction',));
            }

        }

        // mesNotifications
        if ($pathinfo === '/mesNotifications') {
            return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesNotificationsAction',  '_route' => 'mesNotifications',);
        }

        // deleteNotification
        if (0 === strpos($pathinfo, '/deleteNotification') && preg_match('#^/deleteNotification/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'deleteNotification')), array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::deleteNotificationAction',));
        }

        // communaute
        if ($pathinfo === '/communaute') {
            return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::communauteAction',  '_route' => 'communaute',);
        }

        // editProfil
        if ($pathinfo === '/editProfil') {
            return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::editProfilAction',  '_route' => 'editProfil',);
        }

        // mesReseaux
        if ($pathinfo === '/mesReseaux') {
            return array (  '_controller' => 'AppBundle\\Controller\\UtilisateurController::mesReseauxAction',  '_route' => 'mesReseaux',);
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

        if (0 === strpos($pathinfo, '/admin')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/admin') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
