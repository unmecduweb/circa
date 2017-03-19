<?php

namespace Mweb\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;
use Mweb\AdminBundle\Entity\AbstractEntity;
use Mweb\CoreBundle\Entity\Game;

/**
 * News
 *
 * @ORM\Table(name="gamer")
 * @ORM\Entity(repositoryClass="Mweb\AdminBundle\Entity\Translation\TranslatableRepository")
 * @ORM\HasLifecycleCallbacks
 */
class Gamer extends AbstractEntity
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
         * @ORM\Column(name="nickname", type="string", length=250, nullable=false)
         * @Assert\NotBlank()
         */
        private $nickname;
        
        /**
         * @var string
         *
         * @ORM\Column(name="email", type="string", length=250, nullable=false)
         */
        private $email;
        
        /**
         * @var string
         *
         * @ORM\Column(name="phone", type="string", length=250, nullable=true)
         */
        private $phone;
        
        /**
         * @var string
         *
         * @ORM\Column(name="ip", type="string", length=250, nullable=false)
         */
        private $ip;
        
        /**
         * @var string
         *
         * @ORM\Column(name="cookie", type="string", length=250, nullable=false)
         */
        private $cookie;
        
        /**
         * @var integer
         * @ORM\Column(name="winner", type="smallint", options={"default" = 0})
         */
        private $winner = 0;
        
        /**
         * @var string
         *
         * @ORM\ManyToOne(targetEntity="Game", cascade={"persist"})
         */
        private $game;
        
        public function __toString()
        {
                return $this->nickname.' // '.$this->phone;
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
         * Set nickname
         *
         * @param string $nickname
         *
         * @return Gamer
         */
        public function setNickname($nickname)
        {
                $this->nickname = $nickname;
                
                return $this;
        }
        
        /**
         * Get nickname
         *
         * @return string
         */
        public function getNickname()
        {
                return $this->nickname;
        }
        
        /**
         * Set email
         *
         * @param string $email
         *
         * @return Gamer
         */
        public function setEmail($email)
        {
                $this->email = $email;
                
                return $this;
        }
        
        /**
         * Get email
         *
         * @return string
         */
        public function getEmail()
        {
                return $this->email;
        }
        
        /**
         * Set phone
         *
         * @param string $phone
         *
         * @return Gamer
         */
        public function setPhone($phone)
        {
                $this->phone = $phone;
                
                return $this;
        }
        
        /**
         * Get phone
         *
         * @return string
         */
        public function getPhone()
        {
                return $this->phone;
        }
        
        /**
         * Set ip
         *
         * @param string $ip
         *
         * @return Gamer
         */
        public function setIp($ip)
        {
                $this->ip = $ip;
                
                return $this;
        }
        
        /**
         * Get ip
         *
         * @return string
         */
        public function getIp()
        {
                return $this->ip;
        }
        
        /**
         * Set game
         *
         * @param \Mweb\CoreBundle\Entity\Game $game
         *
         * @return Gamer
         */
        public function setGame(\Mweb\CoreBundle\Entity\Game $game = null)
        {
                $this->game = $game;
                
                return $this;
        }
        
        /**
         * Get game
         *
         * @return \Mweb\CoreBundle\Entity\Game
         */
        public function getGame()
        {
                return $this->game;
        }

    /**
     * Set cookie
     *
     * @param string $cookie
     *
     * @return Gamer
     */
    public function setCookie($cookie)
    {
        $this->cookie = $cookie;

        return $this;
    }

    /**
     * Get cookie
     *
     * @return string
     */
    public function getCookie()
    {
        return $this->cookie;
    }

    /**
     * Set winner
     *
     * @param integer $winner
     *
     * @return Gamer
     */
    public function setWinner($winner)
    {
        $this->winner = $winner;

        return $this;
    }

    /**
     * Get winner
     *
     * @return integer
     */
    public function getWinner()
    {
        return $this->winner;
    }
}
