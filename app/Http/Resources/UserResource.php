<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            '_id' => (string)$this->_id,
            'name' => isset($this->name) ? (string)$this->name : null,
            'email' => isset($this->email) ? (string)$this->email : null,
            'auth_token' => isset($this->auth_token) ? (string)$this->auth_token : null
        ];
    }
}
