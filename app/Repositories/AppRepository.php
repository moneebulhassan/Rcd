<?php

namespace App\Repositories;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AppRepository implements RepositoryInterface
{
    private $model, $filter_columns, $desc_order_by;

    public function __construct(Model $model, array $filter_columns = [], string $desc_order_by = 'id')
    {
        $this->model = $model;
        $this->filter_columns = $filter_columns;
        $this->desc_order_by = $desc_order_by !== 'id' ? $desc_order_by : config('data.query.order_by');
    }

    public function all()
    {
        return $this->query()->all();//this works
    }

    public function paginate()
    {
        $paginate = request()->query('paginate');

        $config_paginate = config('data.query.paginate');

        return $this->query()->paginate(
            is_numeric($paginate) && $paginate > 0 && $paginate <= $config_paginate * 4
                ?
                $paginate
                :
                $config_paginate
        );
    }

    private function query()
    {
        $order_by_column =
            in_array(
                request()->query('order_by_column'), array_merge($this->model->getFillable(), ['created_at', 'updated_at']), true
            )
                ?
                request()->query('order_by_column')
                :
                $this->desc_order_by;

        $order_by_order =
            in_array(
                request()->query('order_by'), ['desc', 'asc'], true
            )
                ?
                request()->query('order_by')
                :
                config('data.query.order');

        $query = $this->model->orderBy($order_by_column, $order_by_order);

        // get query string
        $q = request()->query('q');

        /**
         * if query string is provided
         * and
         * filter columns are provided
         */
        if ($q && count($this->filter_columns))
        {
            $query->where(
                array_shift($this->filter_columns),
                'LIKE',
                "%{$q}%"
            );
            foreach ($this->filter_columns as $column)
                $query->orWhere(
                    $column,
                    'LIKE',
                    "%{$q}%"
                );
        }

        return $query;
    }

    public function store($data)
    {
        return $this->model->create($data);
    }

    public function update($data, $id)
    {
        return DB::transaction(function () use ($id, $data) { // Start the transaction

            $model_data = $this->getById($id);

            $model_data->update($data);

            return $model_data;
        }); // End transaction
    }

    public function delete($id)
    {
        return DB::transaction(function () use ($id) { // Start the transaction

            return $this->getById($id)->delete();

        }); // End transaction
    }

    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findBy($column, $value)
    {
        return $this->model->where($column, $value)->firstOrFail();
    }

    // Get the associated model
    public function getModel(): Model
    {
        return $this->model;
    }

    // Eager load database relationships
    public  function with($relations): \Illuminate\Database\Eloquent\Builder
    {
        return $this->model = $this->model->with($relations);
    }
}
