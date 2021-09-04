<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClientFile extends Model
{
    use HasFactory;

    protected $table = "client_files";

    public function familyMembers()
    {
        return $this->hasMany(FamilyMember::class);
    }
}
