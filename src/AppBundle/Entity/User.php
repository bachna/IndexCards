<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fos_user")
 */
class User extends BaseUser
{
    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Quiz", mappedBy="user")
     */
    private $quizes;

    /**
     * @var
     *
     * @ORM\OneToMany(targetEntity="Collection", mappedBy="user")
     */
    private $collections;

    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @param \AppBundle\Entity\Collection $collections
     * @return User
     */
    public function addCollection(\AppBundle\Entity\Collection $collections)
    {
        $this->collections[] = $collections;

        return $this;
    }

    /**
     * @param \AppBundle\Entity\Collection $collections
     */
    public function removeCollection(\AppBundle\Entity\Collection $collections)
    {
        $this->collections->removeElement($collections);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCollections()
    {
        return $this->collections;
    }

    /**
     * @param \AppBundle\Entity\Quiz $quizes
     * @return User
     */
    public function addQuize(\AppBundle\Entity\Quiz $quizes)
    {
        $this->quizes[] = $quizes;

        return $this;
    }

    /**
     * @param \AppBundle\Entity\Quiz $quizes
     */
    public function removeQuize(\AppBundle\Entity\Quiz $quizes)
    {
        $this->quizes->removeElement($quizes);
    }

    /**
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getQuizes()
    {
        return $this->quizes;
    }
}
