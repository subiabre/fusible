<?php

namespace Fusible\Tests;

use Fusible\AbstractFusible;
use Respect\Validation\Validator;

class DataFusible extends AbstractFusible
{
    protected function setRules(Validator $validator): Validator   
    {
        $validator->allOf(
            $validator::attribute('name', $validator::notBlank()),
            $validator::attribute('password', $validator::notBlank()),
            $validator::attribute('number', $validator::number())
        );

        return $validator;
    }
}
