<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * apptestUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $pathinfo = urldecode($pathinfo);

        // _assetic_57785d6
        if ($pathinfo === '/css/57785d6.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '57785d6',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_57785d6',);
        }

        // _assetic_57785d6_0
        if ($pathinfo === '/css/57785d6_part_1_main_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '57785d6',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_57785d6_0',);
        }

        // _assetic_1f1e61b
        if ($pathinfo === '/css/1f1e61b.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1f1e61b',  'pos' => NULL,  '_format' => 'css',  '_route' => '_assetic_1f1e61b',);
        }

        // _assetic_1f1e61b_0
        if ($pathinfo === '/css/1f1e61b_part_1_main_1.css') {
            return array (  '_controller' => 'assetic.controller:render',  'name' => '1f1e61b',  'pos' => 0,  '_format' => 'css',  '_route' => '_assetic_1f1e61b_0',);
        }

        // _wdt
        if (preg_match('#^/_wdt/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]+?)\\.txt$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)/search/results$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?P<token>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
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
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]+?)$#x', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

        // MyCompanyMyProjectTestBundle_homepage
        if (0 === strpos($pathinfo, '/hello') && preg_match('#^/hello/(?P<name>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\TestBundle\\Controller\\DefaultController::indexAction',)), array('_route' => 'MyCompanyMyProjectTestBundle_homepage'));
        }

        // mycompany_myproject_sysbundle_admin_user
        if ($pathinfo === '/admin/user') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::indexAction',  '_route' => 'mycompany_myproject_sysbundle_admin_user',);
        }

        // mycompany_myproject_sysbundle_admin_user_show
        if (0 === strpos($pathinfo, '/admin/user') && preg_match('#^/admin/user/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::showAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_user_show'));
        }

        // mycompany_myproject_sysbundle_admin_user_new
        if ($pathinfo === '/admin/user/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::newAction',  '_route' => 'mycompany_myproject_sysbundle_admin_user_new',);
        }

        // mycompany_myproject_sysbundle_admin_user_create
        if ($pathinfo === '/admin/user/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_user_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::createAction',  '_route' => 'mycompany_myproject_sysbundle_admin_user_create',);
        }
        not_mycompany_myproject_sysbundle_admin_user_create:

        // mycompany_myproject_sysbundle_admin_user_edit
        if (0 === strpos($pathinfo, '/admin/user') && preg_match('#^/admin/user/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::editAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_user_edit'));
        }

        // mycompany_myproject_sysbundle_admin_user_update
        if (0 === strpos($pathinfo, '/admin/user') && preg_match('#^/admin/user/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_user_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::updateAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_user_update'));
        }
        not_mycompany_myproject_sysbundle_admin_user_update:

        // mycompany_myproject_sysbundle_admin_user_delete
        if (0 === strpos($pathinfo, '/admin/user') && preg_match('#^/admin/user/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_user_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::deleteAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_user_delete'));
        }
        not_mycompany_myproject_sysbundle_admin_user_delete:

        // mycompany_myproject_sysbundle_admin_role
        if ($pathinfo === '/admin/role') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::indexAction',  '_route' => 'mycompany_myproject_sysbundle_admin_role',);
        }

        // mycompany_myproject_sysbundle_admin_role_show
        if (0 === strpos($pathinfo, '/admin/role') && preg_match('#^/admin/role/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::showAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_role_show'));
        }

        // mycompany_myproject_sysbundle_admin_role_new
        if ($pathinfo === '/admin/role/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',  '_route' => 'mycompany_myproject_sysbundle_admin_role_new',);
        }

        // mycompany_myproject_sysbundle_admin_role_create
        if ($pathinfo === '/admin/role/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_role_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::createAction',  '_route' => 'mycompany_myproject_sysbundle_admin_role_create',);
        }
        not_mycompany_myproject_sysbundle_admin_role_create:

        // mycompany_myproject_sysbundle_admin_role_edit
        if (0 === strpos($pathinfo, '/admin/role') && preg_match('#^/admin/role/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::editAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_role_edit'));
        }

        // mycompany_myproject_sysbundle_admin_role_update
        if (0 === strpos($pathinfo, '/admin/role') && preg_match('#^/admin/role/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_role_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::updateAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_role_update'));
        }
        not_mycompany_myproject_sysbundle_admin_role_update:

        // mycompany_myproject_sysbundle_admin_role_delete
        if (0 === strpos($pathinfo, '/admin/role') && preg_match('#^/admin/role/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_role_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::deleteAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_role_delete'));
        }
        not_mycompany_myproject_sysbundle_admin_role_delete:

        // mycompany_myproject_sysbundle_admin_locale
        if ($pathinfo === '/admin/locale') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::indexAction',  '_route' => 'mycompany_myproject_sysbundle_admin_locale',);
        }

        // mycompany_myproject_sysbundle_admin_locale_show
        if (0 === strpos($pathinfo, '/admin/locale') && preg_match('#^/admin/locale/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::showAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_locale_show'));
        }

        // mycompany_myproject_sysbundle_admin_locale_new
        if ($pathinfo === '/admin/locale/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::newAction',  '_route' => 'mycompany_myproject_sysbundle_admin_locale_new',);
        }

        // mycompany_myproject_sysbundle_admin_locale_create
        if ($pathinfo === '/admin/locale/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_locale_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::createAction',  '_route' => 'mycompany_myproject_sysbundle_admin_locale_create',);
        }
        not_mycompany_myproject_sysbundle_admin_locale_create:

        // mycompany_myproject_sysbundle_admin_locale_edit
        if (0 === strpos($pathinfo, '/admin/locale') && preg_match('#^/admin/locale/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::editAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_locale_edit'));
        }

        // mycompany_myproject_sysbundle_admin_locale_update
        if (0 === strpos($pathinfo, '/admin/locale') && preg_match('#^/admin/locale/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_locale_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::updateAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_locale_update'));
        }
        not_mycompany_myproject_sysbundle_admin_locale_update:

        // mycompany_myproject_sysbundle_admin_locale_delete
        if (0 === strpos($pathinfo, '/admin/locale') && preg_match('#^/admin/locale/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_sysbundle_admin_locale_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::deleteAction',)), array('_route' => 'mycompany_myproject_sysbundle_admin_locale_delete'));
        }
        not_mycompany_myproject_sysbundle_admin_locale_delete:

        // root
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'root');
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\SecurityController::rerouteAction',  '_route' => 'root',);
        }

        // login
        if ($pathinfo === '/login') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\SecurityController::initAction',  '_route' => 'login',);
        }

        // loginlocale
        if (preg_match('#^/(?P<_locale>[^/]+?)/login$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectSysBundle:login',  'locale' => '_locale',)), array('_route' => 'loginlocale'));
        }

        // login_check
        if ($pathinfo === '/login_check') {
            return array('_route' => 'login_check');
        }

        // _logout
        if ($pathinfo === '/logout') {
            return array('_route' => '_logout');
        }

        // mycompany_myproject_sysbundle_page0010
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/role/new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',  'name' => 'page0010',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page0010'));
        }

        // mycompany_myproject_sysbundle_page201
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/user/new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::newAction',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page201'));
        }

        // mycompany_myproject_sysbundle_page101
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/locale/new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::newAction',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page101'));
        }

        // mycompany_myproject_sysbundle_section2
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/user$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_section2'));
        }

        // mycompany_myproject_sysbundle_section1
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/system$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_section1'));
        }

        // _main
        if ($pathinfo === '/main') {
            return array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\MainController::initAction',  '_route' => '_main',);
        }

        // mycompany_myproject_sysbundle_main
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/?$#x', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'mycompany_myproject_sysbundle_main');
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\MainController::initAction',  'name' => 'main',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_main'));
        }

        // mycompany_myproject_sysbundle_page301
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/reference\\:new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminReference:new',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page301'));
        }

        // mycompany_myproject_sysbundle_section0
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/role$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_section0'));
        }

        // mycompany_myproject_sysbundle_page001
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/role/new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page001'));
        }

        // mycompany_myproject_sysbundle_section4
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/menu$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminMenu:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_section4'));
        }

        // mycompany_myproject_sysbundle_section3
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/reference$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminReference:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_section3'));
        }

        // mycompany_myproject_sysbundle_page401
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/admin/menu/new$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminMenu:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_sysbundle_page401'));
        }

        // mycompany_myproject_appbundle_pam_fraude
        if (0 === strpos($pathinfo, '/pam/fraude') && preg_match('#^/pam/fraude/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'action' => 'index',)), array('_route' => 'mycompany_myproject_appbundle_pam_fraude'));
        }

        // mycompany_myproject_appbundle_pam_fraude_post
        if (0 === strpos($pathinfo, '/pam/fraude') && preg_match('#^/pam/fraude/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'action' => 'index',  '_method' => 'POST',)), array('_route' => 'mycompany_myproject_appbundle_pam_fraude_post'));
        }

        // mycompany_myproject_appbundle_pam_kri
        if (0 === strpos($pathinfo, '/pam/kri') && preg_match('#^/pam/kri/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::kriAction',  'action' => 'index',)), array('_route' => 'mycompany_myproject_appbundle_pam_kri'));
        }

        // mycompany_myproject_appbundle_pam_kri_post
        if (0 === strpos($pathinfo, '/pam/kri') && preg_match('#^/pam/kri/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::kriAction',  'action' => 'index',  '_method' => 'POST',)), array('_route' => 'mycompany_myproject_appbundle_pam_kri_post'));
        }

        // mycompany_myproject_appbundle_pam_event
        if (0 === strpos($pathinfo, '/pam/event') && preg_match('#^/pam/event/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::eventAction',  'action' => 'index',)), array('_route' => 'mycompany_myproject_appbundle_pam_event'));
        }

        // mycompany_myproject_appbundle_pam_event_post
        if (0 === strpos($pathinfo, '/pam/event') && preg_match('#^/pam/event/(?P<name>[^/]+?)/(?P<action>[^/]+?)/(?P<id>[^/]+?)$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::eventAction',  'action' => 'index',  '_method' => 'POST',)), array('_route' => 'mycompany_myproject_appbundle_pam_event_post'));
        }

        // mycompany_myproject_appbundle_pam_annee
        if ($pathinfo === '/pam/annee') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_annee',);
        }

        // mycompany_myproject_appbundle_pam_annee_show
        if (0 === strpos($pathinfo, '/pam/annee') && preg_match('#^/pam/annee/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_annee_show'));
        }

        // mycompany_myproject_appbundle_pam_annee_new
        if ($pathinfo === '/pam/annee/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_annee_new',);
        }

        // mycompany_myproject_appbundle_pam_annee_create
        if ($pathinfo === '/pam/annee/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_annee_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_annee_create',);
        }
        not_mycompany_myproject_appbundle_pam_annee_create:

        // mycompany_myproject_appbundle_pam_annee_edit
        if (0 === strpos($pathinfo, '/pam/annee') && preg_match('#^/pam/annee/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_annee_edit'));
        }

        // mycompany_myproject_appbundle_pam_annee_update
        if (0 === strpos($pathinfo, '/pam/annee') && preg_match('#^/pam/annee/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_annee_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_annee_update'));
        }
        not_mycompany_myproject_appbundle_pam_annee_update:

        // mycompany_myproject_appbundle_pam_annee_delete
        if (0 === strpos($pathinfo, '/pam/annee') && preg_match('#^/pam/annee/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_annee_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_annee_delete'));
        }
        not_mycompany_myproject_appbundle_pam_annee_delete:

        // mycompany_myproject_appbundle_pam_semestre
        if ($pathinfo === '/pam/semestre') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_semestre',);
        }

        // mycompany_myproject_appbundle_pam_semestre_show
        if (0 === strpos($pathinfo, '/pam/semestre') && preg_match('#^/pam/semestre/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_semestre_show'));
        }

        // mycompany_myproject_appbundle_pam_semestre_new
        if ($pathinfo === '/pam/semestre/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_semestre_new',);
        }

        // mycompany_myproject_appbundle_pam_semestre_create
        if ($pathinfo === '/pam/semestre/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_semestre_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_semestre_create',);
        }
        not_mycompany_myproject_appbundle_pam_semestre_create:

        // mycompany_myproject_appbundle_pam_semestre_edit
        if (0 === strpos($pathinfo, '/pam/semestre') && preg_match('#^/pam/semestre/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_semestre_edit'));
        }

        // mycompany_myproject_appbundle_pam_semestre_update
        if (0 === strpos($pathinfo, '/pam/semestre') && preg_match('#^/pam/semestre/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_semestre_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_semestre_update'));
        }
        not_mycompany_myproject_appbundle_pam_semestre_update:

        // mycompany_myproject_appbundle_pam_semestre_delete
        if (0 === strpos($pathinfo, '/pam/semestre') && preg_match('#^/pam/semestre/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_semestre_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_semestre_delete'));
        }
        not_mycompany_myproject_appbundle_pam_semestre_delete:

        // mycompany_myproject_appbundle_pam_acquisition
        if ($pathinfo === '/pam/acquisition') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_acquisition',);
        }

        // mycompany_myproject_appbundle_pam_acquisition_show
        if (0 === strpos($pathinfo, '/pam/acquisition') && preg_match('#^/pam/acquisition/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_acquisition_show'));
        }

        // mycompany_myproject_appbundle_pam_acquisition_new
        if ($pathinfo === '/pam/acquisition/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_acquisition_new',);
        }

        // mycompany_myproject_appbundle_pam_acquisition_create
        if ($pathinfo === '/pam/acquisition/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_acquisition_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_acquisition_create',);
        }
        not_mycompany_myproject_appbundle_pam_acquisition_create:

        // mycompany_myproject_appbundle_pam_acquisition_edit
        if (0 === strpos($pathinfo, '/pam/acquisition') && preg_match('#^/pam/acquisition/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_acquisition_edit'));
        }

        // mycompany_myproject_appbundle_pam_acquisition_update
        if (0 === strpos($pathinfo, '/pam/acquisition') && preg_match('#^/pam/acquisition/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_acquisition_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_acquisition_update'));
        }
        not_mycompany_myproject_appbundle_pam_acquisition_update:

        // mycompany_myproject_appbundle_pam_acquisition_delete
        if (0 === strpos($pathinfo, '/pam/acquisition') && preg_match('#^/pam/acquisition/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_acquisition_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_acquisition_delete'));
        }
        not_mycompany_myproject_appbundle_pam_acquisition_delete:

        // mycompany_myproject_appbundle_pam_filiale
        if ($pathinfo === '/pam/filiale') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_filiale',);
        }

        // mycompany_myproject_appbundle_pam_filiale_show
        if (0 === strpos($pathinfo, '/pam/filiale') && preg_match('#^/pam/filiale/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_filiale_show'));
        }

        // mycompany_myproject_appbundle_pam_filiale_new
        if ($pathinfo === '/pam/filiale/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_filiale_new',);
        }

        // mycompany_myproject_appbundle_pam_filiale_create
        if ($pathinfo === '/pam/filiale/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_filiale_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_filiale_create',);
        }
        not_mycompany_myproject_appbundle_pam_filiale_create:

        // mycompany_myproject_appbundle_pam_filiale_edit
        if (0 === strpos($pathinfo, '/pam/filiale') && preg_match('#^/pam/filiale/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_filiale_edit'));
        }

        // mycompany_myproject_appbundle_pam_filiale_update
        if (0 === strpos($pathinfo, '/pam/filiale') && preg_match('#^/pam/filiale/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_filiale_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_filiale_update'));
        }
        not_mycompany_myproject_appbundle_pam_filiale_update:

        // mycompany_myproject_appbundle_pam_filiale_delete
        if (0 === strpos($pathinfo, '/pam/filiale') && preg_match('#^/pam/filiale/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_filiale_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_filiale_delete'));
        }
        not_mycompany_myproject_appbundle_pam_filiale_delete:

        // mycompany_myproject_appbundle_pam_periode
        if ($pathinfo === '/pam/periode') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_periode',);
        }

        // mycompany_myproject_appbundle_pam_periode_show
        if (0 === strpos($pathinfo, '/pam/periode') && preg_match('#^/pam/periode/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_periode_show'));
        }

        // mycompany_myproject_appbundle_pam_periode_new
        if ($pathinfo === '/pam/periode/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_periode_new',);
        }

        // mycompany_myproject_appbundle_pam_periode_create
        if ($pathinfo === '/pam/periode/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_periode_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_periode_create',);
        }
        not_mycompany_myproject_appbundle_pam_periode_create:

        // mycompany_myproject_appbundle_pam_periode_edit
        if (0 === strpos($pathinfo, '/pam/periode') && preg_match('#^/pam/periode/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_periode_edit'));
        }

        // mycompany_myproject_appbundle_pam_periode_update
        if (0 === strpos($pathinfo, '/pam/periode') && preg_match('#^/pam/periode/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_periode_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_periode_update'));
        }
        not_mycompany_myproject_appbundle_pam_periode_update:

        // mycompany_myproject_appbundle_pam_periode_delete
        if (0 === strpos($pathinfo, '/pam/periode') && preg_match('#^/pam/periode/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_periode_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_periode_delete'));
        }
        not_mycompany_myproject_appbundle_pam_periode_delete:

        // mycompany_myproject_appbundle_pam_systeme
        if ($pathinfo === '/pam/systeme') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_systeme',);
        }

        // mycompany_myproject_appbundle_pam_systeme_show
        if (0 === strpos($pathinfo, '/pam/systeme') && preg_match('#^/pam/systeme/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_systeme_show'));
        }

        // mycompany_myproject_appbundle_pam_systeme_new
        if ($pathinfo === '/pam/systeme/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_systeme_new',);
        }

        // mycompany_myproject_appbundle_pam_systeme_create
        if ($pathinfo === '/pam/systeme/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_systeme_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_systeme_create',);
        }
        not_mycompany_myproject_appbundle_pam_systeme_create:

        // mycompany_myproject_appbundle_pam_systeme_edit
        if (0 === strpos($pathinfo, '/pam/systeme') && preg_match('#^/pam/systeme/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_systeme_edit'));
        }

        // mycompany_myproject_appbundle_pam_systeme_update
        if (0 === strpos($pathinfo, '/pam/systeme') && preg_match('#^/pam/systeme/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_systeme_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_systeme_update'));
        }
        not_mycompany_myproject_appbundle_pam_systeme_update:

        // mycompany_myproject_appbundle_pam_systeme_delete
        if (0 === strpos($pathinfo, '/pam/systeme') && preg_match('#^/pam/systeme/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_systeme_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_systeme_delete'));
        }
        not_mycompany_myproject_appbundle_pam_systeme_delete:

        // mycompany_myproject_appbundle_pam_zone
        if ($pathinfo === '/pam/zone') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_zone',);
        }

        // mycompany_myproject_appbundle_pam_zone_show
        if (0 === strpos($pathinfo, '/pam/zone') && preg_match('#^/pam/zone/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_zone_show'));
        }

        // mycompany_myproject_appbundle_pam_zone_new
        if ($pathinfo === '/pam/zone/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_zone_new',);
        }

        // mycompany_myproject_appbundle_pam_zone_create
        if ($pathinfo === '/pam/zone/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_zone_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_zone_create',);
        }
        not_mycompany_myproject_appbundle_pam_zone_create:

        // mycompany_myproject_appbundle_pam_zone_edit
        if (0 === strpos($pathinfo, '/pam/zone') && preg_match('#^/pam/zone/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_zone_edit'));
        }

        // mycompany_myproject_appbundle_pam_zone_update
        if (0 === strpos($pathinfo, '/pam/zone') && preg_match('#^/pam/zone/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_zone_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_zone_update'));
        }
        not_mycompany_myproject_appbundle_pam_zone_update:

        // mycompany_myproject_appbundle_pam_zone_delete
        if (0 === strpos($pathinfo, '/pam/zone') && preg_match('#^/pam/zone/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_zone_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_zone_delete'));
        }
        not_mycompany_myproject_appbundle_pam_zone_delete:

        // mycompany_myproject_appbundle_fraude_typologie
        if ($pathinfo === '/fraude/typologie') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::indexAction',  '_route' => 'mycompany_myproject_appbundle_fraude_typologie',);
        }

        // mycompany_myproject_appbundle_fraude_typologie_show
        if (0 === strpos($pathinfo, '/fraude/typologie') && preg_match('#^/fraude/typologie/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_fraude_typologie_show'));
        }

        // mycompany_myproject_appbundle_fraude_typologie_new
        if ($pathinfo === '/fraude/typologie/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::newAction',  '_route' => 'mycompany_myproject_appbundle_fraude_typologie_new',);
        }

        // mycompany_myproject_appbundle_fraude_typologie_create
        if ($pathinfo === '/fraude/typologie/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_fraude_typologie_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::createAction',  '_route' => 'mycompany_myproject_appbundle_fraude_typologie_create',);
        }
        not_mycompany_myproject_appbundle_fraude_typologie_create:

        // mycompany_myproject_appbundle_fraude_typologie_edit
        if (0 === strpos($pathinfo, '/fraude/typologie') && preg_match('#^/fraude/typologie/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_fraude_typologie_edit'));
        }

        // mycompany_myproject_appbundle_fraude_typologie_update
        if (0 === strpos($pathinfo, '/fraude/typologie') && preg_match('#^/fraude/typologie/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_fraude_typologie_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_fraude_typologie_update'));
        }
        not_mycompany_myproject_appbundle_fraude_typologie_update:

        // mycompany_myproject_appbundle_fraude_typologie_delete
        if (0 === strpos($pathinfo, '/fraude/typologie') && preg_match('#^/fraude/typologie/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_fraude_typologie_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_fraude_typologie_delete'));
        }
        not_mycompany_myproject_appbundle_fraude_typologie_delete:

        // mycompany_myproject_appbundle_pam_pays
        if ($pathinfo === '/pam/pays') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::indexAction',  '_route' => 'mycompany_myproject_appbundle_pam_pays',);
        }

        // mycompany_myproject_appbundle_pam_pays_show
        if (0 === strpos($pathinfo, '/pam/pays') && preg_match('#^/pam/pays/(?P<id>[^/]+?)/show$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::showAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_pays_show'));
        }

        // mycompany_myproject_appbundle_pam_pays_new
        if ($pathinfo === '/pam/pays/new') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::newAction',  '_route' => 'mycompany_myproject_appbundle_pam_pays_new',);
        }

        // mycompany_myproject_appbundle_pam_pays_create
        if ($pathinfo === '/pam/pays/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_pays_create;
            }
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::createAction',  '_route' => 'mycompany_myproject_appbundle_pam_pays_create',);
        }
        not_mycompany_myproject_appbundle_pam_pays_create:

        // mycompany_myproject_appbundle_pam_pays_edit
        if (0 === strpos($pathinfo, '/pam/pays') && preg_match('#^/pam/pays/(?P<id>[^/]+?)/edit$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::editAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_pays_edit'));
        }

        // mycompany_myproject_appbundle_pam_pays_update
        if (0 === strpos($pathinfo, '/pam/pays') && preg_match('#^/pam/pays/(?P<id>[^/]+?)/update$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_pays_update;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::updateAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_pays_update'));
        }
        not_mycompany_myproject_appbundle_pam_pays_update:

        // mycompany_myproject_appbundle_pam_pays_delete
        if (0 === strpos($pathinfo, '/pam/pays') && preg_match('#^/pam/pays/(?P<id>[^/]+?)/delete$#x', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_mycompany_myproject_appbundle_pam_pays_delete;
            }
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::deleteAction',)), array('_route' => 'mycompany_myproject_appbundle_pam_pays_delete'));
        }
        not_mycompany_myproject_appbundle_pam_pays_delete:

        // mycompany_myproject_appbundle_page0014
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/pays$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0014'));
        }

        // mycompany_myproject_appbundle_page0010
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/annee$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0010'));
        }

        // mycompany_myproject_appbundle_page0013
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/acquisition$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0013'));
        }

        // mycompany_myproject_appbundle_section0
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',  'name' => 'home',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_section0'));
        }

        // mycompany_myproject_appbundle_page0015
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/zone$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0015'));
        }

        // mycompany_myproject_appbundle_page101
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/fraude/dab$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'DAB',  'action' => 'index',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page101'));
        }

        // mycompany_myproject_appbundle_page102
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/fraude/carte$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'CARTE',  'action' => 'index',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page102'));
        }

        // mycompany_myproject_appbundle_section1
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/fraude$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'DAB',  'action' => 'welcome',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_section1'));
        }

        // mycompany_myproject_appbundle_page001
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectAppBundle:PamConfig:system',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page001'));
        }

        // mycompany_myproject_appbundle_page0012
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/periode$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0012'));
        }

        // mycompany_myproject_appbundle_page0011
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/semestre$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0011'));
        }

        // mycompany_myproject_appbundle_page0017
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/fililale$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0017'));
        }

        // mycompany_myproject_appbundle_page0020
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/fraude/typologie$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0020'));
        }

        // mycompany_myproject_appbundle_page103
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/fraude/tpe$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'TPE',  'action' => 'index',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page103'));
        }

        // _pam
        if ($pathinfo === '/pam') {
            return array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',  '_route' => '_pam',);
        }

        // mycompany_myproject_appbundle_pam
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/home$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',  'name' => 'home',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_pam'));
        }

        // mycompany_myproject_appbundle_page0016
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/system/systeme$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::indexAction',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page0016'));
        }

        // mycompany_myproject_appbundle_page002
        if (preg_match('#^/(?P<_locale>en_US|fr_FR|ru_RU)/pam/config/fraude$#x', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'MyCompanyMyProjectAppBundle:PamConfig:fraude',  '_locale' => 'fr_FR',)), array('_route' => 'mycompany_myproject_appbundle_page002'));
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
