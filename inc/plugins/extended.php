<?php
if(!defined("IN_MYBB"))
{
	die("Direct initialization of this file is not allowed.<br /><br />Please make sure IN_MYBB is defined.");
}

function extended_info()
{
    return array(
        'name'        => 'Erweiterte Zeitraum Suche',
        'description' => 'Erstellt eine Tabelle in der Suche nach heutigen Beiträgen zur Suche nach älteren Beiträgen',
        'website'     => 'http://mybbservice.de/',
        'version'     => '1.0',
        'author'      => 'MyBBService',
        'authorsite'  => 'http://mybbservice.de/',
        'guid'        => '',
		'compatibility'	=> '16*',
    );
}

function extended_activate()
{
	require MYBB_ROOT."inc/adminfunctions_templates.php";
	find_replace_templatesets("search_results_threads", "#".preg_quote('{$header}')."#i", '{$header}'."\n".'<table class="tborder" border="0" cellpadding="4" cellspacing="1">'."\n".'
<tr><td class="trow2" align="center">'."\n".'
<center><b>Erweiterte Zeitraum-Suche:</b> Finde alle Beiträge der letzten <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=2">2</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=3">3</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=4">4</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=5">5</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=10">10</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=15">15</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=20">20</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=25">25</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=30">30</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=60">60</a> Tage</center>'."\n".'
</td></tr></table>');
}

function extended_deactivate()
{
	require MYBB_ROOT."inc/adminfunctions_templates.php";
	find_replace_templatesets("search_results_threads", "#".preg_quote('<table class="tborder" border="0" cellpadding="4" cellspacing="1">'."\n".'
<tr><td class="trow2" align="center">'."\n".'
<center><b>Erweiterte Zeitraum-Suche:</b> Finde alle Beiträge der letzten <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=2">2</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=3">3</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=4">4</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=5">5</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=10">10</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=15">15</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=20">20</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=25">25</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=30">30</a> | <a href="{$mybb->settings[\'bburl\']}/search.php?action=getdaily&days=60">60</a> Tage</center>'."\n".'
</td></tr></table>')."#i", '');
}
?>