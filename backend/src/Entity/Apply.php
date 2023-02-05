<?php

namespace App\Entity;

use App\Repository\ApplyRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ApplyRepository::class)]
class Apply
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $business_name = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_mail = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_phone = null;

    #[ORM\Column(length: 255)]
    private ?string $contact_linkedin = null;

    #[ORM\Column(length: 255)]
    private ?string $category = null;

    #[ORM\ManyToOne(inversedBy: 'applies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Post $post = null;

    #[ORM\ManyToOne(inversedBy: 'applies')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Source $source = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBusinessName(): ?string
    {
        return $this->business_name;
    }

    public function setBusinessName(string $business_name): self
    {
        $this->business_name = $business_name;

        return $this;
    }

    public function getContactMail(): ?string
    {
        return $this->contact_mail;
    }

    public function setContactMail(string $contact_mail): self
    {
        $this->contact_mail = $contact_mail;

        return $this;
    }

    public function getContactPhone(): ?string
    {
        return $this->contact_phone;
    }

    public function setContactPhone(string $contact_phone): self
    {
        $this->contact_phone = $contact_phone;

        return $this;
    }

    public function getContactLinkedin(): ?string
    {
        return $this->contact_linkedin;
    }

    public function setContactLinkedin(string $contact_linkedin): self
    {
        $this->contact_linkedin = $contact_linkedin;

        return $this;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getPost(): ?Post
    {
        return $this->post;
    }

    public function setPost(?Post $post): self
    {
        $this->post = $post;

        return $this;
    }

    public function getSource(): ?Source
    {
        return $this->source;
    }

    public function setSource(?Source $source): self
    {
        $this->source = $source;

        return $this;
    }
}
