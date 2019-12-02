<?php

declare(strict_types=1);

/**
 * Class FuelCalculator
 */
class FuelCalculator
{
    /** @var array */
    private $componentMasses;

    /**
     * FuelCalculator constructor.
     *
     * @param int ...$componentMasses
     */
    public function __construct(int ...$componentMasses)
    {
        $this->componentMasses = $componentMasses;
    }

    /**
     * @param int $componentMass
     *
     * @return int
     */
    private function calculateComponentFuel(int $componentMass): int
    {
        // divide by 3 and round down then minus 2
        return (int) floor($componentMass / 3) - 2;
    }

    /**
     * @return int
     */
    public function getFuelForAllComponents(): int
    {
        $totalFuel = 0;

        foreach ($this->componentMasses as $componentMass) {
            $totalFuel += $this->calculateComponentFuel($componentMass);
        }

        return $totalFuel;
    }
}
