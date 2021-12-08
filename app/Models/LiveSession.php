<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiveSession extends Model
{
    use HasFactory;

    protected $table = 'live_sessions';
    protected $primaryKey = 'id';
    protected $fillable = [
        'live_session_url',
        'recording_url',
        'participant_name',
        'participant_email'
    ];
}
