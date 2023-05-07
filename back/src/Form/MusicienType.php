<?php

namespace App\Form;

use App\Entity\Country;
use App\Entity\Musicien;
use App\Entity\Ville;
use App\Entity\Genre;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateTimeType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class MusicienType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('label', TextType::class)
            ->add('dateDebut', DateTimeType::class)
            ->add('dateSeparation', DateTimeType::class)
            ->add('fondateur', TextType::class)
            ->add('nombreMembre', NumberType::class)
            ->add('presentation', TextType::class)
            ->add('paysOrigine', EntityType::class, [
                'class' => Country::class
            ])
            ->add('ville', EntityType::class, [
                'class' => Ville::class
            ])
            ->add('genre', EntityType::class, [
                'class' => Genre::class
            ]);
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Musicien::class,
        ]);
    }
}
