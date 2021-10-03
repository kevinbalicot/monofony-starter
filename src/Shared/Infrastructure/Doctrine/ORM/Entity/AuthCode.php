<?php

namespace App\Shared\Infrastructure\Doctrine\ORM\Entity;

use App\Shared\Infrastructure\Doctrine\ORM\Entity\User\AppUser;
use Doctrine\ORM\Mapping as ORM;
use FOS\OAuthServerBundle\Entity\AuthCode as BaseAuthCode;

#[ORM\Entity]
#[ORM\Table(name: 'oauth_auth_code')]
class AuthCode extends BaseAuthCode
{
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    protected $id;

    #[ORM\ManyToOne(targetEntity: Client::class)]
    #[ORM\JoinColumn(nullable: false)]
    protected $client;

    #[ORM\ManyToOne(targetEntity: AppUser::class)]
    protected $user;
}
