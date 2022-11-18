<?php 

/*

	Continue/Using the RPG exercise.
	Remember our Characters... Actually, they are Adventurers !!!
	
	Step 1 : 
		Show'em some respect and rename your class.

	Step 2 :
	
	An adventurer can belong to one of these races : Elf, Orc, Human.

	Those adventurers have many actions possible :
		- They can attack
		function attack($opponent)
		By default, attack point are removed from opponent's health points
		
		- They can use a magical power
		function usePower()
		They can use their power only once.
	
	Each race has it's own way of doing those actions.

	For the Orcs :
		- They attack with rage. If they attack an elf, which has no shield, Elf loose 50 life points.
		- Orc can use his power to become almost invincible. +20 defense points but -10 attack.
	
	For the Humans :
		- A Human attack normally. But when he only has his fists (no weapons), he get a +3 attack bonus.
		- Humans are blessed from god. They use their power to take +20 life points.

	For the Elves :
		- They attack with dexterity. +2 bonus attack points for each sword an elf carry.
		- Elves use power to take +3 of defense.


	Create a class for each race : Orc / Elf / Human.
	Of course, they will inherite from Adventurer class.

	For the 'relous' : you can change the game is designed.
*/
