<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use MongoDB\Laravel\Eloquent\DocumentModel;
use Laravel\Passport\AuthCode;

class MongoAuthCode extends AuthCode
{
    use DocumentModel;

    protected $primaryKey = '_id';
    protected $keyType = 'string';
}
