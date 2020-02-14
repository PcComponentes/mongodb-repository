<?php
declare(strict_types=1);

namespace PcComponentes\MongoDB;

use MongoDB\Client;
use MongoDB\Database;

final class MongoDbDatabaseFactory
{
    public static function get(Client $client, string $database): Database
    {
        return $client->selectDatabase($database);
    }
}
