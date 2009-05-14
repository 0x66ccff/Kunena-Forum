<?php
/**
* @version $Id: kunena.hungarian.php 597 2009-04-03 17:50:33Z localicer $
* Kunena Component
* @package Kunena
*
* @Copyright (C) 2008 - 2009 Kunena Team All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.kunena.com
*
* Based on FireBoard Component
* @Copyright (C) 2006 - 2007 Best Of Joomla All rights reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @link http://www.bestofjoomla.com
*
* Based on Joomlaboard Component
* @copyright (C) 2000 - 2004 TSMF / Jan de Graaff / All Rights Reserved
* @license http://www.gnu.org/copyleft/gpl.html GNU/GPL
* @author TSMF & Jan de Graaff
*
* Language: Bulgarian
* For version: 1.0.7
* Translators: Taken from the file for Fireboard with translators Ivo Apostolov, Plamen Penkov, Teodor Baturov. Recent corrections: Aleksandar Tsonev
* Web:  http://www.archerybg.com
* Translation version: 1.0
* Encoding: UTF-8
**/

// Dont allow direct linking
defined( '_JEXEC' ) or defined ('_VALID_MOS') or die('������ ����� �� �������� ������ �� ���� �����.');

// 1.0.6
DEFINE('_KUNENA_JOMSOCIAL', 'JomSocial');

// 1.0.5 // _EDIT_TITLE 
DEFINE('_EDIT_TITLE', '�������');
DEFINE('_YOUR_NAME', '������ ���:');
DEFINE('_EMAIL', '�-����:');
DEFINE('_UNAME', '������������� ���:');
DEFINE('_PASS', '������:');
DEFINE('_VPASS', '���������� ��������:');

// 1.0.5

DEFINE('_KUNENA_BBCODE_HIDE', '���� � ������ �� ��������������:');
DEFINE('_KUNENA_BBCODE_SPOILER', 'Warning Spoiler!');
DEFINE('_KUNENA_FORUM_SAME_ERR', 'Parent Forum must not be the same.');
DEFINE('_KUNENA_FORUM_OWNCHILD_ERR', 'Parent Forum is one of its own childs.');
DEFINE('_KUNENA_FORUM_UNKNOWN_ERR', 'Forum ID does not exist.');
DEFINE('_KUNENA_RECURSION', 'Recursion detected.');
DEFINE('_POST_FORGOT_NAME_ALERT', '��� ������� �� �� ������� �����!');
DEFINE('_POST_FORGOT_EMAIL_ALERT', '������ �� E-Mail-�?')
;
DEFINE('_POST_FORGOT_SUBJECT_ALERT', '������ ���� ���� ��������.');
DEFINE('_KUNENA_EDIT_TITLE', '����� �� ��������');
DEFINE('_KUNENA_YOUR_NAME', '����� ���:');
DEFINE('_KUNENA_EMAIL', 'e-mail:');
DEFINE('_KUNENA_UNAME', '���:');
DEFINE('_KUNENA_PASS', '������:');
DEFINE('_KUNENA_VPASS', '������� ������:');
DEFINE('_KUNENA_USER_DETAILS_SAVE', 'User details have been saved.');
DEFINE('_KUNENA_TEAM_CREDITS', 'Credits');
DEFINE('_COM_A_BBCODE', 'BBCode');
DEFINE('_COM_A_BBCODE_SETTINGS', 'BBCode Settings');
DEFINE('_COM_A_SHOWSPOILERTAG', 'Show spoiler tag in editor toolbar');
DEFINE('_COM_A_SHOWSPOILERTAG_DESC', 'Set to &quot;Yes&quot; if you want the [spoiler] tag to be listed in the post editor\'s toolbar.');
DEFINE('_COM_A_SHOWVIDEOTAG', 'Show video tag in editor toolbar');
DEFINE('_COM_A_SHOWVIDEOTAG_DESC', 'Set to &quot;Yes&quot; if you want the [video] tag to be listed in the post editor\'s toolbar.');
DEFINE('_COM_A_SHOWEBAYTAG', 'Show eBay tag in editor toolbar');
DEFINE('_COM_A_SHOWEBAYTAG_DESC', 'Set to &quot;Yes&quot; if you want the [ebay] tag to be listed in the post editor\'s toolbar.');
DEFINE('_COM_A_TRIMLONGURLS', 'Trimm long URLs');
DEFINE('_COM_A_TRIMLONGURLS_DESC', 'Set to &quot;Yes&quot; if you want long URLs to be trimmed. See URL trim front and back settings.');
DEFINE('_COM_A_TRIMLONGURLSFRONT', 'Front portion of trimmed URLs');
DEFINE('_COM_A_TRIMLONGURLSFRONT_DESC', 'Number of characters for front portion of trimmed URLs. Trim long URLs must be set to &quot;Yes&quot;.');
DEFINE('_COM_A_TRIMLONGURLSBACK', 'Back portion of trimmed URLs');
DEFINE('_COM_A_TRIMLONGURLSBACK_DESC', 'Number of characters for back portion of trimmed URLs. Trim long URLs must be set to &quot;Yes&quot;.');
DEFINE('_COM_A_AUTOEMBEDYOUTUBE', 'Auto embed YouTube videos');
DEFINE('_COM_A_AUTOEMBEDYOUTUBE_DESC', 'Set to &quot;Yes&quot; if you want youtube video urls to get automatically embedded.');
DEFINE('_COM_A_AUTOEMBEDEBAY', 'Auto embed eBay items');
DEFINE('_COM_A_AUTOEMBEDEBAY_DESC', 'Set to &quot;Yes&quot; if you want eBay items and searches to get automatically embedded.');
DEFINE('_COM_A_EBAYLANGUAGECODE', 'eBay widget language code');
DEFINE('_COM_A_EBAYLANGUAGECODE_DESC', 'It is important to set the proper language code as the eBay widget derives both language and currency from it. Default is en-us for ebay.com. Examples: ebay.de: de-de, ebay.at: de-at, ebay.co.uk: en-gb');
DEFINE('_COM_A_KUNENA_SESSION_TIMEOUT', '������� �����');
DEFINE('_COM_A_KUNENA_SESSION_TIMEOUT_DESC', 'Default is 1800 [seconds]. Session lifetime (timeout) in seconds similar to Joomla session lifetime. The session lifetime is important for access rights recalculation, whoisonline display and NEW indicator. Once a session expires beyond that timeout, access rights and NEW indicator are reset.');

// Advanced administrator merge-split functions

DEFINE('_GEN_MERGE', '�������');
DEFINE('_VIEW_MERGE', '');
DEFINE('_POST_MERGE_TOPIC', '���� ���� ���� �');
DEFINE('_POST_MERGE_GHOST', '������ ���� ����� � ������');
DEFINE('_POST_SUCCESS_MERGE', '������ ���� ������� �����!');
DEFINE('_POST_TOPIC_NOT_MERGED', '����������� ���� ���������!'); 
DEFINE('_GEN_SPLIT', '�������');
DEFINE('_GEN_DOSPLIT', '���');
DEFINE('_VIEW_SPLIT', '');
DEFINE('_POST_SUCCESS_SPLIT', '������ ���� ������� ���������!');
DEFINE('_POST_SUCCESS_SPLIT_TOPIC_CHANGED', '���������� � ���������.');
DEFINE('_POST_SPLIT_TOPIC_NOT_CHANGED', '������� �� �������� ���������.');
DEFINE('_POST_TOPIC_NOT_SPLIT', '����������� ���� ���������!');
DEFINE('_POST_DUPLICATE_IGNORED', 'Duplicate, identical message has been ignored.');
DEFINE('_POST_SPLIT_HINT', '<br />Hint: You can promote a post to topic position if you select it in the second column and check nothing to split.<br />');
DEFINE('_POST_LINK_ORPHANS_TOPIC', 'link orphans to topic');
DEFINE('_POST_LINK_ORPHANS_TOPIC_TITLE', 'Link orphans to new topic post.');
DEFINE('_POST_LINK_ORPHANS_PREVPOST', 'link orphans to previous post');
DEFINE('_POST_LINK_ORPHANS_PREVPOST_TITLE', 'Link orphans to previous post.');
DEFINE('_POST_MERGE', '����');
DEFINE('_POST_MERGE_TITLE', 'Attach this thread to targets first post.');
DEFINE('_POST_INVERSE_MERGE', '������� �������');
DEFINE('_POST_INVERSE_MERGE_TITLE', 'Attach targets first post to this thread.');

// Additional

DEFINE('_POST_UNFAVORITED_TOPIC', '���� ���� ���� ���������� �� ������ ������.');
DEFINE('_POST_NO_UNFAVORITED_TOPIC', 'This thread has <b>NOT</b> removed from your favorites');
DEFINE('_POST_SUCCESS_UNFAVORITE', 'Your request to remove from favorites has been processed.');
DEFINE('_POST_UNSUBSCRIBED_TOPIC', 'This thread has been removed from your subscriptions.');
DEFINE('_POST_NO_UNSUBSCRIBED_TOPIC', 'This thread has <b>NOT</b> removed from your subscriptions');
DEFINE('_POST_SUCCESS_UNSUBSCRIBE', 'Your request to remove from subscriptions has been processed.');
DEFINE('_POST_NO_DEST_CATEGORY', 'No destination category was selected. Nothing was moved.');

// Default_EX template

DEFINE('_KUNENA_ALL_DISCUSSIONS', '�������� ��������');
DEFINE('_KUNENA_MY_DISCUSSIONS', '����� ��������');
DEFINE('_KUNENA_MY_DISCUSSIONS_DETAIL', 'Discussions I have started or replied to');
DEFINE('_KUNENA_CATEGORY', '���������:');
DEFINE('_KUNENA_CATEGORIES', '���������');
DEFINE('_KUNENA_POSTED_AT', '����������');
DEFINE('_KUNENA_AGO', '�����');
DEFINE('_KUNENA_DISCUSSIONS', '��������');
DEFINE('_KUNENA_TOTAL_THREADS', '���� ������:');
DEFINE('_SHOW_DEFAULT', '����������');
DEFINE('_SHOW_MONTH', '�����');
DEFINE('_SHOW_YEAR', '������');

// 1.0.4

DEFINE('_KUNENA_COPY_FILE', '������� "%src%" � "%dst%"...');
DEFINE('_KUNENA_COPY_OK', 'OK');
DEFINE('_KUNENA_CSS_SAVE', '������ CSS-����� ���... ����="%file%"');
DEFINE('_KUNENA_UP_ATT_10', '����������� ������� ���� ���� ������� � ���������� 1.0.x- ������ ������������.');
DEFINE('_KUNENA_UP_ATT_10_MSG', '����������� ������� ���� ������� � ���������� 1.0.x- ������ �������������.');
DEFINE('_KUNENA_TOPIC_MOVED', '---');
DEFINE('_KUNENA_TOPIC_MOVED_LONG', '------------');
DEFINE('_KUNENA_POST_DEL_ERR_CHILD', '����������� �� ������ �� ����� ��������� ��� ���������� �� ���������. ���� �� ���� �������!');
DEFINE('_KUNENA_POST_DEL_ERR_MSG', '����� �� ���� ������! � ���� ����� �� ���� �������!');
DEFINE('_KUNENA_POST_DEL_ERR_TXT', ' ������ �� ���� ������! ���� ������������ ���� ����� �������� (mesid=%id%)!');
DEFINE('_KUNENA_POST_DEL_ERR_USR', '������ ���� �������, �� ��������������� �� ��������������� ���������� ���� ���������!');
DEFINE('_KUNENA_POST_MOV_ERR_DB', "�������� � ������ � ���� �����! �� �� ���������� ���������� ��� ������ �����, ������������ ���� �����.");
DEFINE('_KUNENA_UNIST_SUCCESS', "FireBoard ���� ������� ������������!");
DEFINE('_KUNENA_PDF_VERSION', 'FireBoard-�����-������: %version%');
DEFINE('_KUNENA_PDF_DATE', '���������: %date%');
DEFINE('_KUNENA_SEARCH_NOFORUM', '���� ������ �� �����������!');

DEFINE('_KUNENA_ERRORADDUSERS', '������ ��� ��������� �� ����������!');
DEFINE('_KUNENA_USERSSYNCMSG', '������������� ���� ��������������! �������: %d, ��������: %d');
DEFINE('_KUNENA_USERSSYNCADD', ', ��������:');
DEFINE('_KUNENA_NOPROFILESFORSYNC', '�� ���� ������� ��������� ������� �� ��������������!');
DEFINE('_KUNENA_SYNC_USERS', '������������� �������������');
DEFINE('_KUNENA_SYNC_USERS_DESC', '�������������� �� ��������������� ������ �� FireBoard � ���� �� Joomla!');
DEFINE('_KUNENA_A_MAIL_ADMIN', '������� E-Mail �� ��������������');
DEFINE('_KUNENA_A_MAIL_ADMIN_DESC',
    '������ &quot;Ja&quot;, ��� ����� �� ������� ����� ��������� �� �������������� ��������� � � E-Mail.');
DEFINE('_KUNENA_RANKS_EDIT', '��������� �� �����');
DEFINE('_KUNENA_USER_HIDEEMAIL', '����� E-Mail-�');
DEFINE('_KUNENA_DT_DATE_FMT','%d.%m.%Y');
DEFINE('_KUNENA_DT_TIME_FMT','%H:%M');
DEFINE('_KUNENA_DT_DATETIME_FMT','%d.%m.%Y %H:%M');
DEFINE('_KUNENA_DT_LDAY_SUN', '������');
DEFINE('_KUNENA_DT_LDAY_MON', '����������');
DEFINE('_KUNENA_DT_LDAY_TUE', '�������');
DEFINE('_KUNENA_DT_LDAY_WED', '�����');
DEFINE('_KUNENA_DT_LDAY_THU', '���������');
DEFINE('_KUNENA_DT_LDAY_FRI', '�����');
DEFINE('_KUNENA_DT_LDAY_SAT', '������');
DEFINE('_KUNENA_DT_DAY_SUN', '���');
DEFINE('_KUNENA_DT_DAY_MON', '���');
DEFINE('_KUNENA_DT_DAY_TUE', '��');
DEFINE('_KUNENA_DT_DAY_WED', '���');
DEFINE('_KUNENA_DT_DAY_THU', '���');
DEFINE('_KUNENA_DT_DAY_FRI', '���');
DEFINE('_KUNENA_DT_DAY_SAT', '���');
DEFINE('_KUNENA_DT_LMON_JAN', '������');
DEFINE('_KUNENA_DT_LMON_FEB', '��������');
DEFINE('_KUNENA_DT_LMON_MAR', '����');
DEFINE('_KUNENA_DT_LMON_APR', '�����');
DEFINE('_KUNENA_DT_LMON_MAY', '���');
DEFINE('_KUNENA_DT_LMON_JUN', '���');
DEFINE('_KUNENA_DT_LMON_JUL', '���');
DEFINE('_KUNENA_DT_LMON_AUG', '������');
DEFINE('_KUNENA_DT_LMON_SEP', '���������');
DEFINE('_KUNENA_DT_LMON_OCT', '��������');
DEFINE('_KUNENA_DT_LMON_NOV', '�������');
DEFINE('_KUNENA_DT_LMON_DEV', '��������');
DEFINE('_KUNENA_DT_MON_JAN', '��');
DEFINE('_KUNENA_DT_MON_FEB', '���');
DEFINE('_KUNENA_DT_MON_MAR', '���');
DEFINE('_KUNENA_DT_MON_APR', '���');
DEFINE('_KUNENA_DT_MON_MAY', '���');
DEFINE('_KUNENA_DT_MON_JUN', '���');
DEFINE('_KUNENA_DT_MON_JUL', '���');
DEFINE('_KUNENA_DT_MON_AUG', '���');
DEFINE('_KUNENA_DT_MON_SEP', '���');
DEFINE('_KUNENA_DT_MON_OCT', '���');
DEFINE('_KUNENA_DT_MON_NOV', '���');
DEFINE('_KUNENA_DT_MON_DEV', '���');
DEFINE('_KUNENA_CHILD_BOARD', '��������');
DEFINE('_WHO_ONLINE_GUEST', '�����');
DEFINE('_WHO_ONLINE_MEMBER', '����������');
DEFINE('_KUNENA_IMAGE_PROCESSOR_NONE', '����');
DEFINE('_KUNENA_IMAGE_PROCESSOR', '��������� �� �������:');
DEFINE('_KUNENA_INSTALL_CLICK_TO_CONTINUE', '������ ��� �� �� ���������...');
DEFINE('_KUNENA_INSTALL_APPLY', '�������!');
DEFINE('_KUNENA_NO_ACCESS', '��� ������ ������ �� ���� �����!');
DEFINE('_KUNENA_TIME_SINCE', '%time%');
DEFINE('_KUNENA_DATE_YEARS', '������');
DEFINE('_KUNENA_DATE_MONTHS', '������');
DEFINE('_KUNENA_DATE_WEEKS','�������');
DEFINE('_KUNENA_DATE_DAYS', '���');
DEFINE('_KUNENA_DATE_HOURS', '������');
DEFINE('_KUNENA_DATE_MINUTES', '������');

