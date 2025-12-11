<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppReferences extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id', 'name', 'relationship', 'company', 'phone', 'address',
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
