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


class Point2D implements EuclideanPoint
{
    use EuclideanPointTrait;

    /**
     * @param $x
     * @param $y
     */
    public function __construct($x, $y)
    {
        $this->setCoordinates([$x, $y]);
    }
} 