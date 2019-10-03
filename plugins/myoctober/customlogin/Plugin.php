<?php namespace MyOctober\CustomLogin;

use Backend;
use System\Classes\PluginBase;

/**
 * CustomLogin Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'CustomLogin',
            'description' => 'No description provided yet...',
            'author'      => 'MyOctober',
            'icon'        => 'icon-leaf'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'MyOctober\CustomLogin\Components\customlogin' => 'customLogin',
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'myoctober.customlogin.some_permission' => [
                'tab' => 'CustomLogin',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {
        return []; // Remove this line to activate

        return [
            'customlogin' => [
                'label'       => 'CustomLogin',
                'url'         => Backend::url('myoctober/customlogin/mycontroller'),
                'icon'        => 'icon-leaf',
                'permissions' => ['myoctober.customlogin.*'],
                'order'       => 500,
            ],
        ];
    }
}