// 1.0.3

DEFINE('_KUNENA_CONFIRM_REMOVESAMPLEDATA', '������� �� ���, �� ������ �� ���������� ���������� �����? �� ����� ������� ������������.');

// 1.0.2

DEFINE('_KUNENA_HEADERADD', '�������� ��� ������:');
DEFINE('_KUNENA_ADVANCEDDISPINFO', '����� �� ������');
DEFINE('_KUNENA_CLASS_SFX', 'CSS class suffix �� ������');
DEFINE('_KUNENA_CLASS_SFXDESC', 'CSS suffix ��������� ��������� �� �������� ������ �� ������.');
DEFINE('_COM_A_USER_EDIT_TIME', '����� �� ������ ��� ������');
DEFINE('_COM_A_USER_EDIT_TIME_DESC', '0 �� ������������ �����, ����� - ����� ��� �������.');
DEFINE('_COM_A_USER_EDIT_TIMEGRACE', '������������ ����� �� ������������');
DEFINE('_COM_A_USER_EDIT_TIMEGRACE_DESC', '���������� �� ������������ 600 ������� ���������� �������������� �� ����������� ������� �� 600 �������, ���� ���� ������� ������ �� �������');
DEFINE('_KUNENA_HELPPAGE','������� ���������� � ������� ����������');
DEFINE('_KUNENA_HELPPAGE_DESC','If set to &quot;Yes&quot; a link in the header menu will be shown to your Help page.');
DEFINE('_KUNENA_HELPPAGE_IN_KUNENA','��������� �� ������� ���������� ��� kunena');
DEFINE('_KUNENA_HELPPAGE_IN_KUNENA_DESC','��� � &quot;��&quot; ��������� ���������� �� �� ������ ��� kunena � �������� ��� ������ ������ ���������� ���� �� ������. <b>���.:</b> ������ �� �������� &quot;ID �� ������������ �� ��������� ����������&quot;.');
DEFINE('_KUNENA_HELPPAGE_CID','ID �� ��������� ����������');
DEFINE('_KUNENA_HELPPAGE_CID_DESC','������ �� ��������� <b>"��"</b> �� ����������� "������ ����� � kunena".');
DEFINE('_KUNENA_HELPPAGE_LINK','������ ��� ������ ������� ����������');
DEFINE('_KUNENA_HELPPAGE_LINK_DESC','��� ����� ������ ��� ������ ���.����������, ���� �������� <b>"��"</b>�� ���������� "������ ������� ���������� ��� kunena".');
DEFINE('_KUNENA_RULESPAGE','�������� ���������� � �������');
DEFINE('_KUNENA_RULESPAGE_DESC','��� � &quot;��&quot; � ���������� ���� �� �� ����� ������ ��� ������ �������� � �������.');
DEFINE('_KUNENA_RULESPAGE_IN_KUNENA','������ ��������� ��� Fireboard');
DEFINE('_KUNENA_RULESPAGE_IN_KUNENA_DESC','��� � &quot;��&quot; ������ � ������� �� ���� ������� ��� kunena � �������� ��� ������ �������� � ������� ���� �� ������. <b>���.:</b> ������ �� �������� � "ID �� ���������� � �������".');
DEFINE('_KUNENA_RULESPAGE_CID','ID �� ���������');
DEFINE('_KUNENA_RULESPAGE_CID_DESC','��� ��������, ������ ����������� "������ ������� ��� kunena � <b>&quot;��&quot;</b> �� .');
DEFINE('_KUNENA_RULESPAGE_LINK','������ ��� ������ �������� � �������');
DEFINE('_KUNENA_RULESPAGE_LINK_DESC','��� ���������� ������ ������ �� �������, ��������� <b>"��"</b> �� "������ ������� � kunena".');
DEFINE('_KUNENA_AVATAR_GDIMAGE_NOT','�� � �������� ������������ GD');
DEFINE('_KUNENA_AVATAR_GDIMAGE_NOT','�� � �������� ������������ GD');
DEFINE('_KUNENA_GD_INSTALLED','GD � ��������, ������ ');
DEFINE('_KUNENA_GD_NO_VERSION','�������� �� GD �� ���� �� �� �������');
DEFINE('_KUNENA_GD_NOT_INSTALLED','GD �� � �����������, �� ������ ���������� ');
DEFINE('_KUNENA_AVATAR_SMALL_HEIGHT','�������� �� ����� �����������:');
DEFINE('_KUNENA_AVATAR_SMALL_WIDTH','������ �� ����� �����������:');
DEFINE('_KUNENA_AVATAR_MEDIUM_HEIGHT','�������� �� ������ �����������:');
DEFINE('_KUNENA_AVATAR_MEDUIM_WIDTH','������ �� ������ �����������:');
DEFINE('_KUNENA_AVATAR_LARGE_HEIGHT','�������� �� ������ �����������:');
DEFINE('_KUNENA_AVATAR_LARGE_WIDTH','������ �� ������ �����������:');
DEFINE('_KUNENA_AVATAR_QUALITY','�������� �� �������');
DEFINE('_KUNENA_WELCOME','����� ����� ��� FireBoard!');
DEFINE('_KUNENA_WELCOME_DESC','���������� ��, �� �������� FireBoard �� ����� ����. ���� ����� �� �� ���� ���� ������ ����� ��������� ���������� �� ����� �����. �������� ������ �� ���������� �� ������������ ����� �����. ����� �������� ������� ���������� ��� �� �� ������� ���������� �����������.');
DEFINE('_KUNENA_STATISTIC','����������');
DEFINE('_KUNENA_VALUE','��������');
DEFINE('_GEN_CATEGORY','���������');
DEFINE('_GEN_STARTEDBY','��������� ��: ');
DEFINE('_GEN_STATS','����������');
DEFINE('_STATS_TITLE','���������� �� ������');
DEFINE('_STATS_GEN_STATS','���� ����������');
DEFINE('_STATS_TOTAL_MEMBERS','�����������:');
DEFINE('_STATS_TOTAL_REPLIES','��������:');
DEFINE('_STATS_TOTAL_TOPICS','����:');
DEFINE('_STATS_TODAY_TOPICS','���� ����:');
DEFINE('_STATS_TODAY_REPLIES','�������� ����:');
DEFINE('_STATS_TOTAL_CATEGORIES','���������:');
DEFINE('_STATS_TOTAL_SECTIONS','������:');
DEFINE('_STATS_LATEST_MEMBER','�������� �����������:');
DEFINE('_STATS_YESTERDAY_TOPICS','���� �����:');
DEFINE('_STATS_YESTERDAY_REPLIES','�������� �����:');
DEFINE('_STATS_POPULAR_PROFILE','��� 10 ����������� <br />(�� ���� ������������ �� ������� ��)');
DEFINE('_STATS_TOP_POSTERS','��� 10 ����������� <br />(�� ���� ������)');
DEFINE('_STATS_POPULAR_TOPICS','���-��������� ������');
DEFINE('_COM_A_STATSPAGE','������� ���������� ��� ����������');
DEFINE('_COM_A_STATSPAGE_DESC','��� � &quot;��&quot; � ���������� ���� �� ��� ������ ��� ���������� ��� ���������� �� ������. <em>���� �������� � ������ ������ �� ���������������� ���������� �� ���� ���������!</em>');
DEFINE('_COM_C_JBSTATS','����������');
DEFINE('_COM_C_JBSTATS_DESC','����������, �������� � ������');
DEFINE('_GEN_GENERAL','����');
DEFINE('_PERM_NO_READ','������ ������� ����� �� ������ �� ���� �����.');
DEFINE('_KUNENA_SMILEY_SAVED','��������� � ��������');
DEFINE('_KUNENA_SMILEY_DELETED','��������� � �������');
DEFINE('_KUNENA_CODE_ALLREADY_EXITS','����� ���� ����������');
DEFINE('_KUNENA_MISSING_PARAMETER','������� ���������');
DEFINE('_KUNENA_RANK_ALLREADY_EXITS','������ ���� ����������');
DEFINE('_KUNENA_RANK_DELETED','������ � ������');
DEFINE('_KUNENA_RANK_SAVED','������ � ������� �������');
DEFINE('_KUNENA_DELETE_SELECTED','������� � ���������');
DEFINE('_KUNENA_MOVE_SELECTED','������� � �����������');
DEFINE('_KUNENA_REPORT_LOGGED','�������� � ����');
DEFINE('_KUNENA_GO','�����');
DEFINE('_KUNENA_MAILFULL','������ ������ ������ � �-�����, ����� �� ������� �� ��������������');
DEFINE('_KUNENA_MAILFULL_DESC','��� � &quot;��&quot; - ��������� �� ����������� ���� ���������� �� ������ ���������');
DEFINE('_KUNENA_HIDETEXT','����, ������ �� �� ������ ���� ����������!');
DEFINE('_BBCODE_HIDE','����� �����: [hide]������� ����� �����[/hide] - �������� �� ���� �� ������ �� ����������������.');
DEFINE('_KUNENA_FILEATTACH','�������� ����: ');
DEFINE('_KUNENA_FILENAME','��� �� ����: ');
DEFINE('_KUNENA_FILESIZE','������ �� ����: ');
DEFINE('_KUNENA_MSG_CODE','���: ');
DEFINE('_KUNENA_CAPTCHA_ON','������ �� ����');
DEFINE('_KUNENA_CAPTCHA_DESC','��������� �� ��������� CAPTCHA ����� ����');
DEFINE('_KUNENA_CAPDESC','�������� ���');
DEFINE('_KUNENA_CAPERR','������ ���!');
DEFINE('_KUNENA_COM_A_REPORT', '�������������');
DEFINE('_KUNENA_COM_A_REPORT_DESC', '����� �� ������������� �� ������������ �� ����������� ��������� �� ����������.');
DEFINE('_KUNENA_REPORT_MSG', '����������� � ���������');
DEFINE('_KUNENA_REPORT_REASON', '�������');
DEFINE('_KUNENA_REPORT_MESSAGE', '������ ���������');
DEFINE('_KUNENA_REPORT_SEND', '������� ������');
DEFINE('_KUNENA_REPORT', '������ �� ����������');
DEFINE('_KUNENA_REPORT_RSENDER', '���������: ');
DEFINE('_KUNENA_REPORT_RREASON', '������� �� �������: ');
DEFINE('_KUNENA_REPORT_RMESSAGE', '������������ �� ���������: ');
DEFINE('_KUNENA_REPORT_POST_POSTER', '����� �� �����������: ');
DEFINE('_KUNENA_REPORT_POST_SUBJECT', '���� �� �����������: ');
DEFINE('_KUNENA_REPORT_POST_MESSAGE', '���������: ');
DEFINE('_KUNENA_REPORT_POST_LINK', '������ ��� �����������: ');
DEFINE('_KUNENA_REPORT_INTRO', '�� ������� ��������, ������');
DEFINE('_KUNENA_REPORT_SUCCESS', '�������� � ������� ��������!');
DEFINE('_KUNENA_EMOTICONS', '������');
DEFINE('_KUNENA_EMOTICONS_SMILEY', '�������');
DEFINE('_KUNENA_EMOTICONS_CODE', '���');
DEFINE('_KUNENA_EMOTICONS_URL', 'URL');
DEFINE('_KUNENA_EMOTICONS_EDIT_SMILEY', '���������� �������');
DEFINE('_KUNENA_EMOTICONS_EDIT_SMILIES', '����������� �� ���������');
DEFINE('_KUNENA_EMOTICONS_EMOTICONBAR', '����� � ���������');
DEFINE('_KUNENA_EMOTICONS_NEW_SMILEY', '���� �������');
DEFINE('_KUNENA_EMOTICONS_MORE_SMILIES', '��� �������');
DEFINE('_KUNENA_EMOTICONS_CLOSE_WINDOW', '������� ���������');
DEFINE('_KUNENA_EMOTICONS_ADDITIONAL_EMOTICONS', '������������ ������');
DEFINE('_KUNENA_EMOTICONS_PICK_A_SMILEY', '������ �������');
DEFINE('_KUNENA_MAMBOT_SUPPORT', '��������� �� Joomla Mambot');
DEFINE('_KUNENA_MAMBOT_SUPPORT_DESC', 'Enable Joomla Mambot Support');
DEFINE('_KUNENA_MYPROFILE_PLUGIN_SETTINGS', 'My Profile Plugin Settings');
DEFINE('_KUNENA_USERNAMECANCHANGE', '������� ����� �� ��������������� ���');
DEFINE('_KUNENA_USERNAMECANCHANGE_DESC', '��������� ����� �� ��������������� ��� (username) � ���������� � �������');
DEFINE ('_KUNENA_RECOUNTFORUMS','�������� �� ������������');
DEFINE ('_KUNENA_RECOUNTFORUMS_DONE','������ ������ � ������������ �� ��������.');
DEFINE ('_KUNENA_EDITING_REASON','������� �� �����������');
DEFINE ('_KUNENA_EDITING_LASTEDIT','�������� ��������');
DEFINE ('_KUNENA_BY','��');
DEFINE ('_KUNENA_REASON','�������');
DEFINE('_GEN_GOTOBOTTOM', '����� ���-������');
DEFINE('_GEN_GOTOTOP', '����� ���-������');
DEFINE('_STAT_USER_INFO', '���������� �� �����������');
DEFINE('_USER_SHOWEMAIL', '�������� �-����');
DEFINE('_USER_SHOWONLINE', '������ �������/���������');
DEFINE('_KUNENA_HIDDEN_USERS', '������ �����������');
DEFINE('_KUNENA_SAVE', '������');
DEFINE('_KUNENA_RESET', '��������');
DEFINE('_KUNENA_DEFAULT_GALLERY', '������� �� ������������');
DEFINE('_KUNENA_MYPROFILE_PERSONAL_INFO', '����� ����������');
DEFINE('_KUNENA_MYPROFILE_SUMMARY', '�������');
DEFINE('_KUNENA_MYPROFILE_MYAVATAR', '���� ������');
DEFINE('_KUNENA_MYPROFILE_FORUM_SETTINGS', '��������� �� ������');
DEFINE('_KUNENA_MYPROFILE_LOOK_AND_LAYOUT', '������ � ��������');
DEFINE('_KUNENA_MYPROFILE_MY_PROFILE_INFO', '���� ������');
DEFINE('_KUNENA_MYPROFILE_MY_POSTS', '����� ��������');
DEFINE('_KUNENA_MYPROFILE_MY_SUBSCRIBES', '����� ����������');
DEFINE('_KUNENA_MYPROFILE_MY_FAVORITES', '����� ������');
DEFINE('_KUNENA_MYPROFILE_PRIVATE_MESSAGING', '����� ���������');
DEFINE('_KUNENA_MYPROFILE_INBOX', '�������');
DEFINE('_KUNENA_MYPROFILE_NEW_MESSAGE', '���� ���������');
DEFINE('_KUNENA_MYPROFILE_OUTBOX', '��������');
DEFINE('_KUNENA_MYPROFILE_TRASH', '�����');
DEFINE('_KUNENA_MYPROFILE_SETTINGS', '���������');
DEFINE('_KUNENA_MYPROFILE_CONTACTS', '��������');
DEFINE('_KUNENA_MYPROFILE_BLOCKEDLIST', '������ ���������');
DEFINE('_KUNENA_MYPROFILE_ADDITIONAL_INFO', '������������ ����������');
DEFINE('_KUNENA_MYPROFILE_NAME', '���');
DEFINE('_KUNENA_MYPROFILE_USERNAME', '������������� ���');
DEFINE('_KUNENA_MYPROFILE_EMAIL', '�-����');
DEFINE('_KUNENA_MYPROFILE_USERTYPE', '��� ����������');
DEFINE('_KUNENA_MYPROFILE_REGISTERDATE', '���� �� �����������');
DEFINE('_KUNENA_MYPROFILE_LASTVISITDATE', '�������� �������');
DEFINE('_KUNENA_MYPROFILE_POSTS', '��������');
DEFINE('_KUNENA_MYPROFILE_PROFILEVIEW', '������������ �� �������');
DEFINE('_KUNENA_MYPROFILE_PERSONALTEXT', '����� �����');
DEFINE('_KUNENA_MYPROFILE_GENDER', '���');
DEFINE('_KUNENA_MYPROFILE_BIRTHDATE', '�������� ����');
DEFINE('_KUNENA_MYPROFILE_BIRTHDATE_DESC', '������ (YYYY) - ����� (MM) - ��� (DD)');
DEFINE('_KUNENA_MYPROFILE_LOCATION', '�����');
DEFINE('_KUNENA_MYPROFILE_ICQ', 'ICQ');
DEFINE('_KUNENA_MYPROFILE_ICQ_DESC', '������ ICQ �����.');
DEFINE('_KUNENA_MYPROFILE_AIM', 'AIM');
DEFINE('_KUNENA_MYPROFILE_AIM_DESC', '������ AOL Instant Messenger ���.');
DEFINE('_KUNENA_MYPROFILE_YIM', 'YIM');
DEFINE('_KUNENA_MYPROFILE_YIM_DESC', '������ Yahoo! Instant Messenger ���.');
DEFINE('_KUNENA_MYPROFILE_SKYPE', 'SKYPE');
DEFINE('_KUNENA_MYPROFILE_SKYPE_DESC', '������ Skype ���.');
DEFINE('_KUNENA_MYPROFILE_GTALK', 'GTALK');
DEFINE('_KUNENA_MYPROFILE_GTALK_DESC', '������ Gtalk ���.');
DEFINE('_KUNENA_MYPROFILE_WEBSITE', '����');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_NAME', '��� �� �����');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_NAME_DESC', '��������: ������� � ���');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_URL', 'URL �� �����');
DEFINE('_KUNENA_MYPROFILE_WEBSITE_URL_DESC', '��������: archerybg.com');
DEFINE('_KUNENA_MYPROFILE_MSN', 'E-mail');
DEFINE('_KUNENA_MYPROFILE_MSN_DESC', '������ �-����.');
DEFINE('_KUNENA_MYPROFILE_SIGNATURE', '������');
DEFINE('_KUNENA_MYPROFILE_MALE', '���');
DEFINE('_KUNENA_MYPROFILE_FEMALE', '����');
DEFINE('_KUNENA_BULKMSG_DELETED', '������ � ���������� ���� ������� �������');
DEFINE('_KUNENA_DATE_YEAR', '������(�)');
DEFINE('_KUNENA_DATE_MONTH', '�����');
DEFINE('_KUNENA_DATE_WEEK','�������');
DEFINE('_KUNENA_DATE_DAY', '���');
DEFINE('_KUNENA_DATE_HOUR', '���');
DEFINE('_KUNENA_DATE_MINUTE', '������');
DEFINE('_KUNENA_IN_FORUM', ' ��� �����: ');
DEFINE('_KUNENA_FORUM_AT', ' ����� ��: ');
DEFINE('_KUNENA_QMESSAGE_NOTE', '��� � ������� �� ���������.');

