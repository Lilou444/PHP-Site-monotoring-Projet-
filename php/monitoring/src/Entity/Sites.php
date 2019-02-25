<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SitesRepository")
 */
class Sites
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $Liens;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLiens(): ?string
    {
        return $this->Liens;
    }

    public function setLiens(string $Liens): self
    {
        $this->Liens = $Liens;

        return $this;
    }
}
