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

class GameType extends AbstractType {

        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
                parent::buildForm($builder, $options);
                $builder
                        ->add('title', TextType::class, [
                            'label' => 'admin.game.title'
                        ])
                       
                        ->add('endDate', DateTimeType::class,[
                                'label' => 'admin.game.sessionDate',
                                'empty_data' => new \DateTime('2017-05-04')
                        ])
                       
                        ->add('code', TextType::class,[
                                'label' => 'admin.game.website',
                                'required' => false
                        ])
        
                     
                        ->add('imageFile',VichFileType::class, array(
                                'label' => 'admin.game.illu',
                                'required'      => false,
                                'allow_delete'  => true, // not mandatory, default is true
                                'download_link' => true, // not mandatory, default is true
                        ))
        
                        ->add('firstStep', TextareaType::class, array(
                                'label' => 'admin.game.content',
                                'required' => false,
                                'attr' => array('class' => 'tinymce')
                        ))
                        ->add('secondStep', TextareaType::class, array(
                                'label' => 'admin.game.content',
                                'required' => false,
                                'attr' => array('class' => 'tinymce')
                        ))
        
                        ->add('thirdStep', TextareaType::class, array(
                                'label' => 'admin.game.content',
                                'required' => false,
                                'attr' => array('class' => 'tinymce')
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
