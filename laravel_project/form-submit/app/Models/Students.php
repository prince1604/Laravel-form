<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    //
    protected $table = 'Students';

    function testFun(){

        return "this is dummy function";
    }
}
