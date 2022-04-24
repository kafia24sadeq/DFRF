<?php
namespace Systems\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;

use Auth;

class CategoryScope implements Scope
{

    private $column;

    private $direction;

    private $data;

    public function __construct($column, $direction = 'desc', $data = array())
    {
        $this->column = $column;
        $this->direction = $direction;
        $this->data = $data;
    }

    public function apply(Builder $builder, Model $model)
    {

        $builder->orderBy($this->column, $this->direction);


    }
}
