<?php

/*
 * This file is part of the FOSElasticaBundle package.
 *
 * (c) FriendsOfSymfony <https://friendsofsymfony.github.com/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace FOS\ElasticaBundle\Persister\Event;

use FOS\ElasticaBundle\Persister\ObjectPersisterInterface;
use FOS\ElasticaBundle\Provider\PagerInterface;

interface PersistEvent
{
    public function getPager(): PagerInterface;

    /**
     * @phpstan-return array<string, mixed>
     */
    public function getOptions(): array;

    public function getObjectPersister(): ObjectPersisterInterface;
}
