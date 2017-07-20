<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * QuizWord
 *
 * @ORM\Table(name="quiz_word")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\QuizWordRepository")
 */
class QuizWord
{
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
     * @ORM\ManyToOne(targetEntity="Word", inversedBy="quiz")
     * @ORM\JoinColumn(name="word_id", referencedColumnName="id")
     */
    private $word;

    /**
     * @var string
     *
     * @ORM\ManyToOne(targetEntity="Quiz", inversedBy="word")
     * @ORM\JoinColumn(name="quiz_id", referencedColumnName="id")
     */
    private $quiz;

    /**
     * @var string
     *
     * @ORM\Column(name="result", type="boolean")
     */
    private $result;


    /**
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $word
     * @return QuizWord
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * @return string 
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * @param string $quiz
     * @return QuizWord
     */
    public function setQuiz($quiz)
    {
        $this->quiz = $quiz;

        return $this;
    }

    /**
     * @return string 
     */
    public function getQuiz()
    {
        return $this->quiz;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->word = new \Doctrine\Common\Collections\ArrayCollection();
        $this->quiz = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * @param boolean $result
     * @return QuizWord
     */
    public function setResult($result)
    {
        $this->result = $result;

        return $this;
    }

    /**
     * @return boolean 
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param \AppBundle\Entity\Word $word
     * @return QuizWord
     */
    public function addWord(\AppBundle\Entity\Word $word)
    {
        $this->word[] = $word;

        return $this;
    }

    /**
     * @param \AppBundle\Entity\Word $word
     */
    public function removeWord(\AppBundle\Entity\Word $word)
    {
        $this->word->removeElement($word);
    }

    /**
     * @param \AppBundle\Entity\Quiz $quiz
     * @return QuizWord
     */
    public function addQuiz(\AppBundle\Entity\Quiz $quiz)
    {
        $this->quiz[] = $quiz;

        return $this;
    }

    /**
     * @param \AppBundle\Entity\Quiz $quiz
     */
    public function removeQuiz(\AppBundle\Entity\Quiz $quiz)
    {
        $this->quiz->removeElement($quiz);
    }
}
