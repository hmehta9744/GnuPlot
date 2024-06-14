<?php

    include('../GnuPlot.php');

    use GnuPlot\GnuPlot;

    $plot = new GnuPlot;

    $plot
        ->setXLabel('Date')
        ->setYRange(-1, 7)
        ->setXTimeFormat('%d/%m/%Y')
        ->enableHistogram()
        ->setYLabel('Y')
        ->push('7/6/2024', 0)
        ->push('8/6/2024', 1)
        ->push('9/6/2024', 3)
        ->push('10/6/2024', 3)
        ->push('11/6/2024', 2)
        ->push('12/6/2024', 6)
        ->push('13/6/2024', 3)
        ->push('14/6/2024', 2)
        ->setTitle(0, 'The curve')
        ->setWidth(1200)
        ->setHeight(800)
        ->writePng('date.png');
