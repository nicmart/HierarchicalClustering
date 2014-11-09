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
 * A general Lp norm
 *
 * Class LpNorm
 * @package NicMart\Clustering\Hierarchical\Point
 */
class LpNorm implements Norm
{
    private $p;

    /**
     * @param int $p
     */
    public function __construct($p = 2)
    {
        $this->p = 2;
    }

    /**
     * @param EuclideanPoint $p
     * @return float
     */
    public function __invoke(EuclideanPoint $p)
    {
        if ($p == INF) {
            return $this->infinityNorm($p);
        }

        $sum = 0;

        foreach ($p as $coordinate) {
            $sum += pow(abs($coordinate), $this->p);
        }

        return pow($sum, 1/$this->p);
    }

    /**
     * @param EuclideanPoint $p
     * @return number
     */
    private function infinityNorm(EuclideanPoint $p)
    {
        $max = -INF;

        foreach ($p as $coordinate) {
            if (abs($coordinate) > $max) {
                $max = abs($coordinate);
            }
        }

        return $max;
    }
} 