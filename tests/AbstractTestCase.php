<?php

/*
 * This file is part of Laravel Algolia.
 *
 * (c) Vincent Klaiber <hello@doubledip.se>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vinkla\Tests\Algolia;

use GrahamCampbell\TestBench\AbstractPackageTestCase;
use Vinkla\Algolia\AlgoliaServiceProvider;

/**
 * This is the abstract test case class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
abstract class AbstractTestCase extends AbstractPackageTestCase
{
    /**
     * Get the service provider class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return string
     */
    protected function getServiceProviderClass($app)
    {
        return AlgoliaServiceProvider::class;
    }
}
