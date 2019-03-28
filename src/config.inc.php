<?php
/**
 * PhpMyAdmin configuration file - auto-generated by i-MSCP
 *     DO NOT EDIT THIS FILE BY HAND -- YOUR CHANGES WILL BE OVERWRITTEN
 *
 * You can override this configuration file with the help of an event listener
 * listening on the i-MSCP backend 'onLoadTemplate' event. For instance:
 *
 * Perl code:
 *
 * use iMSCP::EventManager;
 * use iMSCP::File;
 * 
 * iMSCP::EventManager->getInstance()->registerOne('onLoadTemplate', sub {
 *   my ($target, $cfgTplName, $cfgTplContent) = @_;
 *
 *   # We do not want act if the target isn't PhpMyAdmin, or if the
 *   # configuration file isn't the main configuration file.
 *   return 0 unless lc $target eq 'phpmyadmin' && $cfgTplName eq 'config.inc.php';
 *
 *   # Load custom PhpMyAdmin configuration file into the $cfgTplContent
 *   # variable.
 *   return 1 unless defined ${ $cfgTplContent } = iMSCP::File->new(
 *     filename => 'path/to/your/phpmyadmin/conf/file'
 *   )->get();
 *
 *   0;
 * });
 * 
 * 1;
 * __END__
 *
 * The code above has to be put in an i-MSCP listener file which needs to be
 * saved into the /etc/imscp/listeners.d directory. See the contrib directory
 * of the i-MSCP distribution for further details and/or examples about i-MSCP
 * listener files.
 */

$i = 1;

$cfg['Servers'][$i]['auth_type'] = 'cookie';
$cfg['Servers'][$i]['host'] = '{PMA_DATABASE_SERVER_HOSTNAME}';
$cfg['Servers'][$i]['port'] = '{PMA_DATABASE_SERVER_PORT}';
$cfg['Servers'][$i]['AllowRoot'] = false;
$cfg['Servers'][$i]['controlhost'] = '{PMA_DATABASE_SERVER_HOSTNAME}';
$cfg['Servers'][$i]['controlport'] = '{PMA_DATABASE_SERVER_PORT}';
$cfg['Servers'][$i]['controluser'] = '{PMA_CONTROL_USER}';
$cfg['Servers'][$i]['controlpass'] = '{PMA_CONTROL_USER_PASSWD}';
$cfg['Servers'][$i]['pmadb'] = '{PMA_DATABASE}';
$cfg['Servers'][$i]['bookmarktable'] = 'pma__bookmark';
$cfg['Servers'][$i]['relation'] = 'pma__relation';
$cfg['Servers'][$i]['table_info'] = 'pma__table_info';
$cfg['Servers'][$i]['table_coords'] = 'pma__table_coords';
$cfg['Servers'][$i]['pdf_pages'] = 'pma__pdf_pages';
$cfg['Servers'][$i]['column_info'] = 'pma__column_info';
$cfg['Servers'][$i]['history'] = 'pma__history';
$cfg['Servers'][$i]['table_uiprefs'] = 'pma__table_uiprefs';
$cfg['Servers'][$i]['tracking'] = 'pma__tracking';
$cfg['Servers'][$i]['userconfig'] = 'pma__userconfig';
$cfg['Servers'][$i]['recent'] = 'pma__recent';
$cfg['Servers'][$i]['favorite'] = 'pma__favorite';
$cfg['Servers'][$i]['users'] = 'pma__users';
$cfg['Servers'][$i]['usergroups'] = 'pma__usergroups';
$cfg['Servers'][$i]['navigationhiding'] = 'pma__navigationhiding';
$cfg['Servers'][$i]['savedsearches'] = 'pma__savedsearches';
$cfg['Servers'][$i]['central_columns'] = 'pma__central_columns';
$cfg['Servers'][$i]['designer_settings'] = 'pma__designer_settings';
$cfg['Servers'][$i]['export_templates'] = 'pma__export_templates';
$cfg['Servers'][$i]['hide_db'] = '^(?:(?:information|performance)_schema|mysql|sys)$';

$cfg['blowfish_secret'] = '{PMA_BLOWFISH_SECRET}';
$cfg['GD2Available'] = 'yes';
$cfg['LoginCookieValidity'] = 1440;
$cfg['MemoryLimit'] = '0';
$cfg['PmaNoRelation_DisableWarning'] = true;
$cfg['RecodingEngine'] = 'iconv';
$cfg['SendErrorReports'] = 'never';
$cfg['SessionSavePath'] = '{PMA_SESSION_SAVE_PATH}';
$cfg['ShowChgPassword'] = false;
$cfg['ShowServerInfo'] = true;
$cfg['ShowStats'] = true;
$cfg['SuhosinDisableWarning'] = true;
$cfg['TempDir'] = '{PMA_TMP_DIR}';
$cfg['VersionCheck'] = false;
