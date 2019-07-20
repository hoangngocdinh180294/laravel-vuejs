<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Support\DataTablePaginate;

class Customer extends Model
{
    use DataTablePaginate;
    protected $fillable = ['name', 'email', 'company', 'phone', 'address'];
    protected $filter = ['id', 'name', 'email', 'company', 'phone', 'address', 'created_at'];
    public static function initialize() {
        return [
            'name' => '', 'company' => '', 'email' => '', 'phone' => '', 'address' => ''
        ];
    }

}
