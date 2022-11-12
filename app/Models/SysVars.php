<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class SysVars extends Model
{
    protected $table = "sys_vars";
    protected $primaryKey = 'col';
    protected $fillable = [
        'col', 'val'
    ];

    public static function getCol($col)
    {
        $text = "SELECT  col, val FROM sys_vars
            WHERE col = '$col'";
        $return = DB::select($text);
        $return = (count($return)>=1) ? collect($return[0]) : collect($return);
        $return = json_decode(json_encode($return), true);
        return $return;
    }
}
