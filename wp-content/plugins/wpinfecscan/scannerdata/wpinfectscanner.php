<?php
goto dNg5V;
zG14y:
exit;
goto w9Bor;
Yifmr:
@ini_set("\145\x72\162\157\x72\137\162\x65\160\x6f\162\x74\x69\x6e\x67", 0);
goto nPgPD;
nPgPD:
if (defined("\x41\x42\x53\x50\101\x54\110")) {
goto NDAGQ;
}
goto zG14y;
w9Bor:
NDAGQ:
goto E7kFS;
dNg5V:
@error_reporting(0);
goto Yifmr;
E7kFS:
class MalwareScanner
{
public function file_get_contents2($url)
{
goto EDI7e;
RH5bd:
$response = @file_get_contents($url, false, stream_context_create($options));
goto IKLFb;
IKLFb:
return $response;
goto d1qNI;
uHY6d:
$options["\163\x73\x6c"]["\x76\145\162\151\x66\171\137\x70\145\x65\162\137\x6e\141\x6d\x65"] = false;
goto RH5bd;
EDI7e:
$options["\x73\x73\154"]["\x76\x65\162\x69\146\171\137\160\x65\145\162"] = false;
goto uHY6d;
d1qNI:
}
public function makekey($txt)
{
$result = md5($txt . "\x77\x70\x69\x6e\x66\145\x63\164\163\x63\141\x6e\156\145\162");
return $result;
}
private function decodepattern($txt)
{
goto gRj5J;
gRj5J:
$txt = str_replace("\55", "\62\62", $txt);
goto x2no6;
O03ID:
$txt = str_replace("\135", "\67\161", $txt);
goto v8p9p;
SJa2j:
return $result;
goto P4i0_;
qMaGs:
$txt = str_replace("\56", "\62\x70", $txt);
goto btqbZ;
Veitr:
$txt = str_replace("\x2a", "\62\x32\62\x32", $txt);
goto X5UFn;
MzQ96:
$txt = str_replace("\46", "\63\x33\63\x33", $txt);
goto PpQr1;
lnuPY:
$txt = str_replace("\100", "\x33\63\x33", $txt);
goto MzQ96;
w0zsH:
$txt = str_replace("\77", "\x35\x70", $txt);
goto qMaGs;
btqbZ:
$txt = str_replace("\133", "\66\x71", $txt);
goto O03ID;
x2no6:
$txt = str_replace("\45", "\x32\x32\x32", $txt);
goto Veitr;
PpQr1:
$txt = str_replace("\x29", "\64\64", $txt);
goto AILYd;
AILYd:
$txt = str_replace("\x28", "\x34\x34\64", $txt);
goto Vt6mE;
c_0IP:
$result = hex2bin(str_rot13($txt));
goto SJa2j;
v8p9p:
$txt = str_replace("\x23", "\x33\156", $txt);
goto c_0IP;
X5UFn:
$txt = str_replace("\x21", "\63\x33", $txt);
goto lnuPY;
Vt6mE:
$txt = str_replace("\x2c", "\64\64\x34\64", $txt);
goto w0zsH;
P4i0_:
}
private $extension = array("\x2e\x6a\x70\x67", "\x2e\x6a\x70\x65\147", "\x2e\x70\x6e\x67", "\56\147\151\146", "\56\163\166\x67", "\56\x63\x72\x74", "\x2e\160\145\155", "\x2e\160\144\146", "\56\x62\155\160", "\56\172\151\x70", "\x2e\x73\x71\154", "\56\x6a\x70\147", "\x2e\x70\157", "\x2e\155\x6f", "\x2e\x6f\x74\x66", "\56\x6c\150\x61", "\56\x72\x61\x72", "\56\167\x70\162\145\x73\x73", "\56\x42\x49\x4e", "\56\x6d\155\x64\142", "\56\147\172", "\56\x6d\x70\x34", "\x2e\157\147\x67", "\x2e\155\x6f\166", "\56\x70\x73\144", "\56\x61\151", "\x2e\163\x77\x70", "\x2e\x6c\157\147");
private function wpinfectscan_dbinstall()
{
goto uSJ4G;
Bksyz:
$sql = "\103\122\105\101\x54\x45\40\x54\x41\x42\x4c\x45\x20" . $table_name . "\x20\50\xd\12\x20\40\40\x20\40\40\x20\x20\40\40\40\x20\151\144\x20\x6d\145\144\x69\x75\155\x69\156\x74\x28\71\x29\x20\116\117\x54\x20\116\x55\114\x4c\40\x41\x55\124\117\137\x49\116\x43\x52\105\115\x45\x4e\124\54\xd\12\40\x20\x20\40\x20\x20\40\x20\40\x20\40\40\146\151\x6c\x65\160\141\164\x68\x20\x76\x61\162\x63\x68\141\162\50\x31\x30\62\x34\51\40\x44\105\x46\101\x55\114\124\40\x27\x27\x2c\15\12\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\40\x66\151\154\145\156\141\x6d\145\40\166\x61\162\143\150\x61\162\50\62\65\x36\x29\x20\104\x45\106\101\x55\x4c\x54\x20\x27\x27\x2c\15\12\40\x20\x20\x20\x20\40\40\40\40\x20\40\x20\x66\x69\x6c\x65\x68\x61\163\150\x20\x76\141\162\143\150\x61\x72\50\62\65\66\x29\40\x44\x45\x46\x41\x55\x4c\124\x20\47\x27\x2c\15\xa\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\163\151\x7a\145\x20\x20\155\145\144\151\165\155\x69\156\x74\x28\71\x29\40\116\117\x54\40\x4e\125\x4c\114\54\15\12\40\40\x20\x20\40\40\40\x20\40\40\40\x20\x6c\141\x73\x74\143\150\145\143\153\145\x64\40\144\141\x74\145\164\151\x6d\145\54\xd\xa\40\x20\40\x20\40\40\x20\x20\x20\40\x20\x20\144\141\164\141\x61\144\144\144\141\x74\145\40\x64\x61\x74\145\164\151\x6d\x65\x2c\xd\xa\40\40\40\x20\40\40\40\40\40\40\40\x20\x69\156\146\145\143\164\x65\x64\x66\154\141\147\40\164\151\x6e\x79\x69\156\x74\40\x44\x45\106\x41\x55\x4c\x54\x20\60\x2c\15\12\40\40\40\40\x20\40\x20\40\x20\x20\x20\40\x6d\x61\x69\156\x64\142\x66\154\x61\x67\145\144\40\164\151\156\x79\151\x6e\x74\x20\104\105\106\x41\125\114\x54\x20\60\54\15\xa\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\155\x61\164\x63\150\154\x69\x6e\145\40\166\141\x72\x63\150\x61\x72\50\61\x30\62\64\x29\x20\x44\105\x46\x41\125\x4c\124\x20\47\x27\x2c\15\12\x20\40\x20\40\x20\x20\40\40\40\x20\40\x20\x49\116\x44\x45\130\40\50\146\151\154\145\160\x61\x74\x68\x29\x2c\15\xa\x20\40\x20\40\x20\x20\40\x20\40\x20\x20\x20\111\116\x44\x45\x58\40\x28\146\151\154\x65\x6e\141\155\145\51\x2c\15\12\40\40\40\40\40\40\x20\x20\x20\x20\x20\40\x49\116\104\x45\x58\40\50\x66\x69\154\145\x68\141\163\150\51\x2c\xd\xa\x20\40\40\40\x20\x20\x20\40\40\x20\40\40\111\x4e\x44\x45\130\x20\x28\154\x61\x73\164\143\150\145\x63\x6b\145\x64\x29\54\15\12\x20\40\x20\x20\40\x20\40\40\x20\x20\x20\40\120\122\111\x4d\101\122\131\40\113\x45\x59\x20\x20\x28\x69\x64\51\15\xa\x20\40\40\x20\40\40\40\40\51\x20" . $charset_collate . "\73";
goto L2pk1;
lv76i:
$wpinfectscan_db_version = "\61\56\x30";
goto Qi5CH;
Qi5CH:
$table_name = $wpdb->prefix . "\x69\x6e\146\x65\x63\x74\163\x63\141\156\x6e\145\162\x64\x61\164\141";
goto fq549;
L2pk1:
require_once ABSPATH . "\167\160\55\141\144\x6d\x69\x6e\x2f\x69\x6e\143\154\165\x64\x65\163\x2f\x75\x70\x67\x72\141\x64\145\x2e\160\x68\x70";
goto aEWjY;
RlQZ4:
add_option("\167\160\x69\x6e\x66\x65\x63\164\x73\143\141\156\137\144\142\137\x76\145\162\x73\x69\157\156", $wpinfectscan_db_version);
goto mpRMz;
fq549:
$charset_collate = $wpdb->get_charset_collate();
goto Bksyz;
aEWjY:
dbDelta($sql);
goto RlQZ4;
uSJ4G:
global $wpdb;
goto lv76i;
mpRMz:
}
private function wpinfectscan_dbinstall2()
{
goto F1rlA;
GrPrF:
add_option("\x77\160\151\156\x66\145\x63\x74\x73\x63\x61\x6e\137\144\x62\x5f\x76\x65\x72\163\151\x6f\x6e\x5f\x64\x62", $wpinfectscan_db_version_db);
goto Pyz3h;
oIHPq:
require_once ABSPATH . "\x77\x70\x2d\x61\144\155\x69\x6e\x2f\151\156\x63\154\165\x64\145\163\x2f\x75\160\x67\x72\141\144\145\x2e\160\150\160";
goto FJAut;
F1rlA:
global $wpdb;
goto GoZh3;
GoZh3:
$wpinfectscan_db_version_db = "\61\x2e\60";
goto vxb6s;
tgzzQ:
$charset_collate = $wpdb->get_charset_collate();
goto Iigq5;
Iigq5:
$sql = "\103\x52\105\x41\124\105\40\124\x41\102\114\105\x20" . $table_name . "\40\50\15\12\x20\40\x20\40\x20\x20\x20\x20\40\40\x20\40\151\x64\40\151\156\x74\50\61\x31\x29\40\116\x4f\x54\40\116\x55\114\x4c\40\x41\125\x54\x4f\x5f\x49\x4e\103\x52\x45\115\x45\x4e\x54\54\xd\12\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\40\x70\x61\164\x74\x65\x72\156\151\x64\x20\151\x6e\164\50\x31\x31\51\40\x4e\117\x54\x20\116\x55\x4c\x4c\40\104\105\x46\x41\125\x4c\x54\x20\60\x2c\15\xa\40\40\x20\x20\x20\40\40\40\x20\40\40\40\144\142\156\x61\x6d\145\x20\x76\x61\162\143\x68\x61\x72\x28\61\60\x32\64\x29\40\104\105\106\101\x55\114\x54\x20\x27\47\x2c\xd\12\x20\40\40\x20\x20\x20\40\x20\40\40\40\40\144\142\x72\x6f\167\x6e\141\x6d\x65\x20\x76\x61\162\143\x68\141\x72\50\x32\x35\x36\x29\x20\104\x45\x46\x41\x55\114\x54\x20\x27\x27\x2c\15\xa\40\x20\40\x20\40\40\40\40\40\40\x20\x20\x64\x62\x69\x64\x6e\x61\x6d\145\x20\166\141\162\143\150\x61\x72\50\x32\65\66\x29\x20\x44\x45\x46\x41\125\x4c\124\40\x27\47\54\15\xa\x20\x20\x20\x20\x20\x20\40\x20\40\x20\x20\40\144\142\151\x64\40\166\141\162\x63\150\141\x72\x28\62\x35\66\x29\x20\104\105\106\101\x55\x4c\x54\x20\47\x27\54\15\12\x20\x20\x20\x20\x20\x20\x20\40\x20\x20\40\40\146\x69\154\x65\x68\141\x73\150\40\166\141\x72\143\150\141\162\50\x32\x35\x36\x29\40\x44\105\x46\x41\x55\114\x54\40\x27\x27\x2c\15\xa\40\x20\x20\40\40\x20\40\40\40\40\x20\40\x73\x69\172\145\x20\x20\x6d\x65\x64\x69\165\x6d\x69\156\164\x28\71\x29\x20\116\117\x54\40\116\x55\x4c\114\x2c\15\xa\x20\x20\40\x20\40\x20\40\x20\x20\40\x20\x20\x6c\x61\x73\x74\143\x68\145\143\153\x65\x64\x20\144\141\164\x65\164\151\x6d\145\54\15\xa\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\40\151\156\146\145\x63\164\145\144\x66\x6c\141\147\x20\164\151\156\x79\x69\156\164\40\x44\105\x46\101\x55\x4c\124\x20\60\x2c\xd\xa\40\40\40\x20\x20\x20\40\40\x20\x20\x20\40\x6d\x61\151\156\x64\142\x66\154\x61\147\x65\144\40\x74\151\x6e\x79\x69\156\x74\x20\x44\x45\x46\x41\125\114\x54\40\x30\54\15\xa\40\40\40\x20\x20\x20\x20\x20\x20\x20\x20\40\155\x61\x74\143\x68\x6c\151\156\145\40\166\141\162\143\x68\x61\x72\50\61\60\x32\x34\x29\x20\104\x45\106\x41\125\x4c\124\x20\47\x27\54\15\12\x20\40\40\40\x20\40\x20\40\x20\40\x20\x20\111\116\x44\x45\130\x20\50\x70\x61\x74\x74\x65\x72\x6e\151\x64\x29\54\xd\12\x20\40\x20\x20\x20\x20\x20\x20\40\40\40\40\111\116\104\x45\x58\40\x28\x64\x62\156\141\155\x65\51\54\xd\12\x20\40\x20\x20\x20\40\40\x20\40\x20\40\40\111\116\x44\105\130\x20\50\x64\x62\162\157\x77\x6e\x61\155\145\x29\x2c\xd\12\x20\40\40\x20\x20\40\40\x20\x20\40\x20\40\111\116\x44\x45\x58\x20\x28\146\x69\x6c\x65\x68\x61\163\150\51\x2c\15\12\x20\40\40\x20\40\40\x20\40\x20\x20\40\x20\111\x4e\104\105\x58\x20\50\144\x62\x69\144\51\54\15\12\x20\40\x20\x20\40\x20\x20\40\x20\x20\40\x20\120\122\111\115\101\x52\131\40\x4b\105\131\40\x20\x28\x69\144\x29\15\xa\x20\x20\x20\x20\x20\40\x20\40\51\40" . $charset_collate . "\x3b";
goto oIHPq;
vxb6s:
$table_name = $wpdb->prefix . "\151\x6e\146\x65\x63\164\163\143\141\x6e\x6e\145\x72\144\x61\x74\141\x5f\144\142";
goto tgzzQ;
FJAut:
dbDelta($sql);
goto GrPrF;
Pyz3h:
}
private $patternsraw = array();
public $phpurl;
private $serverdomain = "\x77\x70\x2d\x64\157\x63\x74\157\x72\56\167\x6f\162\153";
private $wptopdir = '';
private $iscron = false;
private $keikajikan = 0;
private $max_time;
public $timezone;
function __construct()
{
goto WPJUF;
MG6AE:
ML9An:
goto Jd9NY;
Eg1ZA:
if (isset($_SERVER["\x48\124\124\x50\x53"]) && $_SERVER["\x48\x54\124\x50\x53"] == "\x6f\x6e") {
goto IRrCF;
}
goto Cgf9t;
KNjiW:
YrS0w:
goto m3Ob_;
yCxh9:
$this->phpurl = "\x68\164\x74\x70\163\72\x2f\x2f" . $this->serverdomain . "\57\x67\145\x74\x73\x63\x61\156\x64\141\x74\x61\x70\x72\157\57";
goto Ww27V;
qrtqc:
if (!$isSecure) {
goto ML9An;
}
goto yCxh9;
Cgf9t:
if (!empty($_SERVER["\x48\x54\124\120\137\x58\x5f\106\117\x52\127\x41\122\x44\105\104\137\120\122\117\124\117"]) && $_SERVER["\x48\x54\x54\120\x5f\130\x5f\x46\x4f\122\127\101\122\104\x45\104\137\120\x52\x4f\x54\117"] == "\x68\x74\164\160\x73" || !empty($_SERVER["\110\124\x54\120\x5f\x58\137\x46\117\122\x57\101\x52\104\105\x44\x5f\x53\123\x4c"]) && $_SERVER["\110\x54\124\120\137\x58\137\x46\117\122\x57\101\122\x44\105\104\x5f\x53\x53\114"] == "\x6f\x6e") {
goto vlPM8;
}
goto fDMPv;
MCrB_:
$isSecure = true;
goto r8ClV;
r8ClV:
goto csYWA;
goto Z9ivZ;
ETlDL:
csYWA:
goto qrtqc;
WPJUF:
$isSecure = false;
goto Eg1ZA;
Z9ivZ:
vlPM8:
goto JxUfd;
JxUfd:
$isSecure = true;
goto ETlDL;
Ww27V:
goto YrS0w;
goto MG6AE;
Tism4:
IRrCF:
goto MCrB_;
Jd9NY:
$this->phpurl = "\x68\164\164\x70\72\x2f\57" . $this->serverdomain . "\57\147\x65\x74\x73\143\141\x6e\144\141\164\x61\160\x72\x6f\x2f";
goto KNjiW;
fDMPv:
goto csYWA;
goto Tism4;
m3Ob_:
}
private function islocalhost()
{
goto FC2hN;
TSdub:
UDEee:
goto nJre6;
AOwqs:
if (!filter_var($domain, FILTER_VALIDATE_IP)) {
goto UDEee;
}
goto GiTv9;
jCE6_:
$domain = $domain["\150\157\163\x74"];
goto sJCDz;
iNgno:
owo2x:
goto AOwqs;
VeWm_:
return true;
goto iNgno;
GH_HJ:
$domain = parse_url($mysiteurl);
goto jCE6_;
GiTv9:
return true;
goto TSdub;
sJCDz:
if (!($domain == "\x6c\x6f\x63\141\x6c\150\x6f\163\x74")) {
goto owo2x;
}
goto VeWm_;
FC2hN:
$mysiteurl = get_site_url();
goto GH_HJ;
nJre6:
}
public function getpatternnum()
{
goto a4Nk6;
dv4kl:
$patternnum = $patternar[0];
goto fu0KY;
sg2nf:
return $patternnum;
goto yRQ0o;
pkqja:
$patternnum = $this->file_get_contents2($this->phpurl . "\x67\x65\164\x6e\145\x77\160\141\164\164\145\162\x6e\x75\x6d\x31\x39\56\160\x68\160\77\144\157\155\x61\151\x6e\75" . $domain . "\x26\153\145\171\75" . $key);
goto r2IKl;
Aryi3:
$patternnum = -1;
goto cOGDp;
iaVpj:
$domain = $domain["\x68\157\163\164"];
goto PNuUD;
a4Nk6:
$mysiteurl = get_site_url();
goto SFh5X;
cOGDp:
if ($this->islocalhost) {
goto cnUeI;
}
goto pkqja;
t_10P:
k19o1:
goto VCQVu;
VCQVu:
cnUeI:
goto sg2nf;
SFh5X:
$domain = parse_url($mysiteurl);
goto iaVpj;
fu0KY:
ZNSuk:
goto t_10P;
BAOnG:
if (!(count($patternar) == 2)) {
goto ZNSuk;
}
goto dv4kl;
JhxGa:
$patternar = explode("\54", $patternnum);
goto BAOnG;
PNuUD:
$key = $this->makekey($domain);
goto Aryi3;
r2IKl:
if (is_numeric($patternnum)) {
goto k19o1;
}
goto JhxGa;
yRQ0o:
}
public function getipdata()
{
goto ynAj5;
ynAj5:
$mysiteurl = get_site_url();
goto Cu_Ea;
MvKsZ:
$domain = $domain["\150\x6f\x73\x74"];
goto it540;
Cu_Ea:
$domain = parse_url($mysiteurl);
goto MvKsZ;
k1VtN:
$ipdata = $this->file_get_contents2($this->phpurl . "\x69\160\x62\x6c\157\x63\x6b\154\x69\x73\164\147\x65\164\56\x70\150\x70\x3f\144\x6f\155\141\x69\x6e\75" . $domain . "\46\153\145\x79\x3d" . $key);
goto QwD4m;
it540:
$key = $this->makekey($domain);
goto k1VtN;
QwD4m:
return json_decode($ipdata);
goto b9rdH;
b9rdH:
}
public function getpro()
{
goto ZySrt;
MXkCr:
$key = $this->makekey($domain);
goto knF80;
ZBaj2:
$domain = parse_url($mysiteurl);
goto fQPOD;
fQPOD:
$domain = $domain["\150\157\x73\x74"];
goto MXkCr;
Avvhg:
return $prodata;
goto OUSAh;
knF80:
$prodata = $this->file_get_contents2($this->phpurl . "\x67\145\164\x70\x72\157\x2e\160\x68\x70\77\144\157\155\x61\x69\156\75" . $domain . "\46\153\145\171\75" . $key);
goto Avvhg;
ZySrt:
$mysiteurl = get_site_url();
goto ZBaj2;
OUSAh:
}
public function loaddatacloud()
{
goto p8rxU;
qLMmG:
$query_db = "\123\x45\x4c\x45\x43\124\40\104\x49\x53\124\111\x4e\x43\x54\x20\160\141\x74\x74\145\162\x6e\151\144\40\x46\x52\117\x4d\x20" . $table_name_db . "\40\x3b";
goto L7Eof;
QobDw:
zqP1Z:
goto Msf0h;
Tey6V:
$malwarepattern = $this->file_get_contents2($this->phpurl . "\160\x61\x74\164\145\x72\156\137\162\141\167\61\x39\56\160\x68\x70\x3f\x64\157\x6d\141\x69\156\75" . $domain . "\46\x6b\145\171\x3d" . $key . "\46\153\x65\171\x32\x3d" . $mysiteorgkey1 . "\46\153\x65\171\x33\75" . $mysiteorgkey2 . "\46\x76\x3d" . $wpinfecscanversion . "\46\150\75" . $myhomeurl);
goto KFIPQ;
LW2by:
$patternnum = 0;
goto Rl0Ko;
coehC:
fkVG1:
goto WvB_1;
w9QCV:
d1Mru:
goto OuWzG;
y54_L:
$wpdb->get_results($sqldddel);
goto z7TxZ;
aPjNJ:
if (!(count($dbpatternlist) > 0)) {
goto h0_UE;
}
goto UoboI;
GYttH:
ccppP:
goto T4kbJ;
kpCE7:
if (!($i < count($dif))) {
goto pWqlo;
}
goto rqfmz;
Z6a3r:
pyto3:
goto QdUyA;
adCHe:
$i = 0;
goto NMaTv;
L6rZT:
LQVJ3:
goto BzHX5;
Eu2lp:
eLfNQ:
goto q6cbP;
vFUus:
$table_name = $wpdb->prefix . "\x75\163\x65\x72\x73";
goto tOn_Q;
KFIPQ:
if (!(strlen($malwarepattern) > 128)) {
goto knJVc;
}
goto DigJb;
v52VL:
if (!$txt) {
goto x4ydu;
}
goto ew0VQ;
jEI9W:
goto LQVJ3;
goto GYttH;
iSnlP:
x4ydu:
goto RapfY;
ZiFJb:
exWFd:
goto xSWPa;
LuqgE:
$decript[$i]->pattern = str_replace("\40", '', $decript[$i]->pattern);
goto OrwLl;
gAP8Y:
if (!(strlen($whitelist) > 128)) {
goto exWFd;
}
goto XGaAe;
Z85Tb:
$this->wpinfectscan_dbinstall2();
goto w9QCV;
c7fd_:
knJVc:
goto jo5uw;
Jx0Ni:
update_option("\x77\x70\151\156\x66\145\143\x74\x73\x63\x61\x6e\x6e\145\162\137\154\141\163\x74\x70\x61\x74\164\x65\162\156\x67\145\164", $nowdate);
goto adO8j;
qXxJz:
$mydbpatternlist = array();
goto xyRa0;
VAbrf:
$txt = get_option("\x77\160\x69\x6e\x66\x65\143\164\x73\143\x61\156\x6e\145\162\x5f\155\x61\x6c\x77\x61\162\145\160\x61\164\x74\145\162\x6e");
goto v52VL;
q6cbP:
if (is_numeric($patternnum)) {
goto pyto3;
}
goto nHcit;
KtzLB:
$mysiteurl = get_site_url();
goto JB0U2;
hcO42:
pWqlo:
goto WOZYt;
fG6Yi:
$domain = $domain["\150\x6f\x73\164"];
goto yAvxj;
JnCB1:
P3nk6:
goto VAbrf;
VQaKl:
$mydbpatternlist[] = intval($rowsfiles_db[$i]->patternid);
goto nW8c0;
j8tcS:
x2MXv:
goto M5BQX;
RapfY:
$nowdate = date("\x59\x2d\x6d\55\144\x20\x48\72\x69\x3a\163", time());
goto Jx0Ni;
awyOP:
$i++;
goto z9jpb;
eR7zX:
$domain = parse_url($mysiteurl);
goto fG6Yi;
f7ZZK:
goto Tx1JR;
goto sgKVu;
ew0VQ:
$txtarr = explode("\x5f", $txt);
goto tRUHQ;
AwTIL:
$mysiteorgkey2 = md5(get_bloginfo("\x61\144\x6d\x69\156\x5f\145\x6d\141\x69\x6c") . $userdata->user_login . $userdata->user_registered);
goto LW2by;
wfsda:
$sqldddel = "\104\105\x4c\105\x54\105\x20\106\122\x4f\x4d\x20\x60" . $table_name_db . "\140\x20\x57\x48\105\122\105\x20\x60\160\141\x74\164\x65\162\156\151\x64\140\40\x3d\40" . $ppiid . "\73";
goto y54_L;
tRUHQ:
if (!(count($txtarr) == 2)) {
goto CYc1Q;
}
goto L1R5Z;
Msf0h:
if ($patternnum > 0) {
goto bnqmE;
}
goto qJTbO;
CbZNe:
IhqDT:
goto aPjNJ;
WvB_1:
$i++;
goto PP1_A;
NMaTv:
FkZmK:
goto AKHep;
nHcit:
if ($patternnum !== false) {
goto ccppP;
}
goto ObZV5;
CTNyb:
update_option("\x77\x70\x69\x6e\146\145\143\x74\163\x63\x61\156\x6e\x65\162\x5f\155\x61\154\x77\141\162\x65\x70\141\x74\x74\x65\x72\x6e", '');
goto kT1j_;
yAvxj:
$key = $this->makekey($domain);
goto ouEb0;
OuWzG:
if (!(is_array($mydbpatternlist) && is_array($dbpatternlist))) {
goto GCfrq;
}
goto Al7fF;
z7TxZ:
H4vKs:
goto coehC;
si4fS:
hNkG7:
goto kpCE7;
S74CG:
h0_UE:
goto uTfPo;
vSDbT:
$i++;
goto f7ZZK;
QdUyA:
update_option("\x77\160\151\156\146\145\x63\164\163\143\x61\156\x6e\145\162\137\156\x65\167\160\141\164\x74\145\x72\x6e\156\165\x6d", $patternnum);
goto QobDw;
LhPpq:
if (!(count($patternar) == 2)) {
goto MFrRc;
}
goto CEgmK;
T20BI:
$i = 0;
goto si4fS;
ouEb0:
$mysiteorgkey1 = md5(DB_NAME . DB_USER . DB_PASSWORD . DB_HOST);
goto UO_WB;
rqfmz:
$ppiid = trim($dif[$i]);
goto onIxq;
jo5uw:
$whitelist = $this->file_get_contents2($this->phpurl . "\167\150\x69\x74\145\x6c\x69\163\x74\61\71\56\160\x68\160\77\x64\157\155\x61\x69\156\75" . $domain . "\46\153\x65\x79\75" . $key);
goto gAP8Y;
DigJb:
update_option("\167\x70\x69\156\146\x65\x63\x74\x73\x63\141\156\156\145\x72\x5f\x6d\141\x6c\167\x61\x72\x65\160\141\x74\164\x65\162\x6e", $malwarepattern);
goto cdwW5;
w9uaK:
update_option("\167\160\151\x6e\x66\x65\143\x74\163\x63\x61\156\156\145\162\137\156\x65\167\160\x61\164\x74\x65\x72\156\x64\145\x74\141\151\x6c", '');
goto nsGUo;
UoboI:
$table_name_db = $wpdb->prefix . "\x69\156\x66\x65\x63\x74\x73\x63\141\x6e\x6e\x65\162\144\141\x74\x61\x5f\144\142";
goto AX70c;
AX70c:
if ($wpdb->get_var("\123\x48\x4f\127\40\124\101\102\114\105\123\40\114\x49\x4b\105\40\47" . $table_name_db . "\47") != $table_name_db) {
goto oVcmX;
}
goto qLMmG;
sgKVu:
mw7tf:
goto gKY00;
ObZV5:
if (!(get_option("\167\x70\151\x6e\146\x65\143\x74\163\x63\x61\156\156\145\x72\x5f\156\x65\167\160\141\x74\164\145\x72\x6e\156\165\155") == false)) {
goto ozXql;
}
goto ES3JS;
aqk_U:
if (!($i < count($rowsfiles_db))) {
goto mw7tf;
}
goto VQaKl;
xSWPa:
if (!($malwarepattern == "\x62\x6c\x6f\143\153\145\x64")) {
goto P3nk6;
}
goto CTNyb;
WGrfX:
update_option("\167\x70\x69\156\x66\x65\x63\164\163\x63\x61\156\x6e\145\x72\137\x63\x6f\x6e\x74\x72\141\x63\164\164\157", '');
goto odOCv;
nW8c0:
PM9h0:
goto vSDbT;
qJTbO:
if (!($patternnum !== false)) {
goto Q38fs;
}
goto w9uaK;
BAxKn:
$dbpatternlist[] = intval($decript[$i]->id);
goto j8tcS;
XGaAe:
update_option("\167\160\x69\156\146\x65\x63\164\x73\x63\x61\x6e\156\145\162\137\167\x68\151\x74\145\x6c\151\163\164", $whitelist);
goto ZiFJb;
uicQN:
MFrRc:
goto L6rZT;
yWGtL:
tQQ17:
goto Tey6V;
nsGUo:
Q38fs:
goto ag5U3;
T4kbJ:
update_option("\167\x70\151\156\146\x65\143\x74\x73\143\141\x6e\x6e\x65\x72\137\x6e\x65\167\x70\x61\x74\x74\x65\x72\156\156\165\x6d", 0);
goto nXjRB;
KUDAR:
Tx1JR:
goto aqk_U;
M5BQX:
C5DP5:
goto awyOP;
nXjRB:
$patternar = explode("\x2c", $patternnum);
goto LhPpq;
rVlMk:
update_option("\167\160\x69\x6e\146\145\143\x74\163\143\x61\156\156\x65\162\x5f\141\x6c\145\x72\x74", "\123\143\141\156\x6e\x69\156\x67\x20\x69\163\x20\x63\165\x72\162\x65\156\x74\154\x79\40\x75\x6e\x61\166\x61\151\x6c\141\x62\154\145\40\142\x65\143\141\x75\x73\x65\x20\164\x68\x65\40\x6c\141\x74\145\x73\164\40\x6d\x61\x6c\167\141\162\145\x20\160\141\x74\164\145\162\x6e\x20\151\x73\40\x75\156\x6f\142\164\141\151\x6e\x61\x62\x6c\x65\x2e\x20\x50\154\x65\x61\x73\145\x20\x74\x72\x79\x20\141\x67\x61\x69\156\x20\155\x61\x6e\165\141\x6c\154\171\40\141\x66\x74\145\162\x20\143\x68\x65\x63\x6b\x65\x64\40\x74\150\141\164\x20\133\x54\150\x65\x20\x77\145\142\x73\x69\x74\145\40\151\x73\x20\160\x75\142\x6c\x69\x63\40\141\x6e\x64\40\151\163\40\x6f\160\145\x72\141\x74\x69\156\x67\40\x77\151\x74\150\40\127\157\162\144\x50\x72\145\163\x73\135\x2c\x20\x5b\x54\150\x65\x20\160\154\x75\x67\151\x6e\163\40\165\163\x65\x64\x20\141\162\x65\x20\x74\x68\145\x20\x6c\x61\x74\x65\x73\x74\x20\166\145\x72\163\151\157\156\x5d\x2e");
goto JnCB1;
onIxq:
if (empty($ppiid)) {
goto H4vKs;
}
goto wfsda;
uTfPo:
CYc1Q:
goto iSnlP;
JB0U2:
$myhomeurl = base64_encode(get_home_url());
goto eR7zX;
xyRa0:
$i = 0;
goto KUDAR;
odOCv:
$patterndetail = $this->file_get_contents2($this->phpurl . "\147\145\164\x6e\x65\167\x70\x61\x74\x74\x65\x72\x6e\x64\x65\x74\x61\x69\x6c\61\x39\56\x70\150\x70\77\x64\157\x6d\x61\151\156\75" . $domain . "\46\x6b\x65\x79\x3d" . $key);
goto uqufh;
p8rxU:
global $wpinfecscanversion;
goto KtzLB;
Al7fF:
$dif = array_diff($mydbpatternlist, $dbpatternlist);
goto T20BI;
BzHX5:
goto zqP1Z;
goto Z6a3r;
L7Eof:
$rowsfiles_db = $wpdb->get_results($query_db);
goto qXxJz;
ag5U3:
goto tQQ17;
goto baFpi;
cdwW5:
update_option("\167\160\x69\x6e\146\x65\143\164\x73\143\x61\x6e\x6e\145\x72\137\x61\154\145\162\164", '');
goto c7fd_;
gPAxt:
$rowsfiles = $wpdb->get_results($usergetquery);
goto slTsb;
tOn_Q:
$usergetquery = "\x73\145\154\x65\x63\x74\x20\x2a\40\x66\x72\x6f\155\40" . $table_name . "\40\40\x4f\x52\x44\105\122\x20\x42\131\x20\x75\x73\145\x72\x5f\162\145\x67\151\x73\x74\145\x72\145\144\40\x41\x53\x43\40\x6c\151\x6d\151\x74\40\61\73";
goto gPAxt;
ES3JS:
update_option("\x77\x70\151\156\146\x65\143\164\163\x63\x61\x6e\x6e\x65\x72\137\x6e\x65\167\160\x61\x74\164\x65\x72\156\156\165\x6d", 0);
goto pI2pl;
AKHep:
if (!($i < count($decript))) {
goto IhqDT;
}
goto LuqgE;
OrwLl:
if (!($decript[$i]->id >= 1000000)) {
goto x2MXv;
}
goto BAxKn;
uqufh:
update_option("\x77\160\151\x6e\146\145\x63\164\x73\x63\x61\156\156\145\x72\x5f\x6e\x65\x77\160\x61\164\164\x65\x72\156\x64\x65\164\141\151\x6c", $patterndetail);
goto yWGtL;
CEgmK:
update_option("\167\x70\151\156\x66\x65\x63\164\163\143\141\x6e\x6e\x65\x72\137\143\x6f\x6e\164\x72\x61\143\164\x74\x6f", $patternar[1]);
goto uicQN;
L1R5Z:
$decript = json_decode($this->decodepattern($txtarr[1]));
goto iPURR;
nhNG1:
oVcmX:
goto Z85Tb;
slTsb:
$userdata = $rowsfiles[0];
goto AwTIL;
PP1_A:
goto hNkG7;
goto hcO42;
pI2pl:
ozXql:
goto jEI9W;
UO_WB:
global $wpdb;
goto vFUus;
baFpi:
bnqmE:
goto WGrfX;
iPURR:
$dbpatternlist = array();
goto adCHe;
WOZYt:
GCfrq:
goto S74CG;
kT1j_:
update_option("\x77\x70\x69\156\146\145\143\x74\163\143\141\x6e\x6e\x65\162\x5f\167\x68\x69\164\145\x6c\x69\163\x74", '');
goto rVlMk;
VlJ1p:
$patternnum = $this->file_get_contents2($this->phpurl . "\147\145\x74\x6e\x65\167\x70\141\164\164\x65\x72\156\x75\155\x31\x39\56\x70\150\160\x3f\x64\x6f\155\x61\151\156\75" . $domain . "\x26\153\145\x79\x3d" . $key);
goto Eu2lp;
Rl0Ko:
if ($this->islocalhost) {
goto eLfNQ;
}
goto VlJ1p;
z9jpb:
goto FkZmK;
goto CbZNe;
gKY00:
goto d1Mru;
goto nhNG1;
adO8j:
}
private function loadPatternsu($isdb = false)
{
goto PMu4r;
ZKQnV:
if (!($i < count($decript))) {
goto ytAGH;
}
goto uf0tt;
V5sSi:
$myhomeurl = base64_encode(get_home_url());
goto gh5H4;
QiRQu:
O9GdA:
goto BXeOj;
afTKb:
$usergetquery = "\163\145\x6c\x65\143\164\x20\52\40\146\162\157\x6d\40" . $table_name . "\x20\x20\117\x52\x44\105\x52\40\102\131\x20\165\163\x65\x72\x5f\162\x65\x67\151\x73\x74\x65\162\145\144\x20\x41\123\103\40\x6c\151\x6d\151\x74\40\61\73";
goto VvDPe;
ZBvaL:
if ($txtarr[0] != "\x64\141\x74\x61\x76\61\x2e\67") {
goto o3b8L;
}
goto fN3ah;
wNTrt:
j8Aq3:
goto sRhLA;
xYdKF:
o3b8L:
goto RWF2G;
x52Kr:
global $wpinfecscanversion;
goto niWT6;
D87Rp:
$domain = $domain["\x68\157\163\x74"];
goto UIO1X;
kYcXB:
ViueZ:
goto hd1RS;
qxdXq:
F9mo6:
goto fg95d;
BXeOj:
$i = 0;
goto qLvEh;
BZoP3:
$malwarepattern = $this->file_get_contents2($this->phpurl . "\160\x61\164\x74\145\x72\156\x5f\x72\141\167\x31\71\56\160\150\160\77\144\157\x6d\x61\151\x6e\75" . $domain . "\x26\x6b\x65\x79\x3d" . $key . "\46\153\145\x79\62\x3d" . $mysiteorgkey1 . "\x26\x6b\145\x79\63\x3d" . $mysiteorgkey2 . "\46\x76\x3d" . $wpinfecscanversion . "\x26\150\75" . $myhomeurl);
goto pomOB;
ITfMz:
azLZZ:
goto sYg3u;
TFlRv:
bPW60:
goto oIshH;
czDcy:
qjsr2:
goto UfQac;
y0Qj_:
A1TG0:
goto TFlRv;
UIO1X:
$key = $this->makekey($domain);
goto EhzK6;
KiVML:
$table_name = $wpdb->prefix . "\165\x73\x65\162\163";
goto afTKb;
ZqLJm:
if (!($decript[$i]->id < 1000000)) {
goto A1TG0;
}
goto dkhF3;
VvDPe:
$rowsfiles = $wpdb->get_results($usergetquery);
goto lrUeC;
dkhF3:
$list[] = $decript[$i];
goto y0Qj_;
qLvEh:
zLuQA:
goto ZKQnV;
yDkTy:
if (!(strlen($whitelist) > 128)) {
goto Oj3Z_;
}
goto itFl7;
niWT6:
$mysiteurl = get_site_url();
goto V5sSi;
itFl7:
update_option("\167\x70\151\156\x66\145\x63\164\x73\x63\x61\x6e\156\x65\x72\x5f\x77\150\151\x74\145\x6c\x69\163\x74", $whitelist);
goto AoHqC;
fg95d:
if (!($i < count($decript))) {
goto qjsr2;
}
goto JMGhG;
FFdp1:
$list[] = $decript[$i];
goto crYAF;
RWF2G:
$txt = '';
goto x52Kr;
hclDq:
$mysiteorgkey2 = md5(get_bloginfo("\141\144\155\x69\x6e\137\x65\155\x61\x69\154") . $userdata->user_login . $userdata->user_registered);
goto BZoP3;
PMu4r:
$txt = get_option("\x77\160\x69\156\x66\x65\x63\x74\x73\x63\141\156\x6e\x65\x72\x5f\x6d\x61\154\x77\x61\162\x65\x70\141\x74\164\x65\162\156");
goto R1b2d;
AKTfd:
goto zLuQA;
goto aVNuU;
sRhLA:
$whitelist = $this->file_get_contents2($this->phpurl . "\167\150\x69\164\145\x6c\x69\x73\164\61\71\x2e\160\150\x70\x3f\144\157\x6d\141\x69\x6e\x3d" . $domain . "\x26\153\x65\x79\75" . $key);
goto yDkTy;
aVNuU:
ytAGH:
goto U0B8b;
hd1RS:
$decript = json_decode($this->decodepattern($txt));
goto VNINx;
BQn3l:
update_option("\167\x70\151\x6e\x66\x65\x63\164\163\143\x61\x6e\x6e\145\162\x5f\x61\154\145\162\x74", '');
goto NRXIi;
Gu5kG:
$txtarr = explode("\x5f", $malwarepattern);
goto Ae0lP;
tfLPV:
goto ViueZ;
goto xYdKF;
pomOB:
if (!(strlen($malwarepattern) > 128)) {
goto eYTrM;
}
goto RIIvn;
NRXIi:
eYTrM:
goto Gu5kG;
UfQac:
goto uI13g;
goto QiRQu;
fN3ah:
$txt = $txtarr[1];
goto tfLPV;
z7eAk:
$txt = $txtarr[1];
goto wNTrt;
RIIvn:
update_option("\x77\160\x69\156\x66\145\143\164\163\143\141\156\156\x65\x72\x5f\x6d\141\154\167\x61\x72\x65\160\141\164\x74\145\x72\156", $malwarepattern);
goto BQn3l;
EhzK6:
$mysiteorgkey1 = md5(DB_NAME . DB_USER . DB_PASSWORD . DB_HOST);
goto KiVML;
Ae0lP:
if (!(count($txtarr) == 2)) {
goto j8Aq3;
}
goto z7eAk;
txl7E:
if ($isdb) {
goto O9GdA;
}
goto GMch9;
sYg3u:
$i++;
goto AKTfd;
uf0tt:
if (!($decript[$i]->id >= 1000000)) {
goto B2yuh;
}
goto FFdp1;
AoHqC:
Oj3Z_:
goto kYcXB;
VNINx:
$list = array();
goto txl7E;
R1b2d:
$txtarr = explode("\x5f", $txt);
goto ZBvaL;
oIshH:
$i++;
goto RZpA6;
lrUeC:
$userdata = $rowsfiles[0];
goto hclDq;
U0B8b:
uI13g:
goto Tl30W;
JMGhG:
$decript[$i]->pattern = str_replace("\x20", '', $decript[$i]->pattern);
goto ZqLJm;
Tl30W:
return $list;
goto j25sI;
gh5H4:
$domain = parse_url($mysiteurl);
goto D87Rp;
GMch9:
$i = 0;
goto qxdXq;
crYAF:
B2yuh:
goto ITfMz;
RZpA6:
goto F9mo6;
goto czDcy;
j25sI:
}
private function loadWhitelistu()
{
goto sjhdD;
nep06:
$i++;
goto PWPph;
Z5NX9:
return $list;
goto ZRnbA;
PWPph:
goto WAdFK;
goto cE1H1;
cE1H1:
RpHA3:
goto Z5NX9;
PWQpM:
$i = 0;
goto e64oo;
WqSKT:
$decript = json_decode($this->decodepattern($txt));
goto sCMdz;
OG2Y_:
DAt0c:
goto xBSIn;
Zb3ST:
if (!($decript[$i]->id < 1000000)) {
goto DAt0c;
}
goto zp0Lr;
e64oo:
WAdFK:
goto TIPDW;
xBSIn:
OwFyg:
goto nep06;
sCMdz:
$list = array();
goto PWQpM;
sjhdD:
$txt = get_option("\167\160\151\156\x66\x65\143\x74\x73\143\141\156\x6e\x65\x72\x5f\167\x68\x69\x74\x65\x6c\151\163\x74");
goto WqSKT;
TIPDW:
if (!($i < count($decript))) {
goto RpHA3;
}
goto Zb3ST;
zp0Lr:
$list[] = $decript[$i]->hash;
goto OG2Y_;
ZRnbA:
}
private function loadWhitelistudb()
{
goto i6tOo;
LyVbF:
return $list;
goto mOI0L;
IsNv5:
t73ol:
goto qiDoc;
Vh0l4:
goto t73ol;
goto QfWUm;
hRzqX:
$i++;
goto Vh0l4;
i2JHx:
$list[] = $decript[$i]->hash;
goto QjFZe;
G74PZ:
$decript = json_decode($this->decodepattern($txt));
goto Ha1Pk;
QjFZe:
S5n0s:
goto awwuF;
qiDoc:
if (!($i < count($decript))) {
goto vvSTF;
}
goto tKRct;
Ha1Pk:
$list = array();
goto IiOCA;
IiOCA:
$i = 0;
goto IsNv5;
awwuF:
btu3c:
goto hRzqX;
tKRct:
if (!($decript[$i]->id >= 1000000)) {
goto S5n0s;
}
goto i2JHx;
i6tOo:
$txt = get_option("\x77\x70\151\156\146\145\143\164\x73\143\141\156\156\145\162\137\x77\150\x69\x74\145\154\x69\163\164");
goto G74PZ;
QfWUm:
vvSTF:
goto LyVbF;
mOI0L:
}
public function sendblockipdata($ip, $type)
{
goto VTzvf;
OaPN0:
$data = array("\x64\141\164\141" => $cryptdata);
goto PtxC3;
nX38Z:
$domain = parse_url($mysiteurl);
goto VKHZ3;
Funm5:
$rawdata = $mysiteurl . "\43\x25\43\x25\x23" . $ipv4txt . "\x23\x25\43\45\x23" . $ipv6txt . "\x23\x25\43\x25\43" . $type;
goto pJrln;
ihfp1:
uJpEL:
goto k9h4V;
PxaHK:
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)) {
goto zcMHi;
}
goto kP3_w;
BY_5R:
$mysiteurl = get_site_url();
goto nX38Z;
l683X:
$html = @file_get_contents($this->phpurl . "\151\160\142\154\x6f\143\153\x6c\x6f\x67\x73\x61\166\x65\162\x2e\x70\150\x70\77\144\157\155\141\x69\x6e\x3d" . $domain . "\46\153\x65\x79\x3d" . $key, false, stream_context_create($context));
goto NqHmu;
i9xI0:
$ipv4 = true;
goto Bobni;
Bobni:
$ipv4txt = $ip;
goto ihfp1;
EjqRY:
$ipv6txt = $ip;
goto ct18a;
pJrln:
$cryptdata = str_rot13(bin2hex($rawdata));
goto dGH_V;
JsDvk:
$context = array("\150\164\164\x70" => array("\x6d\145\164\150\157\144" => "\x50\x4f\123\x54", "\x68\145\x61\x64\x65\x72" => implode("\xd\xa", $header), "\143\157\x6e\164\x65\x6e\164" => $data));
goto zCY2B;
XYcmv:
if (!filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4)) {
goto uJpEL;
}
goto i9xI0;
ct18a:
zcMHi:
goto XYcmv;
XZmuQ:
$context["\163\163\154"]["\x76\x65\x72\x69\x66\171\x5f\x70\145\145\162\137\156\x61\x6d\145"] = false;
goto l683X;
K447J:
$key = $this->makekey($domain);
goto VXdZS;
U9jDK:
return;
goto oJ7Bx;
k9h4V:
if ($ipv4 || $ipv6) {
goto BmoQM;
}
goto Fzrri;
Fzrri:
return;
goto FTjdV;
VXdZS:
$ipv4 = false;
goto Iyhy4;
dGH_V:
if (!(strlen($cryptdata) < 50000)) {
goto wc2Ig;
}
goto OaPN0;
kP3_w:
$ipv6 = true;
goto EjqRY;
zCY2B:
$context["\163\163\x6c"]["\166\x65\162\x69\x66\x79\x5f\x70\145\145\162"] = false;
goto XZmuQ;
FTjdV:
BmoQM:
goto Funm5;
PtxC3:
$data = http_build_query($data, '', "\x26");
goto kz1Qn;
VTzvf:
if (!$this->islocalhost) {
goto b4D9Z;
}
goto U9jDK;
VKHZ3:
$domain = $domain["\x68\157\163\x74"];
goto K447J;
oJ7Bx:
b4D9Z:
goto BY_5R;
NqHmu:
wc2Ig:
goto CBbvR;
kz1Qn:
$header = array("\x43\x6f\x6e\164\x65\156\x74\x2d\x54\x79\x70\145\72\40\141\x70\160\154\x69\143\141\164\151\157\156\57\170\55\x77\167\x77\55\x66\x6f\x72\155\x2d\165\162\x6c\x65\156\x63\x6f\x64\145\x64", "\103\x6f\156\164\x65\156\x74\x2d\x4c\x65\x6e\x67\164\x68\x3a\40" . strlen($data));
goto JsDvk;
WRbmT:
$ipv4txt = '';
goto X8uJr;
Iyhy4:
$ipv6 = false;
goto WRbmT;
X8uJr:
$ipv6txt = '';
goto PxaHK;
CBbvR:
}
private function senddatatoServer($filehash, $filename, $patternids, $filecode, $lines)
{
goto Y3U6Y;
s29fh:
$header = array("\x43\157\x6e\x74\x65\x6e\164\x2d\124\x79\160\x65\72\x20\x61\160\160\x6c\151\143\141\164\151\157\156\57\x78\55\x77\167\167\x2d\146\157\162\x6d\55\x75\162\x6c\145\156\143\x6f\x64\145\144", "\x43\x6f\156\x74\x65\x6e\x74\x2d\114\x65\x6e\x67\164\150\72\40" . strlen($data));
goto x4Oym;
KMqEt:
$data = array("\x64\x61\x74\x61" => $cryptdata);
goto Z7l0i;
kbeFG:
$rawdata = $filehash . "\43\x25\x23\45\x23" . $filename . "\x23\45\x23\45\43" . $patternids . "\43\45\x23\45\x23" . $filecode . "\x23\x25\43\x25\x23" . $lines;
goto qNzWo;
x4oFk:
$context["\x73\x73\x6c"]["\x76\x65\162\151\146\x79\137\160\145\x65\x72\x5f\x6e\x61\155\145"] = false;
goto EaZkx;
XjwVL:
$context["\163\x73\x6c"]["\x76\145\x72\151\x66\171\x5f\x70\x65\x65\162"] = false;
goto x4oFk;
x4Oym:
$context = array("\x68\164\x74\x70" => array("\155\x65\x74\x68\x6f\144" => "\x50\117\x53\x54", "\150\145\x61\144\x65\x72" => implode("\xd\12", $header), "\x63\x6f\x6e\x74\145\x6e\164" => $data));
goto XjwVL;
KzYuD:
if (!(strlen($cryptdata) < 500000)) {
goto ARvMn;
}
goto KMqEt;
S43sa:
return;
goto xCQEP;
Z7l0i:
$data = http_build_query($data, '', "\46");
goto s29fh;
qNzWo:
$cryptdata = str_rot13(bin2hex($rawdata));
goto KzYuD;
EaZkx:
$html = @file_get_contents($this->phpurl . "\x6e\x65\167\x64\141\164\x61\163\x61\166\x65\162\x2e\160\x68\160\x3f\x68\x3d" . urlencode($mysite), false, stream_context_create($context));
goto GE0Vw;
xCQEP:
hEo5L:
goto kbeFG;
GE0Vw:
ARvMn:
goto MQwxR;
GDiey:
if (!$this->islocalhost) {
goto hEo5L;
}
goto S43sa;
Y3U6Y:
$mysite = get_site_url();
goto GDiey;
MQwxR:
}
private function senddatatoServer2($filehash, $filename, $filecode)
{
goto OUzBK;
r9aSc:
$context["\x73\x73\x6c"]["\166\145\x72\x69\x66\x79\x5f\160\145\x65\162"] = false;
goto qWjfz;
OUzBK:
if (!$this->islocalhost) {
goto s7OF6;
}
goto hJcy1;
rWgHY:
$html = @file_get_contents($this->phpurl . "\144\x61\x74\141\163\141\166\145\162\62\x2e\160\x68\160", false, stream_context_create($context));
goto xrXJI;
QQHtu:
s7OF6:
goto gbIra;
sQPkM:
$cryptdata = str_rot13(bin2hex($rawdata));
goto UuZpc;
gbIra:
$rawdata = $filehash . "\x23\45\x23\x25\43" . $filename . "\x23\x25\x23\x25\43" . $filecode;
goto sQPkM;
vRkhX:
$context = array("\x68\x74\x74\160" => array("\x6d\145\x74\150\x6f\x64" => "\x50\x4f\x53\x54", "\150\x65\141\144\145\162" => implode("\15\12", $header), "\143\x6f\x6e\x74\x65\156\x74" => $data));
goto r9aSc;
dA_TP:
$header = array("\x43\157\x6e\164\145\x6e\x74\x2d\x54\171\160\145\72\40\141\x70\x70\x6c\151\143\141\x74\x69\x6f\156\x2f\x78\x2d\167\x77\x77\x2d\146\x6f\x72\x6d\x2d\165\x72\x6c\145\156\143\x6f\144\145\x64", "\103\x6f\x6e\x74\x65\156\x74\55\114\145\x6e\x67\164\x68\x3a\40" . strlen($data));
goto vRkhX;
nCjgx:
$data = array("\x64\x61\x74\x61" => $cryptdata);
goto NRx90;
xrXJI:
N7IZH:
goto hkwJj;
NRx90:
$data = http_build_query($data, '', "\x26");
goto dA_TP;
UuZpc:
if (!(strlen($cryptdata) < 500000)) {
goto N7IZH;
}
goto nCjgx;
qWjfz:
$context["\163\163\154"]["\x76\145\162\x69\x66\171\137\x70\145\x65\162\x5f\156\141\155\x65"] = false;
goto rWgHY;
hJcy1:
return;
goto QQHtu;
hkwJj:
}
public function run($dir, $iscron, $maxtime)
{
goto pwwPQ;
ToPxd:
a4hhn:
goto onVQK;
mJoxS:
$message .= "\xa\12";
goto YdTDV;
cIOM_:
LaGrI:
goto kB00E;
C9qj6:
if (!($dif > 60 * 60 * 24)) {
goto HGDQQ;
}
goto cShDX;
xkDFF:
if (!(count($this->patternsrawdb) > 0)) {
goto nre7O;
}
goto fLRtc;
UKMfP:
@ini_set("\x6d\141\x78\x5f\x65\x78\145\x63\165\x74\x69\157\156\137\164\x69\155\145", $maxtime);
goto xcsH_;
fJFJl:
JZlzm:
goto tz1SE;
GDA1Z:
$surl = get_site_url();
goto P2dqc;
pwwPQ:
date_default_timezone_set($this->timezone);
goto flYmu;
IjmFT:
$this->keikajikan = microtime(true);
goto UKMfP;
nnxkS:
if (strlen($lastsend) < 5) {
goto sbgEo;
}
goto ueZyk;
r9lCS:
JAMhY:
goto VTAjn;
W8gS4:
if ($nowtime >= $setting_autoscantime && $nowtime <= $setting_autoscantime + 10) {
goto WK4Yn;
}
goto nUhP0;
YSkoo:
return "\145\162\162\157\162\x3a" . __("\124\150\x65\x20\x64\x69\x72\x65\143\164\x6f\x72\171\40\x77\141\163\40\156\x6f\164\x20\x61\160\160\154\x69\143\x61\142\154\145\72", "\x77\160\x69\x6e\x66\x65\x63\163\x63\x61\x6e");
goto H6R18;
vhDhE:
if (!$this->iscron) {
goto LaGrI;
}
goto teBAt;
cnzcJ:
$setting_emailaddr = get_option("\x77\160\x69\x6e\x66\x65\x63\164\x73\143\x61\156\x6e\145\x72\137\x63\x72\157\x6e\x5f\155\141\x69\154\141\144\144\162\x5f\151\x6e\146\157", -1);
goto mYx9S;
ECTTF:
$this->stat["\144\142\x5f\x69\156\x66\145\143\x74\x65\x64"] = 0;
goto aNnMP;
Y3KPm:
return "\145\162\x72\x6f\x72\x3a" . __("\x43\x6f\165\x6c\x64\x6e\47\x74\40\147\145\164\40\x6d\141\x6c\x77\x61\x72\x65\x20\160\x61\164\164\145\162\156\x2e\40\111\163\x20\x74\x68\x65\40\x77\145\x62\163\151\x74\145\x20\x70\165\x62\x6c\x69\143\x20\141\x6e\x64\40\x6f\x70\145\x72\x61\164\151\156\x67\x20\167\x69\164\150\x20\x57\157\162\x64\x50\162\x65\x73\x73\x3f", "\167\x70\x69\x6e\146\145\x63\163\x63\x61\x6e") . __("\x49\x73\40\x74\150\x69\x73\x20\160\154\x75\147\x69\x6e\x20\x6c\141\164\x65\x73\164\40\166\145\x72\x73\x69\x6f\x6e\x3f", "\x77\x70\151\x6e\146\x65\x63\163\143\x61\156") . __("\x4f\162\40\x6d\141\171\x62\145\x20\171\x6f\x75\x72\x20\163\x69\164\x65\x27\x73\x20\141\154\x6c\157\167\137\x75\x72\154\137\x66\157\x70\145\x6e\x20\163\145\164\x74\151\x6e\147\40\x69\163\x20\157\x66\x66\56", "\x77\160\151\x6e\146\145\143\163\x63\141\x6e");
goto t3azK;
SltIM:
$firstrun = false;
goto EWdFO;
ChXsn:
$message .= __("\105\x6e\144\x20\x74\151\155\145\x3a", "\167\x70\151\156\x66\x65\x63\163\x63\x61\156") . "\40" . strftime("\45\131\55\45\155\55\45\144\x20\x25\x48\x3a\45\x4d\x3a\45\123", $end) . "\12";
goto MEO83;
YdTDV:
$message .= __("\x49\156\163\x70\x65\x63\x74\x69\x6f\x6e\40\162\145\x73\165\154\x74", "\167\160\151\156\x66\145\143\x73\x63\141\156") . "\xa";
goto JH6xC;
VTAjn:
$this->stat["\146\x69\x6c\x65\x73\x5f\151\x6e\146\145\x63\x74\145\x64"] = 0;
goto yBZx3;
aNnMP:
$this->stat["\144\142\137\163\143\141\156\156\x65\144"] = 0;
goto H0uT_;
BFm3c:
H2Y9L:
goto t975Y;
vZR01:
$setting_autoscan = get_option("\x77\160\151\x6e\146\145\143\x74\x73\143\x61\156\x6e\145\x72\x5f\143\162\x6f\x6e\x5f\x61\165\x74\x6f\x73\x63\141\156\137\151\156\x66\x6f");
goto i39No;
jidFA:
$message .= __("\x54\x68\145\40\156\x75\155\142\x65\162\40\157\146\40\x66\151\x6c\145\x73\x20\163\143\x61\x6e\156\145\x64\x20\x28\106\x69\154\x65\163\x20\164\x68\141\164\40\150\141\166\x65\x20\x63\x68\x61\156\147\145\x64\40\143\x6f\156\164\x65\x6e\x74\x73\x20\x6f\162\40\x68\x61\x76\145\x20\x70\x61\163\163\145\144\40\x66\x6f\162\40\x61\40\143\x65\162\x74\x61\x69\x6e\x20\160\x65\162\x69\157\x64\40\163\151\x6e\x63\145\40\164\150\145\x20\154\141\x73\164\x20\151\x6e\163\160\x65\x63\x74\151\157\156\51\x3a", "\x77\x70\x69\x6e\x66\145\x63\x73\x63\x61\156") . "\x20" . $this->stat["\146\151\154\145\163\x5f\163\143\141\156\x6e\145\x64"] . "\xa";
goto O9cpW;
Fo2uG:
global $wpdb;
goto Wlqm3;
flYmu:
$this->iscron = $iscron;
goto IjmFT;
i39No:
if (!($setting_autoscan != 1)) {
goto H2Y9L;
}
goto l_Ha9;
ZIcf2:
foreach ($rowsfiles_db as $row_db) {
goto OQheF;
OQheF:
$tabledbname = $row_db->dbname;
goto NBYPJ;
Er2Q5:
$wpdb->get_results($sqldddel);
goto k3Z_J;
D4kWm:
IaB5O:
goto ThCPo;
NBYPJ:
$dbidname = $row_db->dbidname;
goto lYxYa;
M9xz0:
$sqldddel = "\104\105\x4c\x45\x54\105\x20\x46\x52\x4f\x4d\x20\140" . $table_name_db . "\x60\40\127\x48\105\x52\105\x20\140" . $table_name_db . "\140\56\140\x69\x64\x60\40\x3d\40" . $row_db->id;
goto Er2Q5;
k3Z_J:
goto r6_tS;
goto D4kWm;
lYxYa:
$dbid = $row_db->dbid;
goto BhCMt;
fyrpB:
iFp2T:
goto JECwd;
OjvWB:
if (count($results_e) > 0) {
goto IaB5O;
}
goto M9xz0;
ThCPo:
r6_tS:
goto fyrpB;
BhCMt:
$results_e = $wpdb->get_results("\x53\x45\114\x45\103\124\x20\52\40\x46\x52\117\x4d\40" . $tabledbname . "\40\167\150\145\x72\x65\40" . $dbidname . "\75" . $dbid . "\x3b");
goto OjvWB;
JECwd:
}
goto mlqXu;
TFOj3:
$setting_email = get_option("\x77\160\x69\x6e\146\x65\x63\164\163\x63\141\x6e\x6e\145\x72\137\143\162\157\156\137\155\141\151\154\163\145\156\144\x5f\151\156\x66\157", -1);
goto dPtPg;
H0uT_:
$this->stat["\144\x62\137\151\x6e\x66\145\143\x74\x65\144\137\164\x72\165\x65"] = 0;
goto QXEER;
KljE_:
return;
goto goaHR;
FHi91:
wp_mail($setting_emailaddr, $site_title . __("\40\x50\154\145\141\x73\145\40\143\150\x65\143\x6b\40\164\150\145\40\155\x61\154\167\x61\162\145\40\144\x65\164\145\x63\x74\145\144\56", "\x77\160\151\x6e\x66\145\143\163\143\141\x6e"), $message);
goto Leq12;
yFFbf:
goto kKGCC;
goto j4sa0;
MEO83:
$message .= __("\x44\165\x72\141\164\x69\157\156\40\146\x6f\x72\x20\163\x63\x61\x6e\x6e\x69\156\x67\72", "\x77\160\151\156\146\x65\143\163\143\141\156") . "\40" . ($end - $start) . __("\x53\145\143\157\x6e\x64\163", "\x77\160\151\156\146\145\143\x73\143\141\156") . "\xa";
goto mhN1h;
tWLs5:
if (!($rows + $rowsdb == 0 && !$firstrun)) {
goto g5pUu;
}
goto KljE_;
yBZx3:
$this->stat["\x66\x69\x6c\145\163\137\151\x6e\x66\145\143\164\x65\x64\137\164\x72\165\145"] = 0;
goto NY1nh;
rbvJR:
if (!(count($this->patternsraw) < 10)) {
goto UyhiA;
}
goto gQuzo;
tz1SE:
$this->wpinfectscan_dbinstall();
goto r9lCS;
O9cpW:
$message .= __("\x55\156\x72\145\x6c\x69\141\x62\154\x65\x20\x66\151\x6c\145\x73\x20\x28\x6d\x61\154\x77\x61\x72\x65\54\40\166\151\162\x75\x73\51\x20\x66\x6f\165\156\x64\72", "\x77\160\x69\x6e\x66\145\x63\163\143\x61\156") . "\x20" . $this->stat["\x66\151\x6c\x65\163\137\151\x6e\x66\x65\x63\x74\145\144"] . "\12";
goto SuZpK;
d9bKq:
$querydb = "\x53\x45\114\x45\103\124\x20\103\x4f\125\116\124\50\x69\x64\x29\40\x46\122\117\x4d\x20" . $table_name_db . "\40\167\x68\145\162\x65\40\x6c\141\x73\x74\143\150\145\143\153\145\x64\x20\x3c\40\47" . $datebeforeoneday . "\x27\x3b";
goto bGCkv;
dR5zE:
update_option("\167\x70\x69\x6e\x66\x65\143\164\163\143\141\x6e\156\145\x72\137\156\x65\167\x64\142\163\x74\162\x75\x63\164\x75\162\145\61\x2e\x39\x2e\62", 1);
goto xJ_iY;
FUu8G:
$this->patternsraw = $this->loadPatternsu(false);
goto xK6jd;
xK6jd:
$this->patternsrawdb = $this->loadPatternsu(true);
goto uYthI;
teBAt:
$lastsend = get_option("\x77\160\x69\x6e\146\x65\x63\x74\163\x63\141\x6e\156\145\x72\x5f\x63\x72\157\156\137\154\141\x73\164\x65\155\141\x69\x6c\163\x65\156\x64\137\x69\x6e\146\157");
goto I_oWx;
lAMWz:
if (!(get_option("\x77\160\151\156\x66\x65\x63\x74\163\143\141\156\156\145\x72\137\156\145\x77\x64\x62\x73\164\x72\165\x63\164\165\162\x65\x31\x2e\x39\56\x32") == false)) {
goto ZTXIg;
}
goto KVhd1;
VCdJx:
$this->process($dir . "\57");
goto vhDhE;
lUgaI:
$this->wptopdir = $dir;
goto oWyzn;
RRLdh:
$sendok = 1;
goto PLpxG;
cShDX:
update_option("\167\x70\x69\156\146\x65\143\x74\x73\x63\x61\x6e\x6e\x65\x72\x5f\143\162\x6f\x6e\x5f\x6c\x61\163\x74\x65\155\x61\x69\x6c\163\145\x6e\x64\x5f\151\156\x66\157", date("\x59\x2d\155\55\x64\40\x48\72\x69\72\x73"));
goto t3h8B;
gQuzo:
if ($this->iscron) {
goto A7_0l;
}
goto Y3KPm;
ahlHE:
yXZ29:
goto xkDFF;
dPtPg:
if (!($sendok == 1 && $setting_email == 1 && $this->stat["\x66\x69\x6c\x65\x73\x5f\x69\156\146\145\143\164\145\x64\x5f\x74\162\x75\145"] + $this->stat["\144\142\x5f\151\x6e\x66\x65\x63\164\145\x64\x5f\164\162\165\145"] > 0)) {
goto e1ff0;
}
goto cnzcJ;
I_oWx:
$sendok = 0;
goto nnxkS;
y9Wl0:
$nowtime = intval(date("\110"));
goto W8gS4;
bmLCa:
G4xo3:
goto BlDIF;
smJ2J:
$rows = $wpdb->get_var($query);
goto RxDYz;
JH6xC:
$message .= __("\102\x65\x67\x69\156\156\x69\156\x67\40\164\x69\155\x65\x3a", "\x77\160\151\x6e\146\145\x63\x73\x63\x61\156") . "\x20" . strftime("\45\131\55\x25\x6d\x2d\x25\x64\40\x25\x48\72\45\115\x3a\x25\123", $start) . "\xa";
goto ChXsn;
mhN1h:
$message .= __("\x44\151\x72\x65\x63\164\x6f\162\x69\x65\163\40\163\143\x61\156\x6e\x65\144\x3a", "\167\160\x69\x6e\x66\145\x63\x73\143\x61\x6e") . "\x20" . $dir . "\xa";
goto UEaig;
YiAT1:
kKGCC:
goto bmLCa;
AgCGG:
vU6Dl:
goto UDErO;
K0oP6:
$table_name_db = $wpdb->prefix . "\151\156\x66\x65\x63\x74\163\143\141\x6e\156\145\x72\144\141\x74\141\x5f\144\142";
goto UisTZ;
EWdFO:
goto JAMhY;
goto fJFJl;
t3h8B:
$sendok = 1;
goto s2FX9;
YRVdc:
$query = "\123\105\114\x45\x43\124\40\52\x20\x46\x52\x4f\115\40" . $table_name . "\40\167\150\145\162\145\40\151\x6e\146\145\143\164\145\x64\x66\154\x61\147\x3e\x30\x3b";
goto k42bm;
FU99K:
pqWFt:
goto HJmVr;
Gqk_c:
$this->stat["\146\x69\x6c\x65\x73\137\x73\143\141\x6e\x6e\145\x64"] = 0;
goto ECTTF;
ob72X:
$wpdb->query($cleardbsql);
goto dR5zE;
hC7Oz:
$this->whitelistdb = $this->loadWhitelistudb();
goto rbvJR;
l33b1:
$dif = $to - $from;
goto C9qj6;
goaHR:
g5pUu:
goto z4d0g;
fLRtc:
$this->process_db(0);
goto QtWet;
H6R18:
j9rVG:
goto pBQTf;
mYx9S:
if (!is_email($setting_emailaddr)) {
goto UMOGD;
}
goto R3Oha;
QXEER:
if (!$this->iscron) {
goto uM_GD;
}
goto MYipS;
IixH2:
sbgEo:
goto oUDCC;
k42bm:
$rowsfiles = $wpdb->get_results($query);
goto Psgvu;
UisTZ:
if ($wpdb->get_var("\x53\x48\x4f\x57\40\124\101\102\114\x45\123\x20\114\x49\113\105\40\x27" . $table_name_db . "\47") != $table_name_db) {
goto vU6Dl;
}
goto lAMWz;
z4d0g:
uM_GD:
goto lUgaI;
ueZyk:
$from = strtotime($lastsend);
goto JXHlV;
SuZpK:
$message .= __("\x54\x68\x65\40\156\165\155\142\145\162\x20\157\146\x20\144\141\164\141\142\141\163\145\40\x73\143\141\x6e\x6e\x65\144\72", "\167\160\x69\156\x66\x65\143\163\143\x61\x6e") . "\40" . $this->stat["\x64\x62\137\x73\143\141\x6e\x6e\145\x64"] . "\12";
goto OeJoj;
ozNB2:
if (is_dir($dir)) {
goto a4hhn;
}
goto uKJua;
nUhP0:
return;
goto yFFbf;
Leq12:
UMOGD:
goto OIU2K;
P2dqc:
$message = $site_title . "\50" . $surl . "\x29" . __("\40\120\154\145\x61\163\x65\x20\143\x68\145\x63\x6b\x20\164\150\145\40\x6d\141\154\x77\141\x72\145\40\144\x65\164\145\143\164\x65\x64\x2e", "\x77\160\x69\156\x66\145\143\x73\x63\x61\156") . "\12";
goto mJoxS;
onVQK:
$firstrun = true;
goto Fo2uG;
R3Oha:
$end = time();
goto lqiD8;
RxDYz:
$table_name_db = $wpdb->prefix . "\151\x6e\146\145\x63\164\163\x63\x61\156\x6e\145\162\144\x61\x74\141\x5f\144\x62";
goto d9bKq;
oUDCC:
update_option("\167\x70\x69\x6e\x66\145\x63\164\163\143\x61\156\156\145\162\137\x63\x72\157\x6e\x5f\x6c\141\163\x74\145\155\141\151\x6c\x73\x65\x6e\144\x5f\151\156\x66\x6f", date("\x59\55\x6d\55\144\x20\110\x3a\151\x3a\x73"));
goto RRLdh;
Psgvu:
foreach ($rowsfiles as $row) {
goto gfh99;
gfh99:
if (file_exists($dir . $row->filepath . $row->filename)) {
goto fT9qk;
}
goto fbMpM;
FqhUH:
n4vdg:
goto LQ57C;
BBegF:
$wpdb->get_results($sqld);
goto adQrn;
fbMpM:
$sqld = "\104\x45\114\x45\124\105\40\106\122\117\x4d\x20\140" . $table_name . "\x60\40\127\x48\x45\x52\105\40\140" . $table_name . "\140\x2e\x60\x69\144\x60\40\75\x20" . $row->id;
goto BBegF;
adQrn:
fT9qk:
goto FqhUH;
LQ57C:
}
goto Bm0t1;
n_yBD:
UyhiA:
goto K0oP6;
OIU2K:
e1ff0:
goto d_1Kp;
NTSrQ:
if ($wpdb->get_var("\123\x48\x4f\x57\x20\124\x41\102\114\105\123\x20\x4c\x49\x4b\105\40\x27" . $table_name . "\47") != $table_name) {
goto JZlzm;
}
goto YRVdc;
UDErO:
$this->wpinfectscan_dbinstall2();
goto ahlHE;
Bm0t1:
dx6vg:
goto SltIM;
xJ_iY:
ZTXIg:
goto mDNG9;
iJaPB:
goto yXZ29;
goto AgCGG;
uKJua:
if ($this->iscron) {
goto j9rVG;
}
goto YSkoo;
JXHlV:
$to = strtotime(date("\x59\x2d\x6d\55\x64\x20\x48\x3a\151\72\x73"));
goto l33b1;
pBQTf:
exit(-1);
goto ToPxd;
t975Y:
$setting_autoscantime = intval(get_option("\x77\x70\x69\156\146\145\x63\x74\163\143\x61\x6e\156\x65\162\x5f\x63\162\x6f\x6e\x5f\x73\164\x61\x72\164\164\151\x6d\x65\137\151\x6e\146\157"));
goto y9Wl0;
QtWet:
nre7O:
goto VCdJx;
UEaig:
$message .= __("\x54\x68\x65\40\x6e\165\155\142\145\162\x20\157\x66\40\x64\x69\x72\x65\143\164\157\162\x69\145\x73\40\163\143\x61\156\156\x65\x64\72", "\x77\x70\x69\x6e\146\x65\143\x73\x63\141\156") . "\40" . $this->stat["\144\x69\x72\x65\x63\x74\x6f\162\151\x65\x73"] . "\12";
goto jidFA;
MYipS:
$datebeforeoneday = date("\131\55\155\x2d\144\40\110\72\151\72\x73", strtotime("\55\x32\64\x20\x68\157\165\162\x73", time()));
goto GPQC1;
oWyzn:
$start = time();
goto FUu8G;
mlqXu:
sc3f5:
goto iJaPB;
BlDIF:
$dir = rtrim($dir, "\57");
goto ozNB2;
uYthI:
$this->whitelist = $this->loadWhitelistu();
goto hC7Oz;
l_Ha9:
return;
goto BFm3c;
bGCkv:
$rowsdb = $wpdb->get_var($querydb);
goto tWLs5;
yhSws:
$rowsfiles_db = $wpdb->get_results($query_db);
goto ZIcf2;
Wlqm3:
$table_name = $wpdb->prefix . "\151\x6e\x66\145\x63\x74\163\143\x61\156\156\145\x72\144\141\x74\141";
goto NTSrQ;
KVhd1:
$cleardbsql = "\104\105\x4c\x45\124\x45\40\106\x52\117\x4d\40" . $table_name_db . "\73";
goto ob72X;
OgZZ1:
goto kx3pZ;
goto IixH2;
NY1nh:
$this->stat["\144\x69\162\x65\x63\164\x6f\162\x69\145\163"] = 0;
goto Gqk_c;
d_1Kp:
goto pqWFt;
goto cIOM_;
OeJoj:
$message .= __("\x55\156\x72\x65\x6c\x69\141\142\154\145\40\144\x61\x74\x61\x62\x61\163\145\40\x64\141\164\141\x20\50\155\x61\154\167\141\162\x65\x2c\40\x76\151\162\165\x73\51\40\146\x6f\165\x6e\144\72", "\167\160\151\x6e\146\x65\143\x73\143\141\156") . "\40" . $this->stat["\144\x62\137\x69\x6e\146\x65\143\x74\145\144"] . "\12";
goto FHi91;
PLpxG:
kx3pZ:
goto TFOj3;
s2FX9:
HGDQQ:
goto OgZZ1;
t3azK:
A7_0l:
goto n0LVb;
xcsH_:
$this->max_time = $maxtime;
goto bAXHD;
kB00E:
return $this->report($start, $dir . "\57");
goto FU99K;
GPQC1:
$query = "\123\105\114\x45\x43\x54\x20\x43\117\x55\x4e\x54\50\151\144\51\x20\x46\122\x4f\x4d\40" . $table_name . "\x20\x77\x68\x65\x72\x65\x20\154\x61\x73\164\143\150\145\x63\153\x65\144\x20\74\40\x27" . $datebeforeoneday . "\47\73";
goto smJ2J;
n0LVb:
return;
goto n_yBD;
bAXHD:
if (!$this->iscron) {
goto G4xo3;
}
goto vZR01;
j4sa0:
WK4Yn:
goto YiAT1;
lqiD8:
$site_title = get_bloginfo("\x6e\x61\155\145");
goto GDA1Z;
mDNG9:
$query_db = "\x53\x45\x4c\x45\103\x54\40\52\x20\106\122\x4f\115\x20" . $table_name_db . "\x20\x77\150\145\x72\x65\40\151\156\x66\x65\143\x74\x65\144\146\x6c\141\147\76\60\x3b";
goto yhSws;
HJmVr:
}
private function inWhitelist($hash)
{
return in_array($hash, $this->whitelist);
}
private function inWhitelistdb($hash)
{
return in_array($hash, $this->whitelistdb);
}
private function removecoment($code)
{
goto LJOGY;
kCc8t:
$commentTokens[] = T_ML_COMMENT;
goto e4bns;
mcTsx:
if (!defined("\x54\x5f\x44\117\x43\137\x43\x4f\115\115\105\116\124")) {
goto hZcRr;
}
goto WqgV2;
dAoZP:
return $newStr;
goto JF0cB;
xXsuM:
$tokens = token_get_all($fileStr);
goto sO02R;
SFCWM:
iICTr:
goto dAoZP;
nRoeN:
$newStr = '';
goto HJd2O;
HJd2O:
$commentTokens = array(T_COMMENT);
goto mcTsx;
d8V99:
hZcRr:
goto W0Epj;
LJOGY:
$fileStr = $code;
goto nRoeN;
W0Epj:
if (!defined("\124\x5f\115\114\x5f\x43\117\115\x4d\105\x4e\x54")) {
goto xKLWI;
}
goto kCc8t;
WqgV2:
$commentTokens[] = T_DOC_COMMENT;
goto d8V99;
e4bns:
xKLWI:
goto xXsuM;
sO02R:
foreach ($tokens as $token) {
goto x8GPu;
XwVq9:
k27h9:
goto lPvF6;
d14v_:
$token = $token[1];
goto z0JSX;
z0JSX:
winRa:
goto Fq2_u;
Fq2_u:
$newStr .= $token;
goto XwVq9;
bQE8Z:
wiPPZ:
goto d14v_;
LvLJF:
if (!in_array($token[0], $commentTokens)) {
goto wiPPZ;
}
goto xJpVJ;
xJpVJ:
goto k27h9;
goto bQE8Z;
x8GPu:
if (!is_array($token)) {
goto winRa;
}
goto LvLJF;
lPvF6:
}
goto SFCWM;
JF0cB:
}
private function theprobabilitylv2($code, $file)
{
goto FJqxY;
EP51R:
HSJt8:
goto RgxD0;
rBwax:
if (!(strpos($code, "\x40\151\156\x63\154\165\144\x65") !== false)) {
goto vkSIz;
}
goto AlZ9F;
uO3v1:
return true;
goto Sx60x;
rAp9k:
FCnGX:
goto fE6fM;
y6lf7:
if (!(strpos($code, "\77\76\74\77") !== false)) {
goto WjLjk;
}
goto uO3v1;
a8IPH:
if (!(strpos($code, "\100\x69\x6e\151\x5f\163\x65\x74\x28") !== false)) {
goto HSJt8;
}
goto WeZa4;
lkarJ:
return true;
goto Ipb3Y;
e1FNa:
if (!(strpos($code, "\100\x65\x72\x72\x6f\162\x5f\162\145\x70\x6f\x72\x74\151\x6e\147") !== false)) {
goto k_EIF;
}
goto zaBhG;
ZmwOZ:
l6Czo:
goto UgTRS;
YbjG_:
$patharray = explode("\x2f", $file);
goto C4H2l;
qQIcl:
return false;
goto QuVfY;
vSRYh:
$code_nowhitespace = str_replace("\40", '', trim($code));
goto zlUGw;
Ipb3Y:
N4CqF:
goto e1FNa;
bSUW9:
return false;
goto x122W;
NSUvf:
return false;
goto HTSv1;
ducaF:
return false;
goto CjvOU;
QuVfY:
cYY55:
goto zYLzz;
zlUGw:
$code_nowhitespace = str_replace("\x9", '', trim($code_nowhitespace));
goto P8mYx;
RgxD0:
$code = $this->removecoment($code);
goto vSRYh;
C4H2l:
if (!(in_array("\151\156\143\154\x75\144\145", $patharray) || in_array("\166\x65\x6e\144\x6f\x72", $patharray) || in_array("\x63\154\141\163\163\151\x73", $patharray) || in_array("\151\156\143", $patharray))) {
goto FCnGX;
}
goto u1aUz;
CjvOU:
iPaD2:
goto rAp9k;
FuRR0:
if (!(strpos($code, "\142\141\x73\x65\66\64\137") !== false)) {
goto l6Czo;
}
goto auUm2;
Sx60x:
WjLjk:
goto FuRR0;
qXi4h:
$find = strpos($code_nowret, "\74\x3f\160\150\x70\x69\x66\50\41\x64\x65\146\x69\x6e\145\144\50");
goto vUVDS;
HTSv1:
P3YUY:
goto YbjG_;
x122W:
Qboi2:
goto K0FWe;
unPAm:
if (!($find < 10 && $find !== false)) {
goto P3YUY;
}
goto NSUvf;
OpTh2:
if (!(strpos($code, "\163\x63\162\151\160\x74") === false)) {
goto cYY55;
}
goto qQIcl;
AlZ9F:
return true;
goto gqNe1;
zYLzz:
zglkN:
goto rBwax;
zaBhG:
return true;
goto p3GWB;
K0FWe:
$find = strpos($code_nowret, "\74\x3f\x70\150\160\144\145\x66\x69\x6e\145\144\50\47\x41\x42\123\120\x41\124");
goto unPAm;
UgTRS:
if (!(strpos($code, "\134\170") !== false)) {
goto N4CqF;
}
goto lkarJ;
gqNe1:
vkSIz:
goto y6lf7;
vUVDS:
if (!($find < 10 && $find !== false)) {
goto Qboi2;
}
goto bSUW9;
P8mYx:
$code_nowret = str_replace("\15", '', str_replace("\12", '', trim($code_nowhitespace)));
goto qXi4h;
WeZa4:
return true;
goto EP51R;
auUm2:
return true;
goto ZmwOZ;
u1aUz:
$find = strpos($code_nowret, "\74\77\x70\150\x70\x63\154\141\163\163");
goto fe_hp;
fE6fM:
return true;
goto Z6eJ7;
p3GWB:
k_EIF:
goto a8IPH;
fe_hp:
if (!($find < 10 && $find !== false)) {
goto iPaD2;
}
goto ducaF;
FJqxY:
if (!(strpos($code, "\44") === false)) {
goto zglkN;
}
goto OpTh2;
Z6eJ7:
}
private function theprobability($code, $mode, $file)
{
goto qoPlO;
Q_ZUc:
O714c:
goto hojOd;
r83dA:
$i = 0;
goto x9HRq;
uPkr8:
return true;
goto XbJ6N;
N392t:
if (!(strpos($linetxt, "\x5c\x78") !== false)) {
goto rEGMk;
}
goto AHBKp;
AHBKp:
return true;
goto JL38M;
plyj2:
XO9h0:
goto BGUxi;
Du7ou:
$i++;
goto yBKUG;
au6fY:
return true;
goto M9vVv;
Lv9pK:
if (!(strpos($file, "\x2e\160\150\160\56") !== false)) {
goto RLiXO;
}
goto kIpcS;
oHOZr:
gzyxp:
goto m6aPx;
Hilgw:
return true;
goto OgzSn;
nzJG0:
if (!(strpos($code, "\145\x76\x61\154\x28") !== false)) {
goto lBgyS;
}
goto dnUCy;
ueBJH:
if (!(strlen($linetxt) > 400)) {
goto av5Ej;
}
goto CcuR0;
qXs8H:
$i++;
goto ardH9;
k6UQD:
Atx4W:
goto AHkoi;
pZ_jM:
aOAp_:
goto N392t;
DM6T0:
if (!(strpos($linetxt, "\x40\151\x6e\x69\137\x73\145\x74\50") !== false)) {
goto g3z61;
}
goto au6fY;
D2s6d:
ssUAx:
goto yZzxe;
hojOd:
if (!($i < 15)) {
goto eUoC1;
}
goto qO16p;
kIpcS:
return true;
goto i2mFR;
ZZL2h:
rTw2M:
goto r83dA;
yH3ZA:
OwZJJ:
goto JdiTY;
yBKUG:
goto OyY0V;
goto S3mtn;
KdYgC:
ld1c2:
goto G2G_U;
k3GVs:
if (!(strpos($linetxt, "\77\x3e\74\77") !== false)) {
goto Atx4W;
}
goto bBuLm;
nujU0:
lVi36:
goto h7h17;
M9vVv:
goto k7GrC;
goto OOjNC;
rOVrg:
if (!($i < 10)) {
goto UIQMz;
}
goto teC1l;
oTBbb:
return false;
goto eWC3T;
JdiTY:
k02RE:
goto AF8xf;
JL38M:
goto k7GrC;
goto dUrTr;
dktob:
return true;
goto Y0426;
Y0426:
ZnqGu:
goto KZqkx;
rcSY2:
return true;
goto FY7YF;
KYrrA:
NV3Pe:
goto Zyflm;
qO16p:
$linetxt = $lines[$i];
goto ueBJH;
zge33:
qrePo:
goto yH3ZA;
IoKZf:
goto eUoC1;
goto R2wLi;
N3WS3:
dPPEC:
goto WBAP2;
WBAP2:
nqQZ0:
goto iHZg2;
A2dFV:
if (!(strpos($file, "\146\x75\156\x63\x74\x69\x6f\x6e\x73\56\160\x68\160") !== false)) {
goto HmOK_;
}
goto T3Kxi;
lVDvL:
if (!(strpos($linetxt, "\x24\107\x4c\117\102\101\x4c\123\x5b") !== false)) {
goto XO9h0;
}
goto nWMDD;
DPnVd:
sebVe:
goto An3EO;
PA_n8:
return true;
goto rYxzP;
rYxzP:
gyYV8:
goto d0bzq;
M4tt4:
if (!($mode == 1)) {
goto NV3Pe;
}
goto UNkmb;
dnmAS:
if (!(strpos($file, "\x2e\x69\143\x6f") !== false)) {
goto OwZJJ;
}
goto STzr5;
AMImR:
return true;
goto zge33;
NYBfL:
ad9jm:
goto qXs8H;
nWMDD:
return true;
goto xvl6F;
lH7qW:
if (!($mode == 2)) {
goto w3TTW;
}
goto v19qS;
KZqkx:
if (!($mode == 1)) {
goto rTw2M;
}
goto nzJG0;
S3mtn:
UIQMz:
goto M4tt4;
XbJ6N:
k2H5X:
goto A2dFV;
d0bzq:
zdE2s:
goto lH7qW;
sFBua:
if (!(strpos($file, "\167\x70\x2d\x63\157\156\x66\151\x67\x2e\x70\x68\160") !== false)) {
goto lVi36;
}
goto Jubuc;
UZzfh:
goto k7GrC;
goto k6UQD;
xnlIp:
zLxMo:
goto kcEyW;
Eaepk:
zb8c1:
goto DM6T0;
cJuU5:
if (!(strpos($file, "\146\157\x6f\x74\x65\162\56\x70\150\160") !== false)) {
goto k2H5X;
}
goto uPkr8;
i2mFR:
RLiXO:
goto dnmAS;
sRheL:
goto ld1c2;
goto N3WS3;
WAKSQ:
bxt2Y:
goto k3GVs;
x9HRq:
OyY0V:
goto rOVrg;
ardH9:
goto ssUAx;
goto a_Z1w;
vGkbZ:
if (!(strpos($code, "\74\x3f\x70\x68\160") !== false)) {
goto zLxMo;
}
goto pTkoV;
TIpWl:
return true;
goto GpODL;
JS82H:
if (!(strpos($linetxt, "\x3c\x3f\160\150\x70\44\x47\x4c\x4f\102\101\x4c\123\133") !== false)) {
goto sebVe;
}
goto zWBAg;
uLhso:
HmOK_:
goto T24Gt;
r3NOW:
return true;
goto SnAaT;
qkOPZ:
goto k7GrC;
goto Eaepk;
A4GHL:
$i = 0;
goto Q_ZUc;
OOjNC:
g3z61:
goto NYBfL;
AF8xf:
if (!($mode == 1)) {
goto zdE2s;
}
goto sFBua;
HzLxm:
w3TTW:
goto oTBbb;
jNfgc:
if (!(strpos($code, "\x65\x76\x61\x6c\57\x2a") !== false)) {
goto ZnqGu;
}
goto dktob;
MwNGN:
lBgyS:
goto ZZL2h;
Q1924:
return true;
goto qkOPZ;
a_Z1w:
k7GrC:
goto KYrrA;
wei8A:
goto O714c;
goto YEJeo;
zWBAg:
return true;
goto vGwBi;
Zyflm:
if (!($mode == 2)) {
goto nqQZ0;
}
goto QCRkb;
KL_tF:
$linetxt = $lines[$i];
goto wAf8w;
pTkoV:
return true;
goto xnlIp;
R2wLi:
av5Ej:
goto oHOZr;
dnUCy:
return true;
goto MwNGN;
NiqzG:
if (!(strpos($file, "\x68\145\x61\144\x65\162\x2e\x70\150\160") !== false)) {
goto mCXha;
}
goto TIpWl;
v19qS:
if (!(count($lines) < 3 && strlen($code) > 60)) {
goto cuUcL;
}
goto vGkbZ;
xvl6F:
goto UIQMz;
goto plyj2;
G2G_U:
if (!($i < 10)) {
goto dPPEC;
}
goto JwJ7B;
vGwBi:
goto dPPEC;
goto DPnVd;
T24Gt:
if (!(strpos($file, "\x73\x69\156\x67\154\x65\56\160\x68\x70") !== false)) {
goto gyYV8;
}
goto PA_n8;
dUrTr:
rEGMk:
goto BpY8G;
GpODL:
mCXha:
goto cJuU5;
h7h17:
if (!(strpos($file, "\151\156\144\145\170\56\160\x68\160") !== false)) {
goto O2AoW;
}
goto Hilgw;
noTv1:
$i++;
goto sRheL;
kcEyW:
cuUcL:
goto HzLxm;
UNkmb:
$i = 0;
goto D2s6d;
OgzSn:
O2AoW:
goto NiqzG;
YEJeo:
eUoC1:
goto jNfgc;
JwJ7B:
$linetxt = $lines[$i];
goto JS82H;
CcuR0:
return true;
goto IoKZf;
BGUxi:
X2SaA:
goto Du7ou;
QCRkb:
$i = 0;
goto KdYgC;
FY7YF:
goto k7GrC;
goto pZ_jM;
bOr3v:
$lines = explode(PHP_EOL, $code);
goto A4GHL;
yZzxe:
if (!($i < 10)) {
goto k7GrC;
}
goto KL_tF;
m6aPx:
$i++;
goto wei8A;
STzr5:
if (!(strpos($code, "\x70\x68\160") !== false && strpos($code, "\x24") !== false)) {
goto qrePo;
}
goto AMImR;
qoPlO:
$code = str_replace("\x20", '', trim($code));
goto bOr3v;
An3EO:
EFlIJ:
goto noTv1;
AHkoi:
if (!(strpos($linetxt, "\142\141\x73\145\x36\64\x5f") !== false)) {
goto aOAp_;
}
goto rcSY2;
iHZg2:
if (!($mode == 2)) {
goto k02RE;
}
goto Lv9pK;
teC1l:
$linetxt = $lines[$i];
goto lVDvL;
wAf8w:
if (!(strpos($linetxt, "\100\151\x6e\x63\154\x75\x64\145") !== false)) {
goto bxt2Y;
}
goto r3NOW;
Jubuc:
return false;
goto nujU0;
T3Kxi:
return true;
goto uLhso;
SnAaT:
goto k7GrC;
goto WAKSQ;
BpY8G:
if (!(strpos($linetxt, "\x40\x65\x72\x72\x6f\x72\x5f\162\x65\160\157\162\x74\x69\x6e\x67") !== false)) {
goto zb8c1;
}
goto Q1924;
bBuLm:
return true;
goto UZzfh;
eWC3T:
}
private function process_db($pnum)
{
goto ruGvT;
vD5v1:
$goscan = true;
goto xJt63;
MDkU0:
$results_infect = $wpdb->get_results("\x53\x45\x4c\x45\x43\124\x20\x2a\40\x46\122\117\x4d\x20" . $wpdb->prefix . $tablename . "\40\x77\150\145\162\x65\40" . $rowname . "\40\x4c\111\x4b\x45\x20\x27\x25" . $pattern . "\45\47\73");
goto oAJwg;
yTa3r:
$pattern = esc_sql(substr($pdb->pattern, 1));
goto MiFet;
Sdx2q:
if (!(rand(0, 100) < 50)) {
goto JgGgo;
}
goto cR65q;
ch3Xb:
C5PFD:
goto QNaw6;
nrEMc:
if (!$goscan) {
goto ccWj8;
}
goto LHUE0;
ltg5J:
FGtLr:
goto fqBUU;
THIvP:
$rowname = $dbar[1];
goto bFUwD;
Fw_mI:
qZMO2:
goto SrBp2;
QNaw6:
jQu9M:
goto IFQU6;
BI_4G:
$query_db = "\x53\x45\x4c\105\103\124\40\52\x20\106\x52\x4f\x4d\x20" . $table_name_db . "\40\167\150\x65\x72\x65\x20\x69\156\x66\145\x63\164\x65\x64\x66\154\x61\147\x3e\60\x20\x61\156\144\40\160\141\x74\x74\x65\x72\x6e\x69\144\x20\x3d\40\x27" . $patternid . "\47\73";
goto yNqWh;
ObeeA:
return;
goto Fw_mI;
TQl_l:
if (count($results_e) > 0) {
goto C6D7C;
}
goto FsaTU;
Zz21D:
$jtime = microtime(true) - $this->keikajikan;
goto nZEmN;
xlSVd:
ccWj8:
goto yASwi;
zU5qe:
WHeWv:
goto W_bQ6;
nm8yZ:
uSc0o:
goto nrEMc;
z5Op7:
GOcy1:
goto tLA4g;
TVVvJ:
$dbar = explode("\57", $dbtoscan[$i]);
goto EYarN;
qkas3:
z8Lby:
goto v0jjN;
bFUwD:
$tablename = explode("\x3a", $dbar[0]);
goto MXWLu;
IFQU6:
yHE5z:
goto lhynr;
gznE3:
$goscan = false;
goto TQl_l;
HpFCx:
$tablename = $tablename[0];
goto iYsqs;
Cd5yD:
lMn08:
goto bjz4K;
v52R6:
$priority = substr($pdb->pattern, 0, 1);
goto yTa3r;
LtTeY:
C6D7C:
goto zNY3h;
s7QCz:
g7Chm:
goto ih2sP;
yNqWh:
$rowsfiles_db = $wpdb->get_results($query_db);
goto pNYZZ;
kDTwz:
goto lvewk;
goto LtTeY;
sZgFS:
$pdb = $this->patternsrawdb[$pnum];
goto UaSdS;
Q25SQ:
$this->process_db($pnum + 1);
goto Cd5yD;
SrBp2:
global $wpdb;
goto wHYuD;
EYarN:
if (!(count($dbar) == 2)) {
goto yHE5z;
}
goto THIvP;
VnTiu:
ADucb:
goto J_5MI;
zNY3h:
$lastchecked = new DateTime($results_e[0]->lastchecked);
goto aY7rQ;
iYsqs:
$this->stat["\144\x62\137\x73\x63\x61\156\156\145\144"] = $this->stat["\x64\x62\x5f\163\143\141\156\x6e\145\x64"] + 1;
goto x3NlZ;
UaSdS:
$patternid = $pdb->id;
goto v52R6;
v0jjN:
$sql = "\x55\x50\104\101\x54\105\40\x60" . $table_name_db . "\140\x20\x53\x45\x54\x20\15\xa\x20\40\40\40\40\40\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\x20\x20\144\x62\x69\x64\40\75\40\x27\x30\47\x2c\xd\12\40\40\x20\x20\40\40\40\40\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\40\40\40\40\x20\x20\40\x20\40\40\x20\40\x20\40\40\154\x61\163\164\143\150\145\143\153\145\x64\40\x3d\40\x6e\x6f\167\x28\51\54\x20\15\12\40\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\40\x20\40\x20\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\x66\151\x6c\145\150\x61\x73\150\x3d\x27\x27\x2c\15\12\40\x20\x20\x20\40\40\x20\40\40\x20\40\40\x20\40\40\x20\x20\40\x20\x20\x20\40\40\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\40\x20\x73\x69\172\x65\75\47\x27\54\xd\12\40\40\40\40\x20\40\x20\x20\x20\x20\x20\40\40\x20\40\x20\40\x20\40\40\40\40\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\x20\x20\x20\40\40\40\x69\x6e\146\x65\x63\164\145\144\146\x6c\x61\147\x3d\x27\60\x27\x2c\15\12\x20\40\x20\x20\x20\40\40\x20\40\40\x20\40\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\x20\x20\40\x20\155\x61\x69\x6e\144\x62\146\x6c\x61\x67\x65\144\x3d\47\60\x27\x2c\15\12\x20\40\x20\40\40\40\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\40\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\x20\x20\40\40\40\x20\x20\x6d\141\x74\143\150\154\x69\156\145\75\x27\x27\xd\12\40\x20\40\40\x20\x20\x20\x20\40\x20\40\40\x20\40\40\40\40\40\40\40\x20\40\x20\x20\x20\x20\40\40\40\x20\40\x20\40\40\40\x20\40\40\40\x20\127\110\105\x52\x45\40\x60" . $table_name_db . "\140\x2e\140\151\144\x60\40\x3d\x20" . $rows[0]->id . "\73";
goto TY6bN;
x5v17:
$wpdb->get_results($adddatasql);
goto gZnKo;
M_kGt:
$dbidname = $tablename[1];
goto HpFCx;
tLA4g:
goto C5PFD;
goto ltg5J;
x3NlZ:
if (!($priority == 2)) {
goto FUuVa;
}
goto Sdx2q;
jbRro:
Vx5YZ:
goto xlSVd;
vjRaR:
$wasinfected = true;
goto s7QCz;
PIaab:
TeZPM:
goto ch3Xb;
TY6bN:
$wpdb->get_results($sql);
goto z5Op7;
fr5IU:
if (count($rows) > 0) {
goto z8Lby;
}
goto D1VYN;
W_bQ6:
if (!($i < count($dbtoscan))) {
goto Vx5YZ;
}
goto WzTcS;
yASwi:
if (!(count($this->patternsrawdb) - 1 > $pnum)) {
goto lMn08;
}
goto Q25SQ;
xJt63:
hO4YP:
goto GG1Dn;
e6Df3:
goto WHeWv;
goto jbRro;
cR65q:
if ($wasinfected) {
goto PduQQ;
}
goto dMbSM;
aY7rQ:
if (!($datebeforeoneday > $lastchecked)) {
goto hO4YP;
}
goto vD5v1;
LHUE0:
$i = 0;
goto zU5qe;
D1VYN:
$adddatasql = "\111\x4e\123\105\x52\x54\40\111\116\124\x4f\40\x60" . $table_name_db . "\140\x20\x28\140\x69\144\x60\x2c\x20\140\160\x61\164\164\x65\162\156\x69\144\140\54\40\x60\x64\142\156\x61\155\x65\140\54\x20\x60\144\x62\x72\x6f\x77\156\141\x6d\x65\140\54\40\x60\x64\142\x69\144\156\141\x6d\145\140\x2c\40\140\x64\x62\x69\144\140\54\x20\140\x66\151\x6c\x65\150\x61\x73\150\140\x2c\x20\x60\163\151\172\145\140\54\x20\x60\x6c\x61\163\x74\143\150\x65\143\153\145\x64\140\x2c\40\x20\140\x69\156\x66\145\143\x74\145\144\x66\154\x61\x67\140\x2c\x20\x60\x6d\141\151\x6e\x64\142\x66\154\x61\147\145\144\140\x2c\40\140\x6d\x61\x74\143\150\154\x69\156\145\140\51\40\x56\x41\114\125\105\x53\40\x28\116\x55\114\114\54\40\47" . $patternid . "\x27\54\40\47" . $wpdb->prefix . $tablename . "\47\x2c\x20\47" . $rowname . "\x27\54\40\x27" . $dbidname . "\x27\54\x20\47\x30\47\54\x20\47\x27\54\40\x27\47\54\x20\156\x6f\x77\50\51\54\x20\x27\x30\x27\54\40\x27\60\47\40\54\x27\x27\51\x3b";
goto x5v17;
t_3YS:
FUuVa:
goto MDkU0;
wHYuD:
$table_name_db = $wpdb->prefix . "\x69\156\x66\x65\143\164\x73\x63\x61\x6e\x6e\145\162\x64\141\x74\x61\x5f\144\x62";
goto sZgFS;
FsaTU:
$goscan = true;
goto kDTwz;
fqBUU:
$infectplus = false;
goto gXS4s;
WzTcS:
if (empty($dbtoscan[$i])) {
goto Z9S4j;
}
goto TVVvJ;
kJN3J:
PduQQ:
goto xvtBa;
gZnKo:
goto GOcy1;
goto qkas3;
Xnw8Z:
$goscan = true;
goto nm8yZ;
J_5MI:
$i++;
goto e6Df3;
MXWLu:
if (!(count($tablename) == 2)) {
goto jQu9M;
}
goto M_kGt;
dMbSM:
goto ADucb;
goto kJN3J;
ih2sP:
$datebeforeoneday = new DateTime(date("\x59\55\155\x2d\x64\x20\110\x3a\151\x3a\163", strtotime("\55\61\x32\x20\x68\157\165\162\x73", time())));
goto sKTQ2;
PBYlU:
$rows = $wpdb->get_results("\123\x45\114\x45\103\x54\40\x2a\40\x46\x52\117\x4d\x20\140" . $table_name_db . "\140\40\15\12\40\x20\40\40\40\x20\40\x20\x20\40\40\40\40\40\x20\40\x20\40\40\x20\40\x20\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\167\x68\x65\x72\x65\x20\15\xa\x20\x20\40\40\40\40\x20\40\40\40\40\40\40\x20\40\40\x20\40\40\x20\x20\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\x20\x70\141\x74\164\x65\162\156\151\x64\x20\x3d\x20\47" . $patternid . "\x27\x20\x61\156\144\x20\15\12\40\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\40\x20\40\x20\x20\x20\x20\40\x20\40\40\40\40\144\142\x6e\141\x6d\x65\40\75\x20\47" . $wpdb->prefix . $tablename . "\x27\40\x61\156\x64\x20\xd\12\x20\40\x20\x20\x20\40\x20\x20\x20\40\x20\x20\x20\x20\x20\x20\x20\x20\40\40\x20\x20\x20\40\40\40\x20\40\x20\x20\x20\x20\40\40\40\40\144\142\162\x6f\167\156\x61\x6d\x65\x20\75\x20\47" . $rowname . "\47\x20\x61\156\144\x20\15\12\40\40\40\40\x20\40\x20\x20\40\40\x20\x20\x20\x20\40\x20\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\x20\40\144\x62\x69\x64\x6e\x61\155\145\x20\75\x20\x27" . $dbidname . "\47\40\x61\x6e\144\x20\15\12\40\x20\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\40\40\x20\40\40\x20\40\x20\x20\x20\x20\40\144\142\151\x64\x20\75\x20\x27" . $dbid . "\x27\xd\12\x20\40\40\x20\40\x20\40\x20\x20\40\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\x20\40\40\40\x20\40\40\x20\40\x20\40\x20\73");
goto fr5IU;
pNYZZ:
if (!(count($rowsfiles_db) > 0)) {
goto g7Chm;
}
goto vjRaR;
oAJwg:
if (count($results_infect) > 0) {
goto FGtLr;
}
goto PBYlU;
MiFet:
$dbtoscan = explode("\x2c", $pdb->r);
goto BI_4G;
myDFN:
if (!($goscan == false && $wasinfected)) {
goto uSc0o;
}
goto Xnw8Z;
nZEmN:
if (!($jtime > $this->max_time * 0.8)) {
goto qZMO2;
}
goto ObeeA;
sKTQ2:
$results_e = $wpdb->get_results("\123\x45\x4c\105\x43\x54\x20\52\40\106\x52\x4f\x4d\x20" . $table_name_db . "\x20\167\150\145\x72\x65\x20\x70\x61\x74\x74\x65\162\156\151\144\40\75\x20\47" . $patternid . "\x27\x20\x6f\x72\x64\x65\x72\40\x62\171\40\154\141\x73\164\143\150\x65\x63\x6b\145\144\40\x4c\111\x4d\x49\x54\x20\x31\x3b");
goto gznE3;
lhynr:
Z9S4j:
goto VnTiu;
xvtBa:
JgGgo:
goto t_3YS;
ruGvT:
date_default_timezone_set($this->timezone);
goto Zz21D;
gXS4s:
foreach ($results_infect as $row) {
goto JkDPz;
zY1rC:
if (!($j < count($m[0]))) {
goto QxIys;
}
goto aTXNE;
VL31c:
$fileContent_s = preg_replace("\57" . preg_quote($m[0][$j], "\x2f") . "\57", $reptct, $fileContent_s, 1);
goto Pp1FY;
O1gH0:
TsxMP:
goto JU5TH;
wLLd8:
$j = 0;
goto jc5I1;
z22Ff:
$contains_buyedpt = false;
goto wLLd8;
Rs8Q2:
$linecount = mb_substr_count($fileContent_ss, "\xa") + 1;
goto LyJhR;
UsE7N:
$wpdb->get_results($adddatasql);
goto Txemf;
aeLHI:
preg_match_all("\57" . preg_quote($pattern, "\x2f") . "\x2f\163", $contenttestdata, $m);
goto PQtv9;
fDS7v:
$hash = md5($infectdata);
goto ARBvE;
iLmzZ:
$ix = 0;
goto WKhe3;
n7n22:
T2hdn:
goto mcnkU;
EcaVE:
if (!($hmatch == 1)) {
goto TsxMP;
}
goto UAirY;
H7Z21:
if (!($hmatch != 1)) {
goto UcpQG;
}
goto TFfUo;
kHHXj:
if ($priority == 3) {
goto qfniu;
}
goto CQgFV;
hASzE:
ufSx7:
goto k4Om0;
mcnkU:
if (!($rows[0]->maindbflaged != 1 && rand(0, 10) < 9 || $hash != $rows[0]->filehash)) {
goto b50w0;
}
goto xB1m_;
ARBvE:
$myfilename = "\104\x42\x20" . $wpdb->prefix . $tablename . "\x3a" . $dbidname . "\x2f" . $rowname . "\x2f" . $dbid;
goto oUrpW;
zinNV:
$thishash = md5($infectdata);
goto XcZI_;
PQtv9:
$fileContent_s = $contenttestdata;
goto eumUv;
hBzHT:
nteOe:
goto M0Wne;
QBiao:
$infectedflag = 2;
goto EmCqZ;
RLGcN:
ev81s:
goto plCNr;
LZjWa:
OM3oA:
goto ol6QC;
k4Om0:
if (!($infectplus == false)) {
goto nteOe;
}
goto cNf2w;
plCNr:
if (!$this->checklocalwhitelist($thishash)) {
goto ufSx7;
}
goto uq6my;
vEwPY:
qfniu:
goto NqvzO;
pXNYA:
QxIys:
goto waXMQ;
lqXNz:
$contains_nonbuyedpt = false;
goto z22Ff;
NqvzO:
$contains_nonbuyedpt = true;
goto LZjWa;
vZDft:
tq17J:
goto n60Mb;
JkDPz:
$dbid = $row->{$dbidname};
goto wGOcM;
oySaz:
$reptct .= "\x20";
goto gORbp;
n60Mb:
MOKS1:
goto mPlij;
JU5TH:
$rows = $wpdb->get_results("\x53\x45\x4c\x45\x43\x54\40\x2a\x20\106\x52\117\x4d\40\140" . $table_name_db . "\140\40\15\12\x20\40\40\40\40\x20\x20\40\x20\x20\40\40\40\40\x20\40\x20\40\40\40\40\x20\x20\x20\40\40\40\x20\40\x20\40\40\x20\40\40\x20\167\150\x65\x72\x65\x20\15\xa\x20\x20\40\x20\40\x20\x20\x20\x20\40\40\40\40\x20\40\40\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\x20\40\40\40\40\x70\141\164\164\145\x72\x6e\x69\144\x20\75\x20\47" . $patternid . "\47\40\x61\x6e\x64\x20\xd\xa\40\x20\x20\40\x20\40\x20\40\40\x20\x20\40\40\40\x20\x20\x20\40\40\40\40\40\x20\x20\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\x64\142\x6e\x61\x6d\145\x20\x3d\x20\x27" . $wpdb->prefix . $tablename . "\x27\x20\x61\x6e\144\40\xd\12\40\40\40\40\40\40\x20\x20\x20\40\x20\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\40\x20\40\40\x20\x20\40\40\x20\40\40\40\40\x64\x62\162\157\167\x6e\141\x6d\145\x20\75\40\47" . $rowname . "\47\40\x61\156\x64\40\15\12\x20\x20\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\40\40\x20\x20\40\40\x20\x20\40\40\x20\40\40\40\x20\40\40\40\40\x20\x64\142\x69\144\156\141\155\145\x20\x3d\x20\47" . $dbidname . "\47\x20\141\156\144\x20\15\xa\x20\40\x20\40\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\x20\x20\x20\40\x20\x20\40\x20\x20\x20\x20\40\x20\40\40\40\40\40\x20\x20\40\x64\x62\151\144\40\x3d\40\x27" . $dbid . "\47\xd\xa\40\40\x20\x20\40\40\x20\40\40\40\x20\40\x20\x20\x20\x20\x20\40\x20\x20\x20\40\x20\40\40\x20\x20\40\x20\x20\40\40\40\40\40\x20\73");
goto Dtagq;
n3xii:
$wpdb->get_results("\104\105\114\x45\124\x45\x20\x46\x52\x4f\x4d\x20\140" . $table_name_db . "\x60\40\x77\x68\x65\x72\x65\x20\40\146\151\154\x65\150\x61\x73\150\40\75\40\47" . $thishash . "\47\x3b");
goto eVNQ9;
XcZI_:
if (!$this->inWhitelistdb($thishash)) {
goto ev81s;
}
goto n3xii;
CQgFV:
$contains_buyedpt = true;
goto PawWE;
wGOcM:
$infectdata = $row->{$rowname};
goto zinNV;
l7Qfs:
if (!($ix < strlen($m[0][$j]))) {
goto NuNYl;
}
goto oySaz;
Nzv3h:
$j++;
goto whjDD;
z5N1U:
$infectplus = true;
goto hBzHT;
N6jc7:
$ix++;
goto fPQDH;
YOXwF:
MO0_J:
goto H7Z21;
zMoxl:
goto MOKS1;
goto hASzE;
oUrpW:
$hmatch = $this->file_get_contents2($this->phpurl . "\147\x65\164\x6d\x61\151\x6e\146\x6c\141\147\x31\x39\56\x70\x68\x70\77\150\141\163\150\75" . $hash);
goto DDyIi;
DDyIi:
if (!($hmatch == -2)) {
goto MO0_J;
}
goto fRJM1;
vDysy:
$fileContent_ss = mb_substr($fileContent_s, 0, $pos);
goto Rs8Q2;
LyJhR:
$lines .= $linecount . "\54";
goto de4zo;
O_m3J:
$this->senddatatoServer($hash, $myfilename, $patternid . "\54", $infectdata, $lines);
goto DQZba;
WKhe3:
xWhbi:
goto l7Qfs;
eC5mJ:
$sql = "\x55\x50\104\101\124\x45\40\x60" . $table_name_db . "\x60\x20\123\x45\x54\x20\15\xa\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\40\40\40\x20\40\40\40\x20\40\40\40\x20\x20\40\x20\40\40\40\x20\x20\40\x20\x20\x20\x20\40\154\x61\x73\x74\143\150\x65\143\153\x65\x64\40\x3d\x20\x6e\157\x77\x28\51\x2c\x20\15\12\x20\40\x20\40\40\40\x20\40\40\40\40\40\40\40\40\x20\x20\40\x20\x20\40\40\x20\40\x20\40\40\40\x20\x20\40\40\x20\x20\40\40\x20\x20\x20\x20\x66\x69\x6c\x65\x68\x61\x73\x68\x3d\x27" . $hash . "\x27\54\15\xa\40\x20\x20\x20\x20\x20\x20\40\40\40\40\x20\x20\40\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\40\40\x20\40\40\40\x20\40\x20\40\40\40\40\x20\x73\x69\x7a\145\75\47" . strlen($infectdata) . "\x27\54\xd\12\40\40\x20\x20\40\x20\40\40\40\x20\40\x20\x20\x20\40\x20\x20\x20\40\40\40\40\40\40\x20\x20\x20\40\x20\40\40\x20\40\40\40\x20\40\x20\40\x20\x69\156\146\145\143\164\x65\x64\146\x6c\141\147\75\47" . $infectedflag . "\47\x2c\15\xa\x20\x20\x20\x20\x20\40\40\x20\x20\40\x20\x20\40\x20\40\40\40\40\40\x20\x20\40\x20\x20\x20\x20\x20\x20\40\x20\x20\x20\x20\40\40\40\40\40\x20\40\x6d\141\x69\x6e\144\x62\x66\x6c\x61\x67\145\144\x3d\47" . $hmatch . "\47\x2c\15\xa\40\40\40\x20\x20\x20\40\x20\x20\40\40\x20\40\40\40\x20\x20\40\x20\x20\x20\40\40\x20\x20\40\40\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\x6d\x61\x74\x63\150\154\151\x6e\145\75\47" . $lines . "\x27\15\12\x20\40\40\x20\x20\x20\x20\40\x20\40\x20\40\40\x20\40\x20\40\x20\x20\40\40\x20\x20\40\x20\40\x20\x20\40\40\40\40\x20\40\40\x20\x20\40\40\40\x57\110\105\122\x45\x20\140" . $table_name_db . "\x60\x2e\140\x69\x64\x60\40\75\40" . $rows[0]->id . "\73";
goto g2_1K;
fPQDH:
goto xWhbi;
goto NRn8O;
nVNsH:
if (!($contains_nonbuyedpt == true && $contains_buyedpt == false)) {
goto HugJt;
}
goto QBiao;
aTXNE:
$matchedcount++;
goto BxjgO;
PawWE:
goto OM3oA;
goto vEwPY;
gORbp:
MOJjp:
goto N6jc7;
TFfUo:
$hmatch = 0;
goto JLWQ2;
waXMQ:
$infectedflag = 1;
goto nVNsH;
UAirY:
$this->stat["\x64\142\x5f\x69\156\x66\145\x63\164\x65\x64\x5f\164\162\x75\145"]++;
goto O1gH0;
Dtagq:
if (count($rows) > 0) {
goto T2hdn;
}
goto O_m3J;
g2_1K:
$wpdb->get_results($sql);
goto vZDft;
JLWQ2:
UcpQG:
goto EcaVE;
de4zo:
$reptct = '';
goto iLmzZ;
NRn8O:
NuNYl:
goto VL31c;
Pp1FY:
$found = true;
goto kHHXj;
ftw2X:
b50w0:
goto eC5mJ;
eumUv:
$lines = '';
goto lqXNz;
M0Wne:
$contenttestdata = $infectdata;
goto aeLHI;
xB1m_:
$this->senddatatoServer($hash, $myfilename, $patternid . "\x2c", $infectdata, $lines);
goto ftw2X;
DQZba:
$adddatasql = "\111\x4e\x53\105\x52\124\x20\111\116\x54\117\40\140" . $table_name_db . "\x60\40\x28\x60\151\x64\x60\x2c\40\140\160\x61\x74\x74\145\162\x6e\151\x64\x60\54\x20\x60\x64\x62\156\x61\155\x65\x60\54\x20\x60\144\x62\162\x6f\167\156\141\155\145\140\54\x20\x60\x64\142\151\144\x6e\141\155\x65\x60\54\x20\x60\x64\142\x69\x64\140\54\x20\140\x66\151\154\x65\x68\141\x73\x68\x60\54\x20\140\163\151\172\x65\x60\54\x20\x60\x6c\x61\163\x74\x63\x68\x65\143\153\x65\144\140\54\40\x60\151\x6e\x66\145\143\x74\x65\144\146\154\x61\147\x60\54\x20\140\x6d\141\x69\156\x64\x62\146\x6c\x61\147\x65\x64\140\x2c\40\x60\155\141\x74\143\x68\x6c\x69\156\145\x60\x29\x20\126\101\x4c\125\x45\x53\x20\x28\116\x55\114\114\54\x20\47" . $patternid . "\x27\x2c\x20\47" . $wpdb->prefix . $tablename . "\47\54\40\x27" . $rowname . "\47\x2c\40\x27" . $dbidname . "\x27\x2c\40\47" . $dbid . "\x27\54\40\47" . $hash . "\x27\54\40\x27" . strlen($infectdata) . "\47\x2c\40\x6e\157\167\50\x29\x2c\40\40\47" . $infectedflag . "\x27\54\x20\47" . $hmatch . "\x27\x20\54\47" . $lines . "\47\x29\73";
goto UsE7N;
BxjgO:
$pos = mb_strpos($fileContent_s, $m[0][$j]);
goto vDysy;
uq6my:
$wpdb->get_results("\104\105\114\x45\124\105\x20\106\x52\x4f\115\40\140" . $table_name_db . "\x60\40\167\150\x65\162\145\40\40\146\x69\154\145\150\x61\163\x68\x20\x3d\x20\x27" . $thishash . "\47\73");
goto zMoxl;
cNf2w:
$this->stat["\144\x62\137\151\156\146\145\143\164\x65\x64"] = $this->stat["\x64\x62\137\x69\x6e\x66\x65\x63\164\x65\x64"] + 1;
goto z5N1U;
fRJM1:
$this->addlocalwhitelist($hash);
goto YOXwF;
whjDD:
goto PFP3T;
goto pXNYA;
eVNQ9:
goto MOKS1;
goto RLGcN;
ol6QC:
evK3z:
goto Nzv3h;
Txemf:
goto tq17J;
goto n7n22;
EmCqZ:
HugJt:
goto fDS7v;
jc5I1:
PFP3T:
goto zY1rC;
mPlij:
}
goto PIaab;
GG1Dn:
lvewk:
goto myDFN;
bjz4K:
}
private function process($dir)
{
goto QJ53N;
lA2Tz:
$i++;
goto XqsEK;
anPwy:
foreach ($rows as $row) {
goto OYhRa;
zOcP5:
Jc3pC:
goto GdLrP;
OYhRa:
$dateyhisday = date("\131\x2d\x6d\55\x64\40\110\x3a\x69\72\163");
goto lcSOa;
baav0:
goto on0SJ;
goto co5tU;
Au06p:
if ($maindbflaged > 0 && rand(0, 10) < 9 && $wasinfected == 1) {
goto PIx_Q;
}
goto VHERn;
SsvMG:
$sql = "\x55\120\104\101\124\105\x20\140" . $table_name . "\x60\x20\123\x45\124\x20\151\156\146\145\143\x74\x65\x64\146\154\141\x67\75" . $infected . "\x2c\x6d\141\x69\156\x64\x62\x66\154\141\147\145\x64\x3d" . $hmatch . "\x2c\155\141\x74\143\x68\154\x69\156\x65\75\47" . $lines . "\47\40\40\127\110\105\x52\105\40\x60" . $table_name . "\x60\x2e\140\x69\x64\140\x20\75\x20" . $row->id . "\x3b";
goto K3hmh;
Bm2ed:
goto nX8lQ;
goto aaIRc;
fjMEJ:
global $lines;
goto zPheI;
lcSOa:
$wasinfected = $row->infectedflag;
goto toi3O;
XJb6w:
$sql = "\125\120\104\101\124\105\x20\x60" . $table_name . "\140\40\x53\105\124\40\140\154\141\x73\x74\143\150\145\143\x6b\x65\x64\x60\x20\75\40\x27" . $dateyhisday . "\x27\x20\x57\110\105\122\105\40\x60" . $table_name . "\140\56\x60\151\144\140\x20\x3d\40" . $row->id . "\x3b";
goto fAPTQ;
fAPTQ:
$wpdb->get_results($sql);
goto Au06p;
co5tU:
PIx_Q:
goto cLu28;
VHERn:
$infected = $this->scan($path, $fileContent, $hash, $wasinfected);
goto TzBRF;
nusyd:
nX8lQ:
goto baav0;
TzBRF:
if (!$infected) {
goto CW6cU;
}
goto fjMEJ;
GtEmR:
$sql = "\x55\120\104\101\x54\105\x20\x60" . $table_name . "\140\40\123\x45\x54\x20\x69\x6e\146\145\x63\x74\x65\144\x66\x6c\x61\x67\75\60\54\155\141\x69\x6e\144\142\146\154\x61\x67\145\x64\75\x30\x20\40\x57\x48\105\122\x45\x20\x60" . $table_name . "\x60\x2e\x60\x69\x64\140\x20\x3d\40" . $row->id . "\x3b";
goto LOycf;
aaIRc:
CW6cU:
goto GtEmR;
cLu28:
on0SJ:
goto zOcP5;
LOycf:
$wpdb->get_results($sql);
goto nusyd;
K3hmh:
$wpdb->get_results($sql);
goto Bm2ed;
toi3O:
$maindbflaged = $row->maindbflaged;
goto XJb6w;
zPheI:
global $hmatch;
goto SsvMG;
GdLrP:
}
goto jwFYB;
EpJ8O:
I30OZ:
goto dwdGz;
w5iDb:
Owenp:
goto cx9FE;
Dvjag:
$dateyhisday = date("\x59\55\155\x2d\144\40\x48\x3a\x69\x3a\x73");
goto V49mg;
XhHpm:
goto KHhAu;
goto R2VqR;
fac_Q:
goto S4i0G;
goto VO0dQ;
p2Ccw:
zyjou:
goto P84uk;
dm9Wc:
$dh = opendir($dir);
goto Mw1hQ;
VOSTw:
$jtime = microtime(true) - $this->keikajikan;
goto zarLw;
hC8B1:
ZkNDO:
goto UsJlF;
BB013:
$rows = $wpdb->get_results($query);
goto g8zAk;
H2j8Y:
if ($wasinfected > 0) {
goto eXtl0;
}
goto tImqu;
cx9FE:
if (!($filesize > 200000)) {
goto I8UKW;
}
goto gpKPH;
lXl7j:
if ($wpdb->num_rows > 0) {
goto ka9bs;
}
goto ApjbF;
xvyjP:
global $lines;
goto QBaK4;
dd6e1:
uHfD8:
goto BIIAA;
Pj56b:
$rows = $wpdb->get_results($query);
goto Stv2y;
arOLb:
$sql = "\x55\x50\x44\x41\124\x45\40\140" . $table_name . "\x60\40\x53\x45\124\x20\151\x6e\x66\x65\143\x74\145\x64\146\154\x61\147\x3d\x30\x2c\x6d\141\x69\156\144\142\x66\x6c\x61\147\145\x64\75\x30\x2c\x6d\x61\x74\143\150\x6c\x69\156\x65\x3d\x27\x27\x20\x20\127\x48\x45\122\x45\40\x60" . $table_name . "\140\56\x60\x69\144\140\x20\75\x20" . $rowid . "\x3b";
goto YKTI0;
Lz9PP:
ZpiFw:
goto FkdYj;
ib_tW:
mRVRW:
goto l9FCN;
jwFYB:
bngl8:
goto DzL1g;
E5hgk:
Z7OLN:
goto t7Ry4;
bZWhQ:
goto sVLgy;
goto VtsVm;
vP18o:
if (!(!$this->followSymlink && is_link($dir . $file))) {
goto QK3rb;
}
goto wu_0o;
b4S2L:
if (is_file($dir . $file) && $scanthisfolder) {
goto ZpiFw;
}
goto bZWhQ;
t4yaA:
NXbGk:
goto dm9Wc;
l9FCN:
closedir($dh);
goto SyuG5;
TwkmW:
$query = "\x53\105\x4c\x45\103\124\x20\x2a\x20\x46\122\x4f\115\40" . $table_name . "\40\x77\x68\x65\x72\x65\40\146\x69\154\145\x68\141\x73\x68\40\75\x20\x27" . $hash . "\x27\x20\141\x6e\144\x20\146\151\x6c\145\x70\x61\x74\150\40\75\40\x27" . $filepathname . "\47\x20\141\x6e\144\40\x66\x69\154\145\x6e\141\x6d\x65\x20\75\47" . $file . "\47\x20\x4c\111\x4d\111\x54\x20\61\x3b";
goto Pj56b;
VO0dQ:
pUtdK:
goto DaBnI;
Y3vjm:
global $wpdb;
goto tivP5;
DzL1g:
XUZGb:
goto C18bQ;
efwdZ:
$path = $dir . $file;
goto ERemX;
JQrD4:
goto sVLgy;
goto Lz9PP;
dqTcV:
ka9bs:
goto XUU2l;
QBaK4:
global $hmatch;
goto nqXsY;
oC8_J:
return;
goto t4yaA;
tivP5:
$table_name = $wpdb->prefix . "\151\x6e\146\145\x63\164\x73\x63\x61\156\156\145\x72\x64\x61\164\x61";
goto g07Y3;
s1HH6:
$rows = $wpdb->get_var($query);
goto X3wmf;
jDn62:
$goscan = false;
goto XhHpm;
Eavh8:
if ($rows == 0) {
goto Y57IT;
}
goto JZ8IV;
MSq0F:
xoLzH:
goto dd6e1;
MR0Ws:
if (!($wpdb->num_rows > 0)) {
goto XWj__;
}
goto Y14Bp;
r4yoV:
$hash = md5($fileContent);
goto q1D8x;
H2ALY:
if (!$filechanged) {
goto mJ7c5;
}
goto UiFUG;
IqwVI:
$scanthisfolder = true;
goto hGA72;
g8zAk:
if (!($wpdb->num_rows > 0)) {
goto hkLd0;
}
goto K0oAY;
ZOU1q:
xjTsC:
goto pJSwT;
cEP8Z:
$rowsfiles = $wpdb->get_results($query);
goto lXl7j;
OTLTe:
$wpdb->get_results($sql);
goto npoUG;
TF91g:
$filesize = strlen($fileContent);
goto r4yoV;
NzhBN:
if (!($this->extension[$i] == $ext)) {
goto RcfYC;
}
goto jDn62;
TL5Nb:
$infected = $this->scan($path, $fileContent, $hash, $wasinfected);
goto ecgaT;
RvDA_:
WVIIM:
goto YbZK4;
V49mg:
$sql = "\x49\116\123\105\x52\x54\40\x49\116\124\x4f\40\x60" . $wpdb->prefix . "\x69\x6e\146\x65\143\164\x73\143\141\156\156\145\x72\x64\x61\x74\x61\140\x20\50\x60\151\144\x60\54\40\140\x66\x69\154\145\x70\x61\x74\x68\x60\54\x20\x60\x66\151\154\145\x6e\x61\x6d\145\140\54\40\x60\146\151\x6c\x65\150\141\x73\x68\x60\x2c\x20\140\163\151\172\145\140\x2c\40\x60\x6c\x61\163\164\x63\x68\145\x63\x6b\145\144\140\54\40\140\x64\x61\164\x61\141\144\x64\144\141\164\x65\x60\x29\40\126\x41\114\x55\105\123\40\50\116\x55\114\x4c\54\x20\47" . $filepathname . "\x27\54\40\x27" . $file . "\x27\x2c\x20\x27" . $hash . "\47\54\x20\47" . $filesize . "\47\x2c\40\47" . $dateyhisday . "\x27\x2c\40\x27" . $dateyhisday . "\x27\51\73";
goto vlHsi;
R30pE:
$path = $dir . $file;
goto LWfNH;
sN3ba:
Z4xJi:
goto iVJgx;
fwBQr:
ln4U0:
goto IBNdo;
nPidD:
$scanthisfolder = false;
goto Y6oe9;
brwd7:
$query = "\x53\105\x4c\105\103\x54\x20\x43\x4f\125\116\x54\50\x69\x64\x29\40\x46\x52\x4f\115\x20" . $table_name . "\x20\x77\x68\145\162\145\x20\146\151\x6c\x65\160\141\x74\x68\40\x3d\40\x27" . $filepathname . "\47\73";
goto WnAJs;
Stv2y:
if ($wpdb->num_rows > 0) {
goto dm_YZ;
}
goto BzwyK;
pJSwT:
if (!(strpos($filepathname, "\x2f\141\167\163\x74\x61\x74\x2f") !== false)) {
goto t0Wju;
}
goto RkzhN;
LWfNH:
$fileContent = file_get_contents($path);
goto TF91g;
euHlU:
if (!$scanthisfolder) {
goto zyjou;
}
goto l4WNW;
iVJgx:
S4i0G:
goto TL5Nb;
EFUXL:
$scanthisfolder = true;
goto O2Dzd;
AGBFc:
dm_YZ:
goto anPwy;
nnGxJ:
eXtl0:
goto arOLb;
K0oAY:
foreach ($rows as $row) {
goto aYMwk;
WNcyA:
$wpdb->get_results($sql);
goto tVYRJ;
aYMwk:
$dateyhisday = date("\131\55\155\55\x64\40\110\72\x69\72\x73");
goto JSEOZ;
tVYRJ:
WKnsI:
goto Hbve_;
JSEOZ:
$sql = "\x55\120\x44\x41\124\105\x20\x60" . $table_name . "\x60\40\123\105\x54\40\140\154\x61\x73\x74\143\x68\145\143\153\x65\144\x60\40\x3d\x20\x27" . $dateyhisday . "\47\x2c\x20\146\x69\154\145\150\x61\x73\150\x3d\x27" . $hash . "\47\x2c\x73\x69\x7a\x65\x3d\47" . $filesize . "\x27\x20\40\x57\110\x45\122\105\40\x60" . $table_name . "\x60\x2e\x60\151\144\140\40\75\40" . $row->id . "\x3b";
goto WNcyA;
Hbve_:
}
goto RvDA_;
X3wmf:
if (!($rows > 0)) {
goto ZkNDO;
}
goto wonbz;
XUU2l:
foreach ($rowsfiles as $row) {
goto RvVd1;
oXyXO:
$wpdb->get_results($sqld);
goto qiog3;
qiog3:
oJX3Y:
goto v4u7I;
m2PYJ:
$sqld = "\x44\105\x4c\105\124\x45\x20\x46\122\117\115\x20\140" . $table_name . "\140\x20\x57\110\x45\x52\105\40\x60" . $table_name . "\140\x2e\x60\x69\144\x60\x20\x3d\40" . $row->id;
goto oXyXO;
RvVd1:
if (file_exists($dir . $row->filename)) {
goto oJX3Y;
}
goto m2PYJ;
v4u7I:
KSGdg:
goto fXKMn;
fXKMn:
}
goto JCeQa;
VtsVm:
uSiR4:
goto rDta3;
UcsGL:
L6muR:
goto iGmcT;
pJkTf:
$query = "\x53\x45\x4c\105\103\x54\40\52\40\106\122\x4f\x4d\x20" . $table_name . "\40\x77\150\x65\x72\x65\x20\146\151\154\145\160\141\x74\x68\40\75\40\47" . $filepathname . "\47\x20\141\156\x64\x20\x66\x69\154\145\156\141\x6d\x65\40\75\x20\47" . $file . "\47\40\114\x49\x4d\111\124\x20\61\73";
goto q7jEN;
epU9U:
if ($wpdb->num_rows > 0) {
goto pUtdK;
}
goto Dvjag;
a6aEe:
t0Wju:
goto Mup3b;
wonbz:
$scanthisfolder = true;
goto hC8B1;
P1D8I:
sVLgy:
goto eWOti;
DBxXj:
return;
goto olcnh;
qNgxj:
if (!$scanthisfolder) {
goto NEl6U;
}
goto OzP7e;
RkzhN:
$scanthisfolder = false;
goto a6aEe;
eS0j0:
goto aT6Zi;
goto ivZ8W;
hCPyM:
$filesize = 0;
goto R30pE;
Y6oe9:
NUt0W:
goto UtZOt;
cs8AP:
$filepathname = str_replace($this->wptopdir, '', $dir);
goto brwd7;
hGA72:
f9mJx:
goto qNgxj;
XqsEK:
goto MPBuX;
goto HccGO;
i7SOe:
if (is_dir($dir . $file)) {
goto uSiR4;
}
goto b4S2L;
Mup3b:
NEl6U:
goto euHlU;
h8suC:
$goscan = false;
goto EpJ8O;
oWw3u:
dwZJb:
goto N0hab;
CjF2E:
$scanthisfolder = false;
goto ZOU1q;
iGmcT:
goto xoLzH;
goto nnGxJ;
iCE3w:
QK3rb:
goto i7SOe;
nqXsY:
$sql = "\125\x50\104\x41\124\x45\40\140" . $table_name . "\140\40\x53\105\x54\x20\151\x6e\x66\145\143\164\x65\x64\x66\x6c\x61\x67\x3d" . $infected . "\54\x6d\141\x69\x6e\x64\142\x66\x6c\x61\147\x65\x64\x3d" . $hmatch . "\54\155\141\164\143\150\154\151\x6e\145\x3d\x27" . $lines . "\x27\40\x20\x57\110\x45\x52\105\x20\x60" . $table_name . "\140\x2e\x60\x69\x64\x60\x20\x3d\x20" . $rowid . "\x3b";
goto OTLTe;
Ve2wh:
$rowid = $wpdb->insert_id;
goto WIdrb;
YKTI0:
$wpdb->get_results($sql);
goto MSq0F;
UiFUG:
$filechanged = $this->theprobabilitylv2($fileContent, $file);
goto OLQI2;
N0hab:
XWj__:
goto v85n2;
YbZK4:
hkLd0:
goto d9bVw;
bhk3l:
sktMm:
goto lA2Tz;
jbElW:
$this->senddatatoServer2($hash, $filepathname . $file, $fileContent);
goto UcsGL;
VgRHW:
MPBuX:
goto cFU8B;
zqcPT:
I8UKW:
goto TwkmW;
NmXcB:
WzvLe:
goto Y3vjm;
cFU8B:
if (!($i < count($this->extension))) {
goto KHhAu;
}
goto NzhBN;
wu_0o:
goto aT6Zi;
goto iCE3w;
q1D8x:
if (!empty($fileContent)) {
goto Owenp;
}
goto pJkTf;
JIrON:
$filechanged = $this->theprobability($fileContent, 2, $file);
goto H2ALY;
DaBnI:
foreach ($rows as $row) {
goto k3qCR;
lQEqu:
Y_CtT:
goto x9Ntu;
mOVJ3:
$rowid = $row->id;
goto Njisa;
d5jDQ:
$wpdb->get_results($sql);
goto mOVJ3;
k3qCR:
$dateyhisday = date("\x59\55\x6d\x2d\x64\40\110\72\151\72\x73");
goto XZH2c;
Njisa:
$wasinfected = $row->infectedflag;
goto LdiXP;
fZs7S:
IDtzs:
goto tytRI;
EvqsU:
$filechanged = $this->theprobabilitylv2($fileContent, $file);
goto lQEqu;
LdiXP:
if (!($filesize - $row->size > 128)) {
goto QlZta;
}
goto nfCks;
x9Ntu:
QlZta:
goto fZs7S;
wPBnh:
if (!$filechanged) {
goto Y_CtT;
}
goto EvqsU;
XZH2c:
$sql = "\x55\x50\x44\x41\124\105\40\140" . $table_name . "\140\40\123\105\x54\40\x60\154\141\163\164\x63\x68\x65\x63\153\145\144\140\40\75\40\x27" . $dateyhisday . "\x27\x2c\x20\146\151\154\x65\150\x61\x73\150\75\47" . $hash . "\x27\54\x73\151\172\145\x3d\47" . $filesize . "\x27\x20\x20\127\x48\105\122\x45\x20\x60" . $table_name . "\x60\x2e\140\151\x64\x60\40\x3d\x20" . $row->id . "\x3b";
goto d5jDQ;
nfCks:
$filechanged = $this->theprobability($fileContent, 1, $file);
goto wPBnh;
tytRI:
}
goto sN3ba;
q7jEN:
$rows = $wpdb->get_results($query);
goto MR0Ws;
rGBRx:
$newadded = false;
goto epU9U;
ivZ8W:
r11q7:
goto vP18o;
C18bQ:
GFaPA:
goto P1D8I;
rDta3:
$this->process($dir . $file . "\x2f");
goto JQrD4;
l4WNW:
$this->stat["\x64\151\x72\145\143\164\x6f\162\x69\x65\x73"]++;
goto p2Ccw;
v85n2:
goto aT6Zi;
goto w5iDb;
ecgaT:
if (!$infected) {
goto OY2pL;
}
goto xvyjP;
BIIAA:
goto XUZGb;
goto AGBFc;
olcnh:
apxG2:
goto fjk1F;
ERemX:
if (!(@filesize($path) > 1048576)) {
goto I30OZ;
}
goto h8suC;
P84uk:
aT6Zi:
goto HzCiO;
vlHsi:
$wpdb->get_results($sql);
goto Ve2wh;
JZ8IV:
$datebeforeoneday = date("\x59\55\x6d\x2d\x64\40\x48\x3a\151\x3a\x73", strtotime("\55\61\62\40\x68\157\x75\x72\163", time()));
goto w693f;
fjk1F:
if (!(count(scandir($dir)) <= 2)) {
goto WzvLe;
}
goto h02hM;
JCeQa:
ncDjI:
goto EFUXL;
g07Y3:
$scanthisfolder = false;
goto cs8AP;
R2VqR:
RcfYC:
goto bhk3l;
t0G1O:
$scanthisfolder = false;
goto E5hgk;
QJ53N:
date_default_timezone_set($this->timezone);
goto VOSTw;
UI599:
goto f9mJx;
goto CmD23;
LVv02:
$rows = $wpdb->get_results($query);
goto t7nQ_;
t7nQ_:
$rowid = 0;
goto sTLX_;
zarLw:
if (!($jtime > $this->max_time * 0.8)) {
goto NXbGk;
}
goto oC8_J;
OLQI2:
mJ7c5:
goto fwBQr;
O2Dzd:
ihmmD:
goto UI599;
d9bVw:
goto aT6Zi;
goto zqcPT;
UsJlF:
goto ihmmD;
goto dqTcV;
OmNSu:
OY2pL:
goto H2j8Y;
BzwyK:
$query = "\x53\x45\x4c\x45\x43\124\x20\52\40\x46\x52\117\115\x20" . $table_name . "\40\x77\150\145\162\145\40\x66\x69\154\145\160\141\164\150\x20\x3d\x20\47" . $filepathname . "\47\x20\141\156\x64\40\x66\x69\x6c\145\156\x61\155\145\x20\75\x20\x27" . $file . "\x27\x20\x4c\x49\115\111\x54\x20\61\73";
goto LVv02;
I3BMQ:
$filechanged = false;
goto rGBRx;
Y14Bp:
foreach ($rows as $row) {
goto d5dbx;
BmjNr:
NKadT:
goto bc4pz;
d5dbx:
$dateyhisday = date("\131\x2d\x6d\55\144\x20\x48\72\151\72\x73");
goto oG0M7;
oG0M7:
$sql = "\125\120\104\101\x54\105\x20\140" . $table_name . "\x60\40\123\x45\124\x20\140\154\141\163\x74\143\x68\x65\x63\153\x65\x64\140\40\75\x20\47" . $dateyhisday . "\x27\54\x20\x66\x69\x6c\x65\150\141\x73\x68\x3d\x27" . $hash . "\47\54\163\x69\x7a\x65\75\47" . $filesize . "\x27\x2c\151\x6e\146\145\x63\x74\x65\144\x66\154\x61\147\75\60\54\x6d\x61\151\x6e\144\142\x66\154\141\147\145\x64\x3d\x30\40\40\x57\x48\105\122\x45\x20\140" . $table_name . "\140\56\x60\x69\144\140\40\x3d\40" . $row->id . "\73";
goto qBbz5;
qBbz5:
$wpdb->get_results($sql);
goto BmjNr;
bc4pz:
}
goto oWw3u;
FkdYj:
$ext = strtolower(substr($file, strrpos($file, "\56")));
goto QQ6eM;
h02hM:
return;
goto NmXcB;
UtZOt:
if (!(strpos($filepathname, "\160\x6c\x75\x67\151\156\x73\x2f\163\x6f\x63\151\x61\x6c\x2d\154\151\156\153\55\155\141\143\150\x69\x6e\145") !== false)) {
goto xjTsC;
}
goto CjF2E;
eWOti:
goto aT6Zi;
goto ib_tW;
WIdrb:
$newadded = true;
goto fac_Q;
sTLX_:
$wasinfected = false;
goto I3BMQ;
t7Ry4:
if (!(strpos($filepathname, "\151\x74\x68\145\x6d\x65\163\x2d\x73\145\x63\165\x72\151\x74\171\x2f\154\x6f\x67\x73") !== false)) {
goto NUt0W;
}
goto nPidD;
ApjbF:
$query = "\123\105\x4c\x45\x43\124\x20\x43\117\x55\116\x54\50\151\144\51\40\x46\122\117\115\x20" . $table_name . "\x20\167\x68\x65\x72\145\x20\146\x69\154\x65\160\x61\164\150\40\75\40\x27" . $filepathname . "\47\x20\x61\x6e\144\40\151\156\146\145\x63\164\x65\144\x66\154\141\147\x3e\60\x3b";
goto s1HH6;
npoUG:
goto uHfD8;
goto OmNSu;
HccGO:
KHhAu:
goto efwdZ;
Fe2z2:
if (!($file == "\x2e" || $file == "\56\56")) {
goto r11q7;
}
goto eS0j0;
tImqu:
if (!$newadded) {
goto ln4U0;
}
goto JIrON;
Mw1hQ:
if ($dh) {
goto apxG2;
}
goto DBxXj;
Y04vX:
$i = 0;
goto VgRHW;
IBNdo:
if (!$filechanged) {
goto L6muR;
}
goto jbElW;
WnAJs:
$rows = $wpdb->get_var($query);
goto Eavh8;
HzCiO:
if (!(($file = readdir($dh)) !== false)) {
goto mRVRW;
}
goto Fe2z2;
QQ6eM:
$goscan = true;
goto Y04vX;
w693f:
$query = "\123\105\114\x45\103\x54\x20\x69\144\54\146\151\154\145\x6e\x61\x6d\145\40\x46\122\x4f\x4d\40" . $table_name . "\40\167\150\145\162\x65\x20\x66\x69\x6c\145\160\141\164\x68\x20\x3d\40\x27" . $filepathname . "\47\x20\141\x6e\x64\40\154\141\163\164\143\150\x65\143\153\145\x64\40\x3c\x20\x27" . $datebeforeoneday . "\x27\73";
goto cEP8Z;
OzP7e:
if (!(strpos($filepathname, "\x63\141\x63\x68\145") !== false)) {
goto Z7OLN;
}
goto t0G1O;
dwdGz:
if (!$goscan) {
goto GFaPA;
}
goto hCPyM;
gpKPH:
$query = "\123\105\114\105\x43\x54\x20\x2a\40\x46\x52\117\115\x20" . $table_name . "\x20\167\x68\145\162\x65\x20\146\151\154\x65\x70\141\164\150\40\x3d\x20\x27" . $filepathname . "\47\40\141\x6e\144\x20\x66\151\154\145\156\141\x6d\145\x20\x3d\x20\x27" . $file . "\47\40\x4c\x49\x4d\x49\x54\x20\61\73";
goto BB013;
CmD23:
Y57IT:
goto IqwVI;
SyuG5:
}
private function report($start, $dir)
{
return "\x64\x6f\x6e\x65\157\x6b\x3a" . $this->stat["\144\x69\162\145\143\164\157\x72\x69\x65\163"] . "\72" . $this->stat["\146\x69\x6c\x65\163\x5f\163\x63\x61\156\156\x65\144"] . "\x3a" . $this->stat["\146\151\154\145\163\x5f\151\x6e\146\x65\x63\x74\x65\x64"] . "\x3a" . $this->stat["\x64\142\x5f\x73\x63\x61\x6e\156\145\144"] . "\x3a" . $this->stat["\x64\142\x5f\151\156\x66\x65\x63\x74\145\x64"];
}
private function addlocalwhitelist($hash)
{
goto Y9eoH;
fU2VC:
BYvTs:
goto jMEyu;
Y9eoH:
if (!(strlen($hash) == 32)) {
goto BYvTs;
}
goto oRVH8;
LhThT:
R0tPX:
goto TiaRF;
oRVH8:
$lwhitelist = get_option("\167\160\151\156\x66\145\143\164\163\x63\141\x6e\137\x6c\157\x63\141\154\167\150\151\164\145\x6c\x69\163\x74", '');
goto SNl3O;
sUgc4:
foreach ($results as $result) {
goto c_NE3;
VRck3:
array_push($lastarray, $result);
goto oeS4K;
c_NE3:
if (empty(trim($result))) {
goto wVQxj;
}
goto VRck3;
qSopt:
xly67:
goto hj0ZF;
oeS4K:
wVQxj:
goto qSopt;
hj0ZF:
}
goto LhThT;
Kf2fK:
update_option("\x77\x70\x69\x6e\x66\145\143\x74\163\x63\141\x6e\137\x6c\x6f\143\x61\154\167\150\151\164\145\x6c\151\163\x74", $resulttxt);
goto fU2VC;
z3bNJ:
array_push($lwhitelist, $hash);
goto iR6q4;
TiaRF:
$resulttxt = implode("\54", $lastarray);
goto Kf2fK;
SNl3O:
$lwhitelist = explode("\x2c", $lwhitelist);
goto z3bNJ;
iR6q4:
$results = array_unique($lwhitelist);
goto tvWod;
tvWod:
$lastarray = array();
goto sUgc4;
jMEyu:
}
private function checklocalwhitelist($hash)
{
goto M04Qw;
M04Qw:
if (!(strlen($hash) == 32)) {
goto ui9SO;
}
goto wcOMD;
iVFu4:
ui9SO:
goto XskFK;
wcOMD:
$lwhitelist = get_option("\167\x70\151\156\x66\x65\x63\x74\163\143\141\156\x5f\154\157\143\141\x6c\167\x68\x69\x74\145\x6c\x69\163\x74", '');
goto LSSsW;
XskFK:
return false;
goto pXWKD;
LSSsW:
$lwhitelist = explode("\54", $lwhitelist);
goto KUwUn;
pz0N0:
return true;
goto Rz1DA;
KUwUn:
if (!in_array($hash, $lwhitelist)) {
goto mX1Yv;
}
goto pz0N0;
Rz1DA:
mX1Yv:
goto iVFu4;
pXWKD:
}
private function scan($path, $fileContent, $hash, $wasinfected)
{
goto FCNES;
J8J57:
WwpKK:
goto NPmwB;
MwedX:
$contains_buyedpt = false;
goto Jbr2c;
zyqiS:
$this->senddatatoServer($hash, $myfilename, $patternid, $fileContent, $lines);
goto GLdtw;
VAiVZ:
$hmatch = 0;
goto sP7jU;
m6frR:
$matchedcount = 0;
goto JbQf2;
Jbr2c:
foreach ($this->patternsraw as $toSearch) {
goto WRL1C;
b8jG2:
$patt = $nowpattern;
goto QmUv6;
YPdMn:
$matchedcount++;
goto XbTTD;
ZlUPh:
R6gdD:
goto rdAQc;
CA6bu:
if (!($substrCount !== false)) {
goto dR2cr;
}
goto pa7ab;
zN2aW:
$reptct = '';
goto sPPXa;
Okb_d:
$ix++;
goto vj28I;
IoPMU:
kwMoY:
goto Okb_d;
EXz6B:
if ($priority == 3) {
goto W0f13;
}
goto dqECd;
Rp8ny:
if (!($ix < strlen($m[0][$i]))) {
goto DPkQF;
}
goto y01T_;
JVXvs:
$fileContent_ss = mb_substr($fileContent_s, 0, $pos);
goto Cocr5;
dqECd:
$contains_buyedpt = true;
goto XmI_Q;
pa7ab:
$fileContent_s = $fileContent_sr;
goto b8jG2;
dWBdK:
preg_match_all($nowpattern, $fileContent_s, $m);
goto iIlZ9;
VLPC4:
preg_match_all("\x2f" . preg_quote($nowpattern, "\x2f") . "\x2f\x73", $fileContent_s, $m);
goto ZfNqA;
y01T_:
$reptct .= "\x20";
goto IoPMU;
oHoxk:
$nowpattern = substr($toSearch->pattern, 1);
goto rkv19;
H1g8m:
PYF3k:
goto xBRWr;
LY30a:
ar30m:
goto dWBdK;
xBRWr:
$substrCount = 1;
goto m5Llf;
Kl4xn:
goto OvnbQ;
goto sIRXZ;
XbTTD:
$pos = mb_strpos($fileContent_s, $m[0][$i]);
goto JVXvs;
ZfNqA:
$patternid .= $toSearch->id . "\x2c";
goto k1PXd;
Pj4SS:
$lines .= $linecount . "\x2c";
goto zN2aW;
HJFIg:
$substrCount = strpos($fileContent_sr, $nowpattern);
goto db9Nv;
QmUv6:
if ($toSearch->r == 1) {
goto ar30m;
}
goto VLPC4;
WRL1C:
$priority = substr($toSearch->pattern, 0, 1);
goto cjJpx;
me4DB:
bKmp0:
goto Rp8ny;
rkv19:
$substrCount = false;
goto fysM2;
sIRXZ:
OdIj3:
goto pL26s;
Fsw5E:
$fileContent_s = preg_replace("\57" . preg_quote($m[0][$i], "\57") . "\x2f", $reptct, $fileContent_s, 1);
goto NW4h1;
ogiIJ:
Tqj4s:
goto uWkcY;
m5Llf:
EdX42:
goto CA6bu;
rp91l:
$i++;
goto Kl4xn;
db9Nv:
goto EdX42;
goto H1g8m;
XmI_Q:
goto Tqj4s;
goto JX5p8;
NW4h1:
$found = true;
goto EXz6B;
vj28I:
goto bKmp0;
goto GhPCs;
gRUDF:
$i = 0;
goto HKRsk;
OywfF:
$contains_nonbuyedpt = true;
goto ogiIJ;
k1PXd:
goto sao7N;
goto LY30a;
uQCeu:
goto yUd0h;
goto p9022;
p9022:
RmDYw:
goto ijwBK;
IAyVA:
$patternid .= $toSearch->id . "\x2c";
goto ZlUPh;
JX5p8:
W0f13:
goto OywfF;
a0lLb:
if ($wasinfected == 1 || $wasinfected == 2) {
goto RmDYw;
}
goto uQCeu;
ROHHb:
if (!($i < count($m[0]))) {
goto OdIj3;
}
goto YPdMn;
uWkcY:
eTd3E:
goto rp91l;
rFUh9:
yUd0h:
goto DFUaf;
VAGnH:
if (!(rand(0, 100) < 50)) {
goto MqMmD;
}
goto a0lLb;
sPPXa:
$ix = 0;
goto me4DB;
HKRsk:
OvnbQ:
goto ROHHb;
pL26s:
dR2cr:
goto rFUh9;
fysM2:
if ($toSearch->r == 1) {
goto PYF3k;
}
goto HJFIg;
bKTm2:
r0EV0:
goto oHoxk;
Cocr5:
$linecount = mb_substr_count($fileContent_ss, "\12") + 1;
goto Pj4SS;
iIlZ9:
if (!(count($m[0]) > 0)) {
goto R6gdD;
}
goto IAyVA;
rdAQc:
sao7N:
goto gRUDF;
GhPCs:
DPkQF:
goto Fsw5E;
ijwBK:
MqMmD:
goto bKTm2;
cjJpx:
if (!($priority == 2)) {
goto r0EV0;
}
goto VAGnH;
DFUaf:
}
goto VXMKv;
f0tkd:
$patt = '';
goto AKeVH;
spXz0:
tb7tN:
goto UikzD;
J2EBK:
$this->stat["\x66\x69\154\145\163\137\x69\x6e\x66\x65\143\x74\x65\x64"]++;
goto Xqi4I;
XbVpc:
if (!$this->inWhitelist($hash)) {
goto QzYnJ;
}
goto aJAR7;
JbQf2:
$fileContent_sr = str_replace("\xd\xa", "\xa\40", $fileContent);
goto rEW9Q;
mEUsV:
if ($found) {
goto UxXXf;
}
goto Qw7Nw;
UikzD:
if (!($contains_nonbuyedpt == true && $contains_buyedpt == false)) {
goto l7C_r;
}
goto bM1I2;
sP7jU:
zL0LG:
goto J2EBK;
VXMKv:
bbIgN:
goto mEUsV;
GLdtw:
if (!($hmatch != 1)) {
goto zL0LG;
}
goto VAiVZ;
o8t4h:
if (!$this->checklocalwhitelist($hash)) {
goto WwpKK;
}
goto SiJbn;
vWbK7:
F12hS:
goto spXz0;
aJAR7:
return false;
goto jkRwS;
GUlKh:
$contains_nonbuyedpt = false;
goto MwedX;
l8baw:
$linetxt = '';
goto f0tkd;
tsUFk:
global $hmatch;
goto U7awV;
AKeVH:
$patternid = '';
goto t0imk;
jkRwS:
QzYnJ:
goto nFjti;
U7awV:
$hmatch = 0;
goto i37GF;
SiJbn:
return false;
goto J8J57;
Xqi4I:
if (!($hmatch == 1)) {
goto F12hS;
}
goto oUeqT;
mFEfX:
if (!$found) {
goto tb7tN;
}
goto o8t4h;
oUeqT:
$this->stat["\x66\151\154\145\163\x5f\151\156\146\x65\x63\164\x65\144\x5f\164\162\x75\x65"]++;
goto vWbK7;
NPmwB:
$hmatch = $this->file_get_contents2($this->phpurl . "\147\x65\x74\155\x61\151\156\146\154\x61\x67\61\71\56\x70\x68\x70\77\x68\141\x73\150\75" . $hash);
goto Wm9KO;
Op0ZE:
l7C_r:
goto a_qlw;
t0imk:
global $lines;
goto ZfRn_;
a_qlw:
return 1;
goto BaX1u;
Qw7Nw:
return false;
goto FYjij;
FYjij:
UxXXf:
goto mFEfX;
CnvnM:
JpbUX:
goto zyqiS;
bM1I2:
return 2;
goto Op0ZE;
rEW9Q:
$fileContent_sr = str_replace("\xd", "\12", $fileContent_sr);
goto bHNZ9;
ZfRn_:
$lines = '';
goto tsUFk;
jJ6FF:
$toSearch = '';
goto l8baw;
FCNES:
usleep(1000);
goto jRZBf;
nFjti:
$found = false;
goto jJ6FF;
FD22U:
$this->addlocalwhitelist($hash);
goto CnvnM;
bHNZ9:
$fileContent_sr = str_replace("\x20", '', $fileContent_sr);
goto GUlKh;
jRZBf:
$this->stat["\x66\151\154\x65\163\137\x73\143\141\156\156\x65\x64"]++;
goto XbVpc;
i37GF:
$myfilename = str_replace($this->wptopdir, '', $path);
goto m6frR;
Wm9KO:
if (!($hmatch == -2)) {
goto JpbUX;
}
goto FD22U;
BaX1u:
}
public function onedbscan($tablename, $rowname, $idname, $id, $hash)
{
goto JLvVd;
zZ1WH:
bLo0n:
goto iztcd;
kgk0J:
$pattern = substr($pdb->pattern, 1);
goto E2MVT;
jSRHQ:
NMmyf:
goto cplaW;
vdbdY:
DbpSt:
goto AqLOj;
XeRZG:
$index = $i;
goto UZX6a;
QITp1:
rxjYg:
goto otWm6;
UM07k:
return false;
goto BZugB;
zaMgv:
global $wpdb;
goto WVlcO;
slAH7:
$i++;
goto uHY87;
uMy3X:
goto KZOGp;
goto QITp1;
Osq6m:
if (count($data) > 0 && !empty($content)) {
goto m35R8;
}
goto UM07k;
rW32P:
$datasql = "\123\x45\114\105\103\124\40\x2a\40\106\x52\117\115\40\140" . $table_name_db . "\x60\x20\127\110\105\122\105\40\144\142\156\141\x6d\145\x3d\47" . $tablename . "\47\x20\x61\156\144\40\x64\x62\162\157\167\x6e\x61\x6d\x65\x3d\x27" . $rowname . "\x27\40\141\x6e\x64\40\x64\x62\x69\x64\156\141\155\x65\x3d\x27" . $idname . "\47\40\x61\x6e\x64\40\x64\142\151\x64\75\47" . $id . "\47\40\141\x6e\x64\x20\x69\156\x66\x65\x63\x74\145\144\x66\154\x61\147\76\60";
goto NPXhw;
AWHdm:
$pdb = $this->patternsrawdb[$index];
goto kgk0J;
G4pzL:
uH_ow:
goto Q2amh;
JxYjw:
$content = $results_e[0]->{$rowname};
goto rW32P;
E2MVT:
if (!(strpos($content, $pattern) !== false)) {
goto uH_ow;
}
goto A0ME2;
EWC8B:
$this->whitelistdb = $this->loadWhitelistudb();
goto zaMgv;
QfD3a:
if (!($i < count($this->patternsrawdb))) {
goto CNlti;
}
goto CmlDn;
m4KoS:
return false;
goto lE3Y0;
ZY7OA:
m35R8:
goto i88GN;
vOqqn:
$spatternid = $data[$i]->patternid;
goto ISe90;
Qoqx7:
return false;
goto qRKxu;
KkgC8:
return false;
goto zZ1WH;
iztcd:
ij9Gm:
goto Mcuo8;
AqLOj:
$i++;
goto uMy3X;
WVlcO:
$table_name_db = $wpdb->prefix . "\151\x6e\146\x65\x63\164\x73\143\x61\x6e\x6e\145\x72\144\x61\164\141\137\x64\142";
goto CfE4d;
Mr5iK:
if (!($i < count($data))) {
goto rxjYg;
}
goto vOqqn;
ISe90:
$index = 0;
goto popKq;
uHY87:
goto H0a2h;
goto oTV3_;
CmlDn:
if (!($this->patternsrawdb[$i]->id == $spatternid)) {
goto nK0wp;
}
goto XeRZG;
CSPDG:
$i = 0;
goto Uz3MU;
cplaW:
if (!$this->checklocalwhitelist($hash)) {
goto AOH0i;
}
goto Qoqx7;
DbN4N:
if (!isset($this->patternsrawdb[$index])) {
goto jbuCA;
}
goto AWHdm;
MHaob:
if (count($results_e) > 0) {
goto XkUll;
}
goto m4KoS;
otWm6:
if (!($matched == false)) {
goto bLo0n;
}
goto KkgC8;
oTV3_:
CNlti:
goto DbN4N;
FoNcj:
if (!$this->inWhitelistdb($hash)) {
goto NMmyf;
}
goto ccst0;
UZX6a:
goto CNlti;
goto oB1BT;
OFmju:
Xh1ia:
goto FoNcj;
BZugB:
goto ij9Gm;
goto ZY7OA;
Q2amh:
jbuCA:
goto vdbdY;
vadV1:
sUaQN:
goto slAH7;
wf4cP:
XkUll:
goto JxYjw;
popKq:
$i = 0;
goto F0Oom;
A0ME2:
$matched = true;
goto G4pzL;
oB1BT:
nK0wp:
goto vadV1;
Mcuo8:
return true;
goto ovXn2;
i88GN:
$matched = false;
goto CSPDG;
ccst0:
return false;
goto jSRHQ;
Uz3MU:
KZOGp:
goto Mr5iK;
CfE4d:
$results_e = $wpdb->get_results("\123\x45\x4c\105\103\124\40\x2a\40\106\x52\117\x4d\40" . $tablename . "\40\x77\150\x65\x72\x65\40" . $idname . "\x3d" . $id . "\73");
goto MHaob;
F0Oom:
H0a2h:
goto QfD3a;
NPXhw:
$data = $wpdb->get_results($datasql);
goto OFmju;
qRKxu:
AOH0i:
goto Osq6m;
JLvVd:
$this->patternsrawdb = $this->loadPatternsu(true);
goto EWC8B;
lE3Y0:
goto Xh1ia;
goto wf4cP;
ovXn2:
}
public function onefilescan($fileContent, $hash)
{
goto A_EOo;
OpZ8j:
$this->whitelist = $this->loadWhitelistu();
goto a2NHo;
PLHA3:
satuC:
goto ro8eM;
J0HMF:
return false;
goto PLHA3;
u3TZD:
return false;
goto niqiV;
CXGgP:
return true;
goto clxPi;
ro8eM:
if (!($found && $this->checklocalwhitelist($hash))) {
goto EyGmy;
}
goto Zex29;
hzhWU:
$fileContent_sr = str_replace("\x20", '', $fileContent_sr);
goto H2Uww;
P3gbl:
if (!($found && $this->inWhitelist($hash))) {
goto satuC;
}
goto J0HMF;
YUxm3:
if ($found) {
goto q1PKo;
}
goto u3TZD;
bvFkv:
$fileContent_sr = str_replace("\xd\12", "\xa\x20", $fileContent);
goto DZTgd;
niqiV:
q1PKo:
goto P3gbl;
Zex29:
return false;
goto QyJm7;
A_EOo:
$this->patternsraw = $this->loadPatternsu(false);
goto OpZ8j;
QyJm7:
EyGmy:
goto CXGgP;
Jq8P8:
VhBUX:
goto YUxm3;
H2Uww:
foreach ($this->patternsraw as $toSearch) {
goto Vp7Zh;
N9d2n:
if (!($substrCount !== false || $matchcount > 0)) {
goto kvqUF;
}
goto PWsNA;
G1VX3:
goto VhBUX;
goto d7yei;
Vp7Zh:
$priority = substr($toSearch->pattern, 0, 1);
goto okzcN;
eIrFu:
$substrCount = strpos($fileContent_sr, $nowpattern);
goto QitwP;
d7yei:
kvqUF:
goto H3ayl;
QitwP:
$matchcount = 0;
goto IRYQx;
okzcN:
$nowpattern = substr($toSearch->pattern, 1);
goto eIrFu;
GYhne:
$matchcount = preg_match_all($nowpattern, $fileContent_sr, $m);
goto ULNzk;
H3ayl:
t5b3c:
goto xT2tv;
IRYQx:
if (!($toSearch->r == 1)) {
goto KRlZ5;
}
goto GYhne;
ULNzk:
KRlZ5:
goto N9d2n;
PWsNA:
$found = true;
goto G1VX3;
xT2tv:
}
goto Jq8P8;
DZTgd:
$fileContent_sr = str_replace("\xd", "\xa", $fileContent_sr);
goto hzhWU;
a2NHo:
$found = false;
goto bvFkv;
clxPi:
}
}
?>