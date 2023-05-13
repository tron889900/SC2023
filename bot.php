
error_reporting(0).
$Red2 ="\033[1;31m";    
$Blue2 ="\033[1;34m";   
$White ="\033[0;37m";
$Oren = "\033[01;38;5;208m";
$na =" \033[107m \033[1;90m1 \033[0m";
$na2 =" \033[107m \033[1;90m2 \033[0m";
$na3 =" \033[107m \033[1;90m3 \033[0m";
$na4 =" \033[107m \033[1;90m 4  \033[0m";
$na5 =" \033[107m \033[1;90m• \033[0m";
$nas =" \033[107m \033[1;90m✔️ \033[0m";
$green="\033[1;32m";
$n = "\n"; 
$yellow2="\033[1;33m";


function web($url){xip();$ch=curl_init();curl_setopt($ch,CURLOPT_URL,$url);curl_setopt($ch,CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch,CURLOPT_RETURNTRANSFER, 1);return curl_exec($ch);}


function slow($arr){
  $char = str_split($arr);
  foreach($char as $animated){
    echo $animated;
    usleep(3000);
  }
}


function sho($a,$b,$c){return  explode("<",explode($a,$c)[$b])[0];}



function hari(){date_default_timezone_set('Asia/Jakarta');}



function n(){echo"\n";}
function n2(){n().n();}
function r(){echo"\r                                      \r";}
function wr($A){echo col($A,5);}
function sr(){sleep(2);r();}
function c(){system('clear');}
function res($A,$B){echo an(col($A,$B));}
function an($input){$A=str_split($input); foreach ($A as $B){echo $B; usleep(3000);}}




function col($str,$color){if($color==5){$color=['rw','ry','rt','rg','rr','rp1','rp2'][array_rand(['h','k','b','u','m'])];}$war=array('rw'=>" \033[107m\033[1;31m",'rt'=>" \033[106m\033[1;31m",'ht'=>" \033[0;30m",'p3'=>"\033[1;37m",'p'=>" \033[1;37m",'a'=>" \033[1;30m",'m'=>" \033[1;31m",'h'=>" \033[1;32m",'k'=>" \033[1;33m",'b'=>" \033[1;34m",'u'=>" \033[1;35m",'c'=>" \033[1;36m",'rr'=>" \033[101m\033[1;37m",'rg'=>" \033[102m\033[1;34m",'ry'=>" \033[103m\033[1;30m",'rp1'=>" \033[104m\033[1;37m",'rp2'=>" \033[105m\033[1;37m");return $war[$color].$str."\033[0m";}



function xip(){  
    $ip='ifconfig 2>/dev/null';  
    $exz=shell_exec($ip); 
    if(preg_match('/tun0/i',$exz)){ 
        
		
		exit; 
    }  
}

$n = "\n";$n2 = "\n\n";$t = "\t";
$r= "\r                                                              \r";
/* START COLOR */

/*SYMBOL*/


$s1 = $Red2." ";$s2 = $Blue2." ";$s3 = $Red2." : ";$g = $Red2." | ";$sp = " ";$ab = $White."YOU BALANCE";$lr = $White."ʟɪɴᴋ ʀᴇꜰꜰ";
$wlc = $White." USERNAME   ";



isi:




function save($data,$data_post){if(!file_get_contents($data)){file_put_contents($data,"[]");}$json=json_decode(file_get_contents($data),1);$arr=array_merge($json,$data_post);file_put_contents($data,json_encode($arr,JSON_PRETTY_PRINT));}if(!file_exists("data.json")){system("clear");$user=readline($White." USER-AGENT ".$Red2." : ".$Blue2);print"\n";$cookie=readline($White." COOKIE ".$Red2."     : ".$Blue2);print"\n";$data=["User-Agent"=>$user,"cookie"=>$cookie,];save("data.json",$data);}
system("clear");


function head(){$user=json_decode(file_get_contents("data.json"),true)["User-Agent"];$cookie=json_decode(file_get_contents("data.json"),true)["cookie"];$ua = array("Host: claimlite.club","user-agent: ".$user,"cookie:".$cookie);return $ua;}






