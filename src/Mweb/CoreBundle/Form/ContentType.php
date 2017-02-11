<?php

namespace Mweb\CoreBundle\Form;

use Mweb\AdminBundle\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class ContentType extends AbstractType {

        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
                parent::buildForm($builder, $options);
                $builder
                        ->add('title', TextType::class, [
                            'label' => 'admin.page.title'
                        ])
                        ->add('subTitle', TextType::class,[
                                'label' => 'admin.page.subTitle'
                        ])
                        ->add('backTitle', TextType::class,[
                                'label' => 'admin.page.backTitle'
                        ])
                        
                        ->add('imageFile',VichFileType::class, array(
                                'label' => 'admin.page.illu',
                                'required'      => false,
                                'allow_delete'  => true, // not mandatory, default is true
                                'download_link' => true, // not mandatory, default is true
                        ))
        
                        ->add('parallaxFile',VichFileType::class, array(
                                'label' => 'admin.page.parallax',
                                'required'      => false,
                                'allow_delete'  => true, // not mandatory, default is true
                                'download_link' => true, // not mandatory, default is true
                        ))
                        ->add('content', TextareaType::class, array(
                                'label' => 'admin.page.content',
                                'attr' => array('class' => 'tinymce')
                        ))
                        ->add('parentContent',  EntityType::class, array(
                                // query choices from this entity
                                'class' => 'MwebCoreBundle:Content',
        
                                // use the User.username property as the visible option string
                                'choice_label' => 'title'
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
