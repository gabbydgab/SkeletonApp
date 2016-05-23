<?php

/**
 * The MIT License
 *
 * Copyright 2016 Coding Matters, Inc.
 * Author  Gab Amba <gamba@gabbydgab.com>
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 */

namespace Site\Factory;

use Zend\Expressive\Template\TemplateRendererInterface;
use Zend\ServiceManager\Factory\FactoryInterface;
use Zend\Expressive\Router\RouterInterface;
use Interop\Container\ContainerInterface;

/**
 * This factory create HTML PAGE ONLY.
 *
 * @todo Recommend to create separate factories which do not share any common feature.
 */
final class PageFactory implements FactoryInterface
{
    /**
     * This pattern can often replace abstract factories, and is more performant:
     *
     *   1. Lookups for services do not need to query abstract factories; the service is mapped explicitly
     *   2. Once the factory is loaded for any object, it stays in memory for any other service using the same factory
     *
     * @see http://zendframework.github.io/zend-servicemanager/configuring-the-service-manager/#factories
     *
     *
     * @param ContainerInterface $container
     * @param FQCN $requestedName
     * @param array $options
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $router = $container->get(RouterInterface::class);
        $template = ($container->has(TemplateRendererInterface::class))
            ? $container->get(TemplateRendererInterface::class)
            : null;

        return new $requestedName($router, $template);
    }
}
