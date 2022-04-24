<?php

namespace Systems;

use Illuminate\Database\Eloquent\Model;
use Zizaco\Entrust\EntrustPermission;


class Permission extends EntrustPermission
{
  protected $fillable = ['name', 'display_name', 'description'];

}
