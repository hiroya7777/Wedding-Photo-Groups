<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Station extends Model
{
    use softDeletes;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'stations';

    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'station_id';

    protected $fillable = [
        'company_id',
        'line_id',
        'station_name',
    ]
}
