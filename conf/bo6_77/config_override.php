<?php 

$sugar_config['disable_persistent_connections']=False;
$sugar_config['default_theme']='SuiteP';
$sugar_config['disabled_themes']='Suite7,SuiteR';
$sugar_config['default_module_favicon']=False;
$sugar_config['dashlet_auto_refresh_min']='30';
$sugar_config['stack_trace_errors']=False;
$sugar_config['developerMode']=True;
$sugar_config['logger']['level']='error';
$sugar_config['logger']['file']['name']='suitecrm_error';
$sugar_config['logger']['file']['maxSize']='3MB';
$sugar_config['api_links']['host']='https://192.1.2.77:8081/v1';
$sugar_config['api_links']['bo_ib']['list']='ib/all';
$sugar_config['api_links']['bo_ib']['root']='ib';
$sugar_config['api_links']['bo_ib']['valid']='ib/valid';
$sugar_config['api_links']['a01_domain']['list']='domains/all';
$sugar_config['api_links']['a01_domain']['root']='domains';
$sugar_config['api_links']['bo_user']['list']='users/all';
$sugar_config['api_links']['bo_user']['root']='users';
$sugar_config['api_links']['bo_user']['password']='password';
$sugar_config['api_links']['bo_user']['valid']='users/isexist';
$sugar_config['api_links']['bo_user']['personal_info']='users/personalinfo';
$sugar_config['api_links']['bo_user']['closed_account']='users/closedaccount';
$sugar_config['api_links']['bo_user']['margin_setting']['root']='users/symbolsetting';
$sugar_config['api_links']['bo_deposit']['root']='cash/deposit';
$sugar_config['api_links']['bo_deposit_withdraw_history']['list']='report/depositwithdrawhistory';
$sugar_config['api_links']['bo_withdraw']['root']='cash/withdraw';
$sugar_config['api_links']['bo_cfd_dividend']['root']='cfddividends';
$sugar_config['api_links']['bo_cfd_dividend']['list']='cfddividends/all';
$sugar_config['api_links']['bo_commission_setting']['root']='commissions';
$sugar_config['api_links']['bo_daily_report']['root']='report/account/dailyreport';
$sugar_config['api_links']['bo_daily_report']['list']='report/account/dailyreport';
$sugar_config['api_links']['bo_daily_report']['individual']='individual';
$sugar_config['api_links']['bo_daily_report']['margincalls']='margincalls';
$sugar_config['api_links']['bo_daily_report']['monthly']='monthly';
$sugar_config['api_links']['bo_daily_report']['domain']='domain';
$sugar_config['api_links']['bo_daily_report']['download']='download';
$sugar_config['api_links']['bo_commission_report']['list']='ibreport/commission';
$sugar_config['api_links']['bo_commission_report']['comment']='ibreportcomment';
$sugar_config['api_links']['bo_swap_rate']['root']='swaprates';
$sugar_config['api_links']['bo_swap_rate']['list']='swaprates/all';
$sugar_config['api_links']['bo_swap_schedule']['root']='fxswapschedule';
$sugar_config['api_links']['bo_swap_schedule']['list']='fxswapschedule/all';
$sugar_config['api_links']['bo_swap_template']['root']='swaptemplates';
$sugar_config['api_links']['bo_swap_template']['list']='swaptemplates/all';
$sugar_config['api_links']['deposit_ccy']='systemccyallowed/all';
$sugar_config['api_links']['bo_account_balance']['list']='report/account/accountbalance';
$sugar_config['api_links']['bo_account_position']['list']='report/account/accountpositions';
$sugar_config['api_links']['bo_account_open_order']['list']='report/account/accountopenorders';
$sugar_config['api_links']['bo_account_summary']['list']='report/account/accountsummary';
$sugar_config['api_links']['bo_transaction_history']['list']='report/account/transactionhistory';
$sugar_config['api_links']['bo_carried_over_positions']['list']='report/carriedoverpositions';
$sugar_config['api_links']['bo_closing_rates']['list']='report/closingrate';
$sugar_config['api_links']['bo_eb_report']['list']='report/ebreport';
$sugar_config['api_links']['prime_broker']='systemprimebroker/all';
$sugar_config['api_links']['give_up_pb']='systemprimebroker/giveuppb';
$sugar_config['api_links']['login_type']='logintype/all';
$sugar_config['api_links']['cfd_dividend_symbol']='cfd/all';
$sugar_config['api_links']['all_symbol']='fxtable/all';
$sugar_config['api_links']['imservergroup']='imservergroup/all';
$sugar_config['api_links']['quoteservergroup']='quoteservergroup/all';
$sugar_config['api_links']['demousers']['root']='demousers';
$sugar_config['api_links']['withdraw_max_limit']='systemacctinfobackup/latest';
$sugar_config['api_links']['quote_server']='quoteservice/all';
$sugar_config['api_links']['linked_account']['root']='linkuser';
$sugar_config['api_links']['linked_account']['list']='linkuser/linkedaccount';
$sugar_config['api_links']['linked_account']['available']='availableaccount';
$sugar_config['api_links']['linked_domain']['root']='linkdomain';
$sugar_config['api_links']['linked_domain']['list']='linkdomain/linkeddomains';
$sugar_config['api_links']['linked_domain']['available']='availabledomains';
$sugar_config['api_links']['price_group']['root']='pricegroup';
$sugar_config['api_links']['price_group']['list']='all';
$sugar_config['api_links']['price_group_detail']['root']='pricegroupdetail';
$sugar_config['api_links']['price_group_detail']['list']='pricegroupdetail/all';
$sugar_config['api_links']['price_group_detail']['source']='pricegroupdetail/source';
$sugar_config['api_links']['bo_pop_client']['root']='popclient';
$sugar_config['api_links']['bo_pop_client']['list']='popclient/all';
$sugar_config['api_links']['bo_pop_client']['available_domain']='popclient/avaiabledomain';
$sugar_config['api_links']['bo_pop_client']['add_domain']='popclient/domain';
$sugar_config['api_links']['bo_pop_client']['source_link']='https://webconsole-demo.fortex.com/main.html.';
$sugar_config['api_links']['cl']['root']='cl';
$sugar_config['api_links']['cl']['list']='cl/all';
$sugar_config['api_links']['system_config']='systemconfig/all';
$sugar_config['api_links']['real_time_report']['list']='fxtable/all';
$sugar_config['api_links']['bo_deposit_withdraw_form']['withdraw_form']='https://na2.docusign.net/Member/PowerFormSigning.aspx?PowerFormId=d9eb9877-3fef-4145-937d-c6d2f0bc622e';
$sugar_config['api_links']['deposit_form']['bank']='depositformresource/bank';
$sugar_config['api_links']['deposit_form']['currency']='depositformresource/currency';
$sugar_config['api_links']['rp_quarter_annual_report']['root']='adminreport/quarterannual';
$sugar_config['api_links']['rp_quarter_annual_report']['list']='adminreport/quarterannual';
$sugar_config['api_links']['rp_quarter_annual_report']['download']='downfile';
$sugar_config['api_links']['rp_TradeWatcherViewList']['list']='fortexadminreport/tradewatcher';
$sugar_config['api_links']['rp_ccyexposure']['list']='ccyexposurereport/ccyexposure';
$sugar_config['api_links']['rp_ccyexposure']['notify']='ccyexposurereport/ccyexposurenotify';
$sugar_config['api_links']['accounttemplate']['root']='accounttemplates';
$sugar_config['api_links']['accounttemplate']['all']='accounttemplates/all';
$sugar_config['api_links']['bo_batch_of_demo_account']['root']='demousers/BatchDemoAccount';
$sugar_config['api_links']['bo_fix_host']['root']='fixhost';
$sugar_config['api_links']['bo_fix_host']['account_default_value']='domain';
$sugar_config['api_links']['bo_fix_host']['email_default_value']='default';
$sugar_config['api_links']['bo_fix_host']['app_list_strings']['ft_fixver_list']['JSON_INT']='JSON_INT';
$sugar_config['api_links']['bo_fix_host']['app_list_strings']['ft_fixver_list']['JSON_INT_SSL']='JSON_INT_SSL';
$sugar_config['api_links']['bo_fix_host']['app_list_strings']['ft_fixver_list']['JSON_STR']='JSON_STR';
$sugar_config['api_links']['bo_fix_host']['app_list_strings']['ft_fixver_list']['JSON_STR_SSL']='JSON_STR_SSL';
$sugar_config['api_links']['bo_margin_settings']['root']='marginsettings';
$sugar_config['api_links']['bo_margin_settings']['system']='marginsettings/system';
$sugar_config['api_links']['bo_margin_settings']['list']='marginsettings/symbol';
$sugar_config['api_links']['bo_decimal_settings']='marginsettings/symbol';
$sugar_config['api_links']['bo_api_usage']['root']='apiaccess';
$sugar_config['api_links']['bo_api_usage']['list']='apiaccess/all';
$sugar_config['api_links']['bo_lp_execution_report']['root']='adminreport/lpreport';
$sugar_config['api_links']['bo_cfd_nop']['root']='report/account/cfdnop';
$sugar_config['api_links']['symbol_commission_setting']['root']='users/symbolcommissiongroupsetting';
$sugar_config['api_links']['symbol_commission_setting']['list']='users/symbolcommissiongroupsetting/account';
$sugar_config['api_links']['symbol_commission_setting']['item']='users/symbolcommissiongroupsetting/account/symbol';
$sugar_config['api_links']['tradeserver']='servernode/all';
$sugar_config['bo_deposit_withdraw_form']['admin_email']['0']='gw655-0@126.com';
$sugar_config['web_root']='E:\work_space\suiteCRM';
$sugar_config['passwordsetting']['SystemGeneratedPasswordON']='0';
$sugar_config['passwordsetting']['forgotpasswordON']='0';
$sugar_config['enable_line_editing_detail']=False;
$sugar_config['enable_line_editing_list']=False;
$sugar_config['max_export_row_num']=100000;
$sugar_config['ft_save_tmp_pdf_file']=True;
$sugar_config['ft_error_receiver_email']='gw655@126.com';
$sugar_config['mt4_request_email_receiver']='gw655@126.com';
$sugar_config['http_referer']['list']['0']='crm.ft.com';
$sugar_config['real_time_report']['host']='https://demo.fortex.com/';
$sugar_config['real_time_report']['account']='CRM_CHART';
$sugar_config['real_time_report']['password']='DEMO20170720';
$sugar_config['real_time_report']['init_symbol']='EUR/USD';
$sugar_config['ft_export_type']='golang=';
$sugar_config['ft_python_path']='/usr/bin/python3';
$sugar_config['ft_php_path']='D:/software/wamp64/bin/php/php5.6.25';
$sugar_config['ft_python_script_path']['excel_tool']='/www/tools/python/export_excel.py';
$sugar_config['ft_python_script_path']['deploy_tool']='/www/tools/python/deploy.py';
$sugar_config['ft_deploy']['sync_dirs']['0']='custom/Extension';
$sugar_config['ft_deploy']['sync_dirs']['1']='custom/modules';
$sugar_config['ft_deploy']['sync_dirs']['2']='custom/themes';
$sugar_config['ft_deploy']['sync_dirs']['3']='custom/include';
$sugar_config['ft_deploy']['sync_dirs']['4']='modules';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_host_name']='127.0.0.1';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_host_instance']='test_2';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_user_name']='root';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_password']='';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_name']='suitecrm_test_2';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_type']='mysql';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_port']='';
$sugar_config['ft_deploy']['hosts']['0']['db']['db_manager']='FtMysqlManager';
$sugar_config['ft_deploy']['hosts']['0']['web_root']='E:\crm2';
$sugar_config['enable_AccountInit_adminNotification']=True;
$sugar_config['ft_operation_log_event_types']['-1']='other';
$sugar_config['ft_operation_log_event_types']['0']='edit';
$sugar_config['ft_operation_log_event_types']['1']='del';
$sugar_config['ft_operation_log_event_types']['2']='login';
$sugar_config['ft_operation_log_event_types']['3']='logout';
$sugar_config['ft_operation_log_event_types']['4']='create';
$sugar_config['ft_operation_log_event_types']['5']='login_failed';
$sugar_config['ft_operation_log_event_types']['6']='init_account';
$sugar_config['ft_operation_log_event_types']['7']='deposit';
$sugar_config['ft_operation_log_event_types']['8']='withdraw';
$sugar_config['show_mt5_request_form']=1;
$sugar_config['mt4_group_request_form_for_amuk']=1;
$sugar_config['multi_node']['node_name']='ft2';
$sugar_config['multi_node']['separated_tables']['0']='a01_BOSettings';
$sugar_config['bo5_link']='https://www.fortex.com';
