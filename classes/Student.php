<?php

// si class ay isang template, hindi mo sia mgagamit direclty sa page mo, unless 'static' ung visibility
// ng mga properties and methods mo, ang way pra maaccess ung class ay gumwa ng object, ang object, blueprint sia ng class, meaning, gamit ung object, maaccess mo na si class, lahat ng methods and properties
class Student {

	/*
	 * '$firstName' tawag ay properties, pag nsa loob ka na ng class, hindi na variable
	 * ang tawag sa knia, kaya iba na ang way pra tawagin sia
	 * 'public', visibility ang tawag, isset mo kung anong access ang iggranted mo sa properties mo
	 * 'public', 'private', 'protected', 'const', 'static'
	 */
	public $firstName;
	public $lastName;

	/*
	 * 'public function __construct()', contructor kung tawagin yam built in na sa php ung __construct name
	 * automatic tong ntatawag once naload ung class, ginagamit to mdalas pag may iinitialize kang properties
	 * '($firstName, $lastName)' paramenters nman yan, naghohold yan ng mga data na lalagyan mo, ndi nman mandatory gumamit ng constructor and mga parameters depende sa pag gagamitan mo
	 */
	public function __construct($firstName, $lastName){
		/*
		 * '$this' eto madalas mgagamit mo pag nsa loob ka ng class, gnto ang way para mkuha mo ang mga
		 * properties at methods mo
		 */

		/*
		 * ilalagay ntin ng value ung fistName at lastName galing sa parameters
		 */

		$this->firstName = $firstName;
		$this->lastName = $lastName;
	}

	/* 'public function getFullName()' methods naman ang tawag dito, eto na ung kinocall mo once na my kailangan kng gawin sa loob ng class
	 *
	 */
	public function getFullName(){
		return $this->firstName . ' ' . $this->lastName;
	}
}