<?php
/***CONFIGURATOR***/
$sugar_config['disable_persistent_connections'] = false;
$sugar_config['default_theme'] = 'SuiteP';
$sugar_config['disabled_themes'] = 'Suite7,SuiteR';
$sugar_config['default_module_favicon'] = false;
$sugar_config['dashlet_auto_refresh_min'] = '30';
$sugar_config['stack_trace_errors'] = false;
$sugar_config['developerMode'] = true;
$sugar_config['logger']['level'] = 'error';
$sugar_config['logger']['file']['name'] = 'suitecrm_error';
$sugar_config['logger']['file']['maxSize'] = '3MB';
$sugar_config['api_links']['host'] = 'https://192.1.2.203:8081/v1';
$sugar_config['api_links']['bo_ib']['list'] = 'ib/all';
$sugar_config['api_links']['bo_ib']['root'] = 'ib';
$sugar_config['api_links']['bo_ib']['valid'] = 'ib/valid';
$sugar_config['api_links']['a01_domain']['list'] = 'domains/all';
$sugar_config['api_links']['a01_domain']['root'] = 'domains';
$sugar_config['api_links']['bo_user']['list'] = 'users/all';
$sugar_config['api_links']['bo_user']['root'] = 'users';
$sugar_config['api_links']['bo_user']['password'] = 'password';
$sugar_config['api_links']['bo_user']['valid'] = 'users/isexist';
$sugar_config['api_links']['bo_user']['personal_info'] = 'users/personalinfo';
$sugar_config['api_links']['bo_user']['closed_account'] = 'users/closedaccount';
$sugar_config['api_links']['bo_user']['margin_setting']['root'] = 'users/symbolsetting';
$sugar_config['api_links']['bo_deposit']['root'] = 'cash/deposit';
$sugar_config['api_links']['bo_deposit_withdraw_history']['list'] = 'report/depositwithdrawhistory';
$sugar_config['api_links']['bo_withdraw']['root'] = 'cash/withdraw';
$sugar_config['api_links']['bo_cfd_dividend']['root'] = 'cfddividends';
$sugar_config['api_links']['bo_cfd_dividend']['list'] = 'cfddividends/all';
$sugar_config['api_links']['bo_commission_setting']['root'] = 'commissions';
$sugar_config['api_links']['bo_daily_report']['root'] = 'report/account/dailyreport';
$sugar_config['api_links']['bo_daily_report']['list'] = 'report/account/dailyreport';
$sugar_config['api_links']['bo_daily_report']['individual'] = 'individual';
$sugar_config['api_links']['bo_daily_report']['margincalls'] = 'margincalls';
$sugar_config['api_links']['bo_daily_report']['monthly'] = 'monthly';
$sugar_config['api_links']['bo_daily_report']['domain'] = 'domain';
$sugar_config['api_links']['bo_daily_report']['download'] = 'download';
$sugar_config['api_links']['bo_commission_report']['list'] = 'ibreport/commission';
$sugar_config['api_links']['bo_commission_report']['comment'] = 'ibreportcomment';
$sugar_config['api_links']['bo_swap_rate']['root'] = 'swaprates';
$sugar_config['api_links']['bo_swap_rate']['list'] = 'swaprates/all';
$sugar_config['api_links']['bo_swap_schedule']['root'] = 'fxswapschedule';
$sugar_config['api_links']['bo_swap_schedule']['list'] = 'fxswapschedule/all';
$sugar_config['api_links']['bo_swap_template']['root'] = 'swaptemplates';
$sugar_config['api_links']['bo_swap_template']['list'] = 'swaptemplates/all';
$sugar_config['api_links']['deposit_ccy'] = 'systemccyallowed/all';
$sugar_config['api_links']['bo_account_balance']['list'] = 'report/account/accountbalance';
$sugar_config['api_links']['bo_account_position']['list'] = 'report/account/accountpositions';
$sugar_config['api_links']['bo_account_open_order']['list'] = 'report/account/accountopenorders';
$sugar_config['api_links']['bo_account_summary']['list'] = 'report/account/accountsummary';
$sugar_config['api_links']['bo_transaction_history']['list'] = 'report/account/transactionhistory';
$sugar_config['api_links']['bo_carried_over_positions']['list'] = 'report/carriedoverpositions';
$sugar_config['api_links']['bo_closing_rates']['list'] = 'report/closingrate';
$sugar_config['api_links']['bo_eb_report']['list'] = 'report/ebreport';
$sugar_config['api_links']['prime_broker'] = 'systemprimebroker/all';
$sugar_config['api_links']['give_up_pb'] = 'systemprimebroker/giveuppb';
$sugar_config['api_links']['login_type'] = 'logintype/all';
$sugar_config['api_links']['cfd_dividend_symbol'] = 'cfd/all';
$sugar_config['api_links']['all_symbol'] = 'fxtable/all';
$sugar_config['api_links']['imservergroup'] = 'imservergroup/all';
$sugar_config['api_links']['quoteservergroup'] = 'quoteservergroup/all';
$sugar_config['api_links']['demousers']['root'] = 'demousers';
$sugar_config['api_links']['withdraw_max_limit'] = 'systemacctinfobackup/latest';
$sugar_config['api_links']['quote_server'] = 'quoteservice/all';
$sugar_config['api_links']['linked_account']['root'] = 'linkuser';
$sugar_config['api_links']['linked_account']['list'] = 'linkuser/linkedaccount';
$sugar_config['api_links']['linked_account']['available'] = 'availableaccount';
$sugar_config['api_links']['linked_domain']['root'] = 'linkdomain';
$sugar_config['api_links']['linked_domain']['list'] = 'linkdomain/linkeddomains';
$sugar_config['api_links']['linked_domain']['available'] = 'availabledomains';
$sugar_config['api_links']['price_group']['root'] = 'pricegroup';
$sugar_config['api_links']['price_group']['list'] = 'all';
$sugar_config['api_links']['price_group_detail']['root'] = 'pricegroupdetail';
$sugar_config['api_links']['price_group_detail']['list'] = 'pricegroupdetail/all';
$sugar_config['api_links']['price_group_detail']['source'] = 'pricegroupdetail/source';
$sugar_config['api_links']['bo_pop_client']['root'] = 'popclient';
$sugar_config['api_links']['bo_pop_client']['list'] = 'popclient/all';
$sugar_config['api_links']['bo_pop_client']['available_domain'] = 'popclient/avaiabledomain';
$sugar_config['api_links']['bo_pop_client']['add_domain'] = 'popclient/domain';
$sugar_config['api_links']['bo_pop_client']['source_link'] = 'https://webconsole-demo.fortex.com/main.html.';
$sugar_config['api_links']['cl']['root'] = 'cl';
$sugar_config['api_links']['cl']['list'] = 'cl/all';
$sugar_config['api_links']['system_config'] = 'systemconfig/all';
$sugar_config['api_links']['real_time_report']['list'] = 'fxtable/all';
$sugar_config['api_links']['bo_deposit_withdraw_form']['withdraw_form'] = 'https://na2.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=d9eb9877-3fef-4145-937d-c6d2f0bc622e';
$sugar_config['api_links']['deposit_form']['bank'] = 'depositformresource/bank';
$sugar_config['api_links']['deposit_form']['currency'] = 'depositformresource/currency';
$sugar_config['api_links']['rp_quarter_annual_report']['root'] = 'adminreport/quarterannual';
$sugar_config['api_links']['rp_quarter_annual_report']['list'] = 'adminreport/quarterannual';
$sugar_config['api_links']['rp_quarter_annual_report']['download'] = 'downfile';
$sugar_config['api_links']['rp_TradeWatcherViewList']['list'] = 'fortexadminreport/tradewatcher';
$sugar_config['api_links']['rp_ccyexposure']['list'] = 'ccyexposurereport/ccyexposure';
$sugar_config['api_links']['rp_ccyexposure']['notify'] = 'ccyexposurereport/ccyexposurenotify';
$sugar_config['api_links']['accounttemplate']['root'] = 'accounttemplates';
$sugar_config['api_links']['accounttemplate']['all'] = 'accounttemplates/all';
$sugar_config['api_links']['bo_batch_of_demo_account']['root'] = 'demousers/BatchDemoAccount';
$sugar_config['bo_deposit_withdraw_form']['admin_email'][0] = 'gw655-0@126.com';
$sugar_config['web_root'] = 'E:\\work_space\\suiteCRM';
$sugar_config['passwordsetting']['SystemGeneratedPasswordON'] = '0';
$sugar_config['passwordsetting']['forgotpasswordON'] = '0';
$sugar_config['enable_line_editing_detail'] = false;
$sugar_config['enable_line_editing_list'] = false;
$sugar_config['max_export_row_num'] = 100000;
$sugar_config['ft_save_tmp_pdf_file'] = true;
$sugar_config['ft_error_receiver_email'] = 'gw655@126.com';
$sugar_config['mt4_request_email_receiver'] = 'gw655@126.com';
$sugar_config['http_referer']['list'][0] = 'crm.ft.com';

