<?php

namespace FarmBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductType extends AbstractType
{
    /**
     * {@inheritdoc}
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, ['label' => "Nom"])
            ->add('price', null, ['label' => "Prix HT"])
            ->add('description', null, ['label' => "Décrivez ici votre produit..."])
            ->add('quantity', null, ['label' => "Quantité d'apport (stock)"])
            ->add('isActive', null, ['label' => "Mettre mon produit en vente."])
            ->add('category', null, ['label' => "Choisissez la catégorie du produit"])
            ->add('submit', SubmitType::class);
    }

    /**
     * {@inheritdoc}
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'FarmBundle\Entity\Product'
        ));
    }

    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return 'farmbundle_product';
    }


}
