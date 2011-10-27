<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;


/**
 * appdevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRouteNames = array(
       '_demo_login' => true,
       '_security_check' => true,
       '_demo_logout' => true,
       'acme_demo_secured_hello' => true,
       '_demo_secured_hello' => true,
       '_demo_secured_hello_admin' => true,
       '_demo' => true,
       '_demo_hello' => true,
       '_demo_contact' => true,
       '_wdt' => true,
       '_profiler_search' => true,
       '_profiler_purge' => true,
       '_profiler_info' => true,
       '_profiler_import' => true,
       '_profiler_export' => true,
       '_profiler_search_results' => true,
       '_profiler' => true,
       '_configurator_home' => true,
       '_configurator_step' => true,
       '_configurator_final' => true,
       'homepage' => true,
       'vehicle' => true,
       'vehicle_show' => true,
       'vehicle_new' => true,
       'vehicle_create' => true,
       'vehicle_edit' => true,
       'vehicle_update' => true,
       'vehicle_delete' => true,
       'customer' => true,
       'customer_show' => true,
       'customer_new' => true,
       'customer_create' => true,
       'customer_edit' => true,
       'customer_update' => true,
       'customer_delete' => true,
       'manufacturer' => true,
       'manufacturer_show' => true,
       'manufacturer_new' => true,
       'manufacturer_create' => true,
       'manufacturer_edit' => true,
       'manufacturer_update' => true,
       'manufacturer_delete' => true,
       'model' => true,
       'model_show' => true,
       'model_new' => true,
       'model_create' => true,
       'model_edit' => true,
       'model_update' => true,
       'model_delete' => true,
       'sonata_admin_dashboard' => true,
       'sonata_admin_retrieve_form_element' => true,
       'sonata_admin_append_form_element' => true,
       'sonata_admin_short_object_information' => true,
       'admin_bundle_carrental_renting_list' => true,
       'admin_bundle_carrental_renting_create' => true,
       'admin_bundle_carrental_renting_batch' => true,
       'admin_bundle_carrental_renting_edit' => true,
       'admin_bundle_carrental_renting_delete' => true,
       'admin_bundle_carrental_renting_show' => true,
       'admin_bundle_carrental_payment_list' => true,
       'admin_bundle_carrental_payment_create' => true,
       'admin_bundle_carrental_payment_batch' => true,
       'admin_bundle_carrental_payment_edit' => true,
       'admin_bundle_carrental_payment_delete' => true,
       'admin_bundle_carrental_payment_show' => true,
       'admin_bundle_carrental_customer_list' => true,
       'admin_bundle_carrental_customer_create' => true,
       'admin_bundle_carrental_customer_batch' => true,
       'admin_bundle_carrental_customer_edit' => true,
       'admin_bundle_carrental_customer_delete' => true,
       'admin_bundle_carrental_customer_show' => true,
       'admin_bundle_carrental_vehicle_list' => true,
       'admin_bundle_carrental_vehicle_create' => true,
       'admin_bundle_carrental_vehicle_batch' => true,
       'admin_bundle_carrental_vehicle_edit' => true,
       'admin_bundle_carrental_vehicle_delete' => true,
       'admin_bundle_carrental_vehicle_show' => true,
       'admin_bundle_carrental_manufacturer_list' => true,
       'admin_bundle_carrental_manufacturer_create' => true,
       'admin_bundle_carrental_manufacturer_batch' => true,
       'admin_bundle_carrental_manufacturer_edit' => true,
       'admin_bundle_carrental_manufacturer_delete' => true,
       'admin_bundle_carrental_manufacturer_show' => true,
       'admin_bundle_carrental_model_list' => true,
       'admin_bundle_carrental_model_create' => true,
       'admin_bundle_carrental_model_batch' => true,
       'admin_bundle_carrental_model_edit' => true,
       'admin_bundle_carrental_model_delete' => true,
       'admin_bundle_carrental_model_show' => true,
       'admin_bundle_carrental_fuel_list' => true,
       'admin_bundle_carrental_fuel_create' => true,
       'admin_bundle_carrental_fuel_batch' => true,
       'admin_bundle_carrental_fuel_edit' => true,
       'admin_bundle_carrental_fuel_delete' => true,
       'admin_bundle_carrental_fuel_show' => true,
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

    private function get_demo_loginRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login',  ),));
    }

    private function get_security_checkRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/login_check',  ),));
    }

    private function get_demo_logoutRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/logout',  ),));
    }

    private function getacme_demo_secured_helloRouteInfo()
    {
        return array(array (), array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello',  ),));
    }

    private function get_demo_secured_hello_adminRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/secured/hello/admin',  ),));
    }

    private function get_demoRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/',  ),));
    }

    private function get_demo_helloRouteInfo()
    {
        return array(array (  0 => 'name',), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'name',  ),  1 =>   array (    0 => 'text',    1 => '/demo/hello',  ),));
    }

    private function get_demo_contactRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/demo/contact',  ),));
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

    private function get_profiler_infoRouteInfo()
    {
        return array(array (  0 => 'about',), array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',), array (), array (  0 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'about',  ),  1 =>   array (    0 => 'text',    1 => '/_profiler/info',  ),));
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

    private function gethomepageRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/',  ),));
    }

    private function getvehicleRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/vehicle/',  ),));
    }

    private function getvehicle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/vehicle',  ),));
    }

    private function getvehicle_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/vehicle/new',  ),));
    }

    private function getvehicle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/vehicle/create',  ),));
    }

    private function getvehicle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/vehicle',  ),));
    }

    private function getvehicle_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/vehicle',  ),));
    }

    private function getvehicle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\VehicleController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/vehicle',  ),));
    }

    private function getcustomerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/',  ),));
    }

    private function getcustomer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/customer/new',  ),));
    }

    private function getcustomer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/customer/create',  ),));
    }

    private function getcustomer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getcustomer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\CustomerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/customer',  ),));
    }

    private function getmanufacturerRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manufacturer/',  ),));
    }

    private function getmanufacturer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manufacturer',  ),));
    }

    private function getmanufacturer_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/manufacturer/new',  ),));
    }

    private function getmanufacturer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/manufacturer/create',  ),));
    }

    private function getmanufacturer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manufacturer',  ),));
    }

    private function getmanufacturer_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manufacturer',  ),));
    }

    private function getmanufacturer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ManufacturerController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/manufacturer',  ),));
    }

    private function getmodelRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::indexAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/model/',  ),));
    }

    private function getmodel_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::showAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/model',  ),));
    }

    private function getmodel_newRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::newAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/model/new',  ),));
    }

    private function getmodel_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::createAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/model/create',  ),));
    }

    private function getmodel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::editAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/model',  ),));
    }

    private function getmodel_updateRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::updateAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/update',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/model',  ),));
    }

    private function getmodel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Dunglas\\Bundle\\CarRentalBundle\\Controller\\ModelController::deleteAction',), array (  '_method' => 'post',), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/model',  ),));
    }

    private function getsonata_admin_dashboardRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CoreController::dashboardAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/dashboard',  ),));
    }

    private function getsonata_admin_retrieve_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::retrieveFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-form-field-element',  ),));
    }

    private function getsonata_admin_append_form_elementRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::appendFormFieldElementAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/append-form-field-element',  ),));
    }

    private function getsonata_admin_short_object_informationRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\HelperController::getShortObjectDescriptionAction',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/core/get-short-object-description',  ),));
    }

    private function getadmin_bundle_carrental_renting_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting/list',  ),));
    }

    private function getadmin_bundle_carrental_renting_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting/create',  ),));
    }

    private function getadmin_bundle_carrental_renting_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting/batch',  ),));
    }

    private function getadmin_bundle_carrental_renting_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_renting_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_renting_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.renting',  '_sonata_name' => 'admin_bundle_carrental_renting_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/renting',  ),));
    }

    private function getadmin_bundle_carrental_payment_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment/list',  ),));
    }

    private function getadmin_bundle_carrental_payment_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment/create',  ),));
    }

    private function getadmin_bundle_carrental_payment_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment/batch',  ),));
    }

    private function getadmin_bundle_carrental_payment_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_payment_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_payment_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.payment',  '_sonata_name' => 'admin_bundle_carrental_payment_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/payment',  ),));
    }

    private function getadmin_bundle_carrental_customer_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer/list',  ),));
    }

    private function getadmin_bundle_carrental_customer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer/create',  ),));
    }

    private function getadmin_bundle_carrental_customer_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer/batch',  ),));
    }

    private function getadmin_bundle_carrental_customer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_customer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_customer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.customer',  '_sonata_name' => 'admin_bundle_carrental_customer_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/customer',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle/list',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle/create',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle/batch',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_vehicle_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.vehicle',  '_sonata_name' => 'admin_bundle_carrental_vehicle_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/vehicle',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer/list',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer/create',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer/batch',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_manufacturer_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.manufacturer',  '_sonata_name' => 'admin_bundle_carrental_manufacturer_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/manufacturer',  ),));
    }

    private function getadmin_bundle_carrental_model_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model/list',  ),));
    }

    private function getadmin_bundle_carrental_model_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model/create',  ),));
    }

    private function getadmin_bundle_carrental_model_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model/batch',  ),));
    }

    private function getadmin_bundle_carrental_model_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_model_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_model_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.model',  '_sonata_name' => 'admin_bundle_carrental_model_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/model',  ),));
    }

    private function getadmin_bundle_carrental_fuel_listRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::listAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_list',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel/list',  ),));
    }

    private function getadmin_bundle_carrental_fuel_createRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::createAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_create',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel/create',  ),));
    }

    private function getadmin_bundle_carrental_fuel_batchRouteInfo()
    {
        return array(array (), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::batchAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_batch',), array (), array (  0 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel/batch',  ),));
    }

    private function getadmin_bundle_carrental_fuel_editRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::editAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_edit',), array (), array (  0 =>   array (    0 => 'text',    1 => '/edit',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel',  ),));
    }

    private function getadmin_bundle_carrental_fuel_deleteRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::deleteAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_delete',), array (), array (  0 =>   array (    0 => 'text',    1 => '/delete',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel',  ),));
    }

    private function getadmin_bundle_carrental_fuel_showRouteInfo()
    {
        return array(array (  0 => 'id',), array (  '_controller' => 'Sonata\\AdminBundle\\Controller\\CRUDController::showAction',  '_sonata_admin' => 'dunglas.carrental.admin.fuel',  '_sonata_name' => 'admin_bundle_carrental_fuel_show',), array (), array (  0 =>   array (    0 => 'text',    1 => '/show',  ),  1 =>   array (    0 => 'variable',    1 => '/',    2 => '[^/]+?',    3 => 'id',  ),  2 =>   array (    0 => 'text',    1 => '/admin/bundle/carrental/fuel',  ),));
    }
}