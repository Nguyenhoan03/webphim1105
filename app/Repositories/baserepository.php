<?php
namespace App\Repositories;
use Log;

abstract class baserepository implements baserepositoryInterface
{
    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract protected function getModel();

    public function all()
    {
        return $this->model->all();
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create(array $data)
    {
    
        return $this->model->create($data);
        
    }

    public function update($id, array $data)
    {
        $record = $this->model->find($id);

        if ($record) {
            $record->update($data);
            return $record;
        }

        return null;
    }

    public function delete($id)
    {
        $record = $this->model->find($id);

        if ($record) {
            return $record->delete();
        }

        return false;
    }
}
