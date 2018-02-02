<?php

/**
 *    Please retain this copyright header in all versions of the software
 *
 *    Copyright (C) Josef A. Puckl | eComStyle.de
 *
 *    This program is free software: you can redistribute it and/or modify
 *    it under the terms of the GNU General Public License as published by
 *    the Free Software Foundation, either version 3 of the License, or
 *    (at your option) any later version.
 *
 *    This program is distributed in the hope that it will be useful,
 *    but WITHOUT ANY WARRANTY; without even the implied warranty of
 *    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *    GNU General Public License for more details.
 *
 *    You should have received a copy of the GNU General Public License
 *    along with this program.  If not, see {http://www.gnu.org/licenses/}.
 *
 * @category      module
 * @package       AntiPreisalarm
 * @author        eComStyle.de
 * @link          https://ecomstyle.de/
 * @copyright (C) 2018
 */

/**
 * Metadata version
 */
$sMetadataVersion = '2.0';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'ecs_antipreisalarm',
    'title'       => '<strong style="color:#04B431;">e</strong><strong>ComStyle.de</strong>:  <i>AntiPreisalarm</i>',
    'description' => 'Deaktiviert den Preisalarm bei allen Artikeln',
    'thumbnail'   => 'out/pictures/ecs.png',
    'version'     => '1.0.0',
    'author'      => 'eComStyle.de',
    'url'         => 'https://ecomstyle.de/',
    'email'       => 'info@ecomstyle.de',
    'extend'      => array(
        \OxidEsales\Eshop\Application\Component\Widget\ArticleDetails::class => Ecs\AntiPreisalarm\Application\Component\Widget\ArticleDetails::class,
            ),
);