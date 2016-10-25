<?php

namespace Runroom\EntitiesBundle\Tests\MotherObject;

use Runroom\EntitiesBundle\Entity\Gallery;

class GalleryMotherObject
{
    const ID = 1;

    public static function createFilled()
    {
        $gallery = new Gallery();

        $gallery->setId(self::ID);

        return $gallery;
    }
}
