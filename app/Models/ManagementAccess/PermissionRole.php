<?php

namespace App\Models\ManagementAccess;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PermissionRole extends Model
{
     //use HasFactory;
   use SoftDeletes;

   public $table = 'permissions_role';

   protected $date = [

       'create_at',
       'update_at',
       'delete_at',
   ];

   protected $fillable = [
       'permission_id',
       'role_id',
       'created_at',
       'updated_at',
       'deleted_at',
   ];

     public function permission() {
    return $this->belongsTo('App\Models\ManagementAcces\Permission', 'permission_id', 'id');
}

    public function role() {

    return $this->belongsTo('App\Models\ManagementAccess\Role', 'role_id', 'id');
}

}
