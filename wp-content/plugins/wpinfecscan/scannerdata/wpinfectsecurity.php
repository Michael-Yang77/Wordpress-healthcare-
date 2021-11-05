<?php
goto W8OE6;
OSwK8:
function wpinfecscanner_auto_redirect_after_logout()
{
wp_redirect(wpinfectsecurity_new_login_url());
exit;
}
goto jpssE;
V_Lz0:
$r = $_SERVER["\122\x45\121\x55\x45\123\x54\x5f\x55\x52\111"];
goto EWrR_;
txwsR:
function wpinfectsecurity_new_login_url($scheme = null)
{
goto xT26X;
X1ET8:
if (get_option("\x70\x65\162\155\141\x6c\151\156\x6b\137\163\x74\x72\x75\x63\164\x75\x72\145")) {
goto wnCAe;
}
goto OApOP;
urqPc:
wnCAe:
goto qrVy6;
xT26X:
$loginurl = get_option("\167\x70\151\156\x66\145\x63\164\163\x63\141\x6e\x6e\145\x72\137\154\157\147\x69\156\x75\162\x6c");
goto X1ET8;
qrVy6:
return site_url("\x2f", $scheme) . $loginurl;
goto WPw0N;
eT91P:
goto Xekbl;
goto urqPc;
OApOP:
return home_url("\57", $scheme) . "\77" . $loginurl;
goto eT91P;
WPw0N:
Xekbl:
goto QKAnY;
QKAnY:
}
goto jSYDj;
hj6VB:
function wpinfec_security_set_lockdown($ip)
{
$len = 10;
set_transient(wpinfec_security_get_lockdown_key($ip), true, $len * 60);
}
goto xNlht;
xP7ze:
Vy5w1:
goto rBWVl;
jSYDj:
function wpinfecscanner_security_loaded()
{
goto VZM0S;
OP006:
NzVBY:
goto doav_;
wrTY6:
if (strpos($r, "\x77\x70\55\154\157\x67\151\x6e\x2e\x70\x68\160") !== false) {
goto r_xrH;
}
goto C3QmH;
XJvY_:
$request = parse_url($r);
goto W7Pr2;
VN59h:
r_xrH:
goto jgPHF;
IprL0:
@(require_once ABSPATH . "\x77\160\55\x6c\157\x67\151\x6e\56\160\x68\x70");
goto j7Gsa;
U3gkY:
nocache_headers();
goto IprL0;
GjT5Y:
global $error, $interim_login, $action, $user_login;
goto U3gkY;
VZM0S:
if (!(is_admin() && !is_user_logged_in() && !defined("\x44\x4f\x49\116\x47\137\x41\112\x41\x58"))) {
goto Np2jS;
}
goto QgyYi;
BntcV:
$r = $_SERVER["\x52\x45\x51\x55\105\x53\124\137\125\x52\111"];
goto XJvY_;
S6Idx:
Np2jS:
goto BntcV;
Uv5W6:
ARq1r:
goto dxQyE;
rpwV2:
if (preg_match("\57\x6c\157\147\x69\156\x24\57", $r) || preg_match("\x2f\154\157\147\x69\156\134\x2f\x24\x2f", $r)) {
goto uKgzo;
}
goto akbd1;
jgPHF:
wp_die(__("\x41\x63\x63\x65\x73\x73\40\144\x65\156\151\x65\144\x2e", "\167\x70\x69\x6e\146\x65\x63\x73\143\x61\156"));
goto dX69P;
xSu8F:
goto ARq1r;
goto pu712;
xEuPw:
wp_die(__("\101\x63\x63\x65\163\x73\40\x64\x65\156\151\145\x64\56", "\x77\x70\151\x6e\146\x65\x63\163\x63\x61\156"));
goto xSu8F;
doav_:
wp_die(__("\x41\x63\143\x65\163\163\40\x64\x65\x6e\151\145\x64\x2e", "\167\x70\151\x6e\x66\x65\143\163\x63\141\x6e"));
goto NGElc;
W7Pr2:
$allurl = (empty($_SERVER["\x48\124\124\x50\x53"]) ? "\150\164\x74\x70\72\x2f\x2f" : "\150\164\x74\x70\x73\72\x2f\57") . $_SERVER["\x48\x54\x54\x50\137\x48\117\123\x54"] . $r;
goto wrTY6;
NGElc:
goto ARq1r;
goto Sz11_;
C3QmH:
if (strpos($r, "\167\x70\x2d\154\157\147\151\156") !== false) {
goto NzVBY;
}
goto rpwV2;
j7Gsa:
die;
goto Uv5W6;
pu712:
Nnler:
goto GjT5Y;
l3GnU:
goto ARq1r;
goto VN59h;
akbd1:
if (strpos($allurl, wpinfectsecurity_new_login_url()) !== false || strpos($allurl . "\x2f", wpinfectsecurity_new_login_url()) !== false) {
goto Nnler;
}
goto l3GnU;
QgyYi:
wp_die(__("\x41\143\x63\x65\163\163\40\x64\x65\156\x69\145\144\56", "\x77\160\x69\x6e\x66\145\x63\x73\x63\141\x6e"));
goto S6Idx;
Sz11_:
uKgzo:
goto xEuPw;
dX69P:
goto ARq1r;
goto OP006;
dxQyE:
}
goto C448F;
iz57E:
function wpinfecscanner_security_pwresetcapture()
{
goto ky43m;
ky43m:
global $mysecurytysetting;
goto Zuu4l;
YAQ80:
add_filter("\154\x6f\x73\164\160\x61\x73\x73\x77\x6f\162\144\x5f\160\157\163\164", "\127\x50\151\156\146\145\x63\163\x63\141\156\156\x65\162\137\103\141\160\164\143\150\141\x5f\120\127\122\x65\163\145\x74\x5f\101\165\x74\150");
goto blA8q;
Zuu4l:
if (!$mysecurytysetting) {
goto sITjC;
}
goto O9x6e;
heVQZ:
if (!($security_pwresetcaptcha == 1)) {
goto tVh5t;
}
goto FVsBh;
A8ybm:
add_action("\x6c\157\x73\164\x70\x61\x73\163\x77\157\162\x64\x5f\146\x6f\x72\155", "\x57\120\151\156\146\145\x63\163\x63\x61\156\156\x65\162\x5f\103\x61\160\164\143\150\141\137\120\x57\122\x65\x73\x65\164\x5f\x46\151\x65\x6c\144");
goto YAQ80;
O9x6e:
$security_pwresetcaptcha = $mysecurytysetting->security_pwresetcaptcha;
goto heVQZ;
blA8q:
tVh5t:
goto ukteO;
FVsBh:
session_start();
goto A8ybm;
ukteO:
sITjC:
goto fUry1;
fUry1:
}
goto Y0I4M;
iDLin:
class WPInfectSecurity
{
public function security_filehogo($mode)
{
goto Jz_8b;
b355g:
return false;
goto DOsV6;
FDm0W:
$rules .= "\74\106\x69\154\145\163\40\x2e\x68\x74\x61\143\x63\145\x73\x73\x3e" . PHP_EOL;
goto ir12_;
aqMu3:
return false;
goto L232j;
vIPsY:
goto v0osC;
goto VIjHV;
L232j:
goto nQhMA;
goto MSndr;
RdfFr:
$rules .= "\x3c\111\x66\x4d\157\144\x75\x6c\x65\40\x21\x6d\x6f\x64\137\x61\x75\x74\x68\172\137\x63\x6f\x72\145\x2e\143\x3e" . PHP_EOL;
goto UItTh;
Jz_8b:
if ($mode == 1) {
goto zMw2P;
}
goto G9NwL;
StJ16:
$rules .= "\122\x65\x71\165\x69\x72\x65\x20\x61\x6c\x6c\40\x64\145\156\x69\145\144" . PHP_EOL;
goto vZCaP;
NmuSL:
$rules .= "\x44\x65\156\x79\40\146\162\157\155\x20\x61\154\154" . PHP_EOL;
goto JJUBe;
HfsvB:
$rules = "\x23\106\x49\x4c\105\x5f\123\x45\103\125\122\x49\124\131\137\123\124\101\x52\124" . PHP_EOL;
goto FDm0W;
R3CPf:
return true;
goto gHN9R;
MSndr:
S3r4j:
goto slSrz;
DOsV6:
NQ0DO:
goto P6PuR;
C2tLH:
b5yCk:
goto fEZ5O;
wcxXP:
$rules .= "\74\x2f\x49\x66\x4d\157\144\165\154\145\x3e" . PHP_EOL;
goto RdfFr;
slRgK:
$htaccess_file = $home_path . "\x2e\x68\164\141\143\x63\145\163\x73";
goto n_kz8;
DGjVD:
$rules .= "\74\x49\146\x4d\x6f\144\x75\x6c\x65\40\x6d\x6f\x64\x5f\141\165\164\x68\x7a\137\143\x6f\x72\x65\x2e\143\76" . PHP_EOL;
goto StJ16;
UItTh:
$rules .= "\x4f\162\x64\145\162\x20\144\x65\156\x79\54\141\154\x6c\x6f\167" . PHP_EOL;
goto Q8pv2;
QmxbT:
$rules .= "\74\57\x46\151\x6c\145\x73\76" . PHP_EOL;
goto paEjB;
ir12_:
$rules .= "\x3c\x49\x66\115\157\x64\x75\154\145\x20\x6d\x6f\144\x5f\141\165\x74\x68\x7a\137\143\x6f\x72\145\x2e\143\76" . PHP_EOL;
goto L0CQk;
IL10s:
return false;
goto Rtlax;
sRe2i:
$htaccess_file = $home_path . "\x2e\150\x74\141\x63\x63\145\x73\x73";
goto hhdum;
WDxNk:
if ($lines != false) {
goto S3r4j;
}
goto aqMu3;
TG8mF:
if ($lines != false) {
goto rAnvd;
}
goto IL10s;
paEjB:
$rules .= "\74\106\151\154\145\163\40\167\160\x2d\143\x6f\x6e\x66\x69\x67\56\x70\x68\x70\76" . PHP_EOL;
goto DGjVD;
gHN9R:
goto vG_ip;
goto M8zvk;
fEZ5O:
v0osC:
goto P5c_8;
gc3zc:
BRsnQ:
goto b355g;
G9NwL:
$lines = $this->readhtaccess("\x23\106\111\x4c\105\137\123\105\x43\x55\122\111\x54\x59\137\x53\124\101\122\124", "\x23\x46\111\x4c\x45\x5f\x53\105\x43\x55\122\x49\124\x59\x5f\x45\x4e\104");
goto WDxNk;
kgCuE:
$rules .= "\x3c\57\x46\x69\x6c\145\x73\x3e" . PHP_EOL;
goto XkcRG;
nfnrL:
$home_path = get_home_path();
goto sRe2i;
slSrz:
$home_path = get_home_path();
goto slRgK;
p5iYI:
rAnvd:
goto FmqXP;
P6PuR:
nQhMA:
goto vIPsY;
vZCaP:
$rules .= "\74\x2f\x49\146\115\x6f\x64\x75\x6c\145\76" . PHP_EOL;
goto csDEr;
hhdum:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto NVr4O;
}
goto R3CPf;
FmqXP:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto HfsvB;
VIjHV:
zMw2P:
goto sD4RF;
L0CQk:
$rules .= "\122\x65\161\165\x69\162\x65\40\x61\x6c\154\x20\x64\145\156\151\145\x64" . PHP_EOL;
goto wcxXP;
HYfiW:
return true;
goto GDSz_;
csDEr:
$rules .= "\x3c\111\x66\115\157\x64\165\x6c\x65\40\x21\155\157\x64\x5f\141\x75\164\x68\x7a\137\x63\x6f\162\145\56\x63\76" . PHP_EOL;
goto q0BDs;
JJUBe:
$rules .= "\74\x2f\x49\x66\115\157\144\x75\x6c\145\76" . PHP_EOL;
goto kgCuE;
JvjYA:
return false;
goto muQI6;
GDSz_:
goto NQ0DO;
goto gc3zc;
muQI6:
vG_ip:
goto C2tLH;
q0BDs:
$rules .= "\x4f\162\144\x65\x72\x20\144\145\x6e\x79\x2c\x61\154\154\x6f\x77" . PHP_EOL;
goto NmuSL;
XkcRG:
$rules .= "\x23\x46\x49\114\105\137\123\105\103\x55\122\x49\x54\131\x5f\105\x4e\104" . PHP_EOL;
goto nfnrL;
Q8pv2:
$rules .= "\x44\x65\x6e\x79\40\146\162\x6f\x6d\x20\x61\x6c\154" . PHP_EOL;
goto v1ooD;
M8zvk:
NVr4O:
goto JvjYA;
v1ooD:
$rules .= "\x3c\x2f\111\146\115\157\144\x75\x6c\145\76" . PHP_EOL;
goto QmxbT;
Rtlax:
goto b5yCk;
goto p5iYI;
n_kz8:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto BRsnQ;
}
goto HYfiW;
sD4RF:
$lines = $this->readhtaccess("\x23\106\111\x4c\105\137\x53\105\103\125\x52\111\x54\x59\x5f\123\x54\101\122\124", "\x23\106\x49\114\105\137\123\105\103\x55\x52\111\x54\131\137\x45\116\x44");
goto TG8mF;
P5c_8:
}
public function security_tracktrace($mode)
{
goto LK5N7;
lkX9A:
goto Aeb3C;
goto ztW6k;
LK5N7:
if ($mode == 1) {
goto hkS9Q;
}
goto HxXKc;
XWoBr:
return false;
goto DWT7Y;
LYV4c:
ehumD:
goto hlTk8;
VT1dI:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto ZnDZ5;
JFRdj:
$rules .= "\x23\123\x45\x52\x56\x45\122\x5f\124\122\101\x43\113\x54\x52\x41\x43\x45\x5f\105\x4e\x44" . PHP_EOL;
goto w6H0q;
u4t7R:
$lines = $this->readhtaccess("\x23\x53\x45\122\x56\x45\122\x5f\x54\122\101\103\x4b\124\122\101\103\105\137\123\124\101\122\x54", "\x23\x53\x45\x52\126\x45\x52\137\124\122\101\x43\x4b\x54\x52\x41\103\x45\x5f\x45\116\104");
goto XW9Nt;
I7eVi:
$rules .= "\x52\x65\167\x72\151\x74\x65\103\157\156\144\x20\45\173\122\105\121\125\x45\123\124\137\x4d\x45\x54\110\117\104\x7d\x20\x5e\50\x54\x52\101\x43\x45\174\124\122\x41\x43\x4b\51" . PHP_EOL;
goto aQM3t;
FsTQA:
$rules .= "\x3c\111\146\x4d\157\x64\x75\x6c\x65\40\155\x6f\x64\x5f\162\145\167\162\x69\164\145\x2e\143\x3e" . PHP_EOL;
goto JQHIB;
fmh9s:
$home_path = get_home_path();
goto YxylM;
CbmlO:
$rules .= "\x3c\57\x49\x66\115\157\x64\165\154\x65\76" . PHP_EOL;
goto JFRdj;
KhpVI:
return false;
goto Pa29q;
XMDtl:
if ($lines != false) {
goto rtfex;
}
goto Xd1XS;
xsiE8:
goto C_xpU;
goto m1ssx;
ydUR8:
return true;
goto xsiE8;
DWT7Y:
ogHwP:
goto zoXps;
IkdpQ:
return true;
goto WWKBX;
ZnDZ5:
$rules = "\43\x53\x45\x52\126\105\x52\x5f\x54\122\101\103\x4b\x54\x52\x41\103\105\x5f\x53\124\101\x52\124" . PHP_EOL;
goto FsTQA;
m1ssx:
nWfnk:
goto KhpVI;
JIgRx:
$htaccess_file = $home_path . "\x2e\150\164\141\x63\143\145\x73\163";
goto GzaxM;
JQHIB:
$rules .= "\122\145\x77\x72\x69\x74\x65\105\x6e\147\x69\156\145\x20\117\x6e" . PHP_EOL;
goto I7eVi;
lGjYn:
rtfex:
goto fmh9s;
zoXps:
lTDvW:
goto lkX9A;
xfXju:
goto lTDvW;
goto lGjYn;
PsXY0:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto YXVc3;
}
goto IkdpQ;
GzaxM:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto nWfnk;
}
goto ydUR8;
Pa29q:
C_xpU:
goto LYV4c;
ez0kk:
HrSi1:
goto VT1dI;
YxylM:
$htaccess_file = $home_path . "\56\x68\164\x61\x63\x63\x65\x73\x73";
goto PsXY0;
hlTk8:
Aeb3C:
goto uOjRs;
XW9Nt:
if ($lines != false) {
goto HrSi1;
}
goto hbTps;
w6H0q:
$home_path = get_home_path();
goto JIgRx;
WWKBX:
goto ogHwP;
goto OUqvP;
ztW6k:
hkS9Q:
goto u4t7R;
hbTps:
return false;
goto eTmgv;
eTmgv:
goto ehumD;
goto ez0kk;
OUqvP:
YXVc3:
goto XWoBr;
Xd1XS:
return false;
goto xfXju;
aQM3t:
$rules .= "\x52\145\167\162\x69\164\145\x52\x75\154\x65\x20\x2e\52\40\55\40\133\106\135" . PHP_EOL;
goto CbmlO;
HxXKc:
$lines = $this->readhtaccess("\43\x53\105\122\126\105\x52\x5f\124\x52\101\103\x4b\x54\x52\101\x43\x45\137\x53\x54\101\x52\124", "\x23\123\x45\122\x56\105\x52\137\124\x52\101\103\x4b\x54\x52\x41\103\105\137\105\x4e\x44");
goto XMDtl;
uOjRs:
}
public function security_serverhogo($mode)
{
goto ui9J2;
O8eGW:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto OudmF;
J72Lj:
jHg6y:
goto hLPwT;
datTO:
$rules .= "\122\x65\161\x75\x69\x72\x65\40\141\154\x6c\x20\144\145\x6e\x69\145\x64" . PHP_EOL;
goto XbD56;
cMxhb:
$rules .= "\x3c\x49\x66\115\157\144\165\154\x65\x20\x6d\x6f\x64\137\x61\x75\164\150\172\x5f\143\x6f\162\x65\56\143\76" . PHP_EOL;
goto vIaGB;
xbbYC:
$rules .= "\43\x53\105\x52\126\x45\122\137\x53\105\103\x55\x52\x49\x54\131\137\x45\x4e\x44" . PHP_EOL;
goto SoMRc;
m0MUC:
$lines = $this->readhtaccess("\43\x53\x45\122\x56\x45\x52\x5f\123\105\x43\x55\122\x49\x54\131\137\x53\124\x41\122\124", "\43\123\x45\122\126\105\x52\x5f\x53\x45\x43\x55\x52\111\124\131\x5f\105\x4e\104");
goto d2G56;
vIaGB:
$rules .= "\122\x65\161\x75\151\162\145\40\x61\x6c\154\40\x64\x65\x6e\151\145\144" . PHP_EOL;
goto ZUSzJ;
vG7oR:
$rules .= "\x4f\x72\x64\x65\x72\x20\144\145\156\x79\54\x61\x6c\154\x6f\x77" . PHP_EOL;
goto FJvnT;
C32l7:
$rules .= "\x3c\x49\x66\115\x6f\144\165\154\x65\40\x21\155\x6f\x64\137\x61\x75\x74\150\x7a\x5f\x63\x6f\x72\145\56\143\x3e" . PHP_EOL;
goto vG7oR;
ui9J2:
if ($mode == 1) {
goto HdJqo;
}
goto hrsJJ;
O81Vs:
goto NRnIc;
goto ngLgN;
qvytD:
if ($lines != false) {
goto IqZNv;
}
goto wghBk;
PLCOa:
$rules .= "\74\57\106\151\x6c\145\x73\76" . PHP_EOL;
goto xbbYC;
aTzf6:
$rules .= "\x4f\x72\144\x65\x72\40\144\x65\x6e\171\54\x61\x6c\x6c\x6f\167" . PHP_EOL;
goto SWWAy;
tkAI2:
$rules .= "\74\x2f\x49\x66\115\157\144\x75\x6c\x65\x3e" . PHP_EOL;
goto PLCOa;
OudmF:
$rules = "\x23\x53\105\x52\x56\x45\x52\137\123\x45\103\125\x52\111\x54\131\x5f\123\x54\x41\122\124" . PHP_EOL;
goto eDCDO;
UpQmS:
return true;
goto L0lhK;
tP5Z8:
$rules .= "\74\111\146\x4d\157\x64\165\154\145\40\x21\x6d\157\x64\x5f\x61\165\x74\150\172\x5f\x63\157\162\145\56\143\76" . PHP_EOL;
goto aTzf6;
d2G56:
if ($lines != false) {
goto WDzmm;
}
goto kwiez;
ce_zJ:
$home_path = get_home_path();
goto ujtFW;
fUPV2:
$rules .= "\x3c\57\x49\146\115\x6f\x64\165\154\x65\76" . PHP_EOL;
goto DPKt3;
ewMm9:
OysQB:
goto eKYEc;
ngLgN:
HdJqo:
goto m0MUC;
WravO:
WDzmm:
goto O8eGW;
t9fyp:
$rules .= "\74\111\146\x4d\x6f\144\165\154\145\40\41\155\x6f\x64\x5f\141\x75\164\x68\x7a\x5f\143\x6f\162\x65\x2e\143\76" . PHP_EOL;
goto e6HTL;
uotew:
$rules .= "\74\111\x66\x4d\x6f\144\165\154\145\x20\x6d\x6f\x64\x5f\x61\x75\164\x68\172\x5f\143\x6f\162\145\56\143\x3e" . PHP_EOL;
goto ecvT1;
KL1QH:
$rules .= "\x3c\x46\151\154\145\163\40\167\x70\x2d\143\x6f\156\146\151\x67\55\163\141\x6d\160\154\145\56\160\x68\160\x3e" . PHP_EOL;
goto cMxhb;
bE1zM:
NRnIc:
goto LUQF_;
W0KHn:
goto vslQG;
goto cWMCS;
u_YPI:
$rules .= "\74\x2f\111\146\115\x6f\x64\x75\154\145\76" . PHP_EOL;
goto Ugg4I;
qeQjw:
$rules .= "\x3c\x46\x69\x6c\x65\x73\40\x6c\151\x63\145\156\163\x65\x2e\x74\x78\x74\76" . PHP_EOL;
goto KlTIu;
E9LMh:
vslQG:
goto eZjik;
cWMCS:
cf2t0:
goto OAN1R;
N3hBm:
goto cUgnB;
goto WravO;
wghBk:
return false;
goto Px_0l;
Ugg4I:
$rules .= "\x3c\x2f\106\151\x6c\145\163\x3e" . PHP_EOL;
goto ZrGHu;
dSMkK:
$htaccess_file = $home_path . "\56\x68\164\141\x63\x63\x65\x73\163";
goto gdJ9A;
ujtFW:
$htaccess_file = $home_path . "\x2e\150\164\x61\143\143\145\x73\x73";
goto MHmfK;
eDCDO:
$rules .= "\x53\x65\162\166\x65\162\x53\151\x67\x6e\141\164\x75\162\x65\x20\117\146\x66" . PHP_EOL;
goto qeQjw;
FJvnT:
$rules .= "\x44\x65\x6e\x79\40\x66\x72\x6f\x6d\x20\x61\x6c\154" . PHP_EOL;
goto tkAI2;
ecvT1:
$rules .= "\122\x65\x71\x75\x69\x72\145\40\141\154\x6c\40\144\x65\x6e\151\x65\x64" . PHP_EOL;
goto g9e5U;
MnazN:
IqZNv:
goto ce_zJ;
Px_0l:
goto WdEet;
goto MnazN;
eZjik:
cUgnB:
goto bE1zM;
g9e5U:
$rules .= "\74\x2f\x49\x66\115\x6f\x64\165\x6c\145\x3e" . PHP_EOL;
goto C32l7;
ZUSzJ:
$rules .= "\74\57\x49\x66\115\x6f\144\165\154\145\76" . PHP_EOL;
goto t9fyp;
e6HTL:
$rules .= "\x4f\x72\144\145\x72\40\144\145\156\x79\x2c\141\x6c\x6c\157\x77" . PHP_EOL;
goto bQV9F;
L0lhK:
goto OysQB;
goto J72Lj;
ZrGHu:
$rules .= "\x3c\x46\x69\x6c\145\163\40\x72\145\141\144\x6d\x65\x2e\150\164\x6d\x6c\x3e" . PHP_EOL;
goto uotew;
kwiez:
return false;
goto N3hBm;
SWWAy:
$rules .= "\x44\145\156\x79\x20\146\x72\157\x6d\40\x61\154\x6c" . PHP_EOL;
goto fUPV2;
XbD56:
$rules .= "\74\x2f\x49\146\x4d\157\144\165\154\x65\76" . PHP_EOL;
goto tP5Z8;
DPKt3:
$rules .= "\74\57\x46\x69\154\145\163\x3e" . PHP_EOL;
goto KL1QH;
SoMRc:
$home_path = get_home_path();
goto dSMkK;
bQV9F:
$rules .= "\104\145\x6e\171\40\146\x72\157\155\40\x61\x6c\x6c" . PHP_EOL;
goto u_YPI;
hrsJJ:
$lines = $this->readhtaccess("\43\123\105\122\x56\x45\122\x5f\x53\105\x43\125\122\x49\x54\x59\x5f\123\124\x41\x52\x54", "\43\x53\105\122\126\105\x52\x5f\x53\105\x43\x55\x52\x49\x54\131\x5f\x45\116\x44");
goto qvytD;
eKYEc:
WdEet:
goto O81Vs;
jIDgf:
return true;
goto W0KHn;
MHmfK:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto jHg6y;
}
goto UpQmS;
KlTIu:
$rules .= "\x3c\x49\x66\x4d\157\144\165\x6c\145\x20\155\x6f\x64\x5f\x61\165\164\150\x7a\137\x63\157\162\145\56\143\x3e" . PHP_EOL;
goto datTO;
gdJ9A:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto cf2t0;
}
goto jIDgf;
hLPwT:
return false;
goto ewMm9;
OAN1R:
return false;
goto E9LMh;
LUQF_:
}
public function security_authorhogo($mode)
{
goto trq1H;
trq1H:
if ($mode == 1) {
goto CrYBP;
}
goto aGhgb;
VJrvU:
QpYJK:
goto xG3oB;
SkJkb:
$rules .= "\122\x65\x77\x72\151\164\145\x45\x6e\x67\151\156\145\40\x4f\x6e" . PHP_EOL;
goto KH7OU;
jV4XY:
return false;
goto Yg_uk;
N6j9V:
yPpZV:
goto CzjRy;
KH7OU:
$rules .= "\x52\145\167\162\x69\x74\x65\122\x75\x6c\145\40\x5e\x61\x75\164\x68\157\x72\x2f\x28\56\52\51\40\x2d\40\x5b\x52\x3d\64\60\x34\54\x4c\135" . PHP_EOL;
goto V_wux;
CzjRy:
OJYVZ:
goto geClf;
fCBvA:
PJuYS:
goto Q8LdL;
z3YMx:
goto QpYJK;
goto oPehH;
fMU32:
return true;
goto yu7Z4;
gtemj:
$htaccess_file = $home_path . "\56\150\x74\x61\x63\143\x65\x73\x73";
goto NVA1m;
gEMVB:
if ($lines != false) {
goto Kx7Nj;
}
goto SkqJ0;
oPehH:
fiobQ:
goto vmeiS;
oF2ts:
CrYBP:
goto MyUOr;
SkqJ0:
return false;
goto qlgGZ;
Lcbj6:
goto OJYVZ;
goto oF2ts;
Q8LdL:
return false;
goto QEHBH;
MyUOr:
$lines = $this->readhtaccess("\x23\101\125\x54\x48\x4f\x52\x48\x4f\x47\117\137\x53\124\x41\x52\x54", "\x23\101\x55\x54\110\117\122\x48\117\107\x4f\137\x45\x4e\104");
goto EoyfP;
m55Lz:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto CZtL8;
tePg2:
$home_path = get_home_path();
goto PQ0IM;
vmeiS:
return false;
goto VJrvU;
l7qyE:
Jd4Yu:
goto m55Lz;
M8ENy:
Kx7Nj:
goto EFag1;
W9ea1:
$rules .= "\74\57\111\146\x4d\157\144\x75\x6c\145\76" . PHP_EOL;
goto fAygb;
V_wux:
$rules .= "\x52\x65\167\x72\151\164\145\103\x6f\156\x64\40\45\173\121\125\105\122\x59\137\x53\124\122\111\116\x47\x7d\40\141\165\164\x68\x6f\162\x3d\50\x2e\x2a\51" . PHP_EOL;
goto d4IpJ;
yu7Z4:
goto i_t1u;
goto fCBvA;
CZtL8:
$rules = "\43\101\x55\x54\110\x4f\122\110\x4f\x47\x4f\x5f\123\x54\x41\x52\x54" . PHP_EOL;
goto HzGoj;
fAygb:
$rules .= "\x23\x41\125\x54\110\117\x52\110\x4f\x47\x4f\x5f\105\116\104" . PHP_EOL;
goto tePg2;
PQ0IM:
$htaccess_file = $home_path . "\x2e\x68\x74\141\143\x63\x65\x73\163";
goto MebkP;
QEHBH:
i_t1u:
goto N6j9V;
Yg_uk:
goto yPpZV;
goto l7qyE;
MebkP:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto PJuYS;
}
goto fMU32;
EFag1:
$home_path = get_home_path();
goto gtemj;
EoyfP:
if ($lines != false) {
goto Jd4Yu;
}
goto jV4XY;
aDAH8:
return true;
goto z3YMx;
qlgGZ:
goto pbcX1;
goto M8ENy;
xG3oB:
pbcX1:
goto Lcbj6;
NVA1m:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto fiobQ;
}
goto aDAH8;
d4IpJ:
$rules .= "\122\145\167\x72\151\164\x65\x52\165\x6c\x65\40\136\44\x20\x2d\40\x5b\x52\x3d\x34\60\x34\x2c\x4c\135" . PHP_EOL;
goto W9ea1;
HzGoj:
$rules .= "\74\x49\x66\x4d\157\144\165\x6c\145\x20\x6d\157\x64\137\162\x65\167\162\x69\x74\145\56\x63\76" . PHP_EOL;
goto SkJkb;
aGhgb:
$lines = $this->readhtaccess("\x23\101\125\124\110\117\x52\x48\117\107\117\137\123\x54\x41\122\124", "\x23\101\125\124\x48\117\122\x48\x4f\107\117\137\105\116\104");
goto gEMVB;
geClf:
}
public function security_blockip2($setting)
{
goto g3wnp;
MMvbP:
$apache24 = false;
goto BYV8k;
rBMDI:
$iptxt = "\x52\145\161\165\x69\162\x65\40\x6e\x6f\x74\x20\151\x70\40" . $ip;
goto SQjxz;
BrPoz:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto ykuj2;
sx9fo:
goto U1uoz;
goto yidCd;
ZPg9L:
$ip = $setting[$i];
goto wqKmk;
FrnH9:
$rules .= "\74\x2f\x4c\x69\155\151\164\76" . PHP_EOL;
goto JUib9;
ellcO:
goto kRSLA;
goto G3nlg;
g3wnp:
$mode = 0;
goto XC_j3;
fX0Fn:
Q3nA4:
goto eUBL_;
JPzqr:
vAMMy:
goto MMvbP;
IvHYv:
zm0sN:
goto M8JKZ;
QRONR:
$i++;
goto ZxFsZ;
xHesl:
FZpWG:
goto BrPoz;
kBArA:
B0rZy:
goto RnM6g;
OTpsx:
$home_path = get_home_path();
goto ESLev;
xVznc:
goto DIsgn;
goto fX0Fn;
TeEK7:
$rules .= $iptxt . PHP_EOL;
goto cozsB;
vONrm:
if (!($i < count($setting))) {
goto rHlNd;
}
goto ZPg9L;
LefH6:
$iptxt = "\144\x65\x6e\x79\40\146\162\157\x6d\x20" . $ip;
goto eRLSa;
ypJtH:
$mode = 1;
goto JPzqr;
jcygh:
if ($mode == 1) {
goto lyN22;
}
goto ZbLOY;
l7u_7:
lyN22:
goto ypIyW;
YzBBb:
goto B0rZy;
goto xHesl;
vnM7i:
if ($apache24) {
goto OXH4x;
}
goto LefH6;
sevLq:
DIsgn:
goto kBArA;
QJuXv:
if (!$apache24) {
goto dYWDt;
}
goto KD1Gv;
M8JKZ:
$rules .= "\74\114\x69\x6d\151\x74\40\107\x45\x54\x20\110\105\101\x44\x20\120\117\123\x54\76" . PHP_EOL;
goto Fx1ne;
ctCbR:
if ($lines != false) {
goto FZpWG;
}
goto rEoDv;
cozsB:
uEb7a:
goto SC3Z5;
KmQ6L:
$version = $_SERVER["\x53\x45\122\x56\x45\x52\x5f\x53\x4f\106\x54\127\101\122\x45"];
goto hMczS;
SC3Z5:
NoXim:
goto QRONR;
DygSF:
$version = apache_get_version();
goto ikxNJ;
AMC6X:
if (!$apache24) {
goto zm0sN;
}
goto zG7p5;
ZxFsZ:
goto BbxaK;
goto xvQAX;
G3nlg:
dYWDt:
goto FrnH9;
iGSL5:
$home_path = get_home_path();
goto Q52aH;
Fx1ne:
$rules .= "\157\162\144\x65\x72\40\x61\154\x6c\x6f\x77\54\x64\x65\x6e\x79" . PHP_EOL;
goto Yl5gN;
Z5xL_:
return false;
goto uVn8D;
MR4yX:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto Q3nA4;
}
goto S9raX;
uVn8D:
OPw2_:
goto ERHQn;
PRlqg:
return true;
goto HI5AQ;
yidCd:
SgfNx:
goto iGSL5;
wqKmk:
if (!filter_var($ip, FILTER_VALIDATE_IP)) {
goto uEb7a;
}
goto vnM7i;
ESLev:
$htaccess_file = $home_path . "\56\150\164\x61\x63\x63\x65\x73\163";
goto MR4yX;
dKaWq:
O51dL:
goto KbTSR;
SQjxz:
gZjAe:
goto TeEK7;
ikxNJ:
Yvf7n:
goto VOVEA;
KD1Gv:
$rules .= "\x3c\57\122\145\x71\x75\151\162\145\101\154\x6c\76" . PHP_EOL;
goto ellcO;
ypIyW:
$lines = $this->readhtaccess("\43\102\x4c\x4f\x43\x4b\x49\120\x5f\x53\124\101\x52\124\x32", "\x23\x42\114\x4f\103\x4b\111\x50\x5f\105\116\104\x32");
goto ctCbR;
fSGCv:
goto xaSW1;
goto l7u_7;
S9Gb2:
$apache24 = true;
goto JKaLt;
eRLSa:
goto gZjAe;
goto Y2FS2;
uKfUq:
if ($lines != false) {
goto SgfNx;
}
goto gLxQw;
RnM6g:
xaSW1:
goto n8R21;
XC_j3:
if (empty($setting)) {
goto vAMMy;
}
goto ypJtH;
xvQAX:
rHlNd:
goto QJuXv;
ERHQn:
U1uoz:
goto fSGCv;
HI5AQ:
goto OPw2_;
goto y6JEg;
hMczS:
goto Yvf7n;
goto jtWoV;
zG7p5:
$rules .= "\74\122\145\161\165\x69\162\x65\101\x6c\154\x3e" . PHP_EOL;
goto egV6i;
y6JEg:
KVelM:
goto Z5xL_;
Q52aH:
$htaccess_file = $home_path . "\56\x68\x74\x61\x63\143\145\x73\x73";
goto gLqCI;
eUBL_:
return false;
goto sevLq;
ZbLOY:
$lines = $this->readhtaccess("\x23\102\x4c\x4f\x43\113\x49\x50\x5f\123\x54\101\122\x54\62", "\43\102\x4c\x4f\x43\113\x49\x50\x5f\x45\x4e\104\62");
goto uKfUq;
VOVEA:
if (!(strpos($version, "\62\x2e\64") !== false || strpos($version, "\62\56\65") !== false)) {
goto RXjOJ;
}
goto S9Gb2;
Y2FS2:
OXH4x:
goto rBMDI;
egV6i:
$rules .= "\122\145\x71\165\x69\162\x65\40\141\154\154\x20\147\162\141\x6e\x74\x65\x64" . PHP_EOL;
goto j_8GO;
j_8GO:
goto O51dL;
goto IvHYv;
jtWoV:
moz08:
goto DygSF;
rEoDv:
return false;
goto YzBBb;
Yl5gN:
$rules .= "\x61\x6c\154\157\x77\40\146\162\157\155\40\x61\154\154" . PHP_EOL;
goto dKaWq;
S9raX:
return true;
goto xVznc;
gLxQw:
return false;
goto sx9fo;
ykuj2:
$rules = "\43\x42\x4c\x4f\x43\113\111\x50\137\123\x54\101\x52\x54\x32" . PHP_EOL;
goto AMC6X;
JKaLt:
RXjOJ:
goto jcygh;
dZlNc:
$rules .= "\x23\x42\114\x4f\103\x4b\x49\x50\137\105\x4e\104\62" . PHP_EOL;
goto OTpsx;
JUib9:
kRSLA:
goto dZlNc;
KbTSR:
$i = 0;
goto S1pm4;
BYV8k:
if (function_exists("\141\x70\141\143\x68\x65\137\x67\x65\x74\x5f\x76\145\x72\163\x69\157\156")) {
goto moz08;
}
goto KmQ6L;
S1pm4:
BbxaK:
goto vONrm;
gLqCI:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto KVelM;
}
goto PRlqg;
n8R21:
}
public function security_noindex($mode)
{
goto zEnAF;
m8a5X:
$lines = $this->readhtaccess("\x23\116\x4f\111\116\x44\105\x58\137\x53\x54\x41\x52\x54", "\x23\116\x4f\111\x4e\x44\x45\130\137\x45\116\104");
goto h7yJd;
s2sY1:
return false;
goto k6wCi;
QWg0Q:
IJ0ND:
goto DgI7e;
Tkjdf:
$lines = $this->readhtaccess("\x23\116\117\111\x4e\x44\105\x58\x5f\x53\x54\101\122\124", "\43\116\x4f\111\116\x44\105\130\x5f\x45\x4e\x44");
goto qmeVC;
Drt3M:
booko:
goto QWg0Q;
WWu97:
$home_path = get_home_path();
goto fXtLR;
YnWU0:
LcmtT:
goto jY7Oy;
k6wCi:
xWlLV:
goto k6ckl;
Z21Ia:
return true;
goto rf5LA;
c_kMP:
return false;
goto Jh6It;
jAN4a:
$htaccess_file = $home_path . "\x2e\x68\164\141\143\x63\x65\163\163";
goto Q9E1h;
lj7CO:
goto BBQ_O;
goto YnWU0;
CarZv:
return false;
goto lj7CO;
ITXkt:
$rules = "\x23\x4e\x4f\111\x4e\104\x45\x58\x5f\123\x54\x41\122\x54" . PHP_EOL;
goto xWkj1;
ggb1Y:
goto KWpaA;
goto Svplc;
TLQM9:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto ITXkt;
jY7Oy:
$home_path = get_home_path();
goto jAN4a;
rf5LA:
goto xWlLV;
goto AcFws;
IHBJq:
goto IJ0ND;
goto RgsYS;
Hyeq1:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto JoCKa;
}
goto HEIVe;
Jh6It:
KWpaA:
goto Drt3M;
Svplc:
JoCKa:
goto c_kMP;
iodQR:
goto booko;
goto wsEe9;
fXtLR:
$htaccess_file = $home_path . "\x2e\150\164\x61\143\x63\145\163\163";
goto Hyeq1;
RgsYS:
I8R0m:
goto m8a5X;
AcFws:
LUBhD:
goto s2sY1;
zEnAF:
if ($mode == 1) {
goto I8R0m;
}
goto Tkjdf;
Q9E1h:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto LUBhD;
}
goto Z21Ia;
pBY2l:
$rules .= "\43\116\x4f\x49\x4e\x44\x45\130\137\x45\x4e\104" . PHP_EOL;
goto WWu97;
wsEe9:
NhfdZ:
goto TLQM9;
xWkj1:
$rules .= "\111\x6e\x64\145\x78\111\147\156\157\162\x65\x20\x2a" . PHP_EOL;
goto pBY2l;
qmeVC:
if ($lines != false) {
goto LcmtT;
}
goto CarZv;
WwFli:
return false;
goto iodQR;
HEIVe:
return true;
goto ggb1Y;
k6ckl:
BBQ_O:
goto IHBJq;
h7yJd:
if ($lines != false) {
goto NhfdZ;
}
goto WwFli;
DgI7e:
}
public function security_noproxycomment($mode)
{
goto lsbW0;
G2ngz:
goto HXBq8;
goto aOdnA;
tlxe8:
goto G50Ul;
goto GIM9l;
nlMvq:
$rules .= "\122\x65\x77\162\151\164\145\103\x6f\x6e\x64\40\x25\x7b\x48\124\124\x50\x3a\x48\124\x54\x50\x5f\103\114\x49\x45\116\124\x5f\111\x50\175\x20\x21\x5e\44" . PHP_EOL;
goto zZa5Y;
wwpPj:
$rules .= "\122\x65\167\162\x69\x74\x65\x43\157\156\144\x20\x25\x7b\x52\x45\x51\125\x45\x53\124\x5f\x4d\x45\x54\110\117\x44\x7d\x20\136\120\x4f\x53\124" . PHP_EOL;
goto ocjMB;
xkMB_:
CETGn:
goto vLW44;
DQmZG:
$rules .= "\x52\x65\x77\x72\151\x74\145\105\x6e\147\x69\156\145\40\x4f\x6e" . PHP_EOL;
goto wwpPj;
ocBUd:
$rules = "\43\123\124\117\120\x5f\x50\122\x4f\130\x59\x43\x4f\115\115\x45\x4e\x54\x5f\123\x54\101\x52\124" . PHP_EOL;
goto EI4XG;
yUmtD:
return false;
goto Yuxhv;
EJued:
$rules .= "\x52\x65\x77\x72\x69\x74\x65\x43\157\156\144\x20\45\173\x48\124\x54\120\72\130\120\x52\117\x58\x59\x5f\x43\117\x4e\x4e\105\x43\x54\x49\x4f\116\175\x20\x21\x5e\44\40\133\x4f\122\x5d" . PHP_EOL;
goto LSUWX;
ocjMB:
$rules .= "\122\x65\167\x72\151\164\x65\x43\x6f\x6e\144\40\x25\x7b\x48\124\x54\x50\72\126\x49\x41\x7d\x20\41\136\44\x20\x5b\117\122\x5d" . PHP_EOL;
goto SS0Ue;
EI4XG:
$rules .= "\74\x49\x66\x4d\157\144\x75\154\x65\x20\x6d\x6f\144\137\x72\x65\167\x72\151\x74\x65\x2e\x63\x3e" . PHP_EOL;
goto DQmZG;
LSUWX:
$rules .= "\x52\x65\167\162\151\164\145\103\157\x6e\144\40\45\x7b\110\124\x54\x50\x3a\110\x54\x54\x50\x5f\120\103\137\x52\x45\x4d\x4f\x54\x45\137\101\x44\x44\x52\175\40\x21\x5e\44\40\x5b\117\x52\135" . PHP_EOL;
goto nlMvq;
d1pYE:
$rules .= "\122\145\x77\162\x69\x74\x65\x43\157\156\x64\x20\45\x7b\110\124\x54\120\72\130\137\106\x4f\122\127\x41\x52\104\x45\104\x5f\x48\117\x53\124\x7d\40\41\136\x24\x20\133\x4f\122\135" . PHP_EOL;
goto NFQ29;
m5cH2:
return true;
goto G2ngz;
SS0Ue:
$rules .= "\122\x65\167\x72\151\164\x65\x43\157\156\x64\40\45\x7b\110\124\x54\x50\72\x46\117\x52\x57\x41\122\x44\105\x44\175\x20\41\136\44\x20\x5b\117\122\135" . PHP_EOL;
goto ZLUDr;
Q8tiO:
$lines = $this->readhtaccess("\43\x53\x54\x4f\120\137\x50\x52\x4f\130\x59\103\x4f\115\x4d\x45\116\124\137\123\x54\x41\122\x54", "\43\x53\124\x4f\x50\137\120\x52\117\130\x59\x43\117\115\x4d\x45\116\124\x5f\105\116\x44");
goto VhT4N;
KNMHw:
MS6CP:
goto yUmtD;
u8LfA:
HXBq8:
goto IH8z_;
Zpzfh:
$home_path = get_home_path();
goto Qbv0o;
ae9fZ:
goto DtfVQ;
goto cE_cs;
ZLUDr:
$rules .= "\122\145\x77\x72\151\x74\x65\x43\x6f\156\x64\x20\x25\173\x48\x54\x54\x50\72\125\123\105\x52\x41\x47\105\116\x54\137\126\111\101\x7d\x20\41\136\x24\40\x5b\x4f\x52\135" . PHP_EOL;
goto Ar8Iu;
MjsVs:
goto gbn8x;
goto xkMB_;
vLW44:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto ocBUd;
IH8z_:
gbn8x:
goto uagB8;
GIM9l:
FwyQh:
goto Zpzfh;
Yuxhv:
lvyXz:
goto VLQ98;
oSRfo:
return false;
goto tlxe8;
KFzUv:
goto lvyXz;
goto KNMHw;
Pwn21:
$lines = $this->readhtaccess("\x23\x53\x54\x4f\x50\137\120\122\117\130\131\103\117\x4d\115\105\x4e\x54\137\x53\x54\x41\x52\124", "\43\123\124\117\120\x5f\x50\122\117\130\131\x43\x4f\115\x4d\105\116\124\x5f\x45\116\x44");
goto HlvHr;
Qbv0o:
$htaccess_file = $home_path . "\x2e\x68\x74\x61\143\143\145\163\x73";
goto itbtp;
Qh851:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto KCpS3;
}
goto m5cH2;
HlvHr:
if ($lines != false) {
goto CETGn;
}
goto QbCnN;
NFQ29:
$rules .= "\122\x65\x77\162\x69\164\145\103\x6f\x6e\x64\x20\45\173\110\124\x54\x50\x3a\120\x52\117\x58\x59\137\103\x4f\x4e\116\x45\103\124\x49\x4f\116\175\40\x21\136\44\x20\x5b\x4f\x52\135" . PHP_EOL;
goto EJued;
y4LWj:
$rules .= "\x23\x53\124\117\120\137\x50\122\x4f\130\x59\x43\x4f\115\x4d\x45\x4e\x54\x5f\105\x4e\x44" . PHP_EOL;
goto tMq8g;
Ar8Iu:
$rules .= "\122\145\167\x72\151\164\145\x43\157\x6e\x64\40\45\x7b\110\124\124\x50\72\130\137\x46\117\122\127\101\x52\x44\x45\x44\x5f\106\117\122\x7d\40\41\136\44\x20\x5b\117\x52\x5d" . PHP_EOL;
goto d1pYE;
UPDf6:
return true;
goto KFzUv;
glAto:
return false;
goto u8LfA;
QbCnN:
return false;
goto MjsVs;
VLQ98:
G50Ul:
goto ae9fZ;
itbtp:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto MS6CP;
}
goto UPDf6;
lsbW0:
if ($mode == 1) {
goto CvTnp;
}
goto Q8tiO;
f4LBV:
$rules .= "\x3c\x2f\111\146\x4d\157\x64\x75\x6c\145\76" . PHP_EOL;
goto y4LWj;
uagB8:
DtfVQ:
goto XSKGA;
cE_cs:
CvTnp:
goto Pwn21;
finTH:
$htaccess_file = $home_path . "\56\x68\164\141\143\143\145\163\163";
goto Qh851;
VhT4N:
if ($lines != false) {
goto FwyQh;
}
goto oSRfo;
zZa5Y:
$rules .= "\x52\145\x77\162\x69\x74\x65\122\165\x6c\x65\40\167\160\55\143\x6f\x6d\155\x65\156\164\163\x2d\x70\x6f\163\164\134\x2e\x70\x68\x70\x20\x2d\40\x5b\106\x5d" . PHP_EOL;
goto f4LBV;
aOdnA:
KCpS3:
goto glAto;
tMq8g:
$home_path = get_home_path();
goto finTH;
XSKGA:
}
public function readhtaccess($start, $end)
{
goto WsYG3;
AY13C:
dQ4z2:
goto hXLbV;
U0qpc:
return false;
goto fefAr;
fefAr:
goto cLp6u;
goto th0Eb;
LIMsl:
$lines .= $line . PHP_EOL;
goto Z8qsz;
xCU6b:
@file_put_contents($htaccess_file, '');
goto Jx9GL;
INsfr:
$readlineok = true;
goto twBeF;
KKndE:
if (!($line == $start)) {
goto dQ4z2;
}
goto PTEXF;
GeJVg:
if (!($line = fgets($file))) {
goto HafhP;
}
goto cT6I1;
gtbjc:
K_0Sv:
goto G3ur5;
c2wmW:
B__gp:
goto DYUV6;
Z8qsz:
SSwws:
goto MF8FZ;
vwOyH:
$htaccess_file = $home_path . "\56\x68\164\141\x63\143\x65\x73\x73";
goto c8Uy9;
Jx9GL:
f4nnD:
goto Aw14J;
MF8FZ:
if (!($line == $end && $readlineok == false)) {
goto K_0Sv;
}
goto lZfL5;
A1fG2:
$file = fopen($htaccess_file, "\162");
goto INsfr;
iwLgg:
cLp6u:
goto DpUBI;
cT6I1:
$line = trim($line);
goto KKndE;
mwRxb:
return $lines;
goto iwLgg;
WsYG3:
$home_path = get_home_path();
goto vwOyH;
CtMwB:
HafhP:
goto c2wmW;
PTEXF:
$readlineok = false;
goto AY13C;
lZfL5:
$readlineok = true;
goto gtbjc;
G3ur5:
goto mB5WZ;
goto CtMwB;
th0Eb:
NKdnK:
goto A1fG2;
IkgH1:
mB5WZ:
goto GeJVg;
twBeF:
$lines = '';
goto lDhQy;
lDhQy:
if (!$file) {
goto B__gp;
}
goto IkgH1;
hXLbV:
if (!$readlineok) {
goto SSwws;
}
goto LIMsl;
DYUV6:
fclose($file);
goto mwRxb;
c8Uy9:
if (file_exists($htaccess_file)) {
goto f4nnD;
}
goto xCU6b;
Aw14J:
if (file_exists($htaccess_file)) {
goto NKdnK;
}
goto U0qpc;
DpUBI:
}
public function security_spambot($mode)
{
goto TxygT;
OGgsL:
$home_path = get_home_path();
goto PKYNs;
UQ2P8:
return false;
goto Iyvha;
CFTwq:
goto x5Ig_;
goto pal0B;
AJRxQ:
$htaccess_file = $home_path . "\x2e\x68\x74\141\143\143\145\163\x73";
goto maRTR;
L0L2U:
return false;
goto wLCDB;
ze1Nq:
return false;
goto OSVf5;
iRCxl:
K6O8H:
goto f4q7s;
n9kvF:
$rules .= "\x52\x65\x77\162\151\x74\x65\103\157\x6e\144\40\x25\x7b\x52\105\x51\x55\105\123\124\137\x4d\105\124\110\117\104\175\40\120\117\123\124" . PHP_EOL;
goto LW0dt;
v9R41:
goto K6O8H;
goto i1_xX;
n_wTr:
mAU5r:
goto iRCxl;
FuTCy:
$rules .= "\x3c\x49\146\115\157\x64\165\154\145\x20\x6d\x6f\144\137\x72\145\x77\x72\151\x74\145\x2e\143\76" . PHP_EOL;
goto R9nsz;
R9nsz:
$rules .= "\x52\x65\167\x72\x69\x74\145\x45\x6e\147\151\x6e\x65\x20\x4f\x6e" . PHP_EOL;
goto n9kvF;
j0Dwv:
goto I1SJa;
goto kBOT2;
LdfoS:
return true;
goto j0Dwv;
SgLYy:
$home_path = get_home_path();
goto AJRxQ;
maRTR:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto Ybmqg;
}
goto LdfoS;
oUq2z:
$rules .= "\122\145\x77\162\x69\164\145\x52\x75\154\145\x20\x2e\52\x20\150\164\164\x70\x3a\57\x2f\x31\62\67\x2e\x30\x2e\x30\x2e\x31\x20\133\x4c\135" . PHP_EOL;
goto pab4g;
OSVf5:
z8X7x:
goto OJDOt;
wLCDB:
I1SJa:
goto n_wTr;
v0_aD:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto pQw_1;
}
goto nWZPJ;
pal0B:
QGixZ:
goto OGgsL;
Iyvha:
goto mAU5r;
goto CXtBZ;
e2_9i:
$lines = $this->readhtaccess("\x23\102\x4c\117\x43\x4b\137\x53\x50\x41\115\x42\117\124\123\137\123\124\x41\x52\x54", "\43\102\x4c\117\103\x4b\137\123\x50\x41\115\102\x4f\x54\123\137\x45\x4e\x44");
goto SK2ew;
CXtBZ:
FjEzT:
goto HV1FH;
TxygT:
if ($mode == 1) {
goto PSR6M;
}
goto e2_9i;
SGNc7:
$lines = $this->readhtaccess("\x23\x42\x4c\117\103\113\137\123\x50\x41\x4d\102\x4f\x54\123\x5f\123\124\101\x52\124", "\x23\x42\x4c\117\x43\113\137\123\x50\101\115\x42\x4f\x54\123\x5f\x45\116\104");
goto fB7X6;
XDLA1:
$rules .= "\x52\145\167\162\x69\164\x65\103\x6f\x6e\144\x20\x25\x7b\x48\124\x54\x50\137\122\105\x46\105\x52\105\x52\x7d\x20\x21\50\x5e\x2e\x2a\x5c\x3a\134\57\134\57" . $url_string . "\51\x20\133\116\x43\54\x4f\x52\135" . PHP_EOL;
goto mcbba;
pab4g:
$rules .= "\x3c\x2f\111\x66\115\157\x64\165\154\145\76" . PHP_EOL;
goto SgNQy;
Nhhi2:
return false;
goto CFTwq;
SgNQy:
$rules .= "\x23\102\x4c\117\x43\x4b\x5f\123\120\101\115\102\x4f\124\123\137\105\116\x44" . PHP_EOL;
goto SgLYy;
i1_xX:
PSR6M:
goto SGNc7;
OJDOt:
x5Ig_:
goto v9R41;
mcbba:
$rules .= "\x52\x65\x77\162\x69\164\145\103\x6f\156\x64\x20\45\x7b\x48\124\x54\x50\137\x55\x53\105\122\137\x41\x47\105\116\x54\175\40\136\x24" . PHP_EOL;
goto oUq2z;
PRDlp:
pQw_1:
goto ze1Nq;
SK2ew:
if ($lines != false) {
goto QGixZ;
}
goto Nhhi2;
HV1FH:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto bNcA5;
LW0dt:
$rules .= "\x52\x65\167\x72\151\164\145\103\x6f\156\x64\x20\45\x7b\x52\x45\121\x55\x45\x53\x54\x5f\125\122\111\175\40\x5e\x28\56\52\x29\x3f\167\160\55\143\x6f\155\x6d\x65\156\x74\x73\x2d\x70\157\163\164\x5c\56\160\150\x70\50\x2e\52\x29\44" . PHP_EOL;
goto XDLA1;
kBOT2:
Ybmqg:
goto L0L2U;
fB7X6:
if ($lines != false) {
goto FjEzT;
}
goto UQ2P8;
oTZZf:
goto z8X7x;
goto PRDlp;
bNcA5:
$rules = "\x23\102\114\117\x43\x4b\137\123\120\x41\x4d\102\117\124\x53\x5f\123\124\101\122\124" . PHP_EOL;
goto FuTCy;
nWZPJ:
return true;
goto oTZZf;
PKYNs:
$htaccess_file = $home_path . "\56\150\164\141\x63\143\145\x73\163";
goto v0_aD;
f4q7s:
}
public function security_nowpscan($mode)
{
goto RREDp;
fy7xp:
$rules .= "\x52\145\167\162\x69\164\x65\122\165\x6c\145\40\136\134\56\x77\160\x2d\143\157\x6e\x66\x69\147\134\56\160\x68\x70\x5c\56\x73\167\x70\x24\40\x69\x6e\144\145\x78\56\x70\x68\160\x3f\167\x70\x5f\143\x6f\156\146\151\x67\137\x65\x6e\x75\155\x65\x72\x61\x74\x69\x6f\156\x3d\x31\40\x5b\x4c\135" . PHP_EOL;
goto kod06;
dCYmP:
$rules .= "\x3c\x2f\x49\x66\115\157\x64\x75\x6c\145\x3e" . PHP_EOL;
goto RmOzF;
m46yE:
goto J3QQv;
goto wse0M;
dhwht:
$rules .= "\122\145\x77\x72\151\x74\x65\122\165\x6c\145\x20\136\x77\x70\55\143\157\156\146\x69\x67\134\x2e\x70\x68\160\x5c\x2e\163\141\166\145\44\x20\151\x6e\144\x65\170\x2e\x70\x68\160\77\167\x70\x5f\143\157\156\x66\x69\x67\x5f\x65\x6e\165\155\x65\x72\x61\x74\151\157\x6e\75\x31\x20\x5b\114\x5d" . PHP_EOL;
goto fy7xp;
V1qiL:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto yZG1E;
}
goto farJj;
vm6hE:
$rules .= "\x52\145\x77\x72\151\x74\x65\122\165\154\x65\x20\136\162\145\x61\x64\x6d\x65\x5c\x2e\x74\170\x74\x24\x20\55\40\x5b\122\x3d\64\60\x34\54\x4c\54\116\103\x5d" . PHP_EOL;
goto zalyc;
taLUI:
$htaccess_file = $home_path . "\x2e\150\x74\141\x63\143\x65\163\x73";
goto lxjcu;
te1mY:
J3QQv:
goto sdw5c;
sHQhW:
return true;
goto tLX0H;
SZ1_l:
$rules = "\43\x4e\x4f\x57\x50\x53\103\x41\x4e\x5f\123\x54\101\122\124" . PHP_EOL;
goto lWZAC;
xmsnx:
goto Tn2_b;
goto G14__;
RmOzF:
$rules .= "\x23\x4e\117\x57\120\x53\x43\101\x4e\x5f\105\116\104" . PHP_EOL;
goto Pg0fT;
sxNBf:
UHf2f:
goto qk8M7;
lxjcu:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto UHf2f;
}
goto sHQhW;
c8Uio:
return false;
goto cNzep;
inZ4z:
$htaccess_file = $home_path . "\56\x68\164\141\x63\143\x65\x73\163";
goto V1qiL;
HRTc8:
return false;
goto oKUNk;
TTRBV:
Tn2_b:
goto FMPas;
J48f1:
if ($lines != false) {
goto U29Ef;
}
goto HRTc8;
oKUNk:
goto JuiCW;
goto orCVO;
V92Lq:
$rules .= "\122\x65\x77\x72\x69\164\145\122\x75\x6c\145\x20\136\x28\56\52\x29\167\x70\x2d\143\157\x6e\x74\x65\x6e\164\57\x70\154\x75\x67\151\x6e\x73\57\x28\56\x2a\x29\57\162\145\141\144\155\145\134\56\x68\164\155\x6c\x24\40\x2d\x20\x5b\x52\x3d\64\60\64\x2c\x4c\135" . PHP_EOL;
goto DgS75;
RREDp:
if ($mode == 1) {
goto kk9va;
}
goto G3FdF;
JaMj0:
AvTT7:
goto ITfzV;
sdw5c:
JuiCW:
goto xmsnx;
hEd6w:
$home_path = get_home_path();
goto inZ4z;
zalyc:
$rules .= "\x52\145\167\x72\x69\164\x65\122\x75\x6c\x65\x20\136\143\150\141\156\x67\145\154\x6f\x67\134\56\164\x78\x74\x24\40\x2d\x20\133\122\75\x34\60\64\x2c\114\54\116\103\135" . PHP_EOL;
goto CnY5s;
orCVO:
U29Ef:
goto hEd6w;
A4Vl8:
$rules .= "\122\x65\167\162\151\164\x65\x43\x6f\156\144\x20\45\x7b\122\105\x51\125\x45\123\124\137\106\x49\x4c\x45\x4e\x41\x4d\105\175\x20\41\55\x66" . PHP_EOL;
goto dhwht;
OnaNG:
$lines = $this->readhtaccess("\43\116\x4f\127\x50\x53\x43\x41\x4e\x5f\x53\124\101\x52\x54", "\x23\x4e\x4f\127\x50\x53\x43\x41\x4e\x5f\105\x4e\x44");
goto xPRHw;
oaIRP:
$rules .= "\122\x65\x77\162\x69\164\x65\122\x75\154\145\40\136\162\x65\x61\144\155\x65\x5c\x2e\150\x74\155\154\x24\40\x2d\40\x5b\x52\x3d\64\x30\64\x2c\114\x2c\116\x43\x5d" . PHP_EOL;
goto vm6hE;
lbI3H:
$rules .= "\x52\x65\167\x72\151\x74\x65\x52\x75\x6c\145\40\136\x28\x2e\52\51\167\x70\55\x63\x6f\x6e\x74\145\156\164\x2f\x70\154\x75\x67\x69\156\163\x2f\x28\x2e\x2a\51\x2f\162\x65\x61\144\x6d\x65\134\56\164\x78\164\x24\x20\x2d\40\x5b\x52\x3d\64\60\64\x2c\x4c\135" . PHP_EOL;
goto V92Lq;
farJj:
return true;
goto m46yE;
Pg0fT:
$home_path = get_home_path();
goto taLUI;
lWZAC:
$rules .= "\74\111\146\115\157\x64\x75\x6c\x65\x20\155\x6f\144\x5f\x72\145\167\x72\151\164\x65\x2e\x63\x3e" . PHP_EOL;
goto prIz4;
kod06:
$rules .= "\x52\x65\x77\162\x69\x74\x65\122\x75\154\145\40\136\x77\x70\x2d\143\x6f\156\146\151\147\x5c\x2e\x70\x68\x70\x5c\x2e\163\x77\x70\44\40\x69\156\x64\145\170\x2e\160\x68\160\77\x77\x70\137\x63\x6f\x6e\146\x69\147\137\145\x6e\x75\x6d\145\162\x61\164\x69\x6f\156\x3d\61\x20\133\x4c\x5d" . PHP_EOL;
goto dCYmP;
cNzep:
goto L01JV;
goto JaMj0;
xPRHw:
if ($lines != false) {
goto AvTT7;
}
goto c8Uio;
prIz4:
$rules .= "\x52\145\167\x72\151\164\x65\x45\x6e\147\x69\x6e\x65\x20\x4f\x6e" . PHP_EOL;
goto oaIRP;
DgS75:
$rules .= "\x52\145\167\162\151\164\145\122\x75\154\x65\x20\x5e\50\56\x2a\51\167\x70\x2d\x63\x6f\x6e\x74\x65\x6e\x74\57\x70\154\165\147\x69\x6e\x73\x2f\50\x2e\x2a\x29\57\x63\x68\x61\156\147\x65\x6c\x6f\x67\134\x2e\164\170\x74\x24\x20\55\40\x5b\x52\75\64\x30\64\54\114\x5d" . PHP_EOL;
goto A4Vl8;
ITfzV:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto SZ1_l;
wse0M:
yZG1E:
goto MPu88;
I96u_:
HvzOV:
goto cXrMl;
tLX0H:
goto HvzOV;
goto sxNBf;
qk8M7:
return false;
goto I96u_;
G3FdF:
$lines = $this->readhtaccess("\x23\116\x4f\x57\x50\x53\x43\x41\116\x5f\x53\x54\101\x52\x54", "\43\116\117\127\x50\123\x43\x41\x4e\137\x45\116\104");
goto J48f1;
CnY5s:
$rules .= "\122\145\167\162\151\164\145\122\165\x6c\x65\x20\136\x77\160\x2d\x69\x6e\143\x6c\165\144\x65\x73\x2f\152\163\57\164\151\x6e\171\x6d\143\145\57\167\x70\x2d\x74\151\x6e\171\155\x63\x65\134\56\x6a\x73\134\x2e\147\172\44\x20\x69\x6e\144\145\x78\x2e\x70\150\x70\77\141\144\166\x61\x6e\143\145\x64\x5f\146\x69\x6e\x67\145\162\x70\x72\x69\156\164\151\x6e\x67\75\61\40\133\114\135" . PHP_EOL;
goto lbI3H;
G14__:
kk9va:
goto OnaNG;
cXrMl:
L01JV:
goto TTRBV;
MPu88:
return false;
goto te1mY;
FMPas:
}
private function wpinfectscan_dbrtbinstall()
{
goto ilggK;
h2nS5:
dbDelta($sql);
goto pLn7v;
u_8MG:
$charset_collate = $wpdb->get_charset_collate();
goto gKhsk;
gKhsk:
$sql = "\x43\x52\105\101\124\105\x20\124\x41\102\x4c\x45\x20" . $table_name . "\40\x28\xd\12\x20\x20\x20\40\40\40\40\40\40\x20\x20\40\140\x69\x64\140\40\x69\x6e\164\50\61\61\51\x20\116\117\124\40\116\125\114\114\40\101\x55\124\x4f\137\111\x4e\103\122\x45\x4d\x45\116\124\x2c\15\xa\40\x20\x20\x20\40\40\x20\40\40\40\40\40\140\146\x69\x6c\145\x70\141\164\x68\x60\40\166\x61\162\x63\x68\141\x72\50\61\x30\62\64\51\40\104\105\106\x41\125\114\124\40\116\125\x4c\114\54\xd\xa\40\x20\40\x20\40\40\40\40\40\40\x20\x20\x60\146\151\154\145\x6e\141\155\145\x60\40\x76\x61\162\143\x68\141\162\50\x32\x35\65\x29\40\x44\105\106\101\125\114\124\x20\116\125\114\x4c\x2c\15\xa\x20\40\x20\x20\40\x20\x20\40\x20\40\x20\x20\x60\x67\x65\x74\x71\x75\145\162\x79\x60\40\164\x65\x78\x74\54\15\12\x20\40\x20\x20\x20\x20\x20\40\x20\40\40\40\140\160\x6f\163\164\x71\165\x65\162\171\x60\40\164\145\170\164\x2c\xd\xa\40\x20\x20\40\40\x20\40\40\x20\40\x20\40\140\x69\160\x76\x34\140\x20\x76\141\162\143\150\141\162\50\x35\x30\x29\x20\x44\x45\106\x41\x55\114\124\x20\116\x55\x4c\x4c\x2c\xd\xa\x20\x20\40\x20\40\40\40\40\x20\40\x20\x20\x60\x69\x70\x76\x36\x60\40\x76\141\x72\143\x68\x61\x72\x28\x35\x30\x29\x20\x44\105\106\101\x55\114\x54\40\116\125\114\x4c\54\15\12\40\x20\40\x20\x20\40\40\40\40\x20\x20\x20\140\x75\163\x65\x72\x61\x67\x65\x6e\164\140\40\166\x61\162\143\150\141\x72\50\x31\x30\62\x34\51\x20\x44\105\x46\x41\125\x4c\124\40\x4e\x55\x4c\114\54\15\xa\x20\x20\40\x20\x20\40\40\x20\40\x20\40\40\x60\x61\144\144\144\x61\164\x65\140\40\144\141\164\x65\164\151\155\x65\x20\116\117\124\x20\x4e\x55\114\114\x2c\15\xa\x20\40\x20\40\40\x20\x20\40\40\40\x20\40\120\x52\x49\x4d\x41\122\x59\x20\113\x45\131\x20\x20\x28\151\x64\51\xd\12\40\x20\40\40\40\x20\x20\x20\51\x20" . $charset_collate . "\x3b";
goto nMpsf;
ilggK:
global $wpdb;
goto eT22x;
nMpsf:
require_once ABSPATH . "\167\x70\x2d\x61\x64\x6d\151\156\57\x69\156\143\x6c\165\144\x65\x73\x2f\165\x70\147\x72\x61\x64\x65\56\160\150\x70";
goto h2nS5;
eT22x:
$wpinfectscan_dbrtb_version = "\x31\56\x30";
goto QmkZX;
QmkZX:
$table_name = $wpdb->prefix . "\x69\x6e\x66\145\x63\164\163\x63\141\x6e\x6e\x65\162\x72\x65\141\x6c\164\x69\x6d\145\x62\x6c\x6f\x63\x6b";
goto u_8MG;
pLn7v:
add_option("\167\160\x69\x6e\x66\x65\143\x74\x73\143\x61\x6e\x5f\144\142\162\x74\x62\137\166\145\x72\163\x69\157\156", $wpinfectscan_dbrtb_version);
goto ivUJ0;
ivUJ0:
}
public function security_realtimeblock($mode)
{
goto Ux6p1;
O58zR:
$thesitepath = parse_url(get_home_url());
goto HANJg;
xkhdn:
$rules .= "\122\x65\x77\x72\x69\x74\x65\x43\157\x6e\x64\40\45\x7b\x51\x55\105\x52\x59\x5f\123\124\122\x49\116\107\x7d\x20\41\50\x2e\x2a\x29" . $rkey . "\x28\56\52\x29\x20\x5b\116\103\x5d" . PHP_EOL;
goto wBMWi;
L_9pk:
$rules .= "\122\x65\167\162\151\164\x65\x45\156\147\x69\156\x65\40\x4f\156" . PHP_EOL;
goto JRKch;
MnROu:
$htaccess_file = $home_path . "\x2e\150\x74\141\143\143\145\x73\x73";
goto qEH7O;
okaDN:
if ($mode == 1) {
goto DAEkL;
}
goto RmK4B;
ElOfD:
Stpc5:
goto P8NwG;
PpOY0:
$rules = "\43\x53\105\122\126\x45\122\137\x52\105\x41\x4c\124\x49\x4d\x45\102\x4c\x4f\103\113\137\x53\x54\101\122\x54" . PHP_EOL;
goto lhvUe;
f4KiO:
$rules .= "\x52\145\167\x72\151\164\145\x52\x75\x6c\145\x20\x5e\x28\56\52\51\44\x20" . $homepath . "\57\167\x70\55\143\x6f\x6e\x74\145\x6e\x74\57\x70\x6c\x75\147\151\x6e\x73\x2f\x77\x70\151\156\146\145\x63\163\x63\141\156\57\162\145\x71\x75\x65\163\x74\143\x61\160\x74\x75\162\x65\162\56\x70\x68\160\x20\x5b\114\x2c\105\x3d\117\x52\111\x47\137\x55\x52\x49\72\44\x31\77\45\x31\x5d" . PHP_EOL;
goto iRnri;
S4zel:
$htaccess_file = $home_path . "\x2e\x68\164\141\x63\x63\x65\163\163";
goto vKmYk;
t45Cd:
if ($lines != false) {
goto EmW77;
}
goto FPG4D;
ZlHpG:
eM7yK:
goto YixG3;
WIQ2m:
$this->wpinfectscan_dbrtbinstall();
goto LcHP8;
RreQr:
X5x_9:
goto X4FPS;
YjQ2w:
goto Nf2My;
goto ElOfD;
HANJg:
$thesitepath = $thesitepath["\160\141\164\150"];
goto PpOY0;
qEH7O:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto aZSb7;
}
goto WpKNP;
WpKNP:
return true;
goto ID6vd;
rFb87:
$rules .= "\x52\145\167\x72\151\164\145\x43\157\x6e\144\40\x25\x7b\122\105\x51\x55\105\x53\124\137\125\x52\x49\x7d\x20\x21\50\56\52\51\162\x65\161\x75\x65\x73\164\x63\x61\x70\x74\165\x72\145\x72\x2e\x70\x68\160\50\56\52\51\40\x5b\116\x43\x5d" . PHP_EOL;
goto xkhdn;
dzC7G:
DAEkL:
goto xm4Oh;
LcHP8:
daO4v:
goto DctrJ;
xm4Oh:
$lines = $this->readhtaccess("\43\123\105\122\x56\105\x52\x5f\x52\105\x41\x4c\x54\111\x4d\105\x42\114\117\x43\x4b\x5f\x53\x54\x41\122\x54", "\x23\123\105\122\x56\105\122\137\122\x45\x41\x4c\x54\111\115\105\x42\114\x4f\x43\x4b\137\x45\x4e\104");
goto sIUPH;
DHLiD:
$mode = 0;
goto ZlHpG;
wBMWi:
$rules .= "\122\145\167\162\151\x74\145\x43\157\x6e\x64\x20\45\173\x52\x45\121\125\x45\123\x54\x5f\x46\x49\114\105\116\x41\115\x45\175\x20\x2d\146" . PHP_EOL;
goto si53q;
U5uhk:
return false;
goto ZkKzw;
Ux6p1:
global $wpdb;
goto hhk4B;
X_MrH:
$rules .= "\x52\x65\x77\162\151\164\145\103\x6f\156\144\x20\45\x7b\x52\105\x51\125\105\123\124\137\x55\x52\x49\x7d\40\50\56\x2a\x29\56\160\x68\160\x20\133\x4e\x43\x5d" . PHP_EOL;
goto o_5Cq;
d10Lg:
Nf2My:
goto iU2Yv;
JUyOq:
$scanner = new MalwareScanner();
goto Jo3nC;
vKmYk:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto Stpc5;
}
goto FSBWi;
lhvUe:
$rules .= "\74\111\146\x4d\157\144\x75\154\x65\x20\x6d\157\x64\x5f\x72\145\x77\162\x69\164\x65\x2e\143\x3e" . PHP_EOL;
goto L_9pk;
N99ry:
EmW77:
goto f5Grw;
Tp4Ns:
$rules .= "\43\x53\x45\122\126\x45\x52\x5f\x52\105\101\114\x54\111\x4d\105\x42\114\x4f\103\x4b\x5f\x45\x4e\104" . PHP_EOL;
goto QXAqp;
o_5Cq:
$rules .= "\x52\x65\x77\x72\x69\x74\x65\x43\x6f\156\x64\40\x25\x7b\x51\125\x45\x52\131\x5f\x53\x54\x52\x49\116\107\x7d\x20\x28\56\52\51" . PHP_EOL;
goto rFb87;
xkQgq:
lRZQY:
goto mvi2v;
A9wqk:
if (!($wpdb->get_var("\x53\x48\117\127\x20\124\x41\102\x4c\105\x53\40\114\x49\x4b\x45\40\x27" . $table_name . "\47") != $table_name)) {
goto daO4v;
}
goto WIQ2m;
HIaIo:
aZSb7:
goto r7pqs;
sIUPH:
if ($lines != false) {
goto L5pMY;
}
goto U5uhk;
iRnri:
$rules .= "\x3c\57\x49\x66\115\x6f\144\x75\154\x65\x3e" . PHP_EOL;
goto Tp4Ns;
DctrJ:
if (!($mode == 1)) {
goto P0wFE;
}
goto iCegF;
iU2Yv:
n1pb4:
goto RreQr;
Jo3nC:
if (!($scanner->getpro() != 1)) {
goto eM7yK;
}
goto DHLiD;
cw1jb:
$rules .= "\x52\x65\x77\162\x69\164\145\103\x6f\x6e\144\x20\45\173\122\x45\x51\125\105\123\x54\x5f\x55\122\x49\x7d\x20\x21\x28\x2e\52\x29\151\156\144\145\x78\x2e\x70\x68\x70\x20\x5b\x4e\103\135" . PHP_EOL;
goto X_MrH;
FPG4D:
return false;
goto IeNgx;
Z2ZUa:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto O58zR;
r7pqs:
return false;
goto xkQgq;
r4sVw:
goto X5x_9;
goto dzC7G;
FSBWi:
return true;
goto YjQ2w;
IeNgx:
goto uZ0DG;
goto N99ry;
P8NwG:
return false;
goto d10Lg;
mvi2v:
uZ0DG:
goto r4sVw;
pSppC:
L5pMY:
goto CJeEw;
x_foD:
$homepath = $homepath["\160\x61\x74\x68"];
goto f4KiO;
ID6vd:
goto lRZQY;
goto HIaIo;
CJeEw:
$rkey = trim(get_option("\167\160\x69\x6e\146\x65\x63\164\x73\143\x61\156\156\145\x72\x5f\x72\145\141\x6c\164\x69\x6d\x65\x62\x6c\157\143\153\x6b\x65\171"));
goto Z2ZUa;
iCegF:
require_once plugin_dir_path(__FILE__) . "\167\x70\x69\156\146\145\143\x74\x73\x63\141\156\x6e\145\x72\x2e\x70\x68\160";
goto JUyOq;
JRKch:
$rules .= "\122\145\x77\x72\151\164\145\102\141\163\145\x20" . $thesitepath . "\x2f" . PHP_EOL;
goto FE_m3;
f5Grw:
$home_path = get_home_path();
goto MnROu;
QXAqp:
$home_path = get_home_path();
goto S4zel;
FE_m3:
$rules .= "\x52\145\167\162\151\x74\145\103\157\156\144\x20\45\173\x52\x45\121\x55\x45\x53\x54\x5f\x4d\x45\124\x48\117\104\x7d\x20\50\120\117\123\x54\174\107\x45\x54\x29" . PHP_EOL;
goto cw1jb;
ZkKzw:
goto n1pb4;
goto pSppC;
RmK4B:
$lines = $this->readhtaccess("\x23\x53\x45\x52\x56\105\x52\x5f\122\x45\101\114\124\x49\115\105\x42\x4c\117\x43\113\137\123\x54\x41\x52\x54", "\x23\123\105\x52\x56\x45\122\137\x52\x45\x41\114\124\x49\x4d\105\x42\x4c\117\103\x4b\x5f\x45\116\x44");
goto t45Cd;
si53q:
$homepath = parse_url(get_site_url());
goto x_foD;
hhk4B:
$table_name = $wpdb->prefix . "\x69\156\x66\145\x63\164\163\143\x61\x6e\156\145\x72\162\145\x61\154\x74\x69\155\x65\x62\x6c\x6f\x63\x6b";
goto A9wqk;
YixG3:
P0wFE:
goto okaDN;
X4FPS:
}
public function security_nodirectaccessincludes($mode)
{
goto XSXO8;
BWEwq:
oyoni:
goto I83dG;
q4BMO:
goto IQHl6;
goto wawhh;
zMxuG:
return false;
goto q4BMO;
HSKJH:
$rules .= "\122\x65\167\x72\151\164\145\x52\x75\154\145\40\136\x2e\52\x77\x70\x2d\151\x6e\143\x6c\x75\144\145\163\x2f\164\x68\x65\x6d\x65\55\x63\x6f\x6d\x70\141\x74\x2f\x20\55\x20\x5b\x46\x2c\114\x5d" . PHP_EOL;
goto frpwn;
Py6Z4:
GT5IJ:
goto bcEAC;
LT23c:
$rules .= "\x52\145\x77\x72\151\x74\x65\x52\165\x6c\x65\x20\x5e\56\52\x77\160\x2d\x69\156\x63\154\165\144\x65\163\x2f\x5b\136\x2f\x5d\x2b\x5c\x2e\x70\150\160\x24\40\x2d\x20\x5b\106\54\x4c\x5d" . PHP_EOL;
goto A1AKx;
aLF8S:
qY79m:
goto SeBFC;
tCfG7:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto EVKD_;
}
goto juDOt;
yiXMl:
$lines = $this->readhtaccess("\43\123\105\x52\x56\x45\x52\x5f\116\x4f\104\x49\x52\x45\103\124\x41\103\103\x45\x53\123\123\111\116\x43\114\x55\x44\x45\x5f\x53\x54\101\x52\124", "\43\123\105\x52\126\105\x52\x5f\x4e\117\x44\x49\x52\105\x43\x54\101\103\103\105\x53\x53\x53\111\116\103\114\125\104\x45\x5f\x45\116\x44");
goto AaofH;
Ucbjk:
goto hxOCM;
goto Py6Z4;
QjfVE:
$htaccess_file = $home_path . "\x2e\150\x74\141\x63\x63\x65\x73\x73";
goto ytZ5Y;
FkNCy:
$rules .= "\74\x49\x66\115\157\144\x75\154\x65\x20\155\x6f\144\x5f\x72\145\167\162\151\x74\x65\x2e\143\x3e" . PHP_EOL;
goto M50ft;
SeBFC:
IQHl6:
goto Ucbjk;
bcEAC:
$lines = $this->readhtaccess("\43\123\x45\x52\126\x45\122\137\116\x4f\104\111\x52\105\103\124\101\103\103\x45\123\x53\x53\111\x4e\x43\x4c\x55\x44\x45\x5f\123\x54\101\x52\x54", "\43\123\x45\122\x56\105\122\137\116\117\104\111\x52\105\x43\124\101\x43\x43\105\x53\123\123\111\116\x43\114\x55\104\x45\x5f\105\x4e\x44");
goto vsIj3;
M50ft:
$rules .= "\122\145\167\162\151\164\145\x45\x6e\x67\x69\x6e\145\40\117\x6e" . PHP_EOL;
goto cONsG;
bCsSg:
return false;
goto gG12O;
yFW3W:
return false;
goto GltKU;
DUkXH:
return true;
goto eO3aH;
wawhh:
hiLsY:
goto YWT6p;
gG12O:
goto CTNne;
goto BWEwq;
eBWnB:
$htaccess_file = $home_path . "\56\150\164\x61\x63\143\145\x73\163";
goto tCfG7;
cONsG:
$rules .= "\122\x65\x77\x72\151\x74\x65\122\165\x6c\145\x20\136\x2e\x2a\x77\160\x2d\x61\144\155\151\156\57\151\156\143\154\x75\x64\145\163\x2f\x20\x2d\40\133\x46\x2c\114\x5d" . PHP_EOL;
goto AUOkh;
AUOkh:
$rules .= "\122\x65\x77\x72\151\164\145\x52\x75\x6c\x65\40\41\136\56\52\x77\x70\55\x69\156\x63\154\x75\x64\x65\163\57\40\55\x20\133\x53\75\63\x5d" . PHP_EOL;
goto LT23c;
hhZPi:
goto jhGD6;
goto W0ryw;
AaofH:
if ($lines != false) {
goto hiLsY;
}
goto zMxuG;
I83dG:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto ua4H2;
A1AKx:
$rules .= "\122\x65\x77\x72\151\164\145\x52\x75\x6c\x65\x20\136\56\52\x77\160\55\151\x6e\x63\x6c\165\x64\x65\x73\x2f\x6a\x73\57\x74\x69\x6e\x79\155\143\x65\x2f\x6c\x61\x6e\x67\163\x2f\x2e\53\x5c\56\x70\x68\x70\40\x2d\40\133\106\x2c\114\x5d" . PHP_EOL;
goto HSKJH;
frpwn:
$rules .= "\74\x2f\x49\x66\115\157\144\165\154\145\76" . PHP_EOL;
goto I7qZ9;
cmelB:
hxOCM:
goto sUTOj;
I7qZ9:
$rules .= "\43\x53\x45\122\126\x45\122\x5f\116\x4f\x44\x49\122\x45\x43\124\x41\103\x43\105\x53\123\123\111\x4e\x43\x4c\x55\104\x45\137\105\x4e\x44" . PHP_EOL;
goto x9g7o;
YWT6p:
$home_path = get_home_path();
goto QjfVE;
x9g7o:
$home_path = get_home_path();
goto eBWnB;
tfBIE:
dQZw7:
goto FgwkF;
bXLnB:
CTNne:
goto cmelB;
ytZ5Y:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto dQZw7;
}
goto DUkXH;
FgwkF:
return false;
goto aLF8S;
ua4H2:
$rules = "\x23\x53\105\122\x56\105\x52\137\116\117\x44\x49\122\105\103\x54\101\x43\x43\x45\123\123\123\111\x4e\103\x4c\x55\x44\x45\x5f\123\x54\101\x52\x54" . PHP_EOL;
goto FkNCy;
eO3aH:
goto qY79m;
goto tfBIE;
W0ryw:
EVKD_:
goto yFW3W;
XSXO8:
if ($mode == 1) {
goto GT5IJ;
}
goto yiXMl;
vsIj3:
if ($lines != false) {
goto oyoni;
}
goto bCsSg;
GltKU:
jhGD6:
goto bXLnB;
juDOt:
return true;
goto hhZPi;
sUTOj:
}
public function security_nouploadfolderphp($mode)
{
goto qIXQm;
ClevX:
$htaccess_file = $home_path . "\56\x68\x74\141\x63\143\x65\163\x73";
goto i_P3o;
cEvXc:
return false;
goto vbY9Y;
JsTzN:
$rules .= "\x23\123\x45\x52\x56\x45\122\x5f\x4e\117\x55\x50\114\x4f\101\x44\106\117\114\104\x45\x52\120\x48\120\x5f\x45\116\x44" . PHP_EOL;
goto KZDvy;
lHkZ1:
$rules .= "\74\x49\x66\x4d\157\x64\165\154\x65\40\x6d\157\x64\x5f\162\145\x77\x72\151\164\x65\56\x63\x3e" . PHP_EOL;
goto oWvgx;
vbY9Y:
KJD4D:
goto cpUla;
HsYnS:
if ($lines != false) {
goto ax2ve;
}
goto BrTMW;
cpUla:
i9Tmw:
goto cl8mw;
LxZjF:
return false;
goto rUD1Q;
Vll2j:
J9KoV:
goto WynPL;
M7V3V:
ax2ve:
goto JW3E5;
YskLM:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto BN0Ye;
}
goto eUsOt;
Bq3pC:
goto VPCeC;
goto M7V3V;
zLEz9:
$rules .= "\x52\x65\x77\x72\x69\x74\145\x52\165\154\x65\x20\x5e\x2e\x2a\167\x70\x2d\143\x6f\156\x74\145\156\164\x2f\x75\x70\x6c\x6f\141\144\x73\x2f\56\x2a\x5c\x2e\160\x68\x70\56\52\44\40\55\x20\133\106\54\x4c\x5d" . PHP_EOL;
goto rfcgc;
hljo6:
VPCeC:
goto NU7aQ;
i_P3o:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto TkhbF;
}
goto uMEAp;
EWgW6:
$home_path = get_home_path();
goto ClevX;
T4SB7:
N7wye:
goto hljo6;
NFcX1:
return false;
goto T4SB7;
PlaWH:
TkhbF:
goto cEvXc;
BrTMW:
return false;
goto Bq3pC;
Sv4E8:
$lines = $this->readhtaccess("\x23\123\105\122\x56\x45\122\137\116\117\x55\120\114\117\101\104\x46\117\x4c\104\x45\122\120\x48\120\137\x53\124\101\x52\124", "\43\123\105\122\x56\105\122\x5f\x4e\x4f\x55\120\114\x4f\x41\104\x46\x4f\x4c\104\105\x52\x50\x48\120\137\x45\x4e\104");
goto R3JNe;
Q3Zp2:
goto KJD4D;
goto PlaWH;
qIXQm:
if ($mode == 1) {
goto J9KoV;
}
goto Sv4E8;
uMEAp:
return true;
goto Q3Zp2;
JW3E5:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto scDtb;
NU7aQ:
W2KE9:
goto sJjnv;
eUsOt:
return true;
goto IfsLZ;
KZDvy:
$home_path = get_home_path();
goto yXpQJ;
Icw8M:
U9J7S:
goto EWgW6;
scDtb:
$rules = "\43\123\x45\122\x56\x45\x52\x5f\116\117\x55\x50\x4c\117\x41\104\x46\117\x4c\104\x45\x52\120\x48\120\x5f\x53\124\x41\x52\x54" . PHP_EOL;
goto lHkZ1;
rfcgc:
$rules .= "\74\x2f\111\x66\115\157\x64\x75\154\x65\76" . PHP_EOL;
goto JsTzN;
cl8mw:
goto W2KE9;
goto Vll2j;
yXpQJ:
$htaccess_file = $home_path . "\56\x68\x74\x61\143\143\145\163\163";
goto YskLM;
rUD1Q:
goto i9Tmw;
goto Icw8M;
IfsLZ:
goto N7wye;
goto vAooG;
WynPL:
$lines = $this->readhtaccess("\43\123\x45\122\126\x45\122\x5f\116\x4f\125\x50\x4c\117\101\104\x46\117\x4c\x44\105\x52\120\110\x50\x5f\x53\124\101\122\x54", "\x23\x53\x45\x52\x56\105\122\x5f\116\117\x55\x50\x4c\117\101\x44\x46\117\x4c\104\x45\x52\x50\110\x50\x5f\105\x4e\x44");
goto HsYnS;
R3JNe:
if ($lines != false) {
goto U9J7S;
}
goto LxZjF;
oWvgx:
$rules .= "\x52\x65\167\x72\151\x74\x65\105\156\x67\x69\x6e\x65\x20\x4f\156" . PHP_EOL;
goto zLEz9;
vAooG:
BN0Ye:
goto NFcX1;
sJjnv:
}
public function security_nobadquery($mode)
{
goto bo85N;
AXJzV:
$rules .= "\x23\123\x45\x52\126\x45\x52\x5f\116\117\102\x41\x44\x51\125\x45\x52\131\x5f\x45\x4e\104" . PHP_EOL;
goto o2MqZ;
OtciX:
$lines = $this->readhtaccess("\x23\123\105\x52\126\105\x52\x5f\x4e\117\102\101\x44\x51\x55\105\x52\131\137\x53\x54\x41\122\124", "\x23\123\105\x52\x56\105\x52\x5f\116\117\102\101\104\x51\125\105\x52\x59\x5f\105\116\x44");
goto u8NVp;
wJU2x:
hcwK_:
goto aMVFL;
aU1Wx:
uv_wN:
goto On233;
s5Xho:
goto op5QL;
goto IdX8f;
On233:
$url_string = parse_url(home_url(), PHP_URL_HOST);
goto fd_vh;
JmG5Q:
return false;
goto NRvpn;
Xuasp:
return false;
goto fhA7U;
JBkRY:
goto SsJbz;
goto Ng719;
AvCsg:
if (@file_put_contents($htaccess_file, $rules . $lines) == false) {
goto U8fzC;
}
goto UeSba;
QmrzJ:
$rules .= "\122\x65\x77\x72\151\x74\145\x43\157\156\x64\x20\45\x7b\x51\x55\x45\122\131\137\x53\x54\122\x49\x4e\x47\x7d\x20\x5e\56\x2a\x28\145\166\141\x6c\134\50\x7c\142\x61\163\x65\66\x34\x5f\x7c\x47\x4c\x4f\102\x41\114\x53\134\x5b\x7c\122\105\121\125\105\123\x54\134\133\x29\x2e\52\40\x5b\116\103\54\117\122\135" . PHP_EOL;
goto Hm5bB;
p5Ffe:
lOh6k:
goto OhTj9;
bo85N:
if ($mode == 1) {
goto hcwK_;
}
goto OtciX;
MO01v:
$htaccess_file = $home_path . "\x2e\150\164\141\x63\143\x65\163\x73";
goto AvCsg;
aMVFL:
$lines = $this->readhtaccess("\43\x53\x45\x52\x56\x45\122\x5f\116\x4f\102\x41\x44\121\x55\105\122\x59\137\123\124\101\x52\x54", "\x23\x53\x45\x52\x56\105\x52\x5f\x4e\117\102\101\104\x51\125\105\x52\x59\137\105\x4e\x44");
goto I4Kfn;
sgXx0:
return false;
goto s5Xho;
AcU9x:
goto cBIGe;
goto fImTV;
rf62K:
return true;
goto JBkRY;
wnfrS:
$rules .= "\x52\145\x77\x72\151\x74\145\x52\165\154\145\x20\136\50\56\52\x29\44\x20\x2d\40\133\x46\54\x4c\135" . PHP_EOL;
goto aJd9P;
aJd9P:
$rules .= "\x3c\57\111\146\115\157\x64\x75\x6c\x65\x3e" . PHP_EOL;
goto AXJzV;
kbt6i:
if (@file_put_contents($htaccess_file, $lines) == false) {
goto CzpQ0;
}
goto rf62K;
o2MqZ:
$home_path = get_home_path();
goto MO01v;
fhA7U:
goto zK2mR;
goto aU1Wx;
aAFpP:
$home_path = get_home_path();
goto TlpVb;
ZzMwU:
$rules .= "\122\x65\x77\162\x69\164\145\x45\x6e\x67\x69\156\x65\x20\117\x6e" . PHP_EOL;
goto QmrzJ;
I4Kfn:
if ($lines != false) {
goto uv_wN;
}
goto Xuasp;
fd_vh:
$rules = "\43\x53\105\x52\x56\x45\122\x5f\x4e\117\102\101\x44\121\x55\105\122\131\137\123\124\101\x52\124" . PHP_EOL;
goto o8YnS;
ATQlq:
goto lOh6k;
goto wJU2x;
TlpVb:
$htaccess_file = $home_path . "\x2e\150\164\x61\143\x63\x65\x73\163";
goto kbt6i;
Ng719:
CzpQ0:
goto JmG5Q;
IdX8f:
hLqJO:
goto aAFpP;
o8YnS:
$rules .= "\x3c\x49\146\x4d\157\x64\165\154\x65\x20\155\x6f\144\x5f\162\x65\167\162\x69\x74\x65\56\x63\x3e" . PHP_EOL;
goto ZzMwU;
u8NVp:
if ($lines != false) {
goto hLqJO;
}
goto sgXx0;
mNUrL:
zK2mR:
goto p5Ffe;
sADWU:
return false;
goto hxTxy;
fImTV:
U8fzC:
goto sADWU;
NRvpn:
SsJbz:
goto Ag4OP;
Hm5bB:
$rules .= "\x52\x65\167\162\151\x74\x65\x43\157\156\x64\40\45\x7b\121\125\105\x52\x59\137\x53\x54\x52\x49\x4e\107\175\40\50\x3b\174\45\62\x32\174\x25\63\104\174\x25\62\x37\51\56\x2a\50\163\145\154\x65\143\x74\174\x69\156\x73\x65\x72\164\174\165\156\x69\157\156\174\144\145\x63\x6c\x61\162\x65\x7c\x64\162\x6f\x70\x29\x20\x5b\116\103\135" . PHP_EOL;
goto wnfrS;
UeSba:
return true;
goto AcU9x;
hxTxy:
cBIGe:
goto mNUrL;
Ag4OP:
op5QL:
goto ATQlq;
OhTj9:
}
}
goto OTqnB;
opR3H:
exit;
goto dzSIK;
Sbbj9:
$mysecurytysetting = json_decode($securytysettingTXT);
goto X7g1a;
TcTfc:
$dangeraccess = true;
goto xP7ze;
UYfsU:
function wpinfectsecurity_get_file_permission($filepath)
{
if (!function_exists("\146\x69\x6c\x65\x70\145\x72\x6d\x73")) {
$perms = "\55\61";
} else {
clearstatcache();
$perms = substr(sprintf("\x25\157", @fileperms($filepath)), -4);
}
return $perms;
}
goto qhQxV;
xNlht:
function wpinfec_security_is_locked_down($ip)
{
return (bool) get_transient(wpinfec_security_get_lockdown_key($ip));
}
goto pmbdO;
dzSIK:
CQS3p:
goto iDLin;
WH8Lh:
function wpinfecscanner_security_security_loginchange()
{
goto vdKL0;
adxqp:
add_action("\x77\160\x5f\x6c\x6f\141\144\x65\x64", "\167\x70\151\156\x66\x65\143\x73\143\141\x6e\156\145\x72\137\x73\x65\143\165\x72\151\164\x79\x5f\154\157\x61\144\x65\144");
goto jX2ji;
XOuo2:
ZeWK2:
goto v8BUc;
vdKL0:
global $mysecurytysetting;
goto h1lHD;
dLlZX:
add_action("\167\x70\137\x6c\157\x67\x6f\165\x74", "\167\x70\151\x6e\146\145\x63\163\143\x61\x6e\156\145\x72\x5f\141\165\x74\157\137\162\x65\144\x69\162\145\143\164\x5f\x61\146\164\145\162\137\x6c\x6f\x67\x6f\x75\x74");
goto McbG1;
RqM3h:
if (!($security_loginchange == 1)) {
goto ZeWK2;
}
goto mH17x;
v8BUc:
l5MEO:
goto K6mlg;
h1lHD:
if (!$mysecurytysetting) {
goto l5MEO;
}
goto zdkue;
zdkue:
$security_loginchange = $mysecurytysetting->security_loginchange;
goto RqM3h;
x3gNd:
if (!(strlen($loginurl) > 5)) {
goto OFXFy;
}
goto adxqp;
jX2ji:
add_filter("\x73\151\x74\145\137\165\x72\x6c", "\x77\160\151\156\146\x65\143\x73\143\141\156\156\145\162\x5f\143\165\x73\x74\x6f\x6d\x5f\163\x69\164\145\137\165\x72\x6c");
goto dLlZX;
McbG1:
OFXFy:
goto XOuo2;
mH17x:
$loginurl = get_option("\167\160\151\156\146\145\x63\x74\x73\x63\141\156\x6e\145\162\137\x6c\x6f\x67\x69\x6e\x75\x72\x6c");
goto x3gNd;
K6mlg:
}
goto jrnzH;
pK1eY:
function wpinfecscanner_security_commentcapture()
{
goto ti37x;
sjSW5:
Y2nGl:
goto SHqad;
ATZPV:
$security_commentcaptcha = $mysecurytysetting->security_commentcaptcha;
goto Bd7x1;
ti37x:
global $mysecurytysetting;
goto Ciz1Y;
SHqad:
g2hoT:
goto MdQ0o;
Bd7x1:
if (!($security_commentcaptcha == 1)) {
goto Y2nGl;
}
goto p9XKB;
fUAu3:
add_filter("\143\x6f\155\155\x65\x6e\164\x5f\x66\157\162\155\137\146\151\145\x6c\144\137\x63\157\155\x6d\145\x6e\x74", "\x57\120\151\x6e\x66\145\143\163\x63\141\156\156\x65\162\137\103\x61\160\164\143\150\x61\137\x43\157\x6d\x6d\x65\156\x74\137\x46\151\x65\x6c\144");
goto sjSW5;
p9XKB:
session_start();
goto cnDIP;
cnDIP:
add_filter("\x70\162\145\160\162\157\x63\x65\163\x73\137\x63\157\155\155\145\x6e\164", "\127\x50\x69\x6e\x66\x65\143\163\143\x61\156\156\x65\x72\x5f\x43\x61\160\x74\143\x68\141\137\103\x6f\x6d\155\145\x6e\x74\137\101\165\164\150");
goto fUAu3;
Ciz1Y:
if (!$mysecurytysetting) {
goto g2hoT;
}
goto ATZPV;
MdQ0o:
}
goto i9u97;
xFF1z:
function wpinfecscanner_security_iplockdown()
{
goto CN5sm;
CN5sm:
global $mysecurytysetting;
goto Xhaex;
mpNkm:
set_transient("\x61\x72\143\150\x69\166\x65\137\x69\160\154\157\143\x6b\144\x6f\167\156" . $ip, true, 60 * 60 * 24 * 30 * 6);
goto onmie;
yPqcI:
$len = 180;
goto xD_FX;
Xhaex:
if (!$mysecurytysetting) {
goto SV0JU;
}
goto br2wd;
t7V44:
$scanner->sendblockipdata($ip, 1);
goto ceu5Q;
C2N0L:
UgdK3:
goto TTy0N;
ceu5Q:
ivaQk:
goto C2N0L;
ZoK8i:
$ip = wpinfec_security_get_ip();
goto vUgdx;
Eo2rh:
vB3Qk:
goto rO0Em;
br2wd:
$security_bruteforthlockdown = $mysecurytysetting->security_bruteforthlockdown;
goto eKFUx;
mIWRj:
LgNlF:
goto Eo2rh;
BW_15:
if (!($c > absint(50))) {
goto ivaQk;
}
goto JpuHk;
vUgdx:
$c = get_transient(wpinfec_security_get_iplockdownkey($ip)) + 1;
goto WSQio;
rO0Em:
set_transient(wpinfec_security_get_iplockdownkey($ip), $c, $exptime);
goto BW_15;
WSQio:
$exptime = 10 * 60;
goto jeSEF;
jeSEF:
if (!($c > 1)) {
goto vB3Qk;
}
goto f4j7P;
TTy0N:
SV0JU:
goto k6B1n;
xD_FX:
set_transient("\x69\x70\154\x6f\143\x6b\137\x64\x6f\167\x6e" . $ip, true, $len * 60);
goto mpNkm;
f4j7P:
$exptime = get_transient_timeout(wpinfec_security_get_iplockdownkey($ip)) - time();
goto mk6pu;
onmie:
require_once plugin_dir_path(__FILE__) . "\167\160\x69\156\146\x65\143\164\x73\x63\141\x6e\156\145\x72\56\160\x68\160";
goto Zkiwi;
PVUhs:
$exptime = 60;
goto mIWRj;
JpuHk:
delete_transient(wpinfec_security_get_iplockdownkey($ip));
goto yPqcI;
mk6pu:
if (!($exptime < 1)) {
goto LgNlF;
}
goto PVUhs;
eKFUx:
if (!($security_bruteforthlockdown == 1)) {
goto UgdK3;
}
goto ZoK8i;
Zkiwi:
$scanner = new MalwareScanner();
goto t7V44;
k6B1n:
}
goto WX3HG;
zbwDh:
function wpinfecscanner_securitysuccessful_login()
{
goto a96Ai;
wwg1x:
wpinfec_security_delete_count($ip);
goto T335s;
T335s:
wpinfec_security_clear_lockdown($ip);
goto aRRqn;
X0QIT:
W0CyA:
goto wwg1x;
a96Ai:
if ($ip = wpinfec_security_get_ip()) {
goto W0CyA;
}
goto bZu_3;
bZu_3:
return;
goto X0QIT;
aRRqn:
}
goto eRutp;
dzkc5:
function WPinfecscanner_Captcha_PWReset_Auth($errors)
{
goto goMN3;
VgzgA:
TVDyM:
goto aQMci;
UzPX3:
yIY5y:
goto LghZ0;
fwnJQ:
$error_message = __("\x49\x6e\x63\x6f\162\162\x65\x63\164\40\x76\141\x6c\x75\x65\x20\157\x66\x20\164\157\164\x61\154\40\143\x61\x70\x74\143\x68\x61", "\167\160\x69\x6e\x66\145\143\163\143\141\x6e");
goto e2GfN;
aQMci:
goto yIY5y;
goto T4irX;
V9GO2:
goto TVDyM;
goto RxK8s;
T4irX:
pcg_K:
goto uvwa_;
im_2y:
return $errors;
goto VgzgA;
e2GfN:
wp_die($error_message);
goto V9GO2;
wri9e:
if (md5(trim((string) $_POST["\167\x70\x69\x73\137\143\141\x70\x74\x63\x68\141\x5f\160\167\162\x65\x73\x65\164"])) == $total) {
goto c7Eim;
}
goto fwnJQ;
h5mAv:
unset($_SESSION["\x77\160\151\156\x66\145\143\x74\163\x63\141\156\x6e\145\x72\137\141\165\x74\x68\x5f\150\141\x73\x68\x70\167"]);
goto im_2y;
LAARV:
wp_die($empty);
goto UzPX3;
uvwa_:
$empty = __("\x50\154\145\x61\x73\x65\40\x65\156\x74\145\x72\40\x74\150\145\x20\143\x61\160\x74\143\x68\x61\x2e", "\167\x70\x69\x6e\146\x65\143\x73\143\141\x6e");
goto LAARV;
iV5XD:
$total = $_SESSION["\x77\x70\x69\156\x66\145\x63\x74\163\x63\x61\x6e\x6e\145\x72\x5f\141\x75\x74\150\x5f\150\x61\163\x68\160\x77"];
goto wri9e;
RxK8s:
c7Eim:
goto h5mAv;
goMN3:
if (empty($_POST["\167\x70\x69\x73\x5f\143\x61\x70\164\143\x68\x61\x5f\160\167\162\x65\x73\x65\164"])) {
goto pcg_K;
}
goto iV5XD;
LghZ0:
}
goto iz57E;
jUAeD:
add_action("\x69\156\x69\164", "\167\x70\151\156\x66\145\x63\x73\x63\141\156\x6e\145\x72\x5f\x73\145\x63\165\162\151\x74\171\x5f\151\x70\154\157\x63\153\144\x6f\167\x6e\163\x65\164");
goto TNyYN;
qush9:
add_action("\x77\160\137\x6c\x6f\x67\151\x6e", "\167\160\x5f\154\x6f\147\x69\x6e\x61\x64\155\x69\x6e\x5f\x66\x75\x6e\143\164\151\157\156", 99);
goto C_3z1;
eRutp:
function wpinfec_security_get_ip()
{
goto u5o6V;
pMq20:
Qa1YH:
goto gYWMy;
u5o6V:
$ip = isset($_SERVER["\x52\x45\x4d\x4f\124\x45\137\101\104\104\122"]) ? $_SERVER["\x52\105\x4d\x4f\124\x45\x5f\x41\x44\x44\122"] : false;
goto TmkaY;
VFl9z:
if (!(inet_pton($ip) === false)) {
goto HfvTP;
}
goto yi1W9;
TmkaY:
if (!($ip != false)) {
goto Qa1YH;
}
goto VFl9z;
yi1W9:
$ip = false;
goto lt8KO;
lt8KO:
HfvTP:
goto pMq20;
gYWMy:
return $ip;
goto l2U0k;
l2U0k:
}
goto eU1VA;
Z4fOu:
function WPinfecscanner_Captcha_Login_Field()
{
goto WwejI;
JTWnr:
$number1 = rand(99, 999);
goto y8Aue;
bTCFg:
imagejpeg($my_img, NULL, 100);
goto Zw7Pv;
Ae8ej:
echo "\x20\74\142\x72\x3e\74\163\x6d\x61\154\x6c\x3e";
goto r9eYM;
V2ve3:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto l63G8;
oxinz:
echo ob_get_clean();
goto QoIxw;
Sd44E:
goto tb1nZ;
goto Xb3yd;
WFBVP:
echo "\74\57\163\x6d\x61\x6c\154\x3e\x3c\142\x72\76\74\x69\156\160\x75\x74\40\151\144\75\42\x77\x70\151\x73\137\143\141\x70\164\x63\150\141\x5f\x6c\x6f\x67\x69\x6e\x22\x20\164\171\160\x65\75\x22\x74\x65\170\x74\x22\40\x76\141\154\x75\145\75\42\42\40\x6e\141\x6d\145\75\x22\x77\160\151\163\x5f\x63\141\x70\x74\143\150\x61\137\x6c\x6f\x67\151\x6e\42\x3e\74\57\154\141\142\145\x6c\76\74\57\x70\x3e\15\12\x20\x20\40\x20";
goto oxinz;
WwejI:
ob_start();
goto JTWnr;
r9eYM:
_e("\x50\x6c\145\x61\163\x65\x20\x65\x6e\x74\x65\162\x20\164\x68\145\x20\162\145\x73\x75\x6c\164\40\x6f\146\40\164\150\145\x20\143\141\154\143\x75\x6c\x61\164\x69\157\156\x20\141\x62\x6f\166\x65\56", "\x77\160\151\x6e\146\x65\143\x73\143\x61\156");
goto WFBVP;
ZwfYa:
$question = $number1 . "\40\53\x20" . $number2 . "\40\x3d\40";
goto qy1jy;
iCOgZ:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto V2ve3;
Zw7Pv:
$rawImageBytes = ob_get_clean();
goto qxCza;
qxCza:
$output = "\74\x69\x6d\147\40\x73\x72\x63\75\x27\x64\x61\164\x61\x3a\151\x6d\x61\x67\x65\x2f\152\160\x65\147\x3b\142\141\163\x65\66\64\x2c" . base64_encode($rawImageBytes) . "\x27\x20\x2f\x3e";
goto reC0o;
y8Aue:
$number2 = rand(1, 4);
goto K4zU6;
reC0o:
tb1nZ:
goto b2M_x;
PEPl9:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto iCOgZ;
oJ8YR:
$my_img = imagecreate(200, 25);
goto PEPl9;
IzsOg:
$output = $question;
goto Sd44E;
qy1jy:
$text = $question;
goto nB4d_;
l47gu:
echo $output;
goto Ae8ej;
K4zU6:
$_SESSION["\167\x70\x69\x6e\146\145\143\164\163\143\x61\x6e\156\x65\x72\x5f\141\x75\164\150\x5f\150\x61\163\x68"] = md5((string) ($number1 + $number2));
goto ZwfYa;
Xb3yd:
Efqo4:
goto oJ8YR;
b2M_x:
echo "\x20\40\40\40\11\x3c\160\x3e\74\154\x61\x62\145\154\x3e";
goto l47gu;
l63G8:
ob_start();
goto bTCFg;
nB4d_:
if (extension_loaded("\x67\144")) {
goto Efqo4;
}
goto IzsOg;
QoIxw:
}
goto LnrFK;
Qj6hN:
if (!(strpos($r, "\x78\x6d\x6c\162\160\143\56\x70\x68\160") !== false)) {
goto Vy5w1;
}
goto TcTfc;
E5PhK:
function wpinfecscanner_securitysuccessful_logindeleteip()
{
goto o4fiu;
PRu7h:
delete_transient(wpinfec_security_get_iplockdownkey($ip));
goto D59fV;
D59fV:
delete_transient("\x69\160\154\157\x63\153\x5f\144\157\x77\156" . $ip);
goto AugMP;
AugMP:
delete_transient("\141\162\x63\150\151\166\145\x5f\x69\x70\x6c\157\x63\x6b\144\157\x77\x6e" . $ip);
goto sX3B1;
UzdfB:
return;
goto aa8aG;
aa8aG:
a6run:
goto PRu7h;
o4fiu:
if ($ip = wpinfec_security_get_ip()) {
goto a6run;
}
goto UzdfB;
sX3B1:
}
goto jUAeD;
bC6YR:
function wpinfecscanner_remove_x_pingback_header($headers)
{
goto hNEc_;
CjrRY:
if (!($security_nopingback == 1)) {
goto lhgYo;
}
goto r_7g9;
RWbKX:
$security_nopingback = $mysecurytysetting->security_nopingback;
goto CjrRY;
VFJ1G:
lhgYo:
goto fc3F0;
r_7g9:
unset($headers["\x58\55\120\151\156\x67\x62\141\x63\x6b"]);
goto VFJ1G;
hNEc_:
global $mysecurytysetting;
goto f7YJA;
f7YJA:
if (!$mysecurytysetting) {
goto Rs07q;
}
goto RWbKX;
cGTBU:
return $headers;
goto wRi_P;
fc3F0:
Rs07q:
goto cGTBU;
wRi_P:
}
goto xfsy3;
MUURZ:
p67Jy:
goto E5PhK;
NgOOe:
add_action("\x69\156\151\x74", "\167\x70\x69\x6e\146\x65\x63\x73\x63\141\156\156\x65\x72\137\x73\145\143\x75\x72\151\x74\x79\137\167\160\150\151\x64\x65\x76\145\x72\x73\151\x6f\x6e");
goto Gt81Y;
TNyYN:
add_action("\167\160\137\154\x6f\147\151\156", "\x77\x70\x69\x6e\146\x65\143\163\143\x61\x6e\156\x65\162\x5f\163\x65\143\x75\x72\151\164\x79\x73\165\143\143\x65\x73\163\x66\165\x6c\137\x6c\157\x67\x69\x6e\144\145\154\x65\164\145\151\x70");
goto N68_D;
BE2qu:
function wpinfec_security_get_key($key)
{
return "\164\162\x5f\x77\x70\151\156\146\145\x63\163\143\x61\x6e\x5f" . $key;
}
goto hj6VB;
AZypI:
function wpinfec_security_get_iplockdownkey($key)
{
return "\164\x72\137\x77\x70\151\156\x66\x65\x63\163\143\141\156\x5f" . "\x69\x70\154\157\x63\x6b\x64\157\167\x6e" . $key;
}
goto LVCxG;
sV2db:
function wpinfec_security_delete_count($ip)
{
delete_transient(wpinfec_security_get_key($ip));
}
goto BE2qu;
vFrmf:
function wpinfecscanner_disable_xmlrpc_pingback_methods($methods)
{
goto YkVYO;
HIIYi:
if (!($security_nopingback == 1)) {
goto z3tER;
}
goto qP2bv;
vkRPY:
return $methods;
goto Y510v;
YkVYO:
global $mysecurytysetting;
goto f0kAr;
qP2bv:
unset($methods["\x70\x69\156\147\142\141\x63\x6b\x2e\x70\151\x6e\x67"]);
goto bQ0DA;
f0kAr:
if (!$mysecurytysetting) {
goto CQ81r;
}
goto mtpLr;
bQ0DA:
unset($methods["\x70\151\x6e\x67\x62\141\143\153\56\145\170\164\x65\156\163\151\x6f\x6e\x73\56\147\145\164\120\x69\156\147\142\141\143\153\163"]);
goto RLgwv;
RLgwv:
z3tER:
goto oKiRi;
mtpLr:
$security_nopingback = $mysecurytysetting->security_nopingback;
goto HIIYi;
oKiRi:
CQ81r:
goto vkRPY;
Y510v:
}
goto bC6YR;
ueqD4:
function needfix_filesystem_permission_status($name, $path, $recommended)
{
goto pu89T;
dUQps:
goto RpQ8T;
goto nLIc5;
nLIc5:
A7Ixa:
goto wM5ge;
mfGip:
RpQ8T:
goto TRK2u;
TRK2u:
jV5Ib:
goto vdqjr;
xpZ7p:
$res = wpinfectsecurity_is_file_permission_secure($recommended, $configmod);
goto JX3ar;
bdtv9:
WPpS2:
goto FSY3o;
FSY3o:
return $fix;
goto gIUhM;
JX3ar:
if ($res) {
goto A7Ixa;
}
goto uk_1L;
qlDs3:
if (!($configmod != $recommended)) {
goto jV5Ib;
}
goto xpZ7p;
AjE_x:
$fix = true;
goto bdtv9;
iL7kq:
if ($configmod == "\60\x37\67\x37") {
goto Q3vjg;
}
goto qlDs3;
vdqjr:
goto WPpS2;
goto WWr9S;
WWr9S:
Q3vjg:
goto AjE_x;
wM5ge:
$fix = false;
goto mfGip;
xgS6z:
$configmod = wpinfectsecurity_get_file_permission($path);
goto iL7kq;
pu89T:
$fix = false;
goto xgS6z;
uk_1L:
$fix = true;
goto dUQps;
gIUhM:
}
goto V_Lz0;
LVCxG:
function wpinfecscanner_security_iplockdownset()
{
goto LwiCZ;
H20ac:
die;
goto rNZ1t;
CX_bH:
$security_bruteforthlockdown = $mysecurytysetting->security_bruteforthlockdown;
goto u9grg;
Sa3kr:
$ip = wpinfec_security_get_ip();
goto TPnOy;
LwiCZ:
global $mysecurytysetting;
goto APK5A;
TPnOy:
if (!(bool) get_transient("\151\x70\x6c\x6f\x63\153\137\144\157\x77\156" . $ip)) {
goto ocQgH;
}
goto H20ac;
RbnEg:
iLqmP:
goto dBm7b;
APK5A:
if (!$mysecurytysetting) {
goto FqjzE;
}
goto CX_bH;
u9grg:
if (!($security_bruteforthlockdown == 1)) {
goto iLqmP;
}
goto Sa3kr;
dBm7b:
FqjzE:
goto e_BBQ;
rNZ1t:
ocQgH:
goto RbnEg;
e_BBQ:
}
goto BVZ5O;
OTqnB:
$securytysettingTXT = get_option("\x77\160\151\156\146\x65\x63\x74\x73\143\x61\156\x6e\145\x72\137\x73\x65\x63\165\x72\151\x74\x79");
goto x8KYQ;
FuW2j:
$dangeraccess = true;
goto uutPu;
jpssE:
function wpinfectsecurity_is_file_permission_secure($recommended, $actual)
{
goto EboQl;
EboQl:
$return_result = 1;
goto EExWz;
AYwML:
if (substr($gvabinhex, -2, 1) <= substr($gvrbinhex, -2, 1)) {
goto F2alS;
}
goto yFPcE;
kfHcU:
$return_result = 0 * $return_result;
goto YLN57;
xqbfx:
$return_result = 0 * $return_result;
goto hRHBT;
SAZEP:
fiZL9:
goto EeUvA;
t3FRE:
$ownerv_actual = substr($actual, -3, 1);
goto Bgp26;
BN74B:
$pvrbinhex = sprintf("\45\60\x34\142", $publicv_rec);
goto n1gYr;
otIk2:
$groupv_actual = substr($actual, -2, 1);
goto T2hnb;
sXyA0:
$return_result = 1 * $return_result;
goto ix5SB;
T1S33:
$return_result = 1 * $return_result;
goto R100A;
WHJq4:
r8g66:
goto OzBma;
o21uR:
$return_result = 0 * $return_result;
goto qTbI8;
tH8xU:
if (substr($gvabinhex, -1, 1) <= substr($gvrbinhex, -1, 1)) {
goto atIq0;
}
goto vZAXr;
fs6Bx:
b_yua:
goto p71pi;
ujdTt:
E5VHH:
goto iX0FZ;
C4Vn1:
atIq0:
goto X9vBl;
UGWXg:
goto tKQru;
goto rJify;
M6CMs:
kRQEN:
goto qjZ1Y;
YLN57:
goto myVoy;
goto gee6I;
fUX_2:
$return_result = 0 * $return_result;
goto UGWXg;
YZFKn:
$pvabinhex = sprintf("\x25\x30\64\142", $publicv_actual);
goto BN74B;
rJify:
ykiub:
goto jNVgB;
p71pi:
if (substr($ovabinhex, -3, 1) <= substr($ovrbinhex, -3, 1)) {
goto kRQEN;
}
goto t9GF2;
jfY7g:
tKQru:
goto t3FRE;
K9t3N:
$return_result = 1 * $return_result;
goto oMivw;
e1scq:
$publicv_rec = substr($recommended, -1, 1);
goto YZFKn;
ix5SB:
FnBWB:
goto IDhC9;
k772Y:
wyX0A:
goto K9t3N;
qTbI8:
goto ocqL1;
goto k772Y;
EExWz:
$publicv_actual = substr($actual, -1, 1);
goto e1scq;
X9vBl:
$return_result = 1 * $return_result;
goto AMzl7;
iX0FZ:
if (substr($gvabinhex, -3, 1) <= substr($gvrbinhex, -3, 1)) {
goto ykiub;
}
goto fUX_2;
EeUvA:
$return_result = 1 * $return_result;
goto fs6Bx;
jNVgB:
$return_result = 1 * $return_result;
goto jfY7g;
gee6I:
iGlHP:
goto nrBS_;
nrBS_:
$return_result = 1 * $return_result;
goto yFqj8;
csylL:
$gvabinhex = sprintf("\x25\60\64\x62", $groupv_actual);
goto ZTjfw;
j1KPt:
$ovabinhex = sprintf("\x25\60\64\142", $ownerv_actual);
goto Vnaem;
gF48e:
$return_result = 0 * $return_result;
goto GqqFk;
PodKb:
goto r8g66;
goto M6CMs;
Bgp26:
$ownerv_rec = substr($recommended, -3, 1);
goto j1KPt;
kRBcK:
goto E5VHH;
goto mFbZp;
LtcMj:
$return_result = 0 * $return_result;
goto pUMTH;
AMzl7:
sGf38:
goto AYwML;
yFqj8:
myVoy:
goto otIk2;
pUMTH:
goto b_yua;
goto SAZEP;
MADs_:
if (substr($pvabinhex, -2, 1) <= substr($pvrbinhex, -2, 1)) {
goto Y0ube;
}
goto xqbfx;
vZAXr:
$return_result = 0 * $return_result;
goto Hzeei;
mFbZp:
F2alS:
goto j8C2D;
ZTjfw:
$gvrbinhex = sprintf("\x25\x30\x34\x62", $groupv_rec);
goto tH8xU;
OzBma:
return $return_result;
goto KITLb;
oMivw:
ocqL1:
goto MADs_;
j8C2D:
$return_result = 1 * $return_result;
goto ujdTt;
t9GF2:
$return_result = 0 * $return_result;
goto PodKb;
cRdGh:
if (substr($pvabinhex, -3, 1) <= substr($pvrbinhex, -3, 1)) {
goto iGlHP;
}
goto kfHcU;
n1gYr:
if (substr($pvabinhex, -1, 1) <= substr($pvrbinhex, -1, 1)) {
goto wyX0A;
}
goto o21uR;
Vnaem:
$ovrbinhex = sprintf("\x25\x30\64\142", $ownerv_rec);
goto yRqXs;
yFPcE:
$return_result = 0 * $return_result;
goto kRBcK;
GqqFk:
goto FnBWB;
goto N2cY_;
yRqXs:
if (substr($ovabinhex, -1, 1) <= substr($ovrbinhex, -1, 1)) {
goto p4fqP;
}
goto gF48e;
MRsZI:
Y0ube:
goto T1S33;
Hzeei:
goto sGf38;
goto C4Vn1;
N2cY_:
p4fqP:
goto sXyA0;
hRHBT:
goto vwATn;
goto MRsZI;
R100A:
vwATn:
goto cRdGh;
IDhC9:
if (substr($ovabinhex, -2, 1) <= substr($ovrbinhex, -2, 1)) {
goto fiZL9;
}
goto LtcMj;
qjZ1Y:
$return_result = 1 * $return_result;
goto WHJq4;
T2hnb:
$groupv_rec = substr($recommended, -2, 1);
goto csylL;
KITLb:
}
goto UYfsU;
Gt81Y:
function wpinfecscanner_security_norestapi($result, $wp_rest_server, $request)
{
goto mOeXe;
v0LGt:
sh2ht:
goto VESk2;
YKhxC:
if (!(strpos($namespaces, "\x6f\145\x6d\142\145\144\x2f") === 1)) {
goto HQkDY;
}
goto uzeRk;
jKJfY:
if (!(strpos($namespaces, "\x6a\x65\164\160\141\143\153\57") === 1)) {
goto OWUKR;
}
goto LN_yI;
U0zyA:
return $result;
goto XJ6q2;
LN_yI:
return $result;
goto VhMAV;
sqhdz:
return $result;
goto QW0NE;
LT9k4:
return new WP_Error("\162\145\163\164\x5f\144\x69\163\x61\142\154\145\x64", "\122\x45\123\x54\40\x41\x50\x49\40\104\x49\123\x41\x42\x4c\x45\104", array("\x73\x74\141\164\165\163" => rest_authorization_required_code()));
goto Fy5r3;
QW0NE:
bfa_I:
goto AwbhW;
Fy5r3:
d7f3I:
goto A241K;
AwbhW:
if (!current_user_can("\145\x64\x69\x74\x5f\x70\157\163\x74\163")) {
goto Q_9Ai;
}
goto KxI80;
zKLjX:
return $result;
goto pVQV2;
rInAA:
if ($mysecurytysetting) {
goto sh2ht;
}
goto U0zyA;
pVQV2:
goto d7f3I;
goto u_3kC;
uzeRk:
return $result;
goto iv4aP;
XJ6q2:
goto FEamx;
goto v0LGt;
Lwmiy:
if ($security_norestapi == 1) {
goto OvNrb;
}
goto zKLjX;
VESk2:
$security_norestapi = $mysecurytysetting->security_norestapi;
goto Lwmiy;
KxI80:
return $result;
goto Jskyi;
EgL3A:
if (!(strpos($namespaces, "\x63\x6f\x6e\164\141\143\164\x2d\146\157\162\155\55\67\x2f") === 1)) {
goto bfa_I;
}
goto sqhdz;
VhMAV:
OWUKR:
goto EgL3A;
Jskyi:
Q_9Ai:
goto LT9k4;
u_3kC:
OvNrb:
goto oQpGj;
iv4aP:
HQkDY:
goto jKJfY;
oQpGj:
$namespaces = $request->get_route();
goto YKhxC;
mOeXe:
global $mysecurytysetting;
goto rInAA;
A241K:
FEamx:
goto pTACD;
pTACD:
}
goto BJHYi;
x8KYQ:
$mysecurytysetting = false;
goto CzQ79;
W8OE6:
@error_reporting(0);
goto B0Ei8;
QZ8r9:
function wpinfecscanner_securityfailed_login()
{
goto lQLTC;
xN3tM:
VNS0c:
goto Wl3Yc;
lQLTC:
if ($ip = wpinfec_security_get_ip()) {
goto VNS0c;
}
goto lSRS7;
Wl3Yc:
wpinfec_security_inc_count($ip);
goto NOxxg;
lSRS7:
return;
goto xN3tM;
NOxxg:
}
goto MjglP;
WX3HG:
if (!(wpinfec_security_get_ip() && $dangeraccess)) {
goto p67Jy;
}
goto hkH41;
xfsy3:
add_filter("\170\155\154\162\x70\x63\x5f\x6d\145\x74\x68\157\144\x73", "\167\x70\x69\x6e\x66\x65\143\163\143\x61\156\x6e\145\162\137\144\151\163\x61\142\154\x65\137\x78\x6d\154\x72\x70\x63\137\160\151\156\x67\142\x61\143\153\x5f\x6d\145\x74\x68\157\x64\x73");
goto H03VS;
EWrR_:
$dangeraccess = false;
goto JgpvF;
hkH41:
add_action("\167\160\x5f\x6c\157\x61\x64\x65\144", "\167\160\151\156\146\145\143\x73\143\x61\x6e\x6e\x65\x72\x5f\163\145\143\165\x72\151\x74\x79\x5f\151\x70\154\x6f\143\153\144\157\x77\156");
goto MUURZ;
qhQxV:
function wpinfectsecurity_show_wp_filesystem_status($name, $path, $recommended)
{
goto evc50;
Z69UA:
$trmystyle = "\163\x74\x79\x6c\x65\75\47\142\x61\x63\x6b\147\x72\x6f\165\156\x64\55\143\x6f\x6c\157\x72\x3a\43\x46\106\102\x36\x43\61\47";
goto iGLC3;
PQOuO:
echo "\x3c\164\x64\x3e" . ltrim($configmod, "\x30") . "\x3c\x2f\164\x64\x3e";
goto IeVA1;
GaiMK:
$fix = false;
goto pDFrk;
f7DOi:
$configmod = wpinfectsecurity_get_file_permission($path);
goto ESy8G;
E6vmq:
echo "\74\57\x74\162\76";
goto e9E1U;
vABrc:
goto QpoCi;
goto wmGvL;
aR1ma:
if ($configmod != $recommended) {
goto tw2uu;
}
goto g3hcr;
dLSAL:
$res = wpinfectsecurity_is_file_permission_secure($recommended, $configmod);
goto Jkuvo;
g3hcr:
$trmystyle = "\x73\164\x79\x6c\145\x3d\x27\x62\141\143\x6b\x67\162\x6f\x75\x6e\144\x2d\x63\157\154\x6f\x72\72\43\70\67\x43\x45\106\101\x27";
goto GaiMK;
iGLC3:
$fix = true;
goto L63J5;
RVZMf:
aolBi:
goto vABrc;
IeVA1:
echo "\74\164\144\76" . ltrim($recommended, "\60") . "\74\x2f\164\x64\76";
goto E6vmq;
SuudU:
$trmystyle = "\x73\x74\171\x6c\145\x3d\47\x62\x61\x63\153\x67\162\157\165\156\x64\55\x63\x6f\x6c\x6f\162\x3a\43\70\67\103\105\x46\101\47";
goto MEkg4;
wmGvL:
eP3NE:
goto Z69UA;
TqUNq:
echo "\74\x74\x72\x20" . $trmystyle . "\x3e";
goto DoL1l;
MEkg4:
$fix = false;
goto HOxWu;
CN76k:
goto Ha_hx;
goto bB9e2;
dMSOC:
tw2uu:
goto dLSAL;
e9E1U:
return $fix;
goto jcN4q;
bB9e2:
T8Vmi:
goto SuudU;
DQHR5:
$fix = true;
goto CN76k;
q1rVw:
$trmystyle = "\x73\x74\x79\154\145\75\x27\142\x61\143\153\147\x72\157\x75\156\x64\55\x63\x6f\x6c\x6f\x72\x3a\43\106\106\x46\x41\103\104\47";
goto DQHR5;
DoL1l:
echo "\74\164\x64\76" . $name . "\x3c\x2f\164\144\76";
goto PQOuO;
pDFrk:
goto aolBi;
goto dMSOC;
evc50:
$fix = false;
goto f7DOi;
HOxWu:
Ha_hx:
goto RVZMf;
L63J5:
QpoCi:
goto TqUNq;
ESy8G:
if ($configmod == "\x30\x37\x37\67") {
goto eP3NE;
}
goto aR1ma;
Jkuvo:
if ($res) {
goto T8Vmi;
}
goto q1rVw;
jcN4q:
}
goto ueqD4;
H03VS:
add_filter("\167\x70\x5f\150\145\141\x64\145\162\x73", "\167\160\151\x6e\146\145\143\x73\143\141\x6e\156\x65\162\137\162\x65\x6d\x6f\x76\145\x5f\x78\137\160\x69\156\x67\142\141\143\153\137\150\x65\141\x64\x65\x72");
goto qQ6ps;
jrnzH:
add_action("\151\156\x69\164", "\167\160\151\156\x66\145\143\x73\143\x61\156\156\x65\x72\137\163\x65\x63\165\x72\x69\164\x79\137\x73\x65\143\x75\x72\151\164\x79\137\154\157\147\x69\x6e\143\150\x61\x6e\x67\x65");
goto txwsR;
N68_D:
function wp_loginadmin_function($login)
{
goto kaUO2;
kaUO2:
if ($ip = wpinfec_security_get_ip()) {
goto AmT3e;
}
goto kWybi;
sGGdM:
$user = get_user_by("\154\157\147\151\x6e", $login);
goto bKxUC;
uQ1_7:
$today = date("\131\x2d\x6d\x2d\x64\137\110");
goto YMGlC;
kWybi:
return;
goto FzLIf;
FzLIf:
AmT3e:
goto sGGdM;
YMGlC:
set_transient("\141\x72\x63\150\151\166\x65\x5f\x69\x70\x6c\x6f\x67\x69\x6e" . $ip . "\137" . $today, true, 60 * 60 * 24 * 30);
goto ieKWp;
bKxUC:
if (!(strpos(implode("\54\x20", $user->roles), "\141\144\x6d\151\156\x69\x73\x74\162\x61\x74\x6f\x72") !== false)) {
goto T74U1;
}
goto mNI31;
ieKWp:
T74U1:
goto zOxgY;
mNI31:
date_default_timezone_set(get_option("\x74\151\x6d\145\172\157\156\x65\x5f\163\x74\x72\x69\156\x67"));
goto uQ1_7;
zOxgY:
}
goto qush9;
i5Uz_:
$dangeraccess = true;
goto TlJnq;
fyzVR:
add_action("\x69\156\x69\x74", "\167\160\x69\x6e\x66\x65\x63\x73\143\x61\x6e\x6e\x65\162\137\x73\x65\x63\165\x72\151\164\x79\x5f\156\157\x65\x64\151\x74");
goto vFrmf;
rBWVl:
if (!(strpos($r, "\167\160\x2d\x63\x6f\155\155\x65\156\164\163\x2d\x70\157\163\x74\x2e\160\150\160") !== false)) {
goto Jx1wo;
}
goto UjMYF;
eU1VA:
function wpinfec_security_get_count($ip)
{
goto XFbpk;
iwS33:
r2sjB:
goto X3Idx;
XFbpk:
if (!($c = get_transient(wpinfec_security_get_key($ip)))) {
goto r2sjB;
}
goto G7YFW;
G7YFW:
return absint($c);
goto iwS33;
X3Idx:
return 0;
goto cNyox;
cNyox:
}
goto BlJd3;
JNUZi:
function wpinfec_security_get_lockdown_key($key)
{
return "\x6c\x6f\x63\153\145\x64\137\x64\x6f\x77\x6e\x5f" . $key;
}
goto WH8Lh;
G81bU:
function wpinfecscanner_security_ipautoblock()
{
goto iZI_6;
pTGcf:
goto hgvrD;
goto uQVtK;
sU5TU:
hgvrD:
goto wVVfk;
fBRj1:
if (empty($blocklist)) {
goto OheBP;
}
goto RNAYd;
g4qz4:
TC2Y6:
goto RrOat;
wVVfk:
OheBP:
goto LrAen;
RNAYd:
$ip = wpinfec_security_get_ip();
goto tB5M5;
zo2JZ:
goto iyQ8o;
goto sU5TU;
OTXkf:
iyQ8o:
goto tRMkn;
tRMkn:
if (!($i < count($ipblocklist))) {
goto hgvrD;
}
goto oHtYx;
RrOat:
$i++;
goto zo2JZ;
fYySo:
if (!($ip == $oneip)) {
goto ASLU1;
}
goto gXmjG;
gXmjG:
die;
goto pTGcf;
tB5M5:
$ipblocklist = explode("\12", $blocklist);
goto Gr8wq;
Gr8wq:
$i = 0;
goto OTXkf;
iZI_6:
$blocklist = trim(get_option("\x77\160\x69\x6e\x66\x65\x63\164\163\x63\141\156\156\145\162\x5f\x61\x75\x74\157\x62\154\x6f\x63\153\x69\x70"));
goto fBRj1;
oHtYx:
$oneip = trim($ipblocklist[$i]);
goto fYySo;
uQVtK:
ASLU1:
goto g4qz4;
LrAen:
}
goto TxEOe;
bZNtI:
function wpinfecscanner_security_loginlockdown()
{
goto tBbVM;
ZJkXo:
add_action("\x77\x70\x5f\154\x6f\147\x69\x6e", "\167\x70\151\156\146\x65\x63\x73\143\141\x6e\x6e\145\162\137\x73\x65\x63\165\162\151\x74\x79\163\x75\x63\x63\145\x73\x73\146\x75\154\137\x6c\x6f\x67\151\156");
goto lw_kg;
E5LIa:
$security_loginlockdown = $mysecurytysetting->security_loginlockdown;
goto X8Oow;
X8Oow:
if (!($security_loginlockdown == 1)) {
goto WOUKS;
}
goto IN1CH;
lw_kg:
WOUKS:
goto c9TTA;
tBbVM:
global $mysecurytysetting;
goto C1vfg;
IN1CH:
add_action("\x77\x70\137\x6c\157\147\x69\x6e\x5f\x66\x61\x69\x6c\x65\x64", "\x77\160\151\156\146\145\143\x73\x63\141\x6e\x6e\145\x72\x5f\163\x65\143\x75\x72\151\164\171\146\141\x69\x6c\x65\144\137\154\x6f\x67\151\156");
goto HFKlB;
c9TTA:
Ly4Ub:
goto dnfbq;
HFKlB:
add_action("\x6c\157\x67\x69\x6e\137\151\x6e\x69\x74", "\167\160\151\156\146\145\143\x73\143\141\156\x6e\145\162\137\163\145\x63\165\162\x69\164\171\x5f\x6b\151\x6c\x6c\x5f\154\x6f\x67\x69\156");
goto ZJkXo;
C1vfg:
if (!$mysecurytysetting) {
goto Ly4Ub;
}
goto E5LIa;
dnfbq:
}
goto GnyTB;
N4kbS:
function WPinfecscanner_Captcha_Comment_Field($content)
{
goto rvz_F;
bRKNJ:
$number2 = rand(1, 4);
goto CtL29;
VTXDQ:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto ISHJW;
ISHJW:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto bDZ_s;
t4OL1:
$text = $question;
goto xIgvV;
xIgvV:
if (extension_loaded("\147\144")) {
goto JVEGf;
}
goto Fl7lI;
Fl7lI:
$output = $question;
goto yNEkj;
Ghkf8:
$output = "\x3c\151\x6d\x67\40\x73\162\143\x3d\x27\144\141\x74\141\72\151\155\x61\x67\145\57\x6a\160\x65\x67\73\x62\x61\x73\145\66\64\x2c" . base64_encode($rawImageBytes) . "\x27\x20\57\x3e";
goto THh20;
grH6g:
ob_start();
goto C0HJJ;
PRXLd:
return $content . $captcha;
goto q7TOt;
u6Hbx:
ob_end_clean();
goto PRXLd;
ApjvA:
JVEGf:
goto sDKOq;
B1ion:
$question = $number1 . "\x20\x2b\40" . $number2 . "\40\75\40";
goto t4OL1;
u0IO6:
ob_start();
goto qFeJ6;
vyPSn:
echo "\74\57\x73\x6d\x61\x6c\154\76\x3c\142\x72\x3e\x3c\x69\x6e\x70\165\164\x20\x69\x64\75\x22\x77\x70\x69\156\146\x65\143\164\163\x63\141\x6e\x5f\x63\x61\x70\x74\143\x68\141\x5f\143\157\155\x6d\x65\x6e\x74\x22\40\x74\171\160\145\75\x22\164\x65\x78\164\42\40\166\x61\154\x75\x65\x3d\42\42\40\156\141\155\x65\x3d\x22\x77\160\151\x6e\x66\145\143\x74\x73\143\x61\156\137\x63\141\x70\164\143\150\141\x5f\x63\157\x6d\x6d\x65\x6e\164\x22\x3e\x3c\57\160\76\15\12\x20\40\x20\40";
goto ca7XD;
rvz_F:
$number1 = rand(99, 999);
goto bRKNJ;
Ia4_t:
_e("\120\x6c\145\x61\163\145\x20\x65\156\164\145\162\40\x74\x68\145\40\x72\145\163\x75\x6c\x74\40\x6f\146\x20\x74\x68\145\40\143\x61\154\143\165\154\x61\164\151\x6f\x6e\40\x61\x62\x6f\x76\x65\56", "\167\x70\x69\156\146\x65\x63\163\143\141\156");
goto vyPSn;
C0HJJ:
imagejpeg($my_img, NULL, 100);
goto CeDoO;
THh20:
WTUuD:
goto u0IO6;
CtL29:
$_SESSION["\x77\160\151\156\146\145\143\x74\x73\143\x61\x6e\156\x65\162\137\x63\x6f\x6d\x6d\145\x6e\164\141\165\x74\150\137\150\x61\x73\150"] = md5((string) ($number1 + $number2));
goto B1ion;
bDZ_s:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto grH6g;
qFeJ6:
echo "\11\11\74\x70\76\74\154\141\x62\145\x6c\x3e";
goto Be5wh;
sDKOq:
$my_img = imagecreate(200, 25);
goto VTXDQ;
ca7XD:
$captcha = ob_get_contents();
goto u6Hbx;
Be5wh:
echo $output;
goto mTkon;
mTkon:
echo "\x3c\x2f\154\141\142\x65\154\76\x3c\x62\162\76\x3c\163\x6d\141\154\x6c\76";
goto Ia4_t;
CeDoO:
$rawImageBytes = ob_get_clean();
goto Ghkf8;
yNEkj:
goto WTUuD;
goto ApjvA;
q7TOt:
}
goto nY53n;
ULwkh:
function wpinfecscanner_security_noedit()
{
goto sfF89;
sfF89:
global $mysecurytysetting;
goto buPSO;
S0Tp0:
KuJhI:
goto UhHZg;
JH1dd:
$security_noedit = $mysecurytysetting->security_noedit;
goto AT5M7;
buPSO:
if (!$mysecurytysetting) {
goto KuJhI;
}
goto JH1dd;
c6882:
define("\104\x49\123\x41\x4c\x4c\x4f\x57\137\106\x49\114\105\x5f\105\104\111\124", TRUE);
goto o5d7q;
AT5M7:
if (!($security_noedit == 1)) {
goto SwMyT;
}
goto c6882;
o5d7q:
SwMyT:
goto S0Tp0;
UhHZg:
}
goto fyzVR;
UjMYF:
$dangeraccess = true;
goto xlXAZ;
BJHYi:
add_filter("\162\145\163\x74\x5f\x70\162\x65\x5f\x64\151\x73\160\x61\164\143\150", "\x77\160\x69\x6e\146\145\x63\x73\x63\141\x6e\x6e\x65\x72\x5f\x73\145\x63\165\x72\x69\x74\x79\x5f\156\157\x72\145\x73\164\141\160\x69", 10, 3);
goto ULwkh;
nY53n:
function WPinfecscanner_Captcha_Comment_Auth($comment)
{
goto yKcch;
cJZSa:
unset($_SESSION["\167\x70\151\x6e\x66\145\143\x74\x73\143\x61\156\x6e\145\x72\x5f\143\x6f\x6d\155\145\x6e\x74\141\165\164\x68\x5f\150\x61\x73\150"]);
goto t0TtA;
R_AA5:
b1X0x:
goto D8Pvz;
hdDX0:
wp_die($empty);
goto R_AA5;
asu4w:
k3cDg:
goto Q54if;
t0TtA:
tn9Ey:
goto CZ7OD;
XgAcT:
$error_message = __("\x49\x6e\x63\x6f\162\x72\145\x63\164\x20\x76\141\x6c\x75\x65\40\157\x66\40\x74\x6f\x74\x61\x6c\x20\x63\x61\x70\164\143\x68\141", "\x77\x70\x69\156\146\x65\x63\163\x63\141\x6e");
goto JJGkd;
uySrM:
return $comment;
goto cJZSa;
Yd1mS:
$total = $_SESSION["\167\x70\x69\156\146\145\143\x74\x73\x63\x61\x6e\x6e\x65\162\137\x63\157\155\155\x65\156\164\141\165\x74\x68\x5f\150\141\x73\150"];
goto jok9a;
yKcch:
if (empty($_POST["\x77\x70\x69\x6e\146\145\x63\164\163\143\x61\156\137\143\141\x70\x74\x63\x68\141\x5f\143\157\x6d\155\145\156\164"])) {
goto k3cDg;
}
goto Yd1mS;
JMxQ6:
goto tn9Ey;
goto YlCVU;
CZ7OD:
goto b1X0x;
goto asu4w;
jok9a:
if (md5(trim((string) $_POST["\167\x70\x69\x6e\x66\145\143\x74\x73\143\x61\156\137\143\141\x70\x74\143\150\141\x5f\143\x6f\155\x6d\x65\x6e\x74"])) == $total) {
goto j2e0C;
}
goto XgAcT;
Q54if:
$empty = __("\120\x6c\145\141\163\145\x20\145\156\164\145\x72\40\x74\x68\145\40\143\x61\160\x74\143\150\x61\56", "\x77\x70\x69\156\146\x65\x63\x73\143\141\156");
goto hdDX0;
JJGkd:
wp_die($error_message);
goto JMxQ6;
YlCVU:
j2e0C:
goto uySrM;
D8Pvz:
}
goto pK1eY;
uIP1S:
if (defined("\101\102\123\120\101\124\x48")) {
goto CQS3p;
}
goto opR3H;
LnrFK:
function WPinfecscanner_Captcha_Login_Auth($user)
{
goto fR_os;
yBvmg:
$empty = __("\x50\154\145\x61\163\145\x20\145\156\164\x65\x72\x20\164\x68\x65\40\143\x61\x70\164\x63\x68\141\56", "\x77\160\151\156\x66\x65\143\x73\x63\x61\156");
goto m2IfX;
CNp25:
t5Rki:
goto T9FhZ;
uyhim:
OS3pb:
goto U7vT2;
m2IfX:
wp_die($empty);
goto qE3hi;
T9FhZ:
goto XFIj0;
goto ZoDs2;
fR_os:
if (empty($_POST["\167\x70\151\163\x5f\143\141\160\164\143\150\x61\137\154\x6f\x67\151\x6e"])) {
goto YOrnx;
}
goto ukB5c;
w5M81:
return $user;
goto CNp25;
qYyYg:
if (md5(trim((string) $_POST["\x77\x70\151\x73\137\x63\141\x70\x74\x63\x68\x61\137\154\157\147\151\156"])) == $total) {
goto OS3pb;
}
goto b9Q9z;
JkpFJ:
wp_die($error_message);
goto m7IOG;
ZoDs2:
YOrnx:
goto yBvmg;
b9Q9z:
$error_message = __("\111\156\x63\x6f\x72\162\x65\x63\164\40\166\141\154\165\145\x20\x6f\x66\40\x74\x6f\164\x61\154\40\143\141\160\x74\x63\150\141", "\167\x70\x69\156\146\x65\143\x73\x63\141\x6e");
goto JkpFJ;
m7IOG:
goto t5Rki;
goto uyhim;
ukB5c:
$total = $_SESSION["\167\160\x69\x6e\146\x65\143\164\x73\143\141\156\x6e\145\162\137\x61\x75\x74\150\137\150\x61\163\x68"];
goto qYyYg;
U7vT2:
unset($_SESSION["\x77\x70\x69\156\146\x65\x63\164\163\x63\x61\x6e\156\x65\x72\137\x61\x75\x74\x68\x5f\150\x61\x73\x68"]);
goto w5M81;
qE3hi:
XFIj0:
goto TnMSn;
TnMSn:
}
goto jq86h;
JgpvF:
if (!(strpos($r, "\167\160\x2d\154\x6f\147\151\156\x2e\160\x68\160") !== false)) {
goto ij3dz;
}
goto FuW2j;
pmbdO:
function wpinfec_security_clear_lockdown($ip)
{
delete_transient(wpinfec_security_get_lockdown_key($ip));
}
goto JNUZi;
TlJnq:
K0zev:
goto Qj6hN;
xlXAZ:
Jx1wo:
goto AZypI;
A5Ygq:
if (!(strpos($r, "\x77\160\55\x6c\157\x67\151\x6e") !== false)) {
goto JzEq4;
}
goto zwgI6;
tFF0y:
add_action("\151\156\x69\164", "\167\160\151\156\146\x65\x63\x73\x63\x61\x6e\x6e\145\162\x5f\163\145\143\165\162\x69\164\x79\x5f\x69\160\x62\x6c\x6f\143\153");
goto G81bU;
C448F:
function wpinfecscanner_custom_site_url($url)
{
goto Wr_l7;
GyCK0:
goto Sdnz6;
goto RYjXt;
TNijm:
Sdnz6:
goto ZRBRj;
egfuK:
$url = str_replace("\167\x70\x2d\154\157\147\151\156\56\160\x68\160", "\x3f" . $loginurl, $url);
goto GyCK0;
P7oJG:
$url = str_replace("\77", "\x26", $url);
goto u27D4;
u27D4:
$url = str_replace(site_url("\57"), home_url("\57"), $url);
goto egfuK;
JMdXa:
if (get_option("\x70\x65\x72\155\x61\154\151\156\x6b\137\163\164\x72\x75\x63\x74\165\x72\x65")) {
goto Pnh7G;
}
goto P7oJG;
ZRBRj:
MArY9:
goto qXcMs;
RYjXt:
Pnh7G:
goto RyrqR;
qXcMs:
return $url;
goto zvL10;
RyrqR:
$url = str_replace("\167\160\55\154\x6f\147\x69\156\56\160\150\160", $loginurl, $url);
goto TNijm;
PJwhr:
$loginurl = get_option("\x77\160\x69\156\x66\x65\143\164\x73\x63\x61\x6e\x6e\145\x72\x5f\x6c\x6f\147\151\x6e\x75\162\x6c");
goto JMdXa;
Wr_l7:
if (!(strpos($url, "\167\x70\x2d\154\x6f\x67\x69\156\56\160\150\x70") !== false)) {
goto MArY9;
}
goto PJwhr;
zvL10:
}
goto OSwK8;
MjglP:
function wpinfecscanner_security_kill_login()
{
goto I6lCD;
gtMzf:
if (($count = wpinfec_security_get_count($ip)) && $count > absint(2)) {
goto wvGpd;
}
goto Q0Gfg;
h3zk9:
return;
goto YFjKg;
v36wg:
$die = false;
goto gtMzf;
DqIBY:
$die = true;
goto U2AD3;
KhFJY:
pvCge:
goto DqIBY;
MX0KO:
wpinfec_security_delete_count($ip);
goto isOVa;
I8R9S:
goto h7zfA;
goto mbBnI;
WH1NW:
$die = true;
goto Iyzv_;
isOVa:
wpinfec_security_set_lockdown($ip);
goto WH1NW;
vhnd7:
if (!apply_filters("\x77\160\x69\156\146\x65\x63\x73\x63\141\x6e\156\x65\x72\x5f\x6c\x6f\147\x69\156\x5f\154\157\143\x6b\144\157\x77\156\137\x73\150\157\165\154\x64\x5f\x64\151\145", $die, $ip)) {
goto S6UQv;
}
goto E5QnV;
U2AD3:
h7zfA:
goto vhnd7;
mbBnI:
wvGpd:
goto MX0KO;
Iyzv_:
goto h7zfA;
goto KhFJY;
Lno5C:
S6UQv:
goto ivh7a;
Q0Gfg:
if (wpinfec_security_is_locked_down($ip)) {
goto pvCge;
}
goto I8R9S;
I6lCD:
if ($ip = wpinfec_security_get_ip()) {
goto UE2_x;
}
goto h3zk9;
YFjKg:
UE2_x:
goto v36wg;
E5QnV:
wp_die(__("\x50\x6c\x65\x61\x73\x65\40\167\141\x69\x74\40\x31\60\40\x6d\x69\x6e\x75\164\145\x73\x20\165\x6e\x74\151\154\40\154\x6f\x67\x69\156\40\160\x61\x67\x65\x20\151\x73\40\x75\163\x61\142\x6c\145\56", "\167\x70\x69\x6e\146\x65\x63\x73\x63\x61\x6e"), __("\124\157\157\40\x6d\141\156\171\40\154\x6f\x67\151\x6e\40\141\x74\x74\x65\x6d\160\x74\x73", "\x77\160\x69\156\x66\x65\143\x73\x63\141\156"), array("\x72\x65\163\160\x6f\x6e\x73\x65" => 403));
goto Lno5C;
ivh7a:
}
goto zbwDh;
kERje:
function shapeSpace_remove_version_scripts_styles($src)
{
goto N8zE4;
N8zE4:
if (!strpos($src, "\166\145\x72\75")) {
goto HSBkb;
}
goto lDTaX;
GzxGG:
return $src;
goto ZUQ2m;
Grkvk:
HSBkb:
goto GzxGG;
lDTaX:
$src = remove_query_arg("\x76\x65\162", $src);
goto Grkvk;
ZUQ2m:
}
goto VPiQd;
BlJd3:
function wpinfec_security_inc_count($ip)
{
goto YsZAF;
CFAua:
return $c;
goto Rf0Ac;
kOEaO:
set_transient(wpinfec_security_get_key($ip), $c, 60 * 60);
goto CFAua;
YsZAF:
$c = wpinfec_security_get_count($ip) + 1;
goto kOEaO;
Rf0Ac:
}
goto sV2db;
CzQ79:
if (!(strlen($securytysettingTXT) > 3)) {
goto m12rW;
}
goto Sbbj9;
qQ6ps:
function wpinfecscanner_security_nowpscan()
{
goto GR6dC;
uhKfw:
$transient_name = "\167\143\x65\x5f\142\x6c\x6f\143\153\137" . $_SERVER["\x52\x45\115\x4f\124\x45\x5f\x41\104\104\x52"];
goto PPbpr;
JNSUf:
ZtSQD:
goto zA22Y;
PPbpr:
$transient_value = get_transient($transient_name);
goto vaAbX;
TiSe3:
if (!isset($_GET["\x77\160\x5f\143\157\156\146\x69\x67\x5f\x65\156\x75\x6d\145\162\x61\x74\151\157\156"])) {
goto TKWKp;
}
goto vXXqk;
xcbox:
$security_nowpscan = $mysecurytysetting->security_nowpscan;
goto QUTcA;
nMB2U:
die;
goto e8tpa;
vBZgA:
set_transient("\x61\162\x63\x68\151\x76\145\137\x77\x63\x65\x6c\157\x63\153\144\x6f\x77\156" . $_SERVER["\x52\105\x4d\x4f\x54\105\137\101\104\x44\x52"], true, 60 * 60 * 24 * 30 * 6);
goto nMB2U;
X4jbu:
die;
goto vTQDW;
IvdSG:
$scanner->sendblockipdata($_SERVER["\x52\105\x4d\x4f\x54\105\137\101\x44\x44\x52"], 2);
goto vBZgA;
RmyXb:
if (!$mysecurytysetting) {
goto ZtSQD;
}
goto xcbox;
UNw8J:
$scanner = new MalwareScanner();
goto IvdSG;
iG5fO:
die;
goto uu0Q9;
vaAbX:
if (!($transient_value !== false)) {
goto leika;
}
goto X4jbu;
vXXqk:
set_transient($transient_name, 1, DAY_IN_SECONDS);
goto thQpj;
thQpj:
require_once plugin_dir_path(__FILE__) . "\167\x70\151\156\x66\145\143\164\163\143\141\x6e\156\145\x72\56\x70\150\x70";
goto UNw8J;
GR6dC:
global $mysecurytysetting;
goto RmyXb;
vTQDW:
leika:
goto TiSe3;
e8tpa:
TKWKp:
goto BjrMv;
QUTcA:
if (!($security_nowpscan == 1)) {
goto s2OUy;
}
goto Q1IWM;
uu0Q9:
Cybu1:
goto uhKfw;
BjrMv:
s2OUy:
goto JNSUf;
Q1IWM:
if (!(!empty($_SERVER["\110\x54\x54\120\x5f\x55\123\105\x52\137\x41\x47\105\x4e\124"]) && preg_match("\57\x57\x50\123\143\x61\156\x2f\151", $_SERVER["\x48\124\x54\x50\137\x55\123\105\x52\x5f\101\107\x45\x4e\x54"]))) {
goto Cybu1;
}
goto iG5fO;
zA22Y:
}
goto rxx68;
i9u97:
add_action("\x69\x6e\151\164", "\x77\160\x69\x6e\146\x65\x63\163\143\x61\156\x6e\145\x72\137\x73\145\x63\x75\162\151\x74\x79\x5f\143\x6f\155\155\x65\156\164\x63\x61\x70\x74\x75\x72\x65");
goto bZNtI;
ouhlY:
JzEq4:
goto LMUEM;
C_3z1:
function wpinfecscanner_security_ipblock()
{
goto VtbuU;
VtbuU:
$blocklist = trim(get_option("\167\160\151\156\146\x65\x63\164\163\143\141\x6e\x6e\x65\x72\137\x62\x6c\157\x63\x6b\151\160"));
goto j8kc9;
avDNX:
$i = 0;
goto w7BVu;
w7BVu:
EuZlx:
goto DNcIU;
k0GC0:
XQAsl:
goto TRixk;
orqmQ:
ixgKG:
goto lwrOo;
NXMSW:
yIaIY:
goto k0GC0;
AG_Kp:
goto yIaIY;
goto Tno8i;
UJ5Uv:
$ipblocklist = explode("\12", $blocklist);
goto avDNX;
lwrOo:
$i++;
goto SEbZy;
Tno8i:
JAdKz:
goto orqmQ;
xXjve:
die;
goto AG_Kp;
DNcIU:
if (!($i < count($ipblocklist))) {
goto yIaIY;
}
goto vbWvM;
vbWvM:
$oneip = trim($ipblocklist[$i]);
goto oGEC9;
j8kc9:
if (empty($blocklist)) {
goto XQAsl;
}
goto pEVOv;
pEVOv:
$ip = wpinfec_security_get_ip();
goto UJ5Uv;
SEbZy:
goto EuZlx;
goto NXMSW;
oGEC9:
if (!($ip == $oneip)) {
goto JAdKz;
}
goto xXjve;
TRixk:
}
goto tFF0y;
B0Ei8:
@ini_set("\145\162\x72\x6f\x72\x5f\x72\x65\160\157\162\x74\151\156\147", 0);
goto uIP1S;
jq86h:
function wpinfecscanner_security_logincapture()
{
goto aR6Gb;
XFPpz:
if (!$mysecurytysetting) {
goto HsQCw;
}
goto YkV3g;
RBSss:
session_start();
goto pOoGN;
TwCcO:
HsQCw:
goto fnlfx;
YkV3g:
$security_logincaptcha = $mysecurytysetting->security_logincaptcha;
goto v0Fj8;
aR6Gb:
global $mysecurytysetting;
goto XFPpz;
bIvk5:
add_filter("\167\160\x5f\x61\x75\164\x68\145\156\x74\151\x63\x61\164\145\x5f\x75\x73\145\162", "\x57\120\x69\x6e\146\145\143\163\x63\141\156\x6e\x65\162\137\103\x61\x70\x74\x63\150\x61\137\x4c\157\x67\151\x6e\137\101\165\x74\150", 10, 2);
goto OUzLv;
pOoGN:
add_action("\154\x6f\147\x69\x6e\137\146\157\162\x6d", "\x57\120\x69\156\146\x65\x63\x73\143\141\x6e\156\x65\162\137\103\141\x70\x74\x63\x68\141\137\x4c\x6f\x67\151\x6e\137\106\x69\x65\154\144");
goto bIvk5;
OUzLv:
dV4ZH:
goto TwCcO;
v0Fj8:
if (!($security_logincaptcha == 1)) {
goto dV4ZH;
}
goto RBSss;
fnlfx:
}
goto B1BER;
LMUEM:
if (!(preg_match("\57\x6c\157\147\x69\x6e\x24\57", $r) || preg_match("\x2f\x6c\x6f\147\x69\x6e\134\57\44\57", $r))) {
goto K0zev;
}
goto i5Uz_;
GnyTB:
add_action("\x69\156\151\164", "\167\x70\x69\x6e\x66\x65\143\x73\143\x61\156\x6e\x65\162\137\x73\x65\143\165\162\x69\x74\x79\x5f\x6c\157\147\x69\x6e\154\x6f\143\x6b\144\x6f\x77\x6e");
goto QZ8r9;
X7g1a:
m12rW:
goto kERje;
VPiQd:
function wpinfecscanner_security_wphideversion()
{
goto rzqlK;
AChBX:
JIjPS:
goto FLgkw;
O1p2y:
add_filter("\163\164\171\x6c\x65\x5f\154\157\141\x64\x65\162\x5f\163\162\x63", "\163\x68\141\160\145\x53\x70\141\143\x65\x5f\162\x65\155\157\166\x65\x5f\166\x65\162\x73\151\x6f\156\137\163\143\162\x69\x70\164\163\x5f\163\x74\x79\x6c\x65\x73", 9999);
goto fc8PI;
eCxXH:
remove_action("\167\160\x5f\150\145\x61\144", "\167\160\137\x67\x65\x6e\x65\x72\x61\164\x6f\x72");
goto AChBX;
fc8PI:
add_filter("\x73\143\x72\151\160\164\x5f\x6c\x6f\141\144\x65\x72\x5f\163\162\x63", "\163\x68\141\160\145\x53\x70\x61\x63\x65\137\162\145\155\x6f\166\145\x5f\166\145\x72\x73\151\157\156\x5f\x73\143\162\x69\x70\164\x73\x5f\x73\164\x79\154\x65\163", 9999);
goto mL1uc;
FLgkw:
rcs1x:
goto ZDl7B;
rzqlK:
global $mysecurytysetting;
goto dFiJH;
mL1uc:
add_filter("\x74\150\x65\x5f\147\x65\x6e\x65\x72\x61\x74\157\x72", "\137\137\162\145\164\165\162\x6e\137\145\x6d\x70\x74\171\x5f\163\x74\162\151\x6e\147");
goto eCxXH;
dFiJH:
if (!$mysecurytysetting) {
goto rcs1x;
}
goto GzSwi;
Tuifc:
if (!($security_wphideversion == 1 || $security_nowpscan == 1)) {
goto JIjPS;
}
goto O1p2y;
GzSwi:
$security_wphideversion = $mysecurytysetting->security_wphideversion;
goto up_Td;
up_Td:
$security_nowpscan = $mysecurytysetting->security_nowpscan;
goto Tuifc;
ZDl7B:
}
goto NgOOe;
BEnXE:
function WPinfecscanner_Captcha_PWReset_Field()
{
goto DQtwQ;
iE0GM:
echo ob_get_clean();
goto vQl_4;
WbnK2:
echo "\x3c\x2f\163\155\141\154\154\76\x3c\x62\162\x3e\74\151\156\160\x75\x74\40\x69\x64\75\42\167\160\151\163\x5f\143\x61\160\x74\143\x68\x61\x5f\x70\x77\x72\x65\163\145\164\42\40\164\171\x70\145\x3d\x22\164\145\170\x74\42\x20\x76\x61\154\x75\145\x3d\x22\x22\x20\156\141\155\145\x3d\x22\167\160\151\x73\137\x63\x61\160\x74\143\150\141\x5f\160\x77\x72\x65\163\145\x74\42\x3e\74\x2f\x6c\141\x62\145\154\76\74\x2f\x70\x3e\15\12\40\x20\40\40";
goto iE0GM;
j3xKy:
$background = imagecolorallocate($my_img, 255, 255, 255);
goto awve3;
R9Htu:
$text = $question;
goto emRUF;
A0lDd:
$_SESSION["\x77\x70\x69\x6e\146\x65\x63\x74\163\x63\x61\156\x6e\145\x72\137\x61\x75\164\150\137\150\141\163\150\160\167"] = md5((string) ($number1 + $number2));
goto Ry4IY;
awve3:
$text_colour = imagecolorallocate($my_img, 0, 0, 0);
goto zWbar;
PYP85:
uCwwC:
goto rN4rz;
zWbar:
imagestring($my_img, 4, 2, 4, $text, $text_colour);
goto tO3Nm;
MzTY7:
goto uCwwC;
goto eVDQb;
SyuMf:
$output = $question;
goto MzTY7;
NXEdH:
echo $output;
goto sKbR1;
oCNHm:
$rawImageBytes = ob_get_clean();
goto xnQhB;
xnQhB:
$output = "\74\151\155\x67\40\x73\x72\143\75\47\x64\141\164\x61\x3a\x69\155\x61\x67\x65\x2f\x6a\x70\x65\147\73\x62\141\x73\145\x36\64\54" . base64_encode($rawImageBytes) . "\x27\40\x2f\x3e";
goto PYP85;
TRlq9:
imagejpeg($my_img, NULL, 100);
goto oCNHm;
tO3Nm:
ob_start();
goto TRlq9;
nbo6f:
$number1 = rand(99, 999);
goto JWRez;
eVDQb:
v1gPu:
goto zgtyI;
JWRez:
$number2 = rand(1, 4);
goto A0lDd;
DQtwQ:
ob_start();
goto nbo6f;
emRUF:
if (extension_loaded("\147\x64")) {
goto v1gPu;
}
goto SyuMf;
viP4s:
_e("\x50\154\x65\141\x73\x65\40\145\x6e\164\x65\x72\x20\x74\150\145\x20\162\145\163\x75\x6c\x74\x20\157\146\40\164\x68\145\40\x63\141\x6c\143\x75\154\x61\x74\151\157\x6e\40\x61\142\157\166\x65\56", "\167\160\x69\x6e\x66\x65\143\163\143\x61\156");
goto WbnK2;
zgtyI:
$my_img = imagecreate(200, 25);
goto j3xKy;
sKbR1:
echo "\x20\x3c\x62\162\76\x3c\x73\x6d\x61\x6c\154\x3e";
goto viP4s;
Ry4IY:
$question = $number1 . "\x20\53\40" . $number2 . "\x20\x3d\40";
goto R9Htu;
rN4rz:
echo "\x20\x20\x20\x20\x9\x3c\160\76\x3c\x6c\x61\142\x65\154\76";
goto NXEdH;
vQl_4:
}
goto dzkc5;
uutPu:
ij3dz:
goto A5Ygq;
rxx68:
add_action("\x69\156\151\x74", "\x77\x70\151\x6e\146\145\x63\x73\x63\141\x6e\156\x65\x72\137\x73\x65\x63\x75\x72\x69\164\x79\137\156\157\x77\160\x73\x63\141\x6e");
goto Z4fOu;
B1BER:
add_action("\151\156\x69\164", "\x77\x70\x69\156\146\x65\x63\163\x63\x61\156\x6e\x65\x72\x5f\163\145\x63\165\162\151\x74\x79\x5f\154\x6f\x67\x69\x6e\143\141\160\x74\165\162\145");
goto BEnXE;
zwgI6:
$dangeraccess = true;
goto ouhlY;
Y0I4M:
add_action("\151\156\x69\x74", "\167\160\x69\x6e\146\x65\143\x73\x63\x61\156\x6e\x65\162\137\x73\145\x63\x75\162\151\164\171\137\160\x77\x72\145\163\x65\164\x63\x61\x70\164\x75\x72\x65");
goto N4kbS;
BVZ5O:
function get_transient_timeout($transient)
{
goto IbDc2;
pt388:
return $transient_timeout[0];
goto ortwh;
IbDc2:
global $wpdb;
goto MbU_k;
MbU_k:
$transient_timeout = $wpdb->get_col("\xd\xa\x20\x20\x20\x20\40\40\x53\105\x4c\x45\103\124\x20\x6f\160\x74\151\x6f\156\137\166\x61\154\x75\x65\15\12\x20\40\x20\x20\40\40\x46\x52\x4f\115\40" . $wpdb->options . "\15\12\x20\x20\x20\40\40\x20\127\110\105\x52\105\x20\x6f\x70\x74\151\x6f\156\137\x6e\x61\155\145\15\xa\x20\x20\x20\40\40\40\x4c\111\x4b\x45\x20\47\x25\137\164\x72\141\156\163\151\x65\x6e\164\137\x74\151\155\145\157\x75\x74\x5f" . $transient . "\x25\x27\xd\xa\x20\40\40\x20");
goto pt388;
ortwh:
}
goto xFF1z;
TxEOe:
add_action("\x69\x6e\x69\164", "\167\160\x69\x6e\x66\145\143\163\143\x61\x6e\x6e\x65\162\137\x73\145\x63\165\x72\151\164\171\x5f\151\160\x61\165\x74\x6f\x62\154\157\143\x6b");
?>