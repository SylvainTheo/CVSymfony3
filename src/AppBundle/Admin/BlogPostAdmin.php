<?php
namespace AppBundle\Admin;

use AppBundle\Entity\BlogPost;
use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;

class BlogPostAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->with('Content', ['class' => 'col-md-9'])
                ->add('title', 'text')
                ->add('body', 'textarea')
            ->end()
            ->with('Meta data', ['class' => 'col-md-3'])
                ->add('category', 'entity', [
                    'class' => 'AppBundle\Entity\Category',
                    'choice_label' => 'name',
                ])
            ->end()
        ;
    }

    public function toString($object)
    {
        return $object instanceof BlogPost
            ? $object->getTitle()
            : 'Blog Post'; // shown in the breadcrumb on the create view
    }

    protected function configureListFields(ListMapper $listMapper)
    {
    // ... configure $listMapper
    }
}