<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\DocumentModel;
use Laravel\Passport\RefreshToken;

class MongoRefreshToken extends RefreshToken
{
    use DocumentModel;

    protected $primaryKey = '_id';
    protected $keyType = 'string';
}
