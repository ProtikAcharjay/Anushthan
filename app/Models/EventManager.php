<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EventManager extends Model
{
    use HasFactory;
    protected $fillable = ['event_id', 'manager_id', 'deleted_at'];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function manager()
    {
        return $this->belongsTo(User::class, 'manager_id');
    }
}
