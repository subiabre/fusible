<?php

namespace Fusible;

use Respect\Validation\Exceptions\NestedValidationException;
use Respect\Validation\Validator;

/**
 * A Fusible is a dedicated class meant to throw an specific exception when validation fails.
 * 
 * @author Subiabre https://github.com/subiabre
 * @license MIT
 */
abstract class AbstractFusible
{
    private $emptyValidator;

    public function __construct()
    {
        $this->emptyValidator = new Validator();
    }

    /**
     * Build a validator instance with rules to assert against
     * @param Validator $validator The validator is automatically passed by the Fusible when asserted
     * @return Validator The validator with the set rules
     */
    abstract protected function setRules(Validator $validator): Validator;

    /**
     * Asserts that the Fusible rules are fulfilled
     * @param object $model Data model to be validated by this fusible
     * @throws FusibleException If validation fails
     */
    final public function assert(object $model): void
    {
        $validator = $this->setRules($this->emptyValidator);

        try {
            $validator->assert($model);
        } catch (NestedValidationException $e) {
            throw new FusibleException("Malformed Payload", 1);
            return;
        }
    }
}
