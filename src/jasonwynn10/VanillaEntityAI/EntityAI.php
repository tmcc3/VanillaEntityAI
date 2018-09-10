<?php
declare(strict_types=1);
namespace jasonwynn10\VanillaEntityAI;

use jasonwynn10\VanillaEntityAI\entity\hostile\Blaze;
use jasonwynn10\VanillaEntityAI\entity\hostile\CaveSpider;
use jasonwynn10\VanillaEntityAI\entity\hostile\Creeper;
use jasonwynn10\VanillaEntityAI\entity\hostile\ElderGuardian;
use jasonwynn10\VanillaEntityAI\entity\hostile\EnderDragon;
use jasonwynn10\VanillaEntityAI\entity\hostile\Enderman;
use jasonwynn10\VanillaEntityAI\entity\hostile\Endermite;
use jasonwynn10\VanillaEntityAI\entity\hostile\Evoker;
use jasonwynn10\VanillaEntityAI\entity\hostile\Ghast;
use jasonwynn10\VanillaEntityAI\entity\hostile\Guardian;
use jasonwynn10\VanillaEntityAI\entity\hostile\Husk;
use jasonwynn10\VanillaEntityAI\entity\hostile\MagmaCube;
use jasonwynn10\VanillaEntityAI\entity\hostile\Shulker;
use jasonwynn10\VanillaEntityAI\entity\hostile\Silverfish;
use jasonwynn10\VanillaEntityAI\entity\hostile\Skeleton;
use jasonwynn10\VanillaEntityAI\entity\hostile\Slime;
use jasonwynn10\VanillaEntityAI\entity\hostile\Spider;
use jasonwynn10\VanillaEntityAI\entity\hostile\Stray;
use jasonwynn10\VanillaEntityAI\entity\hostile\Vex;
use jasonwynn10\VanillaEntityAI\entity\hostile\Vindicator;
use jasonwynn10\VanillaEntityAI\entity\hostile\Witch;
use jasonwynn10\VanillaEntityAI\entity\hostile\Wither;
use jasonwynn10\VanillaEntityAI\entity\hostile\WitherSkeleton;
use jasonwynn10\VanillaEntityAI\entity\hostile\Zombie;
use jasonwynn10\VanillaEntityAI\entity\hostile\ZombiePigman;
use jasonwynn10\VanillaEntityAI\entity\hostile\ZombieVillager;
use jasonwynn10\VanillaEntityAI\entity\neutral\AreaEffectCloud;
use jasonwynn10\VanillaEntityAI\entity\neutral\ArmorStand;
use jasonwynn10\VanillaEntityAI\entity\neutral\Arrow;
use jasonwynn10\VanillaEntityAI\entity\neutral\Boat;
use jasonwynn10\VanillaEntityAI\entity\neutral\ChestMinecart;
use jasonwynn10\VanillaEntityAI\entity\neutral\CommandBlockMinecart;
use jasonwynn10\VanillaEntityAI\entity\neutral\DangerousWitherSkull;
use jasonwynn10\VanillaEntityAI\entity\neutral\DragonFireball;
use jasonwynn10\VanillaEntityAI\entity\neutral\Egg;
use jasonwynn10\VanillaEntityAI\entity\neutral\EnderCrystal;
use jasonwynn10\VanillaEntityAI\entity\neutral\EnderPearl;
use jasonwynn10\VanillaEntityAI\entity\neutral\EvocationFang;
use jasonwynn10\VanillaEntityAI\entity\neutral\ExperienceBottle;
use jasonwynn10\VanillaEntityAI\entity\neutral\ExperienceOrb;
use jasonwynn10\VanillaEntityAI\entity\neutral\EyeOfEnder;
use jasonwynn10\VanillaEntityAI\entity\neutral\FallingBlock;
use jasonwynn10\VanillaEntityAI\entity\neutral\Fireball;
use jasonwynn10\VanillaEntityAI\entity\neutral\FireworksRocket;
use jasonwynn10\VanillaEntityAI\entity\neutral\FishingHook;
use jasonwynn10\VanillaEntityAI\entity\neutral\HopperMinecart;
use jasonwynn10\VanillaEntityAI\entity\neutral\Item;
use jasonwynn10\VanillaEntityAI\entity\neutral\LargeFireball;
use jasonwynn10\VanillaEntityAI\entity\neutral\LeashKnot;
use jasonwynn10\VanillaEntityAI\entity\neutral\Lightning;
use jasonwynn10\VanillaEntityAI\entity\neutral\LingeringPotion;
use jasonwynn10\VanillaEntityAI\entity\neutral\LlamaSpit;
use jasonwynn10\VanillaEntityAI\entity\neutral\Minecart;
use jasonwynn10\VanillaEntityAI\entity\neutral\MovingBlock;
use jasonwynn10\VanillaEntityAI\entity\neutral\Painting;
use jasonwynn10\VanillaEntityAI\entity\neutral\ShulkerBullet;
use jasonwynn10\VanillaEntityAI\entity\neutral\Snowball;
use jasonwynn10\VanillaEntityAI\entity\neutral\SplashPotion;
use jasonwynn10\VanillaEntityAI\entity\neutral\TNT;
use jasonwynn10\VanillaEntityAI\entity\neutral\TNTMinecart;
use jasonwynn10\VanillaEntityAI\entity\neutral\Trident;
use jasonwynn10\VanillaEntityAI\entity\neutral\TripodCamera;
use jasonwynn10\VanillaEntityAI\entity\neutral\WitherSkull;
use jasonwynn10\VanillaEntityAI\entity\passive\Bat;
use jasonwynn10\VanillaEntityAI\entity\passive\Chicken;
use jasonwynn10\VanillaEntityAI\entity\passive\Cow;
use jasonwynn10\VanillaEntityAI\entity\passive\Dolphin;
use jasonwynn10\VanillaEntityAI\entity\passive\Donkey;
use jasonwynn10\VanillaEntityAI\entity\passive\Horse;
use jasonwynn10\VanillaEntityAI\entity\passive\Llama;
use jasonwynn10\VanillaEntityAI\entity\passive\Mooshroom;
use jasonwynn10\VanillaEntityAI\entity\passive\Mule;
use jasonwynn10\VanillaEntityAI\entity\passive\Ocelot;
use jasonwynn10\VanillaEntityAI\entity\passive\Parrot;
use jasonwynn10\VanillaEntityAI\entity\passive\Pig;
use jasonwynn10\VanillaEntityAI\entity\passive\Rabbit;
use jasonwynn10\VanillaEntityAI\entity\passive\Sheep;
use jasonwynn10\VanillaEntityAI\entity\passive\SkeletonHorse;
use jasonwynn10\VanillaEntityAI\entity\passive\Squid;
use jasonwynn10\VanillaEntityAI\entity\passive\Villager;
use jasonwynn10\VanillaEntityAI\entity\passive\ZombieHorse;
use jasonwynn10\VanillaEntityAI\entity\passiveaggressive\IronGolem;
use jasonwynn10\VanillaEntityAI\entity\passiveaggressive\PolarBear;
use jasonwynn10\VanillaEntityAI\entity\passiveaggressive\SnowGolem;
use jasonwynn10\VanillaEntityAI\entity\passiveaggressive\Wolf;
use jasonwynn10\VanillaEntityAI\task\DespawnTask;
use jasonwynn10\VanillaEntityAI\task\HostileSpawnTask;
use jasonwynn10\VanillaEntityAI\task\InhabitedChunkCounter;
use jasonwynn10\VanillaEntityAI\task\PassiveSpawnTask;
use pocketmine\entity\Entity;
use pocketmine\item\enchantment\EnchantmentInstance;
use pocketmine\level\format\Chunk;
use pocketmine\level\Level;
use pocketmine\plugin\PluginBase;
use spoondetector\SpoonDetector;

