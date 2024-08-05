<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;

    protected $fillable = [
        'email', 'username', 'password', 'name', 
        'specialization_id', 'gender_id', 'joining_date', 'address'
    ];

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function sections()
    {
        return $this->belongsToMany(Section::class);
    }
}