<?php
namespace Systems\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

use Auth;
use Carbon\Carbon;

class ScheduleScope implements Scope
{

    private $column;

    private $direction;

    private $data;

    public function __construct($all = false)
    {
        $this->all = $all;

    }

    public function apply(Builder $builder, Model $model)
    {

        if (str_contains(request()->route()->uri(),'admin')) {
          // $builder->orderBy($this->column, $this->direction);

//            $builder->get();



        }else{
            $builder->where("created_at", '<', Carbon::now());

        }
    }
}
