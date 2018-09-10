<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI\entity\hostile;

use pocketmine\entity\Monster;
use pocketmine\level\Position;

class Spider extends Monster implements CustomMonster {
	public const NETWORK_ID = self::SPIDER;

	public $width = 2.062;
	public $height = 0.781;
	/** @var Position|null  */
	protected $target;

	public function initEntity() : void {
		parent::initEntity(); // TODO: Change the autogenerated stub
	}

	/**
	 * @param int $tickDiff
	 *
	 * @return bool
	 */
	public function entityBaseTick(int $tickDiff = 1) : bool {
		return parent::entityBaseTick($tickDiff); // TODO: Change the autogenerated stub
	}

	/**
	 * @return array
	 */
	public function getDrops() : array {
		return parent::getDrops(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	public function getName() : string {
		return "Spider";
	}

	/**
	 * @return Position|null
	 */
	public function getTarget() : ?Position {
		return $this->target;
	}
}