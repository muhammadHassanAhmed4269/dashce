<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Content extends Model
{
    use HasFactory, LogsActivity;

    protected $fillable = ['name', 'value'];
}
