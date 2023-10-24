<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\Company;
use CompetenceDomain\Entity\SocialNetwork;
use CompetenceDomain\Entity\SocialNetworkHistorical;
use DateTime;
use Exception;

class SocialNetworkHistoricalService extends SharedService
{

    private Company$company;
    private SocialNetwork $socialNetwork;

    private function getNormalizedData(array $data): array
    {
        return [
            'company'          => $data['company'],
            'socialNetwork'    => $data['socialNetwork'],
            'date'             => ! empty($data['date']) ? new DateTime($data['date']) : null,
            'lastActivityDate' => ! empty($data['lastActivityDate']) ? new DateTime($data['lastActivityDate']) : null,
            'folowersQuantity' => $data['folowersQuantity'],
        ];
    }

    public function update($id, $data){
        $socialNetworkHistorical = $this->fetch($id);
        if(!$socialNetworkHistorical instanceof SocialNetworkHistorical){

            throw new Exception('SocialWorkHistorical no existe');
        }
        $socialNetworkHistorical =$this->prepareEntity($this->getNormalizedData($data), $socialNetworkHistorical);
        $this->entityManager->flush($socialNetworkHistorical);
        return $socialNetworkHistorical;
    }

    public function getCompany(): Company
    {
        return $this->company;
    }

    public function setCompany(Company $company): void
    {
        $this->company = $company;
    }

    public function getSocialNetwork(): SocialNetwork
    {
        return $this->socialNetwork;
    }

    public function setSocialNetwork(SocialNetwork $socialNetwork): void
    {
        $this->socialNetwork = $socialNetwork;
    }

}
