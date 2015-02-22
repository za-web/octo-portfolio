<?php namespace ZaWeb\Octoportfolio;

use Backend\Facades\Backend;
use System\Classes\PluginBase;

/**
 * octoportfolio Plugin Information File
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
            'name'        => 'zaweb.octoportfolio::lang.plugin.name',
            'description' => 'zaweb.octoportfolio::lang.plugin.description',
            'author'      => 'Za-web',
            'icon'        => 'icon-clipboard'
        ];
    }

    /**
     * Register components
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'ZaWeb\Octoportfolio\Components\Jobs' => 'portfolio',
            'ZaWeb\Octoportfolio\Components\Job' => 'job',
            'ZaWeb\Octoportfolio\Components\Categories' => 'categories',


        ];
    }
    /**
     * Register backend navigation
     *
     * @return array
     */
    public function registerNavigation()
    {
        return [
            'octoportfolio' => [
                'label' => 'zaweb.octoportfolio::lang.navigation.main',
                'url'   => Backend::url('zaweb/octoportfolio/jobs'),
                'icon'  => 'icon-clipboard',
                'permissions' => ['octoportfolio.*'],
                'order' => '500',

                'sideMenu' => [
                    'jobs' => [
                        'label' => 'zaweb.octoportfolio::lang.navigation.side.jobs',
                        'url' => Backend::url('zaweb/octoportfolio/jobs'),
                        'icon' => 'icon-clipboard',
                    ],
                    'categories' => [
                        'label' => 'zaweb.octoportfolio::lang.navigation.side.categories',
                        'url' => Backend::url('zaweb/octoportfolio/categories'),
                        'icon' => 'icon-list'
                    ]
                ]
            ]
        ];
    }


}
