<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job {
    public static function all() : array {
        //
    }

    public static function find($id): array {
        $job = Arr::first(static::all(), fn($job) => $job['id'] == $id);
        
        if (! $job) {
            abort(404);
        }

        return $job;
    }
}