sleep(2);
function Curl($url, $header=0,$post=0,$cookie=0,$mode=0){$ch = curl_init();curl_setopt($ch, CURLOPT_URL, $url);curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);curl_setopt($ch, CURLOPT_COOKIE,TRUE);if($cookie){curl_setopt($ch, CURLOPT_COOKIEFILE,"cookie.txt");curl_setopt($ch, CURLOPT_COOKIEJAR,"cookie.txt");}curl_setopt($ch, CURLOPT_ENCODING,'gzip');if($post){curl_setopt($ch, CURLOPT_POST, true);curl_setopt($ch, CURLOPT_POSTFIELDS, $post);}if($header){curl_setopt($ch, CURLOPT_HTTPHEADER, $header);}if($mode){curl_setopt($ch, CURLOPT_CUSTOMREQUEST, $mode);}curl_setopt($ch, CURLOPT_HEADER, true);$res = curl_exec($ch);$c = curl_getinfo($ch);if(!$c) return "Curl Error : ".curl_error($ch); else {$head = substr($res, 0, curl_getinfo($ch, CURLINFO_HEADER_SIZE));$body = substr($res, curl_getinfo($ch, CURLINFO_HEADER_SIZE));curl_close($ch);return array($head,$body);}}
function timer($tmr){$timr=time()+$tmr; while(true): echo "\r                         \r"; $res=$timr-time(); if($res < 1){break;} 


echo "\033[0;37m PLEASE WAIT : \033[1;34m".date('i:s',$res)." ";sleep(1); endwhile;}
function solve(){
one:
$url = "http://api.multibot.in/in.php?key=LRPyjQn6lUO8bFwohENAHGT0K4fJ3p&method=userrecaptcha&googlekey=6Leen-YUAAAAAFsd9t6qwRGyF8fLf6kixqicahQj&pageurl=https://claimlite.club/";
        $host1 = array("Host:api.multibot.in","user-agent:api.multibot.in");
        $idres = Curl($url, $host1)[1];
        $id = explode('|', $idres)[1];
        if ($idres == "ERROR_ZERO_BALANCE") {
          goto one;
        }
        sleep(20);
        two:
$url = "http://api.multibot.in/res.php?key=LRPyjQn6lUO8bFwohENAHGT0K4fJ3p&action=get&id=$id";
        $gresponse = Curl($url, $host1)[1];
        $capRes = explode('|', $gresponse)[1];
        if ($gresponse == "CAPCHA_NOT_READY") {
          sleep(5);
          goto two;
        }
        return $capRes;
}
system("clear");








dash:
$dash = Curl('https://claimlite.club/',head())[1];
$name = explode('</font>',explode('<font class="text-success">',$dash)[1])[0];
$balance = explode('</b>',explode('<div class="text-primary"><b>',$dash)[1])[0];
$btc = explode('</b>',explode('<div class="text-warning"><b>',$dash)[1])[0];


echo $wlc.$s3.$Blue2.$name.$n.$s1.$ab.$s3.$Blue2.$balance.$n;

echo an($White . "──────────────────────────────────────────────────────────────────────\n");

goto faucet;
faucet:
$faucet = Curl('https://claimlite.club/',head())[1];
$token = explode("'",explode("var token = '",$faucet)[1])[0];
$cap = solve();
$claim = Curl('https://claimlite.club/system/ajax.php',head(),'a=getFaucet&token='.$token.'&captcha=1&challenge=false&response='.$cap)[1];
$succes = explode('!<\/div>',explode('Congratulations, your lucky ',$claim)[1])[0];
$invalid = explode('!<\/div>',explode('<div class=\"alert alert-success\" role=\"alert\">',$claim)[1])[0];
if($succes){
echo $nas." ".$yellow2.$succes.$n;
$upd = Curl('https://claimlite.club/',head())[1];
$balance = explode('</b>',explode('<div class="text-primary"><b>',$upd)[1])[0];
$btc = explode('</b>',explode('<div class="text-warning"><b>',$upd)[1])[0];


echo $na5." ".$White.$ab.$s3.$Blue2.$balance.$n;
echo an($White . "──────────────────────────────────────────────────────────────────────\n");


timer(300);goto faucet;
}else{
echo $red2.'Invalid Capcha';
sleep(3);
echo "\r                                               \r";goto faucet;}