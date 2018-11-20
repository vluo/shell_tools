<?php
// created: 2018-08-16 06:47:35
$sugar_config = array (
  'addAjaxBannedModules' => 
  array (
    0 => 'SecurityGroups',
  ),
  'admin_access_control' => false,
  'admin_export_only' => false,
  'aod' => 
  array (
    'enable_aod' => true,
  ),
  'aop' => 
  array (
    'distribution_method' => 'roundRobin',
    'case_closure_email_template_id' => '42b61b84-8ffc-c0d0-70df-57e37de71d1f',
    'joomla_account_creation_email_template_id' => '469e2e22-c8cf-2da3-2955-57e37d590870',
    'case_creation_email_template_id' => '4ac4bcb4-14a0-4216-70f7-57e37d281aa4',
    'contact_email_template_id' => '4f29cd94-c161-aa81-93ff-57e37d2a65ae',
    'user_email_template_id' => '52d3553f-b289-fba6-1228-57e37dca0bab',
  ),
  'aos' => 
  array (
    'version' => '5.3.3',
    'contracts' => 
    array (
      'renewalReminderPeriod' => '14',
    ),
    'lineItems' => 
    array (
      'totalTax' => false,
      'enableGroups' => true,
    ),
    'invoices' => 
    array (
      'initialNumber' => '1',
    ),
    'quotes' => 
    array (
      'initialNumber' => '1',
    ),
  ),
  'cache_dir' => 'cache/',
  'calculate_response_time' => true,
  'calendar' => 
  array (
    'default_view' => 'week',
    'show_calls_by_default' => true,
    'show_tasks_by_default' => true,
    'show_completed_by_default' => true,
    'editview_width' => 990,
    'editview_height' => 485,
    'day_timestep' => 15,
    'week_timestep' => 30,
    'items_draggable' => true,
    'items_resizable' => true,
    'enable_repeat' => true,
    'max_repeat_count' => 1000,
  ),
  'chartEngine' => 'Jit',
  'common_ml_dir' => '',
  'create_default_user' => false,
  'cron' => 
  array (
    'max_cron_jobs' => 10,
    'max_cron_runtime' => 30,
    'min_cron_interval' => 30,
  ),
  'currency' => '',
  'dashlet_display_row_options' => 
  array (
    0 => '1',
    1 => '3',
    2 => '5',
    3 => '10',
  ),
  'date_formats' => 
  array (
    'Y-m-d' => '2010-12-23',
    'm-d-Y' => '12-23-2010',
    'd-m-Y' => '23-12-2010',
    'Y/m/d' => '2010/12/23',
    'm/d/Y' => '12/23/2010',
    'd/m/Y' => '23/12/2010',
    'Y.m.d' => '2010.12.23',
    'd.m.Y' => '23.12.2010',
    'm.d.Y' => '12.23.2010',
  ),
  'datef' => 'Y/m/d',
  'dbconfig' => 
  array (
    'db_host_name' => '127.0.0.1',
    'db_host_instance' => 'SQLEXPRESS',
    'db_user_name' => 'fortex',
    'db_password' => 'fortex',
    'db_name' => 'ft_bo6',
    'db_type' => 'mysql',
    'db_port' => '',
    'db_manager' => 'FtMysqliManager',
  ),
  'dbconfigoption' => 
  array (
    'persistent' => true,
    'autofree' => false,
    'debug' => 0,
    'ssl' => false,
    'collation' => 'utf8_general_ci',
  ),
  'default_action' => 'index',
  'default_charset' => 'UTF-8',
  'default_currencies' => 
  array (
    'AUD' => 
    array (
      'name' => 'Australian Dollars',
      'iso4217' => 'AUD',
      'symbol' => '$',
    ),
    'BRL' => 
    array (
      'name' => 'Brazilian Reais',
      'iso4217' => 'BRL',
      'symbol' => 'R$',
    ),
    'GBP' => 
    array (
      'name' => 'British Pounds',
      'iso4217' => 'GBP',
      'symbol' => '£',
    ),
    'CAD' => 
    array (
      'name' => 'Canadian Dollars',
      'iso4217' => 'CAD',
      'symbol' => '$',
    ),
    'CNY' => 
    array (
      'name' => 'Chinese Yuan',
      'iso4217' => 'CNY',
      'symbol' => '￥',
    ),
    'EUR' => 
    array (
      'name' => 'Euro',
      'iso4217' => 'EUR',
      'symbol' => '€',
    ),
    'HKD' => 
    array (
      'name' => 'Hong Kong Dollars',
      'iso4217' => 'HKD',
      'symbol' => '$',
    ),
    'INR' => 
    array (
      'name' => 'Indian Rupees',
      'iso4217' => 'INR',
      'symbol' => '₨',
    ),
    'KRW' => 
    array (
      'name' => 'Korean Won',
      'iso4217' => 'KRW',
      'symbol' => '₩',
    ),
    'YEN' => 
    array (
      'name' => 'Japanese Yen',
      'iso4217' => 'JPY',
      'symbol' => '¥',
    ),
    'MXM' => 
    array (
      'name' => 'Mexican Pesos',
      'iso4217' => 'MXM',
      'symbol' => '$',
    ),
    'SGD' => 
    array (
      'name' => 'Singaporean Dollars',
      'iso4217' => 'SGD',
      'symbol' => '$',
    ),
    'CHF' => 
    array (
      'name' => 'Swiss Franc',
      'iso4217' => 'CHF',
      'symbol' => 'SFr.',
    ),
    'THB' => 
    array (
      'name' => 'Thai Baht',
      'iso4217' => 'THB',
      'symbol' => '฿',
    ),
    'USD' => 
    array (
      'name' => 'US Dollars',
      'iso4217' => 'USD',
      'symbol' => '$',
    ),
  ),
  'default_currency_iso4217' => 'USD',
  'default_currency_name' => 'US Dollars',
  'default_currency_significant_digits' => 2,
  'default_currency_symbol' => '$',
  'default_date_format' => 'Y/m/d',
  'default_decimal_seperator' => '.',
  'default_email_charset' => 'UTF-8',
  'default_email_client' => 'sugar',
  'default_email_editor' => 'html',
  'default_export_charset' => 'UTF-8',
  'default_language' => 'en_us',
  'default_locale_name_format' => 's f l',
  'default_max_tabs' => 1000,
  'default_module' => 'Home',
  'default_navigation_paradigm' => 'gm',
  'default_number_grouping_seperator' => ',',
  'default_password' => '',
  'default_permissions' => 
  array (
    'dir_mode' => 1528,
    'file_mode' => 493,
    'user' => '',
    'group' => '',
  ),
  'default_subpanel_links' => false,
  'default_subpanel_tabs' => true,
  'default_swap_last_viewed' => false,
  'default_swap_shortcuts' => false,
  'default_theme' => 'SuiteP',
  'default_time_format' => 'h:ia',
  'default_user_is_admin' => false,
  'default_user_name' => '',
  'demoData' => 'yes',
  'disable_convert_lead' => false,
  'disable_export' => false,
  'disable_persistent_connections' => false,
  'display_email_template_variable_chooser' => false,
  'display_inbound_email_buttons' => false,
  'dump_slow_queries' => false,
  'email_address_separator' => ',',
  'email_default_client' => 'sugar',
  'email_default_delete_attachments' => true,
  'email_default_editor' => 'html',
  'enable_line_editing_detail' => false,
  'enable_line_editing_list' => false,
  'export_delimiter' => ',',
  'export_excel_compatible' => false,
  'hide_subpanels' => false,
  'history_max_viewed' => 50,
  'host_name' => 'crm.ft.com',
  'import_max_execution_time' => 3600,
  'import_max_records_per_file' => 100,
  'import_max_records_total_limit' => '',
  'installer_locked' => true,
  'jobs' => 
  array (
    'min_retry_interval' => 30,
    'max_retries' => 5,
    'timeout' => 86400,
  ),
  'js_custom_version' => 1,
  'js_lang_version' => 66,
  'languages' => 
  array (
    'en_us' => 'English (US)',
  ),
  'large_scale_test' => false,
  'lead_conv_activity_opt' => 'donothing',
  'list_max_entries_per_page' => 20,
  'list_max_entries_per_subpanel' => 10,
  'lock_default_user_name' => false,
  'lock_homepage' => false,
  'lock_subpanels' => false,
  'log_dir' => '.',
  'log_file' => 'suitecrm.log',
  'log_memory_usage' => false,
  'logger' => 
  array (
    'level' => 'error',
    'file' => 
    array (
      'ext' => '.log',
      'name' => 'suitecrm_error',
      'dateFormat' => '%c',
      'maxSize' => '3MB',
      'maxLogs' => 10,
      'suffix' => '',
    ),
  ),
  'max_dashlets_homepage' => '15',
  'name_formats' => 
  array (
    's f l' => 's f l',
    'f l' => 'f l',
    's l' => 's l',
    'l, s f' => 'l, s f',
    'l, f' => 'l, f',
    's l, f' => 's l, f',
    'l s f' => 'l s f',
    'l f s' => 'l f s',
  ),
  'passwordsetting' => 
  array (
    'SystemGeneratedPasswordON' => '0',
    'generatepasswordtmpl' => 'a77e0df6-27f6-913a-5fd2-57ecdb7516d9',
    'lostpasswordtmpl' => 'aae91d08-14fb-59a2-d6c3-57ecdb9f5887',
    'forgotpasswordON' => '0',
    'linkexpiration' => true,
    'linkexpirationtime' => '6',
    'linkexpirationtype' => 60,
    'systexpiration' => 1,
    'systexpirationtime' => 7,
    'systexpirationtype' => '0',
    'systexpirationlogin' => '',
    'minpwdlength' => 6,
    'oneupper' => false,
    'onelower' => false,
    'onenumber' => false,
  ),
  'portal_view' => 'single_user',
  'require_accounts' => true,
  'resource_management' => 
  array (
    'special_query_limit' => 50000,
    'special_query_modules' => 
    array (
      0 => 'Reports',
      1 => 'Export',
      2 => 'Import',
      3 => 'Administration',
      4 => 'Sync',
    ),
    'default_limit' => 1000,
  ),
  'rss_cache_time' => '10800',
  'save_query' => 'all',
  'search_wildcard_char' => '%',
  'search_wildcard_infront' => false,
  'securitysuite_additive' => true,
  'securitysuite_filter_user_list' => false,
  'securitysuite_inherit_assigned' => true,
  'securitysuite_inherit_creator' => true,
  'securitysuite_inherit_parent' => true,
  'securitysuite_popup_select' => false,
  'securitysuite_strict_rights' => false,
  'securitysuite_user_popup' => true,
  'securitysuite_user_role_precedence' => true,
  'securitysuite_version' => '6.5.17',
  'session_dir' => '',
  'showDetailData' => true,
  'showThemePicker' => true,
  'site_url' => 'http://crm.ft.com',
  'slow_query_time_msec' => '100',
  'sugar_version' => '6.5.24',
  'sugarbeet' => false,
  'suitecrm_version' => '7.7.4',
  'time_formats' => 
  array (
    'H:i' => '23:00',
    'h:ia' => '11:00pm',
    'h:iA' => '11:00PM',
    'h:i a' => '11:00 pm',
    'h:i A' => '11:00 PM',
    'H.i' => '23.00',
    'h.ia' => '11.00pm',
    'h.iA' => '11.00PM',
    'h.i a' => '11.00 pm',
    'h.i A' => '11.00 PM',
  ),
  'timef' => 'H:i',
  'tmp_dir' => 'cache/xml/',
  'tracker_max_display_length' => 15,
  'translation_string_prefix' => false,
  'unique_key' => 'bd922f591a08c07a4c55dd05faefee9b',
  'upload_badext' => 
  array (
    0 => 'php',
    1 => 'php3',
    2 => 'php4',
    3 => 'php5',
    4 => 'pl',
    5 => 'cgi',
    6 => 'py',
    7 => 'asp',
    8 => 'cfm',
    9 => 'js',
    10 => 'vbs',
    11 => 'html',
    12 => 'htm',
    13 => 'phtml',
  ),
  'upload_dir' => 'upload/',
  'upload_maxsize' => 3000000000,
  'use_common_ml_dir' => false,
  'use_real_names' => true,
  'vcal_time' => '2',
  'verify_client_ip' => true,
  'disabled_themes' => 'Suite7,SuiteR',
  'default_module_favicon' => false,
  'dashlet_auto_refresh_min' => '30',
  'enable_action_menu' => false,
  'stack_trace_errors' => false,
  'developerMode' => true,
  'templates' => 
  array (
    'file' => 1,
  ),
  'api_links' => 
  array (
    'host' => 'https://boapi.fortex.com:8081/v1',
    'bo_ib' => 
    array (
      'list' => 'ib/all',
      'root' => 'ib',
      'valid' => 'ib/valid',
    ),
    'a01_domain' => 
    array (
      'list' => 'domains/all',
      'root' => 'domains',
    ),
    'bo_user' => 
    array (
      'list' => 'users/all',
      'root' => 'users',
      'password' => 'password',
      'valid' => 'users/isexist',
      'personal_info' => 'users/personalinfo',
      'closed_account' => 'users/closedaccount',
      'margin_setting' => 
      array (
        'root' => 'users/symbolsetting',
      ),
    ),
    'bo_deposit' => 
    array (
      'root' => 'cash/deposit',
    ),
    'bo_withdraw' => 
    array (
      'root' => 'cash/withdraw',
    ),
    'bo_cfd_dividend' => 
    array (
      'root' => 'cfddividends',
      'list' => 'cfddividends/all',
    ),
    'bo_swap_rate' => 
    array (
      'root' => 'swaprates',
      'list' => 'swaprates/all',
    ),
    'bo_swap_schedule' => 
    array (
      'root' => 'fxswapschedule',
      'list' => 'fxswapschedule/all',
    ),
    'bo_swap_template' => 
    array (
      'root' => 'swaptemplates',
      'list' => 'swaptemplates/all',
    ),
    'deposit_ccy' => 'systemccyallowed/all',
    'bo_account_balance' => 
    array (
      'list' => 'report/account/accountbalance',
    ),
    'bo_account_position' => 
    array (
      'list' => 'report/account/accountpositions',
    ),
    'bo_account_open_order' => 
    array (
      'list' => 'report/account/accountopenorders',
    ),
    'bo_eb_report' => 
    array (
      'list' => 'report/ebreport',
    ),
    'prime_broker' => 'systemprimebroker/all',
    'give_up_pb' => 'systemprimebroker/giveuppb',
    'login_type' => 'logintype/all',
    'cfd_dividend_symbol' => 'cfd/all',
    'withdraw_max_limit' => 'systemacctinfobackup/latest',
    'bo_commission_setting' => 
    array (
      'root' => 'commissions',
    ),
    'bo_deposit_withdraw_history' => 
    array (
      'list' => 'report/depositwithdrawhistory',
    ),
    'bo_daily_report' => 
    array (
      'root' => 'report/account/dailyreport',
      'list' => 'report/account/dailyreport',
      'individual' => 'individual',
      'margincalls' => 'margincalls',
      'monthly' => 'monthly',
      'domain' => 'domain',
      'download' => 'download',
    ),
    'bo_account_summary' => 
    array (
      'list' => 'report/account/accountsummary',
    ),
    'bo_transaction_history' => 
    array (
      'list' => 'report/account/transactionhistory',
    ),
    'bo_carried_over_positions' => 
    array (
      'list' => 'report/carriedoverpositions',
    ),
    'bo_closing_rates' => 
    array (
      'list' => 'report/closingrate',
    ),
    'bo_commission_report' => 
    array (
      'list' => 'ibreport/commission',
      'comment' => 'ibreportcomment',
    ),
    'imservergroup' => 'imservergroup/all',
    'quoteservergroup' => 'quoteservergroup/all',
    'demousers' => 
    array (
      'root' => 'demousers',
    ),
    'all_symbol' => 'fxtable/all',
    'quote_server' => 'quoteservice/all',
    'linked_account' => 
    array (
      'root' => 'linkuser',
      'list' => 'linkuser/linkedaccount',
      'available' => 'availableaccount',
    ),
    'linked_domain' => 
    array (
      'root' => 'linkdomain',
      'list' => 'linkdomain/linkeddomains',
      'available' => 'availabledomains',
    ),
    'price_group' => 
    array (
      'root' => 'pricegroup',
      'list' => 'all',
    ),
    'bo_pop_client' => 
    array (
      'root' => 'popclient',
      'list' => 'popclient/all',
      'available_domain' => 'popclient/avaiabledomain',
      'add_domain' => 'popclient/domain',
      'source_link' => 'https://webconsole-demo.fortex.com/main.html.',
    ),
    'system_config' => 'systemconfig/all',
    'rp_quarter_annual_report' => 
    array (
      'root' => 'adminreport/quarterannual',
      'list' => 'adminreport/quarterannual',
      'download' => 'downfile',
    ),
    'rp_TradeWatcherViewList' => 
    array (
      'list' => 'fortexadminreport/tradewatcher',
    ),
    'rp_ccyexposureList' => 
    array (
      'list' => 'fortexadminreport/ccyexposure',
      'notify' => 'fortexadminreport/ccyexposurenotify',
    ),
    'rp_ccyexposure' => 
    array (
      'list' => 'ccyexposurereport/ccyexposure',
      'notify' => 'ccyexposurereport/ccyexposurenotify',
    ),
    'price_group_detail' => 
    array (
      'root' => 'pricegroupdetail',
      'list' => 'pricegroupdetail/all',
      'source' => 'pricegroupdetail/source',
    ),
    'cl' => 
    array (
      'root' => 'cl',
      'list' => 'cl/all',
    ),
    'real_time_report' => 
    array (
      'list' => 'fxtable/all',
    ),
    'bo_deposit_withdraw_form' => 
    array (
      'withdraw_form' => 'https://na2.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=d9eb9877-3fef-4145-937d-c6d2f0bc622e',
    ),
    'deposit_form' => 
    array (
      'bank' => 'depositformresource/bank',
      'currency' => 'depositformresource/currency',
    ),
    'accounttemplate' => 
    array (
      'root' => 'accounttemplates',
      'all' => 'accounttemplates/all',
    ),
    'bo_batch_of_demo_account' => 
    array (
      'root' => 'demousers/BatchDemoAccount',
    ),
    'bo_fix_host' => 
    array (
      'root' => 'fixhost',
      'default_value' => 'defaultvalue',
      'app_list_strings' => 
      array (
        'ft_fixver_list' => 
        array (
          'JSON_INT' => 'JSON_INT',
          'JSON_INT_SSL' => 'JSON_INT_SSL',
          'JSON_STR' => 'JSON_STR',
          'JSON_STR_SSL' => 'JSON_STR_SSL',
        ),
      ),
      'account_default_value' => 'domain',
      'email_default_value' => 'default',
    ),
    'bo_margin_settings' => 
    array (
      'root' => 'marginsettings',
      'system' => 'marginsettings/system',
      'list' => 'marginsettings/symbol',
    ),
    'bo_decimal_settings' => 'marginsettings/symbol',
    'bo_api_usage' => 
    array (
      'root' => 'apiaccess',
      'list' => 'apiaccess/all',
    ),
    'bo_lp_execution_report' => 
    array (
      'root' => 'adminreport/lpreport',
    ),
    'bo_cfd_nop' => 
    array (
      'root' => 'report/account/cfdnop',
    ),
    'tradeserver' => 'servernode/all',
  ),
  'web_root' => 'E:\\work_space\\suiteCRM',
  'SAML_loginurl' => '',
  'SAML_X509Cert' => '',
  'authenticationClass' => '',
  'skip_bo_check' => 
  array (
    0 => 'bo_account_positio',
  ),
  'email_xss' => 'YToxMzp7czo2OiJhcHBsZXQiO3M6NjoiYXBwbGV0IjtzOjQ6ImJhc2UiO3M6NDoiYmFzZSI7czo1OiJlbWJlZCI7czo1OiJlbWJlZCI7czo0OiJmb3JtIjtzOjQ6ImZvcm0iO3M6NToiZnJhbWUiO3M6NToiZnJhbWUiO3M6ODoiZnJhbWVzZXQiO3M6ODoiZnJhbWVzZXQiO3M6NjoiaWZyYW1lIjtzOjY6ImlmcmFtZSI7czo2OiJpbXBvcnQiO3M6ODoiXD9pbXBvcnQiO3M6NToibGF5ZXIiO3M6NToibGF5ZXIiO3M6NDoibGluayI7czo0OiJsaW5rIjtzOjY6Im9iamVjdCI7czo2OiJvYmplY3QiO3M6MzoieG1wIjtzOjM6InhtcCI7czo2OiJzY3JpcHQiO3M6Njoic2NyaXB0Ijt9',
  'mt4_group_request_link' => 'http://192.1.2.164:203/webmodules/TransactionSupport/MT4Group.aspx',
  'mt4_manager_request_link' => 'http://192.1.2.164:203/webmodules/TransactionSupport/MT4Manager.aspx',
  'deposit_notification_link' => 'http://192.1.2.60/weboffice/webmodules/AdminSupport/DepositNotification.aspx',
  'withdraw_request_link' => 'http://192.1.2.60/weboffice/webmodules/AdminSupport/WithdrawalRequestForm.aspx',
  'bo_tabs' => 
  array (
    0 => 'trade account',
    1 => 'admin center',
    2 => 'Reports',
    3 => 'Support',
  ),
  'mt4_request_email_receiver' => 'gw655@126.com',
  'bo_deposit_withdraw_form' => 
  array (
    'admin_email' => 
    array (
      0 => 'gw655-0@126.com',
    ),
  ),
  'max_export_row_num' => 100000,
  'ft_save_tmp_pdf_file' => true,
  'ft_error_receiver_email' => 'gw655@126.com',
  'http_referer' => 
  array (
    'list' => 
    array (
      0 => 'crm.ft.com',
    ),
  ),
  'real_time_report' => 
  array (
    'host' => 'https://demo.fortex.com/',
    'account' => 'CRM_CHART',
    'password' => 'DEMO20170720',
    'init_symbol' => 'EUR/USD',
  ),
  'ft_python_path' => 'D:/software/python3.6/python',
  'ft_python_script_path' => 
  array (
    'excel_tool' => 'E:/work_space/Python3/excel/sample.py',
    'deploy_tool' => 'E:/work_space/Python3/sample/deploy.py',
  ),
  'ft_full_symbol_list_modules' => 
  array (
    0 => 'bo_commission_setting',
    1 => 'bo_pop_client',
    2 => 'bo_margin_settings',
  ),
  'ft_export_type' => 'golang=',
  'ft_golang_script_path' => 'E:/work_space/goProjects/src/excel/excel.exe',
  'ft_php_path' => 'D:/software/wamp64/bin/php/php5.6.25',
  'ft_deploy' => 
  array (
    'sync_dirs' => 
    array (
      0 => 'custom/Extension',
      1 => 'custom/modules',
      2 => 'custom/themes',
      3 => 'custom/include',
      4 => 'modules',
    ),
    'hosts' => 
    array (
      0 => 
      array (
        'db' => 
        array (
          'db_host_name' => '127.0.0.1',
          'db_host_instance' => 'test_2',
          'db_user_name' => 'root',
          'db_password' => '',
          'db_name' => 'suitecrm_test_2',
          'db_type' => 'mysql',
          'db_port' => '',
          'db_manager' => 'FtMysqlManager',
        ),
        'web_root' => 'E:\\crm2',
      ),
    ),
  ),
  'enable_AccountInit_adminNotification' => true,
  'ft_operation_log_event_types' => 
  array (
    -1 => 'other',
    0 => 'edit',
    1 => 'del',
    2 => 'login',
    3 => 'logout',
  ),
);