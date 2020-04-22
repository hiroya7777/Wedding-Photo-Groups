<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Line extends Model
{
    use softDeletes;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'lines';

    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'line_id';

    protected $fillable = [
        'company_id',
        'line_name',
    ]
}
