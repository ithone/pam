<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * apptestUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class apptestUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_assetic_57785d6' => true,
       '_assetic_57785d6_0' => true,
       '_assetic_1f1e61b' => true,
       '_assetic_1f1e61b_0' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'MyCompanyMyProjectTestBundle_homepage' => true,
       'mycompany_myproject_sysbundle_admin_user' => true,
       'mycompany_myproject_sysbundle_admin_user_show' => true,
       'mycompany_myproject_sysbundle_admin_user_new' => true,
       'mycompany_myproject_sysbundle_admin_user_create' => true,
       'mycompany_myproject_sysbundle_admin_user_edit' => true,
       'mycompany_myproject_sysbundle_admin_user_update' => true,
       'mycompany_myproject_sysbundle_admin_user_delete' => true,
       'mycompany_myproject_sysbundle_admin_role' => true,
       'mycompany_myproject_sysbundle_admin_role_show' => true,
       'mycompany_myproject_sysbundle_admin_role_new' => true,
       'mycompany_myproject_sysbundle_admin_role_create' => true,
       'mycompany_myproject_sysbundle_admin_role_edit' => true,
       'mycompany_myproject_sysbundle_admin_role_update' => true,
       'mycompany_myproject_sysbundle_admin_role_delete' => true,
       'mycompany_myproject_sysbundle_admin_locale' => true,
       'mycompany_myproject_sysbundle_admin_locale_show' => true,
       'mycompany_myproject_sysbundle_admin_locale_new' => true,
       'mycompany_myproject_sysbundle_admin_locale_create' => true,
       'mycompany_myproject_sysbundle_admin_locale_edit' => true,
       'mycompany_myproject_sysbundle_admin_locale_update' => true,
       'mycompany_myproject_sysbundle_admin_locale_delete' => true,
       'root' => true,
       'login' => true,
       'loginlocale' => true,
       'login_check' => true,
       '_logout' => true,
       'mycompany_myproject_sysbundle_page0010' => true,
       'mycompany_myproject_sysbundle_page201' => true,
       'mycompany_myproject_sysbundle_page101' => true,
       'mycompany_myproject_sysbundle_section2' => true,
       'mycompany_myproject_sysbundle_section1' => true,
       '_main' => true,
       'mycompany_myproject_sysbundle_main' => true,
       'mycompany_myproject_sysbundle_page301' => true,
       'mycompany_myproject_sysbundle_section0' => true,
       'mycompany_myproject_sysbundle_page001' => true,
       'mycompany_myproject_sysbundle_section4' => true,
       'mycompany_myproject_sysbundle_section3' => true,
       'mycompany_myproject_sysbundle_page401' => true,
       'mycompany_myproject_appbundle_pam_fraude' => true,
       'mycompany_myproject_appbundle_pam_fraude_post' => true,
       'mycompany_myproject_appbundle_pam_kri' => true,
       'mycompany_myproject_appbundle_pam_kri_post' => true,
       'mycompany_myproject_appbundle_pam_event' => true,
       'mycompany_myproject_appbundle_pam_event_post' => true,
       'mycompany_myproject_appbundle_pam_annee' => true,
       'mycompany_myproject_appbundle_pam_annee_show' => true,
       'mycompany_myproject_appbundle_pam_annee_new' => true,
       'mycompany_myproject_appbundle_pam_annee_create' => true,
       'mycompany_myproject_appbundle_pam_annee_edit' => true,
       'mycompany_myproject_appbundle_pam_annee_update' => true,
       'mycompany_myproject_appbundle_pam_annee_delete' => true,
       'mycompany_myproject_appbundle_pam_semestre' => true,
       'mycompany_myproject_appbundle_pam_semestre_show' => true,
       'mycompany_myproject_appbundle_pam_semestre_new' => true,
       'mycompany_myproject_appbundle_pam_semestre_create' => true,
       'mycompany_myproject_appbundle_pam_semestre_edit' => true,
       'mycompany_myproject_appbundle_pam_semestre_update' => true,
       'mycompany_myproject_appbundle_pam_semestre_delete' => true,
       'mycompany_myproject_appbundle_pam_acquisition' => true,
       'mycompany_myproject_appbundle_pam_acquisition_show' => true,
       'mycompany_myproject_appbundle_pam_acquisition_new' => true,
       'mycompany_myproject_appbundle_pam_acquisition_create' => true,
       'mycompany_myproject_appbundle_pam_acquisition_edit' => true,
       'mycompany_myproject_appbundle_pam_acquisition_update' => true,
       'mycompany_myproject_appbundle_pam_acquisition_delete' => true,
       'mycompany_myproject_appbundle_pam_filiale' => true,
       'mycompany_myproject_appbundle_pam_filiale_show' => true,
       'mycompany_myproject_appbundle_pam_filiale_new' => true,
       'mycompany_myproject_appbundle_pam_filiale_create' => true,
       'mycompany_myproject_appbundle_pam_filiale_edit' => true,
       'mycompany_myproject_appbundle_pam_filiale_update' => true,
       'mycompany_myproject_appbundle_pam_filiale_delete' => true,
       'mycompany_myproject_appbundle_pam_periode' => true,
       'mycompany_myproject_appbundle_pam_periode_show' => true,
       'mycompany_myproject_appbundle_pam_periode_new' => true,
       'mycompany_myproject_appbundle_pam_periode_create' => true,
       'mycompany_myproject_appbundle_pam_periode_edit' => true,
       'mycompany_myproject_appbundle_pam_periode_update' => true,
       'mycompany_myproject_appbundle_pam_periode_delete' => true,
       'mycompany_myproject_appbundle_pam_systeme' => true,
       'mycompany_myproject_appbundle_pam_systeme_show' => true,
       'mycompany_myproject_appbundle_pam_systeme_new' => true,
       'mycompany_myproject_appbundle_pam_systeme_create' => true,
       'mycompany_myproject_appbundle_pam_systeme_edit' => true,
       'mycompany_myproject_appbundle_pam_systeme_update' => true,
       'mycompany_myproject_appbundle_pam_systeme_delete' => true,
       'mycompany_myproject_appbundle_pam_zone' => true,
       'mycompany_myproject_appbundle_pam_zone_show' => true,
       'mycompany_myproject_appbundle_pam_zone_new' => true,
       'mycompany_myproject_appbundle_pam_zone_create' => true,
       'mycompany_myproject_appbundle_pam_zone_edit' => true,
       'mycompany_myproject_appbundle_pam_zone_update' => true,
       'mycompany_myproject_appbundle_pam_zone_delete' => true,
       'mycompany_myproject_appbundle_fraude_typologie' => true,
       'mycompany_myproject_appbundle_fraude_typologie_show' => true,
       'mycompany_myproject_appbundle_fraude_typologie_new' => true,
       'mycompany_myproject_appbundle_fraude_typologie_create' => true,
       'mycompany_myproject_appbundle_fraude_typologie_edit' => true,
       'mycompany_myproject_appbundle_fraude_typologie_update' => true,
       'mycompany_myproject_appbundle_fraude_typologie_delete' => true,
       'mycompany_myproject_appbundle_pam_pays' => true,
       'mycompany_myproject_appbundle_pam_pays_show' => true,
       'mycompany_myproject_appbundle_pam_pays_new' => true,
       'mycompany_myproject_appbundle_pam_pays_create' => true,
       'mycompany_myproject_appbundle_pam_pays_edit' => true,
       'mycompany_myproject_appbundle_pam_pays_update' => true,
       'mycompany_myproject_appbundle_pam_pays_delete' => true,
       'mycompany_myproject_appbundle_page0014' => true,
       'mycompany_myproject_appbundle_page0010' => true,
       'mycompany_myproject_appbundle_page0013' => true,
       'mycompany_myproject_appbundle_section0' => true,
       'mycompany_myproject_appbundle_page0015' => true,
       'mycompany_myproject_appbundle_page101' => true,
       'mycompany_myproject_appbundle_page102' => true,
       'mycompany_myproject_appbundle_section1' => true,
       'mycompany_myproject_appbundle_page001' => true,
       'mycompany_myproject_appbundle_page0012' => true,
       'mycompany_myproject_appbundle_page0011' => true,
       'mycompany_myproject_appbundle_page0017' => true,
       'mycompany_myproject_appbundle_page0020' => true,
       'mycompany_myproject_appbundle_page103' => true,
       '_pam' => true,
       'mycompany_myproject_appbundle_pam' => true,
       'mycompany_myproject_appbundle_page0016' => true,
       'mycompany_myproject_appbundle_page002' => true,
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function generate($name, $parameters = array(), $absolute = false)
    {
        if (!isset(self::$declaredRouteNames[$name])) {
            throw new RouteNotFoundException(sprintf('Route "%s" does not exist.', $name));
        }

        $escapedName = str_replace('.', '__', $name);

        list($variables, $defaults, $requirements, $tokens) = $this->{'get'.$escapedName.'RouteInfo'}();

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $absolute);
    }

    private function get_assetic_57785d6RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '57785d6',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/57785d6.css',  ),));
    }

    private function get_assetic_57785d6_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '57785d6',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/57785d6_part_1_main_1.css',  ),));
    }

    private function get_assetic_1f1e61bRouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1f1e61b',  'pos' => NULL,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/1f1e61b.css',  ),));
    }

    private function get_assetic_1f1e61b_0RouteInfo()
    {
        return array(array (), array (  '_controller' => 'assetic.controller:render',  'name' => '1f1e61b',  'pos' => 0,  '_format' => 'css',), array (), array (  0 =>   array (    0 => 'text',    1 => '/css/1f1e61b_part_1_main_1.css',  ),));
    }

    private function get_wdtRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_wdt',  ),));
    }

    private function get_profiler_searchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/search',  ),));
    }

    private function get_profiler_purgeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/purge',  ),));
    }

    private function get_profiler_importRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_profiler/import',  ),));
    }

    private function get_profiler_exportRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '.txt',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/\\.]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler/export',  ),));
    }

    private function get_profiler_search_resultsRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/search/results',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  2 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_profilerRouteInfo()
    {
        return array(array (  0 => 'token',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'token',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler',  ),));
    }

    private function get_configurator_homeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/',  ),));
    }

    private function get_configurator_stepRouteInfo()
    {
        return array(array (  0 => 'index',), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'index',  ),  1 =>   array (    0 => 'text',    1 => '/_configurator/step',  ),));
    }

    private function get_configurator_finalRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/_configurator/final',  ),));
    }

    private function getMyCompanyMyProjectTestBundle_homepageRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'MyCompany\\MyProject\\TestBundle\\Controller\\DefaultController::indexAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/hello',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_userRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/user',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/user',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/user/new',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/user/create',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/user',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/user',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_user_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/user',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_roleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/role',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/role',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/role/new',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/role/create',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/role',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/role',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_role_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/role',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_localeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/locale/new',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/admin/locale/create',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_admin_locale_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/locale',  ),));
    }

    private function getrootRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\SecurityController::rerouteAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getloginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\SecurityController::initAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),));
    }

    private function getloginlocaleRouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectSysBundle:login',  'locale' => '_locale',), array (), array (  0 =>   array (    0 => 'text',    1 => '/login',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => '_locale',  ),));
    }

    private function getlogin_checkRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/login_check',  ),));
    }

    private function get_logoutRouteInfo()
    {
        return array(array (), array (), array (), array (  0 =>   array (    0 => 'text',    1 => '/logout',  ),));
    }

    private function getmycompany_myproject_sysbundle_page0010RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',  'name' => 'page0010',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/role/new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_page201RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::newAction',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/user/new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_page101RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::newAction',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/locale/new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_section2RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminUserController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/user',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_section1RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminLocaleController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/system',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function get_mainRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\MainController::initAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/main',  ),));
    }

    private function getmycompany_myproject_sysbundle_mainRouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\MainController::initAction',  'name' => 'main',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_page301RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminReference:new',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/reference:new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_section0RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/role',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_page001RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\SysBundle\\Controller\\AdminRoleController::newAction',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/role/new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_section4RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminMenu:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/menu',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_section3RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminReference:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/reference',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_sysbundle_page401RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectSysBundle:AdminMenu:index',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/admin/menu/new',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_fraudeRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'action' => 'index',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/fraude',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_fraude_postRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'action' => 'index',  '_method' => 'POST',), array (  'method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/fraude',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_kriRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::kriAction',  'action' => 'index',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/kri',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_kri_postRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::kriAction',  'action' => 'index',  '_method' => 'POST',), array (  'method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/kri',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_eventRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::eventAction',  'action' => 'index',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/event',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_event_postRouteInfo()
    {
        return array(array (  0 => 'name',  1 => 'action',  2 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::eventAction',  'action' => 'index',  '_method' => 'POST',), array (  'method' => 'POST',), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'action',  ),  2 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  3 =>   array (    0 => 'text',    1 => '/pam/event',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_anneeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/annee',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/annee',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/annee/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/annee/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/annee',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/annee',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_annee_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/annee',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestreRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/semestre',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/semestre',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/semestre/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/semestre/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/semestre',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/semestre',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_semestre_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/semestre',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisitionRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/acquisition',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/acquisition',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/acquisition/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/acquisition/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/acquisition',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/acquisition',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_acquisition_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/acquisition',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filialeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/filiale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/filiale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/filiale/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/filiale/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/filiale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/filiale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_filiale_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/filiale',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periodeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/periode',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/periode',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/periode/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/periode/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/periode',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/periode',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_periode_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/periode',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systemeRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/systeme',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/systeme',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/systeme/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/systeme/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/systeme',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/systeme',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_systeme_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/systeme',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zoneRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/zone',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/zone',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/zone/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/zone/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/zone',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/zone',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_zone_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/zone',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologieRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/fraude/typologie',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/fraude/typologie',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/fraude/typologie/new',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/fraude/typologie/create',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/fraude/typologie',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/fraude/typologie',  ),));
    }

    private function getmycompany_myproject_appbundle_fraude_typologie_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/fraude/typologie',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_paysRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/pays',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/pays',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam/pays/new',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::createAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/pam/pays/create',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/pays',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::updateAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/pays',  ),));
    }

    private function getmycompany_myproject_appbundle_pam_pays_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::deleteAction',), array (  '_method' => 'POST',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/pam/pays',  ),));
    }

    private function getmycompany_myproject_appbundle_page0014RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPaysController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/pays',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0010RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAnneeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/annee',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0013RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamAcquisitionController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/acquisition',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_section0RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',  'name' => 'home',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0015RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamZoneController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/zone',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page101RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'DAB',  'action' => 'index',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/fraude/dab',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page102RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'CARTE',  'action' => 'index',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/fraude/carte',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_section1RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'DAB',  'action' => 'welcome',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/fraude',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page001RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectAppBundle:PamConfig:system',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0012RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamPeriodeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/periode',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0011RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSemestreController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/semestre',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0017RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamFilialeController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/fililale',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0020RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\FraudeTypologieController::indexAction',  'scope' => 'ANY',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/fraude/typologie',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page103RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::fraudeAction',  'name' => 'TPE',  'action' => 'index',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/fraude/tpe',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function get_pamRouteInfo()
    {
        return array(array (), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/pam',  ),));
    }

    private function getmycompany_myproject_appbundle_pamRouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamController::initAction',  'name' => 'home',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/home',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page0016RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompany\\MyProject\\AppBundle\\Controller\\PamSystemeController::indexAction',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/system/systeme',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }

    private function getmycompany_myproject_appbundle_page002RouteInfo()
    {
        return array(array (  0 => '_locale',), array (  '_controller' => 'MyCompanyMyProjectAppBundle:PamConfig:fraude',  '_locale' => 'fr_FR',), array (  '_locale' => 'en_US|fr_FR|ru_RU',), array (  0 =>   array (    0 => 'text',    1 => '/pam/config/fraude',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => 'en_US|fr_FR|ru_RU',    3 => '_locale',  ),));
    }
}