//fix host
$sugar_config['api_links']['bo_fix_host']['root'] = 'fixhost';
$sugar_config['api_links']['bo_fix_host']['account_default_value'] = 'domain';
$sugar_config['api_links']['bo_fix_host']['email_default_value'] = 'default';
$sugar_config['api_links']['bo_fix_host']['app_list_strings']['ft_fixver_list'] = array(
    'JSON_INT'=>'JSON_INT',
    'JSON_INT_SSL'=>'JSON_INT_SSL',
    'JSON_STR'=>'JSON_STR',
    'JSON_STR_SSL'=>'JSON_STR_SSL'
);


//realtime_report
$sugar_config['real_time_report']['host'] = 'https://demo.fortex.com/';
$sugar_config['real_time_report']['account'] = 'CRM_CHART';
$sugar_config['real_time_report']['password'] = 'DEMO20170720';
$sugar_config['real_time_report']['init_symbol']='EUR/USD';

//python path
$sugar_config['ft_export_type'] = 'golang=';
$sugar_config['ft_python_path'] = '/usr/bin/python3';
$sugar_config['ft_php_path'] ='D:/software/wamp64/bin/php/php5.6.25';
$sugar_config['ft_python_script_path'] = array(
    'excel_tool'=>'/www/tools/python/export_excel.py',
    'deploy_tool'=>'/www/tools/python/deploy.py',
);