// 1.0.1

DEFINE ('_KUNENA_FORUMTOOLS','����� ������');

//userlist

DEFINE ('_KUNENA_USRL_USERLIST','������ �� �������������');
DEFINE ('_KUNENA_USRL_REGISTERED_USERS','%s ��� <b>%d</b> �����������(�) �����������.');
DEFINE ('_KUNENA_USRL_SEARCH_ALERT','���� �������� ��������� �� ���������!');
DEFINE ('_KUNENA_USRL_SEARCH','������� �� ����������');
DEFINE ('_KUNENA_USRL_SEARCH_BUTTON','�������');
DEFINE ('_KUNENA_USRL_LIST_ALL','������ ������');
DEFINE ('_KUNENA_USRL_NAME','���');
DEFINE ('_KUNENA_USRL_USERNAME','������������� ���');
DEFINE ('_KUNENA_USRL_GROUP','�����');
DEFINE ('_KUNENA_USRL_POSTS','������');
DEFINE ('_KUNENA_USRL_KARMA','�����');
DEFINE ('_KUNENA_USRL_HITS','������������');
DEFINE ('_KUNENA_USRL_EMAIL','E-����');
DEFINE ('_KUNENA_USRL_USERTYPE','��� ����������');
DEFINE ('_KUNENA_USRL_JOIN_DATE','���� �� �����������');
DEFINE ('_KUNENA_USRL_LAST_LOGIN','�������� �������');
DEFINE ('_KUNENA_USRL_NEVER','������');
DEFINE ('_KUNENA_USRL_ONLINE','������');
DEFINE ('_KUNENA_USRL_AVATAR','������');
DEFINE ('_KUNENA_USRL_ASC','���������');
DEFINE ('_KUNENA_USRL_DESC','���������');
DEFINE ('_KUNENA_USRL_DISPLAY_NR','������');
DEFINE ('_KUNENA_USRL_DATE_FORMAT','%d.%m.%y %H:%M');

DEFINE('_KUNENA_ADMIN_CONFIG_PLUGINS','����������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST','������ �� �������������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_ROWS_DESC','���� ������ � �����������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_ROWS','���� ������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERONLINE','������ ���������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERONLINE_DESC','������� ������� �� ������������� (�������/���������)');

DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_AVATAR','������ ������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERLIST_AVATAR_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_NAME','������ ���');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_name_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERNAME','������ ������������� ���');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERNAME_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_GROUP','������ ������������� �����');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_GROUP_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_POSTS','������ ���� �� ��������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_POSTS_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_KARMA','������ �����');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_KARMA_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_EMAIL','������ �-����');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_EMAIL_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERTYPE','������ ���� �� �����������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_USERTYPE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_JOINDATE','������ ������ �� ���������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_JOINDATE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_LASTVISITDATE','������ ���������� ���� �� �������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_LASTVISITDATE_DESC','');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_HITS','������������ �� �������');
DEFINE('_KUNENA_ADMIN_CONFIG_USERLIST_HITS_DESC','');
DEFINE('_KUNENA_DBWIZ', 'Fireboard ��������');
DEFINE('_KUNENA_DBMETHOD', '����,�������� ����� �� ���������� �� ������������:');
DEFINE('_KUNENA_DBCLEAN', '����� ����������');
DEFINE('_KUNENA_DBUPGRADE', '���������� �� Fireboard');
DEFINE('_KUNENA_TOPLEVEL', '���������');
DEFINE('_KUNENA_REGISTERED', '�����������');
DEFINE('_KUNENA_PUBLICBACKEND', '�������� ������������� ');
DEFINE('_KUNENA_SELECTANITEMTO', '�������� ����� �� �������');
DEFINE('_KUNENA_ERRORSUBS', '����� �� ������ ��� ��������� �� ����������� � ������������');
DEFINE('_KUNENA_WARNING', '��������������...');
DEFINE('_KUNENA_CHMOD1', '������ �� ������� ������� �� ����� �� 766 (chmod 766) �� �� ���� .');
DEFINE('_KUNENA_YOURCONFIGFILEIS', '������ ��������������� ���� �:');
DEFINE('_KUNENA_FIREBOARD', 'Fireboard');
DEFINE('_KUNENA_CLEXUS', 'Clexus PM');
DEFINE('_KUNENA_CB', 'Community Builder');
DEFINE('_KUNENA_MYPMS', 'myPMS II Open Source');
DEFINE('_KUNENA_UDDEIM', 'Uddeim');
DEFINE('_KUNENA_JIM', 'JIM');
DEFINE('_KUNENA_MISSUS', 'Missus');
DEFINE('_KUNENA_SELECTTEMPLATE', '����� �� ������');
DEFINE('_KUNENA_CFNW', '������: ���������������� ���� ���� ����� �� �����.');
DEFINE('_KUNENA_CFS', '���������������� ���� � �������.');
DEFINE('_KUNENA_CFCNBO', '������: ��������� ���� �� ���� �� ���� �������.');
DEFINE('_KUNENA_TFINW', '���� ���� � ��� ����� �� �����.');
DEFINE('_KUNENA_KUNENACFS', 'Fireboard CSS ������ � �������.');
DEFINE('_KUNENA_SELECTMODTO', '�������� ��������� ��');
DEFINE('_KUNENA_CHOOSEFORUMTOPRUNE', '������ �� �������� ����� �� �����������!');
DEFINE('_KUNENA_DELMSGERROR', '����������� �� ����������� ����������:');
DEFINE('_KUNENA_DELMSGERROR1', '����������� �� ������ �� ����������� ����������:');
DEFINE('_KUNENA_CLEARSUBSFAIL', '������������ �� ������������ - ���������:');
DEFINE('_KUNENA_FORUMPRUNEDFOR', '������� � �������� ��');
DEFINE('_KUNENA_PRUNEDAYS', '����');
DEFINE('_KUNENA_PRUNEDELETED', '�������:');
DEFINE('_KUNENA_PRUNETHREADS', '�����');
DEFINE('_KUNENA_ERRORPRUNEUSERS', '������ ��� ���������� �� �����������:');
DEFINE('_KUNENA_USERSPRUNEDDELETED', '������������� �� ���������; �������:');
DEFINE('_KUNENA_PRUNEUSERPROFILES', '������������� �������');
DEFINE('_KUNENA_NOPROFILESFORPRUNNING', '���� ������� ������� ��������� �� ����������.');
DEFINE('_KUNENA_TABLESUPGRADED', '��������� �� Fireboard �� �������� �� ������');
DEFINE('_KUNENA_FORUMCATEGORY', '��������� �� �����');
DEFINE('_KUNENA_SAMPLWARN1', '������� ��, �� ��������� �������� ����� ����� ������� ������ kunena. ��� ���� ��� �������� ������� �����, ���� ���� �� ������!');
DEFINE('_KUNENA_FORUM1', '����� 1 1');
DEFINE('_KUNENA_SAMPLEPOST1', '�������� ������ 1');
DEFINE('_KUNENA_SAMPLEFORUM11', '�������� ����� 1\r\n');
DEFINE('_KUNENA_SAMPLEPOST11', '[b][size=4][color=#FF6600]��������� ������[/color][/size][/b]\n������������ �� ����� ��� �����!\n\n[url=http://bestofjoomla.com]- Best of Joomla[/url]');
DEFINE('_KUNENA_SAMPLESUCCESS', '���������� ����� �� ��������.');
DEFINE('_KUNENA_SAMPLEREMOVED', '���������� ����� �� ����������.');
DEFINE('_KUNENA_CBADDED', 'Community Builder ������� � ������.');
DEFINE('_KUNENA_IMGDELETED', '������������� � �������.');
DEFINE('_KUNENA_FILEDELETED', '������ � ������');
DEFINE('_KUNENA_NOPARENT', '���� ��-�����');
DEFINE('_KUNENA_DIRCOPERR', '������: ����');
DEFINE('_KUNENA_DIRCOPERR1', 'could not be copied!\n');
DEFINE('_KUNENA_INSTALL1', '<strong>Fireboard Forum</strong> Component <em>for Joomla! CMS</em> <br />&copy; 2006 - 2007 by Best Of Joomla<br>All rights reserved.');
DEFINE('_KUNENA_INSTALL2', '�������/�����������: </code></strong><br /><br /><font color="red"><b>�������</b>');

// added by aliyar 

DEFINE('_KUNENA_FORUMPRF_TITLE', '��������� �� ���������');
DEFINE('_KUNENA_FORUMPRF', '������');
DEFINE('_KUNENA_FORUMPRRDESC', '��� ����� ����������� ������������ Clexus PM ��� Community Builder, ��� ������ �� ��������� Kunena �� �������� ���������� � ������������� �������.');
DEFINE('_KUNENA_USERPROFILE_PROFILE', '������');
DEFINE('_KUNENA_USERPROFILE_PROFILEHITS', '<b>������</b>');
DEFINE('_KUNENA_USERPROFILE_MESSAGES', '������ ��������� �� ������');
DEFINE('_KUNENA_USERPROFILE_TOPICS', '����');
DEFINE('_KUNENA_USERPROFILE_STARTBY', '�������� ��');
DEFINE('_KUNENA_USERPROFILE_CATEGORIES', '���������');
DEFINE('_KUNENA_USERPROFILE_DATE', '����');
DEFINE('_KUNENA_USERPROFILE_HITS', '��������');
DEFINE('_KUNENA_USERPROFILE_NOFORUMPOSTS', '���� ������ ��� ������');
DEFINE('_KUNENA_TOTALFAVORITE', '������:  ');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_COLON', '���� ��������� ������  ');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_COLONDESC', '���� �� ����������� column formating under main category ');
DEFINE('_KUNENA_SUBSCRIPTIONSCHECKED', '��������� &quot;���������&quot; �� � ������ ��������?');
DEFINE('_KUNENA_SUBSCRIPTIONSCHECKED_DESC', '��� � &quot;��&quot; ��������� �� &quot;���������&quot; �� ������ �������� ��� ������� �� ������.');

// Errors (Re-integration from Joomlaboard 1.2)

