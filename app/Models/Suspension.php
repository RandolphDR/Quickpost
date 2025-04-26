<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Suspension extends Model {

    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'suspended_by',
        'reason',
        'suspended_at',
        'unsuspended_at',
        'duration_days',
        'is_active',
        'suspension_history'
    ];

    protected function casts() {

        return [
            'suspended_by' => 'datetime',
            'unsuspended_at' => 'datetime',
            'duration_days' => 'integer',
            'is_active' => 'boolean',
            'suspension_history' => 'json',
        ];
    }

}
