<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Collection extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $table = 'collections';
    protected $primaryKey = "id";
    public $incrementing = true;
    public $timestamps = false;

    public function workspace()
    {
        return $this->belongsTo(Workspace::class);
    }
    public function methods()
    {
        return $this->hasMany(Method::class);
    }
}