DEFINE('_KUNENA_ERROR1', '�� ��� ������� ��� �� ������!');

// Forum Configuration (New in Kunena)

DEFINE('_KUNENA_SHOWSTATS', '������ ����������');
DEFINE('_KUNENA_SHOWSTATSDESC', '�������� &quot;��&quot; �� ��������� ���������� �� ������');
DEFINE('_KUNENA_SHOWWHOIS', '������ ������ � ������� �����������');
DEFINE('_KUNENA_SHOWWHOISDESC', '�������� &quot;��&quot; �� ��������� �� �������� � ������� �����������');
DEFINE('_KUNENA_STATSGENERAL', '������ ���� ����������');
DEFINE('_KUNENA_STATSGENERALDESC', '��� ������ �� �� �������� ���� ����������, �������� &quot;��&quot;');
DEFINE('_KUNENA_USERSTATS', '������ ���������� �� ��������� �����������');
DEFINE('_KUNENA_USERSTATSDESC', '');
DEFINE('_KUNENA_USERNUM', '���� ��������� �����������');
DEFINE('_KUNENA_USERPOPULAR', '������ ���������� �� ����������� ����');
DEFINE('_KUNENA_USERPOPULARDESC', '');
DEFINE('_KUNENA_NUMPOP', '���� ��������� ����');
DEFINE('_KUNENA_INFORMATION',
    'The Kunena team is proud to announce the release of Kunena 1.0.5. It is a powerful and stylish forum component for a well deserved content management system, Joomla!. It is initially based on the hard work of Joomlaboard and Fireboard and most of our praises goes to their team. Some of the main features of Kunena can be listed as below (in addition to JB&#39;s current features):<br /><br /><ul><li>A much more designer friendly forum system. It is close to SMF templating system having a simpler structue. With very few steps you can modify the total look of the forum. Thanks goes to the great designers in our team.</li><li>Unlimited subcategory system with better administration backend.</li><li>Faster system and better coding experience for 3rd parties.</li><li>The same<br /></li><li>Profilebox at the top of the forum</li><li>Support for popular PM systems, such as ClexusPM and Uddeim</li><li>Basic plugin system (practical rather than perfec)</li><li>Language-defined icon system.<br /></li><li>Sharing image system of other templates. So, choice between templates and image series is possible</li><li>You can add joomla modules inside the forum template itself. Wanted to have banner inside your forum?</li><li>Favourite threads selection and management</li><li>Forum spotlights and highlights</li><li>Forum announcements and its panel</li><li>Latest messages (Tabbed)</li><li>Statistics at bottom</li><li>Who&#39;s online, on what page?</li><li>Category specific image system</li><li>Enhanced pathway</li><li><strong>Joomlaboard import, SMF in plan to be releaed pretty soon</strong></li><li>RSS, PDF output</li><li>Advanced search (under developement)</li><li>Community builder and Clexus PM profile options</li><li>Avatar management : CB and Clexus PM options<br /></li></ul><br />Please keep in mind that this release is not meant to be used on production sites, even though we have tested it through. We are planning to continue to work on this project, as it is used on our several projects, and we would be pleased if you could join us to bring a bridge-free solution to Joomla! forums.<br /><br />This is a collaborative work of several developers and designers that have kindly participated and made this release come true. Here we thank all of them and wish that you enjoy this release!<br /><br />Kunena! team<br /></td></tr></table>>');
DEFINE('_KUNENA_INSTRUCTIONS', '����������');
DEFINE('_KUNENA_FINFO', '���������� �� Fireboard');
DEFINE('_KUNENA_CSSEDITOR', '�������� �� CSS ����� �� Fireboard Template');
DEFINE('_KUNENA_PATH', '��� �� ����:');
DEFINE('_KUNENA_CSSERROR', '�����: CSS.');

// User Management

DEFINE('_KUNENA_FUM', 'Kunena User Profile Manager');
DEFINE('_KUNENA_SORTID', '��������� �� �����');
DEFINE('_KUNENA_SORTMOD', '��������� �� ���������');
DEFINE('_KUNENA_SORTNAME', '��������� �� ���');
DEFINE('_KUNENA_VIEW', '������');
DEFINE('_KUNENA_NOUSERSFOUND', '���� ������ ������������� ������.');
DEFINE('_KUNENA_ADDMOD', '������ ��������� ��');
DEFINE('_KUNENA_NOMODSAV', '���� ������� ����������. ��� ����������� ��-����.');
DEFINE('_KUNENA_NOTEUS','���������: ���� �����������, ����� � ������� �� �� � ������������ ���� �� �������� ���. �� �� �������� ��������� ������� �� <a href="index2.php?option=com_kunena&task=profiles">���������� �� �����������</a>. ���� ���� �������� �������. ���������� ���� �� �������/�������� ���� �������������.');
DEFINE('_KUNENA_PROFFOR', '������ ��');
DEFINE('_KUNENA_GENPROF', '���� ��������� �� �������');
DEFINE('_KUNENA_PREFVIEW', '����������� ������:');
DEFINE('_KUNENA_PREFOR', '������������ ������� �� �����������:');
DEFINE('_KUNENA_ISMOD', '���������?:');
DEFINE('_KUNENA_ISADM', '<strong>��</strong> (�� ���� �� �� �������, ���� ���������� � (�����)�������������)');
DEFINE('_KUNENA_COLOR', '����');
DEFINE('_KUNENA_UAVATAR', '������������� ������:');
DEFINE('_KUNENA_NS', '���� �������');
DEFINE('_KUNENA_DELSIG', ' ��������� ������� �� �� �������� �������');
DEFINE('_KUNENA_DELAV', ' ��������� ������� �� �� �������� ��������');
DEFINE('_KUNENA_SUBFOR', '���������� ��');
DEFINE('_KUNENA_NOSUBS', '���� ���������� ���� ����������');

// Forum Administration (Re-integration from Joomlaboard 1.2)

DEFINE('_KUNENA_BASICS', '�������');
DEFINE('_KUNENA_BASICSFORUM', '������� ���������� �� ������');
DEFINE('_KUNENA_PARENT', '�����:');
DEFINE('_KUNENA_PARENTDESC','���.: �� �� ��������� ���������, �������� \'Top Level Category\' ���� �����. ���� ��������� ���� �� ������� ������� ������.<br />� ����� ���� �� ���� �������� <strong>����</strong> � ���������, ���� �������� ���� ��������� ��������� �� ����������.<br />������/��������/ <strong>�� �����</strong> �� ����� ����������� � ���������, � ���� ��� �����.');
DEFINE('_KUNENA_BASICSFORUMINFO', '�������� � ��� �� ������');
DEFINE('_KUNENA_NAMEADD', '���:');
DEFINE('_KUNENA_DESCRIPTIONADD', '��������:');
DEFINE('_KUNENA_ADVANCEDDESC', '������������ ��������� �� ������');
DEFINE('_KUNENA_ADVANCEDDESCINFO', '��������� � ������');
DEFINE('_KUNENA_LOCKEDDESC', '������� �� &quot;��&quot;, ��� ������ ���� ����� �� ���� �������� � ���� �������������� � ���������� �� ����� �� �������� ���� ���� �/��� �������� (��� �� ������ ���).');
DEFINE('_KUNENA_LOCKED1', '��������:');
DEFINE('_KUNENA_PUBACC', '���� �� �������� ������:');
DEFINE('_KUNENA_PUBACCDESC','�� �� ��������� �����, ����� �� � �������� ���� �� �������� ���� �����������, ������ �� ���������� ����������� ���� �� ������ ���. �� ������������ �� �: &quot;������&quot;.<br /><b>���������</b>: ��� ���������� ������� �� ���� ��������� �� ���� ��� ������� �����, ���� �� ����� ������ ��������� �� � ��� ������ �� ������, ����� ����� ������� ����� <b>even</b> if one or more of these Forums have a lower access level set! This holds for Moderators too; you will have to add a Moderator to the moderator list of the Category if (s)he does not have the proper group level to see the Category.<br /> This is irrespective of the fact that Categories can not be Moderated; Moderators can still be added to the moderator list.');
DEFINE('_KUNENA_CGROUPS', '������ ����������:');
DEFINE('_KUNENA_CGROUPSDESC', '�� �� ������� �� ������ �� ����������? ��� e &quot;��&quot;, �������� �� ���� ����� �� ���� ��������� �� ������� �����');
DEFINE('_KUNENA_ADMINLEVEL', '���� �� ���������������� ������:');
DEFINE('_KUNENA_ADMINLEVELDESC','��� ��������� ����� ��������� �� �������� ������, ��� ���������� �������������� ���� �� ���������������� ������.<br />��� ���������� ������� �� ������ �� ���������� ������������� ����� � �� ���������� ������� ���, ���������������� ���� �� ����� �� ������/���������� ������.');
DEFINE('_KUNENA_ADVANCED', '������������');
DEFINE('_KUNENA_CGROUPS1', '��������� �� ������������ �����:');
DEFINE('_KUNENA_CGROUPS1DESC', '�� �� ������� �� ������ � �� ���-��������? ��� � &quot;�� &quot; �������� �� ���� ����� � ��������� <b>����</b> �� ��������� �����.');
DEFINE('_KUNENA_REV', '��������� �� ���������:');
DEFINE('_KUNENA_REVDESC','�������� &quot;��&quot; �� �� �������� ��������� �� ���������, ����� �������� �� ���� �����������. ���� ������� � ������� ���� �� ������,����� �� ���������!<br />��� � ��������, � ������ ����������, �������������� �� ����� � ���������� ��������� �� �����������/����������� �� ��������� ������, ����� �� ����� ���� &quot;������&quot;!');
DEFINE('_KUNENA_MOD_NEW', '����������');
DEFINE('_KUNENA_MODNEWDESC', '���������� � ����������');
DEFINE('_KUNENA_MOD', '��������� �� ����������');
DEFINE('_KUNENA_MODDESC','�������� &quot;��&quot; ��� ������� �� �������� ���������� � ���� �����.<br /><strong>���.:</strong> ���� �� ��������, �� ������ ������ ������ �� ����� ���������� ����� �� �� ���������� ��� ������!<br /> ������ �� �������� ����������� &quot;�������&quot; � ���� &quot;������������&quot;.<br /><br /> <strong>����� ���������:</strong> ���� ��������� &quot;����������&quot; �� &quot;��&quot; ������ ����� �� �������� �������������� � ���� ���� �� ������ �� �������� ����������.');
DEFINE('_KUNENA_MODHEADER', '����� �� ������������ �� ���� �����');
DEFINE('_KUNENA_MODSASSIGNED', '���������� �� ������:');
DEFINE('_KUNENA_NOMODS', '���� ���������� ���������� �� ���� �����.');

// Some General Strings (Improvement in Kunena)

DEFINE('_KUNENA_EDIT', '�������');
DEFINE('_KUNENA_ADD', '���������');

// Reorder (Re-integration from Joomlaboard 1.2)

DEFINE('_KUNENA_MOVEUP', '������');
DEFINE('_KUNENA_MOVEDOWN', '������');

// Groups - Integration in Kunena

DEFINE('_KUNENA_ALLREGISTERED', '���� ������������');
DEFINE('_KUNENA_EVERYBODY', '������');

// Removal of hardcoded strings in admin panel (Re-integration from Joomlaboard 1.2)

DEFINE('_KUNENA_REORDER', '��������');
DEFINE('_KUNENA_CHECKEDOUT', '���������');
DEFINE('_KUNENA_ADMINACCESS', '������ �� ����������������');
DEFINE('_KUNENA_PUBLICACCESS', '������ �� ������');
DEFINE('_KUNENA_PUBLISHED', '����������');
DEFINE('_KUNENA_REVIEW', '�������');
DEFINE('_KUNENA_MODERATED', '���������');
DEFINE('_KUNENA_LOCKED', '��������');
DEFINE('_KUNENA_CATFOR', '��������� / �����');
DEFINE('_KUNENA_ADMIN', '&nbsp;?Kunena �������������');
DEFINE('_KUNENA_CP', '��������� ����� �� Fireboard');

// Configuration page - Headings (Re-integrated from Joomlaboard 1.2)

DEFINE('_COM_A_AVATAR_INTEGRATION', '���������� �� ���������');
DEFINE('_COM_A_RANKS_SETTINGS', '�������');
DEFINE('_COM_A_RANKING_SETTINGS', '��������� �� ���������');
DEFINE('_COM_A_AVATAR_SETTINGS', '��������� �� ���������');
DEFINE('_COM_A_SECURITY_SETTINGS', '��������� �� �����������');
DEFINE('_COM_A_BASIC_SETTINGS', '������� ���������');

// Kunena 1.0.0

//
DEFINE('_COM_A_FAVORITES','����������� �� &quot;������ ����&quot;');
DEFINE('_COM_A_FAVORITES_DESC','�������� &quot;��&quot; �������������� ����������� �� �������� ���� ���� ������.');
DEFINE('_USER_UNFAVORITE_ALL','�������� ���� ���� �� �� <b><u>���������� �� ��������</u></b> �� ������ ���� (����������� � ����������)');
DEFINE('_VIEW_FAVORITETXT','�������� � ������ ');
DEFINE('_USER_UNFAVORITE_YES','��� ����������� ������ �� ������');
DEFINE('_POST_FAVORITED_TOPIC','�������� � �������� � ������.');
DEFINE('_VIEW_UNFAVORITETXT','������ ����');
DEFINE('_VIEW_UNSUBSCRIBETXT','���������');
DEFINE('_USER_NOFAVORITES','���� ������ ����');
DEFINE('_POST_SUCCESS_FAVORITE','������ � �������� � ������.');
DEFINE('_COM_A_MESSAGES_SEARCH','��������� �� ���������');
DEFINE('_COM_A_MESSAGES_DESC_SEARCH','���� ��������� �� ��������� �� ��������.');
DEFINE('_KUNENA_USE_JOOMLA_STYLE','�� �������� �� Joomla ����?');
DEFINE('_KUNENA_USE_JOOMLA_STYLE_DESC','��� ������ �� ���������� ���� Joomla, �������� ��. (class: ���� sectionheader, sectionentry1 ...) ');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_ON_LIST','������� ����� ��� ������');
DEFINE('_KUNENA_SHOW_CHILD_CATEGORY_ON_LIST_DESC','��� ������ �� ������� ����� ��� ������, �������� ��. ');
DEFINE('_KUNENA_SHOW_ANNOUNCEMENT','������� �����');
DEFINE('_KUNENA_SHOW_ANNOUNCEMENT_DESC','�������� &quot;��&quot; , ��� ������ �� ������� ���� � ����� �� ������.');
DEFINE('_KUNENA_SHOW_AVATAR_ON_CAT','������� ��������� � ������� � ���������?');
DEFINE('_KUNENA_SHOW_AVATAR_ON_CAT_DESC','�������� &quot;��&quot; , ��� ������ �� ������� ��������������� ��������� � ������� � ���������.');
DEFINE('_KUNENA_RECENT_POSTS','��������� �� ���������� ������');
DEFINE('_KUNENA_SHOW_LATEST_MESSAGES','�������� ������');
DEFINE('_KUNENA_SHOW_LATEST_MESSAGES_DESC','�������� &quot;��&quot; ��� ������ �� ������� ���������� ������ ��� ����� �����');
DEFINE('_KUNENA_NUMBER_OF_LATEST_MESSAGES','���� �������� ������');
DEFINE('_KUNENA_NUMBER_OF_LATEST_MESSAGES_DESC','���� �������� ������ ����� �� �������');
DEFINE('_KUNENA_COUNT_PER_PAGE_LATEST_MESSAGES','���� �� ��� ');
DEFINE('_KUNENA_COUNT_PER_PAGE_LATEST_MESSAGES_DESC','���� ������ �� ���');
DEFINE('_KUNENA_LATEST_CATEGORY','������� ���������');
DEFINE('_KUNENA_LATEST_CATEGORY_DESC','�������� ���������(�) �� ����� �� ������� ���������� ������. ������:2,3,7 ');
DEFINE('_KUNENA_SHOW_LATEST_SINGLE_SUBJECT','������� ������');
DEFINE('_KUNENA_SHOW_LATEST_SINGLE_SUBJECT_DESC','');
DEFINE('_KUNENA_SHOW_LATEST_REPLY_SUBJECT','������� ������� ��� ����');
DEFINE('_KUNENA_SHOW_LATEST_REPLY_SUBJECT_DESC','');
DEFINE('_KUNENA_LATEST_SUBJECT_LENGTH','������� �� ����������');
DEFINE('_KUNENA_LATEST_SUBJECT_LENGTH_DESC','');
DEFINE('_KUNENA_SHOW_LATEST_DATE','������� ����');
DEFINE('_KUNENA_SHOW_LATEST_DATE_DESC','');
DEFINE('_KUNENA_SHOW_LATEST_HITS','������� ��������');
DEFINE('_KUNENA_SHOW_LATEST_HITS_DESC','');
DEFINE('_KUNENA_SHOW_AUTHOR','������� �����');
DEFINE('_KUNENA_SHOW_AUTHOR_DESC','1=������������� ���, 2=�������� ���, 0=����');
DEFINE('_KUNENA_STATS','��������� �� ������������ ');
DEFINE('_KUNENA_CATIMAGEPATH','��� ��� ������� �� ��������� ');
DEFINE('_KUNENA_CATIMAGEPATH_DESC','��� ��� ������� "category_images/", ������ ��� �� ���� "components/com_kunena/category_images/"');
DEFINE('_KUNENA_ANN_MODID','������ ID �� ������������ ');
DEFINE('_KUNENA_ANN_MODID_DESC','������ ��������������� id �� ��������. ��. 62,63,73 . ������������ ����������, ����� �� �����, �������� � ���������� ������.');

