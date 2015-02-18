<?php

namespace League\CLImate\TerminalObject\Router;

interface RouterInterface
{
    /**
     * @param $class
     * @return string
     */
    public function path($class);

    /**
     * @param $class
     * @return boolean
     */
    public function exists($class);

    /**
     * @param $obj
     * @return null|\League\CLImate\TerminalObject\Basic\BasicTerminalObjectInterface
     */
    public function execute($obj);

}