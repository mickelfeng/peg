<?php
/*
 * @author Jefferson González
 * 
 * @license 
 * This file is part of PEG check the license file for information.
 * 
 * 
*/

namespace Peg\CommandLine;

/**
 * A sub command processed by the application. Example peg init
 */
class Command
{
	/**
	 * Name of the command.
	 * @var string
	 */
	public $name;
	
	/**
	 * Array of Options processed by the command.
	 * @var \Peg\CommandLine\Option[] 
	 */
	public $options;
	
	/**
	 * In case the command supports values. Example: peg init something
	 * where 'init' is the command and 'something' is the value.
	 * @var string 
	 */
	public $value;
	
	/**
	 * Flag that indicates if a value is required for the command.
	 * @var boolean
	 */
	public $value_required;
	
	/**
	 * Array of Actions called if this command gets executed.
	 * @var \Peg\CommandLine\Action[]
	 */
	public $actions;
	
	/**
	 * Initialize the command.
	 * 
	 * @param string $name Name of the Sub-command
	 * @param \Peg\CommandLine\Option[] $options List of options
	 * @param \Peg\CommandLine\Action[] $actions List of actions
	 */
	public function __construct($name, $options=array(), $actions=array())
	{
		$this->name = $name;
		$this->options = $options;
		$this->actions = $actions;
	}
	
	/**
	 * Define a new option accepted by the command.
	 * @param \Peg\CommandLine\Option $option
	 */
	public function AddOption(Option $option)
	{
		$this->options[] = $option;
	}
	
	/**
	 * Register actions that get call when command is executed.
	 * @param \Peg\CommandLine\Action $action
	 */
	public function RegisterAction(Action $action)
	{
		$this->actions[] = $action;
	}
	
	/**
	 * Execute each action associated to the command.
	 */
	public function Execute()
	{
		foreach($this->actions as $action)
		{
			$action->OnCall($this);
		}
	}
}

?>