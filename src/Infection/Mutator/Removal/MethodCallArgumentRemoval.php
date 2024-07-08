<?php

declare(strict_types = 1);

namespace StanislavPivovartsev\InterestingStatistics\Utils\Infection\Mutator\Removal;

use Infection\Mutator\Definition;
use Infection\Mutator\GetMutatorName;
use Infection\Mutator\Mutator;
use Infection\Mutator\MutatorCategory;
use PhpParser\Node;

class MethodCallArgumentRemoval implements Mutator
{
    use GetMutatorName;

    public static function getDefinition(): Definition
    {
        return new Definition(
            'Removes the last argument of method call.',
            MutatorCategory::SEMANTIC_REDUCTION,
            null,
            <<<'DIFF'
                - $this->fooBar();
                DIFF,
        );
    }

    /**
     * @psalm-mutation-free
     *
     * @return iterable<Node\Stmt\Nop>
     */
    public function mutate(Node $node): iterable
    {
        /** @var \PhpParser\Node\Expr\MethodCall $oldMethodCall */
        $oldMethodCall = $node->expr;
        $oldArgs = $oldMethodCall->getArgs();

        // remove last passed argument
        $newArgs = array_splice($oldArgs, 0, count($oldArgs) - 1);

        yield new Node\Stmt\Expression(
            new Node\Expr\MethodCall($oldMethodCall->var, $oldMethodCall->name->name, $newArgs)
        );
    }

    public function canMutate(Node $node): bool
    {
        if (!$node instanceof Node\Stmt\Expression) {
            return false;
        }

        return $node->expr instanceof Node\Expr\MethodCall;
    }
}