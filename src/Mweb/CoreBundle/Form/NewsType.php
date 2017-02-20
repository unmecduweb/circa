<?php

namespace Mweb\CoreBundle\Form;

use Mweb\AdminBundle\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class NewsType extends AbstractType {

        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
                parent::buildForm($builder, $options);
                $builder
                        ->add('title', TextType::class, [
                            'label' => 'admin.news.title'
                        ])
                        ->add('startDate', DateType::class,[
                                'label' => 'admin.news.dateStart'
                        ])
                        ->add('type', ChoiceType::class,[
                                'label' => 'admin.news.type',
                                'choices'=> array(
                                        'preNight'=> "admin.news.preNight",
                                        'benevole'=> "admin.news.benevole",
                                        'around'=> "admin.news.around",
                                        'artistes'=> "admin.news.artistes"
                                )
                                
                        ])
                        
                        
                        ->add('imageFile',VichFileType::class, array(
                                'label' => 'admin.news.illu',
                                'required'      => false,
                                'allow_delete'  => true, // not mandatory, default is true
                                'download_link' => true, // not mandatory, default is true
                        ))
                        ->add('content', TextareaType::class, array(
                                'label' => 'admin.news.content',
                                'attr' => array('class' => 'tinymce')
                        ))
//                        ->add('devAlias', TextType::class)


                ;
        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions(OptionsResolverInterface $resolver) {
                parent::setDefaultOptions($resolver);
                $resolver->setDefaults(array(
                    'data_class' => 'Mweb\CoreBundle\Entity\News'
                ));
        }

        /**
         * @return string
         */
        public function getName() {
                return 'crl_news';
        }

}
