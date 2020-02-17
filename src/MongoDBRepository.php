<?php
declare(strict_types=1);

namespace PcComponentes\MongoDB;

use MongoDB\Collection;

abstract class MongoDBRepository
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
