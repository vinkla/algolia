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

namespace Vinkla\Algolia;

use Algolia\AlgoliaSearch\SearchClient;
use GrahamCampbell\Manager\AbstractManager;
use Illuminate\Contracts\Config\Repository;

/**
 * This is the Algolia manager class.
 *
 * @author Vincent Klaiber <hello@doubledip.se>
 */
class AlgoliaManager extends AbstractManager
{
    /**
     * The factory instance.
     *
     * @var \Vinkla\Algolia\AlgoliaFactory
     */
    protected $factory;

    /**
     * Create the Algolia manager instance.
     *
     * @param \Illuminate\Contracts\Config\Repository $config
     * @param \Vinkla\Algolia\AlgoliaFactory $factory
     *
     * @return void
     */
    public function __construct(Repository $config, AlgoliaFactory $factory)
    {
        parent::__construct($config);

        $this->factory = $factory;
    }

    /**
     * Create the connection instance.
     *
     * @param array $config
     *
     * @return \Algolia\AlgoliaSearch\SearchClient
     */
    protected function createConnection(array $config): SearchClient
    {
        return $this->factory->make($config);
    }

    /**
     * Get the configuration name.
     *
     * @return string
     */
    protected function getConfigName(): string
    {
        return 'algolia';
    }

    /**
     * Get the factory instance.
     *
     * @return \Vinkla\Algolia\AlgoliaFactory
     */
    public function getFactory(): AlgoliaFactory
    {
        return $this->factory;
    }
}
