<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;


class Cerita extends Model
{
    protected $guarded = [];

    /**
     * Get the isiUndangan associated with the Cerita
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function isiUndangan(): belongsTo
    {
        return $this->belongsTo(IsiUndangan::class);
    }
}
