<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 13/09/18
 * Time: 20:06
 */

namespace AppBundle\Model;

use Symfony\Component\Form\AbstractType;

class AbstractMegatronicType extends AbstractType
{


    /**
     * {@inheritdoc}
     */
    public function getBlockPrefix()
    {
        return '';
    }
}