class EntityAI extends PluginBase {

	public static $entities = [
		Chicken::class => ['Chicken', 'minecraft:chicken'],
		Cow::class => ['Cow', 'minecraft:cow'],
		Pig::class => ['Pig', 'minecraft:pig'],
		Sheep::class => ['sheep', 'minecraft:sheep'],
		Wolf::class => ['Wolf', 'minecraft:wolf'],
		Villager::class => ['Villager', 'minecraft:villager'],
		Mooshroom::class => ['Mooshroom', 'minecraft:mooshroom'],
		Squid::class => ['Squid', 'minecraft:squid'],
		Rabbit::class => ['Rabbit', 'minecraft:rabbit'],
		Bat::class => ['Bat', 'minecraft:bat'],
		IronGolem::class => ['IronGolem', 'minecraft:irongolem'],
		SnowGolem::class => ['SnowGolem', 'minecraft:snowgolem'],
		Ocelot::class => ['Ocelot', 'minecraft:ocelot'],
		Horse::class => ['Horse', 'minecraft:horse'],
		Donkey::class => ['Donkey', 'minecraft:donkey'],
		Mule::class => ['Mule', 'minecraft:mule'],
		SkeletonHorse::class => ['SkeletonHorse', 'minecraft:skeletonhorse'],
		ZombieHorse::class => ['ZombieHorse', 'minecraft:zombiehorse'],
		PolarBear::class => ['PolarBear', 'minecraft:polarbear'],
		Llama::class => ['Llama', 'minecraft:llama'],
		Parrot::class => ['Parrot', 'minecraft:parrot'],
		Dolphin::class => ['Dolphin', 'minecraft:dolphin'],
		Zombie::class => ['Zombie', 'minecraft:zombie'],
		Creeper::class => ['Creeper', 'minecraft:creeper'],
		Skeleton::class => ['Skeleton', 'minecraft:skeleton'],
		Spider::class => ['Spider', 'minecraft:spider'],
		ZombiePigman::class => ['PigZombie', 'minecraft:pigzombie'],
		Slime::class => ['Slime', 'minecraft:slime'],
		Enderman::class => ['Enderman', 'minecraft:enderman'],
		Silverfish::class => ['Silverfish', 'minecraft:silverfish'],
		CaveSpider::class => ['CaveSpider', 'minecraft:cavespider'],
		Ghast::class => ['Ghast', 'minecraft:ghast'],
		MagmaCube::class => ['MagmaCube', 'minecraft:magmacube'],
		Blaze::class => ['Blaze', 'minecraft:blaze'],
		ZombieVillager::class => ['ZombieVillager', 'minecraft:zombievillager'],
		Witch::class => ['Witch', 'minecraft:witch'],
		Stray::class => ['Stray', 'minecraft:stray'],
		Husk::class => ['Husk', 'minecraft:husk'],
		WitherSkeleton::class => ['WitherSkeleton', 'minecraft:witherskeleton'],
		Guardian::class => ['Guardian', 'minecraft:guardian'],
		ElderGuardian::class => ['ElderGuardian', 'minecraft:elderguardian'],
		//NPC
		Wither::class => ['Wither', 'minecraft:wither'],
		EnderDragon::class => ['EnderDragon', 'minecraft:enderdragon'],
		Shulker::class => ['Shulker', 'minecraft:shulker'],
		Endermite::class => ['Endermite', 'minecraft:endermite'],
		//Learn to code mascot
		Vindicator::class => ['Vindicator', 'minecraft:vindicator'],
		//
		//ArmorStand::class => [],
		//TripodCamera::class => [],
		// player
		Item::class => ['Item', 'minecraft:item'],
		//TNT::class => [],
		//FallingBlock::class => [],
		//MovingBlock::class => [],
		//ExperienceBottle::class => [],
		//ExperienceOrb::class => [],
		//EyeOfEnder::class => [],
		//EnderCrystal::class => ['EnderCrystal', 'minecraft:ender_crystal'],
		//FireworksRocket::class => ['FireworksRocket',	'minecraft:fireworks_rocket'],
		//Trident::class => ['Thrown Trident', 'minecraft:thrown_trident'],
		//
		//ShulkerBullet::class => [],
		//FishingHook::class => ['FishingHook', 'minecraft:fishinghook'],
		//chalkboard
		//DragonFireball::class => [],
		//Arrow::class => [],
		//Snowball::class => [],
		//Egg::class => [],
		//Painting::class => [],
		//Minecart::class => ['Minecart', 'minecraft:minecart'],
		//LargeFireball::class => [],
		//SplashPotion::class => [],
		//EnderPearl::class => [],
		//LeashKnot::class => [],
		//WitherSkull::class => [],
		//Boat::class => [],
		//DangerousWitherSkull::class => [],
		//Lightning::class => [],
		//Fireball::class => [],
		//AreaEffectCloud::class => [],
		//HopperMinecart::class => [],
		//TNTMinecart::class => [],
		//ChestMinecart::class => [],
		//
		//CommandBlockMinecart::class => [],
		//LingeringPotion::class => [],
		//LlamaSpit::class => [],
		//EvocationFang::class => [],
		//Evoker::class => [],
		//Vex::class => [],
		//ice bomb
		//balloon
		//pufferfish
		//salmon
		//drowned
		//tropical fish
		//fish
	];

