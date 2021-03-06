<?php



class RelevancyMapBuilder {

	
	const CLASS_NAME = 'lib.model.map.RelevancyMapBuilder';

	
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

		$tMap = $this->dbMap->addTable('relevancy');
		$tMap->setPhpName('Relevancy');

		$tMap->setUseIdGenerator(false);

		$tMap->addPrimaryKey('ID', 'Id', 'int', CreoleTypes::INTEGER, true, null);

		$tMap->addForeignKey('USER_ID', 'UserId', 'int', CreoleTypes::INTEGER, 'user', 'ID', true, null);

		$tMap->addForeignKey('ANSWER_ID', 'AnswerId', 'int', CreoleTypes::INTEGER, 'answer', 'ID', true, null);

		$tMap->addColumn('SCORE', 'Score', 'string', CreoleTypes::VARCHAR, false, 2000);

		$tMap->addColumn('CREATED_AT', 'CreatedAt', 'int', CreoleTypes::TIMESTAMP, true, null);

	} 
} 