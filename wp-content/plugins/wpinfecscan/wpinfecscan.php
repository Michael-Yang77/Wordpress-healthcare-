<?php
/**
Plugin Name:WP-Doctor Malware Scanner & Security Pro 
Plugin URI: https://website-malware-removal.com/
description: WordPress Doctor Malware scan and Security plugin
Version: 1.9.3
Author: WP-Doctor
Author URI: https://wp-doctor.jp/
*/
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $wpinfecscanversion;
$wpinfecscanversion = "1.9.3";


require_once('scannerdata/wpinfectsecurity.php');

/////add plugin wp header for proof this is wordpress site since 1.4.5

function theme_wpinfectscan_header_metadata() {
  if ( is_home() || is_front_page() ):
        require_once('scannerdata/wpinfectscanner.php');
        $mysiteurl = get_home_url();
        $scanner=new MalwareScanner();
        $metavalue=$scanner->makekey($mysiteurl);
        ?>
        <meta name="wpms_prove" content="<?php echo $metavalue; ?>" />
        <?php
  endif;
}
add_action( 'wp_head', 'theme_wpinfectscan_header_metadata' );


//////////Textdomain
add_action('init', 'my_plugin_textdomaininit');
function my_plugin_textdomaininit() {
  load_plugin_textdomain( 'wpinfecscan', false, 'wpinfecscan/languages' );
}

//////////Auto update
add_action( 'init', 'infecscanner_activate_au' );
function infecscanner_activate_au()
{
    require_once('scannerdata/wpinfectscanner.php');
    $scanner=new MalwareScanner();
    
	require_once ( 'wp_autoupdate.php' );
    global $wpinfecscanversion;
	$plugin_current_version = $wpinfecscanversion;
	$plugin_remote_path = $scanner->phpurl.'update.php'; //DLOK
	$plugin_slug = plugin_basename( __FILE__ );
	$license_user = '';
	$license_key = '';
	new infecscanner_WP_AutoUpdate ( $plugin_current_version, $plugin_remote_path, $plugin_slug, $license_user, $license_key );
}

//////////cron_schedules

function infecscanner_my_cron_schedules($schedules){
    if(!isset($schedules["10min"])){
        $schedules["10min"] = array(
            'interval' => 10*60,
            'display' => __('All files are continuously scanned every 10 minutes after designated time.','wpinfecscan'));
    }
    return $schedules;
}
add_filter('cron_schedules','infecscanner_my_cron_schedules');


function infecscanner_my_repeat_function() {
    
	require_once('scannerdata/wpinfectscanner.php');
    
    $scanner=new MalwareScanner();
    date_default_timezone_set(get_option('timezone_string'));
    $lastpatternget = strtotime(get_option( 'wpinfectscanner_lastpatternget',-1));
    $datebefore_6hours = strtotime(date("Y-m-d H:i:s", strtotime('-6 hours', time())));
    if($lastpatternget<$datebefore_6hours){
        $scanner->loaddatacloud();
    }
    
    $scanner=new MalwareScanner();
    $scanner->timezone=get_option('timezone_string');
    $scanner->run(ABSPATH,true,450); 
}

add_action ('wpinfectscannercronjob', 'infecscanner_my_repeat_function'); 


function wpinfectscannercron_activation() {
	if( !wp_next_scheduled( 'wpinfectscannercronjob' ) ) {  
	   wp_schedule_event( time(), '10min', 'wpinfectscannercronjob' );  
	}
    if (!wp_next_scheduled ( 'wpinfectscanneripupdatecronjob' )) {
        wp_schedule_event(time(), 'hourly', 'wpinfectscanneripupdatecronjob');
    }
}
add_action('wp', 'wpinfectscannercron_activation');

//Auto update auto IP block
add_action('wpinfectscanneripupdatecronjob', 'wpinfectscanneripupdatecronjob_hourly');
function wpinfectscanneripupdatecronjob_hourly() {
    
    $n = rand(0, 12);
    $autoblockdata = get_option("wpinfectscanner_autoblockip");
    if($n==1 && !empty($autoblockdata)){
        require_once('scannerdata/wpinfectscanner.php');
        $scanner=new MalwareScanner();
        $ipblockdata = $scanner->getipdata();
        
        if(!empty($ipblockdata)){
            $ipautook = true;
            $iplisttxt = array();
            foreach ($ipblockdata as $key => $value){
                if(strpos($value->ip,'***.***') !== false){
                    $ipautook = false;
                    if(get_option('wpinfectscanner_realtimeblock')==1){
                        require_once('scannerdata/wpinfectsecurity.php');
                        $secfunc=new WPInfectSecurity();
                        $secfunc->security_realtimeblock(0);
                        update_option( 'wpinfectscanner_realtimeblock', '0' );
                    }
                    break;
                }
                $iplisttxt[]=$value->ip;
            }
            if($ipautook){
                update_option("wpinfectscanner_autoblockip",implode("\n",$iplisttxt));
                
                $allipblocks = array();
                
                $ipblocklist_s = explode("\n",get_option('wpinfectscanner_blockip'));
                if(count($ipblocklist_s)>0){
                    $allipblocks = array_merge($allipblocks, $ipblocklist_s);
                }

                $allipblocks = array_merge($allipblocks, $iplisttxt);
                require_once('scannerdata/wpinfectsecurity.php');
                $secfunc=new WPInfectSecurity();
                $secfunc->security_blockip2($allipblocks);
                
            }else{
                update_option("wpinfectscanner_autoblockip","");
            }
        }
    }
    
}

function wpinfectscanner_plugin_activate() {
    register_mysettings();
    require_once('scannerdata/wpinfectscanner.php');
    $scanner=new MalwareScanner();
    $scanner->loaddatacloud();
}
register_activation_hook( __FILE__, 'wpinfectscanner_plugin_activate' );

function wpinfectscannercron_deactivate() {	
	$timestamp = wp_next_scheduled ('wpinfectscannercronjob');
	wp_unschedule_event ($timestamp, 'wpinfectscannercronjob');
    
    $timestamp = wp_next_scheduled ('wpinfectscanneripupdatecronjob');
	wp_unschedule_event ($timestamp, 'wpinfectscanneripupdatecronjob');
    
    require_once('scannerdata/wpinfectsecurity.php');
    $secfunc=new WPInfectSecurity();
    
    $res=$secfunc->security_filehogo(0);
    $res=$secfunc->security_serverhogo(0);
    $res=$secfunc->security_authorhogo(0);
    $res=$secfunc->security_noindex(0);
    $res=$secfunc->security_noproxycomment(0);
    $res=$secfunc->security_spambot(0);
    $res=$secfunc->security_nowpscan(0);
    $res=$secfunc->security_tracktrace(0);
    $res=$secfunc->security_nodirectaccessincludes(0);
    $res=$secfunc->security_nouploadfolderphp(0);
    $res=$secfunc->security_nobadquery(0);
    
    $securytysetting=array();
    $securytysetting['security_kantansettei']=0;
    $securytysetting['security_wphideversion']=0;
    $securytysetting['security_loginlockdown']=0;
    $securytysetting['security_logincaptcha']=0;
    $securytysetting['security_pwresetcaptcha']=0;
    $securytysetting['security_noedit']=0;
    $securytysetting['security_filehogo']=0;
    $securytysetting['security_serverhogo']=0;
    $securytysetting['security_authorhogo']=0;
    $securytysetting['security_nopingback']=0;
    $securytysetting['security_norestapi']=0;
    $securytysetting['security_noindex']=0;
    $securytysetting['security_noproxycomment']=0;
    $securytysetting['security_loginchange']=0;
    $securytysetting['security_commentcaptcha']=0;
    $securytysetting['security_spambot']=0;
    $securytysetting['security_nowpscan']=0;
    $securytysetting['security_tracktrace']=0;
    $securytysetting['security_bruteforthlockdown']=0;
    $securytysetting['security_nodirectaccessincludes']=0;
    $securytysetting['security_nouploadfolderphp']=0;
    $securytysetting['security_nobadquery']=0;
    
    $securytysettingTXT = json_encode($securytysetting);
    
    update_option( 'wpinfectscanner_security', $securytysettingTXT);
    
    global $wpdb;
    $table_name = $wpdb->prefix . 'infectscannerdata';
    $sql = "DROP TABLE IF EXISTS ".$table_name;
    $wpdb->query($sql);
    
    $table_name = $wpdb->prefix . 'infectscannerdata_db';
    $sql = "DROP TABLE IF EXISTS ".$table_name;
    $wpdb->query($sql);
    
    delete_option( 'wpinfectscan_db_version' );
    delete_option( 'wpinfectscan_db_version_db' );
    delete_option( 'wpinfectscanner_newdbstructure1.9.2' );
    delete_option( 'wpinfectscan_localwhitelist' );
} 
register_deactivation_hook (__FILE__, 'wpinfectscannercron_deactivate');

////////////////

/////AJAX///////

function realtimerun(){

    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    require_once('scannerdata/wpinfectscanner.php');
    $scanner=new MalwareScanner();
    $scanner->timezone=get_option('timezone_string');
    $res=explode(":",$scanner->run(ABSPATH,false,120));
    
    if($res[0]=="doneok"){
        $data['status'] = "doneok";
        echo json_encode($data);
    }else{
        $data['status']="error";
        $data['d1'] = $res[1];
        echo json_encode($data);
    }

    die();
}
add_action( 'wp_ajax_realtimerun', 'realtimerun' );


include_once('scannerdata/getscanprocess_inc.php');

function infeccodegetter(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
            
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }


    global $wpdb;
    $table_name = $wpdb->prefix . 'infectscannerdata';
            
    $query = $wpdb->prepare( "SELECT * FROM ".$table_name." where filepath = %s and filename = %s and infectedflag=1 LIMIT 1;",$fpath,$ffile);
    

    $rows = $wpdb->get_results($query);
    if($wpdb->num_rows>0){
        
        if (! file_exists(ABSPATH.$fpath.$ffile)) {
            echo "nofile";
            die();
        }
                      
        $fileContent = htmlspecialchars (file_get_contents(ABSPATH.$fpath.$ffile));
        $fileContent = base64_encode ($fileContent);
        
        echo $fileContent;
                                                
    }
    
    die();
}
add_action( 'wp_ajax_infeccodegetter', 'infeccodegetter' );

function infeccodegetter_db(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
            
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }
  
    global $wpdb;
    $table_name_db = $wpdb->prefix . 'infectscannerdata_db';
    
    //wp_options-option_value-956-option_id
    $dbdata = explode("-",$fpath.$ffile);
    if(count($dbdata)==4){
        $dbname = esc_sql($dbdata[0]);
        $rowname = esc_sql($dbdata[1]);
        $dbidname = esc_sql($dbdata[3]);
        $dbid = esc_sql($dbdata[2]);
        $datasql = "SELECT * FROM `".$table_name_db."` WHERE dbname='".$dbname."' and dbrowname='".$rowname."' and dbidname='".$dbidname."' and dbid='".$dbid."' and infectedflag>0";
        $data = $wpdb->get_results($datasql);
        if(count($data)>0){
            $exists = $wpdb->get_results("SELECT * from ".$dbname." where ".$dbidname."= ".$dbid."");
            if(count($exists)>0){
                $strdata = $exists[0]->$rowname;
                $unserializedata = unserialize( $strdata );
                if(! empty($unserializedata)){
                    echo "1".base64_encode (htmlspecialchars ($strdata));
                }else{
                    echo "0".base64_encode (htmlspecialchars ($strdata));
                }
            }else{
                echo "nofile";
            }
        }else{
            echo "nofile";
        }
    }else{
        echo "nofile";
    }
    
    die();
}
add_action( 'wp_ajax_infeccodegetter_db', 'infeccodegetter_db' );

function infeccodedelete(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }


    global $wpdb;
    $table_name = $wpdb->prefix . 'infectscannerdata';
            
    $query = $wpdb->prepare( "SELECT * FROM ".$table_name." where filepath = %s and filename = %s and infectedflag=1 LIMIT 1;",$fpath,$ffile);
    

    $rows = $wpdb->get_results($query);
    if($wpdb->num_rows>0){
                      
        $res = unlink ( ABSPATH.$fpath.$ffile );
        if($res){
            $wpdb->get_results("DELETE from ".$table_name." where id= ".$rows[0]->id." limit 1");
            echo "ok";
        }else{
            echo "fail";
        }
                                                
    } else {
        echo "fail";
    }
    
    die();
}
add_action( 'wp_ajax_infeccodedelete', 'infeccodedelete' );

function infeccodedelete_db(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }

    global $wpdb;
    $table_name_db = $wpdb->prefix . 'infectscannerdata_db';
    
    //wp_options-option_value-956-option_id
    $dbdata = explode("-",$fpath.$ffile);
    if(count($dbdata)==4){
        $dbname = esc_sql($dbdata[0]);
        $rowname = esc_sql($dbdata[1]);
        $dbidname = esc_sql($dbdata[3]);
        $dbid = esc_sql($dbdata[2]);
        $datasql = "SELECT * FROM `".$table_name_db."` WHERE dbname='".$dbname."' and dbrowname='".$rowname."' and dbidname='".$dbidname."' and dbid='".$dbid."' and infectedflag>0";
        $data = $wpdb->get_results($datasql);
        if(count($data)>0){
            
            $exists = $wpdb->get_results("SELECT * from ".$dbname." where ".$dbidname."= ".$dbid." limit 1");
            if(count($exists)>0){
                $result = $wpdb->query("DELETE from ".$dbname." where ".$dbidname."= ".$dbid." limit 1");
            }else{
                $result=true;
            }
            if($result){
                $sqldddel = "DELETE FROM `".$table_name_db."` WHERE dbname='".$dbname."' and dbrowname='".$rowname."' and dbidname='".$dbidname."' and dbid='".$dbid."'";
                $wpdb->query($sqldddel);
                echo "ok";
            }else{
                echo "fail";
            }
        }else{
            echo "fail";
        }
    }else{
        echo "fail";
    }
    
    die();
}
add_action( 'wp_ajax_infeccodedelete_db', 'infeccodedelete_db' );

function infeccodechange_db(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];
    if ( version_compare( $wp_version, '5.0', '<' ) ) {
        $ccode=rawurldecode(wp_unslash($_POST['code']));
    }else{
        $ccode=rawurldecode($_POST['code']);
    }

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }

    global $wpdb;
    $table_name_db = $wpdb->prefix . 'infectscannerdata_db';
    
    //wp_options-option_value-956-option_id
    $dbdata = explode("-",$fpath.$ffile);
    if(count($dbdata)==4){
        $dbname = esc_sql($dbdata[0]);
        $rowname = esc_sql($dbdata[1]);
        $dbidname = esc_sql($dbdata[3]);
        $dbid = esc_sql($dbdata[2]);
        $datasql = "SELECT * FROM `".$table_name_db."` WHERE dbname='".$dbname."' and dbrowname='".$rowname."' and dbidname='".$dbidname."' and dbid='".$dbid."' and infectedflag>0";
        $data = $wpdb->get_results($datasql);
        if(count($data)>0){
            
            if($_POST['serializedata']==1){
                
                if(empty(unserialize($ccode))){ 
                    echo "fail_structure";
                    die();
                }
                
            }
            
            $wpdb->query("UPDATE ".$dbname." SET ".$rowname." = '".esc_sql($ccode)."' where ".$dbidname."=".$dbid.";");
            
            require_once('scannerdata/wpinfectscanner.php');
            $scanner=new MalwareScanner();
            $fhash=md5($ccode);
            $infec = $scanner->onedbscan($dbname,$rowname,$dbidname,$dbid,$fhash);
            if($infec==false){
                
                $sqldddel = "DELETE FROM `".$table_name_db."` WHERE dbname='".$dbname."' and dbrowname='".$rowname."' and dbidname='".$dbidname."' and dbid='".$dbid."'";
                $wpdb->query($sqldddel);
                
                echo "ok2";
            }else{
                echo "ok1";
            }
            
        }else{
            echo "fail";
        }
    }else{
        echo "fail";
    }
    
    die();
}
add_action( 'wp_ajax_infeccodechange_db', 'infeccodechange_db' );


function infeccodechange(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    $fpath=$_POST['pfile'];
    $ffile=$_POST['gfile'];
    if ( version_compare( $wp_version, '5.0', '<' ) ) {
        $ccode=rawurldecode(wp_unslash($_POST['code']));
    }else{
        $ccode=rawurldecode($_POST['code']);
    }

    if(!isset($fpath)){
        die();
    }

    if(!isset($ffile)){
        die();
    }


    global $wpdb;
    $table_name = $wpdb->prefix . 'infectscannerdata';
            
    $query = $wpdb->prepare( "SELECT * FROM ".$table_name." where filepath = %s and filename = %s and infectedflag=1 LIMIT 1;",$fpath,$ffile);
    
    $rows = $wpdb->get_results($query);
    if($wpdb->num_rows>0){
                      
        $res = file_put_contents(ABSPATH.$fpath.$ffile, $ccode);
        if($res){
            require_once('scannerdata/wpinfectscanner.php');
            $scanner=new MalwareScanner();
            $fhash=md5($ccode);
            $infec = $scanner->onefilescan($ccode,$fhash);
            if($infec==false){
                
                $wpdb->get_results("UPDATE ".$table_name." SET `filehash` = '".$fhash."', `size` = '".strlen($ccode)."', `infectedflag` = '0', `maindbflaged` = '0', `matchline` = '' WHERE id= ".$rows[0]->id." limit 1");
                
                echo "ok2";
            }else{
                echo "ok1";
            }
        }else{
            echo "fail";
        }
                                                
    } else {
        echo "fail";
    }
    
    die();
}
add_action( 'wp_ajax_infeccodechange', 'infeccodechange' );

