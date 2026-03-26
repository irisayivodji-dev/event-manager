<?php

namespace App\Models;

//use Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Registration;

#[Fillable(['title', 'description', 'start_time', 'end_time'])]
class Event extends Model
{
    /** @use HasFactory<EventFactory> */
    use HasFactory;

    /**
     * Relation : Un événement peut avoir plusieurs inscriptions
     */
    public function registrations()
    {
        return $this->hasMany(Registration::class);
    }
}