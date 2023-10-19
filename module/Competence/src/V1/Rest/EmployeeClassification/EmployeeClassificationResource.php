<?php

declare(strict_types=1);

namespace Competence\V1\Rest\EmployeeClassification;

use Laminas\ApiTools\ApiProblem\ApiProblem;
use Laminas\Stdlib\Parameters;
use OAuth2\GrantType\RefreshToken;
use Solcre\SolcreFramework2\Adapter\PaginatedAdapter;
use Solcre\SolcreFramework2\Common\BaseResource;

class EmployeeClassificationResource extends BaseResource
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
        $employeeClassification = $this->service->fetchAllPaginated($params, $params['sort'] ?? []);

        return new EmployeeClassificationCollection(new PaginatedAdapter($employeeClassification));
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
        return $this->service->update($id, $data);    }
}