function valncheck(){
    
    if ( ! current_user_can( 'manage_options' ) ) {
        die();
    }
    
    $chackdata=$_POST['chackdata'];

    if(!isset($chackdata)){
        die();
    }
    
    require_once('scannerdata/wpinfectexploit.php');
    $scanner=new WPInfectExploit();
    $res = $scanner->scanexploit($chackdata);
    
    if($res!="blocked"){
        $checkdata = json_decode($res,false);
        if(is_array($checkdata)){
            date_default_timezone_set(get_option('timezone_string'));
            update_option( 'wpinfectscanner_valncheck',$res);
            update_option( 'wpinfectscanner_valnchecktime',date("Y/m/d H:i:s"));
        }
    }
    
    echo $res;
    
    die();
}
add_action( 'wp_ajax_valncheck', 'valncheck' );

////////////////



function admin_notice__error() {
    
    if ( !current_user_can( 'manage_options' ) )  {
		return;
	}
    
    $ar = get_option( 'wpinfectscanner_hidealert_info' ,-1 );
    
    if($ar!=1){
        
        $ptext = "";
        $koudokutext = "";
        $exptext = "";
        $ptcount = get_option( 'wpinfectscanner_newpatternnum');

        $ptar = explode(",",$ptcount);
        if(count($ptar)==2){
            $ptcount=0;
            $koudokutext = $ptar[1];
        }
        
        if($ptcount!=0){
            $class = 'notice notice-warning';
            $message = __("The definition file of WordPress malware scanner is not the latest version. Please update from [Malware Scan] in the administration display.",'wpinfecscan') ;

            printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
        }
        
        global $wpdb;
        $table_name = $wpdb->prefix . 'infectscannerdata';
        if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {
            $query = "SELECT COUNT(id) FROM ".$table_name." where infectedflag=1 or (infectedflag=2 and maindbflaged=1);";
            $rows = $wpdb->get_var($query);
            if ($rows>0){
                $class = 'notice notice-error';
                $message = __("Detected malware infection. Please check from [Malware Scan] in the administration display.",'wpinfecscan') ;

                printf( '<div class="%1$s"><p>%2$s</p></div>', esc_attr( $class ), esc_html( $message ) ); 
            }
        }
    }
}
add_action( 'load-index.php', 
    function(){
        add_action( 'admin_notices', 'admin_notice__error' );
    }
);

add_action( 'admin_menu', 'wpinfectscan_plugin_menu' );

function register_mysettings() { 

    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_cron_autoscan_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_cron_starttime_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_cron_mailsend_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_cron_mailaddr_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_cron_lastemailsend_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_hidealert_info' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_lastpatternget' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_malwarepattern' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_newpatternnum' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_newpatterndetail' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_whitelist' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_security' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_loginurl' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_alert' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_contractto' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_blockip' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_autoblockip' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_realtimeblock' );
    register_setting( 'wpinfecscanner-group', 'wpinfectscanner_realtimeblockkey' );
    
    
    $setting_autoscan = get_option( 'wpinfectscanner_cron_autoscan_info',-1);
    if($setting_autoscan===-1){
        update_option( 'wpinfectscanner_cron_autoscan_info', '1' );
    }
    
    $setting_autoscantime = get_option( 'wpinfectscanner_cron_starttime_info' ,-1);
    if($setting_autoscantime===-1){
        update_option( 'wpinfectscanner_cron_starttime_info', '3' );
    }
    
    $setting_email = get_option( 'wpinfectscanner_cron_mailsend_info' ,-1);
    if($setting_email===-1){
        update_option( 'wpinfectscanner_cron_mailsend_info', '0' );
    }
    
    $setting_emailaddr = get_option( 'wpinfectscanner_cron_mailaddr_info',-1);
    if($setting_emailaddr===-1){
        update_option( 'wpinfectscanner_cron_mailaddr_info', get_option( 'admin_email' ) );
    }
    
    $hidealert = get_option( 'wpinfectscanner_hidealert_info',-1);
    if($hidealert===-1){
        update_option( 'wpinfectscanner_hidealert_info', 0 );
    }
    
    $lastpatternget = get_option( 'wpinfectscanner_lastpatternget',-1);
    if($lastpatternget===-1){
        date_default_timezone_set(get_option('timezone_string'));
        $datebeforeonemonth = date("Y-m-d H:i:s", strtotime('-1 month', time()));
        update_option( 'wpinfectscanner_lastpatternget', $datebeforeonemonth);
    }
    
    $malwarepattern = get_option( 'wpinfectscanner_malwarepattern',-1);
    if($malwarepattern===-1){
        update_option( 'wpinfectscanner_malwarepattern', "" );
    }
    
    $newpatternnum = get_option( 'wpinfectscanner_newpatternnum',-1);
    if($newpatternnum===-1){
        update_option( 'wpinfectscanner_newpatternnum', 0 );
    }
    
    $newpatterndetail = get_option( 'wpinfectscanner_newpatterndetail',-1);
    if($newpatterndetail===-1){
        update_option( 'wpinfectscanner_newpatterndetail', "" );
    }
    
    $whitelist = get_option( 'wpinfectscanner_whitelist',-1);
    if($whitelist===-1){
        update_option( 'wpinfectscanner_whitelist', "" );
    }
    
    $security = get_option( 'wpinfectscanner_security',-1);
    if($security===-1){
        update_option( 'wpinfectscanner_security', "" );
    }
    
    $loginurl = get_option( 'wpinfectscanner_loginurl',-1);
    if($loginurl===-1){
        update_option( 'wpinfectscanner_loginurl', "" );
    }
    
    $wpialert = get_option( 'wpinfectscanner_alert',-1);
    if($wpialert===-1){
        update_option( 'wpinfectscanner_alert', "" );
    }
    
    $contractto = get_option( 'wpinfectscanner_contractto',-1);
    if($contractto===-1){
        update_option( 'wpinfectscanner_contractto', '' );
    }
    
    $setting_blockip = get_option( 'wpinfectscanner_blockip',-1);
    if($setting_blockip===-1){
        update_option( 'wpinfectscanner_blockip', '' );
    }
    
    $setting_autoblockip = get_option( 'wpinfectscanner_autoblockip',-1);
    if($setting_autoblockip===-1){
        update_option( 'wpinfectscanner_autoblockip', '' );
    }
    
    $setting_realtimeblock = get_option( 'wpinfectscanner_realtimeblock',-1);
    if($setting_realtimeblock===-1){
        update_option( 'wpinfectscanner_realtimeblock', '0' );
    }
    
    $setting_realtimeblockkey = get_option( 'wpinfectscanner_realtimeblockkey',-1);
    if($setting_realtimeblock===-1){
        update_option( 'wpinfectscanner_realtimeblockkey', "" );
    }
}

function wpinfectscan_plugin_menu() {
    
    if ( current_user_can( 'manage_options' ) )  {
        $batch =  '';
         global $wpdb;
         $table_name = $wpdb->prefix . 'infectscannerdata';
         if($wpdb->get_var("SHOW TABLES LIKE '$table_name'") == $table_name) {
            $query = "SELECT COUNT(id) FROM ".$table_name." where infectedflag=1 or (infectedflag=2 and maindbflaged=1);";
            $rows = $wpdb->get_var($query);
            $totalcount = 0;
            if ($rows>0){
                $totalcount = $rows;
            }
            
            $table_name2 = $wpdb->prefix . 'infectscannerdata_db';
            if($wpdb->get_var("SHOW TABLES LIKE '$table_name2'") == $table_name2) {
                $query2 = "SELECT COUNT(DISTINCT patternid,dbname,dbrowname) FROM ".$table_name2." where infectedflag=1 or (infectedflag=2 and maindbflaged=1);";
                $rows2 = $wpdb->get_var($query2);
                if ($rows2>0){
                    $totalcount = $totalcount+$rows2;
                }
            }
            
            if ($totalcount>0){
                $batch =  '<span class="update-plugins count-'.$totalcount.'"><span class="plugin-count">'.$totalcount.'</span></span>';
            }
         }
         

        add_menu_page( "WP malware scanner", "Malware scan ".$batch, 'manage_options', "wpdoctorinfecscanner","my_plugin_options",plugin_dir_url( __FILE__ )."/images/menuicon.png");
        add_action( 'admin_init', 'register_mysettings' );
        
        date_default_timezone_set(get_option('timezone_string'));
        $lastpatternget = strtotime(get_option( 'wpinfectscanner_lastpatternget',-1));
        $datebefore_6hours = strtotime(date("Y-m-d H:i:s", strtotime('-6 hours', time())));
        if($lastpatternget<$datebefore_6hours){
            $scanner=new MalwareScanner();
            $scanner->loaddatacloud();
        }else{
            if(get_option( 'wpinfectscanner_newpatternnum',-1)>0){
                $scanner=new MalwareScanner();
                if($scanner->getpatternnum==0){
                    $scanner->loaddatacloud();
                }
            }
        }
    }
    
}

