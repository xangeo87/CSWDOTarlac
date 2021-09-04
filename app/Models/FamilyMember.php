<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FamilyMember extends Model
{
    use HasFactory;

    protected $table = "family_members";

    public function client()
    {
        return $this->belongsTo(ClientFile::class, 'client_file_id');
    }
}
