<?php
/**
 * This file is part of HierarchicalClustering
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author Nicolò Martini <nicmartnic@gmail.com>
 */

namespace NicMart\Clustering\Hierarchical\Cluster;

/**
 * Class ClusterTrait
 * @package NicMart\Clustering\Hierarchical
 */
trait ClusterTrait
{
    /**
     * @var array
     */
    private $points = [];

    /**
     * @param $point
     * @return $this
     */
    public function addPoint($point)
    {
        $this->points[] = $point;

        return $this;
    }

    /**
     * @return array
     */
    public function getPoints()
    {
        return $this->points;
    }

    /**
     * @return int
     */
    public function getCount()
    {
        return count($this->points);
    }
} 