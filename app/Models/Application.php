<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;

    protected $fillable = [
        'last_name','first_name','middle_initial','street_address','city','state','zip_code',
        'phone','email','date_available','social_security_number','desired_salary',
        'position_applied_for','is_us_citizen','is_authorized_to_work',
        'worked_for_company','worked_for_company_when','felony_conviction',
        'felony_explanation','high_school','high_school_address','hs_from','hs_to',
        'hs_graduated','hs_diploma','college','college_address','college_from','college_to',
        'college_graduated','college_degree','other_school','other_address',
        'other_from','other_to','other_graduated','other_degree',
        'military_branch','military_from','military_to','rank_at_discharge',
        'type_of_discharge','agree_disclaimer','resume'
    ];

    public function references()
    {
        return $this->hasMany(AppReferences::class);
    }

    public function employmentHistory()
    {
        return $this->hasMany(AppEmployment::class);
    }
}
