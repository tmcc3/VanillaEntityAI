<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI\entity\hostile;

use jasonwynn10\VanillaEntityAI\entity\CreatureBase;
use jasonwynn10\VanillaEntityAI\entity\Linkable;
use pocketmine\entity\Living;
use pocketmine\entity\Monster;
use pocketmine\level\Position;
use pocketmine\nbt\tag\CompoundTag;

class Shulker extends Monster implements CustomMonster {
	public const NETWORK_ID = self::SHULKER;
	public $width = 1.0;
	public $height = 1.0;
	/** @var Position|null */
	protected $target;

	public function initEntity(): void {
		parent::initEntity(); // TODO: Change the autogenerated stub
	}

	/**
	 * @param int $tickDiff
	 *
	 * @return bool
	 */
	public function entityBaseTick(int $tickDiff = 1): bool {
		return parent::entityBaseTick($tickDiff); // TODO: Change the autogenerated stub
	}

	/**
	 * @return array
	 */
	public function getDrops(): array {
		return parent::getDrops(); // TODO: Change the autogenerated stub
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return "Shulker";
	}

	/**
	 * @return Position|null
	 */
	public function getTarget(): ?Position {
		return $this->target;
	}

	/**
	 * @param Position $spawnPos
	 * @param CompoundTag|null $spawnData
	 *
	 * @return null|Living
	 */
	public static function spawnMob(Position $spawnPos, ?CompoundTag $spawnData = null) : ?Living {
		// TODO: Implement spawnMob() method.
	}

	/**
	 * @return Linkable|null
	 */
	public function getLink() : ?Linkable {
		// TODO: Implement getLink() method.
	}

	/**
	 * @param Linkable $entity
	 */
	public function setLink(Linkable $entity) {
		// TODO: Implement setLink() method.
	}

	/**
	 * @return float
	 */
	public function getSpeed(): float {
		// TODO: Implement getSpeed() method.
	}

	/**
	 * @param float $speed
	 *
	 * @return CreatureBase
	 */
	public function setSpeed(float $speed) {
		// TODO: Implement setSpeed() method.
	}
}