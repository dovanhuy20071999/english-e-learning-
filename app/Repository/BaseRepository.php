<?php

namespace App\Repository;

use App\Repository\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\Log;

abstract class BaseRepository implements RepositoryInterface
{
    protected $model;
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        return $this->model::latest()->get();
    }

    public function getWith($coloum)
    {
        return $this->model::with($coloum)->get();
    }

    public function find($id)
    {
        $result = $this->model->find($id);

        return $result;
    }

    public function findBeLongMany($arrayCh, $coloum, $nameTable, $idTable)
    {
        $arraySubject = [];
        foreach ($arrayCh->$nameTable as $i => $course_subject) {
            $subject = $course_subject->pivot->where($coloum, $arrayCh->id)->get();
            $listSubject = $this->findOrFail($subject[$i]->$idTable);
            array_push($arraySubject, $listSubject);
        }

        return $arraySubject;
    }

    public function findOrFail($id)
    {
        try {
            $find = $this->model::oldest()->findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            Log::debug("Id not found");

            return false;
        }

        return $find;
    }

    public function findWhere($colum, $para)
    {
        try {
            $find = $this->model::oldest()->where($colum, $para)->get();
        } catch (ModelNotFoundException $exception) {
            Log::debug("Id not found");

            return false;
        }

        return $find;
    }

    public function listPaginate($num)
    {
        return $this->model::latest()->paginate($num);
    }

    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    public function update($id, $attributes = [])
    {
        $result = $this->findOrFail($id);
        if ($result) {
            $result->update($attributes);

            return $result;
        }

        return false;
    }

    public function delete($id)
    {
        $result = $this->find($id);
        if ($result) {
            $result->delete();

            return true;
        }

        return false;
    }

    public function orderBy($colum, $orderBy)
    {
        return $this->model->orderBy($colum, $orderBy)->get();
    }
}
