<?php 
namespace AppBundle\Form\Post;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

class CreatePost extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('title')
			->add('content')
			->add('status')
			->add('tags')
			->add('Guardar', SubmitType::class)
			;
	}
}