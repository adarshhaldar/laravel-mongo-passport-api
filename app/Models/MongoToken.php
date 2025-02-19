<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Laravel\Passport\Token;
use MongoDB\Laravel\Eloquent\DocumentModel;

class MongoToken extends Token
{
    use DocumentModel;

    protected $primaryKey = '_id';
    protected $keyType = 'string';
    public $incrementing = false;
}
