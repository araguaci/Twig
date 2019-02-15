<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 * (c) Armin Ronacher
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Twig_Node_Expression_AssignName extends \Twig\Node\Expression\NameExpression
{
    public function compile(\Twig\Compiler $compiler)
    {
        $compiler
            ->raw('$context[')
            ->string($this->getAttribute('name'))
            ->raw(']')
        ;
    }
}

class_alias('Twig_Node_Expression_AssignName', 'Twig\Node\Expression\AssignNameExpression', false);
