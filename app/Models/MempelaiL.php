<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class MempelaiL extends Model
{
    protected $guarded = [];

    /**
     * Get the isiUndangan associated with the MempelaiL
     *
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function isiUndangan(): belongsTo
    {
        return $this->belongsTo(IsiUndangan::class);
    }
}
