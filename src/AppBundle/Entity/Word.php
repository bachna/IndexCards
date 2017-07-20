<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * Word
 *
 * @ORM\Table(name="word")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\WordRepository")
 */
class Word
{
    /**
     * @var
     *
     * @ORM\ManyToOne(targetEntity="Collection", inversedBy="words")
     * @ORM\JoinColumn(name="collection_id", referencedColumnName="id")
     */
    private $collection;

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
     * @ORM\Column(name="original", type="string", length=255)
     *
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 5,
     *     max = 255
     *     )
     */
    private $original;

    /**
     * @var string
     *
     * @ORM\Column(name="foreign", type="string", length=255)
     *
     * @Assert\NotBlank
     * @Assert\Length(
     *     min = 5,
     *     max = 255
     *     )
     */
    private $foreign;

    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $original
     * @return Word
     */
    public function setOriginal($original)
    {
        $this->original = $original;

        return $this;
    }

    /**
     * @return string 
     */
    public function getOriginal()
    {
        return $this->original;
    }

    /**
     * @param string $foreign
     * @return Word
     */
    public function setForeign($foreign)
    {
        $this->foreign = $foreign;

        return $this;
    }

    /**
     * @return string 
     */
    public function getForeign()
    {
        return $this->foreign;
    }

    /**
     * @param \AppBundle\Entity\Collection $collection
     * @return Word
     */
    public function setCollection(\AppBundle\Entity\Collection $collection = null)
    {
        $this->collection = $collection;

        return $this;
    }

    /**
     * @return \AppBundle\Entity\Collection 
     */
    public function getCollection()
    {
        return $this->collection;
    }
}