	private static $instance;

	/**
	 * @return self
	 */
	public static function getInstance() : self {
		return self::$instance;
	}

	public function onLoad() : void {
		self::$instance = $this;
		foreach(self::$entities as $class => $saveNames) {
			Entity::registerEntity($class, true, $saveNames);
		}
		// TODO: find a way to save entities across server restarts, but unload with chunks in-game
	}

	public function onEnable() : void {
		SpoonDetector::printSpoon($this, "spoon.txt");
		new EntityListener($this);
		if($this->getServer()->getConfigBool("spawn-mobs", true))
			$this->getScheduler()->scheduleRepeatingTask(new HostileSpawnTask(), 1);
		if($this->getServer()->getConfigBool("spawn-animals", true))
			$this->getScheduler()->scheduleRepeatingTask(new PassiveSpawnTask(), 20);
		$this->getScheduler()->scheduleRepeatingTask(new DespawnTask(), 20);
		$this->getScheduler()->scheduleRepeatingTask(new InhabitedChunkCounter(), 20 * 60 * 60);
		// TODO: mob crush limit task?
	}

	/**
	 * @param Level $level
	 * @param Chunk $chunk
	 *
	 * @return float
	 */
	public function getRegionalDifficulty(Level $level, Chunk $chunk) : float {
		$totalPlayTime = 0;
		foreach($level->getPlayers() as $player) {
			$time = (microtime(true) - $player->creationTime);
			$hours = 0;
			if($time >= 3600) {
				$hours = floor(($time % (3600 * 24)) / 3600);
			}
			$totalPlayTime += $hours;
		}

		if ($totalPlayTime > 21)
			$totalTimeFactor = 0.25;
		elseif($totalPlayTime < 20)
			$totalTimeFactor = 0;
		else
			$totalTimeFactor = (($totalPlayTime * 20 * 60 * 60) - 72000 ) / 5760000;

		$chunkInhabitedTime = isset($chunk->inhabitedTime) ? $chunk->inhabitedTime : 0; // TODO: how long have players been in a specific chunk? increase count each hour, 1 * # of players

		if($chunkInhabitedTime > 50)
			$chunkFactor = 1;
		else
			$chunkFactor = ($chunkInhabitedTime * 20 * 60 * 60) / 3600000;

		if($level->getDifficulty() !== Level::DIFFICULTY_HARD)
			$chunkFactor *= 3/4;

		$phaseTime = $level->getTime() / Level::TIME_FULL;
		while($phaseTime > 5)
			$phaseTime-=5; // TODO: better method
		$moonPhase = 1.0;
		switch($phaseTime) {
			case 1:
				$moonPhase = 1.0;
				break;
			case 2:
				$moonPhase = 0.75;
				break;
			case 3:
				$moonPhase = 0.5;
				break;
			case 4:
				$moonPhase = 0.25;
				break;
			case 5:
				$moonPhase = 0.0;
				break;
		}

		if($moonPhase / 4 > $totalTimeFactor)
			$chunkFactor += $totalTimeFactor;
		else
			$chunkFactor += $moonPhase / 4;

		if($level->getDifficulty() === Level::DIFFICULTY_EASY)
			$chunkFactor /= 2;

		$regionalDifficulty = 0.75 + $totalTimeFactor + $chunkFactor;

		if($level->getDifficulty() === Level::DIFFICULTY_NORMAL)
			$regionalDifficulty *= 2;
		if ($level->getDifficulty() === Level::DIFFICULTY_HARD)
			$regionalDifficulty *= 3;

		return $regionalDifficulty;
	}

	/**
	 * @param Level $level
	 * @param Chunk $chunk
	 *
	 * @return float
	 */
	public function getClumpedRegionalDifficulty(Level $level, Chunk $chunk) : float {
		$regionalDifficulty = $this->getRegionalDifficulty($level, $chunk);
		if ( $regionalDifficulty < 2.0 ) {
			$result = 0.0;
		} else if ( $regionalDifficulty > 4.0 ) {
			$result = 1.0;
		} else {
			$result = ( $regionalDifficulty - 2.0 ) / 2.0;
		}
		return $result;
	}

	/**
	 * @param int $level
	 *
	 * @return EnchantmentInstance
	 */
	public function getRandomEnchantment(int $level) : EnchantmentInstance {
		// TODO: vanilla enchantment math
	}
}