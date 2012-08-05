<?php



class AnswerMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.AnswerMapBuilder';

	
	private $dbMap;

	
	public function isBuilt()
	{
		return ($this->dbMap !== null);
	}

	
	public function getDatabaseMap()
	{
		return $this->dbMap;
	}

	
	public function doBuild()
	{
		$this->dbMap = Propel::getDatabaseMap('propel');

		$tMap = $this->dbMap->addTable('answer');
		$tMap->setPhpName('Answer');

		$tMap->setUseIdGenerator(true);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, null);

		$tMap->addForeignKey('ANSWER_ID', 'AnswerId', 'int', CreoleTypes::INTEGER, 'answer', 'ID', true, null);

		$tMap->addColumn('BODY', 'Body', 'string', CreoleTypes::VARCHAR, true, 2000);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 