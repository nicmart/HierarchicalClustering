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
 * Class NormedDistance
 * @package NicMart\Clustering\Hierarchical\Point
 */
class NormedDistance implements Distance
{
    /**
     * @var Norm
     */
    private $norm;

    /**
     * @param Norm $norm
     */
    public function __construct(Norm $norm)
    {
        $this->norm = $norm;
    }

    /**
     * Distance between two points
     *
     * @param $point1
     * @param $point2
     * @return float
     */
    public function __invoke($point1, $point2)
    {
        return $this->distance($point1, $point2);
    }

    /**
     * @param EuclideanPoint $p1
     * @param EuclideanPoint $p2
     * @return float
     */
    private function distance(EuclideanPoint $p1, EuclideanPoint $p2)
    {
        return $this->norm->__invoke($p1->sum($p2->opposite()));
    }
} 