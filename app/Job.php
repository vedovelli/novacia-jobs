<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\User;

// Estando no singular ele já acha a tabela e a conexão
class Job extends Model
{
    use SoftDeletes;

    protected $fillable = ['user_id', 'jobs_nome', 'jobs_cliente'];

    protected $dates = ['deleted_at'];

    public function responsavel() // user_id
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
