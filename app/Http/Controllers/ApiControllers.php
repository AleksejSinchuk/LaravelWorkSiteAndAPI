<?php


namespace App\Http\Controllers;


use http\Env\Request;

abstract class ApiControllers
{
    protected $request;
    protected $model;

    public function get(Request $req){
        $limit=(int) $req->get('limit',20);
        $offset=(int) $req->get('offset',0);
        $result= $this->model->limit($limit)->offset($offset)->get();
        $this->sendResponse($result,'OK',200);
    }

    public function detail(int $entityId){
        $entity=$this->model->find($entityId)->first();
        if(!$entity)
            return $this->sendError('Not Found',404);
        return  $this->sendResponse($entity,'OK',200);
    }

    public function update(int $entityId, Request $request) {

        $entity = $this->model->find($entityId)->first();

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Updated',204);
    }


    public function delete(int $entityId) {

        $entity = $this->model->find($entityId);

        if (!$entity) {
            return $this->sendError('Not Found', 404);
        }

        $entity->delete();

        return $this->sendResponse(null, 'Deleted',204);

    }

    public function create(Request $request) {

        $data = $request->validated();

        $this->model->fill($data)->push();

        return $this->sendResponse(null, 'Created', 201);

    }

}
