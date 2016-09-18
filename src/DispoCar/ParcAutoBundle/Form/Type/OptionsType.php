<?php
/**
 * Created by PhpStorm.
 * User: nizar
 * Date: 11/09/16
 * Time: 02:47 م
 */

namespace DispoCar\ParcAutoBundle\Form\Type;


use Symfony\Component\Form\Extension\Core\Type\CheckboxType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;


class OptionsType extends AbstractType
{
    /**
     *
     * {@inheritDoc}
     * @see \Symfony\Component\Form\AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('siegeBB',CheckboxType::class,array('required'=>false))
            ->add('chauffeur',CheckboxType::class,array('required'=>false))
            ->add('gps',CheckboxType::class,array('required'=>false))
            ->add('climatisation',CheckboxType::class,array('required'=>false))
            ->add('pleinOffert',CheckboxType::class,array('required'=>false));
    }

    /**
     *
     * {@inheritDoc}
     * @see \Symfony\Component\Form\FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'options_vehicule';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DispoCar\ParcAutoBundle\Entity\Options'
        ));
    }
}