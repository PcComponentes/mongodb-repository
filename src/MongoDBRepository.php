<?php
declare(strict_types=1);

namespace PcComponentes\MongoDB;

use MongoDB\Collection;

abstract class MongoDbRepository
{
    protected Collection $collection;

    public function __construct(Collection $collection)
    {
        $this->collection = $collection;
    }

    final protected function collection(): Collection
    {
        return $this->collection;
    }
}
