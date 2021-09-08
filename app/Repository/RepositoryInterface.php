<?php

namespace App\Repository;

interface RepositoryInterface
{
    /**
     * Get all
     * @return mixed
     */
    public function getAll();

    /**
     * Get one
     * @param $id
     * @return mixed
     */
    public function find($id);

    public function findOrFail($id);

    public function getWith($coloum);

    public function findBeLongMany($arrayCh, $coloum, $nameTable, $idTable);

    public function listPaginate($num);

    public function findWhere($colum, $para);


    /**
     * Create
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = []);

    /**
     * Update
     * @param $id
     * @param array $attributes
     * @return mixed
     */
    public function update($id, $attributes = []);

    /**
     * Delete
     * @param $id
     * @return mixed
     */
    public function delete($id);

    public function orderBy($colum, $orderBy);
}