// JavaScript Document

function isIE6browser() {
	var IE6 = false 

	var strChUserAgent = navigator.userAgent; 
	var intSplitStart = strChUserAgent.indexOf("(",0); 
	var intSplitEnd = strChUserAgent.indexOf(")",0); 
	var strChMid = strChUserAgent.substring(intSplitStart, intSplitEnd); 

	if(strChMid.indexOf("MSIE 6") != -1) IE6 = true;

	return IE6;
}

function openReclam(context,param) {
		var varNom = "mailcdn";
		//var varUrl = "https://secure.livre-bleu.com/acs/acscdn/mailcdn.asp"
		var l=480;
		var h=700;	
		//f=window.open (varUrl,varNom,"target=_blank;scrollbars=no,menubar=no,toolbar=no,resizable=yes,status=no,directories=no,location=no,width="+l+",height="+h);
        f=window.open("refusalTemplateClaim.jsp;jsessionid="+param,varNom,"target=_blank;scrollbars=no,menubar=no,toolbar=no,resizable=yes,status=no,directories=no,location=no,width="+l+",height="+h);
		f.focus();
	}

//function showHelp(authType) {
//		var width=390;
//		var height=400;
//		var top=(screen.height-height)/2;
//		var left=(screen.width-width)/2;
		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;
//		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;
//		if (authType=='BIRTHDAY')
//   		 window.open("./help.jsp"+"?authType="+authType, "", chaine);
//		if (authType=='ZIPCODE')
//    		  window.open("./help.jsp"+"?authType="+authType, "", chaine);
//		if (authType=='SMS')
//    		  window.open("./help.jsp"+"?authType="+authType, "", chaine);
//	}
	
//function showHelp(authType,banque) {
//		var width=390;
//		var height=400;
//		var top=(screen.height-height)/2;
//		var left=(screen.width-width)/2;
//		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;
//		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;
//		if (authType=='BIRTHDAY')
 //    		 window.open("./help.jsp?authType="+authType+"&banque="+banque, "", chaine);
//		if (authType=='ZIPCODE')
//    		  window.open("./help.jsp?authType="+authType+"&banque="+banque, "", chaine);
//		if (authType=='SMS')
//    		  window.open("./help.jsp?authType="+authType+"&banque="+banque, "", chaine);
//	}

	function showHelp(tag, param) {
		var width=390;
		var height=400;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;		
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;
		
		//var uiProfile = document.getElementById("labelACSUIProfile").value;
		//var tag= document.getElementById("idTemplateSet").value;		
		
		var x="./help.jsp;jsessionid="+param+"?tag="+tag;
		window.open(x, "", chaine);
		 
		//if (authType=='BIRTHDAY')
     	//	  window.open(x, "", chaine);
		//if (authType=='ZIPCODE')
    	//	  window.open(x, "", chaine);
		//if (authType=='SMS')
    	//	  window.open(x, "", chaine);
	}
	
	function openClaimWflow(context,param) {
		var varNom = "mailcdn";
		var l=480;
		var h=700;	
		var x= context + "/claim.wflow;jsessionid="+param;
        f=window.open(x,varNom,"target=_blank;scrollbars=no,menubar=no,toolbar=no,resizable=yes,status=no,directories=no,location=no,width="+l+",height="+h);
		f.focus();
	}
	
	function showHelpWflow(tag, param, context) {
		var width=410;
		var height=420;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;		
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height+",scrollbars=1";
		
		//var uiProfile = document.getElementById("labelACSUIProfile").value;
		//var tag= document.getElementById("idTemplateSet").value;		
		
//		var x="./help.jsp;jsessionid="+param+"?tag="+tag;
		var x= context + "/help.wflow;jsessionid="+param+"?tag="+tag
		//alert(x);
		window.open(x, "", chaine);
		 
		//if (authType=='BIRTHDAY')
     	//	  window.open(x, "", chaine);
		//if (authType=='ZIPCODE')
    	//	  window.open(x, "", chaine);
		//if (authType=='SMS')
    	//	  window.open(x, "", chaine);
	}
	
	function showHelpSpecWflow(tag, param, context) {
		var width=410;
		var height=420;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;		
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height+",scrollbars=1";
		
		//var uiProfile = document.getElementById("labelACSUIProfile").value;
		//var tag= document.getElementById("idTemplateSet").value;		
		
//		var x="./help.jsp;jsessionid="+param+"?tag="+tag;
		var x= context + "/helpSmsSpe.wflow;jsessionid="+param+"?tag="+tag
		//alert(x);
		window.open(x, "", chaine);
		 
		//if (authType=='BIRTHDAY')
     	//	  window.open(x, "", chaine);
		//if (authType=='ZIPCODE')
    	//	  window.open(x, "", chaine);
		//if (authType=='SMS')
    	//	  window.open(x, "", chaine);
	}
	
	function showHelpRecord(tag, param, url) {
		var width=410;
		var height=420;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height+",scrollbars=1";
		window.open(url, "", chaine);

	}
	
	function showHelpSmsPlusWflow(param, context) {
		var width=390;
		var height=400;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;	
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;
		var x= context + "/helpSmsPlus.wflow;jsessionid="+param;
		window.open(x, "", chaine);
	}
	
	function showHelp(tag) {
		var width=390;
		var height=400;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;	
		
		var x="./help.jsp?tag="+tag;
		window.open(x, "", chaine);
	}	
	
	function showHelpWithUrl(url,tag) {
		var width=390;
		var height=400;
		var top=(screen.height-height)/2;
		var left=(screen.width-width)/2;
		//var chaine = "top="+top+",left="+left+",width="+width+",height="+height;		
		var chaine = "top="+0+",left="+0+",width="+width+",height="+height;	
		
		var x="./" + url + "?tag="+tag;
		window.open(x, "", chaine);
	}	
	
