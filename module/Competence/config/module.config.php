<?php
return [
    'service_manager' => [
        'factories' => [
            \Competence\V1\Rest\Companies\CompaniesResource::class => \Competence\V1\Rest\Companies\CompaniesResourceFactory::class,
            \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsResource::class => \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsResourceFactory::class,
            \Competence\V1\Rest\CompaniesServices\CompaniesServicesResource::class => \Competence\V1\Rest\CompaniesServices\CompaniesServicesResourceFactory::class,
            \Competence\V1\Rest\Customer\CustomerResource::class => \Competence\V1\Rest\Customer\CustomerResourceFactory::class,
            \Competence\V1\Rest\CustomerCategory\CustomerCategoryResource::class => \Competence\V1\Rest\CustomerCategory\CustomerCategoryResourceFactory::class,
            \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationResource::class => \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationResourceFactory::class,
            \Competence\V1\Rest\SocialNetwork\SocialNetworkResource::class => \Competence\V1\Rest\SocialNetwork\SocialNetworkResourceFactory::class,
            \Competence\V1\Rest\SocialPost\SocialPostResource::class => \Competence\V1\Rest\SocialPost\SocialPostResourceFactory::class,
            \Competence\V1\Rest\User\UserResource::class => \Competence\V1\Rest\User\UserResourceFactory::class,
            \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalResource::class => \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalResourceFactory::class,
            \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalResource::class => \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalResourceFactory::class,
        ],
    ],
    'router' => [
        'routes' => [
            'competence.rest.companies' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/companies[/:companies_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\Companies\\Controller',
                    ],
                ],
            ],
            'competence.rest.companies-classifications' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/companies-classifications[/:companies_classifications_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\CompaniesClassifications\\Controller',
                    ],
                ],
            ],
            'competence.rest.companies-services' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/companies-services[/:companies_services_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\CompaniesServices\\Controller',
                    ],
                ],
            ],
            'competence.rest.customer' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customer[/:customer_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\Customer\\Controller',
                    ],
                ],
            ],
            'competence.rest.customer-category' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/customer-category[/:customer_category_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\CustomerCategory\\Controller',
                    ],
                ],
            ],
            'competence.rest.employee-classification' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/employee-classification[/:employee_classification_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\EmployeeClassification\\Controller',
                    ],
                ],
            ],
            'competence.rest.social-network' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/social-network[/:social_network_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\SocialNetwork\\Controller',
                    ],
                ],
            ],
            'competence.rest.social-post' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/social-post[/:social_post_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\SocialPost\\Controller',
                    ],
                ],
            ],
            'competence.rest.user' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/user[/:user_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\User\\Controller',
                    ],
                ],
            ],
            'competence.rest.employee-data-historical' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/employee-data-historical[/:employee_data_historical_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller',
                    ],
                ],
            ],
            'competence.rest.social-network-historical' => [
                'type' => 'Segment',
                'options' => [
                    'route' => '/social-network-historical[/:social_network_historical_id]',
                    'defaults' => [
                        'controller' => 'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller',
                    ],
                ],
            ],
        ],
    ],
    'api-tools-versioning' => [
        'uri' => [
            0 => 'competence.rest.companies',
            1 => 'competence.rest.companies-classifications',
            2 => 'competence.rest.companies-services',
            3 => 'competence.rest.customer',
            4 => 'competence.rest.customer-category',
            5 => 'competence.rest.employee-classification',
            6 => 'competence.rest.social-network',
            7 => 'competence.rest.social-post',
            8 => 'competence.rest.user',
            9 => 'competence.rest.employee-data-historical',
            10 => 'competence.rest.social-network-historical',
        ],
    ],
    'api-tools-rest' => [
        'Competence\\V1\\Rest\\Companies\\Controller' => [
            'listener' => \Competence\V1\Rest\Companies\CompaniesResource::class,
            'route_name' => 'competence.rest.companies',
            'route_identifier_name' => 'companies_id',
            'collection_name' => 'companies',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\Company::class,
            'collection_class' => \Competence\V1\Rest\Companies\CompaniesCollection::class,
            'service_name' => 'Companies',
        ],
        'Competence\\V1\\Rest\\CompaniesClassifications\\Controller' => [
            'listener' => \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsResource::class,
            'route_name' => 'competence.rest.companies-classifications',
            'route_identifier_name' => 'companies_classifications_id',
            'collection_name' => 'companies_classifications',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\CompanyClassification::class,
            'collection_class' => \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsCollection::class,
            'service_name' => 'CompaniesClassifications',
        ],
        'Competence\\V1\\Rest\\CompaniesServices\\Controller' => [
            'listener' => \Competence\V1\Rest\CompaniesServices\CompaniesServicesResource::class,
            'route_name' => 'competence.rest.companies-services',
            'route_identifier_name' => 'companies_services_id',
            'collection_name' => 'companies_services',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\CompanyServices::class,
            'collection_class' => \Competence\V1\Rest\CompaniesServices\CompaniesServicesCollection::class,
            'service_name' => 'CompaniesServices',
        ],
        'Competence\\V1\\Rest\\Customer\\Controller' => [
            'listener' => \Competence\V1\Rest\Customer\CustomerResource::class,
            'route_name' => 'competence.rest.customer',
            'route_identifier_name' => 'customer_id',
            'collection_name' => 'customer',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\Customer::class,
            'collection_class' => \Competence\V1\Rest\Customer\CustomerCollection::class,
            'service_name' => 'Customer',
        ],
        'Competence\\V1\\Rest\\CustomerCategory\\Controller' => [
            'listener' => \Competence\V1\Rest\CustomerCategory\CustomerCategoryResource::class,
            'route_name' => 'competence.rest.customer-category',
            'route_identifier_name' => 'customer_category_id',
            'collection_name' => 'customer_category',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\CustomerCategory::class,
            'collection_class' => \Competence\V1\Rest\CustomerCategory\CustomerCategoryCollection::class,
            'service_name' => 'CustomerCategory',
        ],
        'Competence\\V1\\Rest\\EmployeeClassification\\Controller' => [
            'listener' => \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationResource::class,
            'route_name' => 'competence.rest.employee-classification',
            'route_identifier_name' => 'employee_classification_id',
            'collection_name' => 'employee_classification',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\EmployeeClassification::class,
            'collection_class' => \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationCollection::class,
            'service_name' => 'EmployeeClassification',
        ],
        'Competence\\V1\\Rest\\SocialNetwork\\Controller' => [
            'listener' => \Competence\V1\Rest\SocialNetwork\SocialNetworkResource::class,
            'route_name' => 'competence.rest.social-network',
            'route_identifier_name' => 'social_network_id',
            'collection_name' => 'social_network',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\SocialNetwork::class,
            'collection_class' => \Competence\V1\Rest\SocialNetwork\SocialNetworkCollection::class,
            'service_name' => 'SocialNetwork',
        ],
        'Competence\\V1\\Rest\\SocialPost\\Controller' => [
            'listener' => \Competence\V1\Rest\SocialPost\SocialPostResource::class,
            'route_name' => 'competence.rest.social-post',
            'route_identifier_name' => 'social_post_id',
            'collection_name' => 'social_post',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\SocialPost::class,
            'collection_class' => \Competence\V1\Rest\SocialPost\SocialPostCollection::class,
            'service_name' => 'SocialPost',
        ],
        'Competence\\V1\\Rest\\User\\Controller' => [
            'listener' => \Competence\V1\Rest\User\UserResource::class,
            'route_name' => 'competence.rest.user',
            'route_identifier_name' => 'user_id',
            'collection_name' => 'user',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\User::class,
            'collection_class' => \Competence\V1\Rest\User\UserCollection::class,
            'service_name' => 'User',
        ],
        'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller' => [
            'listener' => \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalResource::class,
            'route_name' => 'competence.rest.employee-data-historical',
            'route_identifier_name' => 'employee_data_historical_id',
            'collection_name' => 'employee_data_historical',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\EmployeeDataHistorical::class,
            'collection_class' => \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalCollection::class,
            'service_name' => 'EmployeeDataHistorical',
        ],
        'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller' => [
            'listener' => \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalResource::class,
            'route_name' => 'competence.rest.social-network-historical',
            'route_identifier_name' => 'social_network_historical_id',
            'collection_name' => 'social_network_historical',
            'entity_http_methods' => [
                0 => 'GET',
                1 => 'PUT',
                2 => 'DELETE',
            ],
            'collection_http_methods' => [
                0 => 'GET',
                1 => 'POST',
            ],
            'collection_query_whitelist' => [],
            'page_size' => 25,
            'page_size_param' => null,
            'entity_class' => \CompetenceDomain\Entity\SocialNetworkHistorical::class,
            'collection_class' => \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalCollection::class,
            'service_name' => 'SocialNetworkHistorical',
        ],
    ],
    'api-tools-content-negotiation' => [
        'controllers' => [
            'Competence\\V1\\Rest\\Companies\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\CompaniesClassifications\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\CompaniesServices\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\Customer\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\CustomerCategory\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\EmployeeClassification\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\SocialNetwork\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\SocialPost\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\User\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller' => 'HalJson',
            'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller' => 'HalJson',
        ],
        'accept_whitelist' => [
            'Competence\\V1\\Rest\\Companies\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CompaniesClassifications\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CompaniesServices\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CustomerCategory\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\EmployeeClassification\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialNetwork\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialPost\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/hal+json',
                2 => 'application/json',
            ],
        ],
        'content_type_whitelist' => [
            'Competence\\V1\\Rest\\Companies\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CompaniesClassifications\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CompaniesServices\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\Customer\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\CustomerCategory\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\EmployeeClassification\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialNetwork\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialPost\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\User\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
            'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller' => [
                0 => 'application/vnd.competence.v1+json',
                1 => 'application/json',
            ],
        ],
    ],
    'api-tools-hal' => [
        'metadata_map' => [
            \Competence\V1\Rest\Companies\CompaniesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies',
                'route_identifier_name' => 'companies_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\Companies\CompaniesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies',
                'route_identifier_name' => 'companies_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\Company::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies',
                'route_identifier_name' => 'companies_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-classifications',
                'route_identifier_name' => 'companies_classifications_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\CompaniesClassifications\CompaniesClassificationsCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-classifications',
                'route_identifier_name' => 'companies_classifications_id',
                'is_collection' => true,
            ],
            'CompetenceDomain\\Entity\\CompaniesClassifications\\CompaniesClassificationsEntity' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-classifications',
                'route_identifier_name' => 'companies_classifications_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            'CompetenceDomain\\Entity\\CompanyClassification\\CompaniesClassification' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-classifications',
                'route_identifier_name' => 'companies_classifications_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \CompetenceDomain\Entity\CompanyClassification::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-classifications',
                'route_identifier_name' => 'companies_classifications_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\CompaniesServices\CompaniesServicesEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-services',
                'route_identifier_name' => 'companies_services_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\CompaniesServices\CompaniesServicesCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-services',
                'route_identifier_name' => 'companies_services_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\CompanyServices::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.companies-services',
                'route_identifier_name' => 'companies_services_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            'Competence\\V1\\Rest\\Customers\\CustomersEntity' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customers',
                'route_identifier_name' => 'customers_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\Customer\CustomerEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\Customer\CustomerCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer',
                'route_identifier_name' => 'customer_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\Customer::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer',
                'route_identifier_name' => 'customer_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\CustomerCategory\CustomerCategoryEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer-category',
                'route_identifier_name' => 'customer_category_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\CustomerCategory\CustomerCategoryCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer-category',
                'route_identifier_name' => 'customer_category_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\CustomerCategory::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.customer-category',
                'route_identifier_name' => 'customer_category_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-classification',
                'route_identifier_name' => 'employee_classification_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\EmployeeClassification\EmployeeClassificationCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-classification',
                'route_identifier_name' => 'employee_classification_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\EmployeeClassification::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-classification',
                'route_identifier_name' => 'employee_classification_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\SocialNetwork\SocialNetworkEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network',
                'route_identifier_name' => 'social_network_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\SocialNetwork\SocialNetworkCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network',
                'route_identifier_name' => 'social_network_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\SocialNetwork::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network',
                'route_identifier_name' => 'social_network_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\SocialPost\SocialPostEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-post',
                'route_identifier_name' => 'social_post_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\SocialPost\SocialPostCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-post',
                'route_identifier_name' => 'social_post_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\SocialPost::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-post',
                'route_identifier_name' => 'social_post_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            'SocialPost\\V1\\Rest\\SocialPost\\SocialPostCollection' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-post',
                'route_identifier_name' => 'social_post_id',
                'is_collection' => true,
            ],
            \Competence\V1\Rest\User\UserEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\User\UserCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.user',
                'route_identifier_name' => 'user_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\User::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.user',
                'route_identifier_name' => 'user_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-data-historical',
                'route_identifier_name' => 'employee_data_historical_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\EmployeeDataHistorical\EmployeeDataHistoricalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-data-historical',
                'route_identifier_name' => 'employee_data_historical_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\EmployeeDataHistorical::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-data-historical',
                'route_identifier_name' => 'employee_data_historical_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
            'Competence\\V1\\Rest\\Companies' => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.employee-data-historical',
                'route_identifier_name' => 'employee_data_historical_id',
                'is_collection' => true,
            ],
            \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalEntity::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network-historical',
                'route_identifier_name' => 'social_network_historical_id',
                'hydrator' => \Laminas\Hydrator\ArraySerializableHydrator::class,
            ],
            \Competence\V1\Rest\SocialNetworkHistorical\SocialNetworkHistoricalCollection::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network-historical',
                'route_identifier_name' => 'social_network_historical_id',
                'is_collection' => true,
            ],
            \CompetenceDomain\Entity\SocialNetworkHistorical::class => [
                'entity_identifier_name' => 'id',
                'route_name' => 'competence.rest.social-network-historical',
                'route_identifier_name' => 'social_network_historical_id',
                'hydrator' => \Solcre\SolcreFramework2\Hydrator\EntityHydrator::class,
            ],
        ],
    ],
    'api-tools-content-validation' => [
        'Competence\\V1\\Rest\\Companies\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\Companies\\Validator',
        ],
        'Competence\\V1\\Rest\\CompaniesClassifications\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\CompaniesClassifications\\Validator',
        ],
        'Competence\\V1\\Rest\\CompaniesServices\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\CompaniesServices\\Validator',
        ],
        'Competence\\V1\\Rest\\Customer\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\Customer\\Validator',
        ],
        'Competence\\V1\\Rest\\CustomerCategory\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\CustomerCategory\\Validator',
        ],
        'Competence\\V1\\Rest\\EmployeeClassification\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\EmployeeClassification\\Validator',
        ],
        'Competence\\V1\\Rest\\SocialNetwork\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\SocialNetwork\\Validator',
        ],
        'Competence\\V1\\Rest\\SocialPost\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\SocialPost\\Validator',
        ],
        'Competence\\V1\\Rest\\User\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\User\\Validator',
        ],
        'Competence\\V1\\Rest\\EmployeeDataHistorical\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\EmployeeDataHistorical\\Validator',
        ],
        'Competence\\V1\\Rest\\SocialNetworkHistorical\\Controller' => [
            'input_filter' => 'Competence\\V1\\Rest\\SocialNetworkHistorical\\Validator',
        ],
    ],
    'input_filter_specs' => [
        'Competence\\V1\\Rest\\Companies\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'foundationDate',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'website',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'companyClassification',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'companyServices',
            ],
            5 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'isCompetence',
            ],
            6 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'customer',
            ],
            7 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'employeeClassification',
            ],
            8 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'mandosClave',
            ],
            9 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'valorHora',
            ],
        ],
        'Competence\\V1\\Rest\\CompaniesClassifications\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'Competence\\V1\\Rest\\CompaniesServices\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'Competence\\V1\\Rest\\Customers\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'description',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'customerCategory',
            ],
        ],
        'Competence\\V1\\Rest\\Customer\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'description',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'customerCategory',
            ],
        ],
        'Competence\\V1\\Rest\\CustomerCategory\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'Competence\\V1\\Rest\\EmployeeClassification\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'Competence\\V1\\Rest\\SocialNetwork\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'name',
            ],
        ],
        'Competence\\V1\\Rest\\SocialPost\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'socialNetworkId',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'imageName',
            ],
        ],
        'Competence\\V1\\Rest\\User\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'user',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'password',
            ],
        ],
        'Competence\\V1\\Rest\\EmployeeDataHistorical\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'company',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'classificationEmployee',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'date',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'quantity',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'hourlyPrice',
            ],
        ],
        'Competence\\V1\\Rest\\SocialNetworkHistorical\\Validator' => [
            0 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'company',
            ],
            1 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'socialNetwork',
            ],
            2 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'date',
            ],
            3 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'lastActivityDate',
            ],
            4 => [
                'required' => true,
                'validators' => [],
                'filters' => [],
                'name' => 'folowersQuantity',
            ],
        ],
    ],
];
