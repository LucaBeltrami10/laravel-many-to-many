<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'project_name',
        'type_id',
        'description',
        'technologies',
        'framework_used',
        'status',
        'repository_url',
    ];

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}