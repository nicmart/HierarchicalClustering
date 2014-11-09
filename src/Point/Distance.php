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


interface Distance
{
    /**
     * Distance between two points
     *
     * @param $point1
     * @param $point2
     * @return float
     */
    public function __invoke($point1, $point2);
} 