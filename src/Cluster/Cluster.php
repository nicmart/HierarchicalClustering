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
 * Here I really miss generics. To mantain generality of the interface, I can't
 * type-hint methods with the EuclideanPoint type.
 *
 * Interface Cluster
 * @package NicMart\Clustering\Hierarchical
 */
interface Cluster
{
    /**
     * Get all the points of the cluster
     *
     * @return mixed[]
     */
    public function getPoints();

    /**
     * Add a point to the cluster
     *
     * @param $point
     * @return $this
     */
    public function addPoint($point);

    /**
     * Returns the total number of points contained in the cluster
     *
     * @return int
     */
    public function getCount();

    /**
     * Returns a new cluster which is the union of the current one and the passed one
     *
     * @param Cluster $that
     * @return Cluster
     */
    public function merge(Cluster $that);
} 