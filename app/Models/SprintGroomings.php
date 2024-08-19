<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SprintGroomings extends Model
{
    use HasFactory;

    protected $table = 'sprint_groomings';
    protected $fillable = ['title', 'description', 'meeting_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
