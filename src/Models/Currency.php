<?php

namespace Utyemma\SaasPro\Models;

use Utyemma\SaasPro\Concerns\Models\HasStatus;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Currency extends Model {
    use SoftDeletes, HasStatus;

    protected $fillable = ['name', 'code', 'rate', 'is_default', 'symbol'];

    protected $casts = [
        'is_default' => 'boolean'
    ];

    protected $attributes = [
        'is_default' => true
    ];



}
