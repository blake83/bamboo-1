<?php

/*
 * This file is part of the Elcodi package.
 *
 * Copyright (c) 2014 Elcodi.com
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * Feel free to edit as you please, and have fun.
 *
 * @author Marc Morera <yuhu@mmoreram.com>
 * @author Aldo Chiecchia <zimage@tiscali.it>
 * @author Elcodi Team <tech@elcodi.com>
 */
 
namespace Elcodi\Plugin\TemplateConverterBundle\Transformer\Interfaces;

/**
 * Interface TemplateTransformerInterface
 */
interface TemplateTransformerInterface
{
    /**
     * Get Capturer piece
     *
     * @return CodeCaptureInterface Code capturer
     */
    public function getCapturer();

    /**
     * Transform to Twig
     *
     * @param string $data Data
     *
     * @return string Data transformed
     */
    public function toTwig($data);
}
