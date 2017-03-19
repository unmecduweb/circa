<?php

namespace Mweb\CoreBundle\Form;

use Mweb\AdminBundle\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;

class GamerType extends \Symfony\Component\Form\AbstractType {

        /**
         * @param FormBuilderInterface $builder
         * @param array $options
         */
        public function buildForm(FormBuilderInterface $builder, array $options) {
                
                $builder
                        ->add('nickname', TextType::class)
                       
                        ->add('email', EmailType::class)
                       
                        ->add('phone', TextType::class, ['required'=>false])
                        ->add('submit', SubmitType::class);
                        
                 

        }

        /**
         * @param OptionsResolverInterface $resolver
         */
        public function setDefaultOptions(OptionsResolverInterface $resolver) {
                
                $resolver->setDefaults(array(
                    'data_class' => 'Mweb\CoreBundle\Entity\Gamer'
                ));
        }

        /**
         * @return string
         */
        public function getName() {
                return 'gamer';
        }

}
