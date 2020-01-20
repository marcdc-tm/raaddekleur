<?php

class Kleur {
	const ROOD = 0;
	const GROEN = 1;
	const BLAUW = 2;
	
	public static function Random() {
		return self::Get(mt_rand(0, 2));
	}
	
	public static function Get($nr) {
		switch ($nr) {
			case 0:
				return array("nr" => 0, "id" => "ROOD", "kleur" => "red");
			case 1:
				return array("nr" => 1, "id" => "GROEN", "kleur" => "green");
			case 2:
				return array("nr" => 2, "id" => "BLAUW", "kleur" => "blue");
		}
	}
}