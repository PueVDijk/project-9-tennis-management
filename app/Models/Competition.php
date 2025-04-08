<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description', 'start_date', 'end_date', 'min_skill_level', 'max_skill_level', 'status'];

    public function teams()
    {
        return $this->hasMany(CompetitionTeam::class);
    }

    public function matches()
    {
        return $this->hasMany(CompetitionMatch::class);
    }
}
