<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gig extends Model
{
    use HasFactory;
    protected $table = 'gigs';
    protected $fillable = [
        'company_name','job_title','job_location','contact_email','website','tags','logo','description','user_id'
    ];

    public function user(){
        return $this->belongsTo('App\Models\User.php','id');
    }
}
