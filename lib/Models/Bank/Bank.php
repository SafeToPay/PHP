<?php

namespace Models\Bank;

/**
 * Class Bank
 *
 * @package Safe2Pay\Models
 */
class Bank implements \JsonSerializable
{
	private $Id;
	private $Code;
	private $Name;

	function __construct($Code)
	{
		$this->Code = $Code;
	}

	public function getId()
	{
		return $this->Id;
	}

	public function setId($Id)
	{
		$this->Id = $Id;
	}

	public function getCode()
	{
		return $this->Code;
	}

	public function setCode($Code)
	{
		$this->Code = $Code;
	}

	public function getName()
	{
		return $this->Name;
	}

	public function setName($Name)
	{
		$this->Name = $Name;
	}

	public function JsonSerialize()
	{
		return [
			'Code' => (string) $this->Code
		];
	}
}