function my_plugin_options() {
    
    
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
    
    $settingchanged = false;
    $securitysettingchanged = false;
    
    
    if(isset($_POST["settingname"])){
        
        if($_POST["settingname"]=="setting"){
            $autoscan = $_POST["wpinfectscanner_cron_autoscan_info"];
            $autoscantime= $_POST["wpinfectscanner_cron_starttime_info"];
            $scanmailsend = $_POST["wpinfectscanner_cron_mailsend_info"];
            $scanmailaddr= $_POST["wpinfectscanner_cron_mailaddr_info"];
            $ar = $_POST[ 'wpinfectscanner_hidealert_info' ];

            if($autoscan!=1){
                $autoscan = 0;
            }
            
            
            if($autoscantime<0 || $autoscantime>23){
                $autoscantime = 3;
            }
            
            if($scanmailsend!=1){
                $scanmailsend =0;
            }
            
            if(! is_email($scanmailaddr)){
                $scanmailaddr=get_option( 'admin_email' );
            }
            
            if($ar!=1){
                $ar=0;
            }
            
            update_option( 'wpinfectscanner_cron_autoscan_info', $autoscan);
            update_option( 'wpinfectscanner_cron_starttime_info', $autoscantime );
            update_option( 'wpinfectscanner_cron_mailsend_info', $scanmailsend );
            update_option( 'wpinfectscanner_cron_mailaddr_info', $scanmailaddr );
            update_option( 'wpinfectscanner_hidealert_info', $ar );
            
            $settingchanged=true;
        
        }
        
        
        if($_POST["settingname"]=="security"){
            
            require_once('scannerdata/wpinfectsecurity.php');
            $secfunc=new WPInfectSecurity();
            
            $security_kantansettei=0;
            if($_POST["kantansettei"]>0){
                $security_kantansettei=$_POST["kantansettei"];
            }
            
            $security_wphideversion=0;
            if($_POST["wpinfectscanner_security_wphideversion"]==1){
                $security_wphideversion=1;
            }

            $security_loginlockdown=0;
            if($_POST["wpinfectscanner_security_loginlockdown"]==1){
                $security_loginlockdown=1;
            }

            $security_logincaptcha=0;
            if($_POST["wpinfectscanner_security_logincaptcha"]==1){
                $security_logincaptcha=1;
            }
            
            $security_pwresetcaptcha=0;
            if($_POST["wpinfectscanner_security_pwresetcaptcha"]==1){
                $security_pwresetcaptcha=1;
            }

            $security_noedit=0;
            if($_POST["wpinfectscanner_security_noedit"]==1){
                $security_noedit=1;
            }

            $security_filehogo=0;
            if($_POST["wpinfectscanner_security_filehogo"]==1){
                $security_filehogo=1;
            }

            $security_serverhogo=0;
            if($_POST["wpinfectscanner_security_serverhogo"]==1){
                $security_serverhogo=1;
            }
            
            $security_authorhogo=0;
            if($_POST["wpinfectscanner_security_authorhogo"]==1){
                $security_authorhogo=1;
            }

            $security_nopingback=0;
            if($_POST["wpinfectscanner_security_nopingback"]==1){
                $security_nopingback=1;
            }

            $security_norestapi=0;
            if($_POST["wpinfectscanner_security_norestapi"]==1){
                $security_norestapi=1;
            }

            $security_noindex=0;
            if($_POST["wpinfectscanner_security_noindex"]==1){
                $security_noindex=1;
            }

            $security_noproxycomment=0;
            if($_POST["wpinfectscanner_security_noproxycomment"]==1){
                $security_noproxycomment=1;
            }

            $security_loginchange=0;
            if($_POST["wpinfectscanner_security_loginchange"]==1){
                $security_loginchange=1;
            }

            $security_commentcaptcha=0;
            if($_POST["wpinfectscanner_security_commentcaptcha"]==1){
                $security_commentcaptcha=1;
            }

            $security_spambot=0;
            if($_POST["wpinfectscanner_security_spambot"]==1){
                $security_spambot=1;
            }

            $security_nowpscan=0;
            if($_POST["wpinfectscanner_security_nowpscan"]==1){
                $security_nowpscan=1;
            }
            
            $security_tracktrace=0;
            if($_POST["wpinfectscanner_security_tracktrace"]==1){
                $security_tracktrace=1;
            }
            
            $security_bruteforthlockdown=0;
            if($_POST["wpinfectscanner_security_bruteforthlockdown"]==1){
                $security_bruteforthlockdown=1;
            }
            
            $security_nodirectaccessincludes=0;
            if($_POST["wpinfectscanner_security_nodirectaccessincludes"]==1){
                $security_nodirectaccessincludes=1;
            }
            
            $security_nouploadfolderphp=0;
            if($_POST["wpinfectscanner_security_nouploadfolderphp"]==1){
                $security_nouploadfolderphp=1;
            }
            
            $security_nobadquery=0;
            if($_POST["wpinfectscanner_security_nobadquery"]==1){
                $security_nobadquery=1;
            }
            
            
            $secerror="";


            $res=$secfunc->security_filehogo($security_filehogo);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_filehogo=$securytysetting->security_filehogo;
                    $secerror.="<span style='color:red'>". __("Couldn't activate protection of important files because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_serverhogo($security_serverhogo);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_serverhogo=$securytysetting->security_serverhogo;
                    $secerror.="<span style='color:red'>". __("Couldn't activate server security function because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_authorhogo($security_authorhogo);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_authorhogo=$securytysetting->security_authorhogo;
                    $secerror.="<span style='color:red'>". __("Couldn't activate author protection because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }

            $res=$secfunc->security_noindex($security_noindex);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_noindex=$securytysetting->security_noindex;
                    $secerror.="<span style='color:red'>". __("Couldn't activate disable function of INDEX list because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_noproxycomment($security_noproxycomment);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_noproxycomment=$securytysetting->security_noproxycomment;
                    $secerror.="<span style='color:red'>". __("Couldn't activate disable function of Proxy comments because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            if($security_loginchange==1){
                $curl=trim($_POST["wpinfectscanner_security_loginchangeurl"]);
                if(strlen($curl)<6 || ! preg_match("/^[a-zA-Z0-9]+$/", $curl)){
                    $security_loginchange=0;
                    $secerror.="<span style='color:red'>". __("The new login URL should be consist of more than 6 half-width integers.",'wpinfecscan')."</span><br>";
                }else{
                    if($curl=="login"||$curl=="wp-login"){
                        $security_loginchange=0;
                        $secerror.="<span style='color:red'>". __("The login and wp-login are unavailable.",'wpinfecscan')."</span><br>";
                    }else{
                        update_option( 'wpinfectscanner_loginurl' , $curl);
                    }
                }
            }
            
            
            $res=$secfunc->security_spambot($security_spambot);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_spambot=$securytysetting->security_spambot;
                    $secerror.="<span style='color:red'>". __("Couldn't activate disable function of spam bots because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_nowpscan($security_nowpscan);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_nowpscan=$securytysetting->security_nowpscan;
                    $secerror.="<span style='color:red'>". __("Couldn't activate disable function of WPSCAN because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_tracktrace($security_tracktrace);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_tracktrace=$securytysetting->security_tracktrace;
                    $secerror.="<span style='color:red'>". __("Couldn't activate Track Trace function because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_nodirectaccessincludes($security_nodirectaccessincludes);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_nodirectaccessincludes=$securytysetting->security_nodirectaccessincludes;
                    $secerror.="<span style='color:red'>". __("Couldn't activate Include file protection because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_nouploadfolderphp($security_nouploadfolderphp);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_nouploadfolderphp=$securytysetting->security_nouploadfolderphp;
                    $secerror.="<span style='color:red'>". __("Couldn't activate Upload folder protection because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            $res=$secfunc->security_nobadquery($security_nobadquery);
            if(!$res){
                $securytysettingTXT = get_option( 'wpinfectscanner_security');
                if(strlen($securytysettingTXT)>3){
                    $securytysetting=json_decode($securytysettingTXT);
                    $security_nobadquery=$securytysetting->security_nobadquery;
                    $secerror.="<span style='color:red'>". __("Couldn't activate block danger query because of no permission to write htaccess file.",'wpinfecscan')."</span><br>";
                }
            }
            
            
            $securitysettingchanged = true;
            $securytysetting=array();
            $securytysetting['security_kantansettei']=$security_kantansettei;

            $securytysetting['security_wphideversion']=$security_wphideversion;
            $securytysetting['security_loginlockdown']=$security_loginlockdown;
            $securytysetting['security_logincaptcha']=$security_logincaptcha;
            $securytysetting['security_pwresetcaptcha']=$security_pwresetcaptcha;
            $securytysetting['security_noedit']=$security_noedit;
            $securytysetting['security_filehogo']=$security_filehogo;
            $securytysetting['security_serverhogo']=$security_serverhogo;
            $securytysetting['security_authorhogo']=$security_authorhogo;
            $securytysetting['security_nopingback']=$security_nopingback;
            $securytysetting['security_norestapi']=$security_norestapi;
            $securytysetting['security_noindex']=$security_noindex;
            $securytysetting['security_noproxycomment']=$security_noproxycomment;
            $securytysetting['security_loginchange']=$security_loginchange;
            $securytysetting['security_commentcaptcha']=$security_commentcaptcha;
            $securytysetting['security_spambot']=$security_spambot;
            $securytysetting['security_nowpscan']=$security_nowpscan;
            $securytysetting['security_tracktrace']=$security_tracktrace;
            $securytysetting['security_bruteforthlockdown']=$security_bruteforthlockdown;
            
            $securytysetting['security_nodirectaccessincludes']=$security_nodirectaccessincludes;
            $securytysetting['security_nouploadfolderphp']=$security_nouploadfolderphp;
            $securytysetting['security_nobadquery']=$security_nobadquery;
            
            $securytysettingTXT = json_encode($securytysetting);
            
            update_option( 'wpinfectscanner_security', $securytysettingTXT);
            
            
            
        }
        
        
    }
    

    
    if($securitysettingchanged==false){
        $securytysettingTXT = get_option( 'wpinfectscanner_security');
        if(strlen($securytysettingTXT)>3){
            $securytysetting=json_decode($securytysettingTXT);
            
            $security_kantansettei=$securytysetting->security_kantansettei;
            $security_wphideversion=$securytysetting->security_wphideversion;
            $security_loginlockdown=$securytysetting->security_loginlockdown;
            $security_logincaptcha=$securytysetting->security_logincaptcha;
            $security_pwresetcaptcha=$securytysetting->security_pwresetcaptcha;
            $security_noedit=$securytysetting->security_noedit;
            $security_filehogo=$securytysetting->security_filehogo;
            $security_serverhogo=$securytysetting->security_serverhogo;
            if(! isset($security_kantansettei) && isset($security_loginlockdown)){
                $security_kantansettei=4;
            }
            
            
            $security_authorhogo=$securytysetting->security_authorhogo;
            $security_nopingback=$securytysetting->security_nopingback;
            $security_norestapi=$securytysetting->security_norestapi;
            $security_noindex=$securytysetting->security_noindex;
            $security_noproxycomment=$securytysetting->security_noproxycomment;
            $security_loginchange=$securytysetting->security_loginchange;
            $security_commentcaptcha=$securytysetting->security_commentcaptcha;
            $security_spambot=$securytysetting->security_spambot;
            $security_nowpscan=$securytysetting->security_nowpscan;
            $security_tracktrace=$securytysetting->security_tracktrace;
            $security_bruteforthlockdown=$securytysetting->security_bruteforthlockdown;
            
            $security_nodirectaccessincludes=$securytysetting->security_nodirectaccessincludes;
            $security_nouploadfolderphp=$securytysetting->security_nouploadfolderphp;
            $security_nobadquery=$securytysetting->security_nobadquery;
            
            
            if($security_kantansettei==1){
                if($security_nodirectaccessincludes!=1 || $security_nouploadfolderphp!=1){

                    require_once('scannerdata/wpinfectsecurity.php');
                    $secfunc1=new WPInfectSecurity();
                    $res=$secfunc1->security_nodirectaccessincludes(1);
                    if($res){
                        $security_nodirectaccessincludes=1;
                    }
                    $res=$secfunc1->security_nouploadfolderphp(1);
                    if($res){
                        $security_nouploadfolderphp=1;
                    }
                }
            }
            
            if($security_kantansettei==2 || $security_kantansettei==3){
                if($security_nodirectaccessincludes!=1 || $security_nouploadfolderphp!=1 || $security_nobadquery!=1){
                    require_once('scannerdata/wpinfectsecurity.php');
                    $secfunc2=new WPInfectSecurity();
                    $res=$secfunc2->security_nodirectaccessincludes(1);
                    if($res){
                        $security_nodirectaccessincludes=1;
                    }
                    $res=$secfunc2->security_nouploadfolderphp(1);
                    if($res){
                        $security_nouploadfolderphp=1;
                    }
                    $res=$secfunc2->security_nobadquery(1);
                    if($res){
                        $security_nobadquery=1;
                    }
                }
            }

        }else{
            $security_kantansettei=0;
        }
    }
    
    
    $setting_autoscan = get_option( 'wpinfectscanner_cron_autoscan_info',-1 );
    if($setting_autoscan===-1){
        update_option( 'wpinfectscanner_cron_autoscan_info', '1' );
        $setting_autoscan = 1;
    }
    
    $setting_autoscantime = get_option( 'wpinfectscanner_cron_starttime_info' ,-1 );
    if($setting_autoscantime===-1){
        update_option( 'wpinfectscanner_cron_starttime_info', '3' );
        $setting_autoscantime = 3;
    }
    
    $setting_email = get_option( 'wpinfectscanner_cron_mailsend_info' ,-1 );
    if($setting_email===-1){
        update_option( 'wpinfectscanner_cron_mailsend_info', '0' );
        $setting_email = 0;
    }
    
    $setting_emailaddr = get_option( 'wpinfectscanner_cron_mailaddr_info',-1  );
    if($setting_emailaddr===-1){
        update_option( 'wpinfectscanner_cron_mailaddr_info', get_option( 'admin_email' ) );
        $setting_emailaddr = get_option( 'admin_email' );
    }
    
    $setting_hidealert = get_option( 'wpinfectscanner_hidealert_info',-1  );
    if( $setting_hidealert===-1){
        update_option( 'wpinfectscanner_hidealert_info', 0 );
        $setting_hidealert = get_option( 'wpinfectscanner_hidealert_info' );
    }
    
	set_time_limit(60*10);
    //error_reporting(E_ERROR | E_PARSE);

    $scanok = false;
    if(isset($_POST["dir"])){ 
        if (md5(ABSPATH)==($_POST["dir"])) {
            $scanok = true;
        }
    }
    
    $totalscore=0;

    $totalscore=$totalscore+($security_wphideversion*6);
    $totalscore=$totalscore+($security_loginlockdown*10);
    $totalscore=$totalscore+($security_logincaptcha*6);
    $totalscore=$totalscore+($security_pwresetcaptcha*4);
    $totalscore=$totalscore+($security_noedit*3);
    $totalscore=$totalscore+($security_filehogo*4);
    $totalscore=$totalscore+($security_serverhogo*3);
    $totalscore=$totalscore+($security_authorhogo*2);
    $totalscore=$totalscore+($security_nopingback*3);
    $totalscore=$totalscore+($security_norestapi*3);
    $totalscore=$totalscore+($security_noindex*3);
    $totalscore=$totalscore+($security_noproxycomment*2);
    $totalscore=$totalscore+($security_loginchange*11);
    $totalscore=$totalscore+($security_commentcaptcha*4);
    $totalscore=$totalscore+($security_spambot*3);
    $totalscore=$totalscore+($security_nowpscan*3);
    $totalscore=$totalscore+($security_tracktrace*3);
    $totalscore=$totalscore+($security_bruteforthlockdown*6);
    
    $totalscore=$totalscore+($security_nodirectaccessincludes*2);
    $totalscore=$totalscore+($security_nouploadfolderphp*2);
    $totalscore=$totalscore+($security_nobadquery*2);
    
    $wp_config_file = ABSPATH . 'wp-config.php';
    if(file_exists($wp_config_file)){
        $wp_config_file = $wp_config_file;
    }
    else if (file_exists(dirname( ABSPATH ) . '/wp-config.php')){       
        $wp_config_file = dirname( ABSPATH ) . '/wp-config.php';
    }
    $files_and_dirs_to_check = array(
        array('name'=>'/','path'=>ABSPATH,'permissions'=>'0755'),
        array('name'=>'index.php','path'=>ABSPATH."index.php",'permissions'=>'0504'),
        array('name'=>'wp-includes/','path'=>ABSPATH."wp-includes",'permissions'=>'0755'),
        array('name'=>'.htaccess','path'=>ABSPATH.".htaccess",'permissions'=>'0644'),
        array('name'=>'wp-admin/index.php','path'=>ABSPATH."wp-admin/index.php",'permissions'=>'0644'),
        array('name'=>'wp-admin/js/','path'=>ABSPATH."wp-admin/js/",'permissions'=>'0755'),
        array('name'=>'wp-content/themes/','path'=>ABSPATH."wp-content/themes",'permissions'=>'0755'),
        array('name'=>'wp-content/plugins/','path'=>ABSPATH."wp-content/plugins",'permissions'=>'0755'),
        array('name'=>'wp-admin/','path'=>ABSPATH."wp-admin",'permissions'=>'0755'),
        array('name'=>'wp-content/','path'=>ABSPATH."wp-content",'permissions'=>'0755'),
        array('name'=>'wp-content/index.php','path'=>ABSPATH."wp-content/index.php",'permissions'=>'0504'),
        array('name'=>'wp-config.php','path'=>$wp_config_file,'permissions'=>'0644')
    );
    
    $needfix=false;
    foreach ($files_and_dirs_to_check as $file_or_dir)
    {
        $res=needfix_filesystem_permission_status($file_or_dir['name'],$file_or_dir['path'],$file_or_dir['permissions']);
        if($res){
            $needfix=true;
            break;
        }
    }
    
    if(!$needfix){
        $totalscore=$totalscore+12;
    }
    
    $totalscore=(int)($totalscore*0.8)+20;
    
    $ptcount = get_option('wpinfectscanner_newpatternnum',0);
    $mcount = ($ptcount/3);
    if($mcount>30){
        $mcount = 30;
    }
    $totalscore = $totalscore - $mcount;
    
    $totalscore = (int)$totalscore;
    if($totalscore<0){
        $totalscore=0;
    }
    
    //IP block options
    require_once('scannerdata/wpinfectscanner.php');
    $scanner=new MalwareScanner();
    $ipblockdata = $scanner->getipdata();
    
    if(isset($_POST["ipblocksetting"])){
        
        $ipblocklist = explode("\n",$_POST["ipblocksetting"]);
        $ipblocklist_s = array();
        
        for($i=0;$i<count($ipblocklist);$i++){
            $oneip = trim($ipblocklist[$i]);
            if(filter_var($oneip, FILTER_VALIDATE_IP) && $_SERVER['REMOTE_ADDR']!=$oneip){
                $ipblocklist_s[]= $oneip;
            }
        }
        
        if(count($ipblocklist_s)>0){
            update_option("wpinfectscanner_blockip",implode("\n",$ipblocklist_s));
            $ipblocksettingchanged = true;
        }else{
            update_option("wpinfectscanner_blockip","");
            $ipblocksettingchanged = true;
        }
        
        $autoipblock = false;
        if($_POST["autoblockip"]==1){
            if(!empty($ipblockdata)){
                $ipautook = true;
                $iplisttxt = array();
                foreach ($ipblockdata as $key => $value){
                    if(strpos($value->ip,'***.***') !== false){
                        $ipautook = false;
                        break;
                    }
                    $iplisttxt[]=$value->ip;
                }
                if($ipautook){
                    update_option("wpinfectscanner_autoblockip",implode("\n",$iplisttxt));
                    $autoipblock=true;
                }else{
                    update_option("wpinfectscanner_autoblockip","");
                }
            }else{
                update_option("wpinfectscanner_autoblockip","");
            }
        }else{
            update_option("wpinfectscanner_autoblockip","");
        }
        
        $allipblocks = array();
        
        if(count($ipblocklist_s)>0){
            $allipblocks = array_merge($allipblocks, $ipblocklist_s);
        }
        
        if($autoipblock){
            $allipblocks = array_merge($allipblocks, $iplisttxt);
        }
        

        require_once('scannerdata/wpinfectsecurity.php');
        $secfunc=new WPInfectSecurity();
        $secfunc->security_blockip2($allipblocks);
        
    }
    
    $setting_realtimeblock_changed=false;
    //realtime block
     if(isset($_POST["setting_realtimeblock_ht"])){
         $setting_realtimeblock_error="";
         if($_POST["setting_realtimeblock"]==1){
            $setting_realtimeblock=1;
            $hash = md5(uniqid(rand(),1));
            $randnum1 = rand(2, 5);
            $randnum2 = rand(2, 5);
            $rkey = substr($hash, 0,$randnum1)."req=".substr($hash, $randnum2*-1);
            update_option( 'wpinfectscanner_realtimeblockkey', $rkey );
         }else{
             $setting_realtimeblock=0;
         }
         require_once('scannerdata/wpinfectsecurity.php');
         $secfunc=new WPInfectSecurity();
         $res=$secfunc->security_realtimeblock($setting_realtimeblock);
         if($res){
             update_option("wpinfectscanner_realtimeblock",$setting_realtimeblock);
         }else{
             $setting_realtimeblock=get_option( 'wpinfectscanner_realtimeblock',false);
             $setting_realtimeblock_error="<p style='color:red'>". __("Couldn't activate the function. Please confirm the htaccess file is writeable.",'wpinfecscan')."</p>";
         }
         $setting_realtimeblock_changed=true;
     }
     
     if(isset($_GET["delrealtime"])){
         
         $setting_realtimeblock_changed=true;
         global $wpdb;
         $table_name = $wpdb->prefix . 'infectscannerrealtimeblock';
         $query = "DELETE FROM ".$table_name;
         $wpdb->get_results($query);
         
     }
     
    if(!empty($ipblockdata)){
        $firstobjectip = "";
        foreach ($ipblockdata as $key => $value){
            $firstobjectip = $value->ip;
            break;
        }
        if(strpos($firstobjectip,'***.***') !== false){
            $datautoblockip = get_option("wpinfectscanner_autoblockip");
            if(!empty($datautoblockip)){
                update_option("wpinfectscanner_autoblockip","");
            }
            if(get_option('wpinfectscanner_realtimeblock')==1){
                require_once('scannerdata/wpinfectsecurity.php');
                $secfunc=new WPInfectSecurity();
                $secfunc->security_realtimeblock(0);
                update_option( 'wpinfectscanner_realtimeblock', '0' );
            }
        }
    }
    
    $durl = $scanner->phpurl;
    
?>
    
	<link href="<?php echo plugins_url(); ?>/wpinfecscan/Styles/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo plugins_url(); ?>/wpinfecscan/Styles/fontawesome/font-awesome.min.css" rel="stylesheet">
    
	<script src="<?php echo plugins_url(); ?>/wpinfecscan/Scripts/bootstrap.min.js"></script>
    <script src="<?php echo plugins_url(); ?>/wpinfecscan/Scripts/d3.min.js"></script>
    <script src="<?php echo plugins_url(); ?>/wpinfecscan/Scripts/topojson.min.js"></script>
    <script src="<?php echo plugins_url(); ?>/wpinfecscan/Scripts/datamaps.world.min.js"></script>
    <script src="<?php echo plugins_url(); ?>/wpinfecscan/Scripts/ace-noconflict/ace.js" type="text/javascript" charset="utf-8"></script>
    
    <style>
    input[type="checkbox"], input[type="radio"] {
        margin: 0px 4px 0px 0px;
    }
    </style>
    
	<div class="container" style="max-width:1000px">
		<div style="width:100%;height:261px;background-image: url('<?php echo plugins_url(); ?>/wpinfecscan/images/<?php _e("title_en.png",'wpinfecscan'); ?>');background-repeat: no-repeat;">

			<form action="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" method='post'>
				<?php if($scanok) { ?>
                    <p><small style="font-size:12px"><?php echo __("*Scanning may take up to 10 minutes to complete. Please wait for a moment.",'wpinfecscan');?></small></p>
					<div class="lead" id="scank" style="float:right;margin-top:84px"><i class="fa fa-circle-o-notch fa-spin"></i> <?php _e("Scanning in progress","wpinfecscan"); ?></div>
				<?php }else{ ?>
				<p class="lead"></p>
                    
					<p><small style="font-size:12px">
                    <?php if(strpos(get_locale(),'ja') !== false){ ?>
                    *このプラグインの利用方法、トラブルシューティングは<a href="https://wp-doctor.jp/blog/?p=4677" target="_blank">こちらの記事</a>からご覧ください
                    <?php }else{
                    global $wpinfecscanversion;
                    echo $wpinfecscanversion;
                    }?>
                    </p></small>
                    
					<p class="lead">
						<input type="hidden" name="dir" value="<?php echo md5(ABSPATH); ?>" class="form-control">
					</p>
					<div style="float:right;margin-top:66px">
						<input type="submit" class="btn btn-lg btn-success" value="<?php _e("Start scanning","wpinfecscan"); ?>">
					</div>
                    
				<?php } ?>
			</form>
		</div>
        
        <div style="width:100%;clear:both"><?php 
        $url = $durl ."/ad.php?lang=".get_locale()."&site=".urlencode(site_url());
        $options['ssl']['verify_peer']=false;
        $options['ssl']['verify_peer_name']=false;
        $response = @file_get_contents($url, false, stream_context_create($options));
        if(! empty($response)){
            echo $response;
        }
        ?></div>
        
        <?php if(strpos(get_locale(),'ja') !== false){  ?>
        <div style="height:150px;overflow:auto;margin-top:20px;margin-bottom:25px;border:solid 1px #eee">
            <div style="padding-top:5px;padding-left:15px;padding-right:15px;">
            
            <h5><span class="dashicons dashicons-pressthis"></span> ワードプレスドクターセキュリティー関連ニュース</h5>
            <?php
            libxml_use_internal_errors(true);
            $rss = simplexml_load_file(rawurlencode('http://wp-doctor.jp/blog/category/%e3%82%bb%e3%82%ad%e3%83%a5%e3%83%aa%e3%83%86%e3%82%a3%e3%83%bb%e8%84%86%e5%bc%b1%e6%80%a7/feed/'));
            if ($rss === false) {
                echo "Failed loading XML\n";
                foreach(libxml_get_errors() as $error) {
                    echo "\t", $error->message;
                }
            }
            

            echo '<ul>';
            foreach($rss->channel->item as $item){
                $title = $item->title;
                $date = date("Y年 n月 j日", strtotime($item->pubDate));
                $link = $item->link;
            ?>
            <li style="margin-bottom:5px;"><a href="<?php echo $link; ?>" target="_blank">
            <span class="date"><?php echo $date; ?></span>
            <span class="title"><?php echo $title; ?></span>
            </a></li>
            <?php }  echo '</ul>'; ?>
            </div>
            
        </div>
        <?php } ?>
        
        <?php
        
        if($scanok) {
            $alerttxt = trim(get_option('wpinfectscanner_alert'));
            if(strlen($alerttxt)>0){
                $scanner=new MalwareScanner();
                $scanner->loaddatacloud();
            }
        }
        
        $mysiteurl = get_site_url();
        $mydomain = parse_url($mysiteurl);
        $mydomain = $mydomain['host'];
        
        $alerttxt = trim(get_option('wpinfectscanner_alert'));
        
        if($mydomain=="localhost" || filter_var($mydomain, FILTER_VALIDATE_IP)){
            echo "<p style='color:red'>".__("Attention!: Use of malware scanner through localhost or IP is restricted to inspection of 100 malware patterns.","wpinfecscan")."</p>";
            if(! ($alerttxt && strlen($alerttxt)>0)){
                echo "<br>";
            }
        }
        
        if($alerttxt && strlen($alerttxt)>0){
            echo "<p style='color:red'>".__($alerttxt,"wpinfecscan")."</p><br>";
        }
        
        ?>
        
        <ul class="nav nav-tabs" style="margin-bottom:25px">
            <li class="active"><a href="#ContentA" data-toggle="tab"><?php _e('Malware scan','wpinfecscan'); ?></a></li>
            <li><a href="#ContentB" data-toggle="tab"><?php _e('Setting','wpinfecscan'); ?></a></li>
            <li><a href="#ContentC" data-toggle="tab"><?php _e('Purchase','wpinfecscan'); ?></a></li>
            <li><a href="#ContentE" data-toggle="tab"><?php _e('Security','wpinfecscan'); ?></a></li>
            <li><a href="#ContentH" data-toggle="tab"><?php _e('Vulnerability','wpinfecscan'); ?></a></li>
            <li><a href="#ContentF" data-toggle="tab"><?php _e('IP blocker','wpinfecscan'); ?></a></li>
            <li><a href="#ContentG" data-toggle="tab"><?php _e('Real-time block','wpinfecscan'); ?></a></li>
            <?php
                
                $ptcount = get_option( 'wpinfectscanner_newpatternnum');
                $ptar = explode(",",$ptcount);
                if(count($ptar)==2){
                    $ptcount=0;
                }
                if($ptcount>0){
                    ?>
                        <li><a href="#ContentD" data-toggle="tab"><?php _e('Pattern not purchased','wpinfecscan'); ?></a></li>
                    <?php
                }
            
            ?>
        </ul>

		<div style="margin-right: -15px;margin-left: -15px;">
            <div class="tab-content" style="display:block">
                <div class="tab-pane active" id="ContentA">
                    <div class="col-lg-12">
                            <?php 
                                
                                if($scanok){
                                    date_default_timezone_set(get_option('timezone_string'));
                                    ?>
                                     <div class="progress" id="scanprogress">
                                      <div class="progress-bar progress-bar-striped active" role="progressbar"
                                      aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width:100%">
                                        <?php echo __("Scanning in progress","wpinfecscan");?>
                                      </div>
                                    </div> 
                                    <div style="width:100%">
                                        <h4 id="scanprocessdb"><span class='dashicons dashicons-album' style='font-size: 20px;color:#aaa;'></span> <?php echo __("The number of database table scanned:","wpinfecscan");?>　<?php echo __("The number of malwares detected on database:","wpinfecscan");?></h4>
                                        <h4 id="scanprocess"><span class='dashicons dashicons-portfolio' style='font-size: 20px;color:#ffbb51;'></span> <?php echo __("The number of files scanned:","wpinfecscan");?>　<?php echo __("The number of malwares detected:","wpinfecscan");?></h4>
                                    </div>
                                    <small><?php echo __("Inspecting files/database that have changed contents or have passed for a certain period since the last inspection.",'wpinfecscan'); ?><br><?php echo __("Make sure to read <a href='javascript:void(0);' onClick='showexptalert()'>this notifications </a>upon removal or deletion of malware files.",'wpinfecscan'); ?></small><br><br>
                                    <script>
                                    var scanend = false;
                                    var infecfilecount = 0;
                                    var startTime;
                                    var oldscanendfilecount=0;
                                    var samefilecount=0;
                                    var scanlloptimeout;
                                    function scanloop(){
                                        startTime = new Date();
                                        jQuery.ajax({
                                           type: "POST",
                                           url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                                           data: "action=realtimerun",
                                           success: function(msg){
                                               var res = jQuery.parseJSON(msg);
                                               
                                               if(res.status.match(/doneok/) && scanend==false){
                                                    var currentTime = new Date();
                                                    var status = (currentTime - startTime);
                                                    if(status>20000){
                                                        scanloop();
                                                    }else{
                                                        scanlloptimeout=setTimeout("scanloop()",20000-status);
                                                    }
                                                }
                                               
                                               if(res.status=="error"){
                                                   alert(res.d1);
                                                   scanend = true;
                                                   jQuery("#scanprogress").hide();
                                                   document.getElementById("scank").innerHTML = "<?php echo __("Scanning completed!","wpinfecscan");?> ";
                                               }
                                           }
                                         });     
                                    }
                                    
                                    function getprocess(){  
                                        jQuery.ajax({
                                           type: "POST",
                                           url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                                           data: "starttime=<?php echo date("Y-m-d H:i:s", strtotime('-10 seconds', time())); ?>&action=getscanprocess",
                                           success: function(msg){
                                               
                                               var res = jQuery.parseJSON(msg);
                                               if(res==null){
                                                   setTimeout(getprocess,20000);
                                               }else{
                                                   jQuery("#scanprocess").html(" <span class='dashicons dashicons-portfolio' style='font-size: 20px;color:#ffbb51;'></span> <?php echo __("The number of files scanned:","wpinfecscan");?>"+res.d1+"　<?php echo __("The number of malwares detected:","wpinfecscan");?>"+res.d2);
                                                   ///todo
                                                   jQuery("#scanprocessdb").html(" <span class='dashicons dashicons-album' style='font-size: 20px;color:#aaa;'></span> <?php echo __("The number of database table scanned:","wpinfecscan");?>"+res.d4+"　<?php echo __("The number of malwares detected on database:","wpinfecscan");?>"+res.d5);
                                                   
                                                   infecfilecount=res.d2+res.d5;
                                                   if(res.d2>0 || res.d5>0){
                                                       jQuery("#showinfectfiles").html(res.d6+res.d3);
                                                   }
                                                   if(oldscanendfilecount==res.d1+res.d4){
                                                       samefilecount=samefilecount+1;
                                                       if(samefilecount>2){
                                                            scanend = true;
                                                            document.getElementById("scank").innerHTML = "<?php echo __("Scanning completed!","wpinfecscan");?> ";
                                                            
                                                            if(parseInt(infecfilecount)==0){
                                                                jQuery("#showinfectfiles").html("<?php 
                                                                $hmatchurl = plugins_url()."/wpinfecscan/images/noinfect.png";
                                                                echo "<h4 style='margin-top:25px;margin-bottom:25px;'><img src='".$hmatchurl."' style='width:30px'> ".__("Not detected any malware in this website.","wpinfecscan")."</h4>";?>");
                                                            }
                                                            
                                                            jQuery("#scanprogress").hide();
                                                            
                                                            clearTimeout(scanlloptimeout);
                                                       }
                                                   }else{
                                                       oldscanendfilecount=res.d1+res.d4;
                                                   }
                                                   if(scanend==false){
                                                        setTimeout(getprocess,15000);
                                                   } 
                                               }
                                           }
                                         });     
                                    }
                                    
                                    jQuery(function(){
                                            scanloop();   
                                            getprocess();                                       
                                    });
                                    </script>
                                    <?php
                                    echo '<table id="scanresult" class="table"><thead><tr><th nowrap>'.__("Type",'wpinfecscan').'</th><th>'.__("Detected",'wpinfecscan')."</th><th>".__("Pattern matching",'wpinfecscan')."</th><th>".__("Definitive diagnosis",'wpinfecscan').'</th><th nowrap>'.__("Display & Edit",'wpinfecscan').'</th><th nowrap>'.__("Delete",'wpinfecscan').'</th></tr></thead>';
                                    ?><tbody id="showinfectfiles"></tbody></table>
                                    <?php
                                } else {
                                    
                                    include_once('scannerdata/getscanprocess_inc2.php');

                                }
                            ?>
                            <br><br>
                        <small><?php _e("*Pattern matched signifies the file matches to malware in its characteristics, and definitive diagnosis signifies the file is judged as containing harmful code by detailed inspection.","wpinfecscan");?></small>
                    </div>
                </div>
                <div class="tab-pane" id="ContentB">
                    <div class="col-lg-12">
                          <form method="post" action="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                            <table class="form-table">
                              <tr valign="top">
                              <th scope="row"><?php _e("Scan automatically","wpinfecscan"); ?></th>
                              <td><input type="checkbox" name="wpinfectscanner_cron_autoscan_info" value="1" <?php if($setting_autoscan==1){echo 'checked="checked"';} ?>/></td>
                              <th scope="row"><?php _e("Beginning time of auto scanning","wpinfecscan"); ?></th>
                              <td><select name="wpinfectscanner_cron_starttime_info" autocomplete="off"/>
                              <?php
                              for($i=0;$i<22;$i++){
                                  $select="";
                                  if($setting_autoscantime==$i){
                                      $select=" selected='selected'";
                                  }
                                  echo "<option value='".$i."' ".$select.">".$i." ".__("O'Clock","wpinfecscan")."</option>";
                              }
                              ?>
                              </select>
                              
                              </td>
                              </tr>
                              <tr valign="top">
                              <th scope="row"><?php _e("Notify by e-mail upon detection","wpinfecscan");?></th>
                              <td><input type="checkbox" name="wpinfectscanner_cron_mailsend_info" value="1" <?php if($setting_email==1){echo 'checked="checked"';} ?> /></td>
                              <th scope="row"><?php _e("E-mail address","wpinfecscan");?></th>
                              <td><input type="text" name="wpinfectscanner_cron_mailaddr_info" value="<?php echo $setting_emailaddr; ?>" /></td>
                              </tr>
                              
                              <tr valign="top">
                              <th scope="row"><?php _e("Hide detection alert on the administration display","wpinfecscan");?></th>
                              <td><input type="checkbox" name="wpinfectscanner_hidealert_info" value="1" <?php if($setting_hidealert==1){echo 'checked="checked"';} ?> /></td>
                              <th scope="row"></th>
                              <td></td>
                              </tr>
                            </table>
                           <input type="hidden" name="settingname" value="setting"/>
                            <?php submit_button(); ?>
                            <small><?php _e("*E-mail notification is only once in 24 hours even if detected multiple times.","wpinfecscan");?></small><br>
                            <small><?php _e("*The beginning time of auto scanning may be different when using WordPress cron.","wpinfecscan");?></small>
                          </form>
                    </div>
                </div>
                <div class="tab-pane" id="ContentC">
                    <div class="col-lg-12">
                        <?php
                            $urlparts = parse_url(site_url());
                            $domain = trim($urlparts["host"]);
                        ?>
                        <iframe src="<?php echo $durl;?>WPINFECTPAY/wpinfectscancheckout.php?mydomain=<?php echo $domain; ?>&lang=<?php echo get_locale();?>" style="width:100%;height:900px">
                        </iframe>
                    </div>
                </div>
                
                <div class="tab-pane" id="ContentE">
                    <div class="col-lg-12">
                    
                        <?php
                        
                        $home_path = get_home_path();
                        $htaccess_file = $home_path.'.htaccess';
                        if (! file_exists($htaccess_file)) {
                            @file_put_contents($htaccess_file, "");
                        }
                        
                        if(! is_writable($htaccess_file)){
                            @chmod($htaccess_file, 0644);
                        }
                        
                        if(! is_writable($htaccess_file)){
                            echo "<p style='color:red'><b><span class='dashicons dashicons-warning'></span> ".$htaccess_file.__("Unable to activate most of the security functions because of no permission to write the file. Please access again after conferred write permission on the file with using FTP.","wpinfecscan")."</b><br></p>";
                        }
        
                        ?>
                        
                        <?php
                        
                        $home_path = str_replace('\\', '/',get_home_path());
                        $home_path2 = str_replace('\\', '/',ABSPATH);
                        $htaccess_file = $home_path.'.htaccess';
                        $htaccess_file2 = $home_path2.'.htaccess';
                        if ($home_path != $home_path2 && file_exists($htaccess_file) && file_exists($htaccess_file2)) {
                            echo "<p style='color:red'><b><span class='dashicons dashicons-warning'></span> ".__("There are 2 htaccess files in wordpress root folder and wordpress home folder. We recommend to delete root folder htaccess file to work security functions properly. <br>Delete this file:","wpinfecscan").$htaccess_file2."</b><br></p>";
                        }
    
                        ?>
                        
                        <?php if($totalscore>=0 && $totalscore<40){ ?>
                        <h3><?php _e("Security score","wpinfecscan");?> <?php echo $totalscore; ?> <?php _e("Points (Risk level High)","wpinfecscan");?></h3>
                        <p><?php _e("Security measures are required","wpinfecscan");?></p>
                        <div class="progress" id="scanprogress">
                          <div class="progress-bar progress-bar-danger" role="progressbar"
                          aria-valuenow="<?php echo $totalscore; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalscore; ?>%">
                            　<?php echo $totalscore; ?>/100
                          </div>
                        </div> 
                        <?php } ?>
                        <?php if($totalscore>=40 && $totalscore<80){ ?>
                        <h3><?php _e("Security score","wpinfecscan");?> <?php echo $totalscore; ?> <?php _e("Points","wpinfecscan");?></h3>
                        <div class="progress" id="scanprogress">
                          <div class="progress-bar progress-bar-warning" role="progressbar"
                          aria-valuenow="<?php echo $totalscore; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalscore; ?>%">
                            　<?php echo $totalscore; ?>/100
                          </div>
                        </div> 
                        <?php } ?>
                        <?php if($totalscore>=80 && $totalscore<101){ ?>
                        <h3><?php _e("Security score","wpinfecscan");?> <?php echo $totalscore; ?> <?php _e("Points","wpinfecscan");?></h3>
                        <div class="progress" id="scanprogress">
                          <div class="progress-bar progress-bar-info" role="progressbar"
                          aria-valuenow="<?php echo $totalscore; ?>" aria-valuemin="0" aria-valuemax="100" style="width:<?php echo $totalscore; ?>%">
                            　<?php echo $totalscore; ?>/100
                          </div>
                        </div> 
                        <?php } ?>
                        
                        <form method="post" action="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                            <style>
                            .securityexp{
                                width:100%;
                                box-sizing: border-box;
                                padding:20px;
                                border:1px solid #ccc;
                                border-radius: 3px;
                                box-shadow: 0 1px 5px rgba(0, 0, 0, 0.10);
                            }
                            </style>
                            <div id="lightsetting">
                                <h3 style="font-size:22px"><span class="dashicons dashicons-admin-generic" style="font-size: 28px;color:#0ed39d;"></span>　<?php _e("Security measures","wpinfecscan");?></h3>
                                <p style="font-size:14px"><?php _e("Settings of security functions to protect login and files, to prevent brute-force attack and spam, etc. Move to<b>detailed</b>settings to activate each function individually.","wpinfecscan");?></p>
                                <hr>
                                <small style="color:#888"><?php _e("*Higher security settings may interfere with site operations when the website is equipped with several plugins or is customized.","wpinfecscan");?>
                                <br>
                                <?php _e("*Security function may not work appropriately on multi-site.","wpinfecscan");?></small><br>
                                <p><?php echo $secerror; ?></p><br>
                                <h4 style="line-height:25px;font-size:16px;">
                                <input type="radio" name="kantansettei" value="0" <?php if($security_kantansettei==0){echo 'checked="checked"';} ?>><?php _e("Disable security functions","wpinfecscan");?></h4>
                                <h4 style="line-height:25px;font-size:16px;">
                                <input type="radio" name="kantansettei" value="1" <?php if($security_kantansettei==1){echo 'checked="checked"';} ?>><?php _e("Security level: Moderate","wpinfecscan");?></h4>
                                
                                <div class="securityexp" id="kantansetteiexp1" style="display:none;"><br>
                                <?php _e("<b>Activated functions</b>: Login LockDown, Prevent information leak about WordPress version, Protect important files (htaccess, wp-config.php), Protect server information, Prohibit display of Index list, Prohibit WPSCAN, Prohibit Pingback,  Include file protection, Upload folder protection, Prevent brute-force attack, Prohibit comment posting via proxy, Prohibit comment posting by spambots","wpinfecscan");?><br><br>
                                </div>
                                
                                <h4 style="line-height:25px;font-size:16px;">
                                <input type="radio" name="kantansettei" value="2" <?php if($security_kantansettei==2){echo 'checked="checked"';} ?>><?php _e("Security level: High (Recommended)","wpinfecscan");?></h4>
                                
                                <div class="securityexp" id="kantansetteiexp2" style="display:none"><br><?php _e("<b>Activated functions</b>: Login LockDown, Login captcha, Password reset captcha, Prevent information leak about WordPress version, Protect important files (htaccess, wp-config.php), Protect server information, Protect author information, Prohibit display of Index list, Prohibit WPSCAN, Prohibit Pingback, Prevent brute-force attack, Prohibit Trace & Track, Include file protection, Upload folder protection, Block danger query,  Prohibit comment posting via proxy, Comment form captcha, Prohibit comment posting by spambots","wpinfecscan");?><br><br>
                                
                                
                                <p class="displaypermissionalert" style="display:none;color:#717171"><b><span class="dashicons dashicons-warning"></span><?php _e("To enhance the security level further, it is recommended to set properly the permissions in the rows displayed in red or yellow.","wpinfecscan");?></b></p>
                                <table class="table displaypermissionalert" style="width:60%;display:none">
                                    <thead>
                                        <tr>
                                            <th><?php _e('Files', "wpinfecscan") ?></th>
                                            <th><?php _e('Current permission', "wpinfecscan") ?></th>
                                            <th><?php _e('Recommended permission', "wpinfecscan") ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $wp_config_file = ABSPATH . 'wp-config.php';
                                        if(file_exists($wp_config_file)){
                                            $wp_config_file = $wp_config_file;
                                        }
                                        else if (file_exists(dirname( ABSPATH ) . '/wp-config.php')){       
                                            $wp_config_file = dirname( ABSPATH ) . '/wp-config.php';
                                        }
                                        
                                        $files_and_dirs_to_check = array(
                                            array('name'=>'/','path'=>ABSPATH,'permissions'=>'0755'),
                                            array('name'=>'index.php','path'=>ABSPATH."index.php",'permissions'=>'0504'),
                                            array('name'=>'wp-includes/','path'=>ABSPATH."wp-includes",'permissions'=>'0755'),
                                            array('name'=>'.htaccess','path'=>ABSPATH.".htaccess",'permissions'=>'0644'),
                                            array('name'=>'wp-admin/index.php','path'=>ABSPATH."wp-admin/index.php",'permissions'=>'0644'),
                                            array('name'=>'wp-admin/js/','path'=>ABSPATH."wp-admin/js/",'permissions'=>'0755'),
                                            array('name'=>'wp-content/themes/','path'=>ABSPATH."wp-content/themes",'permissions'=>'0755'),
                                            array('name'=>'wp-content/plugins/','path'=>ABSPATH."wp-content/plugins",'permissions'=>'0755'),
                                            array('name'=>'wp-admin/','path'=>ABSPATH."wp-admin",'permissions'=>'0755'),
                                            array('name'=>'wp-content/','path'=>ABSPATH."wp-content",'permissions'=>'0755'),
                                            array('name'=>'wp-content/index.php','path'=>ABSPATH."wp-content/index.php",'permissions'=>'0504'),
                                            array('name'=>'wp-config.php','path'=>$wp_config_file,'permissions'=>'0644')
                                        );
                                        
                                        $permissionneedfix=false;
                                        foreach ($files_and_dirs_to_check as $file_or_dir)
                                        {
                                            $res=wpinfectsecurity_show_wp_filesystem_status($file_or_dir['name'],$file_or_dir['path'],$file_or_dir['permissions']);
                                            if($res){
                                                $permissionneedfix=true;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                
                                </div>
                                
                                <h4 style="line-height:25px;font-size:16px;">
                                <input type="radio" name="kantansettei" value="3" <?php if($security_kantansettei==3){echo 'checked="checked"';} ?>><?php _e("Security level: Highest","wpinfecscan");?></h4>
                                
                                <div class="securityexp" id="kantansetteiexp3" style="display:none"><br><?php _e("<b>Activated functions</b>: Login LockDown, Login captcha, Password reset captcha, Change login page URL, Prevent information leak about WordPress version, Protect important files (htaccess, wp-config.php), Protect server information, Protect author information, Prohibit display of Index list, Prohibit WPSCAN, Prohibit editing themes and plugins,Include file protection, Upload folder protection, Block danger query, Prohibit Pingback, Prevent brute-force attack, Prohibit REST API, Prohibit Trace & Track, Prohibit comment posting via proxy, Comment form captcha, Prohibit comment posting by spambots","wpinfecscan");?><br><br>
                                <p style="display:none;color:red" class="displaylogin"><b><?php _e("*The login URL will be changed as follows. Make sure to take a note so as not to forget.","wpinfecscan");?></b></p>
                                <h4 class="displaylogin" style="display:none;"><?php
                                    if ( get_option( 'permalink_structure' ) ) {
                                        echo site_url( '/', $scheme ) ;
                                    } else {
                                        echo home_url( '/', $scheme ) . '?' ;
                                    }
                                    $changed = get_option( 'wpinfectscanner_loginurl');
                                    echo "<span id='loginurlchanged'>";
                                    if(!empty($changed)){
                                        echo get_option( 'wpinfectscanner_loginurl');
                                    }
                                    echo "</span>";
                                ?></h4>
                                <p class="displaypermissionalert2" style="display:none;color:#717171"><br><b><span class="dashicons dashicons-warning"></span><?php _e("To enhance the security level further, it is recommended to set properly the permissions in the rows displayed in red or yellow.","wpinfecscan");?></b></p>
                                <table class="table displaypermissionalert2" style="width:60%;display:none">
                                    <thead>
                                        <tr>
                                            <th><?php _e('Files', "wpinfecscan") ?></th>
                                            <th><?php _e('Current permission', "wpinfecscan") ?></th>
                                            <th><?php _e('Recommended permission', "wpinfecscan") ?></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        
                                        $wp_config_file = ABSPATH . 'wp-config.php';
                                        if(file_exists($wp_config_file)){
                                            $wp_config_file = $wp_config_file;
                                        }
                                        else if (file_exists(dirname( ABSPATH ) . '/wp-config.php')){       
                                            $wp_config_file = dirname( ABSPATH ) . '/wp-config.php';
                                        }
                                        
                                        $files_and_dirs_to_check = array(
                                            array('name'=>'/','path'=>ABSPATH,'permissions'=>'0755'),
                                            array('name'=>'index.php','path'=>ABSPATH."index.php",'permissions'=>'0504'),
                                            array('name'=>'wp-includes/','path'=>ABSPATH."wp-includes",'permissions'=>'0755'),
                                            array('name'=>'.htaccess','path'=>ABSPATH.".htaccess",'permissions'=>'0644'),
                                            array('name'=>'wp-admin/index.php','path'=>ABSPATH."wp-admin/index.php",'permissions'=>'0644'),
                                            array('name'=>'wp-admin/js/','path'=>ABSPATH."wp-admin/js/",'permissions'=>'0755'),
                                            array('name'=>'wp-content/themes/','path'=>ABSPATH."wp-content/themes",'permissions'=>'0755'),
                                            array('name'=>'wp-content/plugins/','path'=>ABSPATH."wp-content/plugins",'permissions'=>'0755'),
                                            array('name'=>'wp-admin/','path'=>ABSPATH."wp-admin",'permissions'=>'0755'),
                                            array('name'=>'wp-content/','path'=>ABSPATH."wp-content",'permissions'=>'0755'),
                                            array('name'=>'wp-content/index.php','path'=>ABSPATH."wp-content/index.php",'permissions'=>'0504'),
                                            array('name'=>'wp-config.php','path'=>$wp_config_file,'permissions'=>'0644')
                                        );
                                        
                                        $permissionneedfix=false;
                                        foreach ($files_and_dirs_to_check as $file_or_dir)
                                        {
                                            $res=wpinfectsecurity_show_wp_filesystem_status($file_or_dir['name'],$file_or_dir['path'],$file_or_dir['permissions']);
                                            if($res){
                                                $permissionneedfix=true;
                                            }
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                </div>
                                
                                <h4 style="line-height:25px;font-size:16px;">
                                <input type="radio" name="kantansettei" value="4" <?php if($security_kantansettei==4){echo 'checked="checked"';} ?>><?php _e("Security level: Detailed","wpinfecscan");?><br>
                                </h4>
                            </div>
                            
                            <div id="detainsetting" style="display:none">
                              
                                <table class="form-table table">
                                
                                  <tr valign="top">
                                    <td scope="row" colspan="2" style="border-top:0px;"><h3><span class="dashicons dashicons-lock" style="font-size: 28px;color:#8cb1cf;"></span>　<?php _e("Login protection","wpinfecscan");?></h3>
                                    </td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_loginlockdown" value="1" <?php if($security_loginlockdown==1){echo 'checked="checked"';} ?> /> <?php _e("Login LockDown","wpinfecscan");?></th>
                                    <td><small><?php _e("Blocks login for 10 minutes after 3 repeated login failures. This function can reduce the risk of hacker incursion by a brute-force attack on the login display.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_logincaptcha" value="1" <?php if($security_logincaptcha==1){echo 'checked="checked"';} ?> /> <?php _e("Login captcha","wpinfecscan");?>
                                    </th>
                                    <td><small><?php _e("Displays captcha on the login display. Adding questionnaire on the login display can reduce the risk of hacker incursion and prevent administrative rights from being deprived.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_pwresetcaptcha" value="1" <?php if($security_pwresetcaptcha==1){echo 'checked="checked"';} ?> /> <?php _e("Password reset captcha","wpinfecscan");?></th>
                                    <td><small><?php _e("Displays captcha on the password reset display to prevent hacking that utilizes fragility of mail transmission program on the display.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_loginchange" value="1" <?php if($security_loginchange==1){echo 'checked="checked"';} ?> /> <?php _e("Change login page URL","wpinfecscan");?><br>
                                    <?php _e("Changed URL","wpinfecscan");?> <?php
                                    if ( get_option( 'permalink_structure' ) ) {
                                        echo site_url( '/', $scheme ) ;
                                    } else {
                                        echo home_url( '/', $scheme ) . '?' ;
                                    }
                                    ?>
                                    <input type="text" name="wpinfectscanner_security_loginchangeurl" value="<?php echo get_option( 'wpinfectscanner_loginurl');?>" /><br>
                                    <small style="font-weight:normal;"><?php _e("<span style='color:red'>Please make sure to take a note of the login URL</span> so as not to forget when changing it.","wpinfecscan");?></small>
                                    </th>
                                    <td><small><?php _e("Prevents hackers from accessing the login page by changing the login page URL.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <td scope="row" colspan="2"><br><h3><span class="dashicons dashicons-shield" style="font-size: 28px;color:#69b981;"></span>　<?php _e("Protect WordPress information and files","wpinfecscan");?></h3></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_wphideversion" value="1" <?php if($security_wphideversion==1){echo 'checked="checked"';} ?>  /> <?php _e("Prevent information leak about WordPress version","wpinfecscan");?></th>
                                    <td><small><?php _e("Hackers try to find out WordPress version to utilize the fragility. Hides the information by disabling meta generator output and query (numeric variable of the version which is given to CSS or JS read into HTML).","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_filehogo" value="1" <?php if($security_filehogo==1){echo 'checked="checked"';} ?> /> <?php _e("Protect important files","wpinfecscan");?></th>
                                    <td><small> <?php _e("Prevents any access to htaccess and wp-config.php","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_serverhogo" value="1" <?php if($security_serverhogo==1){echo 'checked="checked"';} ?> /> <?php _e("Protect server information","wpinfecscan");?></th>
                                    <td><small> <?php _e("Prevents any access to readme.html, license.txt and wp-config-sample.php which consist WordPress or plugins and may contain version or server information. Also restricts server signature which outputs server information.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_authorhogo" value="1" <?php if($security_authorhogo==1){echo 'checked="checked"';} ?> /> <?php _e("Protect author information","wpinfecscan");?></th>
                                    <td><small> <?php _e("Prevents WordPress from outputting user information based on accesses from a particular query, such as /?author=1.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_noindex" value="1" <?php if($security_noindex==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit display of Index list","wpinfecscan");?></th>
                                    <td><small><?php _e("Disables display of file list when accessing a directory which does not contain any index file, such as Index.html.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_nowpscan" value="1" <?php if($security_nowpscan==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit WPSCAN","wpinfecscan");?></th>
                                    <td><small><?php _e("WPSCAN is a fragility checker for WordPress which is used by many hackers for a pre-survey. Hides version information or block certain IP for a while when the IP tried to access specified file, to disable WPSCAN.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <td scope="row" style="width:60%"><b><?php _e("Permission (write permission of files)","wpinfecscan");?></b>
                                    
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th><?php _e('Files', "wpinfecscan") ?></th>
                                                    <th><?php _e('Current permission', "wpinfecscan") ?></th>
                                                    <th><?php _e('Recommended permission', "wpinfecscan") ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                
                                                $wp_config_file = ABSPATH . 'wp-config.php';
                                                if(file_exists($wp_config_file)){
                                                    $wp_config_file = $wp_config_file;
                                                }
                                                else if (file_exists(dirname( ABSPATH ) . '/wp-config.php')){       
                                                    $wp_config_file = dirname( ABSPATH ) . '/wp-config.php';
                                                }
                                                
                                                $files_and_dirs_to_check = array(
                                                    array('name'=>'/','path'=>ABSPATH,'permissions'=>'0755'),
                                                    array('name'=>'index.php','path'=>ABSPATH."index.php",'permissions'=>'0504'),
                                                    array('name'=>'wp-includes/','path'=>ABSPATH."wp-includes",'permissions'=>'0755'),
                                                    array('name'=>'.htaccess','path'=>ABSPATH.".htaccess",'permissions'=>'0644'),
                                                    array('name'=>'wp-admin/index.php','path'=>ABSPATH."wp-admin/index.php",'permissions'=>'0644'),
                                                    array('name'=>'wp-admin/js/','path'=>ABSPATH."wp-admin/js/",'permissions'=>'0755'),
                                                    array('name'=>'wp-content/themes/','path'=>ABSPATH."wp-content/themes",'permissions'=>'0755'),
                                                    array('name'=>'wp-content/plugins/','path'=>ABSPATH."wp-content/plugins",'permissions'=>'0755'),
                                                    array('name'=>'wp-admin/','path'=>ABSPATH."wp-admin",'permissions'=>'0755'),
                                                    array('name'=>'wp-content/','path'=>ABSPATH."wp-content",'permissions'=>'0755'),
                                                    array('name'=>'wp-content/index.php','path'=>ABSPATH."wp-content/index.php",'permissions'=>'0504'),
                                                    array('name'=>'wp-config.php','path'=>$wp_config_file,'permissions'=>'0644')
                                                );
                                                
                                                $needfix=false;
                                                foreach ($files_and_dirs_to_check as $file_or_dir)
                                                {
                                                    $res=wpinfectsecurity_show_wp_filesystem_status($file_or_dir['name'],$file_or_dir['path'],$file_or_dir['permissions']);
                                                    if($res){
                                                        $needfix=true;
                                                    }
                                                }
                                                ?>
                                            </tbody>
                                        </table>
                                    
                                    </td>
                                    <td>
                                    <?php
                                    
                                    if($needfix){
                                        _e("<small>Write permission of files is fragile. Please replace the particulars indicated in red or yellow in the left table with recommended permission.</small>","wpinfecscan");
                                    }else{
                                        _e("<small>Permission (write permission of files) are properly set.</small>","wpinfecscan");
                                    }
                                    
                                    ?></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <td scope="row" colspan="2"><br><h3><span class="dashicons dashicons-admin-tools" style="font-size: 28px;color:#da906d;"></span>　<?php _e("Protect WordPress functions","wpinfecscan");?></h3></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_noedit" value="1" <?php if($security_noedit==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit editing of themes and plugins","wpinfecscan");?></th>
                                    <td><small><?php _e("Disables editing of themes and plugins from the administration display.","wpinfecscan");?></small></td>
                                  </tr>
                                  

                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_nopingback" value="1" <?php if($security_nopingback==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit Pingback","wpinfecscan");?></th>
                                    <td><small><?php _e("Disables Pingback; notification function of WordPress, which has a risk of being utilized for high-intensity attack with multiple accesses or of information leak about username, etc.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_bruteforthlockdown" value="1" <?php if($security_bruteforthlockdown==1){echo 'checked="checked"';} ?> /> <?php _e("Ban brute-force attack IP to XMLRPC and wp-login","wpinfecscan");?>
                                    
                                    </th>
                                    <td><small><?php _e("Disables accessing for 3 hours of the IP which tried to access XMLRPC or wp-login for more than 50 times in 10 minutes. Since this function detects only excessive access, it can be used with Jetpack and also reduces the load of the website by preventing brute-force attack.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_norestapi" value="1" <?php if($security_norestapi==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit REST API","wpinfecscan");?></th>
                                    <td><small><?php _e("REST API is loaded into WordPress 4.7 or later which enables outside posting, information aquisition, modification and addition of posts, etc. However, it has great fragility in some versions and may be subjected to other misuse in future.<br>Its function is utilized in some famous plugins such as Jetpack and ContactForm7, therefore disables all Jetpack and ContactForm7 functions except REST API.<br>If enables its function while using REST API in other plugins, some kind of malfunction may occur.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_tracktrace" value="1" <?php if($security_tracktrace==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit Trace & Track","wpinfecscan");?></th>
                                    <td><small><?php _e("Prevents attacks utilizing Trace & Track function of the server (unique processing method of requests sent to the server) such as HTTP trace attack (XST) and cross site scripting (XSS).","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <!--Since 1.7-->
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_nodirectaccessincludes" value="1" <?php if($security_nodirectaccessincludes==1){echo 'checked="checked"';} ?> /> <?php _e("Include file protection","wpinfecscan");?></th>
                                    <td><small><?php _e("Protect direct access to include php files in wp-include folder and other.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_nouploadfolderphp" value="1" <?php if($security_nouploadfolderphp==1){echo 'checked="checked"';} ?> /> <?php _e("Upload folder protection","wpinfecscan");?></th>
                                    <td><small><?php _e("BLock access to malcious file in wordpress upload directory.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_nobadquery" value="1" <?php if($security_nobadquery==1){echo 'checked="checked"';} ?> /> <?php _e("Block danger query","wpinfecscan");?></th>
                                    <td><small><?php _e("Block danger queries that contains script tag or GLOBAL or mysql queries.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <!--Since 1.7end-->
                                  
                                  <tr valign="top">
                                    <td scope="row" colspan="2"><br><h3><span class="dashicons dashicons-format-status" style="font-size: 28px;color:#dac738;"></span>　<?php _e("Protect comments from spam","wpinfecscan");?></h3></td>
                                  </tr>
                                  
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_noproxycomment" value="1" <?php if($security_noproxycomment==1){echo 'checked="checked"';} ?> /> <?php _e("Prohibit comment posting via proxy","wpinfecscan");?></th>
                                    <td><small><?php _e("Prohibits comment posting via proxy by judging from header information unique for the proxy users.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_commentcaptcha" value="1" <?php if($security_commentcaptcha==1){echo 'checked="checked"';} ?> /> <?php _e("Comment form captcha","wpinfecscan");?></th>
                                    <td><small><?php _e("Prevents automatic comment posting by adding captcha to the comment form. It may not be displayed in particular themes which display customized comment form.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <th scope="row" style="width:60%"><input type="checkbox" name="wpinfectscanner_security_spambot" value="1" <?php if($security_spambot==1){echo 'checked="checked"';} ?>  /> <?php _e("Prohibit comment posting by spambots","wpinfecscan");?></th>
                                    <td><small><?php _e("Spambot is a program which posts comments automatically and does not have any referrer. Prevents comment posting by spambots by disabling posting from viewers who have no referrers.","wpinfecscan");?></small></td>
                                  </tr>
                                  
                                  <tr valign="top">
                                    <td scope="row" colspan="2"><br><h3><span class="dashicons dashicons-welcome-view-site" style="font-size: 28px;color:#0ec6c6;"></span>　<?php _e("Definition of malware patterns","wpinfecscan");?></h3></td>
                                  </tr>
                                  
                                  <?php
                                  $ptcount = get_option('wpinfectscanner_newpatternnum',0);
                                  if($ptcount==0){
                                  ?>
                                  <tr valign="top">
                                    <th scope="row" style="width:60%">
                                    <?php _e("Detectable the latest malware patterns","wpinfecscan");?>
                                    </th>
                                    <td><small><?php _e("No action required.","wpinfecscan");?></small></td>
                                  </tr>
                                  <?php } else { ?>
                                  <tr valign="top">
                                    <th scope="row" style="width:60%">
                                    <?php _e("Malware patterns are not the latest version","wpinfecscan");?>(-<?php echo (int)$mcount; ?><?php _e("点","wpinfecscan");?>)
                                    </th>
                                    <td><small><?php _e("Subscription of malware pattern definition files is recommended to detect malware codes which are increasing day by day.","wpinfecscan");?></small></td>
                                  </tr>
                                  <?php } ?>
                                  
                                </table>
                                <input type="hidden" name="settingname" value="security"/>

                            </div>
                            
                            <?php submit_button(); ?>
                            </form>
                            
                            <hr>

                            <h3 style="font-size:22px"><span class="dashicons dashicons-text" style="font-size: 28px;color:#b4b9c6;"></span>　<?php _e("Security log","wpinfecscan");?></h3>
                            <br>
                            <p><b><?php _e("List of IPs succeeded to login with administrator permission in the last 1 month","wpinfecscan");?> <?php _e("Your current IP","wpinfecscan");?> = <?php echo isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : false;?></b></p>
                            
                            <textarea readonly style="width:100%;height:120px"><?php
                            global $wpdb;
                            $query = "SELECT * FROM ".$wpdb->options." WHERE option_name LIKE '%_transient_archive_iplogin%'  order by option_id desc limit 25";

                            $rowsfiles = $wpdb->get_results($query);
                            $ipandcountry = array();

                            foreach ($rowsfiles as $row) 
                            {
                                if((bool) get_transient(str_replace("_transient_","",$row->option_name))){
                                    $eip= explode("archive_iplogin",$row->option_name);
                                    $eips= explode("_",$eip[1]);
                                    
                                    $ipc = $ipandcountry[$eips[0]];
                                    
                                    if(empty($ipc)){
                                        $options['ssl']['verify_peer']=false;
                                        $options['ssl']['verify_peer_name']=false;
                                        $res = @file_get_contents('https://www.iplocate.io/api/lookup/'.$eips[0], false, stream_context_create($options));
                                        if($res){
                                            $res = json_decode($res);
                                            if(strlen($res->country)>1){
                                                 $eips[0]= $eips[0]." - ".$res->country ." ". $res->city;
                                                 $ipandcountry[$eips[0]] = " - ".$res->country ." ". $res->city;
                                            }else{
                                                $ipandcountry[$eips[0]] =" ";
                                            }
                                        }else{
                                            $ipandcountry[$eips[0]] =" ";
                                        }
                                    }else{
                                        $eips[0]= $eips[0].$ipc;
                                    }
                                    
                                    echo $eips[0]." ".$eips[1]." ".$eips[2].__("O'Clock","wpinfecscan")."\n";
                                }
                            }
                            ?></textarea> 
                            <hr>
                            <p><b><?php _e("List of IPs blocking","wpinfecscan");?></b><?php _e("(Displayed when activating higher than moderate-level security function)","wpinfecscan");?></p>
                            <p style="font-weight:normal"><?php _e("Utilize <a href='Javascript:void(0);' style='color:black;text-decoration: underline;' onClick='showipblocktab()'>this IP blocker</a> to permanently block the listed IPs.","wpinfecscan");?></p>

                            <textarea readonly style="width:100%;height:180px"><?php
                            global $wpdb;
                            $query = "SELECT * FROM ".$wpdb->options." WHERE option_name LIKE '%_transient_iplock_down%' order by option_id desc limit 255";

                            $rowsfiles = $wpdb->get_results($query);

                            foreach ($rowsfiles as $row) 
                            {
                                if((bool) get_transient(str_replace("_transient_","",$row->option_name))){
                                    $eip= explode("iplock_down",$row->option_name);
                                    echo $eip[1]." - ".__("Brute-force attack",'wpinfecscan')."\n";
                                }
                            }
                            
                            $query = "SELECT * FROM ".$wpdb->options." WHERE option_name LIKE '%_transient_wce_block_%' order by option_id desc limit 255";

                            $rowsfiles = $wpdb->get_results($query);

                            foreach ($rowsfiles as $row) 
                            {
                                if((bool) get_transient(str_replace("_transient_","",$row->option_name))){
                                    $eip= explode("wce_block_",$row->option_name);
                                    echo $eip[1]." - ".__("Brute-force attack",'wpinfecscan')."\n";
                                }
                            }
                            ?></textarea>

                            <hr>
                            <p><b><?php _e("List of blocked IPs in the last 6 months","wpinfecscan");?></b></p>
                            <textarea readonly style="width:100%;height:120px"><?php
                            global $wpdb;
                            $query = "SELECT * FROM ".$wpdb->options." WHERE option_name LIKE '%_transient_archive_iplockdown%' limit 255";

                            $rowsfiles = $wpdb->get_results($query);

                            foreach ($rowsfiles as $row) 
                            {
                                if((bool) get_transient(str_replace("_transient_","",$row->option_name))){
                                    $eip= explode("archive_iplockdown",$row->option_name);
                                    echo $eip[1]." - ".__("Brute-force attack",'wpinfecscan')."\n";
                                }
                            }
                            
                            $query = "SELECT * FROM ".$wpdb->options." WHERE option_name LIKE '%_transient_archive_wcelockdown%' limit 255";

                            $rowsfiles = $wpdb->get_results($query);

                            foreach ($rowsfiles as $row) 
                            {
                                if((bool) get_transient(str_replace("_transient_","",$row->option_name))){
                                    $eip= explode("archive_wcelockdown",$row->option_name);
                                    echo $eip[1]." - ".__("Run WPSCAN",'wpinfecscan')."\n";
                                }
                            }
                            ?></textarea> 
                                    
                              
                          <script>
                          
                          function setseclevel(mysetting){
                              
                                if(mysetting==4){
                                    jQuery("#detainsetting").show();
                                }else{
                                    jQuery("#detainsetting").hide();
                                }
                                
                                jQuery("#kantansetteiexp1").hide();
                                jQuery("#kantansetteiexp2").hide();
                                jQuery("#kantansetteiexp3").hide();
                                jQuery(".displaypermissionalert").hide();
                                jQuery(".displaypermissionalert2").hide();
                                jQuery(".displaylogin").hide();
                                
                                jQuery("#kantansetteiexp"+mysetting).show();
                                
                                jQuery('input[name="wpinfectscanner_security_loginlockdown"]').prop("checked",false);
                                
                                jQuery('input[name="wpinfectscanner_security_logincaptcha"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_pwresetcaptcha"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_loginchange"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_wphideversion"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_filehogo"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_serverhogo"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_authorhogo"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_noindex"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_nowpscan"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_noedit"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_nopingback"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_bruteforthlockdown"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_norestapi"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_tracktrace"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_noproxycomment"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_commentcaptcha"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_spambot"]').prop("checked",false);
                                
                                jQuery('input[name="wpinfectscanner_security_nodirectaccessincludes"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_nouploadfolderphp"]').prop("checked",false);
                                jQuery('input[name="wpinfectscanner_security_nobadquery"]').prop("checked",false);
                                
                                if(mysetting==1){
                                    jQuery('input[name="wpinfectscanner_security_loginlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_wphideversion"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_filehogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_serverhogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noindex"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nowpscan"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nopingback"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_bruteforthlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noproxycomment"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_spambot"]').prop("checked",true);
                                    
                                    jQuery('input[name="wpinfectscanner_security_nodirectaccessincludes"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nouploadfolderphp"]').prop("checked",true);
                                }
                                
                                if(mysetting==2){
                                    jQuery('input[name="wpinfectscanner_security_loginlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_logincaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_pwresetcaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_wphideversion"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_filehogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_serverhogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_authorhogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noindex"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nowpscan"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nopingback"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_bruteforthlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_tracktrace"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noproxycomment"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_commentcaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_spambot"]').prop("checked",true);
                                    
                                    jQuery('input[name="wpinfectscanner_security_nodirectaccessincludes"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nouploadfolderphp"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nobadquery"]').prop("checked",true);
                                    
                                    <?php if($permissionneedfix){ ?>
                                    jQuery(".displaypermissionalert").show();
                                    <?php } ?>
                                }
                                
                                if(mysetting==3){
                                    jQuery('input[name="wpinfectscanner_security_loginlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_logincaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_pwresetcaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_loginchange"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_wphideversion"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_filehogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_serverhogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_authorhogo"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noindex"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nowpscan"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noedit"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nopingback"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_bruteforthlockdown"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_norestapi"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_tracktrace"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_noproxycomment"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_commentcaptcha"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_spambot"]').prop("checked",true);
                                    
                                    jQuery('input[name="wpinfectscanner_security_nodirectaccessincludes"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nouploadfolderphp"]').prop("checked",true);
                                    jQuery('input[name="wpinfectscanner_security_nobadquery"]').prop("checked",true);
                                    
                                    var loginval = jQuery('input[name="wpinfectscanner_security_loginchangeurl"]').val();
                                    if(loginval==""){
                                        <?php $loginid = uniqid();?>
                                        jQuery('input[name="wpinfectscanner_security_loginchangeurl"]').val('<?php echo $loginid;?>');
                                    }
                                    
                                    jQuery('#loginurlchanged').html(jQuery('input[name="wpinfectscanner_security_loginchangeurl"]').val());
                                    
                                    <?php if($permissionneedfix){ ?>
                                    jQuery(".displaypermissionalert2").show();
                                    <?php } ?>
                                    jQuery(".displaylogin").show();
                                }
                                
                                if(mysetting==4){
                                    <?php
                                    
                                    if($security_wphideversion>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_wphideversion\"]').prop(\"checked\",true);";
                                    }
                                    if($security_loginlockdown>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_loginlockdown\"]').prop(\"checked\",true);";
                                    }
                                    if($security_logincaptcha>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_logincaptcha\"]').prop(\"checked\",true);";
                                    }
                                    if($security_pwresetcaptcha>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_pwresetcaptcha\"]').prop(\"checked\",true);";
                                    }
                                    if($security_noedit>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_noedit\"]').prop(\"checked\",true);";
                                    }
                                    if($security_filehogo>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_filehogo\"]').prop(\"checked\",true);";
                                    }
                                    if($security_serverhogo>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_serverhogo\"]').prop(\"checked\",true);";
                                    }
                                    if($security_authorhogo>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_authorhogo\"]').prop(\"checked\",true);";
                                    }
                                    if($security_nopingback>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_nopingback\"]').prop(\"checked\",true);";
                                    }
                                    if($security_norestapi>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_norestapi\"]').prop(\"checked\",true);";
                                    }
                                    if($security_noindex>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_noindex\"]').prop(\"checked\",true);";
                                    }
                                    if($security_noproxycomment>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_noproxycomment\"]').prop(\"checked\",true);";
                                    }
                                    if($security_loginchange>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_loginchange\"]').prop(\"checked\",true);";
                                    }
                                    if($security_commentcaptcha>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_commentcaptcha\"]').prop(\"checked\",true);";
                                    }
                                    if($security_spambot>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_spambot\"]').prop(\"checked\",true);";
                                    }
                                    if($security_nowpscan>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_nowpscan\"]').prop(\"checked\",true);";
                                    }
                                    if($security_tracktrace>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_tracktrace\"]').prop(\"checked\",true);";
                                    }
                                    if($security_bruteforthlockdown>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_bruteforthlockdown\"]').prop(\"checked\",true);";
                                    }
                                    
                                    if($security_nodirectaccessincludes>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_nodirectaccessincludes\"]').prop(\"checked\",true);";
                                    }
                                    if($security_nouploadfolderphp>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_nouploadfolderphp\"]').prop(\"checked\",true);";
                                    }
                                    if($security_nobadquery>0){
                                        echo "jQuery('input[name=\"wpinfectscanner_security_nobadquery\"]').prop(\"checked\",true);";
                                    }


                                    ?>
                                }

                          }
                          
                          jQuery( 'input[name="kantansettei"]:radio' ).change( function() {  
                                var mysetting=jQuery( this ).val();
                                setseclevel(mysetting);
                          }); 
                          
                          jQuery(document).ready(function() {
                                <?php if($security_kantansettei>0){ ?>
                                var mysetting=<?php echo $security_kantansettei;?>;
                                setseclevel(mysetting);
                                <?php } ?>
                          });
                          
                          </script>
                    </div>
                </div>
                
                <div class="tab-pane" id="ContentH">
                
                    <div class="col-lg-12">
                        
                        <h3 style="font-size:22px"><?php _e("Vulnerability check","wpinfecscan");?></h3>
                        <p><?php _e("This vulnerability checker will check if there are valunability(over CVSS 7.5 point) in your site's plugin and wordpress. We search valunability form <a href='https://nvd.nist.gov/vuln' target='_blank'>NIST</a> database.","wpinfecscan");?></h3>
                        </p>

                        <div style="height:150px;overflow:auto;margin-bottom:25px;border:solid 0px #eee">
                            <div style="padding-top:5px;">
                            
                                <h5><span class="dashicons dashicons-pressthis"></span><b><?php _e(" Recentry add vulnerabilities","wpinfecscan");?></b></h5>
                                <?php
                                
                                $httpst = "http://";
                                if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
                                    $httpst = "https://";
                                }
                                elseif (!empty($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https' || !empty($_SERVER['HTTP_X_FORWARDED_SSL']) && $_SERVER['HTTP_X_FORWARDED_SSL'] == 'on') {
                                    $httpst = "https://";
                                }
        
                                $options['ssl']['verify_peer']=false;
                                $options['ssl']['verify_peer_name']=false;
                                $res = @file_get_contents($httpst.'wp-doctor.work/getscandatapro/valnupdate.php', false, stream_context_create($options));
                                
                                $resar = explode(';',$res);
                                //var_dump($resar);
                                
                                echo '<table class="table">
                                        <thead>
                                            <tr>
                                                <th>'.__('WordPress/Plugin name', "wpinfecscan").'</th>
                                                <th>'.__('CVE3 Score', "wpinfecscan").'</th>
                                                <th>'.__('CVE2 Score', "wpinfecscan").'</th>
                                                <th>'.__('Add date', "wpinfecscan").'</th>
                                            </tr>
                                        </thead>
                                        <tbody>';
                                foreach($resar as $item){
                                    $items = explode(',',$item);
                                    $title = $items[0];
                                    $cve2score = $items[1]*0.1;
                                    $cve3score = $items[2]*0.1;
                                    $addate = $items[3];
                                    if(! empty($title)){
                                    echo "
                                        <tr>
                                            <td>".$title."</b></td>
                                            <td>".$cve2score."</td>
                                            <td>".$cve3score."</td>
                                            <td>".$addate."</td>
                                        </tr>";
                                    }
                                
                                }  echo '</tbody></table>'; ?>
                                
                            </div>
                        </div>
                        <br>
                        <?php
                        if($mydomain=="localhost" || filter_var($mydomain, FILTER_VALIDATE_IP)){
                            echo "<p style='color:red'><b>".__("You cannot run vulnerability checker on localhost or IP.","wpinfecscan")."</b></p>";
                            if(! ($alerttxt && strlen($alerttxt)>0)){
                                echo "<br>";
                            }
                        }
                        
                        $autoipblockok=true;
                        if(!empty($ipblockdata)){
                            foreach ($ipblockdata as $key => $value){
                                if(strpos($value->ip,'***.***') !== false){
                                    $autoipblockok=false;
                                    break;
                                }
                            }
                        }
                        ?>
                        
                        <div style="margin-bottom:20px;">
                        <?php
                        $valncheckok = false;
                        if($mydomain=="localhost" || filter_var($mydomain, FILTER_VALIDATE_IP)){
                        ?>
						<button class="btn btn-default" id=''><?php _e("Not available","wpinfecscan");?></button>
                        <?php }else{ ?>
                        
                        <?php
                        $lastchecktime = get_option( 'wpinfectscanner_valnchecktime', "" );
                        if(empty($lastchecktime)){
                            $valncheckok = true;
                            $exptxt="";
                            if($autoipblockok==false){
                                $exptxt =  __("(You can check valunability one time for free.)","wpinfecscan");
                            }
                        ?>
						<button class="btn btn-danger" id='valtestbutton'><?php _e("Run vulnerability checker","wpinfecscan");?><?php echo $exptxt; ?></button>
                        <?php }else{
                        if($autoipblockok==false){
                        ?>
                        <button class="btn btn-default" id=''><?php _e("Not available (Please purchase for malware subscription to check valunability on your site)","wpinfecscan");?></button>
                        <?php }else{
                        $valncheckok = true;
                        ?>
                        <button class="btn btn-danger" id='valtestbutton'><?php _e("Run vulnerability checker","wpinfecscan");?><?php echo $exptxt; ?></button>
                        <?php }}} ?>
                        
                        <div id="scanningnow" style="display:none"><i class="fa fa-circle-o-notch fa-spin"></i>　<?php _e("Checking valunability now...","wpinfecscan");?></div>
                        </div>
                        <br>
                        <?php
                        
                        if(! empty($lastchecktime)){
                            echo "<h4 id='valntitle'>".__("Vulnerability check result","wpinfecscan")."(".$lastchecktime.")</h4>";
                        }else{
                            echo "<h4 id='valntitle'>".__("Vulnerability to check","wpinfecscan")."</h4>";
                        }
                        ?>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><?php _e('Name', "wpinfecscan") ?></th>
                                    <th><?php _e('Type', "wpinfecscan") ?></th>
                                    <th><?php _e('Version', "wpinfecscan") ?></th>
                                    <th><?php _e('Status', "wpinfecscan") ?></th>
                                    <th><?php _e('Valunability', "wpinfecscan") ?></th>
                                </tr>
                            </thead>
                            <tbody id="tbodychecked">
                            
                            <?php
                            
                            $sitevdata = array();
                            global $wp_version;
                            $sitevdata[] = array("wordpress","wordpress",$wp_version,"WordPress");
                            
                            $my_plugin = WP_PLUGIN_DIR;
                            $folders = glob($my_plugin."/*", GLOB_ONLYDIR);
                            foreach ($folders as $folder) {
                                $files = scandir($folder."/"); 
                                $foundfile=false;
                                $pluginfolder=basename($folder);
                                $pluginname="";
                                $pluginversion="";
                                foreach($files as $file)
                                {
                                    $path_parts = pathinfo($folder."/".$file);
                                    if(is_file($folder."/".$file) && $path_parts['extension']=="php"){
                                        $fn = fopen($folder."/".$file,"r");
                                        $readcount = 0;
                                        while(! feof($fn))  {
                                            $result = fgets($fn);
                                            if(strpos($result,"Plugin Name:")!== false || strpos($result,"Plugin Name :")!== false){
                                                $foundfile=true;
                                                $pluginname=explode(":",$result);
                                                $pluginname=trim($pluginname[1]);
                                            }
                                            if(strpos($result,"Version:")!== false || strpos($result,"Version :")!== false){
                                                $foundfile=true;
                                                $pluginversion=explode(":",$result);
                                                $pluginversion=trim($pluginversion[1]);
                                            }
                                            $readcount++;
                                            if($readcount>20){
                                                break;
                                            }
                                        }
                                        fclose($fn);
                                    }
                                    if($foundfile){
                                        break;
                                    }
                                }
                                if($pluginfolder!="" && $pluginname!="" && $pluginversion!=""){
                                    $sitevdata[] = array($pluginfolder,"plugin",$pluginversion,$pluginname);
                                }
                            }
                            
                            $lastcheckdata = get_option( 'wpinfectscanner_valncheck', -1 );
                            if($lastcheckdata!=-1){
                                $checkeddata = json_decode($lastcheckdata,false);
                                if($checkeddata){
                                    foreach($checkeddata as $cdata){
                                        //var_dump($cdata);
                                        
                                        $type = $cdata[1];
                                        $version = $cdata[2];
                                        $valn=$cdata[3];
                                        $thisname = $cdata[4];
                                        $valntxt = __("No vulnerability","wpinfecscan");
                                        $cvetxt = "-";
                                        $icon="<span class='dashicons dashicons-yes' style='color:green'></span>";
                                        if($valn!="0"){
                                            $valntxt= __("Vulnerability found","wpinfecscan");
                                            $cvetxt = "";
                                            $valnar=explode(",",$valn);
                                            for($vi=0;$vi<count($valnar);$vi++){
                                                $cve=trim($valnar[$vi]);
                                                if(! empty($cve)){
                                                    $cvetxt .= "<a href='https://nvd.nist.gov/vuln/detail/".$cve."' target='_blank'>".$cve."</a><br>";
                                                }
                                            }
                                            $icon="<span class='dashicons dashicons-no' style='color:red'></span>";
                                        }
                                        echo "
                                        <tr class='valnonedata'>
                                            <td>".$icon." <b>".$thisname."</b></td>
                                            <td>".$type."</td>
                                            <td>".$version."</td>
                                            <td>".$valntxt."</td>
                                            <td>".$cvetxt."</td>
                                        </tr>";
                                    }
                                }
                            }else{
                            ?>
                                
                                <?php
                                foreach ($sitevdata as $onesitevdata){
                                    //$pluginfolder,"plugin",$pluginversion,$pluginname
                                ?>
                                    <tr class='valnonedata'>
                                        <td><b><?php echo $onesitevdata[3];?></b></td>
                                        <td><?php echo $onesitevdata[1];?></td>
                                        <td><?php echo $onesitevdata[2];?></td>
                                        <td><?php _e('Not checked', "wpinfecscan") ?></td>
                                        <td>ー</td>
                                    </tr>
                                <?php
                                }
                            }
                            ?>
                            </tbody>
                        </table>
                        <?php if($valncheckok){ ?>
                        <script>
                            var senddata = '<?php echo str_rot13(bin2hex(json_encode($sitevdata))) ;?>';
                            jQuery('#valtestbutton').click(function() {
                                jQuery('#valtestbutton').hide();
                                jQuery('#scanningnow').show();
                                jQuery.ajax({
                                   type: "POST",
                                   url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                                   data: "chackdata="+senddata+"&action=valncheck",
                                   success: function(msg){
                                       //alert(msg);
                                       if(msg =="blocked"){
                                           alert("<?php echo __("Valunability check failed. Are your site running on global domain?",'wpinfecscan'); ?>");
                                       }else{
                                           var objJSON = JSON.parse(msg);
                                           if(objJSON.length>0){
                                               jQuery(".valnonedata").remove();
                                               jQuery('#valntitle').html("<?php echo __("Valunability check result",'wpinfecscan'); ?>");
                                               for (var i = 0, len = objJSON.length; i < len; ++i) {
                                                     var onedata = objJSON[i];
                                                     var valntxt = "<?php _e('No vulnerability', "wpinfecscan") ?>";
                                                     var cvetxt = "-";
                                                     var icon="<span class='dashicons dashicons-yes' style='color:green'></span>";
                                                     if(onedata[3]!="0"){
                                                         cvetxt = "";
                                                         valntxt = "<?php _e('Vulnerability found', "wpinfecscan") ?>";
                                                         var cvetext = onedata[3];
                                                         var cvear = cvetext.split(',');
                                                         for (var ii = 0, tlen = cvear.length; ii < tlen-1; ++ii) {
                                                             cvetxt = cvetxt + "<a href='https://nvd.nist.gov/vuln/detail/"+cvear[ii]+"' target='_blank'>"+cvear[ii]+"</a><br>";
                                                         }
                                                         var icon="<span class='dashicons dashicons-no' style='color:red'></span>";
                                                     }
                                                     jQuery("#tbodychecked").append("<tr class='valnonedata'><td>"+icon+" <b>"+onedata[4]+"</b></td><td>"+onedata[1]+"</td><td>"+onedata[2]+"</td><td>"+valntxt+"</td><td>"+cvetxt+"</td></tr>");
                                               }
                                           }
                                            
                                       }
                                       jQuery('#valtestbutton').hide();
                                       jQuery('#scanningnow').hide();
                                   }
                                 });
                            })
                        </script>
                        <?php } ?>
                    </div>
                </div>
                
                <div class="tab-pane" id="ContentF">
                    <form method="post" action="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                    <div class="col-lg-12">
                        <h3><?php _e("Block IPs manually","wpinfecscan");?></h3>
                        <p><?php _e("Enter one IP per line in the below column which you want to block from access to the entire website, then press [Save the changes] at the bottom.","wpinfecscan");?></p>
                        <textarea style="width:100%;height:120px" id="ipblocksetting" name="ipblocksetting" placeholder="<?php _e("Example","wpinfecscan");?>&#10;111.222.333.444&#10;555.666.777.888"><?php echo get_option( 'wpinfectscanner_blockip'); ?></textarea>
                         
                        <hr>
                        
                        <h3><?php _e("IP map of active hackers","wpinfecscan");?></h3>
                        <p><?php _e("These IPs are of hackers around the world detected daily by WordPress doctor. This data is updated every 24 hours.","wpinfecscan");?></p>
                        <p><input type="checkbox" onchange="selectautoipblock()" name="autoblockip" id="ipblockcheckbox" value="1" <?php $autoblockipdata = get_option("wpinfectscanner_autoblockip");if(!empty($autoblockipdata )){ echo " checked='checked'";} ?>><?php _e("Block this IP automatically from access to the website","wpinfecscan");?></p>
                        <div id="container" style="position: relative;float:left; width: 650px; height: 400px;"></div>
                        <div style="position: relative;float:left; width: 300px; height: 400px;">
                        <script type="text/javascript" src="https://www.google.com/jsapi"></script>
                        <div id="piechart"></div>
                        <script type="text/javascript">
                        google.load("visualization", "1", {packages:["corechart"]});
                        google.setOnLoadCallback(drawChart);
                        <?php
                        $carray = array();
                        foreach ($ipblockdata as $key => $value){
                            $num =  1;
                            if(!empty($carray[$value->country_name])){
                                $num =  $carray[$value->country_name]+1;
                            }
                            $carray[$value->country_name] = $num;
                        }
                        $clarray = array();
                        $clarray["Other"] = 0;
                        foreach ($carray as $key => $value){
                            if($value>4){
                                $clarray[$key]=$value;
                            }else{
                                $clarray["Other"]+=$value;
                            }
                        }
                        ?>
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([ //グラフデータの指定
                                ['Country', 'detect ip count'],
                                <?php 
                                foreach ($clarray as $key => $value){
                                    echo "['".$key."',     ".$value."],";
                                }
                                ?>
                            ]);
                            data.sort([{column: 1}]);
                            var options = {
                                       'width': 300,
                                       'height': 400,
                                       'chartArea': {'width': '90%', 'height': '55%'},
                                       'pieSliceText': 'label',
                                       'legend': {'position': 'none'}
                            };
                            var chart = new google.visualization.PieChart(document.getElementById('piechart')); //グラフを表示させる要素の指定
                            chart.draw(data, options);
                        }
                        </script>
                        </div>
                        <div style="max-height:400px;overflow:auto;width:100%">
                        <table class="table">
                        <tr><td><?php _e("Hacker's IP</td><td>country, region","wpinfecscan");?></td></tr>
                        <?php
                            $autoipblockok = true;
                            if(!empty($ipblockdata)){
                                foreach ($ipblockdata as $key => $value){
                                    echo "<tr><td>".$value->ip."</td><td><img src='https://www.countryflags.io/".strtolower ($value->country)."/flat/16.png'> ".$value->country_name." ,".$value->city."</td></tr>";
                                    if(strpos($value->ip,'***.***') !== false){
                                        $autoipblockok=false;
                                    }
                                }
                            }
                        ?>
                        </table>
                        </div>
                        <?php submit_button(); ?>
                        </form>
                        <script>
                        var showmap = false;
                        function mapview(){
                            if (showmap==false){
                                var bubble_map = new Datamap({
                                  element: document.getElementById("container"),
                                  geographyConfig: {
                                    popupOnHover: false,
                                    highlightOnHover: false
                                  },
                                  fills: {
                                    defaultFill: '#ABDDA4',
                                    dot: '#FF0000'
                                  }
                                });
                                bubble_map.bubbles([
                                <?php
                                if(!empty($ipblockdata) ){
                                    $count=0;
                                    foreach ($ipblockdata as $key => $value){ 
                                    if(!empty($value->latitude) && !empty($value->longitude)) {
                                    ?>
                                      {
                                        name: '<?php echo $value->country_name."(".$value->city.")"; ?>',
                                        radius: 7,
                                        country: '<?php echo $value->country; ?>',
                                        latitude: <?php echo $value->latitude; ?>,
                                        longitude: <?php echo $value->longitude; ?>,
                                        fillKey: 'dot',
                                        yeild: 1,
                                      },
                                    <?php $count++;if($count>200){break;}}}} ?>
                                ], {
                                  popupTemplate: function(geo, data) {
                                    return '<div class="hoverinfo">' + data.name + '</div>'
                                  }
                                });
                                showmap=true;
                            }
                        }
                        function selectautoipblock(){
                            <?php if($autoipblockok==false){ ?>
                            if(document.getElementById("ipblockcheckbox").checked){
                                alert("<?php _e("This function is exclusive for subscription (paid) members of malware.","wpinfecscan");?>");
                                document.getElementById("ipblockcheckbox").checked = false;
                            }
                            <?php } ?>
                        }
                        </script>
                    </div>
                </div>
                
                <div class="tab-pane" id="ContentG">
                    <div class="col-lg-12">
                        <h3><span class="dashicons dashicons-lock" style="font-size: 30px;color:#f52157;"></span>  　<?php _e("Real-time block of website tampering","wpinfecscan");?></h3>
                        <p><?php _e("This function is to block and record hacking activities before website tampering. <b>Since this function monitors all accesses except for page display, it may reduce the browsing speed up to 50% and inhibit particular functions of plugins.</b> It is recommended that you don't activate the function except when the website is repeatedly threatened with tampering. <br>*A particular symbolic query is conferred when activating the function, which is not due to a malfunction.","wpinfecscan");?></p>
                        <br>
                        <form method="post" action="<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <?php echo $setting_realtimeblock_error; ?>
                        <input type="checkbox" name="setting_realtimeblock" value="1" id="realtimeblockcheckbox" onchange="selectrealtimeblock()" <?php if(get_option('wpinfectscanner_realtimeblock')==1){echo " checked='checked'";} ?>> <?php _e("Enable function","wpinfecscan");?>
                        <input type="hidden" name="setting_realtimeblock_ht" value="1">
                        <?php submit_button(); ?>
                        </form>
                        <script>
                        function selectrealtimeblock(){
                            <?php if($autoipblockok==false){ ?>
                            if(document.getElementById("realtimeblockcheckbox").checked){
                                alert("<?php _e("This function is exclusive for subscription (paid) members of malware.","wpinfecscan");?>");
                                document.getElementById("realtimeblockcheckbox").checked = false;
                            }
                            <?php } ?>
                        }
                        </script>
                        <hr>
                        <p><b><span class="dashicons dashicons-admin-customizer" style="font-size: 20px;color:#666;"></span>  <?php _e("What if you catch hacking activities with real-time block?","wpinfecscan");?></b></p>
                        <?php _e("1. Block hacker's IP permanently by this <a href='Javascript:void(0);' style='color:black;text-decoration: underline;' onClick='showipblocktab()'>IP blocker</a>.","wpinfecscan");?><br>
                        <?php _e("2. There is a possibility of fragility of the files displayed in the column [Files accessed by hacker\", or backdoor. Take preventive measures, such as deleting the file, solving the fragility, etc.","wpinfecscan");?>
                        <br><br>
                        <p><b><span class="dashicons dashicons-admin-tools" style="font-size: 20px;color:#666;"></span>  <?php _e("What if the website causes a malfunction?","wpinfecscan");?></b></p>
                        <?php _e("Disable this function or access WordPress top directory with using FTP and delete #SERVER_REALTIMEBLOCK_START ~ #SERVER_REALTIMEBLOCK_END of htaccess file.","wpinfecscan");?><br>
                        <br><br>
                        <table id="scanresult" class="table">
                        <thead><tr><th><?php _e("Blocked date and time","wpinfecscan");?></th><th><?php _e("Hacker's IP","wpinfecscan");?></th><th><?php _e("Files accessed by hacker","wpinfecscan");?></th><th nowrap=""><?php _e("Details of sent information","wpinfecscan");?></th></tr></thead>
                        <tbody>
                        <?php
                        $kirokfound = false;
                        $table_name = $wpdb->prefix . 'infectscannerrealtimeblock';
                        if($wpdb->get_var("SHOW TABLES LIKE '".$table_name."'") == $table_name) {
                            $table_name = $wpdb->prefix . 'infectscannerrealtimeblock';
                            $query = "SELECT * FROM ".$table_name." ORDER BY `adddate` DESC limit 255";
                            $rowsfiles = $wpdb->get_results($query);

                            foreach ($rowsfiles as $row) {
                                $kirokfound = true;
                                echo "<tr>";
                                echo "<td>".$row->adddate."</td>";
                                echo "<td>".$row->ipv4.$row->ipv6."</b></td>";
                                echo "<td>".$row->filepath."<b>".$row->filename."</b></td>";
                                $data="";
                                if(!empty($row->postquery)){
                                    $data .= htmlentities(print_r(json_decode($row->postquery),true));
                                }
                                if(!empty($row->getquery)){
                                    $data .= htmlentities(print_r(json_decode($row->getquery),true));
                                }
                                echo "<td><div style='height:160px;width:450px;overflow:auto;'><pre>".$data."</pre></div></td>";
                                echo "</tr>";
                            }
                        }
                        ?>
                        </tbody>
                        </table>
                        <?php if($kirokfound==false){ ?>
                        <h5 style="margin-top:25px;margin-bottom:25px;color:#888"><?php _e("*No record of real-time block found","wpinfecscan");?></h5>
                        <?php }else{ ?>
                        <button onClick="location.href='<?php echo '//' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&delrealtime=1'"><?php _e("Delete all records","wpinfecscan");?></button>
                        <?php }  ?>
                    </div>
                </div>
                
                <?php if($ptcount>0){ ?>
                <div class="tab-pane" id="ContentD">
                    <div class="col-lg-12">
                        <style>
                        <?php if(get_locale()=="ja"){
                            echo ".pt_us{display:none}";
                        }else{
                            echo ".pt_jp{display:none}";
                        }
                        ?>
                        </style>
                        <p><?php _e("Malwares continue increasing day by day with overcoming pattern definition of security softwares. It is recommended to apply the latest pattern to your website to obtain maximum security protection.","wpinfecscan");?></p>
                        <?php
                            
                            $ptdata = get_option( 'wpinfectscanner_newpatterndetail');
                            $ptdata=json_decode($ptdata);
                            
                            if(count($ptdata)>0){

                                echo "<table class='table'>";
                                echo "<thead><tr><th scope='col'>". __("Type","wpinfecscan")."</th><th scope='col'>". __("Patterns","wpinfecscan")."</th><th scope='col'>". __("Explanation","wpinfecscan")."</th><th scope='col'>". __("Added date","wpinfecscan")."</th></tr></thead><tbody>";
                                for($i=0;$i<count($ptdata);$i++){
                                    $day = explode(" ",$ptdata[$i]->adddate);
                                    $patterntype=__("File","wpinfecscan");
                                    if($ptdata[$i]->id>1000000){
                                        $patterntype=__("Database","wpinfecscan");
                                    }
                                    echo "<tr><td>".$patterntype."</td><td>".htmlspecialchars ($ptdata[$i]->pattern)."</td><td>".$ptdata[$i]->pname."</td><td>".$day[0]."</td></tr>";
                                }
                                echo "</tbody></table>";
                                echo "<p>". __("*Display up to 50 results","wpinfecscan")."</p>";
                                
                            }
                        ?>
                    </div>
                </div>
                <?php } ?>
            </div>  
            <script>
            function showcodenp(){
                alert('<?php echo __("This infection will be displayed after purchased the latest malware definition file.",'wpinfecscan'); ?>');
            }
            
            var editor;
            var nowfilepath;
            var nowfilename;
            var nowtid;
            var loadok = false;
            var codeshowing = true;
            function showcode(filepath,filename,highlight,tid){
                loadok = false;
                jQuery.ajax({
                   type: "POST",
                   url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                   data: "pfile="+filepath+"&gfile="+filename+"&action=infeccodegetter",
                   success: function(msg){
                       if(msg =="nofile"){
                           alert("<?php echo __("Couldn't open the file.",'wpinfecscan'); ?>");
                       }else{
                            jQuery('#myModalLabel').html(filepath+filename);
                            jQuery('.modal-body').html("<div style='width:100%;height:400px' id='infeccode'></div>");
                            jQuery('#myModal').modal('show');
                            jQuery('#infeccode').html(decodeURIComponent(escape(window.atob(msg))));
                            editor = ace.edit("infeccode");
                            editor.setTheme("ace/theme/github");
                            editor.session.setMode("ace/mode/php");
                            editor.session.setUseWrapMode(true);
                            var harray = highlight.split(',');
                            for( var i=0 ; i<harray.length ; i++ ) {
                               editor.session.addGutterDecoration(harray[i]-1,'HighlightBg');
                            }
                            nowfilepath = filepath;
                            nowfilename = filename;
                            nowtid = tid;
                            loadok = true;
                            codeshowing = true;
                            jQuery('#mydeletebutton').html('<?php _e("File deletion","wpinfecscan");?>');
                            
                            jQuery('#highlighttxt').show();
                            jQuery('#serializedtxt').hide();
                       }
                   }
                 });
            }
            
            var serializedata  = 0;
            function showcode_db(filepath,filename,highlight,tid,mytitle){
                loadok = false;
                jQuery.ajax({
                   type: "POST",
                   url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                   data: "pfile="+filepath+"&gfile="+filename+"&action=infeccodegetter_db",
                   success: function(msg){
                       if(msg =="nofile"){
                           alert("<?php echo __("Couldn't load the database data.",'wpinfecscan'); ?>");
                       }else{
                            //alert(msg);
                            if(msg.substr(0,1)=="1"){
                                msg = msg.substr(1);
                                serializedata  = 1;
                                jQuery('#myModalLabel').html(mytitle+" (<?php _e("Serialized data","wpinfecscan");?>)");
                               
                                jQuery('.modal-body').html("<div style='width:100%;height:350px;overflow:auto' id='infeccode'></div>");
                                jQuery('#myModal').modal('show');
                                jQuery('#infeccode').html("<textarea id='syrializedtxtdata' style='width:100%;height:100%'>"+decodeURIComponent(escape(window.atob(msg)))+"</textarea>");
                                
                                editor = ace.edit("infeccode");
                                editor.setTheme("ace/theme/github");
                                editor.session.setMode("ace/mode/php");
                                editor.session.setUseWrapMode(true);
                                
                                var harray = highlight.split(',');
                                for( var i=0 ; i<harray.length ; i++ ) {
                                   editor.session.addGutterDecoration(harray[i]-1,'HighlightBg');
                                }
                                
                                
                                nowfilepath = filepath;
                                nowfilename = filename;
                                nowtid = tid;
                                loadok = true;
                                codeshowing = false;
                                jQuery('#mydeletebutton').html('<?php _e("Databse data deletion","wpinfecscan");?>');
                                
                                jQuery('#highlighttxt').show();
                                jQuery('#serializedtxt').show();
                                
                            }else{
                                msg = msg.substr(1);
                                serializedata  = 0;
                                jQuery('#myModalLabel').html(mytitle);
                                jQuery('.modal-body').html("<div style='width:100%;height:400px' id='infeccode'></div>");
                                jQuery('#myModal').modal('show');
                                jQuery('#infeccode').html(decodeURIComponent(escape(window.atob(msg))));
                                
                                editor = ace.edit("infeccode");
                                editor.setTheme("ace/theme/github");
                                editor.session.setMode("ace/mode/php");
                                editor.session.setUseWrapMode(true);
                                var harray = highlight.split(',');
                                for( var i=0 ; i<harray.length ; i++ ) {
                                   editor.session.addGutterDecoration(harray[i]-1,'HighlightBg');
                                }
                                nowfilepath = filepath;
                                nowfilename = filename;
                                nowtid = tid;
                                loadok = true;
                                codeshowing = false;
                                jQuery('#mydeletebutton').html('<?php _e("Databse data deletion","wpinfecscan");?>');
                                
                                jQuery('#highlighttxt').show();
                                jQuery('#serializedtxt').hide();
                            }
                       }
                   }
                 });
            }
            
            function saveeditedfile(){
                if(loadok == true){
                    if(window.confirm(nowfilename + ' <?php echo __(" - Save changes of the file.",'wpinfecscan'); ?>\n<?php echo __("Note that file editing may cause errors of the website.",'wpinfecscan'); ?>')){
                        var edcode = editor.getValue();
                        jQuery.ajax({
                           type: "POST",
                           url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                           data: {
                                "pfile": nowfilepath,
                                "gfile": nowfilename,
                                "action": "infeccodechange",
                                "code": encodeURIComponent(edcode),
                           },
                           async: false,
                           success: function(msg){
                               if(msg=="fail"){
                                   alert("<?php echo __("Failed to change the file.",'wpinfecscan'); ?>");
                               }else{
                                   if(msg=="ok2"){
                                        alert("<?php echo __("Changed the file.",'wpinfecscan'); ?>");
                                        jQuery('#myModal').modal('hide');
                                        jQuery("#"+nowtid).remove();
                                   }else{
                                        alert("<?php echo __("Changed the file.",'wpinfecscan'); ?>");
                                        jQuery('#myModal').modal('hide');
                                        jQuery("#"+nowtid+" td:first-child").append("<p style='color:red'><small><?php echo __("*Edited",'wpinfecscan'); ?></small></p>");
                                   }
                               }
                            
                           }
                         });
                    }
                }
            }
            
            function saveeditedfile_db(){
                if(loadok == true){
                    if(window.confirm('<?php echo __("Save changes of the database data?",'wpinfecscan'); ?>\n<?php echo __("Note that data editing may cause errors of the website.",'wpinfecscan'); ?>')){
                        var edcode = "";
                        
                        edcode =  editor.getValue();
                        jQuery.ajax({
                           type: "POST",
                           url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                           data: {
                                "pfile": nowfilepath,
                                "gfile": nowfilename,
                                "action": "infeccodechange_db",
                                "serializedata":serializedata,
                                "code": encodeURIComponent(edcode),
                           },
                           async: false,
                           success: function(msg){
                               if(msg=="fail"){
                                   alert("<?php echo __("Failed to change the data.",'wpinfecscan'); ?>");
                               }else{
                                   if(msg=="fail_structure"){
                                       alert("<?php echo __("A data stricture broken. Save failed.",'wpinfecscan'); ?>");
                                   }else{
                                       if(msg=="ok2"){
                                            alert("<?php echo __("Changed the data.",'wpinfecscan'); ?>");
                                            jQuery('#myModal').modal('hide');
                                            jQuery("#"+nowtid).remove();
                                       }else{
                                            alert("<?php echo __("Changed the data.",'wpinfecscan'); ?>");
                                            jQuery('#myModal').modal('hide');
                                            jQuery("#"+nowtid+" td:first-child").append("<p style='color:red'><small><?php echo __("*Edited",'wpinfecscan'); ?></small></p>");
                                       }
                                   }
                               }
                            
                           }
                         });
                    }
                }
            }
            
            function deletecode_db(filepath,filename,tid){

                if(window.confirm(' <?php echo __("Delete the database row data?",'wpinfecscan'); ?>\n<?php echo __("Note that database row data deletion may cause errors of the website.",'wpinfecscan'); ?>')){
                   jQuery.ajax({
                   type: "POST",
                   url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                   data: "pfile="+filepath+"&gfile="+filename+"&action=infeccodedelete_db",
                   async: false,
                   success: function(msg){
                       //alert(msg);
                       if(msg=="fail"){
                           alert("<?php echo __("Failed to delete database row data.",'wpinfecscan'); ?>");
                       }else{
                           alert("<?php echo __("Deleted database row data.",'wpinfecscan'); ?>");
                           jQuery("#"+tid).remove();
                       }
                    
                   }
                 });
                }

            }
            
            function deletecode(filepath,filename,tid){

                if(window.confirm(filename + ' <?php echo __(" - Delete the file.",'wpinfecscan'); ?>\n<?php echo __("Note that file deletion may cause errors of the website.",'wpinfecscan'); ?>')){
                   jQuery.ajax({
                   type: "POST",
                   url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                   data: "pfile="+filepath+"&gfile="+filename+"&action=infeccodedelete",
                   async: false,
                   success: function(msg){
                       if(msg=="fail"){
                           alert("<?php echo __("Failed to delete the file.",'wpinfecscan'); ?>");
                       }else{
                           alert("<?php echo __("Deleted the file.",'wpinfecscan'); ?>");
                           jQuery("#"+tid).remove();
                       }
                    
                   }
                 });
                }

            }
            
            function deletefile(){
                if(loadok == true){
                    if(window.confirm(nowfilename + ' <?php echo __(" - Delete the file.",'wpinfecscan'); ?>\n<?php echo __("Note that file deletion may cause errors of the website.",'wpinfecscan'); ?>')){
                       jQuery.ajax({
                       type: "POST",
                       url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                       data: "pfile="+nowfilepath+"&gfile="+nowfilename+"&action=infeccodedelete",
                       async: false,
                       success: function(msg){
                           if(msg=="fail"){
                               alert("<?php echo __("Failed to delete the file.",'wpinfecscan'); ?>");
                           }else{
                               alert("<?php echo __("Deleted the file.",'wpinfecscan'); ?>");
                               jQuery('#myModal').modal('hide');
                               jQuery("#"+nowtid).remove();
                           }
                        
                       }
                     });
                    }
                }
            }
            
            function deletefile_db(){
                if(loadok == true){
                    if(window.confirm(' <?php echo __("Delete the database row data?",'wpinfecscan'); ?>\n<?php echo __("Note that database row data deletion may cause errors of the website.",'wpinfecscan'); ?>')){
                       jQuery.ajax({
                       type: "POST",
                       url: "<?php echo admin_url( 'admin-ajax.php'); ?>",
                       data: "pfile="+nowfilepath+"&gfile="+nowfilename+"&action=infeccodedelete_db",
                       async: false,
                       success: function(msg){
                           //alert(msg);
                           if(msg=="fail"){
                               alert("<?php echo __("Failed to delete database row data.",'wpinfecscan'); ?>");
                           }else{
                               alert("<?php echo __("Deleted database row data.",'wpinfecscan'); ?>");
                               jQuery('#myModal').modal('hide');
                               jQuery("#"+nowtid).remove();
                           }
                       }
                     });
                    }
                }
            }
            
            function showsubscribetab(){
                jQuery('[href=\"#ContentC\"]').tab('show');
            }
            
            function showmisyutokutab(){
                jQuery('[href=\"#ContentD\"]').tab('show');
            }
            
            function showipblocktab(){
                jQuery('[href=\"#ContentF\"]').tab('show');
                mapview();
            }
            jQuery('a[data-toggle="tab"]').on('shown.bs.tab', function (e) {
                  var activated_tab = jQuery(e.target).attr("href") ;
                  if(activated_tab=="#ContentF"){
                      mapview();
                  }
            })
            <?php 
                if($settingchanged){
                    echo "jQuery('[href=\"#ContentB\"]').tab('show');";
                }
                if($securitysettingchanged){
                    echo "jQuery('[href=\"#ContentE\"]').tab('show');";
                }
                if($ipblocksettingchanged){
                    echo "jQuery('[href=\"#ContentF\"]').tab('show');";
                }
                if($setting_realtimeblock_changed){
                    echo "jQuery('[href=\"#ContentG\"]').tab('show');";
                }
            ?>
            function showexptalert(){
                jQuery('#myModal2').modal('show');
            }
            </script>
            <div class="col-lg-12">
                <footer class="footer">
                    <hr style="margin-top:30px">
                    <p><a href="javascript:void(0);" onClick="displaykyodaku()"><?php _e("Show agreement","wpinfecscan");?></a> &copy; BLUE GARAGE Inc. <?php _e("WordPress doctor","wpinfecscan");?>　<a href="https://wp-doctor.jp/" target="_blank">https://wp-doctor.jp/</a></p>

                    <p style="margin-top:25px;display:none" id="riyokyodaku"><small><?php _e("<b style='color:#337ab7'>Disclaimer</b>: We do not guarantee the accuracy of the result of WordPress Doctor: Malware Scan Plugin. In addition, we are not responsible for any damage to users, other indirect servers, any items, or data by using this tool. In order to scan the malware found by us after installation, you need to subscribe the malware definition. Please use WordPress Doctor: Malware Scan Plugin with kind understanding and acknowledgement that it acquires a part of inspection data for the purpose of accuracy improvement.<br><b style='color:#337ab7'>Prohibited matters (licensing)</b>: Many of the functions of this plug-in can be used free of charge. But using this plug-in to get compensation from customers (Providing other companies with paid malware scanning and removal services) is prohibited. If you violate this clause, you agree to charge 400 $ per site. If you are interested in doing business like this, please contact us and conclude a licensing agreement. ","wpinfecscan");?></small></p>
                    
                    <script>
                    var kyodakushowing = false;
                    function displaykyodaku(){
                        if(kyodakushowing){
                            jQuery("#riyokyodaku").hide();
                            kyodakushowing = false;
                        }else{
                            jQuery("#riyokyodaku").show();
                            kyodakushowing = true;
                        }
                    }
                    </script>
                </footer>
            </div>
        </div>
	</div>


    <!-- Modal -->
    <style>
    .HighlightBg{background-color:#ff7d7d !important;color:white !important;}
    </style>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel" style="font-size:18px">Modal title</h4>
            <p id='highlighttxt'><small><?php _e("Highlighted pattern matched rows.","wpinfecscan");?></small></p>
            <p id='serializedtxt'><small><?php _e("This data is serialized (array) data. In most cases, you will need to correct the text and enter the correct value for the 's:character count'.","wpinfecscan");?></small></p>
          </div>
          <div class="modal-body" style="padding: 15px;">
            <pre class='syntaxhighlight brush: php; ruler: true; highlight: [0]' style='width:100%;height:500px' id="infeccode">
                code here
            </pre>
          </div>
          <div class="modal-footer">
            <script>
            function deletedata(){
                if(codeshowing==true){
                    deletefile();
                }else{
                    deletefile_db();
                }
            }
            function saveediteddata(){
                if(codeshowing==true){
                    saveeditedfile();
                }else{
                    saveeditedfile_db();
                }
            }
            </script>
            <button type="button" class="btn btn-danger" style="float:left" onClick="deletedata()" id='mydeletebutton'></button>
            <button type="button" class="btn btn-success" style="float:left" onClick="saveediteddata()"><?php _e("Save edit","wpinfecscan");?></button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e("Close","wpinfecscan");?></button>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Modal2 -->
    <div class="modal fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel2" style="font-size:18px"><?php _e("Notifications upon removal or deletion of malware files","wpinfecscan");?></h4>
          </div>
          <div class="modal-body2" style="padding: 15px;">
            <?php _e("<h4>Infected files</h4><p>Removal of malwares requires technical knowledge. It is recommended to ask an expert, but pay attention especially to the following points when you manage it by yourself.<br></p><ul style='list-style:disc !important;margin:20px;'><li>If the malware is infesting the file originally consists WordPress, please delete only <b>the tampered parts </b>carefully.</li><li> If the file is not a regular file of WordPress, the entire file can be deleted without any problem.</li></ul><p>However, if the tampered file is read by <b>another tampered file </b>, deletion of the tampered file may cause errors to the caller and may lead to malfunction such as undisplayable website. In that case, investigation of the caller and deletion of its tampering are required.</p>","wpinfecscan");?>
            <?php _e("<h4>Infected database</h4><p>Database infections often result in Javascript code embedded in posts and widgets. It is often possible to make it harmless by removing only the part of the malware contained in the content without removing it line by line.</p>","wpinfecscan");?>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal"><?php _e("Close","wpinfecscan");?></button>
          </div>
        </div>
      </div>
    </div>

<?php } ?>