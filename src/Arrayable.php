<?php

/**
 * Cozy Contracts
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cozy\Contracts;

interface Arrayable
{
    /**
     * Convert the current instance to its array representation.
     *
     */
    public function toArray(): array;
}
