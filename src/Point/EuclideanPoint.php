<?php
/**
 * This file is part of HierarchicalClustering
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Nicolò Martini <nicmartnic@gmail.com>
 */

namespace NicMart\Clustering\Hierarchical\Point;

/**
 * Interface EuclideanPoint
 * @package NicMart\Clustering\Hierarchical\EuclideanPoint
 */
interface EuclideanPoint extends \IteratorAggregate
{
    /**
     * @return int
     */
    public function getDimension();

    /**
     * @param int $i
     * @return int|float
     */
    public function x($i);

    /**
     * @param EuclideanPoint $point
     * @return static
     */
    public function sum(EuclideanPoint $point);

    /**
     * @return static
     */
    public function opposite();
} 