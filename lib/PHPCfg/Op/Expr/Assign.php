<?php

/*
 * This file is part of PHP-CFG, a Control flow graph implementation for PHP
 *
 * @copyright 2015 Anthony Ferrara. All rights reserved
 * @license MIT See LICENSE at the root of the project for more info
 */

namespace PHPCfg\Op\Expr;

use PHPCfg\Op\Expr;
use PhpCfg\Operand;

class Assign extends Expr {
    public $var;
    public $expr;

    protected $writeVariables = ['var', 'result'];

    public function __construct(Operand $var, Operand $expr, array $attributes = []) {
        parent::__construct($attributes);
        $this->var = $this->addWriteRef($var);
        $this->expr = $this->addReadRef($expr);
    }

    public function getVariableNames() {
        return ["var", "expr", "result"];
    }
}
