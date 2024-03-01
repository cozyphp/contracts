<?php

namespace Cozy\Contracts;

/**
 * Represents an immutable value.
 */
interface ValueObject
{
    /**
     * Gets the primitive value of the object.
     */
    public function get();
}
