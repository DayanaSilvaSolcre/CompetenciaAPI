<?php

declare(strict_types=1);

namespace CompetenceDomain\Service;

use CompetenceCommon\Service\SharedService;
use CompetenceDomain\Entity\SocialPost;
use Exception;

class SocialPostService extends SharedService
{
    public function fetch($id)
    {
        $networkPost = parent::fetch($id);
        if (! $networkPost instanceof SocialPost) {
            throw new Exception("Posteo no existe");
        }

        return $networkPost;
    }

    public function update($id, $data)
    {
        $netWorkPost = $this->fetch($id);
        $netWorkPost->setImageName($data['imageName']);
        $this->entityManager->flush($netWorkPost);
        return $netWorkPost;
    }
}
