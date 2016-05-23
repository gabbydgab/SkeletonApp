<?php

/**
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace SiteTest;

use Site\Module as ModuleConfig;

class ModuleTest extends \PHPUnit_Framework_TestCase
{
    protected $config;

    public function setUp()
    {
        $module = new ModuleConfig();
        $this->config = $module();
    }

    /**
     * @test
     * @dataProvider configKeys
     */
    public function moduleHasFollowingConfig($key)
    {
        $this->assertArrayHasKey($key, $this->config);
    }

    public function configKeys()
    {
        return [
            'dependencies'          => ['dependencies'],
            'templates'             => ['templates'],
            'middleware_pipeline'   => ['middleware_pipeline'],
            'routes'                => ['routes']
        ];
    }
}