//

DEFINE('_KUNENA_FORUM_TOP','��������� ');
DEFINE('_KUNENA_CHILD_BOARDS','������������');
DEFINE('_KUNENA_QUICKMSG','���� ������� ');
DEFINE('_KUNENA_THREADS_IN_FORUM','���� ��� ������');
DEFINE('_KUNENA_FORUM','����� ');
DEFINE('_KUNENA_SPOTS','Spotlights');
DEFINE('_KUNENA_CANCEL','�����');
DEFINE('_KUNENA_TOPIC','����: ');
DEFINE('_KUNENA_POWEREDBY','��������� � ');

// Time Format

DEFINE('_TIME_TODAY','<b>����</b> ');
DEFINE('_TIME_YESTERDAY','<b>�����</b> ');

//  STARTS HERE!

DEFINE('_KUNENA_WHO_LATEST_POSTS','�������� ������');
DEFINE('_KUNENA_WHO_WHOISONLINE','��� � �� �����');
DEFINE('_KUNENA_WHO_MAINPAGE','������ �� ������');
DEFINE('_KUNENA_GUEST','����');
DEFINE('_KUNENA_PATHWAY_VIEWING','���������(�)');
DEFINE('_KUNENA_ATTACH','���������');

// Favorite

DEFINE('_KUNENA_FAVORITE','������ ����');
DEFINE('_USER_FAVORITES','������ ������ ����');
DEFINE('_THREAD_UNFAVORITE','���������� �� ������ ����');

// profilebox

DEFINE('_PROFILEBOX_WELCOME','����� �����');
DEFINE('_PROFILEBOX_SHOW_LATEST_POSTS','�������� ������');
DEFINE('_PROFILEBOX_SET_MYAVATAR','����� �� ������');
DEFINE('_PROFILEBOX_MYPROFILE','������');
DEFINE('_PROFILEBOX_SHOW_MYPOSTS','����� ������');
DEFINE('_PROFILEBOX_GUEST','����');
DEFINE('_PROFILEBOX_LOGIN','������');
DEFINE('_PROFILEBOX_REGISTER','�� �������������');
DEFINE('_PROFILEBOX_LOGOUT','�����');
DEFINE('_PROFILEBOX_LOST_PASSWORD','��������� ������?');
DEFINE('_PROFILEBOX_PLEASE','����');
DEFINE('_PROFILEBOX_OR','���');

// recentposts

DEFINE('_RECENT_RECENT_POSTS','�������� ������');
DEFINE('_RECENT_TOPICS','����');
DEFINE('_RECENT_AUTHOR','�����');
DEFINE('_RECENT_CATEGORIES','���������');
DEFINE('_RECENT_DATE','����');
DEFINE('_RECENT_HITS','������');

// announcement

DEFINE('_ANN_ANNOUNCEMENTS', '���������');
DEFINE('_ANN_ID','ID');
DEFINE('_ANN_DATE','����');
DEFINE('_ANN_TITLE','��������');
DEFINE('_ANN_SORTTEXT','����� �� ���������');
DEFINE('_ANN_LONGTEXT','����� �����');
DEFINE('_ANN_ORDER','���');
DEFINE('_ANN_PUBLISH','�����������');
DEFINE('_ANN_PUBLISHED','�����������');
DEFINE('_ANN_UNPUBLISHED','������');
DEFINE('_ANN_EDIT','�������');
DEFINE('_ANN_DELETE','���������');
DEFINE('_ANN_SUCCESS','�������');
DEFINE('_ANN_SAVE','�����');
DEFINE('_ANN_YES','��');
DEFINE('_ANN_NO','��');
DEFINE('_ANN_ADD','���� ���������');
DEFINE('_ANN_SUCCESS_EDIT','������� �������');
DEFINE('_ANN_SUCCESS_ADD','������� ��������');
DEFINE('_ANN_DELETED','������� �������');
DEFINE('_ANN_ERROR','������!');
DEFINE('_ANN_READMORE','���...');
DEFINE('_ANN_CPANEL','��������� ����� �� ������');
DEFINE('_ANN_SHOWDATE','������� ����');

// Stats

DEFINE('_STAT_FORUMSTATS','����������');
DEFINE('_STAT_GENERAL_STATS','���� ����������');
DEFINE('_STAT_TOTAL_USERS','���� �����������');
DEFINE('_STAT_LATEST_MEMBERS','�������� �����������');
DEFINE('_STAT_PROFILE_INFO','������ ���� �� �������');
DEFINE('_STAT_TOTAL_MESSAGES','���� ������');
DEFINE('_STAT_TOTAL_SUBJECTS','���� ����');
DEFINE('_STAT_TOTAL_CATEGORIES','���� ���������');
DEFINE('_STAT_TOTAL_SECTIONS','���� ������');
DEFINE('_STAT_TODAY_OPEN_THREAD','��������� ����');
DEFINE('_STAT_YESTERDAY_OPEN_THREAD','��������� �����');
DEFINE('_STAT_TODAY_TOTAL_ANSWER','���� �������� �� ����');
DEFINE('_STAT_YESTERDAY_TOTAL_ANSWER','���� �������� �� �����');
DEFINE('_STAT_VIEW_RECENT_POSTS_ON_FORUM','������� �� ���������� ������');
DEFINE('_STAT_MORE_ABOUT_STATS','��� ����������');
DEFINE('_STAT_USERLIST','������ � �����������');
DEFINE('_STAT_TEAMLIST','����');
DEFINE('_STATS_FORUM_STATS','����������');
DEFINE('_STAT_POPULAR','���������');
DEFINE('_STAT_POPULAR_USER_TMSG','����������� (���� ������) ');
DEFINE('_STAT_POPULAR_USER_KGSG','���� ');
DEFINE('_STAT_POPULAR_USER_GSG','����������� (���� �������� �� �������) ');

//Team List

DEFINE('_MODLIST_ONLINE','������� �����������: ');
DEFINE('_MODLIST_OFFLINE','��������');

// Whoisonline

DEFINE('_WHO_WHOIS_ONLINE','��� � �� �����');
DEFINE('_WHO_ONLINE_NOW','�� �����:');
DEFINE('_WHO_ONLINE_MEMBERS','�����������');
DEFINE('_WHO_AND','�');
DEFINE('_WHO_ONLINE_GUESTS','�����');
DEFINE('_WHO_ONLINE_USER','����������');
DEFINE('_WHO_ONLINE_TIME','���');
DEFINE('_WHO_ONLINE_FUNC','��������');

// Userlist

DEFINE('_USRL_USERLIST','������������� ������');
DEFINE('_USRL_REGISTERED_USERS','%s ��� <b>%d</b> ������������ �����������');
DEFINE('_USRL_SEARCH_ALERT','���� �������� �������� �� �������!');
DEFINE('_USRL_SEARCH','������� �� ����������');
DEFINE('_USRL_SEARCH_BUTTON','�������');
DEFINE('_USRL_LIST_ALL','������� ������');
DEFINE('_USRL_NAME','���');
DEFINE('_USRL_USERNAME','����������');
DEFINE('_USRL_EMAIL','�-����');
DEFINE('_USRL_USERTYPE','����. ���');
DEFINE('_USRL_JOIN_DATE','�����������');
DEFINE('_USRL_LAST_LOGIN','�������� ����');
DEFINE('_USRL_NEVER','������');
DEFINE('_USRL_BLOCK','������');
DEFINE('_USRL_MYPMS2','MyPMS');
DEFINE('_USRL_ASC','���������');
DEFINE('_USRL_DESC','���������');
DEFINE('_USRL_DATE_FORMAT','%d.%m.%y %H:%M');
DEFINE('_USRL_TIME_FORMAT','%H:%M');
DEFINE('_USRL_USEREXTENDED','�������');
DEFINE('_USRL_COMPROFILER','������');
DEFINE('_USRL_THUMBNAIL','������');
DEFINE('_USRL_READON','�������');
DEFINE('_USRL_MYPMSPRO', 'Clexus PM');
DEFINE('_USRL_MYPMSPRO_SENDPM', '������� ��');
DEFINE('_USRL_JIM', '��');
DEFINE('_USRL_UDDEIM', '��');
DEFINE('_USRL_SEARCHRESULT', '��������� ��:');
DEFINE('_USRL_STATUS', '������');
DEFINE('_USRL_LISTSETTINGS', 'Userlist Settings');
DEFINE('_USRL_ERROR', '������');

//changed in 1.1.4 stable

DEFINE('_COM_A_PMS_TITLE','����� ���������');
DEFINE('_COM_A_COMBUILDER_TITLE','Community Builder');
DEFINE('_FORUM_SEARCH','������� ��: %s');
DEFINE('_MODERATION_DELETE_MESSAGE','������� �� ���, �� ������ �� �������� ���� ���������? ���������: �� ������ �� ������������ ����������� ���� ����!');
DEFINE('_MODERATION_DELETE_SUCCESS','�������� ���� �������');
DEFINE('_COM_A_RANKING','�������');
DEFINE('_COM_A_BOT_REFERENCE','������ ������������ �� ����');
DEFINE('_COM_A_MOSBOT','��������� �� ���� �� �����������');
DEFINE('_PREVIEW','�������');
DEFINE('_COM_A_MOSBOT_TITLE', 'Discussbot');
DEFINE('_COM_A_MOSBOT_DESC','����� ��������� �������� �� ������������ �� ����� ����������� ��� ������. �� ������ ����������, ���� ��������� �������������� �� ����� ���. ��� ������ �� ���� ���������� �������.' );

//new in 1.1.4 stable

// search.class.php

DEFINE('_FORUM_SEARCHTITLE','�������');
DEFINE('_FORUM_SEARCHRESULTS','�������� �� %s �� ���� %s ���������.');

// Help, FAQ

DEFINE('_COM_FORUM_HELP','�������');

// rules.php

DEFINE('_COM_FORUM_RULES','�������');
DEFINE('_COM_FORUM_RULES_DESC','<h3 class="contentheading">������� �� ������</h3><ul><li>������������ ���� ����� ��� ����� joomlaroot/administrator/components/com_kunena/language/bulgarian.php</li><li>������� 2</li><li>������� 3</li><li>������� 4</li><li>...</li></ul>');

//smile.class.php

DEFINE('_COM_BOARDCODE','���');

// moderate_messages.php

DEFINE('_MODERATION_APPROVE_SUCCESS','�������� ���� ��������');
DEFINE('_MODERATION_DELETE_ERROR','������: �������� �� ���� �� ���� �������');
DEFINE('_MODERATION_APPROVE_ERROR','������: �������� �� ���� �� ���� ��������');

// listcat.php

DEFINE('_GEN_NOFORUMS','���� ������ � ���� ���������!');

//new in 1.1.3 stable

DEFINE('_POST_GHOST_FAILED','����������� � ������ ����� �� �� ���������!');
DEFINE('_POST_MOVE_GHOST','�������� ��������� �� ������������� � �������� �����');

//new in 1.1 Stable

DEFINE('_GEN_FORUM_JUMP','����� �� �����');
DEFINE('_COM_A_FORUM_JUMP','����� �� �����');
DEFINE('_COM_A_FORUM_JUMP_DESC','�������� &quot;��&quot; �� �� �� ������� ������ ���� � ����� ������ ��� ��������.');

//new in 1.1 RC1

DEFINE('_GEN_RULES','�������');
DEFINE('_COM_A_RULESPAGE','�������');
DEFINE('_COM_A_RULESPAGE_DESC','�������� &quot;��&quot; �� �� �� �������� ������ ��� ��������� �� ������.');
DEFINE('_MOVED_TOPIC','����������:');
DEFINE('_COM_A_PDF','�������� �� PDF');
DEFINE('_COM_A_PDF_DESC','�������� &quot;��&quot; ��� ������ ������������� �� ���� �� ����������� �������� � PDF. ������ �������, �� ������� �� ������ �� ��������.');
DEFINE('_GEN_PDFA','��������� �� �� ��������� PDF ��������.');
DEFINE('_GEN_PDF', 'PDF');

//new in 1.0.4 stable

