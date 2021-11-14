<?php

/*
 * This file is part of the her-cat/baidu-map.
 *
 * (c) her-cat <i@her-cat.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace HerCat\BaiduMap\WebApi;

use HerCat\BaiduMap\Kernel\ServiceContainer;

/**
 * Class Application.
 *
 * @author her-cat <i@her-cat.com>
 *
 * @property StaticImage\Client     $static_image
 */
class Application extends ServiceContainer
{
    protected $providers = [
        StaticImage\ServiceProvider::class,
    ];
}
