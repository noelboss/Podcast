<?php

/*                                                                        *
 * This script belongs to the FLOW3 package "Fluid".                      *
 *                                                                        *
 * It is free software; you can redistribute it and/or modify it under    *
 * the terms of the GNU Lesser General Public License as published by the *
 * Free Software Foundation, either version 3 of the License, or (at your *
 * option) any later version.                                             *
 *                                                                        *
 * This script is distributed in the hope that it will be useful, but     *
 * WITHOUT ANY WARRANTY; without even the implied warranty of MERCHAN-    *
 * TABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the GNU Lesser       *
 * General Public License for more details.                               *
 *                                                                        *
 * You should have received a copy of the GNU Lesser General Public       *
 * License along with the script.                                         *
 * If not, see http://www.gnu.org/licenses/lgpl.html                      *
 *                                                                        *
 * The TYPO3 project - inspiring people to share!                         *
 *                                                                        */

/**
 * Extends the normal for view helper with sorting.
 * If sort is "true" then the elements will be sorted
 * If sort is the name of a member of the object then the elements will be sorted respecting this member variable
 */
class Tx_Podcast_ViewHelpers_ForViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {


    private $sortVariable = "";

    /**
     * Compares two elements according to the specified member variable
     * @param $a
     * @param $b
     * @return int
     */
    public function cmp($a, $b)
        {
            $element = $this->sortVariable;
            $method = "get".ucfirst($element);
            $a = call_user_func(array($a, $method));
            $b = call_user_func(array($b, $method));
            if (a && b) {
                if ($a == $b) {
                    return 0;
                }
                return ($a < $b) ? -1 : 1;
            }
            return 0;
        }

	/**
	 * Iterates through elements of $each and renders child nodes
	 *
	 * @param array $each The array or Tx_Extbase_Persistence_ObjectStorage to iterated over
	 * @param string $as The name of the iteration variable
	 * @param string $key The name of the variable to store the current array key
	 * @param boolean $reverse If enabled, the iterator will start with the last element and proceed reversely
	 * @param string $iteration The name of the variable to store iteration information (index, cycle, isFirst, isLast, isEven, isOdd)
	 * @param string $sort If set to true the array will be sorted
	 * @return string Rendered string
	 * @author Sebastian Kurfürst <sebastian@typo3.org>
	 * @author Bastian Waidelich <bastian@typo3.org>
	 * @author Robert Lemke <robert@typo3.org>
	 * @api
	 */
	public function render($each, $as, $key = '', $reverse = FALSE, $iteration = NULL, $sort = FALSE) {
		$output = '';
		if ($each === NULL) {
			return '';
		}
		if (is_object($each) && !$each instanceof Traversable) {
			throw new Tx_Fluid_Core_ViewHelper_Exception('ForViewHelper only supports arrays and objects implementing Traversable interface' , 1248728393);
		}

		if ($reverse === TRUE) {
				// array_reverse only supports arrays
			if (is_object($each)) {
				$each = iterator_to_array($each);
			}
			$each = array_reverse($each);
		}
		if ($sort !== FALSE) {
			if (is_object($each)) {
				$each = iterator_to_array($each);
			}
            if (strtolower($sort) == "true") {
                sort($each);
            }
            else {
                $this->sortVariable = $sort;
                usort($each, array($this, 'cmp'));
            }
		}
		$iterationData = array(
			'index' => 0,
			'cycle' => 1,
			'total' => count($each)
		);

		$output = '';
		foreach ($each as $keyValue => $singleElement) {
			$this->templateVariableContainer->add($as, $singleElement);
			if ($key !== '') {
				$this->templateVariableContainer->add($key, $keyValue);
			}
			if ($iteration !== NULL) {
				$iterationData['isFirst'] = $iterationData['cycle'] === 1;
				$iterationData['isLast'] = $iterationData['cycle'] === $iterationData['total'];
				$iterationData['isEven'] = $iterationData['cycle'] % 2 === 0;
				$iterationData['isOdd'] = !$iterationData['isEven'];
				$this->templateVariableContainer->add($iteration, $iterationData);
				$iterationData['index'] ++;
				$iterationData['cycle'] ++;
			}
			$output .= $this->renderChildren();
			$this->templateVariableContainer->remove($as);
			if ($key !== '') {
				$this->templateVariableContainer->remove($key);
			}
			if ($iteration !== NULL) {
				$this->templateVariableContainer->remove($iteration);
			}
		}
		return $output;
	}
}

?>