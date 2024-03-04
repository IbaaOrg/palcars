<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AuthResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=> $this->id,
            'name'=>$this->name,
            'email'=>$this->email,
            'email_verified_at'=>$this->email_verified_at,
            'phone'=>$this->phone,
            'role'=>$this->role,           
            'token'=>$this->token,
            'created_at'=>$this->created_at->format('Y-m-d H-i-s'),
            'updated_at'=>$this->updated_at->format('Y-m-d H-i-s'),

        ];
        return parent::toArray($request);
    }
}
