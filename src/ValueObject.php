<?php

/**
 * Cozy Contracts
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cozy\Contracts;

/**
 * Represents an immutable value.
 */
interface ValueObject
{
    /**
     * Gets the internal/primitive value of the object.
     *
     * @return mixed
     */
    public function get();
}
