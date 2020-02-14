<?php
declare(strict_types=1);

namespace PcComponentes\MongoDB;

use MongoDB\Collection;
use MongoDB\Database;

final class MongoDBCollectionFactory
{
    public static function get(Database $database, string $collection): Collection
    {
        return $database->selectCollection($collection);
    }
}
