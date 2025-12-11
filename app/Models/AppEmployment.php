<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppEmployment extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_id', 'company', 'phone', 'address', 'supervisor', 'title',
        'start_salary', 'end_salary', 'responsibilities', 'from', 'to', 'reason',
        'contact_supervisor'
    ];

    public function application()
    {
        return $this->belongsTo(Application::class);
    }
}