function init(){
	document.getElementById('btn_ok2').disabled = true;
}

function init_foc(champ){
	var Obj = document.getElementById(champ);
	var isIE6 = isIE6browser();
	
	Obj.value = "";
	var btn_ok2 = document.getElementById('btn_ok2');
	var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
	var newSrc = oldSrc.concat('off.png');
	if (isIE6 == false) btn_ok2.src = newSrc;
	btn_ok2.disabled = true;
}

function center()
 {
	var width=390;
	var height=400;
  	var object=document.getElementById("allcenter");
	object.style.marginLeft = "-" + parseInt(object.offsetWidth / 2) + "px";
  	object.style.marginTop = "-" +parseInt(object.offsetHeight / 2) + "px";
 }

function init_certificate(){
    document.getElementById('Submitbt').disabled = true;

}

function controle_certificate(){
	var Obj = document.getElementById("checkbox");
	var Submitbt = document.getElementById('Submitbt');
	if(Obj.checked){		
		Submitbt.className='txtsousBleuGras';
		Submitbt.disabled = false;		
	} else {
		Submitbt.className='txtsousBleuCertif';
		Submitbt.disabled = true;		
	}
}

function controle_cvx2_date(champ){

	var Obj = document.getElementById(champ);
	var ObjCrypto = document.getElementById("chp_crypto");
	
	if(Obj.value.length == 2 && champ != "chp3"){
		var chp = champ.substring(3,4);
		chp++;
		var newId = "chp"+chp;
		var newObj = document.getElementById(newId);
		newObj.focus();
	}else if(ObjCrypto.value.length == 3 && Obj.value.length == 4 && document.getElementById('chp1').value.length == 2 && document.getElementById('chp2').value.length == 2){
		var chp3 = document.getElementById('chp3');
		chp3.blur();
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		//btn_ok2.src = newSrc;
	}
	else {	
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		//btn_ok2.src = newSrc;
	}
}

function controle_cvx2(){

	var ObjCrypto = document.getElementById("chp_crypto");
	
    if(ObjCrypto.value.length == 3 ){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		//btn_ok2.src = newSrc;
	}
	else {	
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		//btn_ok2.src = newSrc;
	}
}

function controle_date(champ){
	var Obj = document.getElementById(champ);
	if(Obj.value.length == 2 && champ != "chp3"){
		var chp = champ.substring(3,4);
		chp++;
		var newId = "chp"+chp;
		var newObj = document.getElementById(newId);
		newObj.focus();
	}else if(Obj.value.length == 4 && document.getElementById('chp1').value.length == 2 && document.getElementById('chp2').value.length == 2){
		var chp3 = document.getElementById('chp3');
		chp3.blur();
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		btn_ok2.src = newSrc;
	}
}

