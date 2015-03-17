<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
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

        }

        // bts2_user_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'bts2_user_homepage')), array (  '_controller' => 'BTS2\\UserBundle\\Controller\\DefaultController::indexAction',));
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // blog_homepage
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'BTS2\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'blog_homepage',);
            }

            if (0 === strpos($pathinfo, '/blog/a')) {
                // BTS2_blog_vue
                if (0 === strpos($pathinfo, '/blog/article') && preg_match('#^/blog/article/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'BTS2_blog_vue')), array (  '_controller' => 'BTS2\\BlogBundle\\Controller\\DefaultController::voirAction',));
                }

                // BTS2_blog_ajouter
                if ($pathinfo === '/blog/ajouter') {
                    return array (  '_controller' => 'BTS2\\BlogBundle\\Controller\\DefaultController::ajouterAction',  '_route' => 'BTS2_blog_ajouter',);
                }

                if (0 === strpos($pathinfo, '/blog/article')) {
                    // BTS2_blog_list
                    if ($pathinfo === '/blog/article/list') {
                        return array (  '_controller' => 'BTS2\\BlogBundle\\Controller\\DefaultController::listAction',  '_route' => 'BTS2_blog_list',);
                    }

                    // BTS2_blog_edit
                    if (0 === strpos($pathinfo, '/blog/article/edit') && preg_match('#^/blog/article/edit/(?P<id>\\d+)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'BTS2_blog_edit')), array (  '_controller' => 'BTS2\\BlogBundle\\Controller\\DefaultController::editAction',));
                    }

                }

            }

        }

        if (0 === strpos($pathinfo, '/MaisonDesLigues-forum')) {
            // ligues_platform_forum
            if ($pathinfo === '/MaisonDesLigues-forum') {
                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::forumAction',  '_route' => 'ligues_platform_forum',);
            }

            if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-')) {
                if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-compte')) {
                    // ligues_platform_forum_compte
                    if ($pathinfo === '/MaisonDesLigues-forum-compte') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::compteAction',  '_route' => 'ligues_platform_forum_compte',);
                    }

                    // ligues_platform_forum_compte_formulaire
                    if ($pathinfo === '/MaisonDesLigues-forum-compte-formulaire') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::formulaire_inscriptionAction',  '_route' => 'ligues_platform_forum_compte_formulaire',);
                    }

                }

                if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-espace-membre')) {
                    // ligues_platform_forum_espace_membre
                    if ($pathinfo === '/MaisonDesLigues-forum-espace-membre') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::espace_membreAction',  '_route' => 'ligues_platform_forum_espace_membre',);
                    }

                    if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-espace-membre-')) {
                        if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-espace-membre-categorie')) {
                            // ligues_platform_forum_espace_membre_categorie_membre
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-categorie') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::espace_membre_categorieAction',  '_route' => 'ligues_platform_forum_espace_membre_categorie_membre',);
                            }

                            // ligues_platform_forum_espace_membre_categorie_foot
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-categorie-foot') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::categorie_footAction',  '_route' => 'ligues_platform_forum_espace_membre_categorie_foot',);
                            }

                        }

                        if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-espace-membre-ajouter-article')) {
                            // ligues_platform_forum_espace_membre_ajouter_article_formulaire
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-ajouter-article-formulaire') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::ajouter_article_formulaireAction',  '_route' => 'ligues_platform_forum_espace_membre_ajouter_article_formulaire',);
                            }

                            // ligues_platform_forum_espace_membre_ajouter_article
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-ajouter-article') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::ajouter_articleAction',  '_route' => 'ligues_platform_forum_espace_membre_ajouter_article',);
                            }

                        }

                        // ligues_platform_forum_espace_membre_voir_article
                        if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-voir-article') {
                            return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::voir_articleAction',  '_route' => 'ligues_platform_forum_espace_membre_voir_article',);
                        }

                        // ligues_platform_forum_espace_membre_news
                        if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-news') {
                            return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::newsAction',  '_route' => 'ligues_platform_forum_espace_membre_news',);
                        }

                        if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-espace-membre-voir-article-')) {
                            // ligues_platform_forum_espace_membre_voir_article_supprimer_modifier
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-voir-article-supprimer-modifier') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::supprimer_modifierAction',  '_route' => 'ligues_platform_forum_espace_membre_voir_article_supprimer_modifier',);
                            }

                            // ligues_platform_forum_espace_membre_voir_article_commentaire
                            if ($pathinfo === '/MaisonDesLigues-forum-espace-membre-voir-article-MS-commentaire') {
                                return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::supprimer_modifier_commentaireAction',  '_route' => 'ligues_platform_forum_espace_membre_voir_article_commentaire',);
                            }

                        }

                    }

                }

                if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-compte-')) {
                    // ligues_platform_forum_compte_modifier
                    if ($pathinfo === '/MaisonDesLigues-forum-compte-modifier') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::compte_modifierAction',  '_route' => 'ligues_platform_forum_compte_modifier',);
                    }

                    // ligues_platform_forum_compte_supprimer
                    if ($pathinfo === '/MaisonDesLigues-forum-compte-supprimer') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::compte_supprimerAction',  '_route' => 'ligues_platform_forum_compte_supprimer',);
                    }

                }

                if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-messagerie')) {
                    // ligues_platform_forum_messagerie
                    if ($pathinfo === '/MaisonDesLigues-forum-messagerie') {
                        return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::messagerieAction',  '_route' => 'ligues_platform_forum_messagerie',);
                    }

                    if (0 === strpos($pathinfo, '/MaisonDesLigues-forum-messagerie-')) {
                        // ligues_platform_forum_messagerie_ecrire
                        if ($pathinfo === '/MaisonDesLigues-forum-messagerie-ecrire') {
                            return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::messagerie_ecrireAction',  '_route' => 'ligues_platform_forum_messagerie_ecrire',);
                        }

                        // ligues_platform_forum_messagerie_lire
                        if ($pathinfo === '/MaisonDesLigues-forum-messagerie-lire') {
                            return array (  '_controller' => 'LIGUES\\PlatformBundle\\Controller\\DefaultController::messagerie_lireAction',  '_route' => 'ligues_platform_forum_messagerie_lire',);
                        }

                    }

                }

            }

        }

        // achat_vente_blog_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'achat_vente_blog_homepage');
            }

            return array (  '_controller' => 'AchatVente\\BlogBundle\\Controller\\DefaultController::indexAction',  '_route' => 'achat_vente_blog_homepage',);
        }

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        if (0 === strpos($pathinfo, '/demo')) {
            if (0 === strpos($pathinfo, '/demo/secured')) {
                if (0 === strpos($pathinfo, '/demo/secured/log')) {
                    if (0 === strpos($pathinfo, '/demo/secured/login')) {
                        // _demo_login
                        if ($pathinfo === '/demo/secured/login') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
                        }

                        // _demo_security_check
                        if ($pathinfo === '/demo/secured/login_check') {
                            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_demo_security_check',);
                        }

                    }

                    // _demo_logout
                    if ($pathinfo === '/demo/secured/logout') {
                        return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
                    }

                }

                if (0 === strpos($pathinfo, '/demo/secured/hello')) {
                    // acme_demo_secured_hello
                    if ($pathinfo === '/demo/secured/hello') {
                        return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
                    }

                    // _demo_secured_hello
                    if (preg_match('#^/demo/secured/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',));
                    }

                    // _demo_secured_hello_admin
                    if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_secured_hello_admin')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',));
                    }

                }

            }

            // _demo
            if (rtrim($pathinfo, '/') === '/demo') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_demo');
                }

                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
            }

            // _demo_hello
            if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_demo_hello')), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',));
            }

            // _demo_contact
            if ($pathinfo === '/demo/contact') {
                return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
