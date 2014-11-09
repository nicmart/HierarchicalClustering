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


use Iterator;

trait EuclideanPointTrait
{
    /**
     * @var \SplFixedArray
     */
    private $coordinates;

    /**
     * @return int
     */
    public function getDimension()
    {
        return $this->coordinates->getSize();
    }

    /**
     * @param int $i
     * @return int|float
     */
    public function x($i)
    {
        return $this->coordinates[$i - 1];
    }

    /**
     * @param EuclideanPoint $point
     * @return static
     */
    public function sum(EuclideanPoint $point)
    {
        $coordinates = [];

        foreach ($this->coordinates as $index => $coordinate) {
            $coordinates[$index] = $coordinate + $point->x($index);
        }

        return new static($coordinates);
    }

    /**
     * @return static
     */
    public function opposite()
    {
        $coordinates = [];

        foreach ($this->coordinates as $index => $coordinate) {
            $coordinates[$index] = -$coordinate;
        }

        return new static($coordinates);
    }

    /**
     * @return Iterator
     */
    public function getIterator()
    {
        return function () {
            foreach ($this->coordinates as $coordinate) {
                yield $coordinate;
            }
        };
    }

    /**
     * @param $coordinates
     */
    protected function setCoordinates(array $coordinates)
    {
        $this->coordinates = new \SplFixedArray(count($coordinates));

        foreach ($coordinates as $index => $coordinate) {
            $this->coordinates[$index] = $coordinate;
        }
    }
}