<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\DocumentModel;
use Laravel\Passport\PersonalAccessClient;

class MongoPersonalAccessClient extends PersonalAccessClient
{
    use DocumentModel;

    protected $primaryKey = '_id';
    protected $keyType = 'string';
}
