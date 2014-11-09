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

interface Norm
{
    /**
     * @param EuclideanPoint $p
     * @return float
     */
    public function __invoke(EuclideanPoint $p);
} 