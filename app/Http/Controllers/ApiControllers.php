<?php


namespace App\Http\Controllers;
use Throwable;

abstract class ApiControllers  extends Controller
{
    protected $request;
    protected $model;

    public function get(){
       $limit=(int)$this->request->get('limit',20);
       $offset=(int) $this->request->get('offset',0);
       $result= $this->model->limit($limit)->offset($offset)->get();
       return $this->sendResponse($result,'OK',200);

    }

    public function detail(int $entityId){


            $entity=$this->model->find($entityId);
            if(is_null($entity)) {
                return $this->sendError('Not Found', 404);
            }
        return  $this->sendResponse($entity,'OK',200);
    }



    public function update(int $entityId) {  //Доделать обновление.Перепесать существующую запись в БД

        try{
            $this->model->find($entityId);
            $data = $this->request->validated();
            $this->model->fill($data)->push();
        }
        catch (Throwable $error){
            return $this->sendError('Not Found', 404);
        }

        return $this->sendResponse(null, 'Updated',200); //Код 204 -сервер успешно обработал запрос, но не возвращает никакого содержимого
    }


    public function delete(int $entityId) {

        try{
            $entity=$this->model->find($entityId);
            $entity->delete();
        }
        catch (Throwable $error){
            return $this->sendError('Not Found', 404);
        }

        return $this->sendResponse(null, 'Deleted',200);     //Код 204 -сервер успешно обработал запрос, но не возвращает никакого содержимого

    }

    public function create() {

        $data = $this->request->validated();
        $this->model->fill($data)->push();


        return $this->sendResponse(null, 'Created', 201);

    }

}
