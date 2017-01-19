<?php

namespace App\Repositories;

use DB;
use Exception;
use App\Repositories\BaseRepositoryInterface;

abstract class BaseRepository implements BaseRepositoryInterface
{
    protected $model;

    public function index($subject = null, $options = [])
    {
        $data = $this->model->orderBy('id', 'DESC')->paginate(config('common.page.limit'));

        if (empty($data)) {
            return $data['error'] = trans('message.item_not_exits');
        }

        $data['subject'] = $subject;
        $data['columns'] = isset($options['columns']) ? $options['columns'] : $this->model->getFillable();
        array_unshift($data['columns'], 'id');

        if (count($rows)) {
            $data['ids'] = [];

            foreach ($rows as $key => $row) {
                $data['ids'][$key] = $row['id'];
                $rows[$key] = $row->where('id', $row['id'])->first($data['columns']);
            }

            $data['from'] = ($rows->currentPage() - 1) * config('common.limit.page_limit') + 1;
            $data['to'] = $data['from'] + $rows->count() - 1;
        }

        $data['total'] = $rows->total();
        $data['rows'] = $rows;

        return $data;
    }

    public function find($id)
    {
        $data = $this->model->find($id);

        if (empty($data)) {
            $data['error'] = trans('message.item_not_exits');
        }

        return $data;
    }

    public function lists($filter = [], $columns = [])
    {
        $data = $this->model->where($filter)->select($columns)->get();

        if (! count($data)) {
            $data['error'] = trans('message.item_not_exits');
        }

        return $data;
    }

    public function store($input)
    {
        try {
            $data = $this->model->create($input);

            return $data;
        } catch (Exception $ex) {
            return $data['error'] = trans('message.creating_error');
        }
    }


    public function update($input, $id)
    {
        $data = $this->model->where('id', $id)->update($input);

        if (!$data) {
            return ['error' => trans('message.updating_error')];
        }

        return $id;
    }

    public function delete($ids)
    {
        try {
            DB::beginTransaction();
            $data = $this->model->destroy($ids);

            if (!$data) {
                return ['error' => trans('message.deleting_error')];
            }

            DB::commit();
            return $data;
        } catch (Exception $ex) {
            DB::rollBack();
            return ['error' => $ex->getMessage()];
        }
    }
}
