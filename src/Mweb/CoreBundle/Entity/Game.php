<?php

namespace Mweb\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Mweb\AdminBundle\Entity\AbstractEntity;

/**
 * News
 *
 * @ORM\Table(name="game")
 * @ORM\Entity(repositoryClass="Mweb\AdminBundle\Entity\Translation\TranslatableRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Game extends AbstractEntity
{
        
        /**
         * @var integer
         *
         * @ORM\Column(name="id", type="integer")
         * @ORM\Id
         * @ORM\GeneratedValue(strategy="IDENTITY")
         */
        private $id;
        /**
         * @var string
         *
         * @ORM\Column(name="title", type="string", length=250, nullable=false)
         * @Assert\NotBlank()
         */
        private $title;
        
        /**
         * @ORM\Column(name="end_date", type="datetime", nullable=true)
         */
        private $endDate;
        
        
        /**
         * @var File
         *
         * @Vich\UploadableField(mapping="artist_image", fileNameProperty="imageName")
         */
        private $imageFile;
        /**
         * @var string
         *
         * @ORM\Column(name="image_name", type="string", length=250, nullable=true)
         */
        private $imageName;
        
        /**
         * @var string
         *
         * @ORM\Column(name="image_caption", type="string", length=250, nullable=true)
         * @Gedmo\Translatable
         */
        private $imageCaption;
        
        /**
         * @var string
         *
         * @ORM\Column(name="code", type="string", length=250)
         */
        private $code;
        /**
         * @var integer
         * @ORM\Column(name="game_status", type="smallint", options={"default" = 0})
         */
        private $gameStatus = 0;
        
        /**
         * @var string
         *
         * @ORM\OneToOne(targetEntity="Gamer")
         */
        private $winner;
        
        /**
         * @var string
         *
         * @ORM\Column(name="step_1", type="text", length=65535, nullable=true)
         */
        private $firstStep;
        
        /**
         * @var string
         *
         * @ORM\Column(name="step_2", type="text", length=65535, nullable=true)
         */
        private $secondStep;
        
        /**
         * @var string
         *
         * @ORM\Column(name="step_3", type="text", length=65535, nullable=true)
         */
        private $thirdStep;
        
        /**
         * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
         * of 'UploadedFile' is injected into this setter to trigger the  update. If this
         * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
         * must be able to accept an instance of 'File' as the bundle will inject one here
         * during Doctrine hydration.
         *
         * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
         *
         * @return News
         */
        public function setImageFile(File $image = null)
        {
                $this->imageFile = $image;
                
                if ($image) {
                        // It is required that at least one field changes if you are using doctrine
                        // otherwise the event listeners won't be called and the file is lost
                        $this->setUpdated(new \DateTimeImmutable());
                }
                
                return $this;
        }
        
        /**
         * @return File|null
         */
        public function getImageFile()
        {
                return $this->imageFile;
        }
        
        
        /**
         * Get id
         *
         * @return integer
         */
        public function getId()
        {
                return $this->id;
        }
        
        /**
         * Set title
         *
         * @param string $title
         *
         * @return Game
         */
        public function setTitle($title)
        {
                $this->title = $title;
                
                return $this;
        }
        
        /**
         * Get title
         *
         * @return string
         */
        public function getTitle()
        {
                return $this->title;
        }
        
        /**
         * Set endDate
         *
         * @param \DateTime $endDate
         *
         * @return Game
         */
        public function setEndDate($endDate)
        {
                $this->endDate = $endDate;
                
                return $this;
        }
        
        /**
         * Get endDate
         *
         * @return \DateTime
         */
        public function getEndDate()
        {
                return $this->endDate;
        }
        
        /**
         * Set imageName
         *
         * @param string $imageName
         *
         * @return Game
         */
        public function setImageName($imageName)
        {
                $this->imageName = $imageName;
                
                return $this;
        }
        
        /**
         * Get imageName
         *
         * @return string
         */
        public function getImageName()
        {
                return $this->imageName;
        }
        
        /**
         * Set imageCaption
         *
         * @param string $imageCaption
         *
         * @return Game
         */
        public function setImageCaption($imageCaption)
        {
                $this->imageCaption = $imageCaption;
                
                return $this;
        }
        
        /**
         * Get imageCaption
         *
         * @return string
         */
        public function getImageCaption()
        {
                return $this->imageCaption;
        }
        
        /**
         * Set code
         *
         * @param string $code
         *
         * @return Game
         */
        public function setCode($code)
        {
                $this->code = $code;
                
                return $this;
        }
        
        /**
         * Get code
         *
         * @return string
         */
        public function getCode()
        {
                return $this->code;
        }
        
        /**
         * Set gameStatus
         *
         * @param integer $gameStatus
         *
         * @return Game
         */
        public function setGameStatus($gameStatus)
        {
                $this->gameStatus = $gameStatus;
                
                return $this;
        }
        
        /**
         * Get gameStatus
         *
         * @return integer
         */
        public function getGameStatus()
        {
                return $this->gameStatus;
        }

    /**
     * Set content
     *
     * @param string $content
     *
     * @return Game
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Set winner
     *
     * @param \Mweb\CoreBundle\Entity\Gamer $winner
     *
     * @return Game
     */
    public function setWinner(\Mweb\CoreBundle\Entity\Gamer $winner = null)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return \Mweb\CoreBundle\Entity\Gamer
     */
    public function getWinner()
    {
        return $this->winner;
    }

    /**
     * Set firstStep
     *
     * @param string $firstStep
     *
     * @return Game
     */
    public function setFirstStep($firstStep)
    {
        $this->firstStep = $firstStep;

        return $this;
    }

    /**
     * Get firstStep
     *
     * @return string
     */
    public function getFirstStep()
    {
        return $this->firstStep;
    }

    /**
     * Set secondStep
     *
     * @param string $secondStep
     *
     * @return Game
     */
    public function setSecondStep($secondStep)
    {
        $this->secondStep = $secondStep;

        return $this;
    }

    /**
     * Get secondStep
     *
     * @return string
     */
    public function getSecondStep()
    {
        return $this->secondStep;
    }

    /**
     * Set thirdStep
     *
     * @param string $thirdStep
     *
     * @return Game
     */
    public function setThirdStep($thirdStep)
    {
        $this->thirdStep = $thirdStep;

        return $this;
    }

    /**
     * Get thirdStep
     *
     * @return string
     */
    public function getThirdStep()
    {
        return $this->thirdStep;
    }
}
