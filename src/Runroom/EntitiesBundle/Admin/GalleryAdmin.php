<?php

namespace Runroom\EntitiesBundle\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\CoreBundle\Form\Type\CollectionType;

class GalleryAdmin extends AbstractAdmin
{
    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
            ->add('galleryImages', CollectionType::class, [
                'by_reference' => false,
            ], [
                'edit' => 'inline',
                'inline' => 'standard',
                'sortable' => 'position',
            ]);
    }
}
