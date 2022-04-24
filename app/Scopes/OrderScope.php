<?php
namespace Systems\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

use Auth;

class OrderScope implements Scope
{

    private $column;

    private $direction;

    private $data;

    public function __construct($column, $direction = 'asc', $data = array())
    {
        $this->column = $column;
        $this->direction = $direction;
        $this->data = $data;
    }

    public function apply(Builder $builder, Model $model)
    {

        if (str_contains(request()->route()->uri(),'admin')) {
          // $builder->orderBy($this->column, $this->direction);

          $builder->where('status', '!=', 2)->orderBy($this->column, $this->direction);

        }else{
          $builder->where('status', 0 )->orderBy($this->column, $this->direction);

        }
    }
}
