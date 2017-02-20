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
 * @ORM\Table(name="news")
 * @ORM\Entity(repositoryClass="Mweb\AdminBundle\Entity\Translation\TranslatableRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class News extends AbstractEntity
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
         * @Gedmo\Translatable
         */
        private $title;
        
        /**
         * @ORM\Column(name="slug", type="string", length=250, nullable=false)
         * @Gedmo\Slug(fields={"title"})
         */
        private $slug;
        
        /**
         * @ORM\Column(name="start_date", type="date", nullable=true)
         */
        private $startDate;
        
        
        /**
         * @var File
         *
         * @Vich\UploadableField(mapping="news_image", fileNameProperty="imageName")
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
         * @ORM\Column(name="type", type="string", length=250)
         */
        private $type;
        
        
        /**
         * @var string
         *
         * @ORM\Column(name="content", type="text", length=65535, nullable=true)
         * @Gedmo\Translatable
         */
        private $content;
        
        
        public function getSummary($limit = 120)
        {
                $text = strip_tags(utf8_decode((html_entity_decode($this->getContent(), ENT_QUOTES))));
                return substr($text, 0, $limit) . '...';
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
         * @return News
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
         * Set slug
         *
         * @param string $slug
         *
         * @return News
         */
        public function setSlug($slug)
        {
                $this->slug = $slug;
                
                return $this;
        }
        
        /**
         * Get slug
         *
         * @return string
         */
        public function getSlug()
        {
                return $this->slug;
        }
        
        
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
         * Set imageName
         *
         * @param string $imageName
         *
         * @return News
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
         * @return News
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
         * Set content
         *
         * @param string $content
         *
         * @return News
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
         * Set startDate
         *
         * @param \DateTime $startDate
         *
         * @return News
         */
        public function setStartDate($startDate)
        {
                $this->startDate = $startDate;
                
                return $this;
        }
        
        /**
         * Get startDate
         *
         * @return \DateTime
         */
        public function getStartDate()
        {
                return $this->startDate;
        }

    /**
     * Set type
     *
     * @param string $type
     *
     * @return News
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
}
