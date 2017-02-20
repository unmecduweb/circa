<?php

namespace Mweb\CoreBundle\Form;

use Mweb\AdminBundle\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ArtistType extends AbstractType {

        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
                parent::buildForm($builder, $options);
                $builder
                        ->add('title', TextType::class, [
                            'label' => 'admin.artist.title'
                        ])
                        ->add('subTitle', TextType::class,[
                                'label' => 'admin.artist.subTitle'
                        ])
                        ->add('scene', TextType::class,[
                                'label' => 'admin.artist.scene'
                        ])
                        ->add('sessionDate', DateTimeType::class,[
                                'label' => 'admin.artist.sessionDate'
                        ])
                        
                        ->add('type', ChoiceType::class,[
                                'label' => 'admin.artist.type',
                                'choices'=> array(
                                        'rock'=> "admin.artist.rock",
                                        'electro'=> "admin.artist.electro",
                                        'dub'=> "admin.artist.dub",
                                        'circ'=> "admin.artist.circ"
                                )
        
                        ])
                        ->add('website', TextType::class,[
                                'label' => 'admin.artist.'
                        ])
        
                        ->add('facebook', TextType::class,[
                                'label' => 'admin.artist.facebook'
                        ])
        
                        ->add('videoLink', TextType::class,[
                                'label' => 'admin.artist.videoLink'
                        ])
                        
                        ->add('imageFile',VichFileType::class, array(
                                'label' => 'admin.artist.illu',
                                'required'      => false,
                                'allow_delete'  => true, // not mandatory, default is true
                                'download_link' => true, // not mandatory, default is true
                        ))
        
                        ->add('content', TextareaType::class, array(
                                'label' => 'admin.artist.content',
                                'attr' => array('class' => 'tinymce')
                        ))
                        
                        ->add('metaDesc', TextareaType::class, array(
                                'label' => 'admin.edit.metaDesc',
                                'required'      => false
                        ));

        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions(OptionsResolverInterface $resolver) {
                parent::setDefaultOptions($resolver);
                $resolver->setDefaults(array(
                    'data_class' => 'Mweb\CoreBundle\Entity\Content'
                ));
        }

        /**
         * @return string
         */
        public function getName() {
                return 'content';
        }

}