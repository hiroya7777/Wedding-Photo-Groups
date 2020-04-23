<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use softDeletes;

    /**
     * モデルと関連しているテーブル
     *
     * @var string
     */
    protected $table = 'companies';

    /**
     * テーブルの主キー
     *
     * @var string
     */
    protected $primaryKey = 'company_id';

    protected $fillable = [
        'company_name',
    ]
}