//system margin setting
$sugar_config['api_links']['bo_margin_settings']['root'] = 'marginsettings';
$sugar_config['api_links']['bo_margin_settings']['system'] = 'marginsettings/system';
$sugar_config['api_links']['bo_margin_settings']['list'] = 'marginsettings/symbol';

//$sugar_config['ft_full_symbol_list_modules'] =array('bo_commission_setting', 'bo_pop_client', 'bo_margin_settings');

//decimal settings
$sugar_config['api_links']['bo_decimal_settings'] = 'marginsettings/symbol';

//api usage statistics
$sugar_config['api_links']['bo_api_usage']['root'] = 'apiaccess';
$sugar_config['api_links']['bo_api_usage']['list'] = 'apiaccess/all';

//lp report
$sugar_config['api_links']['bo_lp_execution_report']['root'] = 'adminreport/lpreport';

//cfd nop
$sugar_config['api_links']['bo_cfd_nop']['root'] = 'report/account/cfdnop';
//symbol commission setting
$sugar_config['api_links']['symbol_commission_setting']['root'] = 'users/symbolcommissiongroupsetting';
$sugar_config['api_links']['symbol_commission_setting']['list'] = 'users/symbolcommissiongroupsetting/account';
$sugar_config['api_links']['symbol_commission_setting']['item'] = 'users/symbolcommissiongroupsetting/account/symbol';

//deploy
$sugar_config['ft_deploy'] = array(
    'sync_dirs'=>array('custom/Extension', 'custom/modules', 'custom/themes', 'custom/include', 'modules'),
    'hosts'=>array(
        array(
            'db'=>array(
                'db_host_name' => '127.0.0.1',
                'db_host_instance' => 'test_2',
                'db_user_name' => 'root',
                'db_password' => '',
                'db_name' => 'suitecrm_test_2',
                'db_type' => 'mysql',
                'db_port' => '',
                'db_manager' => 'FtMysqlManager',
            ),
            'web_root'=>'E:\crm2'
        )
    )

);

//email notice
$sugar_config['enable_AccountInit_adminNotification'] = true;
$sugar_config['ft_operation_log_event_types'] = array('-1'=>'other', '0'=>'edit', '1'=>'del', '2'=>'login', '3'=>'logout', '4'=>'create', '5'=>'login_failed', '6'=>'init_account', '7'=>'deposit', '8'=>'withdraw');

//a01_*
$sugar_config['api_links']['tradeserver'] = 'servernode/all';

//show mt5_request_form
$sugar_config['show_mt5_request_form'] = 1;
$sugar_config['mt4_group_request_form_for_amuk'] = 1;

//multi-node config
$sugar_config['multi_node'] = array(
    'node_name'=>'ft2',//load the table with the 'node_name' suffix
    'separated_tables'=>array('a01_BOSettings')
);




/***CONFIGURATOR***/