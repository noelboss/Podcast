<?php
/***************************************************************
*  Copyright notice
*
*  (c) 2010 Noël Bossart <n dot company at me dot com>, noelboss.ch
*  			
*  All rights reserved
*
*  This script is part of the TYPO3 project. The TYPO3 project is
*  free software; you can redistribute it and/or modify
*  it under the terms of the GNU General Public License as published by
*  the Free Software Foundation; either version 2 of the License, or
*  (at your option) any later version.
*
*  The GNU General Public License can be found at
*  http://www.gnu.org/copyleft/gpl.html.
*
*  This script is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU General Public License for more details.
*
*  This copyright notice MUST APPEAR in all copies of the script!
***************************************************************/

/**
 * Testcase for the Podcast class
 */
class Tx_Podcast_Domain_Model_PodcastTest extends Tx_Extbase_BaseTestCase {
	
	/**
	 * @test
	 */
	public function anInstanceOfThePodcastCanBeConstructed() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast('Test Podcast');
		$this->assertEquals('Test Podcast', $podcast->getTitle());
	}

	/**
	 * @test
	 */
	public function theTitleOfThePodcastCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast('New Podcast');
		$podcast->setTitle('Test Podcast');
		$this->assertEquals('Test Podcast', $podcast->getTitle());
	}

	/**
	 * @test
	 */
	public function theDescriptionOfThePodcastCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$description = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.\nUt enim ad minim veniam, quis nostrud.";
		$podcast->setDescription($description);
		$this->assertEquals($description, $podcast->getDescription());
	}
	
	/**
	 * @test
	 */
	public function anImageOfThePodcastCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$imageName = 'logo.gif';
		$podcast->setImage($imageName);
		$this->assertEquals($imageName, $podcast->getImage());
	}     
	
	/**
	 * @test
	 */
	public function theEpisodesAreInitializedAsEmptyObjectStorage() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast('New Podcast');
		$this->assertEquals('Tx_Extbase_Persistence_ObjectStorage', get_class($podcast->getEpisodes()));
		$this->assertEquals(0, count($podcast->getEpisodes()->toArray()));
	}        
	
	/**
	 * @test
	 */
	public function theEpisodesCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast('New Podcast');
		$mockObjectStorage = $this->getMock('Tx_Extbase_Persistence_ObjectStorage', array('contains'), array(), '', FALSE);
		$mockObjectStorage->expects($this->any())->method('contains')->with('foo')->will($this->returnValue(TRUE));		
		$podcast->setEpisodes($mockObjectStorage);
		$this->assertTrue($podcast->getEpisodes()->contains('foo'));
	}
	
	/**
	 * @test
	 */
	public function aEpisodeCanBeAdded() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast('New Podcast');
		$mockEpisode = $this->getMock('Tx_Podcast_Domain_Model_Episode');
		$podcast->addEpisode($mockEpisode);
		$this->assertTrue($podcast->getEpisodes()->contains($mockEpisode));
	}          
	
	/**
	 * @test
	 */
	public function aCategoriesCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$mockCategory = $this->getMock('Tx_Podcast_Domain_Model_Category');
		$podcast->setCategories($mockCategory);
		$this->assertEquals($mockCategory, $podcast->getCategories());
	}
	
	/**
	 * @test
	 */
	public function theAuthorCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$mockPerson = $this->getMock('Tx_Podcast_Domain_Model_Person');
		$podcast->setAuthor($mockPerson);
		$this->assertEquals($mockPerson, $podcast->getAuthor());
	}
	
	/**
	 * @test
	 */
	public function theTechnicalContactCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$mockPerson = $this->getMock('Tx_Podcast_Domain_Model_Person');
		$podcast->setTechnicalContact($mockPerson);
		$this->assertEquals($mockPerson, $podcast->getTechnicalContact());
	}
	
	/**
	 * @test
	 */
	public function theWebsiteCanBeSet() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$mockWebsite = $this->getMock('Tx_Podcast_Domain_Model_Website');
		$podcast->setWebsite($mockWebsite);
		$this->assertEquals($mockWebsite, $podcast->getWebsite());
	}
	
	/**
	 * @test
	 */
	public function canBeItunesOptimized() {
	    $podcast = new Tx_Podcast_Domain_Model_Podcast;
		$podcast->setItunes(1);
		$this->assertEquals(true, $podcast->getItunes());
	}  

}
?>