<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Employer;
use App\Models\User;

class JobListingModel extends Model
{
    use HasFactory;
    protected $table = 'job_listings';

    protected $guarded = [];


    public static function Jobs(){
          return  JobListingModel::all();
    }
    public function employer(){
        return JobListingModel::belongsTo(Employer::class,'employer_id');
    }
    // public function user(){
    //     return JobListingModel::belongsTo(User::class,'user_id');
    // }
}