DEFINE('_VIEW_PROFILE','����� ������� �� �����������');
DEFINE('_VIEW_ADDBUDDY','��������� ��� �� �� �������� ���� ���������� � ������� � ��������');
DEFINE('_POST_SUCCESS_POSTED','�������� �� ����������� �������');
DEFINE('_POST_SUCCESS_VIEW','[ ������� ��� �������� ]');
DEFINE('_POST_SUCCESS_FORUM','[ ������� ��� ������ ]');
DEFINE('_RANK_ADMINISTRATOR','�������������');
DEFINE('_RANK_MODERATOR','���������');
DEFINE('_SHOW_LASTVISIT','���� ���������� ���������');
DEFINE('_COM_A_BADWORDS_TITLE','����������� �� ����');
DEFINE('_COM_A_BADWORDS','�������� �� ������ �� �������');
DEFINE('_COM_A_BADWORDS_DESC','�������� &quot;��&quot; ��� ������ �� �������� ������������ �� ���������� �� ������� �� ���� ����. �� �� �������� ���� �������, ������ �� ����� ���������� ���������� Badwords!');
DEFINE('_COM_A_BADWORDS_NOTICE','* �������� � ����������� ������ ������� ���������� ���� *');
DEFINE('_COM_A_COMBUILDER_PROFILE','��������� �� �������� �� ������ � Community Builder');
DEFINE('_COM_A_COMBUILDER_PROFILE_DESC','');
DEFINE('_COM_A_COMBUILDER_PROFILE_CLICK','��������� ���');
DEFINE('_COM_A_COMBUILDER','������� � Community Builder');
DEFINE('_COM_A_COMBUILDER_DESC','�������� &quot;��&quot; �� �� ����������� ������ ������ � Community Builder. �� �� ����������� �������� ������������ ��������� ���������� ������ � ���� �� ��������� �� ������������ ������ � Community Builder.');
DEFINE('_COM_A_AVATAR_SRC','��������� ������ ��');
DEFINE('_COM_A_AVATAR_SRC_DESC','��� ����� ����������� myPMS (Clexus) ��� Community Builder, ������ �� �������� �� �� ������� �������� �� ���� ����������.');
DEFINE('_COM_A_KARMA','�������� �� �������');
DEFINE('_COM_A_KARMA_DESC','�������� &quot;��&quot; �� �� ��������� ���� �� �������������.');
DEFINE('_COM_A_DISEMOTICONS','������� �� ��������');
DEFINE('_COM_A_DISEMOTICONS_DESC','�������� &quot;��&quot; �� �� ��������� ������� �������� ��� ������.');
DEFINE('_COM_C_KUNENACONFIG','��������� �� Fireboard');
DEFINE('_COM_C_KUNENACONFIGDESC','��������� ��������� �� ������');
DEFINE('_COM_C_FORUM','������������� �� ��������');
DEFINE('_COM_C_FORUMDESC','�������� � ���������� �� ������ � ���������');
DEFINE('_COM_C_USER','������������� �� �������������');
DEFINE('_COM_C_USERDESC','������� ��������� �� ������������� � ���������������� ��');
DEFINE('_COM_C_FILES','������ �������');
DEFINE('_COM_C_FILESDESC','���������� �� �������� �������');
DEFINE('_COM_C_IMAGES','������ ������');
DEFINE('_COM_C_IMAGESDESC','���������� �� �������� ������');
DEFINE('_COM_C_CSS','�������� �� CSS �����');
DEFINE('_COM_C_CSSDESC','��������� ������� �� ����������');
DEFINE('_COM_C_SUPPORT','��������� ��� ����');
DEFINE('_COM_C_SUPPORTDESC','�������� ���������� ��� ���� � ��� ��������');
DEFINE('_COM_C_PRUNETAB','����������� �� ��������');
DEFINE('_COM_C_PRUNETABDESC','�������� ������� ����');
DEFINE('_COM_C_PRUNEUSERS','����������� �� �����������');
DEFINE('_COM_C_PRUNEUSERSDESC','��������������� ������������� �� ������ ��� �����');
DEFINE('_COM_C_LOADSAMPLE','����������� �� �������� �����');
DEFINE('_COM_C_LOADSAMPLEDESC','�� �� ��������� �����, �������� �������� ����� ��� ������');
DEFINE('_COM_C_REMOVESAMPLE', '���������� �� �������� �����');
DEFINE('_COM_C_REMOVESAMPLEDESC', '�������� ���������� ����� �� ������ ���� �����.');
DEFINE('_COM_C_LOADMODPOS', '��������� ������� �� ��������');
DEFINE('_COM_C_LOADMODPOSDESC', '������� ������� �� �������� �� ������� �� FireBoard');
DEFINE('_COM_C_UPGRADEDESC','�������� ������ �� ����� �� �������� ������.');
DEFINE('_COM_C_BACK','��������� �����');
DEFINE('_SHOW_LAST_SINCE','������� ���� ���� ���������� �� ��������� ��:');
DEFINE('_POST_SUCCESS_REQUEST2','������ ������ �� ���������');
DEFINE('_POST_NO_PUBACCESS3','��������� �� �� �� ������������.');

//==================================================================================================

//Changed in 1.0.4
//please update your local language file with these changes as well

DEFINE('_POST_SUCCESS_DELETE','�������� �� ������� �������.');
DEFINE('_POST_SUCCESS_EDIT','�������� �� ����������� �������.');
DEFINE('_POST_SUCCESS_MOVE','�������� �� ���������� �������.');
DEFINE('_POST_SUCCESS_POST','�������� �� ������� �����������.');
DEFINE('_POST_SUCCESS_SUBSCRIBE','����������� � �������.');

//==================================================================================================

//new in 1.0.3 stable
//Karma
DEFINE('_KARMA','�����');
DEFINE('_KARMA_SMITE','����');
DEFINE('_KARMA_APPLAUD','�����');
DEFINE('_KARMA_BACK','�� �� �� ������� � ������,');
DEFINE('_KARMA_WAIT','������ �� ��������� �� ��������� ���������� �� ����� ���� ����.');
DEFINE('_KARMA_SELF_DECREASE','�� �� ��������� �� ���������� ����������� �� �����!');
DEFINE('_KARMA_SELF_INCREASE','������ ���� �� �������, ������ ����� �� �� �� ��������!');
DEFINE('_KARMA_DECREASED','������ �� �������');
DEFINE('_KARMA_INCREASED','������ �� �������,');
DEFINE('_COM_A_TEMPLATE','������');
DEFINE('_COM_A_TEMPLATE_DESC','�������� ��� ������ �� ��������.');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH', '����� ������');
DEFINE('_COM_A_TEMPLATE_IMAGE_PATH_DESC', '�������� ����� ������ �� �������.');
DEFINE('_PREVIEW_CLOSE','�������');

//==========================================

//new in 1.0 Stable

DEFINE('_COM_A_POSTSTATSBAR','��������� �� ���������� ���� �������');
DEFINE('_COM_A_POSTSTATSBAR_DESC','�������� &quot;��&quot; ��� ������ ���� �� �������� �� �� ������� ���� �������.');
DEFINE('_COM_A_POSTSTATSCOLOR','���� �� ������������');
DEFINE('_COM_A_POSTSTATSCOLOR_DESC','�������� � ����� ���� �� �� ������� ������������.');
DEFINE('_LATEST_REDIRECT','����� � �� �� ������������� ������.');
DEFINE('_SMILE_COLOUR','����');
DEFINE('_SMILE_SIZE','������');
DEFINE('_COLOUR_DEFAULT','��������');
DEFINE('_COLOUR_RED','������');
DEFINE('_COLOUR_PURPLE','�����');
DEFINE('_COLOUR_BLUE','���');
DEFINE('_COLOUR_GREEN','�����');
DEFINE('_COLOUR_YELLOW','����');
DEFINE('_COLOUR_ORANGE','�������');
DEFINE('_COLOUR_DARKBLUE','����� �����');
DEFINE('_COLOUR_BROWN','������');
DEFINE('_COLOUR_GOLD','������');
DEFINE('_COLOUR_SILVER','��������');
DEFINE('_SIZE_NORMAL','��������');
DEFINE('_SIZE_SMALL','�����');
DEFINE('_SIZE_VSMALL','����� �����');
DEFINE('_SIZE_BIG','�����');
DEFINE('_SIZE_VBIG','����� �����');
DEFINE('_IMAGE_SELECT_FILE','�������� �����������');
DEFINE('_FILE_SELECT_FILE','�������� ����');
DEFINE('_FILE_NOT_UPLOADED','������ �� �� �����. �������� �� ����������� �������� � �� �� �������� ������.');
DEFINE('_IMAGE_NOT_UPLOADED','������������� �� �� ������. �������� �� ����������� �������� � �� �� �������� ������.');
DEFINE('_BBCODE_IMGPH','�������� [img]� �������� �� �� �������� ������ ��� ����');
DEFINE('_BBCODE_FILEPH','�������� [file] � �������� �� �� �������� ������ ��� ����');
DEFINE('_POST_ATTACH_IMAGE','[img]');
DEFINE('_POST_ATTACH_FILE','[file]');
DEFINE('_USER_UNSUBSCRIBE_ALL','������� �� ������ ����������');
DEFINE('_LINK_JS_REMOVED','<em>����� ������ �� ���������.</em>');

//==========================================

//new in 1.0 RC4

DEFINE('_COM_A_LOOKS','������');
DEFINE('_COM_A_USERS','�����������');
DEFINE('_COM_A_LENGTHS','�������');
DEFINE('_COM_A_SUBJECTLENGTH','���������� ������� �� ����������');
DEFINE('_COM_A_SUBJECTLENGTH_DESC','���������� ������� �� ���������� �� ������. �� windows-1251 ���� �� ���� �� 255 �������, � �� UTF-8 ���� �� ���� �� 63 �������.');
DEFINE('_LATEST_THREADFORUM','����/�����');
DEFINE('_LATEST_NUMBER','���� ������');
DEFINE('_COM_A_SHOWNEW','��������� �� ���� ������');
DEFINE('_COM_A_SHOWNEW_DESC','�������� &quot;��&quot; �� �� �� ������� ��������� �� ���� ���������.');
DEFINE('_COM_A_NEWCHAR','��������� �� &quot;����&quot;');
DEFINE('_COM_A_NEWCHAR_DESC','�������� ��� �� ����� ��������� ������ ������ (������ &quot;!&quot; ��� &quot;����!&quot;)');
DEFINE('_LATEST_AUTHOR','�������� �����');
DEFINE('_GEN_FORUM_NEWPOST','��� ���� ������ ���� ���������� �� ���������.');
DEFINE('_GEN_FORUM_NOTNEW','���� ���� ������ ���� ���������� �� ���������.');
DEFINE('_GEN_UNREAD','��� ���� �������� ���� ���������� �� ���������.');
DEFINE('_GEN_NOUNREAD','���� ���� �������� ���� ���������� �� ���������.');
DEFINE('_GEN_MARK_ALL_FORUMS_READ','�������� ���� ���������');
DEFINE('_GEN_MARK_THIS_FORUM_READ','�������� ���� ���������');
DEFINE('_GEN_FORUM_MARKED','������ ������ � ���� ����� ���� ��������� ���� ���������');
DEFINE('_GEN_ALL_MARKED','������ ������ ���� ��������� ���� ���������');
DEFINE('_IMAGE_UPLOAD','������� �� �����������');
DEFINE('_IMAGE_DIMENSIONS','���������� ������� (�������� x ��������)');
DEFINE('_IMAGE_ERROR_TYPE','������ �� ������� ���� jpeg, gif � png �����������');
DEFINE('_IMAGE_ERROR_EMPTY','���� �������� ����');
DEFINE('_IMAGE_ERROR_SIZE','�������� �� ������������� ��������� ����������� ��������.');
DEFINE('_IMAGE_ERROR_WIDTH','���������� �� ������������� ��������� ���������');
DEFINE('_IMAGE_ERROR_HEIGHT','���������� �� ������������� ��������� ���������.');
DEFINE('_IMAGE_UPLOADED','������ ����������� ���� ������.');
DEFINE('_COM_A_IMAGE','������');
DEFINE('_COM_A_IMGHEIGHT','���������� �������� �� �������������');
DEFINE('_COM_A_IMGWIDTH','���������� ���������� �������������');
DEFINE('_COM_A_IMGSIZE','���������� ������ �� ������������� � ��������� (KB)');
DEFINE('_COM_A_IMAGEUPLOAD','����� �� ������� �� ������ �����������?');
DEFINE('_COM_A_IMAGEUPLOAD_DESC','�������� &quot;��&quot; ��� ������ �� ��������� �� ������ ����������� �� ������ ������ ��� ��������.');
DEFINE('_COM_A_IMAGEREGUPLOAD','����� �� �������������� ����������� �� ������ �����������?');
DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','�������� &quot;��&quot; ��� ������ �� ��������� �� �������������� ����������� �� ������� ������ ��� ��������. ���������������� � ������������ ������ ���� ���� ����������.');DEFINE('_COM_A_IMAGEREGUPLOAD_DESC','Set to &quot;��&quot;, ��� ������ �������������� ����������� �� ����� �� ������ �����������.<br/> Note: (�����)���������������� � ������������ ������ ����� �� ������ �����������.');

//New since preRC4-II:

DEFINE('_COM_A_UPLOADS','�������');
DEFINE('_FILE_TYPES','������ ���� �� ���� �������� ');
DEFINE('_FILE_ERROR_TYPE','������ �� ������� ���� ������� � ����������:\n');
DEFINE('_FILE_ERROR_EMPTY','���� �������� ����');
DEFINE('_FILE_ERROR_SIZE','������ ��������� ���������� ������.');
DEFINE('_COM_A_FILE','�������');
DEFINE('_COM_A_FILEALLOWEDTYPES','��������� �������');
DEFINE('_COM_A_FILEALLOWEDTYPES_DESC','�������� ��� ����������� ���������� �� ��������� �������. ��������� �� ��� ������� � <strong>��������� ���� ����� �����</strong> ��� ���������. ������: zip,txt,exe,htm,html');
DEFINE('_COM_A_FILESIZE','���������� ������ �� ��������� � ��������� (KB)');
DEFINE('_COM_A_FILEUPLOAD','����� �� ������� �� ������ �������');
DEFINE('_COM_A_FILEUPLOAD_DESC','�������� &quot;��&quot; ��� ������ �� ��������� �� ������ ����������� � ���������� �� ����� �� ������� ������� � ��������.');
DEFINE('_COM_A_FILEREGUPLOAD','����� �� ������������ ����������� �� ������ �� �������?');
DEFINE('_COM_A_FILEREGUPLOAD_DESC','�������� &quot;��&quot; ��� ������ �� ��������� �� �������������� ����������� �� ������� ������� ��� ��������. ���������������� � ������������ ������ ���� ���� ����������.');
DEFINE('_SUBMIT_CANCEL','�������� �� ���� �����������.');
DEFINE('_HELP_SUBMIT','��������� ��� �� �� ����������� ��������');
DEFINE('_HELP_PREVIEW','��������� ��� �� �� ������ ��� �� �������� ��������');
DEFINE('_HELP_CANCEL','�������� ������������� �� ��������');
DEFINE('_POST_DELETE_ATT','��� �������� ���������, �� ����� ������� � ������ ��������� ������� � ����������� ��� ���� ������.');

//new since preRC4-III

DEFINE('_COM_A_USER_MARKUP','��������� �� ��������� ��� ����������� ������');
DEFINE('_COM_A_USER_MARKUP_DESC','�������� &quot;��&quot; �� �� �� ������ ���������, ������ �������� � �����������.');
DEFINE('_EDIT_BY','�������� � ����������� ��:');
DEFINE('_EDIT_AT','��:');
DEFINE('_UPLOAD_ERROR_GENERAL','������ ��� ���������� �� �������������');
DEFINE('_COM_A_IMGB_IMG_BROWSE','������ �����������');
DEFINE('_COM_A_IMGB_FILE_BROWSE','������ �������');
DEFINE('_COM_A_IMGB_TOTAL_IMG','���� ������ �����������');
DEFINE('_COM_A_IMGB_TOTAL_FILES','���� ������ �������');
DEFINE('_COM_A_IMGB_ENLARGE','��������� ����� �������������, �� �� �� ������ � ��� ������.');
DEFINE('_COM_A_IMGB_DOWNLOAD','��������� ����� ������������� �� �� ������ �����');
DEFINE('_COM_A_IMGB_DUMMY_DESC','��������� ���� ���������� �� �������� ���������� ����������� � ������ ������.');