function controle_cvx2_ccp_date(champ){

	var Obj = document.getElementById(champ);
	var ObjCrypto = document.getElementById("chp_crypto");
	var ObjCcp = document.getElementById("chp_ccp");
	
	if(Obj.value.length == 2 && champ != "chp3"){
		var chp = champ.substring(3,4);
		chp++;
		var newId = "chp"+chp;
		var newObj = document.getElementById(newId);
		newObj.focus();
	}else if(
		ObjCrypto.value.length == 3 
		&& ObjCcp.value.length == 4
		
		&& Obj.value.length == 4 
		&& document.getElementById('chp1').value.length == 2 
		&& document.getElementById('chp2').value.length == 2){
			var chp3 = document.getElementById('chp3');
			chp3.blur();
			var btn_ok2 = document.getElementById('btn_ok2');
			var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
			var newSrc = oldSrc.concat('onn.png');
			btn_ok2.disabled = false;
			//btn_ok2.src = newSrc;
	}
	else {	
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		//btn_ok2.src = newSrc;
	}
}


function controle_zipcode(champ){
	var Obj = document.getElementById(champ);
	if(Obj.value.length == 5){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		//btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		//btn_ok2.src = newSrc;
		btn_ok2.disabled = true;
	}
}

function controle_sms(champ){
	var Obj = document.getElementById(champ);
	if(Obj.value.length == 8){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.src = newSrc;
		btn_ok2.disabled = true;
	}
}

function controle_cap(champ, capMode){
	var Obj = document.getElementById(champ);
	var regTest = capMode ? /^\d{4} ?\d{4}$/ : /^[a-zA-Z0-9]{4} ?[a-zA-Z0-9]{4}$/; 
	if(regTest.test(Obj.value)){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.src = newSrc;
		btn_ok2.disabled=false;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.src = newSrc;
		btn_ok2.disabled=true;
	}
}


function controle_sms_with_size(champ,size){
	var Obj = document.getElementById(champ);
	if(Obj.value.length >= size){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		btn_ok2.src = newSrc;
	}
}

function controle_otpcd_with_size(champ,size){
	var Obj = document.getElementById(champ);
	if(Obj.value.length >= size){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		btn_ok2.src = newSrc;
	}
}
function controle_token(champ){
	var isIE6 = isIE6browser();
	var Obj = document.getElementById(champ);
	
	if(Obj.value.length == 9){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		if (isIE6 == false) btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		if (isIE6 == false) btn_ok2.src = newSrc;
		btn_ok2.disabled = true;
	}
}

function controle_oath_with_size(champ,size) {
	var isIE6 = isIE6browser();
	var Obj = document.getElementById(champ);
	
	if(Obj.value.length == size){
		var reg = null;
		if (size == 8) {
			reg = new RegExp("^[0-9]{8}$","g");
		}
		else {
			reg = new RegExp("^[0-9]{6}$","g");
		}
		var result = reg.exec(Obj.value);
		if(result!=null) {
			var btn_ok2 = document.getElementById('btn_ok2');
			var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
			var newSrc = oldSrc.concat('onn.png');
			btn_ok2.disabled = false;
			if (isIE6 == false) btn_ok2.src = newSrc;
		}
		else {
			var btn_ok2 = document.getElementById('btn_ok2');
			var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
			var newSrc = oldSrc.concat('off.png');
			btn_ok2.disabled = true;
			if (isIE6 == false) btn_ok2.src = newSrc;
		}
		
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		if (isIE6 == false) btn_ok2.src = newSrc;
	}
}

function controle_qmyst_answer(champ){
	var length=champ.value.length;
	if(length>=1){
		 document.getElementById('btn_ok2').disabled=false;
		 //document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_on.png';
	}
	else{
		 document.getElementById('btn_ok2').disabled=true;
		 //document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_off.png';
	}
}

function controle_qmyst_answer(champ,size){
	var length=champ.value.length;
	if(length>size){
		 document.getElementById('btn_ok2').disabled=false;
		 //document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_on.png';
	}
	else{
		 document.getElementById('btn_ok2').disabled=true;
		 //document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_off.png';
	}
}

