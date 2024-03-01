<?php

/**
 * Cozy Contracts
 *
 * (c) Nestor Picado <info@nestorpicado.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Cozy\Contracts;

use IteratorAggregate;
use Traversable;

/**
 * @template TKey
 * @template-covariant TValue
 * @template-extends IteratorAggregate<TKey, TValue>
 */
interface Collection extends IteratorAggregate
{
    /**
     * @return Traversable<TKey, TValue>
     */
    public function getIterator(): Traversable;

    /**
     * Get all items in the collection.
     *
     * @return array<TKey, TValue>
     */
    public function all(): array;

    /**
     * Iterates through the collection and passes each value to the given callback.
     * The callback is free to modify the item and return it, thus forming a new
     * collection of modified items.
     *
     * @template TMapValue
     *
     * @param  callable(TValue, TKey): TMapValue $callback
     * @return static<TKey, TMapValue>
     */
    public function map(callable $callback): self;

    /**
     * Filters the collection using the given callback, forming a new collection that
     * keeps only those items that pass a given truth test.
     *
     * @param  callable(TValue, TKey): bool $callback
     * @param  bool                         $preserveKeys decides if keys are preserved in the resulted collection
     * @return static<TKey, TValue>
     */
    public function filter(callable $callback, bool $preserveKeys = true): self;

    /**
     * Reduce the collection to a single value.
     *
     * @template TInitial
     * @template TReturnType
     *
     * @param callable(TInitial|TReturnType, TValue, TKey): TReturnType $callback
     * @param TInitial                                                  $initial
     *
     * @return TReturnType
     */
    public function reduce(callable $callback, $initial = null);
}
