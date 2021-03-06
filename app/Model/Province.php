<?php

/*
 * This file is part of the IndoRegion package
 *
 * (c) Azis Hapidin <azishapidin@gmail.com>
 *
 */

namespace App\Model;

use App\Shipment;
use Illuminate\Database\Eloquent\Model;
use App\Model\Regency;

/**
 * Province Model.
 */
class Province extends Model
{
    /**
     * Table name.
     *
     * @var string
     */
    protected $table = 'provinces';

    /**
     * Province has many regencies.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function regencies()
    {
        return $this->hasMany(Regency::class);
    }

    public function shipment()
    {
        return $this->hasMany(Shipment::class);
    }
}
