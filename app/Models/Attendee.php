<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Attendee extends Model
{
    use HasFactory;

    protected $fillable = ['user_id'];

    public function user() : BelongsTo
    {
        return $this->belongsTo(User::class); //one user can have many attendees

    }

    public function event() : BelongsTo
    {
        return $this->belongsTo(Event::class); //one event can have many attendees
    }

}
