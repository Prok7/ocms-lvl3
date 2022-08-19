<?php namespace Admin\ClassRoom;

use Backend;
use System\Classes\PluginBase;

/**
 * ClassRoom Plugin Information File
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
            'name'        => 'ClassRoom',
            'description' => 'No description provided yet...',
            'author'      => 'Admin',
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
        return []; // Remove this line to activate

        return [
            'Admin\ClassRoom\Components\MyComponent' => 'myComponent',
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
            'admin.classroom.some_permission' => [
                'tab' => 'ClassRoom',
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

        return [
            'classroom' => [
                'label'       => 'ClassRoom',
                'url'         => Backend::url('admin/classroom/students'),
                'icon'        => 'icon-leaf',
                'permissions' => ['admin.classroom.*'],
                'order'       => 500,
                'sideMenu'    => [
                    'students' => [
                        'label'       => 'Students',
                        'url'         => Backend::url('admin/classroom/students'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.classroom.*'],
                        'order'       => 500,
                    ],
                    'arrivals' => [
                        'label'       => 'Arrivals',
                        'url'         => Backend::url('admin/classroom/arrivals'),
                        'icon'        => 'icon-leaf',
                        'permissions' => ['admin.classroom.*'],
                        'order'       => 500,
                    ]
                ]
            ],
        ];
    }
}
