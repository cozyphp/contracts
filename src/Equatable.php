<?php

namespace Cozy\Contracts;

/**
 * Defines a generalized method that a value type or class implements to create a type-specific method for determining
 * equality of instances.
 */
interface Equatable
{
    /**
     * Indicates whether the current object is equal to other object of the same type.
     *
     * @param static|mixed $other
     * @return bool true if the current object is equal to the other parameter; otherwise, false.
     */
    public function equals($other): bool;
}