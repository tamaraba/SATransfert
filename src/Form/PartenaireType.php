<?php

namespace App\Form;

use App\Entity\Partenaire;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\DateType;

class PartenaireType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('ninea')
            ->add('denomSocial')
            ->add('localite')
            ->add('formJuri')
            ->add('activitePrin')
            ->add('nomComplet')
            ->add('email')
            ->add('telephone')
            ->add('adresse')
            ->add('cni')
        ;
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            'data_class' => Partenaire::class,
            'csrf_protection'=>false
        ]);
    }
}