DEFINE('_COM_A_IMGB_DUMMY','������ ������ �����������');
DEFINE('_COM_A_IMGB_REPLACE','������� � ������ �����������');
DEFINE('_COM_A_IMGB_REMOVE','������ �������');
DEFINE('_COM_A_IMGB_NAME','���');
DEFINE('_COM_A_IMGB_SIZE','��������');
DEFINE('_COM_A_IMGB_DIMS','�������');
DEFINE('_COM_A_IMGB_CONFIRM','������ �� ��� � ����������� �� ���� ����?');
DEFINE('_COM_A_IMGB_VIEW','�������� �������� (�� ��������)');
DEFINE('_COM_A_IMGB_NO_POST','�� ���������� ��� ������!');
DEFINE('_USER_CHANGE_VIEW','��������� �� ����� ��������� ��� ���������� �� ��������� �� ������.');
DEFINE('_MOSBOT_DISCUSS_A','������ ��� ������. (');
DEFINE('_MOSBOT_DISCUSS_B',' ������)');
DEFINE('_POST_DISCUSS','� ���� ���� �� ��������� ��������');
DEFINE('_COM_A_RSS','�������� �� RSS ������');
DEFINE('_COM_A_RSS_DESC','RSS �������� ��������� �� ������������� �� ����� �������� ��� ������, ���� ������� �� ������ �������� (����� <a href="http://www.rssreader.com" target="_blank">rssreader.com</a> ���� ������).');
DEFINE('_LISTCAT_RSS','������ �� ���������� ������');
DEFINE('_SEARCH_REDIRECT','FireBoard ������� �� �� ������������ ������.');

//====================
//admin.forum.html.php

DEFINE('_COM_A_CONFIG','FireBoard ���������');
DEFINE('_COM_A_DISPLAY','������ #');
DEFINE('_COM_A_CURRENT_SETTINGS','������ ���������');
DEFINE('_COM_A_EXPLANATION','���������');
DEFINE('_COM_A_BOARD_TITLE','�������� �� ������');
DEFINE('_COM_A_BOARD_TITLE_DESC','����� �� ������');
DEFINE('_COM_A_VIEW_TYPE','������ �� ������������');
DEFINE('_COM_A_VIEW_TYPE_DESC','�������� ����� ������ � ������������ ������');
DEFINE('_COM_A_THREADS','���� �� ��������');
DEFINE('_COM_A_THREADS_DESC','���� ���� �� ���� ��������');
DEFINE('_COM_A_REGISTERED_ONLY','���� �� ������������ �����������');
DEFINE('_COM_A_REG_ONLY_DESC','�������� &quot;��&quot; ��� ������ ������ �� ���� ������� ���� �� ������������ �����������. �������� &quot;��&quot; ��� ������ �� ���� ������� �� ������.');
DEFINE('_COM_A_PUBWRITE','����� �� �������������� �� ����������');
DEFINE('_COM_A_PUBWRITE_DESC','�������� &quot;��&quot; �� �� ��������� �� ����������, ����� �� �� ������������ �� ������� ������. �������� &quot;��&quot; ��� ������ ���� ���������� �� ����� ���� �� ����� ��������.');
DEFINE('_COM_A_USER_EDIT','�������� �� �������������');
DEFINE('_COM_A_USER_EDIT_DESC','�������� &quot;��&quot; �� �� ��������� �� ������������� �� ����� �� ���������� ����������� ������.');
DEFINE('_COM_A_MESSAGE','��������� ������ &quot;Save&quot; �� �����.');
DEFINE('_COM_A_HISTORY','��������� �� �������');
DEFINE('_COM_A_HISTORY_DESC','�������� &quot;��&quot; ��� ������ �� �� ������� ��������� �� ������ ��� �������');
DEFINE('_COM_A_SUBSCRIPTIONS','����������� �� ����������');
DEFINE('_COM_A_SUBSCRIPTIONS_DESC','�������� &quot;��&quot; �� �� ��������� �� ������������� �� �� �������� �� ������.');
DEFINE('_COM_A_HISTLIM','���� ������ � �������');
DEFINE('_COM_A_HISTLIM_DESC','���� ������ ��������� ���� �������');
DEFINE('_COM_A_FLOOD','������');
DEFINE('_COM_A_FLOOD_DESC','���� ������� ����� ������������� ������ �� ������� ����� �� ���������� ������ ������.');
DEFINE('_COM_A_MODERATION','����������� �� ������������');
DEFINE('_COM_A_MODERATION_DESC','������ &quot;��&quot; ��� ������ ������������ �� ��������� �-���� ��� ���� ������. �������, �� ������ �������������� ���� ������� �� ����������, �� �� ��������� ��������������, �� ������ ���� �� ����� �������� ���� ���������� � ������� �� ��� ������!');
DEFINE('_COM_A_SHOWMAIL','��������� �� �-����');
DEFINE('_COM_A_SHOWMAIL_DESC','�������� &quot;��&quot; ��� ������ �� �� �� �������� �-���� ��������.');
DEFINE('_COM_A_AVATAR','�������� �� �������');
DEFINE('_COM_A_AVATAR_DESC','�������� &quot;��&quot; ��� ������ ������������� �� ����� �� ������� ������ ��� ��������� ��.');
DEFINE('_COM_A_AVHEIGHT','���������� ��������');
DEFINE('_COM_A_AVWIDTH','���������� ��������');
DEFINE('_COM_A_AVSIZE','���������� ������<br/><em>� ���������</em>');
DEFINE('_COM_A_USERSTATS','��������� �� ����������');
DEFINE('_COM_A_USERSTATS_DESC','�������� &quot;��&quot; �� �� �� ������� ���������� �� ������������� ���� ���� ������, ��� �� ����������� (�������������, ���������, ���������� � �.�.).');
DEFINE('_COM_A_AVATARUPLOAD','��������� ������� �� ��������� ������');
DEFINE('_COM_A_AVATARUPLOAD_DESC','�������� &quot;��&quot; ��� ������ ������������� �� ����� �� ������ ��������� ������.');
DEFINE('_COM_A_AVATARGALLERY','�������� �� �������');
DEFINE('_COM_A_AVATARGALLERY_DESC','�������� &quot;��&quot; ��� ������ ������������� �� ���� ���������� �� ������� ������ �� ��������� (components/com_joomlaboard/avatars/gallery).');
DEFINE('_COM_A_RANKING_DESC','�������� &quot;��&quot; �� �� ���������� ����� �� ������������� �� ���� �� ���� �� �������� ��.');
DEFINE('_COM_A_RANKINGIMAGES','�������� �� �����������');
DEFINE('_COM_A_RANKINGIMAGES_DESC','�������� &quot;��&quot; �� �� �� ������� ����� �� ������������� ���� �����������.');

//email and stuff

$_COM_A_NOTIFICATION ="���� ������ �� ";
$_COM_A_NOTIFICATION1="��� ���� ������ � ����, �� ����� ��� ��������� � ";
$_COM_A_NOTIFICATION2="������ �� ��������� ������������ �� � ������� �� ������.";
$_COM_A_NOTIFICATION3="����, �� ����������� �� ���� �����, �� � ���� ������������.";
$_COM_A_NOT_MOD1="���� ������ � �������� ��� ������, ��� ����� ��� ���������";
$_COM_A_NOT_MOD2="����, ����������� ��, ���� ���� �� ������� � �������.";
DEFINE('_COM_A_NO','��');
DEFINE('_COM_A_YES','��');
DEFINE('_COM_A_FLAT','������');
DEFINE('_COM_A_THREADED','������������');
DEFINE('_COM_A_MESSAGES','������ �� ��������');
DEFINE('_COM_A_MESSAGES_DESC','���� �� �������� �� ���� ��������');

//admin; changes from 0.9 to 0.9.1

DEFINE('_COM_A_USERNAME','������������� ���');
DEFINE('_COM_A_USERNAME_DESC','�������� &quot;��&quot; ��� ������ �� �� ������� ��������������� ���, ������ ���������� ��� �� �����������');
DEFINE('_COM_A_CHANGENAME','��������� ������� �� �����');
DEFINE('_COM_A_CHANGENAME_DESC','�������� &quot;��&quot; ��� ������ �� ������ ���������� �� �������������� ����������� �� �������� ����� �� ��� ����������� �� ������.');

//admin; changes 0.9.1 to 0.9.2

DEFINE('_COM_A_BOARD_OFFLINE','���������� �� ������');
DEFINE('_COM_A_BOARD_OFFLINE_DESC','�������� &quot;��&quot; �� �� ��������� ������. ������� �� ���� ����� ���� �� ����������������.');
DEFINE('_COM_A_BOARD_OFFLINE_MES','��������� ��� �������� �����');
DEFINE('_COM_A_PRUNE','����������� �� ������');
DEFINE('_COM_A_PRUNE_NAME','������ �� �����������:');
DEFINE('_COM_A_PRUNE_DESC','��������� �� ����������� �� �������� ���� ���������� �� �������� ������, � ����� ���� ����������� ������ �� ��������� ���� ���. ����������� � �������� ���� �� �� ��������.');
DEFINE('_COM_A_PRUNE_NOPOSTS','����������� �� ���� ��� ������ ���� ���������� ');
DEFINE('_COM_A_PRUNE_DAYS','���');
DEFINE('_COM_A_PRUNE_USERS','����������� �� �����������');
DEFINE('_COM_A_PRUNE_USERS_DESC','��������� ��������� �� ���������� ��������� � ����������� �� ������. ��� ��������� ���������� � ��� ������ �� ������!, ���� ���� ������� �� ���� ������ � �������� ������ ��� ������.');

//general
DEFINE('_GEN_ACTION','��������');
DEFINE('_GEN_AUTHOR','�����');
DEFINE('_GEN_BY','��');
DEFINE('_GEN_CANCEL','�����');
DEFINE('_GEN_CONTINUE','��������');
DEFINE('_GEN_DATE','����');
DEFINE('_GEN_DELETE','������');
DEFINE('_GEN_EDIT','����������');
DEFINE('_GEN_EMAIL','�-����');
DEFINE('_GEN_EMOTICONS','������');
DEFINE('_GEN_FLAT','������');
DEFINE('_GEN_FLAT_VIEW','������');
DEFINE('_GEN_FORUMLIST','�����');
DEFINE('_GEN_FORUM','�����');
DEFINE('_GEN_HELP','�����');
DEFINE('_GEN_HITS','��������');
DEFINE('_GEN_LAST_POST','�������� ������');
DEFINE('_GEN_LATEST_POSTS','���������� ������');
DEFINE('_GEN_LOCK','�������');
DEFINE('_GEN_UNLOCK','�������');
DEFINE('_GEN_LOCKED_FORUM','������� � �������� � �� ���� �� �� ���������� ���� ������.');
DEFINE('_GEN_LOCKED_TOPIC','������ � ��������� � �� ���� �� �� ���������� ���� ������.');
DEFINE('_GEN_MESSAGE','������');
DEFINE('_GEN_MODERATED','������� �� ��������. ������ ������ �� ���������� ���� ���������.');
DEFINE('_GEN_MODERATORS','����������');
DEFINE('_GEN_MOVE','��������');
DEFINE('_GEN_NAME','���');
DEFINE('_GEN_POST_NEW_TOPIC','::���� ����::');
DEFINE('_GEN_POST_REPLY','��������');
DEFINE('_GEN_MYPROFILE','������');
DEFINE('_GEN_QUOTE','�������');
DEFINE('_GEN_REPLY','��������');
DEFINE('_GEN_REPLIES','��������');
DEFINE('_GEN_THREADED','������������');
DEFINE('_GEN_THREADED_VIEW','������������');
DEFINE('_GEN_SIGNATURE','���� ������');
DEFINE('_GEN_ISSTICKY','��������, �� ������ � ��������.');
DEFINE('_GEN_STICKY','������');
DEFINE('_GEN_UNSTICKY','������');
DEFINE('_GEN_SUBJECT','����');
DEFINE('_GEN_SUBMIT','��������');
DEFINE('_GEN_TOPIC','����');
DEFINE('_GEN_TOPICS','����');
DEFINE('_GEN_TOPIC_ICON','�����');
DEFINE('_GEN_SEARCH_BOX','�������...');
$_GEN_THREADED_VIEW="������������";
$_GEN_FLAT_VIEW    ="������";

//avatar_upload.php

DEFINE('_UPLOAD_UPLOAD','�������');
DEFINE('_UPLOAD_DIMENSIONS','���������� ������� (�������� x �������� - ������)');
DEFINE('_UPLOAD_SUBMIT','������� �� ��� ������');
DEFINE('_UPLOAD_SELECT_FILE','�������� ����');
DEFINE('_UPLOAD_ERROR_TYPE','����, �������� jpeg, gif ��� png ����');
DEFINE('_UPLOAD_ERROR_EMPTY','����, �������� ����');
DEFINE('_UPLOAD_ERROR_NAME','����� �� �������� ���� �� ������� ���� ����� � �����.');
DEFINE('_UPLOAD_ERROR_SIZE','�������� �� �������� ��������� ���������� ����������.');
DEFINE('_UPLOAD_ERROR_WIDTH','���������� �� �������� ��������� ���������� �����������.');
DEFINE('_UPLOAD_ERROR_HEIGHT','���������� �� �������� ��������� ���������� �����������.');
DEFINE('_UPLOAD_ERROR_CHOOSE','�� ��� ������� ������');
DEFINE('_UPLOAD_UPLOADED','������ ������ �� ������.');
DEFINE('_UPLOAD_GALLERY','�������� ������ �� ���������:');
DEFINE('_UPLOAD_CHOOSE','���������� ������ ��');

// listcat.php

DEFINE('_LISTCAT_ADMIN','��������������� �� ����� ������ �� ������� ������ �� ');
DEFINE('_LISTCAT_DO','�� �� ������ ����� ������ �� ������ ');
DEFINE('_LISTCAT_INFORM','����, ��������� �������������� �� �����!');
DEFINE('_LISTCAT_NO_CATS','������ ���������� ��������� ��� ������.');
DEFINE('_LISTCAT_PANEL','���������������� ����� �� ������!');
DEFINE('_LISTCAT_PENDING','������ ������');

// moderation.php

DEFINE('_MODERATION_MESSAGES','���� ������ ��������� � ���� �����.');

// post.php

