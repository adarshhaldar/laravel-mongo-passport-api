<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Client;
use MongoDB\Laravel\Eloquent\DocumentModel;

class MongoClient extends Client
{
    use DocumentModel;

    protected $primaryKey = '_id';
    protected $keyType = 'string';
}
