<?php

/**
 * Subclass for representing a row from the 'answer' table.
 *
 * 
 *
 * @package lib.model
 */ 
class Answer extends BaseAnswer
{
	public function __toString()
	{
		return $this->getTitle();
	}
}
