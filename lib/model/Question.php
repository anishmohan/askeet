<?php

/**
 * Subclass for representing a row from the 'question' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Question extends BaseQuestion
{
	public function __toString()
	{
		return $this->getTitle();
	}
}
