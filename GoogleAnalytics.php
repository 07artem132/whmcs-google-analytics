<?php
/**
 * Created by PhpStorm.
 * User: Artem
 * Date: 17.07.2018
 * Time: 17:07
 */
function GoogleAnalytics_config() {
	$configarray = [
		"name"        => "Интеграция c Google Analytics",
		"description" => "Данное дополнение позволяет интегрировать гугл аналитику с whmcs",
		"version"     => "1",
		"author"      => "service-voice",
		"fields"      => [
			'Note'             => [
				'Description'  => 'Данный модуль не имеет административного вывода',
				'FriendlyName' => 'Заметка:'
			],
			'id'      => array(
				'Type'         => 'text',
				'Size'         => '30',
				'FriendlyName' => 'Номер счетчика'
			),
		]
	];

	return $configarray;
}