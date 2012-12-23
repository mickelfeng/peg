<?php
/**
 * @author Jefferson González
 * @license MIT
 * @link http://github.com/wxphp/peg Source code. 
*/

namespace Peg\Parse;

/**
 * Enumeration with all type of definitions generated by the extractor.
 */
class DefinitionsType 
{	
	const CONSTANTS = 1;
	
	const ENUMERATIONS = 2;
	
	const VARIABLES = 3;
	
	const TYPE_DEFINITIONS = 4;
	
	const RESOURCES = 5;
	
	const FUNCTIONS = 6;
	
	const CLASSES = 7;
	
	const CLASS_ENUMERATIONS = 8;
	
	const CLASS_VARIABLES = 9;
	
	const INCLUDES = 10;
}

?>
