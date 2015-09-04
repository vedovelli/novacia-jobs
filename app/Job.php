<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

// Estando no singular ele já acha a tabela e a conexão
class Job extends Model
{
    use SoftDeletes;

    protected $fillable = ['jobs_nome', 'jobs_responsavel', 'jobs_cliente'];

    protected $dates = ['deleted_at'];
}
