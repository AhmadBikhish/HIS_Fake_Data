<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoredProcedure extends Model
{
    use HasFactory;

    protected $table = 'sp_allbydocno';

    protected $guard = ['id'];
}