function controle_qmyst_answer_and_sms_with_size(qMystField , smsField){
	var lengthQMyst= document.getElementById(qMystField).value.length;
	var lengthSMS= document.getElementById(smsField).value.length;
	var minQMystSize = 1;
	var minOTPSize = 6;
	if(lengthSMS == minOTPSize && lengthQMyst >= minQMystSize){
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('onn.png');
		btn_ok2.disabled = false;
		//btn_ok2.src = newSrc;
	} else {
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		//btn_ok2.src = newSrc;
	}
}

function controle_reset(champ1,champ2,size){
	var length1=champ1.value.length;
	var length2=champ2.value.length;
	if((length1>=size)&&(length2>=size)&&(champ1.value==champ2.value)){
		 document.getElementById('btn_ok2').disabled=false;
		// document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_on.png';
	}
	else{
		 document.getElementById('btn_ok2').disabled=true;
		// document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_off.png';
	}
}

function controle_long(champ,size){
	var Obj = document.getElementById(champ);
	var length1=Obj.value.length;
	if(length1>=size){
		 document.getElementById('btn_ok2').disabled=false;
	//	 document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_on.png';
	}
	else{
		 document.getElementById('btn_ok2').disabled=true;
	//	 document.getElementById('btn_ok2').src='imgs/imagesTemplates/btn_ok2_off.png';
	}
}

function controle_qmyst_answer_and_phone(qMystField,phoneField){
	var lengthQMyst= document.getElementById(qMystField).value.length;
	var lengthPhone= document.getElementById(phoneField).value.length;
	var minlength = 1;
	if(lengthQMyst>= minlength && lengthPhone > 0){
			var btn_ok2 = document.getElementById('btn_ok2');
			var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
			var newSrc = oldSrc.concat('onn.png');
			btn_ok2.disabled = false;
			//btn_ok2.src = newSrc;
	}
	else{
		var btn_ok2 = document.getElementById('btn_ok2');
		var oldSrc = btn_ok2.src.substring(0, btn_ok2.src.length-7);
		var newSrc = oldSrc.concat('off.png');
		btn_ok2.disabled = true;
		//btn_ok2.src = newSrc;
	}
}

function controle_sea_word(champ){
	
}

function controle_sea_codeNum1(champ){}
function controle_sea_codeNum2(champ){}
function controle_sea_codeNum3(champ){}


function focus_champ(champ){
	if (champ != null)
	champ.focus();
}

function processStatus(response) {
  	if (response.search(new RegExp("\"CONNECTED\"", "gi")) != -1) {
  		return 1;
  	} else if (response.search(new RegExp("\"DISCONNECTED\"", "gi")) != -1) {
  		return 2;
  	} else if (response.search(new RegExp("\"ERROR\"", "gi")) != -1) {
  		return 3;
  	}
}

function erase(){
var text = ['problem', 'name', 'surname','last4numbers','phone','entreprise','mail','address','town']
for (var i=0;i<document.claimForm.length;i=i+1){
document.getElementById(text[i]).value='' 
}
}

function set_sea_codeNum(val){

	var ObjcodeNum1 = document.getElementById("codeNum1");
	var ObjcodeNum2 = document.getElementById("codeNum2");
	var ObjcodeNum3 = document.getElementById("codeNum3");

	if(ObjcodeNum1.value.length < 4){
		ObjcodeNum1.focus();
		if (val != null)
			ObjcodeNum1.value = ObjcodeNum1.value + val;
	}	
	else if(ObjcodeNum2.value.length < 4){
		ObjcodeNum2.focus();
		if (val != null)
			ObjcodeNum2.value = ObjcodeNum2.value + val;
	}else if(ObjcodeNum3.value.length < 4){
		ObjcodeNum3.focus();
		if (val != null)
			ObjcodeNum3.value = ObjcodeNum3.value + val;
	}
	
}

function checkSmsOrSvi(idRadio){
	if(idRadio=='radioSms'){
	document.getElementById("radioSms").checked=true;
	document.getElementById("radioSvi").checked=false;
	}else{
	document.getElementById("radioSvi").checked=true;
	document.getElementById("radioSms").checked=false;
	}
}

history.forward() //;empeche le retour


