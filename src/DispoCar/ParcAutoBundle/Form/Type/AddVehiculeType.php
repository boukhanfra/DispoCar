<?php
namespace DispoCar\ParcAutoBundle\Form\Type;

/**
 * Created by PhpStorm.
 * User: nizar
 * Date: 10/09/16
 * Time: 03:47 م
 */
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;




class AddVehiculeType extends AbstractType
{
    /**
     *
     * {@inheritDoc}
     * @see \Symfony\Component\Form\AbstractType::buildForm()
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('marque',EntityType::class,array('class' => 'DispoCar\ParcAutoBundle\Entity\Marque'))
            ->add('model',TextType::class)
            ->add('categorie',EntityType::class,array('class' => 'DispoCar\ParcAutoBundle\Entity\Categorie'))
            ->add('carburant',EntityType::class,array('class'=>'DispoCar\ParcAutoBundle\Entity\Carburant','expanded'=>true))
            ->add('options',OptionsType::class)
            ->add('nombre',NumberType::class);
    }

    /**
     *
     * {@inheritDoc}
     * @see \Symfony\Component\Form\FormTypeInterface::getName()
     */
    public function getName()
    {
        return 'new_vehicule';
    }

    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'DispoCar\ParcAutoBundle\Entity\Vehicule'
        ));
    }
}
?>