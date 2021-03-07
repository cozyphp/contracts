<?php

namespace Cozy\Contracts;

/**
 * Defines a generalized comparison method that a value type or class implements to create a type-specific
 * comparison method for ordering or sorting its instances.
 */
interface Comparable
{
    /**
     * Compares the current instance with another object of the same type and returns an integer that indicates whether
     * the current instance precedes, follows, or occurs in the same position in the sort order as the other object.
     *
     * @param static|mixed $other
     * @return int A value that indicates the relative order of the objects being compared. -1 means precedes, 0 occurs,
     * and 1 follows.
     */
    public function compareTo($other): int;
}