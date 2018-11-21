<?php
/**
 * Spiral Framework.
 *
 * @license   MIT
 * @author    Anton Titov (Wolfy-J)
 */

namespace Spiral\ORM;

use Spiral\Database\DatabaseInterface;
use Spiral\ORM\Command\CommandInterface;
use Spiral\ORM\Command\ContextualInterface;

interface ORMInterface
{
    public function getDatabase($entity): DatabaseInterface;

    public function getMapper($entity): MapperInterface;

    public function getRelationMap($entity): RelationMap;

    public function getSchema(): SchemaInterface;

    public function getFactory(): FactoryInterface;

    public function getHeap(): ?HeapInterface;

    public function make(string $class, array $data, int $state = State::NEW);

    public function queueStore($entity, int $mode = 0): ContextualInterface;

    public function queueDelete($entity, int $mode = 0): CommandInterface;
}