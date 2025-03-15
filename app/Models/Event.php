<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $guarded = ['id', 'created_at', 'updated_at'];
    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }

    public function additionalManagers()
    {
        return $this->belongsToMany(User::class, 'event_managers', 'event_id', 'manager_id');
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
