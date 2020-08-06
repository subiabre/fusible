<?php

namespace Fusible;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator;

/**
 * 
 */
abstract class AbstractFusible
{
    private $emptyValidator;

    public function __construct()
    {
        $this->emptyValidator = new Validator();
    }

    abstract protected function getRules(Validator $validator): Validator;

    /**
     * Asserts that the validator passes
     * @param object $model Data model to be validated by this fusible
     * @throws FusibleException If validation fails
     */
    final public function assert(object $model): void
    {
        $validator = $this->getRules($this->emptyValidator);

        try {
            $validator->assert($model);
        } catch (NestedValidationException $e) {
            throw new FusibleException("Malformed Payload", 1);
            return;
        }
    }
}
