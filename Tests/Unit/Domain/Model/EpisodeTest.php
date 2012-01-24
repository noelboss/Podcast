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
 * Test case for class Tx_Podcast_Domain_Model_Episode.
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
class Tx_Podcast_Domain_Model_EpisodeTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_Podcast_Domain_Model_Episode
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_Podcast_Domain_Model_Episode();
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
	public function getFileReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setFileForStringSetsFile() { 
		$this->fixture->setFile('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getFile()
		);
	}
	
	/**
	 * @test
	 */
	public function getPublicationDateReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setPublicationDateForDateTimeSetsPublicationDate() { }
	
	/**
	 * @test
	 */
	public function getDurationReturnsInitialValueForDateTime() { }

	/**
	 * @test
	 */
	public function setDurationForDateTimeSetsDuration() { }
	
	/**
	 * @test
	 */
	public function getMimeReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setMimeForStringSetsMime() { 
		$this->fixture->setMime('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getMime()
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
	
}
?>