<?php

namespace Soy\Grunt;

use Soy\Task\AbstractCliTask;

class GruntTask extends AbstractCliTask
{
    /**
     * @var string
     */
    protected $binary = './node_modules/.bin/grunt';

    /**
     * @var string
     */
    protected $tasks = ['default'];

    /**
     * @var array
     */
    protected $flags = [];

    /**
     * @param string $task
     * @return $this
     */
    public function addTask($task)
    {
        $this->tasks[] = $task;
        return $this;
    }

    /**
     * @param string|array $task
     * @return $this
     */
    public function setTask($task)
    {
        $this->tasks = [$task];
        return $this;
    }

    /**
     * @param array $tasks
     * @return $this
     */
    public function setTasks(array $tasks)
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * @param string $flag
     * @return $this
     */
    public function addFlag($flag)
    {
        $this->flags[] = $flag;
        return $this;
    }

    /**
     * @param array $flags
     * @return $this
     */
    public function setFlags(array $flags)
    {
        $this->flags = $flags;
        return $this;
    }

    /**
     * @return string
     */
    public function getBinary()
    {
        $command = parent::getBinary() . ' ' . implode(' ', $this->tasks);

        if (count($this->flags) > 0) {
            $command .= ' ' . implode(' ', $this->flags);
        }

        return $command;
    }
}