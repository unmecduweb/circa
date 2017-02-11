<?php

namespace Mweb\CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Mweb\AdminBundle\Entity\AbstractEntity;
use Symfony\Component\Validator\Constraints as Assert;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Content
 *
 * @ORM\Table(name="content")
 * @ORM\Entity(repositoryClass="Mweb\AdminBundle\Entity\Translation\TranslatableRepository")
 * @Vich\Uploadable
 * @ORM\HasLifecycleCallbacks
 */
class Content extends AbstractEntity
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
         * @Gedmo\Translatable
         * @ORM\Column(name="title", type="string", length=250, nullable=false)
         */
        private $title;
        
        /**
         * @var string
         * @Gedmo\Translatable
         * @ORM\Column(name="subtitle", type="string", length=250, nullable=true)
         */
        private $subTitle;
        
        /**
         * @var string
         * @Gedmo\Translatable
         * @ORM\Column(name="back_title", type="string", length=250, nullable=true)
         */
        private $backTitle;
        
        /**
         * @ORM\Column(name="slug", type="string", length=250, nullable=false)
         * @Gedmo\Slug(fields={"title"})
         */
        private $slug;
        
        
        /**
         * @var File
         *
         * @Vich\UploadableField(mapping="content_image", fileNameProperty="imageName")
         */
        private $imageFile;
        /**
         * @var string
         *
         * @ORM\Column(name="image_name", type="string", length=250, nullable=true)
         */
        private $imageName;
        
        /**
         * @var File
         *
         * @Vich\UploadableField(mapping="parallax_image", fileNameProperty="parallaxName")
         */
        private $parallaxFile;
        /**
         * @var string
         *
         * @ORM\Column(name="parallax_name", type="string", length=250, nullable=true)
         */
        private $parallaxName;
        
        /**
         * @var string
         * @Gedmo\Translatable
         * @ORM\Column(name="image_caption", type="string", length=250, nullable=true)
         */
        private $imageCaption;
        
        
        /**
         * @var string
         * @Gedmo\Translatable
         * @ORM\Column(name="content", type="text", length=65535, nullable=true)
         */
        private $content;
        
        
        /**
         * @var \Mweb\CoreBundle\Entity\Content
         * @ORM\ManyToOne(targetEntity="Mweb\CoreBundle\Entity\Content")
         * @ORM\JoinColumns({@ORM\JoinColumn(name="parent_content_id", referencedColumnName="id")})
         *
         */
        private $parentContent;
        
        
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
         * @return Content
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
         * Set subTitle
         *
         * @param string $subTitle
         *
         * @return Content
         */
        public function setSubTitle($subTitle)
        {
                $this->subTitle = $subTitle;
                
                return $this;
        }
        
        /**
         * Get subTitle
         *
         * @return string
         */
        public function getSubTitle()
        {
                return $this->subTitle;
        }
        
        /**
         * Set slug
         *
         * @param string $slug
         *
         * @return Content
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
         * @return Content
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
         * If manually uploading a file (i.e. not using Symfony Form) ensure an instance
         * of 'UploadedFile' is injected into this setter to trigger the  update. If this
         * bundle's configuration parameter 'inject_on_load' is set to 'true' this setter
         * must be able to accept an instance of 'File' as the bundle will inject one here
         * during Doctrine hydration.
         *
         * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $image
         *
         * @return Content
         */
        public function setParallaxFile(File $image = null)
        {
                $this->parallaxFile = $image;
                
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
        public function getParallaxFile()
        {
                return $this->parallaxFile;
        }
        
        
        /**
         * Set imageName
         *
         * @param string $imageName
         *
         * @return Content
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
         * @return Content
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
         * @return Content
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
         * Set menuTitle
         *
         * @param string $menuTitle
         *
         * @return Content
         */
        public function setMenuTitle($menuTitle)
        {
                $this->menuTitle = $menuTitle;
                
                return $this;
        }
        
        /**
         * Get menuTitle
         *
         * @return string
         */
        public function getMenuTitle()
        {
                return $this->menuTitle;
        }
        
        /**
         * Set backTitle
         *
         * @param string $backTitle
         *
         * @return Content
         */
        public function setBackTitle($backTitle)
        {
                $this->backTitle = $backTitle;
                
                return $this;
        }
        
        /**
         * Get backTitle
         *
         * @return string
         */
        public function getBackTitle()
        {
                return $this->backTitle;
        }
        
        /**
         * Set parentContent
         *
         * @param \Mweb\CoreBundle\Entity\Content $parentContent
         *
         * @return Content
         */
        public function setParentContent(\Mweb\CoreBundle\Entity\Content $parentContent = null)
        {
                $this->parentContent = $parentContent;
                
                return $this;
        }
        
        /**
         * Get parentContent
         *
         * @return \Mweb\CoreBundle\Entity\Content
         */
        public function getParentContent()
        {
                return $this->parentContent;
        }
        
        /**
         * Set parallaxName
         *
         * @param string $parallaxName
         *
         * @return Content
         */
        public function setParallaxName($parallaxName)
        {
                $this->parallaxName = $parallaxName;
                
                return $this;
        }
        
        /**
         * Get parallaxName
         *
         * @return string
         */
        public function getParallaxName()
        {
                return $this->parallaxName;
        }
}
