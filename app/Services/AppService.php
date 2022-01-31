<?php
namespace App\Services;

use App\Repositories\AppRepository;

class AppService implements ServiceInterface
{
    /**
     * @var AppRepository
     */
    protected $repository;

    /**
     * @var JsonResource
     */
    protected $jsonResource;

    /**
     * @var array
     */
    private $relations;


    /**
     * FormService constructor.
     * @param AppRepository $repository
     * @param string $jsonResource
     * @param array $relations
     */
    public function __construct(AppRepository $repository, $jsonResource = JsonResource::class, array $relations = [])
    {
        $this->repository = $repository;
        $this->jsonResource = $jsonResource;
        $this->relations = $relations;
    }

    public function getRepository(): AppRepository
    {
        return $this->repository;
    }

    public function all(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $this->with(__FUNCTION__);

        return $this->jsonResource::collection($this->repository->all());
    }

    public function paginate(): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $this->with(__FUNCTION__);

        return $this->jsonResource::collection($this->repository->paginate());
    }

    public function store(array $data)
    {
        return new $this->jsonResource($this->repository->store($data));
    }

    public function update(array $data, $id)
    {
        return new $this->jsonResource($this->repository->update($data, $id));
    }

    public function delete($id)
    {
        return $this->repository->delete($id);
    }

    public function show($id)
    {
        $this->with(__FUNCTION__);

        return new $this->jsonResource($this->repository->getById($id));
    }

    public function showBy($column, $value)
    {
        $this->with(__FUNCTION__);

        return new $this->jsonResource($this->repository->findBy($column, $value));
    }

    private function with($function)
    {
        return
            array_key_exists($function, $this->relations)
                ?
                $this->repository->with($this->relations[$function])
                :
                false;
    }
}