DEFINE('_POST_ABOUT_TO_DELETE','��� ��� �� ��� �� �������� �����������');
DEFINE('_POST_ABOUT_DELETE','<strong>���������:</strong><br/><ul><li>��� �������� ������� ������ � ���������� ����, �� ������ ������ ���� ���� ���� �� ����� �������!</li><li>������ ������ ����� �� ���� ����, �� �� ��������� � ���� ������� ������.</li></ul>');
DEFINE('_POST_CLICK','��������� ���');
DEFINE('_POST_ERROR','�� ���� �� ���� ������ �����������/�-�����. �������� � ������ ����� � ����������.');
DEFINE('_POST_ERROR_MESSAGE','������ ��� �������� � ������ �����, ���� �������� ������ ��� �� �������� � �������������.');
DEFINE('_POST_ERROR_MESSAGE_OCCURED','������ ��� �������� � ������ �����. ���� �������� ������ ��� �� �������� � �������������.');
DEFINE('_POST_ERROR_TOPIC','������ ��� ���������� ���������:');
DEFINE('_POST_FORGOT_NAME','���������� �� �������� ������ ���. ����, �������� ������ ��� � �������� ������.');
DEFINE('_POST_FORGOT_SUBJECT','���������� �� �������� ����. ����, ������� �� � �������� ���� �� ��������.');
DEFINE('_POST_FORGOT_MESSAGE','�� ��� ������ ������. ����, ������� �� � �������� �������� ��.');
DEFINE('_POST_INVALID','������ ����� �� ��������.');
DEFINE('_POST_LOCK_SET','������ �� ���������.');
DEFINE('_POST_LOCK_NOT_SET','������ �� ���� �� ���� ���������.');
DEFINE('_POST_LOCK_UNSET','������ �� ���������.');
DEFINE('_POST_LOCK_NOT_UNSET','������ �� ���� �� ���� ���������.');
DEFINE('_POST_MESSAGE','������������ ���� ������ � ');
DEFINE('_POST_MOVE_TOPIC','���������� ������ ��� ����� ');
DEFINE('_POST_NEW','������������ ���� ������ �: ');
DEFINE('_POST_NO_SUBSCRIBED_TOPIC','����������� �� ���� ���� � ���������.');
DEFINE('_POST_NOTIFIED','���������� �� �� ���� ����.');
DEFINE('_POST_STICKY_SET','������ �� ��������.');
DEFINE('_POST_STICKY_NOT_SET','������ �� ���� �� ���� ��������.');
DEFINE('_POST_STICKY_UNSET','������ �� ��������.');
DEFINE('_POST_STICKY_NOT_UNSET','������ �� ���� �� ���� ��������.');
DEFINE('_POST_SUBSCRIBE','���������');
DEFINE('_POST_SUBSCRIBED_TOPIC','���� ��� �������� �� ���� ����.');
DEFINE('_POST_SUCCESS','�������� �� �����������');
DEFINE('_POST_SUCCES_REVIEW','�������� �� ����������� �������. �� ������ �� ���� �������� �� ��������� �����.');
DEFINE('_POST_SUCCESS_REQUEST','������ ������ � ���������. ��� ������ �� �� ������ ���� ������� �������,');
DEFINE('_POST_TOPIC_HISTORY','������� �� ������');
DEFINE('_POST_TOPIC_HISTORY_MAX','���������� ');
DEFINE('_POST_TOPIC_HISTORY_LAST','������  -  <i>(���-������ ������ � �����)</i>');
DEFINE('_POST_TOPIC_NOT_MOVED','������ �� ���� �� ���� ����������. �� �� �� ������� � ������:');
DEFINE('_POST_TOPIC_FLOOD1','������ �� ��������� �� ������. �� ������ �� ����������� ��� ��� ������ ������ � ������� ������ ������� ��������. ');
DEFINE('_POST_TOPIC_FLOOD2','������� �� �������, ��������� �������� ����� � �������� ������.');
DEFINE('_POST_TOPIC_FLOOD3','����, ��������� ������ "BACK" �� ����� �������');
DEFINE('_POST_EMAIL_NEVER','E-mail ������� ���� �� ���� ������� � �����.');
DEFINE('_POST_EMAIL_REGISTERED','E-mail ������� �� ���� ����� ���� �� �������������� �����������.');
DEFINE('_POST_LOCKED','��������� �� �������������.');
DEFINE('_POST_NO_NEW','�� �� �������� ���� ��������.');
DEFINE('_POST_NO_PUBACCESS1','���� ������������ ����������� ����� �� ���������� ���� ������.');
DEFINE('_POST_NO_PUBACCESS2','���������� ������������ ����������� ����� �� ���������� ������ � ���� �����.');

// showcat.php
DEFINE('_SHOWCAT_NO_TOPICS','���� ���� � ���� �����');
DEFINE('_SHOWCAT_PENDING','������ ������');

// userprofile.php
DEFINE('_USER_DELETE',' ��������� �� �������');
DEFINE('_USER_ERROR_A','���� ������ �� ��������������, �� ����� ����� ��� �������� �� ���� ��������!');
DEFINE('_USER_ERROR_B','�������� ������ � ��������� �� ������.');
DEFINE('_USER_ERROR_C','���������� ��!');
DEFINE('_USER_ERROR_D','����� �� ��������, ����� �� ���� ������� � �������');
DEFINE('_USER_GENERAL','��������� �� �������');
DEFINE('_USER_MODERATOR','��� ��� ��������� ��� ��������');
DEFINE('_USER_MODERATOR_NONE','�� ��� ��������� � ���� ���� �����');
DEFINE('_USER_MODERATOR_ADMIN','���������������� �� ���������� ��� ������ ������.');
DEFINE('_USER_NOSUBSCRIPTIONS','������ ����������');
DEFINE('_USER_PREFERED','������');
DEFINE('_USER_PROFILE','������ �� ');
DEFINE('_USER_PROFILE_NOT_A','������ ������ ����');
DEFINE('_USER_PROFILE_NOT_B','�� ����');
DEFINE('_USER_PROFILE_NOT_C',' �� ���� �������.');
DEFINE('_USER_PROFILE_UPDATED','�������� �� � �������.');
DEFINE('_USER_RETURN_A','��� �������� �� �� �� ������ �� ������� ������� ');
DEFINE('_USER_RETURN_B','��������� ���');
DEFINE('_USER_SUBSCRIPTIONS','����������:');
DEFINE('_USER_UNSUBSCRIBE',':: ���� ���������� :: ');
DEFINE('_USER_UNSUBSCRIBE_A','�� ���� ');
DEFINE('_USER_UNSUBSCRIBE_B','�� ����');
DEFINE('_USER_UNSUBSCRIBE_C',' ����� ���������� �� ���� ����.');
DEFINE('_USER_UNSUBSCRIBE_YES','����������� �� ������ �� �����.');
DEFINE('_USER_DELETEAV',' ��������� ������� � ����������, �� �� �������� ������� ��');

//New 0.9 to 1.0

DEFINE('_USER_ORDER','�������� �� ��������');
DEFINE('_USER_ORDER_DESC','������ �����');
DEFINE('_USER_ORDER_ASC','������� �����');

// view.php

DEFINE('_VIEW_DISABLED', '���� ������������ ����������� ����� �� ���������� ���� ������.');
DEFINE('_VIEW_POSTED', '����������� ��');
DEFINE('_VIEW_SUBSCRIBE', ':: ��������� ::');
DEFINE('_MODERATION_INVALID_ID', '��������� ����� �� ��������.');
DEFINE('_VIEW_NO_POSTS', '���� ������ � ���� �����.');
DEFINE('_VIEW_VISITOR', '����');
DEFINE('_VIEW_ADMIN', '�������������');
DEFINE('_VIEW_USER', '����������');
DEFINE('_VIEW_MODERATOR','���������');
DEFINE('_VIEW_REPLY','���������� �� ���� ������');
DEFINE('_VIEW_EDIT','������������ ���� ������');
DEFINE('_VIEW_QUOTE','��������� ���� ������');
DEFINE('_VIEW_DELETE','�������� ���� ������');
DEFINE('_VIEW_STICKY','�������� ������');
DEFINE('_VIEW_UNSTICKY','�������� ������');
DEFINE('_VIEW_LOCK','��������� ������');
DEFINE('_VIEW_UNLOCK','��������� ������');
DEFINE('_VIEW_MOVE','���������� ������ � ���� �����');
DEFINE('_VIEW_SUBSCRIBETXT','���������� �� �� ������ � �� ���������� ����� ��� ���� ������');

//NEW-STRINGS-FOR-TRANSLATING-READY-FOR-SIMPLEBOARD 9.2

DEFINE('_HOME', '������');
DEFINE('_POSTS', '������:');
DEFINE('_TOPIC_NOT_ALLOWED', '������');
DEFINE('_FORUM_NOT_ALLOWED', '������');
DEFINE('_FORUM_IS_OFFLINE', '������� � ��������!');
DEFINE('_PAGE', '��������: ');
DEFINE('_NO_POSTS', '���� ������');
DEFINE('_CHARS', '������� ��������.');
DEFINE('_HTML_YES', 'HTML � ��������');
DEFINE('_YOUR_AVATAR', '<b>���� ������</b>');
DEFINE('_NON_SELECTED', '���� ������ ��� ���<br />');
DEFINE('_SET_NEW_AVATAR', '������ ��� ������');
DEFINE('_THREAD_UNSUBSCRIBE', '������');
DEFINE('_SHOW_LAST_POSTS', '������� ���� ���� ����������');
DEFINE('_SHOW_HOURS', '����');
DEFINE('_SHOW_POSTS', '����:');
DEFINE('_DESCRIPTION_POSTS', '�������� �� ���������� ������ �� ��������� ����');
DEFINE('_SHOW_4_HOURS', '4 ����');
DEFINE('_SHOW_8_HOURS', '8 ����');
DEFINE('_SHOW_12_HOURS', '12 ����');
DEFINE('_SHOW_24_HOURS', '24 ����');
DEFINE('_SHOW_48_HOURS', '48 ����');
DEFINE('_SHOW_WEEK', '�������');
DEFINE('_POSTED_AT', '����������� ��');
DEFINE('_DATETIME', 'd/m/Y H:i');
DEFINE('_NO_TIMEFRAME_POSTS', '���� ���� ������ ���� �������� ��������, ����� ��� �������.');
DEFINE('_MESSAGE', '������');
DEFINE('_NO_SMILIE', '���');
DEFINE('_FORUM_UNAUTHORIZIED', '���� ����� � �������� ���� �� ������������ �����������.');
DEFINE('_FORUM_UNAUTHORIZIED2', '��� ��� �� ������������ ����, ����, ������ � ������� �� �����.');
DEFINE('_MESSAGE_ADMINISTRATION', '���������');
DEFINE('_MOD_APPROVE', '������');
DEFINE('_MOD_DELETE', '������');

//NEW in RC1

DEFINE('_SHOW_LAST', '�������� ������');
DEFINE('_POST_WROTE', '������');
DEFINE('_COM_A_EMAIL', 'E-mail ����� �� ������');
DEFINE('_COM_A_EMAIL_DESC', '����, �������� ������� e-mail �����');
DEFINE('_COM_A_WRAP', '������ ���� ��-����� ��');
DEFINE('_COM_A_WRAP_DESC','�������� ������������ ���� �������, ����� ���� �� �� �������� � ���� ����. <br/> 70 ������� ���� �� � ��������� �� �������, ����� �� � ��������� ��������, �� ���� �� �� ������ � �� ������������������ �����.<br/>�� ������� ����� URL-��, ��� �������� ����� ����� �� ��');
DEFINE('_COM_A_SIGNATURE', '���������� ������� �� �������');
DEFINE('_COM_A_SIGNATURE_DESC', '���������� ���� ��������� ������� �� ������� �� �������������.');
DEFINE('_SHOWCAT_NOPENDING', '���� ������ ���������');
DEFINE('_COM_A_BOARD_OFSET', '������ ������� ��� �������');
DEFINE('_COM_A_BOARD_OFSET_DESC', '����� ������ �� ������� �� �������, ����� �� � �������� ������ ���� �� ���� �� ����������. �������� ����������� ��� ����������� �����, �� �� �������������� ������� ������ � ����������� ������');

//New in RC2

DEFINE('_COM_A_BASICS', '�������');
DEFINE('_COM_A_FRONTEND', '�����');
DEFINE('_COM_A_SECURITY', '���������');
DEFINE('_COM_A_AVATARS', '�������');
DEFINE('_COM_A_INTEGRATION', '�����������');
DEFINE('_COM_A_PMS', '������� ����������� �� ����� ���������');
DEFINE('_COM_A_PMS_DESC','�������� �������� ��������� �� ������������ �� ����� ��������� ��� ����� ���������� �����. ��� �������� Clexus PM ���� ���� �� �������� ClexusPM �����, ����� �� �������� � �������������� ������ (���� ICQ, AIM, Yahoo, MSN');
DEFINE('_VIEW_PMS', '������ ���, �� �� �������� ����� ��������� �� �����������');

//new in RC3

DEFINE('_POST_RE', '���:');
DEFINE('_BBCODE_BOLD', '�������� �����: [b]�����[/b] ');
DEFINE('_BBCODE_ITALIC', '�������� �����: [i]�����[/i]');
DEFINE('_BBCODE_UNDERL', '��������� �����: [u]�����[/u]');
DEFINE('_BBCODE_QUOTE', '�����: [quote]�����[/quote]');
DEFINE('_BBCODE_CODE', '���: [code]���[/code]');
DEFINE('_BBCODE_ULIST', '���������� ������: [ul] [li]�����[/li] [/ul] - �����: ������� ������ �� ������� ������');
DEFINE('_BBCODE_OLIST', '��������� ������: [ol] [li]�����[/li] [/ol] - �����: ������� ������ �� ������� ������');
DEFINE('_BBCODE_IMAGE', '�����������: [�������=(01-499)]http://www.archerybg.com/images/web_logo_left.gif[/img]');
DEFINE('_BBCODE_LINK', '������: [url=http://www.archerybg.com/]��� �� ��������[/url]');
DEFINE('_BBCODE_CLOSA', '������� ������ ������');
DEFINE('_BBCODE_CLOSE', '������� ������ �������� ������');
DEFINE('_BBCODE_COLOR', '����: [color=#FF6600]�����[/color]');
DEFINE('_BBCODE_SIZE', '��������: [size=1]�������� �� ������[/size] - �����: �������� ����� �� 1 �� 5');
DEFINE('_BBCODE_LITEM', '����� � ������: [li]��� �� ������[/li]');
DEFINE('_BBCODE_HINT', 'bbCode ����� - �����: bbCode ���� �� ���� ��������� ����� �������� �����!');
DEFINE('_COM_A_TAWIDTH', '�������� �� ���������� ����');
DEFINE('_COM_A_TAWIDTH_DESC', '��������� ���������� �� ���������� ���� �� ��������� �� ��������/��������, �� �� �������� �� ����� ������ �� �����.');
DEFINE('_COM_A_TAHEIGHT', '�������� �� ���������� ����');
DEFINE('_COM_A_TAHEIGHT_DESC', '��������� ���������� �� ���������� ���� �� ��������� �� ��������/��������, �� �� �������� �� ����� ������ �� �����');
DEFINE('_COM_A_ASK_EMAIL', '�������� E-mail');
DEFINE('_COM_A_ASK_EMAIL_DESC', '������� �-mail �����, ������ ������������� ��� ������������ ����� �� ������ ������. ��������� �� &quot;��&quot; ��� ������ �� ������������ ���� ������� ��� frontend-�.');


//Rank Administration - Dan Syme/IGD

define('_KUNENA_RANKS_MANAGE', '���������� �� ���������');
define('_KUNENA_SORTRANKS', '�������� �� ����');
define('_KUNENA_RANKSIMAGE', '������ �� �����');
define('_KUNENA_RANKS', '�������� �� �����');
define('_KUNENA_RANKS_SPECIAL', '���������');
define('_KUNENA_RANKSMIN', '������� ���� ������');
define('_KUNENA_RANKS_ACTION', '��������');
define('_KUNENA_NEW_RANK', '��� ����');


?>

