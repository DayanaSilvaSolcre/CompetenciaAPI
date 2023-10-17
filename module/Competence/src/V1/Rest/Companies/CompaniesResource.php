<?php

declare(strict_types=1);

namespace Competence\V1\Rest\Companies;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\Stdlib\Parameters;
use Solcre\SolcreFramework2\Adapter\PaginatedAdapter;
use Solcre\SolcreFramework2\Common\BaseResource;

class CompaniesResource extends BaseResource
{
    /**
     * Create a resource
     *
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function create($data)
    {
        return $this->service->add($data);
    }

    /**
     * Delete a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function delete($id)
    {
        return $this->service->delete($id);
    }

    /**
     * Fetch a resource
     *
     * @param  mixed $id
     * @return ApiProblem|mixed
     */
    public function fetch($id)
    {
        return $this->service->fetch($id);
    }

    /**
     * Fetch all or a subset of resources
     *
     * @param  array|Parameters $params
     * @return ApiProblem|mixed
     */
    public function fetchAll($params = [])
    {
        $companies = $this->service->fetchAllPaginated($params, $params['sort'] ?? []);

        return new CompaniesCollection(new PaginatedAdapter($companies));
    }

    /**
     * Update a resource
     *
     * @param  mixed $id
     * @param  mixed $data
     * @return ApiProblem|mixed
     */
    public function update($id, $data)
    {
        return new ApiProblem(405, 'The PUT method has not been defined for individual resources');
    }
}
