<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2012 Noël Bossart <n dot company at me dot com>, noelboss.ch
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
 * Test case for class Tx_Podcast_Domain_Model_Podcast.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage Podcast
 *
 * @author Noël Bossart <n dot company at me dot com>
 */
class Tx_Podcast_Domain_Model_PodcastTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Podcast_Domain_Model_Podcast
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Podcast_Domain_Model_Podcast();
	}

	public function tearDown() {
		unset($this->fixture);
	}
	
	
	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() { 
		$this->fixture->setTitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getTitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getSubtitleReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setSubtitleForStringSetsSubtitle() { 
		$this->fixture->setSubtitle('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getSubtitle()
		);
	}
	
	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() { 
		$this->fixture->setDescription('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getDescription()
		);
	}
	
	/**
	 * @test
	 */
	public function getCopyrightReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCopyrightForStringSetsCopyright() { 
		$this->fixture->setCopyright('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCopyright()
		);
	}
	
	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() { 
		$this->fixture->setImage('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getImage()
		);
	}
	
	/**
	 * @test
	 */
	public function getCategoriesReturnsInitialValueForObjectStorageContainingTx_Podcast_Domain_Model_Category() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function setCategoriesForObjectStorageContainingTx_Podcast_Domain_Model_CategorySetsCategories() { 
		$category = new Tx_Podcast_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategories = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategories->attach($category);
		$this->fixture->setCategories($objectStorageHoldingExactlyOneCategories);

		$this->assertSame(
			$objectStorageHoldingExactlyOneCategories,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategories() {
		$category = new Tx_Podcast_Domain_Model_Category();
		$objectStorageHoldingExactlyOneCategory = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->fixture->addCategory($category);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneCategory,
			$this->fixture->getCategories()
		);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategories() {
		$category = new Tx_Podcast_Domain_Model_Category();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($category);
		$localObjectStorage->detach($category);
		$this->fixture->addCategory($category);
		$this->fixture->removeCategory($category);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getCategories()
		);
	}
	
	/**
	 * @test
	 */
	public function getEpisodesReturnsInitialValueForObjectStorageContainingTx_Podcast_Domain_Model_Episode() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getEpisodes()
		);
	}

	/**
	 * @test
	 */
	public function setEpisodesForObjectStorageContainingTx_Podcast_Domain_Model_EpisodeSetsEpisodes() { 
		$episode = new Tx_Podcast_Domain_Model_Episode();
		$objectStorageHoldingExactlyOneEpisodes = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneEpisodes->attach($episode);
		$this->fixture->setEpisodes($objectStorageHoldingExactlyOneEpisodes);

		$this->assertSame(
			$objectStorageHoldingExactlyOneEpisodes,
			$this->fixture->getEpisodes()
		);
	}
	
	/**
	 * @test
	 */
	public function addEpisodeToObjectStorageHoldingEpisodes() {
		$episode = new Tx_Podcast_Domain_Model_Episode();
		$objectStorageHoldingExactlyOneEpisode = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneEpisode->attach($episode);
		$this->fixture->addEpisode($episode);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneEpisode,
			$this->fixture->getEpisodes()
		);
	}

	/**
	 * @test
	 */
	public function removeEpisodeFromObjectStorageHoldingEpisodes() {
		$episode = new Tx_Podcast_Domain_Model_Episode();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($episode);
		$localObjectStorage->detach($episode);
		$this->fixture->addEpisode($episode);
		$this->fixture->removeEpisode($episode);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getEpisodes()
		);
	}
	
	/**
	 * @test
	 */
	public function getAuthorReturnsInitialValueForTx_Podcast_Domain_Model_Person() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getAuthor()
		);
	}

	/**
	 * @test
	 */
	public function setAuthorForTx_Podcast_Domain_Model_PersonSetsAuthor() { 
		$dummyObject = new Tx_Podcast_Domain_Model_Person();
		$this->fixture->setAuthor($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getAuthor()
		);
	}
	
	/**
	 * @test
	 */
	public function getTechnicalContactReturnsInitialValueForTx_Podcast_Domain_Model_Person() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getTechnicalContact()
		);
	}

	/**
	 * @test
	 */
	public function setTechnicalContactForTx_Podcast_Domain_Model_PersonSetsTechnicalContact() { 
		$dummyObject = new Tx_Podcast_Domain_Model_Person();
		$this->fixture->setTechnicalContact($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getTechnicalContact()
		);
	}
	
	/**
	 * @test
	 */
	public function getWebsiteReturnsInitialValueForTx_Podcast_Domain_Model_Website() { 
		$this->assertEquals(
			NULL,
			$this->fixture->getWebsite()
		);
	}

	/**
	 * @test
	 */
	public function setWebsiteForTx_Podcast_Domain_Model_WebsiteSetsWebsite() { 
		$dummyObject = new Tx_Podcast_Domain_Model_Website();
		$this->fixture->setWebsite($dummyObject);

		$this->assertSame(
			$dummyObject,
			$this->fixture->getWebsite()
		);
	}
	
}
?>