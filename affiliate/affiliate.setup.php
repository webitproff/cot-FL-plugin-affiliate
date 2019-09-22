<?php
/* ====================
[BEGIN_COT_EXT]
Code=affiliate
Name=Affiliate
Category=
Description=Плагин «Affiliate» - Партнерская программа<br /> [<a target="_blank" href="http://freelance-script.abuyfile.com/plugin-affiliate/">Документация, помощь, поддержка, доработки под заказ</a>]
Version=1.1.3
Date=2015-01-06
Author=CMSWorks Team
Copyright=CMSWorks Team 2010-2016
Notes=BSD License
SQL=
Auth_guests=R
Lock_guests=12345A
Auth_members=R
Lock_members=W12345A
Requires_modules=payments
[END_COT_EXT]

[BEGIN_COT_EXT_CONFIG]
 * levelpay=01:string::0,5,2,1:Размер вознаграждения за пополнение счета (в процентах для каждого уровня партнеров)
 * maxlevelstoshow=02:string::0:Число уровней рефералов доступных для просмотра партнеру
 * refpoints=03:string::0:Количество начисляемых баллов за приглашенного реферала
 * refpay=04:string::0:Вознаграждение за приглашенного реферала
 * upageref=05:radio::0:Учитывать рефералов при переходе на страницу пользователя
[END_COT_EXT_CONFIG]
==================== */

defined('COT_CODE') or die('Wrong URL');

?>