<?php

namespace Fusible\Tests;

use Fusible\AbstractFusible;
use Respect\Validation\Validator;

class DataFusible extends AbstractFusible
{
    protected function getRules(Validator $validator): Validator   
    {
        //$validator->attribute('name', $validator->notBlank());
        //$validator->attribute('password', $validator->notBlank());
        //$validator->attribute('number', $validator->number());
        $validator->attribute('blank', $validator->notBlank())
            ;

        return $validator;
    }
}
