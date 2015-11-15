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
 
namespace Elcodi\Plugin\TemplateConverterBundle\Tests\Transformer\Smarty3\Piece;

use Elcodi\Plugin\TemplateConverterBundle\Tests\Transformer\Abstracts\AbstractPieceTest;
use Elcodi\Plugin\TemplateConverterBundle\Transformer\Interfaces\PieceInterface;
use Elcodi\Plugin\TemplateConverterBundle\Transformer\Smarty3\Piece\IssetPiece;

/**
 * Class IssetPieceTest
 */
class IssetPieceTest extends AbstractPieceTest
{
    /**
     * get data
     */
    public function getData()
    {
        return [
            ['{if isset($something)}', '{if $something is defined}'],
            ['{if isset(something) || !isset(anotherthing)}', '{if something is defined || anotherthing is not defined}'],
        ];
    }

    /**
     * get piece
     *
     * @return PieceInterface Piece
     */
    public function getPiece()
    {
        return new IssetPiece();
    }
}
