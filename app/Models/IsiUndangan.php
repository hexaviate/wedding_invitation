<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;
use Illuminate\Database\Eloquent\Relations\belongsTo;

class IsiUndangan extends Model
{
    protected $guarded = [];


    /**
     * Get the Undangan associated with the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function undangan(): belongsTo
    {
        return $this->belongsTo(Undangan::class);
    }

    /**
     * Get the cerita that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function cerita(): hasOne
    {
        return $this->hasOne(Cerita::class);
    }

    /**
     * Get the galeri that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function galeri(): hasOne
    {
        return $this->hasOne(Galeri::class);
    }

    /**
     * Get the hadiah that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function hadiah(): hasOne
    {
        return $this->hasOne(Hadiah::class);
    }

    /**
     * Get the mempelaiL that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function mempelaiL(): hasOne
    {
        return $this->hasOne(MempelaiL::class);
    }

    /**
     * Get the MempelaiP that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function MempelaiP(): hasOne
    {
        return $this->hasOne(MempelaiP::class);
    }

    /**
     * Get the waktuDanTempat that owns the IsiUndangan
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasOne
     */
    public function waktuDanTempat(): hasOne
    {
        return $this->hasOne(WaktuDanTempat::class);
    }
}
