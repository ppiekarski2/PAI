<?php
namespace ProductBundle\Form;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\MoneyType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class AddType extends AbstractType
{

public function buildForm(FormBuilderInterface $builder, array $options)
{
$builder->add('name', TextType::class)->add('price', MoneyType::class)->add('description', TextareaType::class);
}


public function configureOptions(OptionsResolver $resolver)
{
$resolver->setDefaults(array('data_class' => 'ProductBundle\Entity\Product'));
}

}

