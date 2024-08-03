<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\JobListingModel;


class Employer extends Model
{
    use HasFactory;
    protected $table = 'employers';

    protected $guarded = [];

    public function jobs(){
        return $this->hasMany(JobListingModel::class);
    }
    public function user(){
        return $this->belongsTo(User::class);
    }
}
