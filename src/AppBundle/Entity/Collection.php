<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Collection
 *
 * @ORM\Table(name="collection")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\CollectionRepository")
 */
class Collection
{
    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="collections")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Word", mappedBy="collection")
     */
    private $words;

    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=100)
     *
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 5,
     *     max = 100
     *     )
     */
    private $name;

    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     * @return Collection
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $user
     * @return Collection
     */
    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * @return string 
     */
    public function getUser()
    {
        return $this->user;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->words = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param \AppBundle\Entity\Word $words
     * @return Collection
     */
    public function addWord(\AppBundle\Entity\Word $words)
    {
        $this->words[] = $words;

        return $this;
    }

    /**
     * @param \AppBundle\Entity\Word $words
     */
    public function removeWord(\AppBundle\Entity\Word $words)
    {
        $this->words->removeElement($words);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getWords()
    {
        return $this->words;
    }
}
