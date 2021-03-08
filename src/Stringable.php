<?php

/**
 * Cozy.Contracts
 *
 * (c) Nestor Picado <info@nestorpicado.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cozy\Contracts;

interface Stringable
{
    /**
     * Convert the current instance to its string representation.
     */
    public function __toString(): string;
}
