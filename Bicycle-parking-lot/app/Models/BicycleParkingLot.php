<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class BicycleParkingLot extends Model
{
    use softDeletes;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'bicycle_parking_lots';

    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'bicycle_parking_lot_id';

    protected $fillable = [
        'station_id',
        'company_id',
        'line_id',
        'bicycle_parking _lot_name',
        'price',
        'street_adress',
        'utilization_time',
        'reception_time',
        'on_foot',
        'image_name',
        'image_url',
    ]
}
