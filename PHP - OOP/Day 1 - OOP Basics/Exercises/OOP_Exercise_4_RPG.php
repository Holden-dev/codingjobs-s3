<?php 

/* 

	Imagine a Role-Playing Game.

	Each character has:
		> A name
		> Health points (default 100)
		> Points of attack (default 10)
		> Defense points (default 5)
		> A war-cry (default "Attaaaaaack!")
		> There are several types of characters: Humans, Orcs and Elves.

	-- Step 1 - 20 Minutes :

	Create a Character class.
	This class will implement all attributes and methods common to the characters.

	Set up different type of character. You must be able to create Elves, Orcs or Humans.
	Example : 
	$elf = new Character('Legolas', 'Elf');
	$orc = new Character('John', 'Orc');

	-- Step 2 - 10 min :

	Orcs are not understood by anyone.
	Their war cry is now: "wwouogrouroulou mlll !!"

	-- Step 3 - 20min :

	There are several types of equipment: armor, sword, others (you can add as many as you want).

	Each equipment is designated by a name.
	Equipment also gives a special bonus.

	For example: an armor can give +5 in defense, a +3 sword in attack.
	There is even some object that gives +10 in attack but decreases defense.

	Create an Equipment class.
	This class will implement all the attributes and methods common to the devices.

	Set up different equipments. You must be able to create multiple equipments.
	(I leave you free to your imagination for the creation of weapon and specific power ....)
	For example :
	$sword = new equipment("Death Sword", "Sword", 10, 0, 0); // 10 atk bonus, 0 def bonus, 0 life bonus;
	$jewel = new equipment("Grace Necklace", "Jewelry", 0, 0, 5); // 0 atk bonus, 0 def bonus, 5 life bonus;
	$bestshield = new equipment("BDG", "Shield", 0, 10, 0); // 0 atk bonus, 10 def bonus, 0 life bonus;

	-- Step 4 - 30 min :
	
	A character can now hold an equipment.
	You have to change the Character class and add a new property : $equipment;

	For now, the character can hold only one equipment at a time.
	You can add/remove/display the equipment for a character (create a method for each action)

	-- Step 5 - BONUUSSSS - 30 min :

	A character can now hold many equipments.
	It's actually an 'inventory' of equipments.
	Change the type of $equipment => It's now an array.

	A character may have several equipments but:
	- It can only be equipped with 4 objects in total.
	- It can only be equipped with 2 swords at a time.
	- He can only wear one armor.

	Change your function to 'add'/'remove'/'display' an equipement.
	Now it will add/remove/display to the inventory.







