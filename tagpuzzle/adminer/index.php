<?php
/** Adminer - Compact database management
* @link http://www.adminer.org/
* @author Jakub Vrana, http://www.vrana.cz/
* @copyright 2007 Jakub Vrana
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
* @license http://www.gnu.org/licenses/gpl-2.0.html GNU General Public License, version 2 (one or other)
* @version 3.3.1
*/error_reporting(6135);$Tc=(!ereg('^(unsafe_raw)?$',ini_get("filter.default")));if($Tc||ini_get("filter.default_flags")){foreach(array('_GET','_POST','_COOKIE','_SERVER')as$b){$ce=filter_input_array(constant("INPUT$b"),FILTER_UNSAFE_RAW);if($ce){$$b=$ce;}}}if(isset($_GET["file"])){header("Expires: ".gmdate("D, d M Y H:i:s",time()+365*24*60*60)." GMT");if($_GET["file"]=="favicon.ico"){header("Content-Type: image/x-icon");echo
base64_decode("AAABAAEAEBAQAAEABAAoAQAAFgAAACgAAAAQAAAAIAAAAAEABAAAAAAAwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA////AAAA/wBhTgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAERERAAAAAAETMzEQAAAAATERExAAAAABMRETEAAAAAExERMQAAAAATERExAAAAABMRETEAAAAAEzMzMREREQATERExEhEhABEzMxEhEREAAREREhERIRAAAAARIRESEAAAAAESEiEQAAAAABEREQAAAAAAAAAAD//9UAwP/VAIB/AACAf/AAgH+kAIB/gACAfwAAgH8AAIABAACAAf8AgAH/AMAA/wD+AP8A/wAIAf+B1QD//9UA");}elseif($_GET["file"]=="default.css"){header("Content-Type: text/css; charset=utf-8");echo'body{color:#000;background:#fff;font:90%/1.25 Verdana,Arial,Helvetica,sans-serif;margin:0;}a{color:blue;}a:visited{color:navy;}a:hover{color:red;}h1{font-size:150%;margin:0;padding:.8em 1em;border-bottom:1px solid #999;font-weight:normal;color:#777;background:#eee;}h2{font-size:150%;margin:0 0 20px -18px;padding:.8em 1em;border-bottom:1px solid #000;color:#000;font-weight:normal;background:#ddf;}h3{font-weight:normal;font-size:130%;margin:1em 0 0;}form{margin:0;}table{margin:1em 20px 0 0;border:0;border-top:1px solid #999;border-left:1px solid #999;font-size:90%;}td,th{border:0;border-right:1px solid #999;border-bottom:1px solid #999;padding:.2em .3em;}th{background:#eee;text-align:left;}thead th{text-align:center;}thead td,thead th{background:#ddf;}fieldset{display:inline;vertical-align:top;padding:.5em .8em;margin:.8em .5em 0 0;border:1px solid #999;}p{margin:.8em 20px 0 0;}img{vertical-align:middle;border:0;}td img{max-width:200px;max-height:200px;}code{background:#eee;}tr:hover td,tr:hover th{background:#ddf;}pre{margin:1em 0 0;}input[type=image]{vertical-align:middle;}.version{color:#777;font-size:67%;}.js .hidden,.nojs .jsonly{display:none;}.nowrap td,.nowrap th,td.nowrap{white-space:pre;}.wrap td{white-space:normal;}.error{color:red;background:#fee;}.error b{background:#fff;font-weight:normal;}.message{color:green;background:#efe;}.error,.message{padding:.5em .8em;margin:1em 20px 0 0;}.char{color:#007F00;}.date{color:#7F007F;}.enum{color:#007F7F;}.binary{color:red;}.odd td{background:#F5F5F5;}.time{color:silver;font-size:70%;}.function{text-align:right;}.number{text-align:right;}.datetime{text-align:right;}.type{width:15ex;width:auto\\9;}.options select{width:20ex;width:auto\\9;}.active{font-weight:bold;}.sqlarea{width:98%;}#menu{position:absolute;margin:10px 0 0;padding:0 0 30px 0;top:2em;left:0;width:19em;overflow:auto;overflow-y:hidden;white-space:nowrap;}#menu p{padding:.8em 1em;margin:0;border-bottom:1px solid #ccc;}#content{margin:2em 0 0 21em;padding:10px 20px 20px 0;}#lang{position:absolute;top:0;left:0;line-height:1.8em;padding:.3em 1em;}#breadcrumb{white-space:nowrap;position:absolute;top:0;left:21em;background:#eee;height:2em;line-height:1.8em;padding:0 1em;margin:0 0 0 -18px;}#loader{position:fixed;top:0;left:18em;z-index:1;}#h1{color:#777;text-decoration:none;font-style:italic;}#version{font-size:67%;color:red;}#schema{margin-left:60px;position:relative;}#schema .table{border:1px solid silver;padding:0 2px;cursor:move;position:absolute;}#schema .references{position:absolute;}.rtl h2{margin:0 -18px 20px 0;}.rtl p,.rtl table,.rtl .error,.rtl .message{margin:1em 0 0 20px;}.rtl #content{margin:2em 21em 0 0;padding:10px 0 20px 20px;}.rtl #breadcrumb{left:auto;right:21em;margin:0 -18px 0 0;}.rtl #lang,.rtl #menu{left:auto;right:0;}@media print{#lang,#menu{display:none;}#content{margin-left:1em;}#breadcrumb{left:1em;}.nowrap td,.nowrap th,td.nowrap{white-space:normal;}}';}elseif($_GET["file"]=="functions.js"){header("Content-Type: text/javascript; charset=utf-8");?>
function toggle(id){var el=document.getElementById(id);el.className=(el.className=='hidden'?'':'hidden');return true;}
function cookie(assign,days){var date=new Date();date.setDate(date.getDate()+days);document.cookie=assign+'; expires='+date;}
function verifyVersion(){cookie('adminer_version=0',1);var script=document.createElement('script');script.src=location.protocol+'//www.adminer.org/version.php';document.body.appendChild(script);}
function selectValue(select){var selected=select.options[select.selectedIndex];return((selected.attributes.value||{}).specified?selected.value:selected.text);}
function formCheck(el,name){var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)){elems[i].checked=el.checked;}}}
function formUncheck(id){document.getElementById(id).checked=false;}
function formChecked(el,name){var checked=0;var elems=el.form.elements;for(var i=0;i<elems.length;i++){if(name.test(elems[i].name)&&elems[i].checked){checked++;}}
return checked;}
function tableClick(event){var el=event.target||event.srcElement;while(!/^tr$/i.test(el.tagName)){if(/^(table|a|input|textarea)$/i.test(el.tagName)){return;}
el=el.parentNode;}
el=el.firstChild.firstChild;el.click&&el.click();el.onclick&&el.onclick();}
function setHtml(id,html){var el=document.getElementById(id);if(el){if(html==undefined){el.parentNode.innerHTML='&nbsp;';}else{el.innerHTML=html;}}}
function nodePosition(el){var pos=0;while(el=el.previousSibling){pos++;}
return pos;}
function pageClick(href,page,event){if(!isNaN(page)&&page){href+=(page!=1?'&page='+(page-1):'');if(!ajaxSend(href)){location.href=href;}}}
function selectAddRow(field){field.onchange=function(){};var row=field.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/[a-z]\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');if(inputs.length){inputs[0].name=inputs[0].name.replace(/[a-z]\[\d+/,'$&1');inputs[0].value='';inputs[0].className='';}
field.parentNode.parentNode.appendChild(row);}
function bodyKeydown(event,button){var target=event.target||event.srcElement;if(event.ctrlKey&&(event.keyCode==13||event.keyCode==10)&&!event.altKey&&!event.metaKey&&/select|textarea|input/i.test(target.tagName)){target.blur();if(!ajaxForm(target.form,(button?button+'=1':''))){if(button){target.form[button].click();}else{target.form.submit();}}
return false;}
return true;}
function editingKeydown(event){if((event.keyCode==40||event.keyCode==38)&&event.ctrlKey&&!event.altKey&&!event.metaKey){var target=event.target||event.srcElement;var sibling=(event.keyCode==40?'nextSibling':'previousSibling');var el=target.parentNode.parentNode[sibling];if(el&&(/^tr$/i.test(el.tagName)||(el=el[sibling]))&&/^tr$/i.test(el.tagName)&&(el=el.childNodes[nodePosition(target.parentNode)])&&(el=el.childNodes[nodePosition(target)])){el.focus();}
return false;}
if(event.shiftKey&&!bodyKeydown(event,'insert')){eventStop(event);return false;}
return true;}
function functionChange(select){var input=select.form[select.name.replace(/^function/,'fields')];if(selectValue(select)){if(input.origMaxLength===undefined){input.origMaxLength=input.maxLength;}
input.removeAttribute('maxlength');}else if(input.origMaxLength>=0){input.maxLength=input.origMaxLength;}}
function ajax(url,callback,data){var xmlhttp=(window.XMLHttpRequest?new XMLHttpRequest():(window.ActiveXObject?new ActiveXObject('Microsoft.XMLHTTP'):false));if(xmlhttp){xmlhttp.open((data?'POST':'GET'),url);if(data){xmlhttp.setRequestHeader('Content-Type','application/x-www-form-urlencoded');}
xmlhttp.setRequestHeader('X-Requested-With','XMLHttpRequest');xmlhttp.onreadystatechange=function(){if(xmlhttp.readyState==4){callback(xmlhttp);}};xmlhttp.send(data);}
return xmlhttp;}
function ajaxSetHtml(url){return ajax(url,function(xmlhttp){if(xmlhttp.status){var data=eval('('+xmlhttp.responseText+')');for(var key in data){setHtml(key,data[key]);}}});}
var originalFavicon;function replaceFavicon(href){var favicon=document.getElementById('favicon');if(favicon){favicon.href=href;favicon.parentNode.appendChild(favicon);}}
var ajaxState=0;function ajaxSend(url,data,popState,noscroll){if(!history.pushState){return false;}
var currentState=++ajaxState;onblur=function(){if(!originalFavicon){originalFavicon=(document.getElementById('favicon')||{}).href;}
replaceFavicon(location.pathname+'?file=loader.gif&amp;version=3.3.1');};setHtml('loader','<img src="'+location.pathname+'?file=loader.gif&amp;version=3.3.1" alt="">');return ajax(url,function(xmlhttp){if(currentState==ajaxState){var title=xmlhttp.getResponseHeader('X-AJAX-Title');if(title){document.title=decodeURIComponent(title);}
var redirect=xmlhttp.getResponseHeader('X-AJAX-Redirect');if(redirect){return ajaxSend(redirect,'',popState);}
onblur=function(){};replaceFavicon(originalFavicon);if(!xmlhttp.status){setHtml('loader','');}else{if(!popState){if(data||url!=location.href){history.pushState(data,'',url);}}
if(!noscroll){scrollTo(0,0);}
setHtml('content',xmlhttp.responseText);var content=document.getElementById('content');var scripts=content.getElementsByTagName('script');var length=scripts.length;for(var i=0;i<length;i++){var script=document.createElement('script');script.text=scripts[i].text;content.appendChild(script);}
var as=document.getElementById('menu').getElementsByTagName('a');var href=location.href.replace(/(&(sql=|dump=|(select|table)=[^&]*)).*/,'$1');for(var i=0;i<as.length;i++){as[i].className=(href==as[i].href?'active':'');}
var dump=document.getElementById('dump');if(dump){var match=/&(select|table)=([^&]+)/.exec(href);dump.href=dump.href.replace(/[^=]+$/,'')+(match?match[2]:'');}
if(window.jush){jush.highlight_tag('code',0);}}}},data);}
onpopstate=function(event){if((ajaxState||event.state)&&!/#/.test(location.href)){ajaxSend(location.href,(event.state&&confirm(areYouSure)?event.state:''),1);}else{ajaxState++;}};function ajaxForm(form,data,noscroll){if((/&(database|scheme|create|view|sql|user|dump|call)=/.test(location.href)&&!/\./.test(data))||(form.onsubmit&&form.onsubmit()===false)){return false;}
var params=[];for(var i=0;i<form.elements.length;i++){var el=form.elements[i];if(/file/i.test(el.type)&&el.value){return false;}else if(el.name&&(!/checkbox|radio|submit|file/i.test(el.type)||el.checked)){params.push(encodeURIComponent(el.name)+'='+encodeURIComponent(/select/i.test(el.tagName)?selectValue(el):el.value));}}
if(data){params.push(data);}
if(form.method=='post'){return ajaxSend((/\?/.test(form.action)?form.action:location.href),params.join('&'),noscroll);}
return ajaxSend((form.action||location.href).replace(/\?.*/,'')+'?'+params.join('&'),noscroll);}
function selectDblClick(td,event,text){if(/input|textarea/i.test(td.firstChild.tagName)){return;}
var original=td.innerHTML;var input=document.createElement(text?'textarea':'input');input.onkeydown=function(event){if(!event){event=window.event;}
if(event.keyCode==27&&!(event.ctrlKey||event.shiftKey||event.altKey||event.metaKey)){td.innerHTML=original;}};var pos=event.rangeOffset;var value=td.firstChild.alt||td.textContent||td.innerText;input.style.width=Math.max(td.clientWidth-14,20)+'px';if(text){var rows=1;value.replace(/\n/g,function(){rows++;});input.rows=rows;}
if(value=='\u00A0'||td.getElementsByTagName('i').length){value='';}
if(document.selection){var range=document.selection.createRange();range.moveToPoint(event.clientX,event.clientY);var range2=range.duplicate();range2.moveToElementText(td);range2.setEndPoint('EndToEnd',range);pos=range2.text.length;}
td.innerHTML='';td.appendChild(input);input.focus();if(text==2){return ajax(location.href+'&'+encodeURIComponent(td.id)+'=',function(xmlhttp){if(xmlhttp.status){input.value=xmlhttp.responseText;input.name=td.id;}});}
input.value=value;input.name=td.id;input.selectionStart=pos;input.selectionEnd=pos;if(document.selection){var range=document.selection.createRange();range.moveEnd('character',-input.value.length+pos);range.select();}}
function bodyClick(event,db,ns){if(event.button||event.ctrlKey||event.shiftKey||event.altKey||event.metaKey){return;}
if(event.getPreventDefault?event.getPreventDefault():event.returnValue===false||event.defaultPrevented){return false;}
var el=event.target||event.srcElement;if(/^a$/i.test(el.parentNode.tagName)){el=el.parentNode;}
if(/^a$/i.test(el.tagName)&&!/:|#|&download=/i.test(el.getAttribute('href'))&&/[&?]username=/.test(el.href)){var match=/&db=([^&]*)/.exec(el.href);var match2=/&ns=([^&]*)/.exec(el.href);return!(db==(match?match[1]:'')&&ns==(match2?match2[1]:'')&&ajaxSend(el.href));}
if(/^input$/i.test(el.tagName)&&/image|submit/.test(el.type)){return!ajaxForm(el.form,(el.name?encodeURIComponent(el.name)+(el.type=='image'?'.x':'')+'=1':''),el.type=='image');}
return true;}
function eventStop(event){if(event.stopPropagation){event.stopPropagation();}else{event.cancelBubble=true;}}
var jushRoot=location.protocol + '//www.adminer.org/static/';function bodyLoad(version){if(history.state!==undefined){onpopstate(history);}
if(jushRoot){var script=document.createElement('script');script.src=jushRoot+'jush.js';script.onload=function(){if(window.jush){jush.create_links=' target="_blank" rel="noreferrer"';jush.urls.sql_sqlset=jush.urls.sql[0]=jush.urls.sqlset[0]=jush.urls.sqlstatus[0]='http://dev.mysql.com/doc/refman/'+version+'/en/$key';var pgsql='http://www.postgresql.org/docs/'+version+'/static/';jush.urls.pgsql_pgsqlset=jush.urls.pgsql[0]=pgsql+'$key';jush.urls.pgsqlset[0]=pgsql+'runtime-config-$key.html#GUC-$1';jush.style(jushRoot+'jush.css');if(window.jushLinks){jush.custom_links=jushLinks;}
jush.highlight_tag('code',0);}};script.onreadystatechange=function(){if(/^(loaded|complete)$/.test(script.readyState)){script.onload();}};document.body.appendChild(script);}}
function formField(form,name){for(var i=0;i<form.length;i++){if(form[i].name==name){return form[i];}}}
function typePassword(el,disable){try{el.type=(disable?'text':'password');}catch(e){}}
function loginDriver(driver){var trs=driver.parentNode.parentNode.parentNode.rows;for(var i=1;i<trs.length;i++){trs[i].className=(/sqlite/.test(driver.value)?'hidden':'');}}
function textareaKeydown(target,event){if(!event.shiftKey&&!event.altKey&&!event.ctrlKey&&!event.metaKey){if(event.keyCode==9){if(target.setSelectionRange){var start=target.selectionStart;var scrolled=target.scrollTop;target.value=target.value.substr(0,start)+'\t'+target.value.substr(target.selectionEnd);target.setSelectionRange(start+1,start+1);target.scrollTop=scrolled;return false;}else if(target.createTextRange){document.selection.createRange().text='\t';return false;}}
if(event.keyCode==27){var els=target.form.elements;for(var i=1;i<els.length;i++){if(els[i-1]==target){els[i].focus();break;}}
return false;}}
return true;}
var added='.',rowCount;function delimiterEqual(val,a,b){return(val==a+'_'+b||val==a+b||val==a+b.charAt(0).toUpperCase()+b.substr(1));}
function idfEscape(s){return s.replace(/`/,'``');}
function editingNameChange(field){var name=field.name.substr(0,field.name.length-7);var type=formField(field.form,name+'[type]');var opts=type.options;var candidate;var val=field.value;for(var i=opts.length;i--;){var match=/(.+)`(.+)/.exec(opts[i].value);if(!match){if(candidate&&i==opts.length-2&&val==opts[candidate].value.replace(/.+`/,'')&&name=='fields[1]'){return;}
break;}
var table=match[1];var column=match[2];var tables=[table,table.replace(/s$/,''),table.replace(/es$/,'')];for(var j=0;j<tables.length;j++){table=tables[j];if(val==column||val==table||delimiterEqual(val,table,column)||delimiterEqual(val,column,table)){if(candidate){return;}
candidate=i;break;}}}
if(candidate){type.selectedIndex=candidate;type.onchange();}}
function editingAddRow(button,allowed,focus){if(allowed&&rowCount>=allowed){return false;}
var match=/(\d+)(\.\d+)?/.exec(button.name);var x=match[0]+(match[2]?added.substr(match[2].length):added)+'1';var row=button.parentNode.parentNode;var row2=row.cloneNode(true);var tags=row.getElementsByTagName('select');var tags2=row2.getElementsByTagName('select');for(var i=0;i<tags.length;i++){tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);tags2[i].selectedIndex=tags[i].selectedIndex;}
tags=row.getElementsByTagName('input');tags2=row2.getElementsByTagName('input');var input=tags2[0];for(var i=0;i<tags.length;i++){if(tags[i].name=='auto_increment_col'){tags2[i].value=x;tags2[i].checked=false;}
tags2[i].name=tags[i].name.replace(/([0-9.]+)/,x);if(/\[(orig|field|comment|default)/.test(tags[i].name)){tags2[i].value='';}
if(/\[(has_default)/.test(tags[i].name)){tags2[i].checked=false;}}
tags[0].onchange=function(){editingNameChange(tags[0]);};row.parentNode.insertBefore(row2,row.nextSibling);if(focus){input.onchange=function(){editingNameChange(input);};input.focus();}
added+='0';rowCount++;return true;}
function editingRemoveRow(button){var field=formField(button.form,button.name.replace(/drop_col(.+)/,'fields$1[field]'));field.parentNode.removeChild(field);button.parentNode.parentNode.style.display='none';return true;}
var lastType='';function editingTypeChange(type){var name=type.name.substr(0,type.name.length-6);var text=selectValue(type);for(var i=0;i<type.form.elements.length;i++){var el=type.form.elements[i];if(el.name==name+'[length]'&&!((/(char|binary)$/.test(lastType)&&/(char|binary)$/.test(text))||(/(enum|set)$/.test(lastType)&&/(enum|set)$/.test(text)))){el.value='';}
if(lastType=='timestamp'&&el.name==name+'[has_default]'&&/timestamp/i.test(formField(type.form,name+'[default]').value)){el.checked=false;}
if(el.name==name+'[collation]'){el.className=(/(char|text|enum|set)$/.test(text)?'':'hidden');}
if(el.name==name+'[unsigned]'){el.className=(/(int|float|double|decimal)$/.test(text)?'':'hidden');}
if(el.name==name+'[on_delete]'){el.className=(/`/.test(text)?'':'hidden');}}}
function editingLengthFocus(field){var td=field.parentNode;if(/(enum|set)$/.test(selectValue(td.previousSibling.firstChild))){var edit=document.getElementById('enum-edit');var val=field.value;edit.value=(/^'.+','.+'$/.test(val)?val.substr(1,val.length-2).replace(/','/g,"\n").replace(/''/g,"'"):val);td.appendChild(edit);field.style.display='none';edit.style.display='inline';edit.focus();}}
function editingLengthBlur(edit){var field=edit.parentNode.firstChild;var val=edit.value;field.value=(/\n/.test(val)?"'"+val.replace(/\n+$/,'').replace(/'/g,"''").replace(/\n/g,"','")+"'":val);field.style.display='inline';edit.style.display='none';}
function columnShow(checked,column){var trs=document.getElementById('edit-fields').getElementsByTagName('tr');for(var i=0;i<trs.length;i++){trs[i].getElementsByTagName('td')[column].className=(checked?'':'hidden');}}
function partitionByChange(el){var partitionTable=/RANGE|LIST/.test(selectValue(el));el.form['partitions'].className=(partitionTable||!el.selectedIndex?'hidden':'');document.getElementById('partition-table').className=(partitionTable?'':'hidden');}
function partitionNameChange(el){var row=el.parentNode.parentNode.cloneNode(true);row.firstChild.firstChild.value='';el.parentNode.parentNode.parentNode.appendChild(row);el.onchange=function(){};}
function foreignAddRow(field){field.onchange=function(){};var row=field.parentNode.parentNode.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/\]/,'1$&');selects[i].selectedIndex=0;}
field.parentNode.parentNode.parentNode.appendChild(row);}
function indexesAddRow(field){field.onchange=function(){};var parent=field.parentNode.parentNode;var row=parent.cloneNode(true);var selects=row.getElementsByTagName('select');for(var i=0;i<selects.length;i++){selects[i].name=selects[i].name.replace(/indexes\[\d+/,'$&1');selects[i].selectedIndex=0;}
var inputs=row.getElementsByTagName('input');for(var i=0;i<inputs.length;i++){inputs[i].name=inputs[i].name.replace(/indexes\[\d+/,'$&1');inputs[i].value='';}
parent.parentNode.appendChild(row);}
function indexesChangeColumn(field,prefix){var columns=field.parentNode.parentNode.getElementsByTagName('select');var names=[];for(var i=0;i<columns.length;i++){var value=selectValue(columns[i]);if(value){names.push(value);}}
field.form[field.name.replace(/\].*/,'][name]')].value=prefix+names.join('_');}
function indexesAddColumn(field,prefix){field.onchange=function(){indexesChangeColumn(field,prefix);};var select=field.form[field.name.replace(/\].*/,'][type]')];if(!select.selectedIndex){select.selectedIndex=3;select.onchange();}
var column=field.parentNode.cloneNode(true);select=column.getElementsByTagName('select')[0];select.name=select.name.replace(/\]\[\d+/,'$&1');select.selectedIndex=0;var input=column.getElementsByTagName('input')[0];input.name=input.name.replace(/\]\[\d+/,'$&1');input.value='';field.parentNode.parentNode.appendChild(column);field.onchange();}
var that,x,y,em,tablePos;function schemaMousedown(el,event){that=el;x=event.clientX-el.offsetLeft;y=event.clientY-el.offsetTop;}
function schemaMousemove(ev){if(that!==undefined){ev=ev||event;var left=(ev.clientX-x)/em;var top=(ev.clientY-y)/em;var divs=that.getElementsByTagName('div');var lineSet={};for(var i=0;i<divs.length;i++){if(divs[i].className=='references'){var div2=document.getElementById((divs[i].id.substr(0,4)=='refs'?'refd':'refs')+divs[i].id.substr(4));var ref=(tablePos[divs[i].title]?tablePos[divs[i].title]:[div2.parentNode.offsetTop/em,0]);var left1=-1;var isTop=true;var id=divs[i].id.replace(/^ref.(.+)-.+/,'$1');if(divs[i].parentNode!=div2.parentNode){left1=Math.min(0,ref[1]-left)-1;divs[i].style.left=left1+'em';divs[i].getElementsByTagName('div')[0].style.width=-left1+'em';var left2=Math.min(0,left-ref[1])-1;div2.style.left=left2+'em';div2.getElementsByTagName('div')[0].style.width=-left2+'em';isTop=(div2.offsetTop+ref[0]*em>divs[i].offsetTop+top*em);}
if(!lineSet[id]){var line=document.getElementById(divs[i].id.replace(/^....(.+)-\d+$/,'refl$1'));var shift=ev.clientY-y-that.offsetTop;line.style.left=(left+left1)+'em';if(isTop){line.style.top=(line.offsetTop+shift)/em+'em';}
if(divs[i].parentNode!=div2.parentNode){line=line.getElementsByTagName('div')[0];line.style.height=(line.offsetHeight+(isTop?-1:1)*shift)/em+'em';}
lineSet[id]=true;}}}
that.style.left=left+'em';that.style.top=top+'em';}}
function schemaMouseup(ev,db){if(that!==undefined){ev=ev||event;tablePos[that.firstChild.firstChild.firstChild.data]=[(ev.clientY-y)/em,(ev.clientX-x)/em];that=undefined;var s='';for(var key in tablePos){s+='_'+key+':'+Math.round(tablePos[key][0]*10000)/10000+'x'+Math.round(tablePos[key][1]*10000)/10000;}
s=encodeURIComponent(s.substr(1));var link=document.getElementById('schema-link');link.href=link.href.replace(/[^=]+$/,'')+s;cookie('adminer_schema-'+db+'='+s,30);}}<?php
}else{header("Content-Type: image/gif");switch($_GET["file"]){case"plus.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIYSPqcvtD00I8cwqKb5v+q8pIAhxlRmhZYi17iPE8kzLBQA7");break;case"cross.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACI4SPqcvtDyMKYdZGb355wy6BX3dhlOEx57FK7gtHwkzXNl0AADs=");break;case"up.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00IUU4K730T9J5hFTiKEXmaYcW2rgDH8hwXADs=");break;case"down.gif":echo
base64_decode("R0lGODdhEgASAKEAAO7u7gAAAJmZmQAAACwAAAAAEgASAAACIISPqcvtD00I8cwqKb5bV/5cosdMJtmcHca2lQDH8hwXADs=");break;case"arrow.gif":echo
base64_decode("R0lGODlhCAAKAIAAAICAgP///yH5BAEAAAEALAAAAAAIAAoAAAIPBIJplrGLnpQRqtOy3rsAADs=");break;case"loader.gif":echo
base64_decode("R0lGODlhEAAQAPIAAP///wAAAMLCwkJCQgAAAGJiYoKCgpKSkiH/C05FVFNDQVBFMi4wAwEAAAAh/hpDcmVhdGVkIHdpdGggYWpheGxvYWQuaW5mbwAh+QQJCgAAACwAAAAAEAAQAAADMwi63P4wyklrE2MIOggZnAdOmGYJRbExwroUmcG2LmDEwnHQLVsYOd2mBzkYDAdKa+dIAAAh+QQJCgAAACwAAAAAEAAQAAADNAi63P5OjCEgG4QMu7DmikRxQlFUYDEZIGBMRVsaqHwctXXf7WEYB4Ag1xjihkMZsiUkKhIAIfkECQoAAAAsAAAAABAAEAAAAzYIujIjK8pByJDMlFYvBoVjHA70GU7xSUJhmKtwHPAKzLO9HMaoKwJZ7Rf8AYPDDzKpZBqfvwQAIfkECQoAAAAsAAAAABAAEAAAAzMIumIlK8oyhpHsnFZfhYumCYUhDAQxRIdhHBGqRoKw0R8DYlJd8z0fMDgsGo/IpHI5TAAAIfkECQoAAAAsAAAAABAAEAAAAzIIunInK0rnZBTwGPNMgQwmdsNgXGJUlIWEuR5oWUIpz8pAEAMe6TwfwyYsGo/IpFKSAAAh+QQJCgAAACwAAAAAEAAQAAADMwi6IMKQORfjdOe82p4wGccc4CEuQradylesojEMBgsUc2G7sDX3lQGBMLAJibufbSlKAAAh+QQJCgAAACwAAAAAEAAQAAADMgi63P7wCRHZnFVdmgHu2nFwlWCI3WGc3TSWhUFGxTAUkGCbtgENBMJAEJsxgMLWzpEAACH5BAkKAAAALAAAAAAQABAAAAMyCLrc/jDKSatlQtScKdceCAjDII7HcQ4EMTCpyrCuUBjCYRgHVtqlAiB1YhiCnlsRkAAAOwAAAAAAAAAAAA==");break;}}exit;}function
connection(){global$g;return$g;}function
idf_unescape($S){$sb=substr($S,-1);return
str_replace($sb.$sb,$sb,substr($S,1,-1));}function
escape_string($b){return
substr(q($b),1,-1);}function
remove_slashes($rb,$Tc=false){if(get_magic_quotes_gpc()){while(list($e,$b)=each($rb)){foreach($b
as$Ka=>$y){unset($rb[$e][$Ka]);if(is_array($y)){$rb[$e][stripslashes($Ka)]=$y;$rb[]=&$rb[$e][stripslashes($Ka)];}else{$rb[$e][stripslashes($Ka)]=($Tc?$y:stripslashes($y));}}}}}function
bracket_escape($S,$Ef=false){static$cf=array(':'=>':1',']'=>':2','['=>':3');return
strtr($S,($Ef?array_flip($cf):$cf));}function
h($I){return
htmlspecialchars(str_replace("\0","",$I),ENT_QUOTES);}function
nbsp($I){return(trim($I)!=""?h($I):"&nbsp;");}function
nl_br($I){return
str_replace("\n","<br>",$I);}function
checkbox($f,$q,$fb,$Re="",$Jc="",$zf=false){static$R=0;$R++;$c="<input type='checkbox' name='$f' value='".h($q)."'".($fb?" checked":"").($Jc?' onclick="'.h($Jc).'"':'').($zf?" class='jsonly'":"")." id='checkbox-$R'>";return($Re!=""?"<label for='checkbox-$R'>$c".h($Re)."</label>":$c);}function
optionlist($Vc,$Hf=null,$te=false){$c="";foreach($Vc
as$Ka=>$y){$Pe=array($Ka=>$y);if(is_array($y)){$c.='<optgroup label="'.h($Ka).'">';$Pe=$y;}foreach($Pe
as$e=>$b){$c.='<option'.($te||is_string($e)?' value="'.h($e).'"':'').(($te||is_string($e)?(string)$e:$b)===$Hf?' selected':'').'>'.h($b);}if(is_array($y)){$c.='</optgroup>';}}return$c;}function
html_select($f,$Vc,$q="",$Hb=true){if($Hb){return"<select name='".h($f)."'".(is_string($Hb)?' onchange="'.h($Hb).'"':"").">".optionlist($Vc,$q)."</select>";}$c="";foreach($Vc
as$e=>$b){$c.="<label><input type='radio' name='".h($f)."' value='".h($e)."'".($e==$q?" checked":"").">".h($b)."</label>";}return$c;}function
confirm($Fc="",$If=false){return" onclick=\"".($If?"eventStop(event); ":"")."return confirm('".'Are you sure?'.($Fc?" (' + $Fc + ')":"")."');\"";}function
print_fieldset($R,$Jf,$Kf=false,$Jc=""){echo"<fieldset><legend><a href='#fieldset-$R' onclick=\"".h($Jc)."return !toggle('fieldset-$R');\">$Jf</a></legend><div id='fieldset-$R'".($Kf?"":" class='hidden'").">\n";}function
bold($Ff){return($Ff?" class='active'":"");}function
odd($c=' class="odd"'){static$l=0;if(!$c){$l=-1;}return($l++%
2?$c:'');}function
js_escape($I){return
addcslashes($I,"\r\n'\\/");}function
json_row($e,$b=null){static$_a=true;if($_a){echo"{";}if($e!=""){echo($_a?"":",")."\n\t\"".addcslashes($e,"\r\n\"\\").'": '.(isset($b)?'"'.addcslashes($b,"\r\n\"\\").'"':'undefined');$_a=false;}else{echo"\n}\n";$_a=true;}}function
ini_bool($_f){$b=ini_get($_f);return(eregi('^(on|true|yes)$',$b)||(int)$b);}function
sid(){static$c;if(!isset($c)){$c=(SID&&!($_COOKIE&&ini_bool("session.use_cookies")));}return$c;}function
q($I){global$g;return$g->quote($I);}function
get_vals($i,$C=0){global$g;$c=array();$j=$g->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[]=$a[$C];}}return$c;}function
get_key_vals($i,$G=null){global$g;if(!is_object($G)){$G=$g;}$c=array();$j=$G->query($i);if(is_object($j)){while($a=$j->fetch_row()){$c[$a[0]]=$a[1];}}return$c;}function
get_rows($i,$G=null,$n="<p class='error'>"){global$g;if(!is_object($G)){$G=$g;}$c=array();$j=$G->query($i);if(is_object($j)){while($a=$j->fetch_assoc()){$c[]=$a;}}elseif(!$j&&$g->error&&$n&&defined("PAGE_HEADER")){echo$n.error()."\n";}return$c;}function
unique_array($a,$K){foreach($K
as$w){if(ereg("PRIMARY|UNIQUE",$w["type"])){$c=array();foreach($w["columns"]as$e){if(!isset($a[$e])){continue
2;}$c[$e]=$a[$e];}return$c;}}$c=array();foreach($a
as$e=>$b){if(!preg_match('~^(COUNT\\((\\*|(DISTINCT )?`(?:[^`]|``)+`)\\)|(AVG|GROUP_CONCAT|MAX|MIN|SUM)\\(`(?:[^`]|``)+`\\))$~',$e)){$c[$e]=$b;}}return$c;}function
where($t){global$u;$c=array();foreach((array)$t["where"]as$e=>$b){$c[]=idf_escape(bracket_escape($e,1)).(ereg('\\.',$b)||$u=="mssql"?" LIKE ".exact_value(addcslashes($b,"%_\\")):" = ".exact_value($b));}foreach((array)$t["null"]as$e){$c[]=idf_escape($e)." IS NULL";}return
implode(" AND ",$c);}function
where_check($b){parse_str($b,$we);remove_slashes(array(&$we));return
where($we);}function
where_link($l,$C,$q,$Rf="="){return"&where%5B$l%5D%5Bcol%5D=".urlencode($C)."&where%5B$l%5D%5Bop%5D=".urlencode((isset($q)?$Rf:"IS NULL"))."&where%5B$l%5D%5Bval%5D=".urlencode($q);}function
cookie($f,$q){global$vc;$mc=array($f,(ereg("\n",$q)?"":$q),time()+2592000,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$vc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$mc[]=true;}return
call_user_func_array('setcookie',$mc);}function
restart_session(){if(!ini_bool("session.use_cookies")){session_start();}}function&get_session($e){return$_SESSION[$e][DRIVER][SERVER][$_GET["username"]];}function
set_session($e,$b){$_SESSION[$e][DRIVER][SERVER][$_GET["username"]]=$b;}function
auth_url($Lb,$F,$P){global$la;preg_match('~([^?]*)\\??(.*)~',remove_from_uri(implode("|",array_keys($la))."|username|".session_name()),$k);return"$k[1]?".(sid()?SID."&":"").($Lb!="server"||$F!=""?urlencode($Lb)."=".urlencode($F)."&":"")."username=".urlencode($P).($k[2]?"&$k[2]":"");}function
is_ajax(){return($_SERVER["HTTP_X_REQUESTED_WITH"]=="XMLHttpRequest");}function
redirect($fa,$ua=null){if(isset($ua)){restart_session();$_SESSION["messages"][preg_replace('~^[^?]*~','',(isset($fa)?$fa:$_SERVER["REQUEST_URI"]))][]=$ua;}if(isset($fa)){if($fa==""){$fa=".";}header((is_ajax()?"X-AJAX-Redirect":"Location").": $fa");exit;}}function
query_redirect($i,$fa,$ua,$Yc=true,$if=true,$Ne=false){global$g,$n,$o;if($if){$Ne=!$g->query($i);}$Bd="";if($i){$Bd=$o->messageQuery("$i;");}if($Ne){$n=error().$Bd;return
false;}if($Yc){redirect($fa,$ua.$Bd);}return
true;}function
queries($i=null){global$g;static$gb=array();if(!isset($i)){return
implode(";\n",$gb);}$gb[]=(ereg(';$',$i)?"DELIMITER ;;\n$i;\nDELIMITER ":$i);return$g->query($i);}function
apply_queries($i,$E,$kf='table'){foreach($E
as$h){if(!queries("$i ".$kf($h))){return
false;}}return
true;}function
queries_redirect($fa,$ua,$Yc){return
query_redirect(queries(),$fa,$ua,$Yc,false,!$Yc);}function
remove_from_uri($eb=""){return
substr(preg_replace("~(?<=[?&])($eb".(SID?"":"|".session_name()).")=[^&]*&~",'',"$_SERVER[REQUEST_URI]&"),0,-1);}function
pagination($Y,$ff){return" ".($Y==$ff?$Y+1:'<a href="'.h(remove_from_uri("page").($Y?"&page=$Y":"")).'">'.($Y+1)."</a>");}function
get_file($e,$Gd=false){$Ea=$_FILES[$e];if(!$Ea||$Ea["error"]){return$Ea["error"];}$c=file_get_contents($Gd&&ereg('\\.gz$',$Ea["name"])?"compress.zlib://$Ea[tmp_name]":($Gd&&ereg('\\.bz2$',$Ea["name"])?"compress.bzip2://$Ea[tmp_name]":$Ea["tmp_name"]));if($Gd){$Eb=substr($c,0,3);if(function_exists("iconv")&&ereg("^\xFE\xFF|^\xFF\xFE",$Eb,$Yf)){$c=iconv("utf-16","utf-8",$c);}elseif($Eb=="\xEF\xBB\xBF"){$c=substr($c,3);}}return$c;}function
upload_error($n){$Ke=($n==UPLOAD_ERR_INI_SIZE?ini_get("upload_max_filesize"):null);return($n?'Unable to upload a file.'.($Ke?" ".sprintf('Maximum allowed file size is %sB.',$Ke):""):'File does not exist.');}function
repeat_pattern($ca,$X){return
str_repeat("$ca{0,65535}",$X/65535)."$ca{0,".($X
%
65535)."}";}function
is_utf8($b){return(preg_match('~~u',$b)&&!preg_match('~[\\0-\\x8\\xB\\xC\\xE-\\x1F]~',$b));}function
shorten_utf8($I,$X=80,$wf=""){if(!preg_match("(^(".repeat_pattern("[\t\r\n -\x{FFFF}]",$X).")($)?)u",$I,$k)){preg_match("(^(".repeat_pattern("[\t\r\n -~]",$X).")($)?)",$I,$k);}return
h($k[1]).$wf.(isset($k[2])?"":"<i>...</i>");}function
friendly_url($b){return
preg_replace('~[^a-z0-9_]~i','-',$b);}function
hidden_fields($rb,$tf=array()){while(list($e,$b)=each($rb)){if(is_array($b)){foreach($b
as$Ka=>$y){$rb[$e."[$Ka]"]=$y;}}elseif(!in_array($e,$tf)){echo'<input type="hidden" name="'.h($e).'" value="'.h($b).'">';}}}function
hidden_fields_get(){echo(sid()?'<input type="hidden" name="'.session_name().'" value="'.h(session_id()).'">':''),(SERVER!==null?'<input type="hidden" name="'.DRIVER.'" value="'.h(SERVER).'">':""),'<input type="hidden" name="username" value="'.h($_GET["username"]).'">';}function
column_foreign_keys($h){global$o;$c=array();foreach($o->foreignKeys($h)as$A){foreach($A["source"]as$b){$c[$b][]=$A;}}return$c;}function
enum_input($z,$Ra,$d,$q,$bc=null){global$o;preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ta);$c=(isset($bc)?"<label><input type='$z'$Ra value='$bc'".((is_array($q)?in_array($bc,$q):$q===0)?" checked":"")."><i>".'empty'."</i></label>":"");foreach($ta[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?$q==$l+1:(is_array($q)?in_array($l+1,$q):$q===$b));$c.=" <label><input type='$z'$Ra value='".($l+1)."'".($fb?' checked':'').'>'.h($o->editVal($b,$d)).'</label>';}return$c;}function
input($d,$q,$L){global$Q,$o,$u;$f=h(bracket_escape($d["field"]));echo"<td class='function'>";$Je=($u=="mssql"&&$d["auto_increment"]);if($Je&&!$_POST["save"]){$L=null;}$ba=(isset($_GET["select"])||$Je?array("orig"=>'original'):array())+$o->editFunctions($d);$Ra=" name='fields[$f]'";if($d["type"]=="enum"){echo
nbsp($ba[""])."<td>".$o->editInput($_GET["edit"],$d,$Ra,$q);}else{$_a=0;foreach($ba
as$e=>$b){if($e===""||!$b){break;}$_a++;}$Hb=($_a?" onchange=\"var f = this.form['function[".h(js_escape(bracket_escape($d["field"])))."]']; if ($_a > f.selectedIndex) f.selectedIndex = $_a;\"":"");$Ra.=$Hb;echo(count($ba)>1?html_select("function[$f]",$ba,!isset($L)||in_array($L,$ba)||isset($ba[$L])?$L:"","functionChange(this);"):nbsp(reset($ba))).'<td>';$Fe=$o->editInput($_GET["edit"],$d,$Ra,$q);if($Fe!=""){echo$Fe;}elseif($d["type"]=="set"){preg_match_all("~'((?:[^']|'')*)'~",$d["length"],$ta);foreach($ta[1]as$l=>$b){$b=stripcslashes(str_replace("''","'",$b));$fb=(is_int($q)?($q>>$l)&1:in_array($b,explode(",",$q),true));echo" <label><input type='checkbox' name='fields[$f][$l]' value='".(1<<$l)."'".($fb?' checked':'')."$Hb>".h($o->editVal($b,$d)).'</label>';}}elseif(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){echo"<input type='file' name='fields-$f'$Hb>";}elseif(ereg('text|lob',$d["type"])){echo"<textarea ".($u!="sqlite"||ereg("\n",$q)?"cols='50' rows='12'":"cols='30' rows='1' style='height: 1.2em;'")."$Ra>".h($q).'</textarea>';}else{$wd=(!ereg('int',$d["type"])&&preg_match('~^(\\d+)(,(\\d+))?$~',$d["length"],$k)?((ereg("binary",$d["type"])?2:1)*$k[1]+($k[3]?1:0)+($k[2]&&!$d["unsigned"]?1:0)):($Q[$d["type"]]?$Q[$d["type"]]+($d["unsigned"]?0:1):0));echo"<input value='".h($q)."'".($wd?" maxlength='$wd'":"").(ereg('char|binary',$d["type"])&&$wd>20?" size='40'":"")."$Ra>";}}}function
process_input($d){global$o;$S=bracket_escape($d["field"]);$L=$_POST["function"][$S];$q=$_POST["fields"][$S];if($d["type"]=="enum"){if($q==-1){return
false;}if($q==""){return"NULL";}return+$q;}if($d["auto_increment"]&&$q==""){return
null;}if($L=="orig"){return($d["on_update"]=="CURRENT_TIMESTAMP"?idf_escape($d["field"]):false);}if($L=="NULL"){return"NULL";}if($d["type"]=="set"){return
array_sum((array)$q);}if(ereg('blob|bytea|raw|file',$d["type"])&&ini_bool("file_uploads")){$Ea=get_file("fields-$S");if(!is_string($Ea)){return
false;}return
q($Ea);}return$o->processInput($d,$q,$L);}function
search_tables(){global$o,$g;$_GET["where"][0]["op"]="LIKE %%";$_GET["where"][0]["val"]=$_POST["query"];$qa=false;foreach(table_status()as$h=>$D){$f=$o->tableName($D);if(isset($D["Engine"])&&$f!=""&&(!$_POST["tables"]||in_array($h,$_POST["tables"]))){$j=$g->query("SELECT".limit("1 FROM ".table($h)," WHERE ".implode(" AND ",$o->selectSearchProcess(fields($h),array())),1));if($j->fetch_row()){if(!$qa){echo"<ul>\n";$qa=true;}echo"<li><a href='".h(ME."select=".urlencode($h)."&where[0][op]=".urlencode($_GET["where"][0]["op"])."&where[0][val]=".urlencode($_GET["where"][0]["val"]))."'>$f</a>\n";}}}echo($qa?"</ul>":"<p class='message'>".'No tables.')."\n";}function
dump_headers($Sc,$_d=false){global$o;$c=$o->dumpHeaders($Sc,$_d);$Na=$_POST["output"];if($Na!="text"){header("Content-Disposition: attachment; filename=".friendly_url($Sc!=""?$Sc:(SERVER!=""?SERVER:"localhost")).".$c".($Na!="file"&&!ereg('[^0-9a-z]',$Na)?".$Na":""));}session_write_close();return$c;}function
dump_csv($a){foreach($a
as$e=>$b){if(preg_match("~[\"\n,;\t]~",$b)||$b===""){$a[$e]='"'.str_replace('"','""',$b).'"';}}echo
implode(($_POST["format"]=="csv"?",":($_POST["format"]=="tsv"?"\t":";")),$a)."\r\n";}function
apply_sql_function($L,$C){return($L?($L=="unixepoch"?"DATETIME($C, '$L')":($L=="count distinct"?"COUNT(DISTINCT ":strtoupper("$L("))."$C)"):$C);}function
password_file(){$Wc=ini_get("upload_tmp_dir");if(!$Wc){if(function_exists('sys_get_temp_dir')){$Wc=sys_get_temp_dir();}else{$ja=@tempnam("","");if(!$ja){return
false;}$Wc=dirname($ja);unlink($ja);}}$ja="$Wc/adminer.key";$c=@file_get_contents($ja);if($c){return$c;}$Ma=@fopen($ja,"w");if($Ma){$c=md5(uniqid(mt_rand(),true));fwrite($Ma,$c);fclose($Ma);}return$c;}function
is_mail($qf){$He='[-a-z0-9!#$%&\'*+/=?^_`{|}~]';$jc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';$ca="$He+(\\.$He+)*@($jc?\\.)+$jc";return
preg_match("(^$ca(,\\s*$ca)*\$)i",$qf);}function
is_url($I){$jc='[a-z0-9]([-a-z0-9]{0,61}[a-z0-9])';return(preg_match("~^(https?)://($jc?\\.)+$jc(:\\d+)?(/.*)?(\\?.*)?(#.*)?\$~i",$I,$k)?strtolower($k[1]):"");}global$o,$g,$la,$Nb,$Cb,$n,$ba,$jb,$vc,$Sb,$u,$pf,$Vf,$db,$Ia,$O,$Uf,$Q,$ib,$kc;if(!isset($_SERVER["REQUEST_URI"])){$_SERVER["REQUEST_URI"]=$_SERVER["ORIG_PATH_INFO"].($_SERVER["QUERY_STRING"]!=""?"?$_SERVER[QUERY_STRING]":"");}$vc=$_SERVER["HTTPS"]&&strcasecmp($_SERVER["HTTPS"],"off");@ini_set("session.use_trans_sid",false);if(!defined("SID")){session_name("adminer_sid");$mc=array(0,preg_replace('~\\?.*~','',$_SERVER["REQUEST_URI"]),"",$vc);if(version_compare(PHP_VERSION,'5.2.0')>=0){$mc[]=true;}call_user_func_array('session_set_cookie_params',$mc);session_start();}remove_slashes(array(&$_GET,&$_POST,&$_COOKIE),$Tc);if(function_exists("set_magic_quotes_runtime")){set_magic_quotes_runtime(false);}@set_time_limit(0);@ini_set("zend.ze1_compatibility_mode",false);@ini_set("precision",20);function
get_lang(){return'en';}function
lang($mf,$Ie){$qc=($Ie==1?0:1);return
sprintf($mf[$qc],$Ie);}if(extension_loaded('pdo')){class
Min_PDO
extends
PDO{var$_result,$server_info,$affected_rows,$error;function
__construct(){}function
dsn($nf,$P,$T,$uf='auth_error'){set_exception_handler($uf);parent::__construct($nf,$P,$T);restore_exception_handler();$this->setAttribute(13,array('Min_PDOStatement'));$this->server_info=$this->getAttribute(4);}function
query($i,$Wa=false){$j=parent::query($i);if(!$j){$vf=$this->errorInfo();$this->error=$vf[2];return
false;}$this->store_result($j);return$j;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result($j=null){if(!$j){$j=$this->_result;}if($j->columnCount()){$j->num_rows=$j->rowCount();return$j;}$this->affected_rows=$j->rowCount();return
true;}function
next_result(){return$this->_result->nextRowset();}function
result($i,$d=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch();return$a[$d];}}class
Min_PDOStatement
extends
PDOStatement{var$_offset=0,$num_rows;function
fetch_assoc(){return$this->fetch(2);}function
fetch_row(){return$this->fetch(3);}function
fetch_field(){$a=(object)$this->getColumnMeta($this->_offset++);$a->orgtable=$a->table;$a->orgname=$a->name;$a->charsetnr=(in_array("blob",$a->flags)?63:0);return$a;}}}$la=array();$la["sqlite"]="SQLite 3";$la["sqlite2"]="SQLite 2";if(isset($_GET["sqlite"])||isset($_GET["sqlite2"])){$rc=array((isset($_GET["sqlite"])?"SQLite3":"SQLite"),"PDO_SQLite");define("DRIVER",(isset($_GET["sqlite"])?"sqlite":"sqlite2"));if(extension_loaded(isset($_GET["sqlite"])?"sqlite3":"sqlite")){if(isset($_GET["sqlite"])){class
Min_SQLite{var$extension="SQLite3",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ja){$this->_link=new
SQLite3($ja);$Cd=$this->_link->version();$this->server_info=$Cd["versionString"];}function
query($i){$j=@$this->_link->query($i);if(!$j){$this->error=$this->_link->lastErrorMsg();return
false;}elseif($j->numColumns()){return
new
Min_Result($j);}$this->affected_rows=$this->_link->changes();return
true;}function
quote($I){return"'".$this->_link->escapeString($I)."'";}function
store_result(){return$this->_result;}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetchArray();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;}function
fetch_assoc(){return$this->_result->fetchArray(SQLITE3_ASSOC);}function
fetch_row(){return$this->_result->fetchArray(SQLITE3_NUM);}function
fetch_field(){$C=$this->_offset++;$z=$this->_result->columnType($C);return(object)array("name"=>$this->_result->columnName($C),"type"=>$z,"charsetnr"=>($z==SQLITE3_BLOB?63:0),);}function
__desctruct(){return$this->_result->finalize();}}}else{class
Min_SQLite{var$extension="SQLite",$server_info,$affected_rows,$error,$_link;function
Min_SQLite($ja){$this->server_info=sqlite_libversion();$this->_link=new
SQLiteDatabase($ja);}function
query($i,$Wa=false){$rf=($Wa?"unbufferedQuery":"query");$j=@$this->_link->$rf($i,SQLITE_BOTH,$n);if(!$j){$this->error=$n;return
false;}elseif($j===true){$this->affected_rows=$this->changes();return
true;}return
new
Min_Result($j);}function
quote($I){return"'".sqlite_escape_string($I)."'";}function
store_result(){return$this->_result;}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->_result->fetch();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;if(method_exists($j,'numRows')){$this->num_rows=$j->numRows();}}function
fetch_assoc(){$a=$this->_result->fetch(SQLITE_ASSOC);if(!$a){return
false;}$c=array();foreach($a
as$e=>$b){$c[($e[0]=='"'?idf_unescape($e):$e)]=$b;}return$c;}function
fetch_row(){return$this->_result->fetch(SQLITE_NUM);}function
fetch_field(){$f=$this->_result->fieldName($this->_offset++);$ca='(\\[.*]|"(?:[^"]|"")*"|(.+))';if(preg_match("~^($ca\\.)?$ca\$~",$f,$k)){$h=($k[3]!=""?$k[3]:idf_unescape($k[2]));$f=($k[5]!=""?$k[5]:idf_unescape($k[4]));}return(object)array("name"=>$f,"orgname"=>$f,"orgtable"=>$h,);}}}}elseif(extension_loaded("pdo_sqlite")){class
Min_SQLite
extends
Min_PDO{var$extension="PDO_SQLite";function
Min_SQLite($ja){$this->dsn(DRIVER.":$ja","","");}}}if(class_exists("Min_SQLite")){class
Min_DB
extends
Min_SQLite{function
Min_DB(){$this->Min_SQLite(":memory:");}function
select_db($ja){if(is_readable($ja)&&$this->query("ATTACH ".$this->quote(ereg("(^[/\\]|:)",$ja)?$ja:dirname($_SERVER["SCRIPT_FILENAME"])."/$ja")." AS a")){$this->Min_SQLite($ja);return
true;}return
false;}function
multi_query($i){return$this->_result=$this->query($i);}function
next_result(){return
false;}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){return
new
Min_DB;}function
get_databases(){return
array();}function
limit($i,$t,$M,$N=0,$Xa=" "){return" $i$t".(isset($M)?$Xa."LIMIT $M".($N?" OFFSET $N":""):"");}function
limit1($i,$t){global$g;return($g->result("SELECT sqlite_compileoption_used('ENABLE_UPDATE_DELETE_LIMIT')")?limit($i,$t,1):" $i$t");}function
db_collation($s,$Z){global$g;return$g->result("PRAGMA encoding");}function
engines(){return
array();}function
logged_user(){return
get_current_user();}function
tables_list(){return
get_key_vals("SELECT name, type FROM sqlite_master WHERE type IN ('table', 'view') ORDER BY (name = 'sqlite_sequence'), name",1);}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type AS Engine FROM sqlite_master WHERE type IN ('table', 'view')".($f!=""?" AND name = ".q($f):""))as$a){$a["Auto_increment"]="";$c[$a["Name"]]=$a;}foreach(get_rows("SELECT * FROM sqlite_sequence",null,"")as$a){$c[$a["name"]]["Auto_increment"]=$a["seq"];}return($f!=""?$c[$f]:$c);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){global$g;return!$g->result("SELECT sqlite_compileoption_used('OMIT_FOREIGN_KEY')");}function
fields($h){$c=array();foreach(get_rows("PRAGMA table_info(".table($h).")")as$a){$z=strtolower($a["type"]);$Ba=$a["dflt_value"];$c[$a["name"]]=array("field"=>$a["name"],"type"=>(eregi("int",$z)?"integer":(eregi("char|clob|text",$z)?"text":(eregi("blob",$z)?"blob":(eregi("real|floa|doub",$z)?"real":"numeric")))),"full_type"=>$z,"default"=>(ereg("'(.*)'",$Ba,$k)?str_replace("''","'",$k[1]):($Ba=="NULL"?null:$Ba)),"null"=>!$a["notnull"],"auto_increment"=>eregi('^integer$',$z)&&$a["pk"],"privileges"=>array("select"=>1,"insert"=>1,"update"=>1),"primary"=>$a["pk"],);}return$c;}function
indexes($h,$G=null){$c=array();$La=array();foreach(fields($h)as$d){if($d["primary"]){$La[]=$d["field"];}}if($La){$c[""]=array("type"=>"PRIMARY","columns"=>$La,"lengths"=>array());}foreach(get_rows("PRAGMA index_list(".table($h).")")as$a){$c[$a["name"]]["type"]=($a["unique"]?"UNIQUE":"INDEX");$c[$a["name"]]["lengths"]=array();foreach(get_rows("PRAGMA index_info(".idf_escape($a["name"]).")")as$ad){$c[$a["name"]]["columns"][]=$ad["name"];}}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("PRAGMA foreign_key_list(".table($h).")")as$a){$A=&$c[$a["id"]];if(!$A){$A=$a;}$A["source"][]=$a["from"];$A["target"][]=$a["to"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`"[]+|`[^`]*`|"[^"]*")* AS\\s+~iU','',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f))));}function
collations(){return(isset($_GET["create"])?get_vals("PRAGMA collation_list",1):array());}function
information_schema($s){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
check_sqlite_name($f){global$g;$Ge="db|sdb|sqlite";if(!preg_match("~^[^\\0]*\\.($Ge)\$~",$f)){$g->error=sprintf('Please use one of the extensions %s.',str_replace("|",", ",$Ge));return
false;}return
true;}function
create_database($s,$U){global$g;if(file_exists($s)){$g->error='File exists.';return
false;}if(!check_sqlite_name($s)){return
false;}$x=new
Min_SQLite($s);$x->query('PRAGMA encoding = "UTF-8"');$x->query('CREATE TABLE adminer (i)');$x->query('DROP TABLE adminer');return
true;}function
drop_databases($_){global$g;$g->Min_SQLite(":memory:");foreach($_
as$s){if(!@unlink($s)){$g->error='File exists.';return
false;}}return
true;}function
rename_database($f,$U){global$g;if(!check_sqlite_name($f)){return
false;}$g->Min_SQLite(":memory:");$g->error='File exists.';return@rename(DB,$f);}function
auto_increment(){return" PRIMARY KEY".(DRIVER=="sqlite"?" AUTOINCREMENT":"");}function
alter_table($h,$f,$p,$Oa,$va,$vb,$U,$Ta,$tb){$v=array();foreach($p
as$d){if($d[1]){$v[]=($h!=""&&$d[0]==""?"ADD ":"  ").implode($d[1]);}}$v=array_merge($v,$Oa);if($h!=""){foreach($v
as$b){if(!queries("ALTER TABLE ".table($h)." $b")){return
false;}}if($h!=$f&&!queries("ALTER TABLE ".table($h)." RENAME TO ".table($f))){return
false;}}elseif(!queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)")){return
false;}if($Ta){queries("UPDATE sqlite_sequence SET seq = $Ta WHERE name = ".q($f));}return
true;}function
alter_indexes($h,$v){foreach($v
as$b){if(!queries($b[2]=="DROP"?"DROP INDEX ".idf_escape($b[1]):"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return
true;}function
truncate_tables($E){return
apply_queries("DELETE FROM",$E);}function
drop_views($W){return
apply_queries("DROP VIEW",$W);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
move_tables($E,$W,$da){return
false;}function
trigger($f){global$g;preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s+([a-z]+)\\s+ON\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*(?:FOR\\s*EACH\\s*ROW\\s)?(.*)~is',$g->result("SELECT sql FROM sqlite_master WHERE name = ".q($f)),$k);return
array("Timing"=>strtoupper($k[1]),"Event"=>strtoupper($k[2]),"Trigger"=>$f,"Statement"=>$k[3]);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM sqlite_master WHERE type = 'trigger' AND tbl_name = ".q($h))as$a){preg_match('~^CREATE\\s+TRIGGER\\s*(?:[^`"\\s]+|`[^`]*`|"[^"]*")+\\s*([a-z]+)\\s*([a-z]+)~i',$a["sql"],$k);$c[$a["name"]]=array($k[1],$k[2]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER","INSTEAD OF"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){}function
routines(){}function
routine_languages(){}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$La){return
queries("REPLACE INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ROWID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Hd){return
true;}function
create_sql($h,$Ta){global$g;return$g->result("SELECT sql FROM sqlite_master WHERE type = 'table' AND name = ".q($h));}function
truncate_sql($h){return"DELETE FROM ".table($h);}function
use_sql($ea){}function
trigger_sql($h,$V){return
implode(get_vals("SELECT sql || ';;\n' FROM sqlite_master WHERE type = 'trigger' AND name = ".q($h)));}function
show_variables(){global$g;$c=array();foreach(array("auto_vacuum","cache_size","count_changes","default_cache_size","empty_result_callbacks","encoding","foreign_keys","full_column_names","fullfsync","journal_mode","journal_size_limit","legacy_file_format","locking_mode","page_size","max_page_count","read_uncommitted","recursive_triggers","reverse_unordered_selects","secure_delete","short_column_names","synchronous","temp_store","temp_store_directory","schema_version","integrity_check","quick_check")as$e){$c[$e]=$g->result("PRAGMA $e");}return$c;}function
show_status(){$c=array();foreach(get_vals("PRAGMA compile_options")as$lf){list($e,$b)=explode("=",$lf,2);$c[$e]=$b;}return$c;}function
support($pb){return
ereg('^(view|trigger|variables|status|dump)$',$pb);}$u="sqlite";$Q=array("integer"=>0,"real"=>0,"numeric"=>0,"text"=>0,"blob"=>0);$Ia=array_keys($Q);$ib=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ba=array("hex","length","lower","round","unixepoch","upper");$jb=array("avg","count","count distinct","group_concat","max","min","sum");$Nb=array(array(),array("integer|real|numeric"=>"+/-","text"=>"||",));}$la["pgsql"]="PostgreSQL";if(isset($_GET["pgsql"])){$rc=array("PgSQL","PDO_PgSQL");define("DRIVER","pgsql");if(extension_loaded("pgsql")){class
Min_DB{var$extension="PgSQL",$_link,$_result,$_string,$_database=true,$server_info,$affected_rows,$error;function
_error($gf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$P,$T){global$o;$s=$o->database();set_error_handler(array($this,'_error'));$this->_string="host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' user='".addcslashes($P,"'\\")."' password='".addcslashes($T,"'\\")."'";$this->_link=@pg_connect($this->_string.($s!=""?" dbname='".addcslashes($s,"'\\")."'":" dbname='template1'"),PGSQL_CONNECT_FORCE_NEW);if(!$this->_link&&$s!=""){$this->_database=false;$this->_link=@pg_connect("$this->_string dbname='template1'",PGSQL_CONNECT_FORCE_NEW);}restore_error_handler();if($this->_link){$Cd=pg_version($this->_link);$this->server_info=$Cd["server"];pg_set_client_encoding($this->_link,"UTF8");}return(bool)$this->_link;}function
quote($I){return"'".pg_escape_string($this->_link,$I)."'";}function
select_db($ea){global$o;if($ea==$o->database()){return$this->_database;}$c=@pg_connect("$this->_string dbname='".addcslashes($ea,"'\\")."'",PGSQL_CONNECT_FORCE_NEW);if($c){$this->_link=$c;}return$c;}function
close(){$this->_link=@pg_connect("$this->_string dbname='template1'");}function
query($i,$Wa=false){$j=@pg_query($this->_link,$i);if(!$j){$this->error=pg_last_error($this->_link);return
false;}elseif(!pg_num_fields($j)){$this->affected_rows=pg_affected_rows($j);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
pg_fetch_result($j->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=pg_num_rows($j);}function
fetch_assoc(){return
pg_fetch_assoc($this->_result);}function
fetch_row(){return
pg_fetch_row($this->_result);}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;if(function_exists('pg_field_table')){$c->orgtable=pg_field_table($this->_result,$C);}$c->name=pg_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=pg_field_type($this->_result,$C);$c->charsetnr=($c->type=="bytea"?63:0);return$c;}function
__destruct(){pg_free_result($this->_result);}}}elseif(extension_loaded("pdo_pgsql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_PgSQL";function
connect($F,$P,$T){global$o;$s=$o->database();$I="pgsql:host='".str_replace(":","' port='",addcslashes($F,"'\\"))."' options='-c client_encoding=utf8'";$this->dsn($I.($s!=""?" dbname='".addcslashes($s,"'\\")."'":""),$P,$T);return
true;}function
select_db($ea){global$o;return($o->database()==$ea);}function
close(){}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$za=$o->credentials();if($g->connect($za[0],$za[1],$za[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT datname FROM pg_database");}function
limit($i,$t,$M,$N=0,$Xa=" "){return" $i$t".(isset($M)?$Xa."LIMIT $M".($N?" OFFSET $N":""):"");}function
limit1($i,$t){return" $i$t";}function
db_collation($s,$Z){global$g;return$g->result("SHOW LC_COLLATE");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT user");}function
tables_list(){return
get_key_vals("SELECT table_name, table_type FROM information_schema.tables WHERE table_schema = current_schema() ORDER BY table_name");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();foreach(get_rows("SELECT relname AS \"Name\", CASE relkind WHEN 'r' THEN '' ELSE 'view' END AS \"Engine\", pg_relation_size(oid) AS \"Data_length\", pg_total_relation_size(oid) - pg_relation_size(oid) AS \"Index_length\", obj_description(oid, 'pg_class') AS \"Comment\", relhasoids AS \"Oid\"
FROM pg_class
WHERE relkind IN ('r','v')
AND relnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())".($f!=""?" AND relname = ".q($f):""))as$a){$c[$a["Name"]]=$a;}return($f!=""?$c[$f]:$c);}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT a.attname AS field, format_type(a.atttypid, a.atttypmod) AS full_type, d.adsrc AS default, a.attnotnull, col_description(c.oid, a.attnum) AS comment
FROM pg_class c
JOIN pg_namespace n ON c.relnamespace = n.oid
JOIN pg_attribute a ON c.oid = a.attrelid
LEFT JOIN pg_attrdef d ON c.oid = d.adrelid AND a.attnum = d.adnum
WHERE c.relname = ".q($h)."
AND n.nspname = current_schema()
AND NOT a.attisdropped
AND a.attnum > 0
ORDER BY a.attnum")as$a){ereg('(.*)(\\((.*)\\))?',$a["full_type"],$k);list(,$a["type"],,$a["length"])=$k;$a["full_type"]=$a["type"].($a["length"]?"($a[length])":"");$a["null"]=($a["attnotnull"]=="f");$a["auto_increment"]=eregi("^nextval\\(",$a["default"]);$a["privileges"]=array("insert"=>1,"select"=>1,"update"=>1);if(preg_match('~^(.*)::.+$~',$a["default"],$k)){$a["default"]=($k[1][0]=="'"?idf_unescape($k[1]):$k[1]);}$c[$a["field"]]=$a;}return$c;}function
indexes($h,$G=null){global$g;if(!is_object($G)){$G=$g;}$c=array();$Oe=$G->result("SELECT oid FROM pg_class WHERE relname = ".q($h));$B=get_key_vals("SELECT attnum, attname FROM pg_attribute WHERE attrelid = $Oe AND attnum > 0",$G);foreach(get_rows("SELECT relname, indisunique, indisprimary, indkey FROM pg_index i, pg_class ci WHERE i.indrelid = $Oe AND ci.oid = i.indexrelid",$G)as$a){$c[$a["relname"]]["type"]=($a["indisprimary"]=="t"?"PRIMARY":($a["indisunique"]=="t"?"UNIQUE":"INDEX"));$c[$a["relname"]]["columns"]=array();foreach(explode(" ",$a["indkey"])as$jf){$c[$a["relname"]]["columns"][]=$B[$jf];}$c[$a["relname"]]["lengths"]=array();}return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("SELECT tc.constraint_name, kcu.column_name, rc.update_rule AS on_update, rc.delete_rule AS on_delete, unique_constraint_schema AS ns, ccu.table_name AS table, ccu.column_name AS ref
FROM information_schema.table_constraints tc
LEFT JOIN information_schema.key_column_usage kcu USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.referential_constraints rc USING (constraint_catalog, constraint_schema, constraint_name)
LEFT JOIN information_schema.constraint_column_usage ccu ON rc.unique_constraint_catalog = ccu.constraint_catalog AND rc.unique_constraint_schema = ccu.constraint_schema AND rc.unique_constraint_name = ccu.constraint_name
WHERE tc.constraint_type = 'FOREIGN KEY' AND tc.constraint_schema = current_schema() AND tc.table_name = ".q($h))as$a){$A=&$c[$a["constraint_name"]];if(!$A){$A=$a;}$A["source"][]=$a["column_name"];$A["target"][]=$a["ref"];}return$c;}function
view($f){global$g;return
array("select"=>$g->result("SELECT pg_get_viewdef(".q($f).")"));}function
collations(){return
array();}function
information_schema($s){return($s=="information_schema");}function
error(){global$g;$c=h($g->error);if(preg_match('~^(.*\\n)?([^\\n]*)\\n( *)\\^(\\n.*)?$~s',$c,$k)){$c=$k[1].preg_replace('~((?:[^&]|&[^;]*;){'.strlen($k[3]).'})(.*)~','\\1<b>\\2</b>',$k[2]).$k[4];}return
nl_br($c);}function
exact_value($b){return
q($b);}function
create_database($s,$U){return
queries("CREATE DATABASE ".idf_escape($s).($U?" ENCODING ".idf_escape($U):""));}function
drop_databases($_){global$g;$g->close();return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){return
queries("ALTER DATABASE ".idf_escape(DB)." RENAME TO ".idf_escape($f));}function
auto_increment(){return"";}function
alter_table($h,$f,$p,$Oa,$va,$vb,$U,$Ta,$tb){$v=array();$gb=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$v[]="DROP $C";}else{$zd=$b[5];unset($b[5]);if(isset($b[6])&&$d[0]==""){$b[1]=($b[1]=="bigint"?" big":" ")."serial";}if($d[0]==""){$v[]=($h!=""?"ADD ":"  ").implode($b);}else{if($C!=$b[0]){$gb[]="ALTER TABLE ".table($h)." RENAME $C TO $b[0]";}$v[]="ALTER $C TYPE$b[1]";if(!$b[6]){$v[]="ALTER $C ".($b[3]?"SET$b[3]":"DROP DEFAULT");$v[]="ALTER $C ".($b[2]==" NULL"?"DROP NOT":"SET").$b[2];}}if($d[0]!=""||$zd!=""){$gb[]="COMMENT ON COLUMN ".table($h).".$b[0] IS ".($zd!=""?substr($zd,9):"''");}}}$v=array_merge($v,$Oa);if($h==""){array_unshift($gb,"CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)");}elseif($v){array_unshift($gb,"ALTER TABLE ".table($h)."\n".implode(",\n",$v));}if($h!=""&&$h!=$f){$gb[]="ALTER TABLE ".table($h)." RENAME TO ".table($f);}if($h!=""||$va!=""){$gb[]="COMMENT ON TABLE ".table($f)." IS ".q($va);}if($Ta!=""){}foreach($gb
as$i){if(!queries($i)){return
false;}}return
true;}function
alter_indexes($h,$v){$ka=array();$Ga=array();foreach($v
as$b){if($b[0]!="INDEX"){$ka[]=($b[2]=="DROP"?"\nDROP CONSTRAINT ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").$b[2]);}elseif($b[2]=="DROP"){$Ga[]=idf_escape($b[1]);}elseif(!queries("CREATE INDEX ".idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h)." $b[2]")){return
false;}}return((!$ka||queries("ALTER TABLE ".table($h).implode(",",$ka)))&&(!$Ga||queries("DROP INDEX ".implode(", ",$Ga))));}function
truncate_tables($E){return
queries("TRUNCATE ".implode(", ",array_map('table',$E)));return
true;}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$da){foreach($E
as$h){if(!queries("ALTER TABLE ".table($h)." SET SCHEMA ".idf_escape($da))){return
false;}}foreach($W
as$h){if(!queries("ALTER VIEW ".table($h)." SET SCHEMA ".idf_escape($da))){return
false;}}return
true;}function
trigger($f){$H=get_rows('SELECT trigger_name AS "Trigger", condition_timing AS "Timing", event_manipulation AS "Event", \'FOR EACH \' || action_orientation AS "Type", action_statement AS "Statement" FROM information_schema.triggers WHERE event_object_table = '.q($_GET["trigger"]).' AND trigger_name = '.q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SELECT * FROM information_schema.triggers WHERE event_object_table = ".q($h))as$a){$c[$a["trigger_name"]]=array($a["condition_timing"],$a["event_manipulation"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW","FOR EACH STATEMENT"),);}function
routines(){return
get_rows('SELECT p.proname AS "ROUTINE_NAME", p.proargtypes AS "ROUTINE_TYPE", pg_catalog.format_type(p.prorettype, NULL) AS "DTD_IDENTIFIER"
FROM pg_catalog.pg_namespace n
JOIN pg_catalog.pg_proc p ON p.pronamespace = n.oid
WHERE n.nspname = current_schema()
ORDER BY p.proname');}function
routine_languages(){return
get_vals("SELECT langname FROM pg_catalog.pg_language");}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$La){global$g;$oa=array();$t=array();foreach($r
as$e=>$b){$oa[]="$e = $b";if(isset($La[idf_unescape($e)])){$t[]="$e = $b";}}return($t&&queries("UPDATE ".table($h)." SET ".implode(", ",$oa)." WHERE ".implode(" AND ",$t))&&$g->affected_rows)||queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
get_vals("SELECT typname
FROM pg_type
WHERE typnamespace = (SELECT oid FROM pg_namespace WHERE nspname = current_schema())
AND typtype IN ('b','d','e')
AND typelem = 0");}function
schemas(){return
get_vals("SELECT nspname FROM pg_namespace");}function
get_schema(){global$g;return$g->result("SELECT current_schema()");}function
set_schema($Ja){global$g,$Q,$Ia;$c=$g->query("SET search_path TO ".idf_escape($Ja));foreach(types()as$z){if(!isset($Q[$z])){$Q[$z]=0;$Ia['User types'][]=$z;}}return$c;}function
use_sql($ea){return"\connect ".idf_escape($ea);}function
show_variables(){return
get_key_vals("SHOW ALL");}function
process_list(){return
get_rows("SELECT * FROM pg_stat_activity ORDER BY procpid");}function
show_status(){}function
support($pb){return
ereg('^(comment|view|scheme|processlist|sequence|trigger|type|variables|drop_col)$',$pb);}$u="pgsql";$Q=array();$Ia=array();foreach(array('Numbers'=>array("smallint"=>5,"integer"=>10,"bigint"=>19,"boolean"=>1,"numeric"=>0,"real"=>7,"double precision"=>16,"money"=>20),'Date and time'=>array("date"=>13,"time"=>17,"timestamp"=>20,"interval"=>0),'Strings'=>array("character"=>0,"character varying"=>0,"text"=>0,"tsquery"=>0,"tsvector"=>0,"uuid"=>0,"xml"=>0),'Binary'=>array("bit"=>0,"bit varying"=>0,"bytea"=>0),'Network'=>array("cidr"=>43,"inet"=>43,"macaddr"=>17,"txid_snapshot"=>0),'Geometry'=>array("box"=>0,"circle"=>0,"line"=>0,"lseg"=>0,"path"=>0,"point"=>0,"polygon"=>0),)as$e=>$b){$Q+=$b;$Ia[$e]=array_keys($b);}$ib=array();$ec=array("=","<",">","<=",">=","!=","~","!~","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ba=array("char_length","lower","round","to_hex","to_timestamp","upper");$jb=array("avg","count","count distinct","max","min","sum");$Nb=array(array("char"=>"md5","date|time"=>"now",),array("int|numeric|real|money"=>"+/-","date|time"=>"+ interval/- interval","char|text"=>"||",));}$la["oracle"]="Oracle";if(isset($_GET["oracle"])){$rc=array("OCI8","PDO_OCI");define("DRIVER","oracle");if(extension_loaded("oci8")){class
Min_DB{var$extension="oci8",$_link,$_result,$server_info,$affected_rows,$error;function
_error($gf,$n){if(ini_bool("html_errors")){$n=html_entity_decode(strip_tags($n));}$n=ereg_replace('^[^:]*: ','',$n);$this->error=$n;}function
connect($F,$P,$T){$this->_link=@oci_new_connect($P,$T,$F,"AL32UTF8");if($this->_link){$this->server_info=oci_server_version($this->_link);return
true;}$n=oci_error();$this->error=$n["message"];return
false;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($ea){return
true;}function
query($i,$Wa=false){$j=oci_parse($this->_link,$i);if(!$j){$n=oci_error($this->_link);$this->error=$n["message"];return
false;}set_error_handler(array($this,'_error'));$c=@oci_execute($j);restore_error_handler();if($c){if(oci_num_fields($j)){return
new
Min_Result($j);}$this->affected_rows=oci_num_rows($j);}return$c;}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=1){$j=$this->query($i);if(!is_object($j)||!oci_fetch($j->_result)){return
false;}return
oci_result($j->_result,$d);}}class
Min_Result{var$_result,$_offset=1,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'OCI-Lob')){$a[$e]=$b->load();}}return$a;}function
fetch_assoc(){return$this->_convert(oci_fetch_assoc($this->_result));}function
fetch_row(){return$this->_convert(oci_fetch_row($this->_result));}function
fetch_field(){$C=$this->_offset++;$c=new
stdClass;$c->name=oci_field_name($this->_result,$C);$c->orgname=$c->name;$c->type=oci_field_type($this->_result,$C);$c->charsetnr=(ereg("raw|blob|bfile",$c->type)?63:0);return$c;}function
__destruct(){oci_free_statement($this->_result);}}}elseif(extension_loaded("pdo_oci")){class
Min_DB
extends
Min_PDO{var$extension="PDO_OCI";function
connect($F,$P,$T){$this->dsn("oci:dbname=//$F;charset=AL32UTF8",$P,$T);return
true;}function
select_db($ea){return
true;}}}function
idf_escape($S){return'"'.str_replace('"','""',$S).'"';}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$za=$o->credentials();if($g->connect($za[0],$za[1],$za[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("SELECT tablespace_name FROM user_tablespaces");}function
limit($i,$t,$M,$N=0,$Xa=" "){return($N?" * FROM (SELECT t.*, rownum AS rnum FROM (SELECT $i$t) t WHERE rownum <= ".($M+$N).") WHERE rnum > $N":(isset($M)?" * FROM (SELECT $i$t) WHERE rownum <= ".($M+$N):" $i$t"));}function
limit1($i,$t){return" $i$t";}function
db_collation($s,$Z){global$g;return$g->result("SELECT value FROM nls_database_parameters WHERE parameter = 'NLS_CHARACTERSET'");}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT USER FROM DUAL");}function
tables_list(){return
get_key_vals("SELECT table_name, 'table' FROM all_tables WHERE tablespace_name = ".q(DB)."
UNION SELECT view_name, 'view' FROM user_views");}function
count_tables($_){return
array();}function
table_status($f=""){$c=array();$Me=q($f);foreach(get_rows('SELECT table_name "Name", \'table\' "Engine" FROM all_tables WHERE tablespace_name = '.q(DB).($f!=""?" AND table_name = $Me":"")."
UNION SELECT view_name, 'view' FROM user_views".($f!=""?" WHERE view_name = $Me":""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return$D["Engine"]=="view";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT * FROM all_tab_columns WHERE table_name = ".q($h)." ORDER BY column_id")as$a){$z=$a["DATA_TYPE"];$X="$a[DATA_PRECISION],$a[DATA_SCALE]";if($X==","){$X=$a["DATA_LENGTH"];}$c[$a["COLUMN_NAME"]]=array("field"=>$a["COLUMN_NAME"],"full_type"=>$z.($X?"($X)":""),"type"=>strtolower($z),"length"=>$X,"default"=>$a["DATA_DEFAULT"],"null"=>($a["NULLABLE"]=="Y"),"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SELECT uic.*, uc.constraint_type
FROM user_ind_columns uic
LEFT JOIN user_constraints uc ON uic.index_name = uc.constraint_name AND uic.table_name = uc.table_name
WHERE uic.table_name = ".q($h)."
ORDER BY uc.constraint_type, uic.column_position",$G)as$a){$c[$a["INDEX_NAME"]]["type"]=($a["CONSTRAINT_TYPE"]=="P"?"PRIMARY":($a["CONSTRAINT_TYPE"]=="U"?"UNIQUE":"INDEX"));$c[$a["INDEX_NAME"]]["columns"][]=$a["COLUMN_NAME"];$c[$a["INDEX_NAME"]]["lengths"][]=($a["CHAR_LENGTH"]&&$a["CHAR_LENGTH"]!=$a["COLUMN_LENGTH"]?$a["CHAR_LENGTH"]:null);}return$c;}function
view($f){$H=get_rows('SELECT text "select" FROM user_views WHERE view_name = '.q($f));return
reset($H);}function
collations(){return
array();}function
information_schema($s){return
false;}function
error(){global$g;return
h($g->error);}function
exact_value($b){return
q($b);}function
explain($g,$i){$g->query("EXPLAIN PLAN FOR $i");return$g->query("SELECT * FROM plan_table");}function
alter_table($h,$f,$p,$Oa,$va,$vb,$U,$Ta,$tb){$v=$Ga=array();foreach($p
as$d){$b=$d[1];if($b&&$d[0]!=""&&idf_escape($d[0])!=$b[0]){queries("ALTER TABLE ".table($h)." RENAME COLUMN ".idf_escape($d[0])." TO $b[0]");}if($b){$v[]=($h!=""?($d[0]!=""?"MODIFY (":"ADD ("):"  ").implode($b).($h!=""?")":"");}else{$Ga[]=idf_escape($d[0]);}}if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n)");}return(!$v||queries("ALTER TABLE ".table($h)."\n".implode("\n",$v)))&&(!$Ga||queries("ALTER TABLE ".table($h)." DROP (".implode(", ",$Ga).")"))&&($h==$f||queries("ALTER TABLE ".table($h)." RENAME TO ".table($f)));}function
foreign_keys($h){return
array();}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
apply_queries("DROP VIEW",$W);}function
drop_tables($E){return
apply_queries("DROP TABLE",$E);}function
begin(){return
true;}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
last_id(){return
0;}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Hd){return
true;}function
show_variables(){return
get_key_vals('SELECT name, display_value FROM v$parameter');}function
show_status(){$H=get_rows('SELECT * FROM v$instance');return
reset($H);}function
support($pb){return
ereg("view|drop_col|variables|status",$pb);}$u="oracle";$Q=array();$Ia=array();foreach(array('Numbers'=>array("number"=>38,"binary_float"=>12,"binary_double"=>21),'Date and time'=>array("date"=>10,"timestamp"=>29,"interval year"=>12,"interval day"=>28),'Strings'=>array("char"=>2000,"varchar2"=>4000,"nchar"=>2000,"nvarchar2"=>4000,"clob"=>4294967295,"nclob"=>4294967295),'Binary'=>array("raw"=>2000,"long raw"=>2147483648,"blob"=>4294967295,"bfile"=>4294967296),)as$e=>$b){$Q+=$b;$Ia[$e]=array_keys($b);}$ib=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ba=array("length","lower","round","upper");$jb=array("avg","count","count distinct","max","min","sum");$Nb=array(array("date"=>"current_date","timestamp"=>"current_timestamp",),array("number|float|double"=>"+/-","date|timestamp"=>"+ interval/- interval","char|clob"=>"||",));}$la["mssql"]="MS SQL";if(isset($_GET["mssql"])){$rc=array("SQLSRV","MSSQL");define("DRIVER","mssql");if(extension_loaded("sqlsrv")){class
Min_DB{var$extension="sqlsrv",$_link,$_result,$server_info,$affected_rows,$error;function
_get_error(){$this->error="";foreach(sqlsrv_errors()as$n){$this->error.="$n[message]\n";}$this->error=rtrim($this->error);}function
connect($F,$P,$T){$this->_link=@sqlsrv_connect($F,array("UID"=>$P,"PWD"=>$T));if($this->_link){$sf=sqlsrv_server_info($this->_link);$this->server_info=$sf['SQLServerVersion'];}else{$this->_get_error();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($ea){return$this->query("USE $ea");}function
query($i,$Wa=false){$j=sqlsrv_query($this->_link,$i);if(!$j){$this->_get_error();return
false;}return$this->store_result($j);}function
multi_query($i){$this->_result=sqlsrv_query($this->_link,$i);if(!$this->_result){$this->_get_error();return
false;}return
true;}function
store_result($j=null){if(!$j){$j=$this->_result;}if(sqlsrv_field_metadata($j)){return
new
Min_Result($j);}$this->affected_rows=sqlsrv_rows_affected($j);return
true;}function
next_result(){return
sqlsrv_next_result($this->_result);}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}$a=$j->fetch_row();return$a[$d];}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;}function
_convert($a){foreach((array)$a
as$e=>$b){if(is_a($b,'DateTime')){$a[$e]=$b->format("Y-m-d H:i:s");}}return$a;}function
fetch_assoc(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_ASSOC,SQLSRV_SCROLL_NEXT));}function
fetch_row(){return$this->_convert(sqlsrv_fetch_array($this->_result,SQLSRV_FETCH_NUMERIC,SQLSRV_SCROLL_NEXT));}function
fetch_field(){if(!$this->_fields){$this->_fields=sqlsrv_field_metadata($this->_result);}$d=$this->_fields[$this->_offset++];$c=new
stdClass;$c->name=$d["Name"];$c->orgname=$d["Name"];$c->type=($d["Type"]==1?254:0);return$c;}function
seek($N){for($l=0;$l<$N;$l++){sqlsrv_fetch($this->_result);}}function
__destruct(){sqlsrv_free_stmt($this->_result);}}}elseif(extension_loaded("mssql")){class
Min_DB{var$extension="MSSQL",$_link,$_result,$server_info,$affected_rows,$error;function
connect($F,$P,$T){$this->_link=@mssql_connect($F,$P,$T);if($this->_link){$j=$this->query("SELECT SERVERPROPERTY('ProductLevel'), SERVERPROPERTY('Edition')");$a=$j->fetch_row();$this->server_info=$this->result("sp_server_info 2",2)." [$a[0]] $a[1]";}else{$this->error=mssql_get_last_message();}return(bool)$this->_link;}function
quote($I){return"'".str_replace("'","''",$I)."'";}function
select_db($ea){return
mssql_select_db($ea);}function
query($i,$Wa=false){$j=mssql_query($i,$this->_link);if(!$j){$this->error=mssql_get_last_message();return
false;}if($j===true){$this->affected_rows=mssql_rows_affected($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
mssql_next_result($this->_result);}function
result($i,$d=0){$j=$this->query($i);if(!is_object($j)){return
false;}return
mssql_result($j->_result,0,$d);}}class
Min_Result{var$_result,$_offset=0,$_fields,$num_rows;function
Min_Result($j){$this->_result=$j;$this->num_rows=mssql_num_rows($j);}function
fetch_assoc(){return
mssql_fetch_assoc($this->_result);}function
fetch_row(){return
mssql_fetch_row($this->_result);}function
num_rows(){return
mssql_num_rows($this->_result);}function
fetch_field(){$c=mssql_fetch_field($this->_result);$c->orgtable=$c->table;$c->orgname=$c->name;return$c;}function
seek($N){mssql_data_seek($this->_result,$N);}function
__destruct(){mssql_free_result($this->_result);}}}function
idf_escape($S){return"[".str_replace("]","]]",$S)."]";}function
table($S){return($_GET["ns"]!=""?idf_escape($_GET["ns"]).".":"").idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$za=$o->credentials();if($g->connect($za[0],$za[1],$za[2])){return$g;}return$g->error;}function
get_databases(){return
get_vals("EXEC sp_databases");}function
limit($i,$t,$M,$N=0,$Xa=" "){return(isset($M)?" TOP (".($M+$N).")":"")." $i$t";}function
limit1($i,$t){return
limit($i,$t,1);}function
db_collation($s,$Z){global$g;return$g->result("SELECT collation_name FROM sys.databases WHERE name =  ".q($s));}function
engines(){return
array();}function
logged_user(){global$g;return$g->result("SELECT SUSER_NAME()");}function
tables_list(){return
get_key_vals("SELECT name, type_desc FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V') ORDER BY name");}function
count_tables($_){global$g;$c=array();foreach($_
as$s){$g->select_db($s);$c[$s]=$g->result("SELECT COUNT(*) FROM INFORMATION_SCHEMA.TABLES");}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SELECT name AS Name, type_desc AS Engine FROM sys.all_objects WHERE schema_id = SCHEMA_ID(".q(get_schema()).") AND type IN ('S', 'U', 'V')".($f!=""?" AND name = ".q($f):""))as$a){if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return$D["Engine"]=="VIEW";}function
fk_support($D){return
true;}function
fields($h){$c=array();foreach(get_rows("SELECT c.*, t.name type, d.definition [default]
FROM sys.all_columns c
JOIN sys.all_objects o ON c.object_id = o.object_id
JOIN sys.types t ON c.user_type_id = t.user_type_id
LEFT JOIN sys.default_constraints d ON c.default_object_id = d.parent_column_id
WHERE o.schema_id = SCHEMA_ID(".q(get_schema()).") AND o.type IN ('S', 'U', 'V') AND o.name = ".q($h))as$a){$z=$a["type"];$X=(ereg("char|binary",$z)?$a["max_length"]:($z=="decimal"?"$a[precision],$a[scale]":""));$c[$a["name"]]=array("field"=>$a["name"],"full_type"=>$z.($X?"($X)":""),"type"=>$z,"length"=>$X,"default"=>$a["default"],"null"=>$a["is_nullable"],"auto_increment"=>$a["is_identity"],"collation"=>$a["collation_name"],"privileges"=>array("insert"=>1,"select"=>1,"update"=>1),"primary"=>$a["is_identity"],);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SELECT i.name, key_ordinal, is_unique, is_primary_key, c.name AS column_name
FROM sys.indexes i
INNER JOIN sys.index_columns ic ON i.object_id = ic.object_id AND i.index_id = ic.index_id
INNER JOIN sys.columns c ON ic.object_id = c.object_id AND ic.column_id = c.column_id
WHERE OBJECT_NAME(i.object_id) = ".q($h),$G)as$a){$c[$a["name"]]["type"]=($a["is_primary_key"]?"PRIMARY":($a["is_unique"]?"UNIQUE":"INDEX"));$c[$a["name"]]["lengths"]=array();$c[$a["name"]]["columns"][$a["key_ordinal"]]=$a["column_name"];}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^[]|\\[[^]]*])*\\s+AS\\s+~isU','',$g->result("SELECT VIEW_DEFINITION FROM INFORMATION_SCHEMA.VIEWS WHERE TABLE_SCHEMA = SCHEMA_NAME() AND TABLE_NAME = ".q($f))));}function
collations(){$c=array();foreach(get_vals("SELECT name FROM fn_helpcollations()")as$U){$c[ereg_replace("_.*","",$U)][]=$U;}return$c;}function
information_schema($s){return
false;}function
error(){global$g;return
nl_br(h(preg_replace('~^(\\[[^]]*])+~m','',$g->error)));}function
exact_value($b){return
q($b);}function
create_database($s,$U){return
queries("CREATE DATABASE ".idf_escape($s).(eregi('^[a-z0-9_]+$',$U)?" COLLATE $U":""));}function
drop_databases($_){return
queries("DROP DATABASE ".implode(", ",array_map('idf_escape',$_)));}function
rename_database($f,$U){if(eregi('^[a-z0-9_]+$',$U)){queries("ALTER DATABASE ".idf_escape(DB)." COLLATE $U");}queries("ALTER DATABASE ".idf_escape(DB)." MODIFY NAME = ".idf_escape($f));return
true;}function
auto_increment(){return" IDENTITY".($_POST["Auto_increment"]!=""?"(".(+$_POST["Auto_increment"]).",1)":"")." PRIMARY KEY";}function
alter_table($h,$f,$p,$Oa,$va,$vb,$U,$Ta,$tb){$v=array();foreach($p
as$d){$C=idf_escape($d[0]);$b=$d[1];if(!$b){$v["DROP"][]=" COLUMN $C";}else{$b[1]=preg_replace("~( COLLATE )'(\\w+)'~","\\1\\2",$b[1]);if($d[0]==""){$v["ADD"][]="\n  ".implode("",$b).($h==""?substr($Oa[$b[0]],16+strlen($b[0])):"");}else{unset($b[6]);if($C!=$b[0]){queries("EXEC sp_rename ".q(table($h).".$C").", ".q(idf_unescape($b[0])).", 'COLUMN'");}$v["ALTER COLUMN ".implode("",$b)][]="";}}}if($h==""){return
queries("CREATE TABLE ".table($f)." (".implode(",",(array)$v["ADD"])."\n)");}if($h!=$f){queries("EXEC sp_rename ".q(table($h)).", ".q($f));}if($Oa){$v[""]=$Oa;}foreach($v
as$e=>$b){if(!queries("ALTER TABLE ".idf_escape($f)." $e".implode(",",$b))){return
false;}}return
true;}function
alter_indexes($h,$v){$w=array();$Ga=array();foreach($v
as$b){if($b[2]=="DROP"){if($b[0]=="PRIMARY"){$Ga[]=idf_escape($b[1]);}else{$w[]=idf_escape($b[1])." ON ".table($h);}}elseif(!queries(($b[0]!="PRIMARY"?"CREATE $b[0] ".($b[0]!="INDEX"?"INDEX ":"").idf_escape($b[1]!=""?$b[1]:uniqid($h."_"))." ON ".table($h):"ALTER TABLE ".table($h)." ADD PRIMARY KEY")." $b[2]")){return
false;}}return(!$w||queries("DROP INDEX ".implode(", ",$w)))&&(!$Ga||queries("ALTER TABLE ".table($h)." DROP ".implode(", ",$Ga)));}function
begin(){return
queries("BEGIN TRANSACTION");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h).($r?" (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")":"DEFAULT VALUES"));}function
insert_update($h,$r,$La){$oa=array();$t=array();foreach($r
as$e=>$b){$oa[]="$e = $b";if(isset($La[idf_unescape($e)])){$t[]="$e = $b";}}return
queries("MERGE ".table($h)." USING (VALUES(".implode(", ",$r).")) AS source (c".implode(", c",range(1,count($r))).") ON ".implode(" AND ",$t)." WHEN MATCHED THEN UPDATE SET ".implode(", ",$oa)." WHEN NOT MATCHED THEN INSERT (".implode(", ",array_keys($r)).") VALUES (".implode(", ",$r).");");}function
last_id(){global$g;return$g->result("SELECT SCOPE_IDENTITY()");}function
explain($g,$i){$g->query("SET SHOWPLAN_ALL ON");$c=$g->query($i);$g->query("SET SHOWPLAN_ALL OFF");return$c;}function
foreign_keys($h){$c=array();foreach(get_rows("EXEC sp_fkeys @fktable_name = ".q($h))as$a){$A=&$c[$a["FK_NAME"]];$A["table"]=$a["PKTABLE_NAME"];$A["source"][]=$a["FKCOLUMN_NAME"];$A["target"][]=$a["PKCOLUMN_NAME"];}return$c;}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$da){return
apply_queries("ALTER SCHEMA ".idf_escape($da)." TRANSFER",array_merge($E,$W));}function
trigger($f){$H=get_rows("SELECT s.name [Trigger],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(s.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(s.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(s.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing],
c.text
FROM sysobjects s
JOIN syscomments c ON s.id = c.id
WHERE s.xtype = 'TR' AND s.name = ".q($f));$c=reset($H);if($c){$c["Statement"]=preg_replace('~^.+\\s+AS\\s+~isU','',$c["text"]);}return$c;}function
triggers($h){$c=array();foreach(get_rows("SELECT sys1.name,
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsertTrigger') = 1 THEN 'INSERT' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsUpdateTrigger') = 1 THEN 'UPDATE' WHEN OBJECTPROPERTY(sys1.id, 'ExecIsDeleteTrigger') = 1 THEN 'DELETE' END [Event],
CASE WHEN OBJECTPROPERTY(sys1.id, 'ExecIsInsteadOfTrigger') = 1 THEN 'INSTEAD OF' ELSE 'AFTER' END [Timing]
FROM sysobjects sys1
JOIN sysobjects sys2 ON sys1.parent_obj = sys2.id
WHERE sys1.xtype = 'TR' AND sys2.name = ".q($h))as$a){$c[$a["name"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("AFTER","INSTEAD OF"),"Type"=>array("AS"),);}function
schemas(){return
get_vals("SELECT name FROM sys.schemas");}function
get_schema(){global$g;if($_GET["ns"]!=""){return$_GET["ns"];}return$g->result("SELECT SCHEMA_NAME()");}function
set_schema($Ja){return
true;}function
use_sql($ea){return"USE ".idf_escape($ea);}function
show_variables(){return
array();}function
show_status(){return
array();}function
support($pb){return
ereg('^(scheme|trigger|view|drop_col)$',$pb);}$u="mssql";$Q=array();$Ia=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"int"=>10,"bigint"=>20,"bit"=>1,"decimal"=>0,"real"=>12,"float"=>53,"smallmoney"=>10,"money"=>20),'Date and time'=>array("date"=>10,"smalldatetime"=>19,"datetime"=>19,"datetime2"=>19,"time"=>8,"datetimeoffset"=>10),'Strings'=>array("char"=>8000,"varchar"=>8000,"text"=>2147483647,"nchar"=>4000,"nvarchar"=>4000,"ntext"=>1073741823),'Binary'=>array("binary"=>8000,"varbinary"=>8000,"image"=>2147483647),)as$e=>$b){$Q+=$b;$Ia[$e]=array_keys($b);}$ib=array();$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","IN","IS NULL","NOT LIKE","NOT IN","IS NOT NULL","");$ba=array("len","lower","round","upper");$jb=array("avg","count","count distinct","max","min","sum");$Nb=array(array("date|time"=>"getdate",),array("int|decimal|real|float|money|datetime"=>"+/-","char|text"=>"+",));}$la=array("server"=>"MySQL")+$la;if(!defined("DRIVER")){$rc=array("MySQLi","MySQL","PDO_MySQL");define("DRIVER","server");if(extension_loaded("mysqli")){class
Min_DB
extends
MySQLi{var$extension="MySQLi";function
Min_DB(){parent::init();}function
connect($F,$P,$T){mysqli_report(MYSQLI_REPORT_OFF);list($yf,$Lc)=explode(":",$F,2);$c=@$this->real_connect(($F!=""?$yf:ini_get("mysqli.default_host")),($F.$P!=""?$P:ini_get("mysqli.default_user")),($F.$P.$T!=""?$T:ini_get("mysqli.default_pw")),null,(is_numeric($Lc)?$Lc:ini_get("mysqli.default_port")),(!is_numeric($Lc)?$Lc:null));if($c){if(method_exists($this,'set_charset')){$this->set_charset("utf8");}else{$this->query("SET NAMES utf8");}}return$c;}function
result($i,$d=0){$j=$this->query($i);if(!$j){return
false;}$a=$j->fetch_array();return$a[$d];}function
quote($I){return"'".$this->escape_string($I)."'";}}}elseif(extension_loaded("mysql")){class
Min_DB{var$extension="MySQL",$server_info,$affected_rows,$error,$_link,$_result;function
connect($F,$P,$T){$this->_link=@mysql_connect(($F!=""?$F:ini_get("mysql.default_host")),("$F$P"!=""?$P:ini_get("mysql.default_user")),("$F$P$T"!=""?$T:ini_get("mysql.default_password")),true,131072);if($this->_link){$this->server_info=mysql_get_server_info($this->_link);if(function_exists('mysql_set_charset')){mysql_set_charset("utf8",$this->_link);}else{$this->query("SET NAMES utf8");}}else{$this->error=mysql_error();}return(bool)$this->_link;}function
quote($I){return"'".mysql_real_escape_string($I,$this->_link)."'";}function
select_db($ea){return
mysql_select_db($ea,$this->_link);}function
query($i,$Wa=false){$j=@($Wa?mysql_unbuffered_query($i,$this->_link):mysql_query($i,$this->_link));if(!$j){$this->error=mysql_error($this->_link);return
false;}if($j===true){$this->affected_rows=mysql_affected_rows($this->_link);$this->info=mysql_info($this->_link);return
true;}return
new
Min_Result($j);}function
multi_query($i){return$this->_result=$this->query($i);}function
store_result(){return$this->_result;}function
next_result(){return
false;}function
result($i,$d=0){$j=$this->query($i);if(!$j||!$j->num_rows){return
false;}return
mysql_result($j->_result,0,$d);}}class
Min_Result{var$num_rows,$_result,$_offset=0;function
Min_Result($j){$this->_result=$j;$this->num_rows=mysql_num_rows($j);}function
fetch_assoc(){return
mysql_fetch_assoc($this->_result);}function
fetch_row(){return
mysql_fetch_row($this->_result);}function
fetch_field(){$c=mysql_fetch_field($this->_result,$this->_offset++);$c->orgtable=$c->table;$c->orgname=$c->name;$c->charsetnr=($c->blob?63:0);return$c;}function
__destruct(){mysql_free_result($this->_result);}}}elseif(extension_loaded("pdo_mysql")){class
Min_DB
extends
Min_PDO{var$extension="PDO_MySQL";function
connect($F,$P,$T){$this->dsn("mysql:host=".str_replace(":",";unix_socket=",preg_replace('~:(\\d)~',';port=\\1',$F)),$P,$T);$this->query("SET NAMES utf8");return
true;}function
select_db($ea){return$this->query("USE ".idf_escape($ea));}function
query($i,$Wa=false){$this->setAttribute(1000,!$Wa);return
parent::query($i,$Wa);}}}function
idf_escape($S){return"`".str_replace("`","``",$S)."`";}function
table($S){return
idf_escape($S);}function
connect(){global$o;$g=new
Min_DB;$za=$o->credentials();if($g->connect($za[0],$za[1],$za[2])){$g->query("SET sql_quote_show_create = 1");return$g;}return$g->error;}function
get_databases($Qf=true){global$g;$c=&get_session("dbs");if(!isset($c)){if($Qf){restart_session();ob_flush();flush();}$c=get_vals($g->server_info>=5?"SELECT SCHEMA_NAME FROM information_schema.SCHEMATA":"SHOW DATABASES");}return$c;}function
limit($i,$t,$M,$N=0,$Xa=" "){return" $i$t".(isset($M)?$Xa."LIMIT $M".($N?" OFFSET $N":""):"");}function
limit1($i,$t){return
limit($i,$t,1);}function
db_collation($s,$Z){global$g;$c=null;$ka=$g->result("SHOW CREATE DATABASE ".idf_escape($s),1);if(preg_match('~ COLLATE ([^ ]+)~',$ka,$k)){$c=$k[1];}elseif(preg_match('~ CHARACTER SET ([^ ]+)~',$ka,$k)){$c=$Z[$k[1]][-1];}return$c;}function
engines(){$c=array();foreach(get_rows("SHOW ENGINES")as$a){if(ereg("YES|DEFAULT",$a["Support"])){$c[]=$a["Engine"];}}return$c;}function
logged_user(){global$g;return$g->result("SELECT USER()");}function
tables_list(){global$g;return
get_key_vals("SHOW".($g->server_info>=5?" FULL":"")." TABLES");}function
count_tables($_){$c=array();foreach($_
as$s){$c[$s]=count(get_vals("SHOW TABLES IN ".idf_escape($s)));}return$c;}function
table_status($f=""){$c=array();foreach(get_rows("SHOW TABLE STATUS".($f!=""?" LIKE ".q(addcslashes($f,"%_")):""))as$a){if($a["Engine"]=="InnoDB"){$a["Comment"]=preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["Comment"]);}if(!isset($a["Rows"])){$a["Comment"]="";}if($f!=""){return$a;}$c[$a["Name"]]=$a;}return$c;}function
is_view($D){return!isset($D["Rows"]);}function
fk_support($D){return
eregi("InnoDB|IBMDB2I",$D["Engine"]);}function
fields($h){$c=array();foreach(get_rows("SHOW FULL COLUMNS FROM ".table($h))as$a){preg_match('~^([^( ]+)(?:\\((.+)\\))?( unsigned)?( zerofill)?$~',$a["Type"],$k);$c[$a["Field"]]=array("field"=>$a["Field"],"full_type"=>$a["Type"],"type"=>$k[1],"length"=>$k[2],"unsigned"=>ltrim($k[3].$k[4]),"default"=>($a["Default"]!=""||ereg("char",$k[1])?$a["Default"]:null),"null"=>($a["Null"]=="YES"),"auto_increment"=>($a["Extra"]=="auto_increment"),"on_update"=>(eregi('^on update (.+)',$a["Extra"],$k)?$k[1]:""),"collation"=>$a["Collation"],"privileges"=>array_flip(explode(",",$a["Privileges"])),"comment"=>$a["Comment"],"primary"=>($a["Key"]=="PRI"),);}return$c;}function
indexes($h,$G=null){$c=array();foreach(get_rows("SHOW INDEX FROM ".table($h),$G)as$a){$c[$a["Key_name"]]["type"]=($a["Key_name"]=="PRIMARY"?"PRIMARY":($a["Index_type"]=="FULLTEXT"?"FULLTEXT":($a["Non_unique"]?"INDEX":"UNIQUE")));$c[$a["Key_name"]]["columns"][]=$a["Column_name"];$c[$a["Key_name"]]["lengths"][]=$a["Sub_part"];}return$c;}function
foreign_keys($h){global$g,$db;static$ca='`(?:[^`]|``)+`';$c=array();$Le=$g->result("SHOW CREATE TABLE ".table($h),1);if($Le){preg_match_all("~CONSTRAINT ($ca) FOREIGN KEY \\(((?:$ca,? ?)+)\\) REFERENCES ($ca)(?:\\.($ca))? \\(((?:$ca,? ?)+)\\)(?: ON DELETE (".implode("|",$db)."))?(?: ON UPDATE (".implode("|",$db)."))?~",$Le,$ta,PREG_SET_ORDER);foreach($ta
as$k){preg_match_all("~$ca~",$k[2],$Fa);preg_match_all("~$ca~",$k[5],$da);$c[idf_unescape($k[1])]=array("db"=>idf_unescape($k[4]!=""?$k[3]:$k[4]),"table"=>idf_unescape($k[4]!=""?$k[4]:$k[3]),"source"=>array_map('idf_unescape',$Fa[0]),"target"=>array_map('idf_unescape',$da[0]),"on_delete"=>$k[6],"on_update"=>$k[7],);}}return$c;}function
view($f){global$g;return
array("select"=>preg_replace('~^(?:[^`]|`[^`]*`)*\\s+AS\\s+~isU','',$g->result("SHOW CREATE VIEW ".table($f),1)));}function
collations(){$c=array();foreach(get_rows("SHOW COLLATION")as$a){if($a["Default"]){$c[$a["Charset"]][-1]=$a["Collation"];}else{$c[$a["Charset"]][]=$a["Collation"];}}ksort($c);foreach($c
as$e=>$b){asort($c[$e]);}return$c;}function
information_schema($s){global$g;return($g->server_info>=5&&$s=="information_schema");}function
error(){global$g;return
h(preg_replace('~^You have an error.*syntax to use~U',"Syntax error",$g->error));}function
exact_value($b){return
q($b)." COLLATE utf8_bin";}function
create_database($s,$U){set_session("dbs",null);return
queries("CREATE DATABASE ".idf_escape($s).($U?" COLLATE ".q($U):""));}function
drop_databases($_){set_session("dbs",null);return
apply_queries("DROP DATABASE",$_,'idf_escape');}function
rename_database($f,$U){if(create_database($f,$U)){$ac=array();foreach(tables_list()as$h=>$z){$ac[]=table($h)." TO ".idf_escape($f).".".table($h);}if(!$ac||queries("RENAME TABLE ".implode(", ",$ac))){queries("DROP DATABASE ".idf_escape(DB));return
true;}}return
false;}function
auto_increment(){$td=" PRIMARY KEY";if($_GET["create"]!=""&&$_POST["auto_increment_col"]){foreach(indexes($_GET["create"])as$w){if(in_array($_POST["fields"][$_POST["auto_increment_col"]]["orig"],$w["columns"],true)){$td="";break;}if($w["type"]=="PRIMARY"){$td=" UNIQUE";}}}return" AUTO_INCREMENT$td";}function
alter_table($h,$f,$p,$Oa,$va,$vb,$U,$Ta,$tb){$v=array();foreach($p
as$d){$v[]=($d[1]?($h!=""?($d[0]!=""?"CHANGE ".idf_escape($d[0]):"ADD"):" ")." ".implode($d[1]).($h!=""?" $d[2]":""):"DROP ".idf_escape($d[0]));}$v=array_merge($v,$Oa);$Vb="COMMENT=".q($va).($vb?" ENGINE=".q($vb):"").($U?" COLLATE ".q($U):"").($Ta!=""?" AUTO_INCREMENT=$Ta":"").$tb;if($h==""){return
queries("CREATE TABLE ".table($f)." (\n".implode(",\n",$v)."\n) $Vb");}if($h!=$f){$v[]="RENAME TO ".table($f);}$v[]=$Vb;return
queries("ALTER TABLE ".table($h)."\n".implode(",\n",$v));}function
alter_indexes($h,$v){foreach($v
as$e=>$b){$v[$e]=($b[2]=="DROP"?"\nDROP INDEX ".idf_escape($b[1]):"\nADD $b[0] ".($b[0]=="PRIMARY"?"KEY ":"").($b[1]!=""?idf_escape($b[1])." ":"").$b[2]);}return
queries("ALTER TABLE ".table($h).implode(",",$v));}function
truncate_tables($E){return
apply_queries("TRUNCATE TABLE",$E);}function
drop_views($W){return
queries("DROP VIEW ".implode(", ",array_map('table',$W)));}function
drop_tables($E){return
queries("DROP TABLE ".implode(", ",array_map('table',$E)));}function
move_tables($E,$W,$da){$ac=array();foreach(array_merge($E,$W)as$h){$ac[]=table($h)." TO ".idf_escape($da).".".table($h);}return
queries("RENAME TABLE ".implode(", ",$ac));}function
copy_tables($E,$W,$da){queries("SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO'");foreach($E
as$h){$f=($da==DB?table("copy_$h"):idf_escape($da).".".table($h));if(!queries("DROP TABLE IF EXISTS $f")||!queries("CREATE TABLE $f LIKE ".table($h))||!queries("INSERT INTO $f SELECT * FROM ".table($h))){return
false;}}foreach($W
as$h){$f=($da==DB?table("copy_$h"):idf_escape($da).".".table($h));$Ub=view($h);if(!queries("DROP VIEW IF EXISTS $f")||!queries("CREATE VIEW $f AS $Ub[select]")){return
false;}}return
true;}function
trigger($f){$H=get_rows("SHOW TRIGGERS WHERE `Trigger` = ".q($f));return
reset($H);}function
triggers($h){$c=array();foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")))as$a){$c[$a["Trigger"]]=array($a["Timing"],$a["Event"]);}return$c;}function
trigger_options(){return
array("Timing"=>array("BEFORE","AFTER"),"Type"=>array("FOR EACH ROW"),);}function
routine($f,$z){global$g,$Cb,$Sb,$Q;$Pf=array("bool","boolean","integer","double precision","real","dec","numeric","fixed","national char","national varchar");$Ee="((".implode("|",array_merge(array_keys($Q),$Pf)).")(?:\\s*\\(((?:[^'\")]*|$Cb)+)\\))?\\s*(zerofill\\s*)?(unsigned(?:\\s+zerofill)?)?)(?:\\s*(?:CHARSET|CHARACTER\\s+SET)\\s*['\"]?([^'\"\\s]+)['\"]?)?";$ca="\\s*(".($z=="FUNCTION"?"":$Sb).")?\\s*(?:`((?:[^`]|``)*)`\\s*|\\b(\\S+)\\s+)$Ee";$ka=$g->result("SHOW CREATE $z ".idf_escape($f),2);preg_match("~\\(((?:$ca\\s*,?)*)\\)".($z=="FUNCTION"?"\\s*RETURNS\\s+$Ee":"")."\\s*(.*)~is",$ka,$k);$p=array();preg_match_all("~$ca\\s*,?~is",$k[1],$ta,PREG_SET_ORDER);foreach($ta
as$eb){$f=str_replace("``","`",$eb[2]).$eb[3];$p[]=array("field"=>$f,"type"=>strtolower($eb[5]),"length"=>preg_replace_callback("~$Cb~s",'normalize_enum',$eb[6]),"unsigned"=>strtolower(preg_replace('~\\s+~',' ',trim("$eb[8] $eb[7]"))),"full_type"=>$eb[4],"inout"=>strtoupper($eb[1]),"collation"=>strtolower($eb[9]),);}if($z!="FUNCTION"){return
array("fields"=>$p,"definition"=>$k[11]);}return
array("fields"=>$p,"returns"=>array("type"=>$k[12],"length"=>$k[13],"unsigned"=>$k[15],"collation"=>$k[16]),"definition"=>$k[17],"language"=>"SQL",);}function
routines(){return
get_rows("SELECT * FROM information_schema.ROUTINES WHERE ROUTINE_SCHEMA = ".q(DB));}function
routine_languages(){return
array();}function
begin(){return
queries("BEGIN");}function
insert_into($h,$r){return
queries("INSERT INTO ".table($h)." (".implode(", ",array_keys($r)).")\nVALUES (".implode(", ",$r).")");}function
insert_update($h,$r,$La){foreach($r
as$e=>$b){$r[$e]="$e = $b";}$oa=implode(", ",$r);return
queries("INSERT INTO ".table($h)." SET $oa ON DUPLICATE KEY UPDATE $oa");}function
last_id(){global$g;return$g->result("SELECT LAST_INSERT_ID()");}function
explain($g,$i){return$g->query("EXPLAIN $i");}function
types(){return
array();}function
schemas(){return
array();}function
get_schema(){return"";}function
set_schema($Ja){return
true;}function
create_sql($h,$Ta){global$g;$c=$g->result("SHOW CREATE TABLE ".table($h),1);if(!$Ta){$c=preg_replace('~ AUTO_INCREMENT=\\d+~','',$c);}return$c;}function
truncate_sql($h){return"TRUNCATE ".table($h);}function
use_sql($ea){return"USE ".idf_escape($ea);}function
trigger_sql($h,$V){$c="";foreach(get_rows("SHOW TRIGGERS LIKE ".q(addcslashes($h,"%_")),null,"-- ")as$a){$c.="\n".($V=='CREATE+ALTER'?"DROP TRIGGER IF EXISTS ".idf_escape($a["Trigger"]).";;\n":"")."CREATE TRIGGER ".idf_escape($a["Trigger"])." $a[Timing] $a[Event] ON ".table($a["Table"])." FOR EACH ROW\n$a[Statement];;\n";}return$c;}function
show_variables(){return
get_key_vals("SHOW VARIABLES");}function
process_list(){return
get_rows("SHOW FULL PROCESSLIST");}function
show_status(){return
get_key_vals("SHOW STATUS");}function
support($pb){global$g;return!ereg("scheme|sequence|type".($g->server_info<5.1?"|event|partitioning".($g->server_info<5?"|view|routine|trigger":""):""),$pb);}$u="sql";$Q=array();$Ia=array();foreach(array('Numbers'=>array("tinyint"=>3,"smallint"=>5,"mediumint"=>8,"int"=>10,"bigint"=>20,"decimal"=>66,"float"=>12,"double"=>21),'Date and time'=>array("date"=>10,"datetime"=>19,"timestamp"=>19,"time"=>10,"year"=>4),'Strings'=>array("char"=>255,"varchar"=>65535,"tinytext"=>255,"text"=>65535,"mediumtext"=>16777215,"longtext"=>4294967295),'Binary'=>array("bit"=>20,"binary"=>255,"varbinary"=>65535,"tinyblob"=>255,"blob"=>65535,"mediumblob"=>16777215,"longblob"=>4294967295),'Lists'=>array("enum"=>65535,"set"=>64),)as$e=>$b){$Q+=$b;$Ia[$e]=array_keys($b);}$ib=array("unsigned","zerofill","unsigned zerofill");$ec=array("=","<",">","<=",">=","!=","LIKE","LIKE %%","REGEXP","IN","IS NULL","NOT LIKE","NOT REGEXP","NOT IN","IS NOT NULL","");$ba=array("char_length","date","from_unixtime","hex","lower","round","sec_to_time","time_to_sec","upper");$jb=array("avg","count","count distinct","group_concat","max","min","sum");$Nb=array(array("char"=>"md5/sha1/password/encrypt/uuid","binary"=>"md5/sha1/hex","date|time"=>"now",),array("int|float|double|decimal"=>"+/-","date"=>"+ interval/- interval","time"=>"addtime/subtime","char|text"=>"concat",));}define("SERVER",$_GET[DRIVER]);define("DB",$_GET["db"]);define("ME",preg_replace('~^[^?]*/([^?]*).*~','\\1',$_SERVER["REQUEST_URI"]).'?'.(sid()?SID.'&':'').(SERVER!==null?DRIVER."=".urlencode(SERVER).'&':'').(isset($_GET["username"])?"username=".urlencode($_GET["username"]).'&':'').(DB!=""?'db='.urlencode(DB).'&'.(isset($_GET["ns"])?"ns=".urlencode($_GET["ns"])."&":""):''));$kc="3.3.1";class
Adminer{var$operators;function
name(){return"<a href='http://www.adminer.org/' id='h1'>Adminer</a>";}function
credentials(){return
array(SERVER,$_GET["username"],get_session("pwds"));}function
permanentLogin(){return
password_file();}function
database(){return
DB;}function
headers(){return
true;}function
head(){return
true;}function
loginForm(){global$la;echo'<table cellspacing="0">
<tr><th>System<td>',html_select("driver",$la,DRIVER,"loginDriver(this);"),'<tr><th>Server<td><input name="server" value="',h(SERVER),'" title="hostname[:port]">
<tr><th>Username<td><input id="username" name="username" value="',h($_GET["username"]);?>">
<tr><th>Password<td><input type="password" name="password">
</table>
<script type="text/javascript">
var username = document.getElementById('username');
username.focus();
username.form['driver'].onchange();
</script>
<?php

echo"<p><input type='submit' value='".'Login'."'>\n",checkbox("permanent",1,$_COOKIE["adminer_permanent"],'Permanent login')."\n";}function
login($cg,$T){return
true;}function
tableName($Uc){return
h($Uc["Name"]);}function
fieldName($d,$cb=0){return'<span title="'.h($d["full_type"]).'">'.h($d["field"]).'</span>';}function
selectLinks($Uc,$r=""){echo'<p class="tabs">';$sa=array("select"=>'Select data',"table"=>'Show structure');if(is_view($Uc)){$sa["view"]='Alter view';}else{$sa["create"]='Alter table';}if(isset($r)){$sa["edit"]='New item';}foreach($sa
as$e=>$b){echo" <a href='".h(ME)."$e=".urlencode($Uc["Name"]).($e=="edit"?$r:"")."'".bold(isset($_GET[$e])).">$b</a>";}echo"\n";}function
foreignKeys($h){return
foreign_keys($h);}function
backwardKeys($h,$bg){return
array();}function
backwardKeysPrint($Wf,$a){}function
selectQuery($i){global$u;return"<p><a href='".h(remove_from_uri("page"))."&amp;page=last' title='".'Last page'."'>&gt;&gt;</a> <code class='jush-$u'>".h(str_replace("\n"," ",$i))."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".'Edit'."</a></p>\n";}function
rowDescription($h){return"";}function
rowDescriptions($H,$Of){return$H;}function
selectVal($b,$x,$d){$c=($b!="<i>NULL</i>"&&ereg("char|binary",$d["type"])&&!ereg("var",$d["type"])?"<code>$b</code>":$b);if(ereg('blob|bytea|raw|file',$d["type"])&&!is_utf8($b)){$c=lang(array('%d byte','%d bytes'),strlen(html_entity_decode($b,ENT_QUOTES)));}return($x?"<a href='$x'>$c</a>":$c);}function
editVal($b,$d){return(ereg("binary",$d["type"])?reset(unpack("H*",$b)):$b);}function
selectColumnsPrint($J,$B){global$ba,$jb;print_fieldset("select",'Select',$J);$l=0;$De=array('Functions'=>$ba,'Aggregation'=>$jb);foreach($J
as$e=>$b){$b=$_GET["columns"][$e];echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$De,$b["fun"]),"(<select name='columns[$l][col]'><option>".optionlist($B,$b["col"],true)."</select>)</div>\n";$l++;}echo"<div>".html_select("columns[$l][fun]",array(-1=>"")+$De,"","this.nextSibling.nextSibling.onchange();"),"(<select name='columns[$l][col]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>)</div>\n","</div></fieldset>\n";}function
selectSearchPrint($t,$B,$K){print_fieldset("search",'Search',$t);foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"){echo"(<i>".implode("</i>, <i>",array_map('h',$w["columns"]))."</i>) AGAINST"," <input name='fulltext[$l]' value='".h($_GET["fulltext"][$l])."'>",checkbox("boolean[$l]",1,isset($_GET["boolean"][$l]),"BOOL"),"<br>\n";}}$l=0;foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){echo"<div><select name='where[$l][col]'><option value=''>(".'anywhere'.")".optionlist($B,$b["col"],true)."</select>",html_select("where[$l][op]",$this->operators,$b["op"]),"<input name='where[$l][val]' value='".h($b["val"])."'></div>\n";$l++;}}echo"<div><select name='where[$l][col]' onchange='selectAddRow(this);'><option value=''>(".'anywhere'.")".optionlist($B,null,true)."</select>",html_select("where[$l][op]",$this->operators,"="),"<input name='where[$l][val]'></div>\n","</div></fieldset>\n";}function
selectOrderPrint($cb,$B,$K){print_fieldset("sort",'Sort',$cb);$l=0;foreach((array)$_GET["order"]as$e=>$b){if(isset($B[$b])){echo"<div><select name='order[$l]'><option>".optionlist($B,$b,true)."</select>",checkbox("desc[$l]",1,isset($_GET["desc"][$e]),'descending')."</div>\n";$l++;}}echo"<div><select name='order[$l]' onchange='selectAddRow(this);'><option>".optionlist($B,null,true)."</select>","<label><input type='checkbox' name='desc[$l]' value='1'>".'descending'."</label></div>\n";echo"</div></fieldset>\n";}function
selectLimitPrint($M){echo"<fieldset><legend>".'Limit'."</legend><div>";echo"<input name='limit' size='3' value='".h($M)."'>","</div></fieldset>\n";}function
selectLengthPrint($Kb){if(isset($Kb)){echo"<fieldset><legend>".'Text length'."</legend><div>",'<input name="text_length" size="3" value="'.h($Kb).'">',"</div></fieldset>\n";}}function
selectActionPrint(){echo"<fieldset><legend>".'Action'."</legend><div>","<input type='submit' value='".'Select'."'>","</div></fieldset>\n";}function
selectCommandPrint(){return!information_schema(DB);}function
selectImportPrint(){return
true;}function
selectEmailPrint($Xf,$B){}function
selectColumnsProcess($B,$K){global$ba,$jb;$J=array();$pa=array();foreach((array)$_GET["columns"]as$e=>$b){if($b["fun"]=="count"||(isset($B[$b["col"]])&&(!$b["fun"]||in_array($b["fun"],$ba)||in_array($b["fun"],$jb)))){$J[$e]=apply_sql_function($b["fun"],(isset($B[$b["col"]])?idf_escape($b["col"]):"*"));if(!in_array($b["fun"],$jb)){$pa[]=$J[$e];}}}return
array($J,$pa);}function
selectSearchProcess($p,$K){global$u;$c=array();foreach($K
as$l=>$w){if($w["type"]=="FULLTEXT"&&$_GET["fulltext"][$l]!=""){$c[]="MATCH (".implode(", ",array_map('idf_escape',$w["columns"])).") AGAINST (".q($_GET["fulltext"][$l]).(isset($_GET["boolean"][$l])?" IN BOOLEAN MODE":"").")";}}foreach((array)$_GET["where"]as$b){if("$b[col]$b[val]"!=""&&in_array($b["op"],$this->operators)){$Mb=" $b[op]";if(ereg('IN$',$b["op"])){$Jb=process_length($b["val"]);$Mb.=" (".($Jb!=""?$Jb:"NULL").")";}elseif(!$b["op"]){$Mb.=$b["val"];}elseif($b["op"]=="LIKE %%"){$Mb=" LIKE ".$this->processInput($p[$b["col"]],"%$b[val]%");}elseif(!ereg('NULL$',$b["op"])){$Mb.=" ".$this->processInput($p[$b["col"]],$b["val"]);}if($b["col"]!=""){$c[]=idf_escape($b["col"]).$Mb;}else{$hb=array();foreach($p
as$f=>$d){if(is_numeric($b["val"])||!ereg('int|float|double|decimal',$d["type"])){$f=idf_escape($f);$hb[]=($u=="sql"&&ereg('char|text|enum|set',$d["type"])&&!ereg('^utf8',$d["collation"])?"CONVERT($f USING utf8)":$f);}}$c[]=($hb?"(".implode("$Mb OR ",$hb)."$Mb)":"0");}}}return$c;}function
selectOrderProcess($p,$K){$c=array();foreach((array)$_GET["order"]as$e=>$b){if(isset($p[$b])||preg_match('~^((COUNT\\(DISTINCT |[A-Z0-9_]+\\()(`(?:[^`]|``)+`|"(?:[^"]|"")+")\\)|COUNT\\(\\*\\))$~',$b)){$c[]=(isset($p[$b])?idf_escape($b):$b).(isset($_GET["desc"][$e])?" DESC":"");}}return$c;}function
selectLimitProcess(){return(isset($_GET["limit"])?$_GET["limit"]:"30");}function
selectLengthProcess(){return(isset($_GET["text_length"])?$_GET["text_length"]:"100");}function
selectEmailProcess($t,$Of){return
false;}function
messageQuery($i){global$u;static$Fc=0;restart_session();$R="sql-".($Fc++);$Za=&get_session("queries");if(strlen($i)>1e6){$i=ereg_replace('[\x80-\xFF]+$','',substr($i,0,1e6))."\n...";}$Za[$_GET["db"]][]=$i;return" <a href='#$R' onclick=\"return !toggle('$R');\">".'SQL command'."</a><div id='$R' class='hidden'><pre><code class='jush-$u'>".shorten_utf8($i,1000).'</code></pre><p><a href="'.h(str_replace("db=".urlencode(DB),"db=".urlencode($_GET["db"]),ME).'sql=&history='.(count($Za[$_GET["db"]])-1)).'">'.'Edit'.'</a></div>';}function
editFunctions($d){global$Nb;$c=($d["null"]?"NULL/":"");foreach($Nb
as$e=>$ba){if(!$e||(!isset($_GET["call"])&&(isset($_GET["select"])||where($_GET)))){foreach($ba
as$ca=>$b){if(!$ca||ereg($ca,$d["type"])){$c.="/$b";}}if($e&&!ereg('set|blob|bytea|raw|file',$d["type"])){$c.="/=";}}}return
explode("/",$c);}function
editInput($h,$d,$Ra,$q){if($d["type"]=="enum"){return(isset($_GET["select"])?"<label><input type='radio'$Ra value='-1' checked><i>".'original'."</i></label> ":"").($d["null"]?"<label><input type='radio'$Ra value=''".(isset($q)||isset($_GET["select"])?"":" checked")."><i>NULL</i></label> ":"").enum_input("radio",$Ra,$d,$q,0);}return"";}function
processInput($d,$q,$L=""){if($L=="="){return$q;}$f=$d["field"];$c=($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$q)?$q:q($q));if(ereg('^(now|getdate|uuid)$',$L)){$c="$L()";}elseif(ereg('^current_(date|timestamp)$',$L)){$c=$L;}elseif(ereg('^([+-]|\\|\\|)$',$L)){$c=idf_escape($f)." $L $c";}elseif(ereg('^[+-] interval$',$L)){$c=idf_escape($f)." $L ".(preg_match("~^(\\d+|'[0-9.: -]') [A-Z_]+$~i",$q)?$q:$c);}elseif(ereg('^(addtime|subtime|concat)$',$L)){$c="$L(".idf_escape($f).", $c)";}elseif(ereg('^(md5|sha1|password|encrypt|hex)$',$L)){$c="$L($c)";}if(ereg("binary",$d["type"])){$c="unhex($c)";}return$c;}function
dumpOutput(){$c=array('text'=>'open','file'=>'save');if(function_exists('gzencode')){$c['gz']='gzip';}if(function_exists('bzcompress')){$c['bz2']='bzip2';}return$c;}function
dumpFormat(){return
array('sql'=>'SQL','csv'=>'CSV,','csv;'=>'CSV;','tsv'=>'TSV');}function
dumpTable($h,$V,$gd=false){if($_POST["format"]!="sql"){echo"\xef\xbb\xbf";if($V){dump_csv(array_keys(fields($h)));}}elseif($V){$ka=create_sql($h,$_POST["auto_increment"]);if($ka){if($V=="DROP+CREATE"){echo"DROP ".($gd?"VIEW":"TABLE")." IF EXISTS ".table($h).";\n";}if($gd){$ka=preg_replace('~^([A-Z =]+) DEFINER=`'.preg_replace('~@(.*)~','`@`(%|\\1)',logged_user()).'`~','\\1',$ka);}echo($V!="CREATE+ALTER"?$ka:($gd?substr_replace($ka," OR REPLACE",6,0):substr_replace($ka," IF NOT EXISTS",12,0))).";\n\n";}if($V=="CREATE+ALTER"&&!$gd){$i="SELECT COLUMN_NAME, COLUMN_DEFAULT, IS_NULLABLE, COLLATION_NAME, COLUMN_TYPE, EXTRA, COLUMN_COMMENT FROM information_schema.COLUMNS WHERE TABLE_SCHEMA = DATABASE() AND TABLE_NAME = ".q($h)." ORDER BY ORDINAL_POSITION";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _column_name, _collation_name, after varchar(64) DEFAULT '';
	DECLARE _column_type, _column_default text;
	DECLARE _is_nullable char(3);
	DECLARE _extra varchar(30);
	DECLARE _column_comment varchar(255);
	DECLARE done, set_after bool DEFAULT 0;
	DECLARE add_columns text DEFAULT '";$p=array();$Ib="";foreach(get_rows($i)as$a){$Ba=$a["COLUMN_DEFAULT"];$a["default"]=(isset($Ba)?q($Ba):"NULL");$a["after"]=q($Ib);$a["alter"]=escape_string(idf_escape($a["COLUMN_NAME"])." $a[COLUMN_TYPE]".($a["COLLATION_NAME"]?" COLLATE $a[COLLATION_NAME]":"").(isset($Ba)?" DEFAULT ".($Ba=="CURRENT_TIMESTAMP"?$Ba:$a["default"]):"").($a["IS_NULLABLE"]=="YES"?"":" NOT NULL").($a["EXTRA"]?" $a[EXTRA]":"").($a["COLUMN_COMMENT"]?" COMMENT ".q($a["COLUMN_COMMENT"]):"").($Ib?" AFTER ".idf_escape($Ib):" FIRST"));echo", ADD $a[alter]";$p[]=$a;$Ib=$a["COLUMN_NAME"];}echo"';
	DECLARE columns CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	SET @alter_table = '';
	OPEN columns;
	REPEAT
		FETCH columns INTO _column_name, _column_default, _is_nullable, _collation_name, _column_type, _extra, _column_comment;
		IF NOT done THEN
			SET set_after = 1;
			CASE _column_name";foreach($p
as$a){echo"
				WHEN ".q($a["COLUMN_NAME"])." THEN
					SET add_columns = REPLACE(add_columns, ', ADD $a[alter]', IF(
						_column_default <=> $a[default] AND _is_nullable = '$a[IS_NULLABLE]' AND _collation_name <=> ".(isset($a["COLLATION_NAME"])?"'$a[COLLATION_NAME]'":"NULL")." AND _column_type = ".q($a["COLUMN_TYPE"])." AND _extra = '$a[EXTRA]' AND _column_comment = ".q($a["COLUMN_COMMENT"])." AND after = $a[after]
					, '', ', MODIFY $a[alter]'));";}echo"
				ELSE
					SET @alter_table = CONCAT(@alter_table, ', DROP ', _column_name);
					SET set_after = 0;
			END CASE;
			IF set_after THEN
				SET after = _column_name;
			END IF;
		END IF;
	UNTIL done END REPEAT;
	CLOSE columns;
	IF @alter_table != '' OR add_columns != '' THEN
		SET alter_command = CONCAT(alter_command, 'ALTER TABLE ".table($h)."', SUBSTR(CONCAT(add_columns, @alter_table), 2), ';\\n');
	END IF;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;

";}}}function
dumpData($h,$V,$i){global$g,$u;$Qe=($u=="sqlite"?0:1048576);if($V){if($_POST["format"]=="sql"&&$V=="TRUNCATE+INSERT"){echo
truncate_sql($h).";\n";}if($_POST["format"]=="sql"){$p=fields($h);}$j=$g->query($i,1);if($j){$hc="";$ob="";while($a=$j->fetch_assoc()){if($_POST["format"]!="sql"){if($V=="table"){dump_csv(array_keys($a));$V="INSERT";}dump_csv($a);}else{if(!$hc){$hc="INSERT INTO ".table($h)." (".implode(", ",array_map('idf_escape',array_keys($a))).") VALUES";}foreach($a
as$e=>$b){$a[$e]=(isset($b)?(ereg('int|float|double|decimal',$p[$e]["type"])?$b:q($b)):"NULL");}$ma=implode(",\t",$a);if($V=="INSERT+UPDATE"){$r=array();foreach($a
as$e=>$b){$r[]=idf_escape($e)." = $b";}echo"$hc ($ma) ON DUPLICATE KEY UPDATE ".implode(", ",$r).";\n";}else{$ma=($Qe?"\n":" ")."($ma)";if(!$ob){$ob=$hc.$ma;}elseif(strlen($ob)+4+strlen($ma)<$Qe){$ob.=",$ma";}else{echo"$ob;\n";$ob=$hc.$ma;}}}}if($_POST["format"]=="sql"&&$V!="INSERT+UPDATE"&&$ob){$ob.=";\n";echo$ob;}}elseif($_POST["format"]=="sql"){echo"-- ".str_replace("\n"," ",$g->error)."\n";}}}function
dumpHeaders($Sc,$_d=false){$Na=$_POST["output"];$Fb=($_POST["format"]=="sql"?"sql":($_d?"tar":"csv"));header("Content-Type: ".($Na=="bz2"?"application/x-bzip":($Na=="gz"?"application/x-gzip":($Fb=="tar"?"application/x-tar":($Fb=="sql"||$Na!="file"?"text/plain":"text/csv")."; charset=utf-8"))));if($Na=="bz2"){ob_start('bzcompress',1e6);}if($Na=="gz"){ob_start('gzencode',1e6);}return$Fb;}function
homepage(){echo'<p>'.($_GET["ns"]==""?'<a href="'.h(ME).'database=">'.'Alter database'."</a>\n":""),(support("scheme")?"<a href='".h(ME)."scheme='>".($_GET["ns"]!=""?'Alter schema':'Create schema')."</a>\n":""),($_GET["ns"]!==""?'<a href="'.h(ME).'schema=">'.'Database schema'."</a>\n":""),(support("privileges")?"<a href='".h(ME)."privileges='>".'Privileges'."</a>\n":"");return
true;}function
navigation($Xb){global$kc,$g,$O,$u,$la;echo'<h1>
',$this->name(),' <span class="version">',$kc,'</span>
<a href="http://www.adminer.org/#download" id="version">',(version_compare($kc,$_COOKIE["adminer_version"])<0?h($_COOKIE["adminer_version"]):""),'</a>
</h1>
';if($Xb=="auth"){$_a=true;foreach((array)$_SESSION["pwds"]as$Lb=>$Tf){foreach($Tf
as$F=>$Mf){foreach($Mf
as$P=>$T){if(isset($T)){if($_a){echo"<p onclick='eventStop(event);'>\n";$_a=false;}echo"<a href='".h(auth_url($Lb,$F,$P))."'>($la[$Lb]) ".h($P.($F!=""?"@$F":""))."</a><br>\n";}}}}}else{$_=get_databases();echo'<form action="" method="post">
<p class="logout">
';if(DB==""||!$Xb){echo"<a href='".h(ME)."sql='".bold(isset($_GET["sql"])).">".'SQL command'."</a>\n";if(support("dump")){echo"<a href='".h(ME)."dump=".urlencode(isset($_GET["table"])?$_GET["table"]:$_GET["select"])."' id='dump'".bold(isset($_GET["dump"])).">".'Dump'."</a>\n";}}echo'<input type="submit" name="logout" value="Logout" onclick="eventStop(event);">
<input type="hidden" name="token" value="',$O,'">
</p>
</form>
<form action="">
<p>
';hidden_fields_get();echo($_?html_select("db",array(""=>"(".'database'.")")+$_,DB,"this.form.submit();"):'<input name="db" value="'.h(DB).'">'),'<input type="submit" value="Use"',($_?" class='hidden'":""),' onclick="eventStop(event);">
';if($Xb!="db"&&DB!=""&&$g->select_db(DB)){if(support("scheme")){echo"<br>".html_select("ns",array(""=>"(".'schema'.")")+schemas(),$_GET["ns"],"this.form.submit();");if($_GET["ns"]!=""){set_schema($_GET["ns"]);}}if($_GET["ns"]!==""&&!$Xb){echo'<p><a href="'.h(ME).'create="'.bold($_GET["create"]==="").">".'Create new table'."</a>\n";$E=tables_list();if(!$E){echo"<p class='message'>".'No tables.'."\n";}else{$this->tablesPrint($E);$sa=array();foreach($E
as$h=>$z){$sa[]=preg_quote($h,'/');}echo"<script type='text/javascript'>\n","var jushLinks = { $u: [ '".js_escape(ME)."table=\$&', /\\b(".implode("|",$sa).")\\b/g ] };\n";foreach(array("bac","bra","sqlite_quo","mssql_bra")as$b){echo"jushLinks.$b = jushLinks.$u;\n";}echo"</script>\n";}}}echo(isset($_GET["sql"])?'<input type="hidden" name="sql" value="">':(isset($_GET["schema"])?'<input type="hidden" name="schema" value="">':(isset($_GET["dump"])?'<input type="hidden" name="dump" value="">':""))),"</p></form>\n";}}function
tablesPrint($E){echo"<p id='tables'>\n";foreach($E
as$h=>$z){echo'<a href="'.h(ME).'select='.urlencode($h).'"'.bold($_GET["select"]==$h).">".'select'."</a> ",'<a href="'.h(ME).'table='.urlencode($h).'"'.bold($_GET["table"]==$h).">".$this->tableName(array("Name"=>$h))."</a><br>\n";}}}$o=(function_exists('adminer_object')?adminer_object():new
Adminer);if(!isset($o->operators)){$o->operators=$ec;}function
page_header($ve,$n="",$uc=array(),$ue=""){global$pf,$o,$g,$la;header("Content-Type: text/html; charset=utf-8");if($o->headers()){header("X-Frame-Options: deny");header("X-XSS-Protection: 0");}$ye=$ve.($ue!=""?": ".h($ue):"");$ze=strip_tags($ye.(SERVER!=""&&SERVER!="localhost"?h(" - ".SERVER):"")." - ".$o->name());if(is_ajax()){header("X-AJAX-Title: ".rawurlencode($ze));}else{echo'<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN">
<html lang="en" dir="ltr">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="Content-Script-Type" content="text/javascript">
<meta name="robots" content="noindex">
<title>',$ze,'</title>
<link rel="stylesheet" type="text/css" href="',h(preg_replace("~\\?.*~","",ME))."?file=default.css&amp;version=3.3.1",'">
<script type="text/javascript">
var areYouSure = \'Resend POST data?\';
</script>
<script type="text/javascript" src="',h(preg_replace("~\\?.*~","",ME))."?file=functions.js&amp;version=3.3.1",'"></script>
';if($o->head()){echo'<link rel="shortcut icon" type="image/x-icon" href="',h(preg_replace("~\\?.*~","",ME))."?file=favicon.ico&amp;version=3.3.1",'" id="favicon">
';if(file_exists("adminer.css")){echo'<link rel="stylesheet" type="text/css" href="adminer.css">
';}}echo'
<body class="ltr nojs"',($_POST?"":" onclick=\"return bodyClick(event, '".h(js_escape(DB)."', '".js_escape($_GET["ns"]))."');\"");echo' onkeydown="bodyKeydown(event);" onload="bodyLoad(\'',(is_object($g)?substr($g->server_info,0,3):""),'\');',(isset($_COOKIE["adminer_version"])?"":" verifyVersion();");?>">
<script type="text/javascript">
document.body.className = document.body.className.replace(/(^|\s)nojs(\s|$)/, '$1js$2');
</script>

<div id="content">
<?php
}if(isset($uc)){$x=substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1);echo'<p id="breadcrumb"><a href="'.h($x?$x:".").'">'.$la[DRIVER].'</a> &raquo; ';$x=substr(preg_replace('~(db|ns)=[^&]*&~','',ME),0,-1);$F=(SERVER!=""?h(SERVER):'Server');if($uc===false){echo"$F\n";}else{echo"<a href='".($x?h($x):".")."' accesskey='1' title='Alt+Shift+1'>$F</a> &raquo; ";if($_GET["ns"]!=""||(DB!=""&&is_array($uc))){echo'<a href="'.h($x."&db=".urlencode(DB).(support("scheme")?"&ns=":"")).'">'.h(DB).'</a> &raquo; ';}if(is_array($uc)){if($_GET["ns"]!=""){echo'<a href="'.h(substr(ME,0,-1)).'">'.h($_GET["ns"]).'</a> &raquo; ';}foreach($uc
as$e=>$b){$tc=(is_array($b)?$b[1]:$b);if($tc!=""){echo'<a href="'.h(ME."$e=").urlencode(is_array($b)?$b[0]:$b).'">'.h($tc).'</a> &raquo; ';}}}echo"$ve\n";}}echo"<span id='loader'></span>\n","<h2>$ye</h2>\n";restart_session();$Ce=preg_replace('~^[^?]*~','',$_SERVER["REQUEST_URI"]);$Be=$_SESSION["messages"][$Ce];if($Be){echo"<div class='message'>".implode("</div>\n<div class='message'>",$Be)."</div>\n";unset($_SESSION["messages"][$Ce]);}$_=&get_session("dbs");if(DB!=""&&$_&&!in_array(DB,$_,true)){$_=null;}if($n){echo"<div class='error'>$n</div>\n";}define("PAGE_HEADER",1);}function
page_footer($Xb=""){global$o;if(!is_ajax()){echo'</div>

<div id="menu">
';$o->navigation($Xb);echo'</div>
';}}function
int32($ha){while($ha>=2147483648){$ha-=4294967296;}while($ha<=-2147483649){$ha+=4294967296;}return(int)$ha;}function
long2str($y,$Ed){$ma='';foreach($y
as$b){$ma.=pack('V',$b);}if($Ed){return
substr($ma,0,end($y));}return$ma;}function
str2long($ma,$Ed){$y=array_values(unpack('V*',str_pad($ma,4*ceil(strlen($ma)/4),"\0")));if($Ed){$y[]=strlen($ma);}return$y;}function
xxtea_mx($ya,$Aa,$Ha,$Ka){return
int32((($ya>>5&0x7FFFFFF)^$Aa<<2)+(($Aa>>3&0x1FFFFFFF)^$ya<<4))^int32(($Ha^$Aa)+($Ka^$ya));}function
encrypt_string($oc,$e){if($oc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($oc,true);$ha=count($y)-1;$ya=$y[$ha];$Aa=$y[0];$aa=floor(6+52/($ha+1));$Ha=0;while($aa-->0){$Ha=int32($Ha+0x9E3779B9);$pc=$Ha>>2&3;for($wa=0;$wa<$ha;$wa++){$Aa=$y[$wa+1];$Gb=xxtea_mx($ya,$Aa,$Ha,$e[$wa&3^$pc]);$ya=int32($y[$wa]+$Gb);$y[$wa]=$ya;}$Aa=$y[0];$Gb=xxtea_mx($ya,$Aa,$Ha,$e[$wa&3^$pc]);$ya=int32($y[$ha]+$Gb);$y[$ha]=$ya;}return
long2str($y,false);}function
decrypt_string($oc,$e){if($oc==""){return"";}$e=array_values(unpack("V*",pack("H*",md5($e))));$y=str2long($oc,false);$ha=count($y)-1;$ya=$y[$ha];$Aa=$y[0];$aa=floor(6+52/($ha+1));$Ha=int32($aa*0x9E3779B9);while($Ha){$pc=$Ha>>2&3;for($wa=$ha;$wa>0;$wa--){$ya=$y[$wa-1];$Gb=xxtea_mx($ya,$Aa,$Ha,$e[$wa&3^$pc]);$Aa=int32($y[$wa]-$Gb);$y[$wa]=$Aa;}$ya=$y[$ha];$Gb=xxtea_mx($ya,$Aa,$Ha,$e[$wa&3^$pc]);$Aa=int32($y[0]-$Gb);$y[0]=$Aa;$Ha=int32($Ha-0x9E3779B9);}return
long2str($y,true);}$g='';$O=$_SESSION["token"];if(!$_SESSION["token"]){$_SESSION["token"]=rand(1,1e6);}$Bb=array();if($_COOKIE["adminer_permanent"]){foreach(explode(" ",$_COOKIE["adminer_permanent"])as$b){list($e)=explode(":",$b);$Bb[$e]=$b;}}if(isset($_POST["server"])){session_regenerate_id();$_SESSION["pwds"][$_POST["driver"]][$_POST["server"]][$_POST["username"]]=$_POST["password"];if($_POST["permanent"]){$e=base64_encode($_POST["driver"])."-".base64_encode($_POST["server"])."-".base64_encode($_POST["username"]);$dd=$o->permanentLogin();$Bb[$e]="$e:".base64_encode($dd?encrypt_string($_POST["password"],$dd):"");cookie("adminer_permanent",implode(" ",$Bb));}if(count($_POST)==($_POST["permanent"]?5:4)||DRIVER!=$_POST["driver"]||SERVER!=$_POST["server"]||$_GET["username"]!==$_POST["username"]){redirect(auth_url($_POST["driver"],$_POST["server"],$_POST["username"]));}}elseif($_POST["logout"]){if($O&&$_POST["token"]!=$O){page_header('Logout','Invalid CSRF token. Send the form again.');page_footer("db");exit;}else{foreach(array("pwds","dbs","queries")as$e){set_session($e,null);}$e=base64_encode(DRIVER)."-".base64_encode(SERVER)."-".base64_encode($_GET["username"]);if($Bb[$e]){unset($Bb[$e]);cookie("adminer_permanent",implode(" ",$Bb));}redirect(substr(preg_replace('~(username|db|ns)=[^&]*&~','',ME),0,-1),'Logout successful.');}}elseif($Bb&&!$_SESSION["pwds"]){session_regenerate_id();$dd=$o->permanentLogin();foreach($Bb
as$e=>$b){list(,$Gf)=explode(":",$b);list($Lb,$F,$P)=array_map('base64_decode',explode("-",$e));$_SESSION["pwds"][$Lb][$F][$P]=decrypt_string(base64_decode($Gf),$dd);}}function
auth_error($Ae=null){global$g,$o,$O;$Ec=session_name();$n="";if(!$_COOKIE[$Ec]&&$_GET[$Ec]&&ini_bool("session.use_only_cookies")){$n='Session support must be enabled.';}elseif(isset($_GET["username"])){if(($_COOKIE[$Ec]||$_GET[$Ec])&&!$O){$n='Session expired, please login again.';}else{$T=&get_session("pwds");if(isset($T)){$n=h($Ae?$Ae->getMessage():(is_string($g)?$g:'Invalid credentials.'));$T=null;}}}page_header('Login',$n,null);echo"<form action='' method='post' onclick='eventStop(event);'>\n";$o->loginForm();echo"<div>";hidden_fields($_POST,array("driver","server","username","password","permanent"));echo"</div>\n","</form>\n";page_footer("auth");}if(isset($_GET["username"])){if(!class_exists("Min_DB")){unset($_SESSION["pwds"][DRIVER]);page_header('No extension',sprintf('None of the supported PHP extensions (%s) are available.',implode(", ",$rc)),false);page_footer("auth");exit;}$g=connect();}if(is_string($g)||!$o->login($_GET["username"],get_session("pwds"))){auth_error();exit;}$O=$_SESSION["token"];if(isset($_POST["server"])&&$_POST["token"]){$_POST["token"]=$O;}$n=($_POST?($_POST["token"]==$O?"":'Invalid CSRF token. Send the form again.'):($_SERVER["REQUEST_METHOD"]!="POST"?"":sprintf('Too big POST data. Reduce the data or increase the %s configuration directive.','"post_max_size"')));function
connect_error(){global$g,$O,$n,$la;$_=array();if(DB!=""){page_header('Database'.": ".h(DB),'Invalid database.',true);}else{if($_POST["db"]&&!$n){queries_redirect(substr(ME,0,-1),'Databases have been dropped.',drop_databases($_POST["db"]));}page_header('Select database',$n,false);echo"<p><a href='".h(ME)."database='>".'Create new database'."</a>\n";foreach(array('privileges'=>'Privileges','processlist'=>'Process list','variables'=>'Variables','status'=>'Status',)as$e=>$b){if(support($e)){echo"<a href='".h(ME)."$e='>$b</a>\n";}}echo"<p>".sprintf('%s version: %s through PHP extension %s',$la[DRIVER],"<b>$g->server_info</b>","<b>$g->extension</b>")."\n","<p>".sprintf('Logged as: %s',"<b>".h(logged_user())."</b>")."\n";if($_GET["refresh"]){set_session("dbs",null);}$_=get_databases();if($_){$Hd=support("scheme");$Z=collations();echo"<form action='' method='post'>\n","<table cellspacing='0' onclick='tableClick(event);'>\n","<thead><tr><td>&nbsp;<th>".'Database'."<td>".'Collation'."<td>".'Tables'."</thead>\n";foreach($_
as$s){$qd=h(ME)."db=".urlencode($s);echo"<tr".odd()."><td>".checkbox("db[]",$s,in_array($s,(array)$_POST["db"])),"<th><a href='$qd'>".h($s)."</a>","<td><a href='$qd".($Hd?"&amp;ns=":"")."&amp;database='>".nbsp(db_collation($s,$Z))."</a>","<td align='right'><a href='$qd&amp;schema=' id='tables-".h($s)."'>?</a>","\n";}echo"</table>\n","<p><input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /db/)",1).">\n";echo"<input type='hidden' name='token' value='$O'>\n","<a href='".h(ME)."refresh=1' onclick='eventStop(event);'>".'Refresh'."</a>\n","</form>\n";}}page_footer("db");if($_){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=connect');</script>\n";}}if(isset($_GET["status"])){$_GET["variables"]=$_GET["status"];}if(!(DB!=""?$g->select_db(DB):isset($_GET["sql"])||isset($_GET["dump"])||isset($_GET["database"])||isset($_GET["processlist"])||isset($_GET["privileges"])||isset($_GET["user"])||isset($_GET["variables"])||$_GET["script"]=="connect")){if(DB!=""){set_session("dbs",null);}connect_error();exit;}if(support("scheme")&&DB!=""&&$_GET["ns"]!==""){if(!isset($_GET["ns"])){redirect(preg_replace('~ns=[^&]*&~','',ME)."ns=".get_schema());}if(!set_schema($_GET["ns"])){page_header('Schema'.": ".h($_GET["ns"]),'Invalid schema.',true);page_footer("ns");exit;}}function
select($j,$G=null,$Hc=""){$sa=array();$K=array();$B=array();$_e=array();$Q=array();odd('');for($l=0;$a=$j->fetch_row();$l++){if(!$l){echo"<table cellspacing='0' class='nowrap'>\n","<thead><tr>";for($na=0;$na<count($a);$na++){$d=$j->fetch_field();$f=$d->name;$Da=$d->orgtable;$sc=$d->orgname;if($Hc){$sa[$na]=($f=="table"?"table=":($f=="possible_keys"?"indexes=":null));}elseif($Da!=""){if(!isset($K[$Da])){$K[$Da]=array();foreach(indexes($Da,$G)as$w){if($w["type"]=="PRIMARY"){$K[$Da]=array_flip($w["columns"]);break;}}$B[$Da]=$K[$Da];}if(isset($B[$Da][$sc])){unset($B[$Da][$sc]);$K[$Da][$sc]=$na;$sa[$na]=$Da;}}if($d->charsetnr==63){$_e[$na]=true;}$Q[$na]=$d->type;$f=h($f);echo"<th".($Da!=""||$d->name!=$sc?" title='".h(($Da!=""?"$Da.":"").$sc)."'":"").">".($Hc?"<a href='$Hc".strtolower($f)."' target='_blank' rel='noreferrer'>$f</a>":$f);}echo"</thead>\n";}echo"<tr".odd().">";foreach($a
as$e=>$b){if(!isset($b)){$b="<i>NULL</i>";}elseif($_e[$e]&&!is_utf8($b)){$b="<i>".lang(array('%d byte','%d bytes'),strlen($b))."</i>";}elseif(!strlen($b)){$b="&nbsp;";}else{$b=h($b);if($Q[$e]==254){$b="<code>$b</code>";}}if(isset($sa[$e])&&!$B[$sa[$e]]){if($Hc){$x=$sa[$e].urlencode($a[array_search("table=",$sa)]);}else{$x="edit=".urlencode($sa[$e]);foreach($K[$sa[$e]]as$Nc=>$na){$x.="&where".urlencode("[".bracket_escape($Nc)."]")."=".urlencode($a[$na]);}}$b="<a href='".h(ME.$x)."'>$b</a>";}echo"<td>$b";}}echo($l?"</table>":"<p class='message'>".'No rows.')."\n";}function
referencable_primary($Sf){$c=array();foreach(table_status()as$Ca=>$h){if($Ca!=$Sf&&fk_support($h)){foreach(fields($Ca)as$d){if($d["primary"]){if($c[$Ca]){unset($c[$Ca]);break;}$c[$Ca]=$d;}}}}return$c;}function
textarea($f,$q,$H=10,$hb=80){echo"<textarea name='$f' rows='$H' cols='$hb' class='sqlarea' spellcheck='false' wrap='off' onkeydown='return textareaKeydown(this, event);'>";if(is_array($q)){foreach($q
as$b){echo
h($b)."\n\n\n";}}else{echo
h($q);}echo"</textarea>";}function
format_time($Eb,$Bc){return" <span class='time'>(".sprintf('%.3f s',max(0,array_sum(explode(" ",$Bc))-array_sum(explode(" ",$Eb)))).")</span>";}function
edit_type($e,$d,$Z,$ga=array()){global$Ia,$Q,$ib,$db;echo'<td><select name="',$e,'[type]" class="type" onfocus="lastType = selectValue(this);" onchange="editingTypeChange(this);">',optionlist((!$d["type"]||isset($Q[$d["type"]])?array():array($d["type"]))+$Ia+($ga?array('Foreign keys'=>$ga):array()),$d["type"]),'</select>
<td><input name="',$e,'[length]" value="',h($d["length"]),'" size="3" onfocus="editingLengthFocus(this);"><td class="options">',"<select name='$e"."[collation]'".(ereg('(char|text|enum|set)$',$d["type"])?"":" class='hidden'").'><option value="">('.'collation'.')'.optionlist($Z,$d["collation"]).'</select>',($ib?"<select name='$e"."[unsigned]'".(!$d["type"]||ereg('(int|float|double|decimal)$',$d["type"])?"":" class='hidden'").'><option>'.optionlist($ib,$d["unsigned"]).'</select>':''),($ga?"<select name='$e"."[on_delete]'".(ereg("`",$d["type"])?"":" class='hidden'")."><option value=''>(".'ON DELETE'.")".optionlist($db,$d["on_delete"])."</select> ":" ");}function
process_length($X){global$Cb;return(preg_match("~^\\s*(?:$Cb)(?:\\s*,\\s*(?:$Cb))*\\s*\$~",$X)&&preg_match_all("~$Cb~",$X,$ta)?implode(",",$ta[0]):preg_replace('~[^0-9,+-]~','',$X));}function
process_type($d,$nc="COLLATE"){global$ib;return" $d[type]".($d["length"]!=""?"(".process_length($d["length"]).")":"").(ereg('int|float|double|decimal',$d["type"])&&in_array($d["unsigned"],$ib)?" $d[unsigned]":"").(ereg('char|text|enum|set',$d["type"])&&$d["collation"]?" $nc ".q($d["collation"]):"");}function
process_field($d,$Pc){return
array(idf_escape($d["field"]),process_type($Pc),($d["null"]?" NULL":" NOT NULL"),(isset($d["default"])?" DEFAULT ".(($d["type"]=="timestamp"&&eregi('^CURRENT_TIMESTAMP$',$d["default"]))||($d["type"]=="bit"&&ereg("^([0-9]+|b'[0-1]+')\$",$d["default"]))?$d["default"]:q($d["default"])):""),($d["on_update"]?" ON UPDATE $d[on_update]":""),(support("comment")&&$d["comment"]!=""?" COMMENT ".q($d["comment"]):""),($d["auto_increment"]?auto_increment():null),);}function
type_class($z){foreach(array('char'=>'text','date'=>'time|year','binary'=>'blob','enum'=>'set',)as$e=>$b){if(ereg("$e|$b",$z)){return" class='$e'";}}}function
edit_fields($p,$Z,$z="TABLE",$ef=0,$ga=array(),$Ab=false){global$Sb;echo'<thead><tr class="wrap">
';if($z=="PROCEDURE"){echo'<td>&nbsp;';}echo'<th>',($z=="TABLE"?'Column name':'Parameter name'),'<td>Type<textarea id="enum-edit" rows="4" cols="12" wrap="off" style="display: none;" onblur="editingLengthBlur(this);"></textarea>
<td>Length
<td>Options
';if($z=="TABLE"){echo'<td>NULL
<td><input type="radio" name="auto_increment_col" value=""><acronym title="Auto Increment">AI</acronym>
<td',($_POST["defaults"]?"":" class='hidden'"),'>Default values
',(support("comment")?"<td".($Ab?"":" class='hidden'").">".'Comment':"");}echo'<td>',"<input type='image' name='add[".(support("move_col")?0:count($p))."]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.1' alt='+' title='".'Add next'."'>",'<script type="text/javascript">row_count = ',count($p),';</script>
</thead>
<tbody onkeydown="return editingKeydown(event);">
';foreach($p
as$l=>$d){$l++;$md=$d[($_POST?"orig":"field")];$df=(isset($_POST["add"][$l-1])||(isset($d["field"])&&!$_POST["drop_col"][$l]))&&(support("drop_col")||$md=="");echo'<tr',($df?"":" style='display: none;'"),'>
',($z=="PROCEDURE"?"<td>".html_select("fields[$l][inout]",explode("|",$Sb),$d["inout"]):""),'<th>';if($df){echo'<input name="fields[',$l,'][field]" value="',h($d["field"]),'" onchange="',($d["field"]!=""||count($p)>1?"":"editingAddRow(this, $ef); "),'editingNameChange(this);" maxlength="64">';}echo'<input type="hidden" name="fields[',$l,'][orig]" value="',h($md),'">
';edit_type("fields[$l]",$d,$Z,$ga);if($z=="TABLE"){echo'<td>',checkbox("fields[$l][null]",1,$d["null"]),'<td><input type="radio" name="auto_increment_col" value="',$l,'"';if($d["auto_increment"]){echo' checked';}?> onclick="var field = this.form['fields[' + this.value + '][field]']; if (!field.value) { field.value = 'id'; field.onchange(); }">
<td<?php echo($_POST["defaults"]?"":" class='hidden'"),'>',checkbox("fields[$l][has_default]",1,$d["has_default"]),'<input name="fields[',$l,'][default]" value="',h($d["default"]),'" onchange="this.previousSibling.checked = true;">
',(support("comment")?"<td".($Ab?"":" class='hidden'")."><input name='fields[$l][comment]' value='".h($d["comment"])."' maxlength='255'>":"");}echo"<td>",(support("move_col")?"<input type='image' name='add[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.1' alt='+' title='".'Add next'."' onclick='return !editingAddRow(this, $ef, 1);'>&nbsp;"."<input type='image' name='up[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=up.gif&amp;version=3.3.1' alt='^' title='".'Move up'."'>&nbsp;"."<input type='image' name='down[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=down.gif&amp;version=3.3.1' alt='v' title='".'Move down'."'>&nbsp;":""),($md==""||support("drop_col")?"<input type='image' name='drop_col[$l]' src='".h(preg_replace("~\\?.*~","",ME))."?file=cross.gif&amp;version=3.3.1' alt='x' title='".'Remove'."' onclick='return !editingRemoveRow(this);'>":""),"\n";}}function
process_fields(&$p){ksort($p);$N=0;if($_POST["up"]){$sb=0;foreach($p
as$e=>$d){if(key($_POST["up"])==$e){unset($p[$e]);array_splice($p,$sb,0,array($d));break;}if(isset($d["field"])){$sb=$N;}$N++;}}if($_POST["down"]){$qa=false;foreach($p
as$e=>$d){if(isset($d["field"])&&$qa){unset($p[key($_POST["down"])]);array_splice($p,$N,0,array($qa));break;}if(key($_POST["down"])==$e){$qa=$d;}$N++;}}$p=array_values($p);if($_POST["add"]){array_splice($p,key($_POST["add"]),0,array(array()));}}function
normalize_enum($k){return"'".str_replace("'","''",addcslashes(stripcslashes(str_replace($k[0][0].$k[0][0],$k[0][0],substr($k[0],1,-1))),'\\'))."'";}function
grant($ia,$ra,$B,$_b){if(!$ra){return
true;}if($ra==array("ALL PRIVILEGES","GRANT OPTION")){return($ia=="GRANT"?queries("$ia ALL PRIVILEGES$_b WITH GRANT OPTION"):queries("$ia ALL PRIVILEGES$_b")&&queries("$ia GRANT OPTION$_b"));}return
queries("$ia ".preg_replace('~(GRANT OPTION)\\([^)]*\\)~','\\1',implode("$B, ",$ra).$B).$_b);}function
drop_create($Ga,$ka,$fa,$Ue,$Af,$Bf,$f){if($_POST["drop"]){return
query_redirect($Ga,$fa,$Ue,true,!$_POST["dropped"]);}$Ya=$f!=""&&($_POST["dropped"]||queries($Ga));$Df=queries($ka);if(!queries_redirect($fa,($f!=""?$Af:$Bf),$Df)&&$Ya){redirect(null,$Ue);}return$Ya;}function
tar_file($ja,$id){$c=pack("a100a8a8a8a12a12",$ja,644,0,0,decoct(strlen($id)),decoct(time()));$Se=8*32;for($l=0;$l<strlen($c);$l++){$Se+=ord($c{$l});}$c.=sprintf("%06o",$Se)."\0 ";return$c.str_repeat("\0",512-strlen($c)).$id.str_repeat("\0",511-(strlen($id)+511)%
512);}session_cache_limiter("");if(!ini_bool("session.use_cookies")||@ini_set("session.use_cookies",false)!==false){session_write_close();}$db=array("RESTRICT","CASCADE","SET NULL","NO ACTION");$Cb="'(?:''|[^'\\\\]|\\\\.)*+'";$Sb="IN|OUT|INOUT";if(isset($_GET["select"])&&($_POST["edit"]||$_POST["clone"])&&!$_POST["save"]){$_GET["edit"]=$_GET["select"];}if(isset($_GET["callf"])){$_GET["call"]=$_GET["callf"];}if(isset($_GET["function"])){$_GET["procedure"]=$_GET["function"];}if(isset($_GET["download"])){$m=$_GET["download"];header("Content-Type: application/octet-stream");header("Content-Disposition: attachment; filename=".friendly_url("$m-".implode("_",$_GET["where"])).".".friendly_url($_GET["field"]));echo$g->result("SELECT".limit(idf_escape($_GET["field"])." FROM ".table($m)," WHERE ".where($_GET),1));exit;}elseif(isset($_GET["table"])){$m=$_GET["table"];$p=fields($m);if(!$p){$n=error();}$D=($p?table_status($m):array());page_header(($p&&is_view($D)?'View':'Table').": ".h($m),$n);$o->selectLinks($D);$va=$D["Comment"];if($va!=""){echo"<p>".'Comment'.": ".h($va)."\n";}if($p){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Column'."<td>".'Type'.(support("comment")?"<td>".'Comment':"")."</thead>\n";foreach($p
as$d){echo"<tr".odd()."><th>".h($d["field"]),"<td title='".h($d["collation"])."'>".h($d["full_type"]).($d["null"]?" <i>NULL</i>":"").($d["auto_increment"]?" <i>".'Auto Increment'."</i>":""),(isset($d["default"])?" [<b>".h($d["default"])."</b>]":""),(support("comment")?"<td>".nbsp($d["comment"]):""),"\n";}echo"</table>\n";if(!is_view($D)){echo"<h3>".'Indexes'."</h3>\n";$K=indexes($m);if($K){echo"<table cellspacing='0'>\n";foreach($K
as$f=>$w){ksort($w["columns"]);$yb=array();foreach($w["columns"]as$e=>$b){$yb[]="<i>".h($b)."</i>".($w["lengths"][$e]?"(".$w["lengths"][$e].")":"");}echo"<tr title='".h($f)."'><th>$w[type]<td>".implode(", ",$yb)."\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'indexes='.urlencode($m).'">'.'Alter indexes'."</a>\n";if(fk_support($D)){echo"<h3>".'Foreign keys'."</h3>\n";$ga=foreign_keys($m);if($ga){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Source'."<td>".'Target'."<td>".'ON DELETE'."<td>".'ON UPDATE'.($u!="sqlite"?"<td>&nbsp;":"")."</thead>\n";foreach($ga
as$f=>$A){echo"<tr title='".h($f)."'>","<th><i>".implode("</i>, <i>",array_map('h',$A["source"]))."</i>","<td><a href='".h($A["db"]!=""?preg_replace('~db=[^&]*~',"db=".urlencode($A["db"]),ME):($A["ns"]!=""?preg_replace('~ns=[^&]*~',"ns=".urlencode($A["ns"]),ME):ME))."table=".urlencode($A["table"])."'>".($A["db"]!=""?"<b>".h($A["db"])."</b>.":"").($A["ns"]!=""?"<b>".h($A["ns"])."</b>.":"").h($A["table"])."</a>","(<i>".implode("</i>, <i>",array_map('h',$A["target"]))."</i>)","<td>".nbsp($A["on_delete"])."\n","<td>".nbsp($A["on_update"])."\n";if($u!="sqlite"){echo'<td><a href="'.h(ME.'foreign='.urlencode($m).'&name='.urlencode($f)).'">'.'Alter'.'</a>';}}echo"</table>\n";}if($u!="sqlite"){echo'<p><a href="'.h(ME).'foreign='.urlencode($m).'">'.'Add foreign key'."</a>\n";}}if(support("trigger")){echo"<h3>".'Triggers'."</h3>\n";$Kc=triggers($m);if($Kc){echo"<table cellspacing='0'>\n";foreach($Kc
as$e=>$b){echo"<tr valign='top'><td>$b[0]<td>$b[1]<th>".h($e)."<td><a href='".h(ME.'trigger='.urlencode($m).'&name='.urlencode($e))."'>".'Alter'."</a>\n";}echo"</table>\n";}echo'<p><a href="'.h(ME).'trigger='.urlencode($m).'">'.'Add trigger'."</a>\n";}}}}elseif(isset($_GET["schema"])){page_header('Database schema',"",array(),DB);$xb=array();$We=array();$f="adminer_schema";$Ye=($_GET["schema"]?$_GET["schema"]:$_COOKIE[($_COOKIE["$f-".DB]?"$f-".DB:$f)]);preg_match_all('~([^:]+):([-0-9.]+)x([-0-9.]+)(_|$)~',$Ye,$ta,PREG_SET_ORDER);foreach($ta
as$l=>$k){$xb[$k[1]]=array($k[2],$k[3]);$We[]="\n\t'".js_escape($k[1])."': [ $k[2], $k[3] ]";}$Yb=0;$Xe=-1;$Ja=array();$Ze=array();$Ve=array();foreach(table_status()as$a){if(!isset($a["Engine"])){continue;}$qc=0;$Ja[$a["Name"]]["fields"]=array();foreach(fields($a["Name"])as$f=>$d){$qc+=1.25;$d["pos"]=$qc;$Ja[$a["Name"]]["fields"][$f]=$d;}$Ja[$a["Name"]]["pos"]=($xb[$a["Name"]]?$xb[$a["Name"]]:array($Yb,0));foreach($o->foreignKeys($a["Name"])as$b){if(!$b["db"]){$xa=$Xe;if($xb[$a["Name"]][1]||$xb[$b["table"]][1]){$xa=min(floatval($xb[$a["Name"]][1]),floatval($xb[$b["table"]][1]))-1;}else{$Xe-=.1;}while($Ve[(string)$xa]){$xa-=.0001;}$Ja[$a["Name"]]["references"][$b["table"]][(string)$xa]=array($b["source"],$b["target"]);$Ze[$b["table"]][$a["Name"]][(string)$xa]=$b["target"];$Ve[(string)$xa]=true;}}$Yb=max($Yb,$Ja[$a["Name"]]["pos"][0]+2.5+$qc);}echo'<div id="schema" style="height: ',$Yb,'em;">
<script type="text/javascript">
tablePos = {',implode(",",$We)."\n",'};
em = document.getElementById(\'schema\').offsetHeight / ',$Yb,';
document.onmousemove = schemaMousemove;
document.onmouseup = function (ev) {
	schemaMouseup(ev, \'',js_escape(DB),'\');
};
</script>
';foreach($Ja
as$f=>$h){echo"<div class='table' style='top: ".$h["pos"][0]."em; left: ".$h["pos"][1]."em;' onmousedown='schemaMousedown(this, event);'>",'<a href="'.h(ME).'table='.urlencode($f).'"><b>'.h($f)."</b></a><br>\n";foreach($h["fields"]as$d){$b='<span'.type_class($d["type"]).' title="'.h($d["full_type"].($d["null"]?" NULL":'')).'">'.h($d["field"]).'</span>';echo($d["primary"]?"<i>$b</i>":$b)."<br>\n";}foreach((array)$h["references"]as$dc=>$gc){foreach($gc
as$xa=>$ed){$ic=$xa-$xb[$f][1];$l=0;foreach($ed[0]as$Fa){echo"<div class='references' title='".h($dc)."' id='refs$xa-".($l++)."' style='left: $ic"."em; top: ".$h["fields"][$Fa]["pos"]."em; padding-top: .5em;'><div style='border-top: 1px solid Gray; width: ".(-$ic)."em;'></div></div>\n";}}}foreach((array)$Ze[$f]as$dc=>$gc){foreach($gc
as$xa=>$B){$ic=$xa-$xb[$f][1];$l=0;foreach($B
as$da){echo"<div class='references' title='".h($dc)."' id='refd$xa-".($l++)."' style='left: $ic"."em; top: ".$h["fields"][$da]["pos"]."em; height: 1.25em; background: url(".h(preg_replace("~\\?.*~","",ME))."?file=arrow.gif) no-repeat right center;&amp;version=3.3.1'><div style='height: .5em; border-bottom: 1px solid Gray; width: ".(-$ic)."em;'></div></div>\n";}}}echo"</div>\n";}foreach($Ja
as$f=>$h){foreach((array)$h["references"]as$dc=>$gc){foreach($gc
as$xa=>$ed){$Zc=$Yb;$ud=-10;foreach($ed[0]as$e=>$Fa){$bf=$h["pos"][0]+$h["fields"][$Fa]["pos"];$Te=$Ja[$dc]["pos"][0]+$Ja[$dc]["fields"][$ed[1][$e]]["pos"];$Zc=min($Zc,$bf,$Te);$ud=max($ud,$bf,$Te);}echo"<div class='references' id='refl$xa' style='left: $xa"."em; top: $Zc"."em; padding: .5em 0;'><div style='border-right: 1px solid Gray; margin-top: 1px; height: ".($ud-$Zc)."em;'></div></div>\n";}}}echo'</div>
<p><a href="',h(ME."schema=".urlencode($Ye)),'" id="schema-link">Permanent link</a>
';}elseif(isset($_GET["dump"])){$m=$_GET["dump"];if($_POST){$af="";foreach(array("output","format","db_style","routines","events","table_style","auto_increment","triggers","data_style")as$e){$af.="&$e=".urlencode($_POST[$e]);}cookie("adminer_export",substr($af,1));$Fb=dump_headers(($m!=""?$m:DB),(DB==""||count((array)$_POST["tables"]+(array)$_POST["data"])>1));$wb=($_POST["format"]=="sql");if($wb){echo"-- Adminer $kc ".$la[DRIVER]." dump

".($u!="sql"?"":"SET NAMES utf8;
SET foreign_key_checks = 0;
SET time_zone = ".q($g->result("SELECT @@time_zone")).";
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

");}$V=$_POST["db_style"];$_=array(DB);if(DB==""){$_=$_POST["databases"];if(is_string($_)){$_=explode("\n",rtrim(str_replace("\r","",$_),"\n"));}}foreach((array)$_
as$s){if($g->select_db($s)){if($wb&&ereg('CREATE',$V)&&($ka=$g->result("SHOW CREATE DATABASE ".idf_escape($s),1))){if($V=="DROP+CREATE"){echo"DROP DATABASE IF EXISTS ".idf_escape($s).";\n";}echo($V=="CREATE+ALTER"?preg_replace('~^CREATE DATABASE ~','\\0IF NOT EXISTS ',$ka):$ka).";\n";}if($wb){if($V){echo
use_sql($s).";\n\n";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))){echo"SET @adminer_alter = '';\n\n";}$lb="";if($_POST["routines"]){foreach(array("FUNCTION","PROCEDURE")as$Qa){foreach(get_rows("SHOW $Qa STATUS WHERE Db = ".q($s),null,"-- ")as$a){$lb.=($V!='DROP+CREATE'?"DROP $Qa IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE $Qa ".idf_escape($a["Name"]),2).";;\n\n";}}}if($_POST["events"]){foreach(get_rows("SHOW EVENTS",null,"-- ")as$a){$lb.=($V!='DROP+CREATE'?"DROP EVENT IF EXISTS ".idf_escape($a["Name"]).";;\n":"").$g->result("SHOW CREATE EVENT ".idf_escape($a["Name"]),3).";;\n\n";}}if($lb){echo"DELIMITER ;;\n\n$lb"."DELIMITER ;\n\n";}}if($_POST["table_style"]||$_POST["data_style"]){$W=array();foreach(table_status()as$a){$h=(DB==""||in_array($a["Name"],(array)$_POST["tables"]));$xe=(DB==""||in_array($a["Name"],(array)$_POST["data"]));if($h||$xe){if(!is_view($a)){if($Fb=="tar"){ob_start();}$o->dumpTable($a["Name"],($h?$_POST["table_style"]:""));if($xe){$o->dumpData($a["Name"],$_POST["data_style"],"SELECT * FROM ".table($a["Name"]));}if($wb&&$_POST["triggers"]&&$h&&($Kc=trigger_sql($a["Name"],$_POST["table_style"]))){echo"\nDELIMITER ;;\n$Kc\nDELIMITER ;\n";}if($Fb=="tar"){echo
tar_file((DB!=""?"":"$s/")."$a[Name].csv",ob_get_clean());}elseif($wb){echo"\n";}}elseif($wb){$W[]=$a["Name"];}}}foreach($W
as$Ub){$o->dumpTable($Ub,$_POST["table_style"],true);}if($Fb=="tar"){echo
pack("x512");}}if($V=="CREATE+ALTER"&&$wb){$i="SELECT TABLE_NAME, ENGINE, TABLE_COLLATION, TABLE_COMMENT FROM information_schema.TABLES WHERE TABLE_SCHEMA = DATABASE()";echo"DELIMITER ;;
CREATE PROCEDURE adminer_alter (INOUT alter_command text) BEGIN
	DECLARE _table_name, _engine, _table_collation varchar(64);
	DECLARE _table_comment varchar(64);
	DECLARE done bool DEFAULT 0;
	DECLARE tables CURSOR FOR $i;
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
	OPEN tables;
	REPEAT
		FETCH tables INTO _table_name, _engine, _table_collation, _table_comment;
		IF NOT done THEN
			CASE _table_name";foreach(get_rows($i)as$a){$va=q($a["ENGINE"]=="InnoDB"?preg_replace('~(?:(.+); )?InnoDB free: .*~','\\1',$a["TABLE_COMMENT"]):$a["TABLE_COMMENT"]);echo"
				WHEN ".q($a["TABLE_NAME"])." THEN
					".(isset($a["ENGINE"])?"IF _engine != '$a[ENGINE]' OR _table_collation != '$a[TABLE_COLLATION]' OR _table_comment != $va THEN
						ALTER TABLE ".idf_escape($a["TABLE_NAME"])." ENGINE=$a[ENGINE] COLLATE=$a[TABLE_COLLATION] COMMENT=$va;
					END IF":"BEGIN END").";";}echo"
				ELSE
					SET alter_command = CONCAT(alter_command, 'DROP TABLE `', REPLACE(_table_name, '`', '``'), '`;\\n');
			END CASE;
		END IF;
	UNTIL done END REPEAT;
	CLOSE tables;
END;;
DELIMITER ;
CALL adminer_alter(@adminer_alter);
DROP PROCEDURE adminer_alter;
";}if(in_array("CREATE+ALTER",array($V,$_POST["table_style"]))&&$wb){echo"SELECT @adminer_alter;\n";}}}if($wb){echo"-- ".$g->result("SELECT NOW()")."\n";}exit;}page_header('Export',"",($_GET["export"]!=""?array("table"=>$_GET["export"]):array()),DB);echo'
<form action="" method="post">
<table cellspacing="0">
';$Yd=array('','USE','DROP+CREATE','CREATE');$Nd=array('','DROP+CREATE','CREATE');$Md=array('','TRUNCATE+INSERT','INSERT');if($u=="sql"){$Yd[]='CREATE+ALTER';$Nd[]='CREATE+ALTER';$Md[]='INSERT+UPDATE';}parse_str($_COOKIE["adminer_export"],$a);if(!$a){$a=array("output"=>"text","format"=>"sql","db_style"=>(DB!=""?"":"CREATE"),"table_style"=>"DROP+CREATE","data_style"=>"INSERT");}if(!isset($a["events"])){$a["routines"]=$a["events"]=($_GET["dump"]=="");$a["triggers"]=$a["table_style"];}echo"<tr><th>".'Output'."<td>".html_select("output",$o->dumpOutput(),$a["output"],0)."\n";echo"<tr><th>".'Format'."<td>".html_select("format",$o->dumpFormat(),$a["format"],0)."\n";echo($u=="sqlite"?"":"<tr><th>".'Database'."<td>".html_select('db_style',$Yd,$a["db_style"]).(support("routine")?checkbox("routines",1,$a["routines"],'Routines'):"").(support("event")?checkbox("events",1,$a["events"],'Events'):"")),"<tr><th>".'Tables'."<td>".html_select('table_style',$Nd,$a["table_style"]).checkbox("auto_increment",1,$a["auto_increment"],'Auto Increment').(support("trigger")?checkbox("triggers",1,$a["triggers"],'Triggers'):""),"<tr><th>".'Data'."<td>".html_select('data_style',$Md,$a["data_style"]),'</table>
<p><input type="submit" value="Export">

<table cellspacing="0">
';$Ad=array();if(DB!=""){$fb=($m!=""?"":" checked");echo"<thead><tr>","<th style='text-align: left;'><label><input type='checkbox' id='check-tables'$fb onclick='formCheck(this, /^tables\\[/);'>".'Tables'."</label>","<th style='text-align: right;'><label>".'Data'."<input type='checkbox' id='check-data'$fb onclick='formCheck(this, /^data\\[/);'></label>","</thead>\n";$W="";foreach(table_status()as$a){$f=$a["Name"];$_c=ereg_replace("_.*","",$f);$fb=($m==""||$m==(substr($m,-1)=="%"?"$_c%":$f));$yb="<tr><td>".checkbox("tables[]",$f,$fb,$f,"formUncheck('check-tables');");if(is_view($a)){$W.="$yb\n";}else{echo"$yb<td align='right'><label>".($a["Engine"]=="InnoDB"&&$a["Rows"]?"~ ":"").$a["Rows"].checkbox("data[]",$f,$fb,"","formUncheck('check-data');")."</label>\n";}$Ad[$_c]++;}echo$W;}else{echo"<thead><tr><th style='text-align: left;'><label><input type='checkbox' id='check-databases'".($m==""?" checked":"")." onclick='formCheck(this, /^databases\\[/);'>".'Database'."</label></thead>\n";$_=get_databases();if($_){foreach($_
as$s){if(!information_schema($s)){$_c=ereg_replace("_.*","",$s);echo"<tr><td>".checkbox("databases[]",$s,$m==""||$m=="$_c%",$s,"formUncheck('check-databases');")."</label>\n";$Ad[$_c]++;}}}else{echo"<tr><td><textarea name='databases' rows='10' cols='20'></textarea>";}}echo'</table>
</form>
';$_a=true;foreach($Ad
as$e=>$b){if($e!=""&&$b>1){echo($_a?"<p>":" ")."<a href='".h(ME)."dump=".urlencode("$e%")."'>".h($e)."</a>";$_a=false;}}}elseif(isset($_GET["privileges"])){page_header('Privileges');$j=$g->query("SELECT User, Host FROM mysql.".(DB==""?"user":"db WHERE ".q($_GET["db"])." LIKE Db")." ORDER BY Host, User");if(!$j){echo'<form action=""><p>
';hidden_fields_get();echo'Username: <input name="user">
Server: <input name="host" value="localhost">
<input type="hidden" name="grant" value="">
<input type="submit" value="Edit">
</form>
';$j=$g->query("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', 1) AS User, SUBSTRING_INDEX(CURRENT_USER, '@', -1) AS Host");}echo"<table cellspacing='0'>\n","<thead><tr><th>&nbsp;<th>".'Username'."<th>".'Server'."</thead>\n";while($a=$j->fetch_assoc()){echo'<tr'.odd().'><td><a href="'.h(ME.'user='.urlencode($a["User"]).'&host='.urlencode($a["Host"])).'">'.'edit'.'</a><td>'.h($a["User"])."<td>".h($a["Host"])."\n";}echo"</table>\n",'<p><a href="'.h(ME).'user=">'.'Create user'."</a>";}elseif(isset($_GET["sql"])){if(!$n&&$_POST["export"]){dump_headers("sql");$o->dumpTable("","");$o->dumpData("","table",$_POST["query"]);exit;}restart_session();$of=&get_session("queries");$Za=&$of[DB];if(!$n&&$_POST["clear"]){$Za=array();redirect(remove_from_uri("history"));}page_header('SQL command',$n);if(!$n&&$_POST){$Ma=false;$i=$_POST["query"];if($_POST["webfile"]){$Ma=@fopen((file_exists("adminer.sql")?"adminer.sql":(file_exists("adminer.sql.gz")?"compress.zlib://adminer.sql.gz":"compress.bzip2://adminer.sql.bz2")),"rb");$i=($Ma?fread($Ma,1e6):false);}elseif($_FILES&&$_FILES["sql_file"]["error"]!=4){$i=get_file("sql_file",true);}if(is_string($i)){if(function_exists('memory_get_usage')){@ini_set("memory_limit",max(ini_get("memory_limit"),2*strlen($i)+memory_get_usage()+8e6));}if($i!=""&&strlen($i)<1e6){$aa=$i.(ereg(';$',$i)?"":";");if(!$Za||end($Za)!=$aa){$Za[]=$aa;}}$yc="(?:\\s|/\\*.*\\*/|(?:#|-- )[^\n]*\n|--\n)";if(!ini_bool("session.use_cookies")){session_write_close();}$Fd=";";$N=0;$bc=true;$G=connect();if(is_object($G)&&DB!=""){$G->select_db(DB);}$zb=0;$Oc=array();$hf='[\'`"]'.($u=="pgsql"?'|\\$[^$]*\\$':($u=="mssql"||$u=="sqlite"?'|\\[':'')).'|/\\*|-- |#';$Nf=microtime();parse_str($_COOKIE["adminer_export"],$Rd);$Td=$o->dumpFormat();unset($Td["sql"]);while($i!=""){if(!$N&&$u=="sql"&&preg_match("~^$yc*DELIMITER\\s+(.+)~i",$i,$k)){$Fd=$k[1];$i=substr($i,strlen($k[0]));}else{preg_match('('.preg_quote($Fd)."|$hf|\$)",$i,$k,PREG_OFFSET_CAPTURE,$N);$qa=$k[0][0];$N=$k[0][1]+strlen($qa);if(!$qa&&$Ma&&!feof($Ma)){$i.=fread($Ma,1e5);}else{if(!$qa&&rtrim($i)==""){break;}if($qa&&$qa!=$Fd){while(preg_match('('.($qa=='/*'?'\\*/':($qa=='['?']':(ereg('^-- |^#',$qa)?"\n":preg_quote($qa)."|\\\\."))).'|$)s',$i,$k,PREG_OFFSET_CAPTURE,$N)){$ma=$k[0][0];$N=$k[0][1]+strlen($ma);if(!$ma&&$Ma&&!feof($Ma)){$i.=fread($Ma,1e6);}elseif($ma[0]!="\\"){break;}}}else{$bc=false;$aa=substr($i,0,$k[0][1]);$zb++;$yb="<pre id='sql-$zb'><code class='jush-$u'>".shorten_utf8(trim($aa),1000)."</code></pre>\n";if(!$_POST["only_errors"]){echo$yb;ob_flush();flush();}$Eb=microtime();if($g->multi_query($aa)&&is_object($G)&&preg_match("~^$yc*USE\\b~isU",$aa)){$G->query($aa);}do{$j=$g->store_result();$Bc=microtime();$Od=format_time($Eb,$Bc).(strlen($aa)<1000?" <a href='".h(ME)."sql=".urlencode(trim($aa))."'>".'Edit'."</a>":"");if($g->error){echo($_POST["only_errors"]?$yb:""),"<p class='error'>".'Error in query'.": ".error()."\n";$Oc[]=" <a href='#sql-$zb'>$zb</a>";if($_POST["error_stops"]){break;}}elseif(is_object($j)){select($j,$G);if(!$_POST["only_errors"]){echo"<form action='' method='post'>\n","<p>".($j->num_rows?lang(array('%d row','%d rows'),$j->num_rows):"").$Od;$R="export-$zb";$Pd=", <a href='#$R' onclick=\"return !toggle('$R');\">".'Export'."</a><span id='$R' class='hidden'>: ".html_select("output",$o->dumpOutput(),$Rd["output"])." ".html_select("format",$Td,$Rd["format"])."<input type='hidden' name='query' value='".h($aa)."'>"." <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'><input type='hidden' name='token' value='$O'></span>\n";if($G&&preg_match("~^($yc|\\()*SELECT\\b~isU",$aa)&&($Cf=explain($G,$aa))){$R="explain-$zb";echo", <a href='#$R' onclick=\"return !toggle('$R');\">EXPLAIN</a>$Pd","<div id='$R' class='hidden'>\n";select($Cf,$G,($u=="sql"?"http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/explain-output.html#explain_":""));echo"</div>\n";}else{echo$Pd;}echo"</form>\n";}}else{if(preg_match("~^$yc*(CREATE|DROP|ALTER)$yc+(DATABASE|SCHEMA)\\b~isU",$aa)){restart_session();set_session("dbs",null);session_write_close();}if(!$_POST["only_errors"]){echo"<p class='message' title='".h($g->info)."'>".lang(array('Query executed OK, %d row affected.','Query executed OK, %d rows affected.'),$g->affected_rows)."$Od\n";}}$Eb=$Bc;}while($g->next_result());$i=substr($i,$N);$N=0;}}}}if($bc){echo"<p class='message'>".'No commands to execute.'."\n";}elseif($_POST["only_errors"]){echo"<p class='message'>".lang(array('%d query executed OK.','%d queries executed OK.'),$zb-count($Oc)).format_time($Nf,microtime())."\n";}elseif($Oc&&$zb>1){echo"<p class='error'>".'Error in query'.": ".implode("",$Oc)."\n";}}else{echo"<p class='error'>".upload_error($i)."\n";}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
<p>';$aa=$_GET["sql"];if($_POST){$aa=$_POST["query"];}elseif($_GET["history"]=="all"){$aa=$Za;}elseif($_GET["history"]!=""){$aa=$Za[$_GET["history"]];}textarea("query",$aa,20);echo($_POST?"":"<script type='text/javascript'>document.getElementsByTagName('textarea')[0].focus();</script>\n"),"<p>".(ini_bool("file_uploads")?'File upload'.': <input type="file" name="sql_file"'.($_FILES&&$_FILES["sql_file"]["error"]!=4?'':' onchange="this.form[\'only_errors\'].checked = true;"').'> (&lt; '.ini_get("upload_max_filesize").'B)':'File uploads are disabled.'),'<p>
<input type="submit" value="Execute" title="Ctrl+Enter">
<input type="hidden" name="token" value="',$O,'">
',checkbox("error_stops",1,$_POST["error_stops"],'Stop on error')."\n",checkbox("only_errors",1,$_POST["only_errors"],'Show only errors')."\n";print_fieldset("webfile",'From server',$_POST["webfile"],"document.getElementById('form')['only_errors'].checked = true; ");$jd=array();foreach(array("gz"=>"zlib","bz2"=>"bz2")as$e=>$b){if(extension_loaded($b)){$jd[]=".$e";}}echo
sprintf('Webserver file %s',"<code>adminer.sql".($jd?"[".implode("|",$jd)."]":"")."</code>"),' <input type="submit" name="webfile" value="'.'Run file'.'">',"</div></fieldset>\n";if($Za){print_fieldset("history",'History',$_GET["history"]!="");foreach($Za
as$e=>$b){echo'<a href="'.h(ME."sql=&history=$e").'">'.'Edit'."</a> <code class='jush-$u'>".shorten_utf8(ltrim(str_replace("\n"," ",str_replace("\r","",preg_replace('~^(#|-- ).*~m','',$b)))),80,"</code>")."<br>\n";}echo"<input type='submit' name='clear' value='".'Clear'."'>\n","<a href='".h(ME."sql=&history=all")."'>".'Edit all'."</a>\n","</div></fieldset>\n";}echo'
</form>
';}elseif(isset($_GET["edit"])){$m=$_GET["edit"];$t=(isset($_GET["select"])?(count($_POST["check"])==1?where_check($_POST["check"][0]):""):where($_GET));$oa=(isset($_GET["select"])?$_POST["edit"]:$t);$p=fields($m);foreach($p
as$f=>$d){if(!isset($d["privileges"][$oa?"update":"insert"])||$o->fieldName($d)==""){unset($p[$f]);}}if($_POST&&!$n&&!isset($_GET["select"])){$fa=$_POST["referer"];if($_POST["insert"]){$fa=($oa?null:$_SERVER["REQUEST_URI"]);}elseif(!ereg('^.+&select=.+$',$fa)){$fa=ME."select=".urlencode($m);}if(isset($_POST["delete"])){query_redirect("DELETE".limit1("FROM ".table($m)," WHERE $t"),$fa,'Item has been deleted.');}else{$r=array();foreach($p
as$f=>$d){$b=process_input($d);if($b!==false&&$b!==null){$r[idf_escape($f)]=($oa?"\n".idf_escape($f)." = $b":$b);}}if($oa){if(!$r){redirect($fa);}query_redirect("UPDATE".limit1(table($m)." SET".implode(",",$r),"\nWHERE $t"),$fa,'Item has been updated.');}else{$j=insert_into($m,$r);$se=($j?last_id():0);queries_redirect($fa,sprintf('Item%s has been inserted.',($se?" $se":"")),$j);}}}$Ca=$o->tableName(table_status($m));page_header(($oa?'Edit':'Insert'),$n,array("select"=>array($m,$Ca)),$Ca);$a=null;if($_POST["save"]){$a=(array)$_POST["fields"];}elseif($t){$J=array();foreach($p
as$f=>$d){if(isset($d["privileges"]["select"])){$J[]=($_POST["clone"]&&$d["auto_increment"]?"'' AS ":(ereg("enum|set",$d["type"])?"1*".idf_escape($f)." AS ":"")).idf_escape($f);}}$a=array();if($J){$H=get_rows("SELECT".limit(implode(", ",$J)." FROM ".table($m)," WHERE $t",(isset($_GET["select"])?2:1)));$a=(isset($_GET["select"])&&count($H)!=1?null:reset($H));}}echo'
<form action="" method="post" enctype="multipart/form-data" id="form">
';if($p){echo"<table cellspacing='0' onkeydown='return editingKeydown(event);'>\n";foreach($p
as$f=>$d){echo"<tr><th>".$o->fieldName($d);$Ba=$_GET["set"][bracket_escape($f)];$q=(isset($a)?($a[$f]!=""&&ereg("enum|set",$d["type"])?(is_array($a[$f])?array_sum($a[$f]):+$a[$f]):$a[$f]):(!$oa&&$d["auto_increment"]?"":(isset($_GET["select"])?false:(isset($Ba)?$Ba:$d["default"]))));if(!$_POST["save"]&&is_string($q)){$q=$o->editVal($q,$d);}$L=($_POST["save"]?(string)$_POST["function"][$f]:($oa&&$d["on_update"]=="CURRENT_TIMESTAMP"?"now":($q===false?null:(isset($q)?'':'NULL'))));if($d["type"]=="timestamp"&&$q=="CURRENT_TIMESTAMP"){$q="";$L="now";}input($d,$q,$L);echo"\n";}echo"</table>\n";}echo'<p>
';if($p){echo"<input type='submit' value='".'Save'."'>\n";if(!isset($_GET["select"])){echo"<input type='submit' name='insert' value='".($oa?'Save and continue edit':'Save and insert next')."' title='Ctrl+Shift+Enter'>\n";}}echo($oa?"<input type='submit' name='delete' value='".'Delete'."' onclick=\"return confirm('".'Are you sure?'."');\">\n":($_POST||!$p?"":"<script type='text/javascript'>document.getElementById('form').getElementsByTagName('td')[1].firstChild.focus();</script>\n"));if(isset($_GET["select"])){hidden_fields(array("check"=>(array)$_POST["check"],"clone"=>$_POST["clone"],"all"=>$_POST["all"]));}echo'<input type="hidden" name="referer" value="',h(isset($_POST["referer"])?$_POST["referer"]:$_SERVER["HTTP_REFERER"]),'">
<input type="hidden" name="save" value="1">
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["create"])){$m=$_GET["create"];$le=array('HASH','LINEAR HASH','KEY','LINEAR KEY','RANGE','LIST');$ke=referencable_primary($m);$ga=array();foreach($ke
as$Ca=>$d){$ga[str_replace("`","``",$Ca)."`".str_replace("`","``",$d["field"])]=$Ca;}$Xc=array();$Qc=array();if($m!=""){$Xc=fields($m);$Qc=table_status($m);}if($_POST&&!$_POST["fields"]){$_POST["fields"]=array();}if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){if($_POST["drop"]){query_redirect("DROP TABLE ".table($m),substr(ME,0,-1),'Table has been dropped.');}else{$p=array();$Oa=array();ksort($_POST["fields"]);$ld=reset($Xc);$Ib="FIRST";foreach($_POST["fields"]as$e=>$d){$A=$ga[$d["type"]];$Pc=(isset($A)?$ke[$A]:$d);if($d["field"]!=""){if(!$d["has_default"]){$d["default"]=null;}$Ba=eregi_replace(" *on update CURRENT_TIMESTAMP","",$d["default"]);if($Ba!=$d["default"]){$d["on_update"]="CURRENT_TIMESTAMP";$d["default"]=$Ba;}if($e==$_POST["auto_increment_col"]){$d["auto_increment"]=true;}$ie=process_field($d,$Pc);if($ie!=process_field($ld,$ld)){$p[]=array($d["orig"],$ie,$Ib);}if(isset($A)){$Oa[idf_escape($d["field"])]=($m!=""?"ADD":" ")." FOREIGN KEY (".idf_escape($d["field"]).") REFERENCES ".table($ga[$d["type"]])." (".idf_escape($Pc["field"]).")".(in_array($d["on_delete"],$db)?" ON DELETE $d[on_delete]":"");}$Ib="AFTER ".idf_escape($d["field"]);}elseif($d["orig"]!=""){$p[]=array($d["orig"]);}if($d["orig"]!=""){$ld=next($Xc);}}$tb="";if(in_array($_POST["partition_by"],$le)){$pd=array();if($_POST["partition_by"]=='RANGE'||$_POST["partition_by"]=='LIST'){foreach(array_filter($_POST["partition_names"])as$e=>$b){$q=$_POST["partition_values"][$e];$pd[]="\nPARTITION ".idf_escape($b)." VALUES ".($_POST["partition_by"]=='RANGE'?"LESS THAN":"IN").($q!=""?" ($q)":" MAXVALUE");}}$tb.="\nPARTITION BY $_POST[partition_by]($_POST[partition])".($pd?" (".implode(",",$pd)."\n)":($_POST["partitions"]?" PARTITIONS ".(+$_POST["partitions"]):""));}elseif($m!=""&&support("partitioning")){$tb.="\nREMOVE PARTITIONING";}$ua='Table has been altered.';if($m==""){cookie("adminer_engine",$_POST["Engine"]);$ua='Table has been created.';}queries_redirect(ME."table=".urlencode($_POST["name"]),$ua,alter_table($m,$_POST["name"],$p,$Oa,$_POST["Comment"],($_POST["Engine"]&&$_POST["Engine"]!=$Qc["Engine"]?$_POST["Engine"]:""),($_POST["Collation"]&&$_POST["Collation"]!=$Qc["Collation"]?$_POST["Collation"]:""),($_POST["Auto_increment"]!=""?+$_POST["Auto_increment"]:""),$tb));}}page_header(($m!=""?'Alter table':'Create table'),$n,array("table"=>$m),$m);$a=array("Engine"=>$_COOKIE["adminer_engine"],"fields"=>array(array("field"=>"","type"=>(isset($Q["int"])?"int":(isset($Q["integer"])?"integer":"")))),"partition_names"=>array(""),);if($_POST){$a=$_POST;if($a["auto_increment_col"]){$a["fields"][$a["auto_increment_col"]]["auto_increment"]=true;}process_fields($a["fields"]);}elseif($m!=""){$a=$Qc;$a["name"]=$m;$a["fields"]=array();if(!$_GET["auto_increment"]){$a["Auto_increment"]="";}foreach($Xc
as$d){$d["has_default"]=isset($d["default"]);if($d["on_update"]){$d["default"].=" ON UPDATE $d[on_update]";}$a["fields"][]=$d;}if(support("partitioning")){$cc="FROM information_schema.PARTITIONS WHERE TABLE_SCHEMA = ".q(DB)." AND TABLE_NAME = ".q($m);$j=$g->query("SELECT PARTITION_METHOD, PARTITION_ORDINAL_POSITION, PARTITION_EXPRESSION $cc ORDER BY PARTITION_ORDINAL_POSITION DESC LIMIT 1");list($a["partition_by"],$a["partitions"],$a["partition"])=$j->fetch_row();$a["partition_names"]=array();$a["partition_values"]=array();foreach(get_rows("SELECT PARTITION_NAME, PARTITION_DESCRIPTION $cc AND PARTITION_NAME != '' ORDER BY PARTITION_ORDINAL_POSITION")as$ad){$a["partition_names"][]=$ad["PARTITION_NAME"];$a["partition_values"][]=$ad["PARTITION_DESCRIPTION"];}$a["partition_names"][]="";}}$Z=collations();$od=floor(extension_loaded("suhosin")?(min(ini_get("suhosin.request.max_vars"),ini_get("suhosin.post.max_vars"))-13)/10:0);if($od&&count($a["fields"])>$od){echo"<p class='error'>".h(sprintf('Maximum number of allowed fields exceeded. Please increase %s and %s.','suhosin.post.max_vars','suhosin.request.max_vars'))."\n";}$hd=engines();foreach($hd
as$vb){if(!strcasecmp($vb,$a["Engine"])){$a["Engine"]=$vb;break;}}echo'
<form action="" method="post" id="form">
<p>
Table name: <input name="name" maxlength="64" value="',h($a["name"]),'">
';if($m==""&&!$_POST){?><script type='text/javascript'>document.getElementById('form')['name'].focus();</script><?php }echo($hd?html_select("Engine",array(""=>"(".'engine'.")")+$hd,$a["Engine"]):""),' ',($Z&&!ereg("sqlite|mssql",$u)?html_select("Collation",array(""=>"(".'collation'.")")+$Z,$a["Collation"]):""),' <input type="submit" value="Save">
<table cellspacing="0" id="edit-fields" class="nowrap">
';$Ab=($_POST?$_POST["comments"]:$a["Comment"]!="");if(!$_POST&&!$Ab){foreach($a["fields"]as$d){if($d["comment"]!=""){$Ab=true;break;}}}edit_fields($a["fields"],$Z,"TABLE",$od,$ga,$Ab);echo'</table>
<p>
Auto Increment: <input name="Auto_increment" size="6" value="',h($a["Auto_increment"]),'">
<label class="jsonly"><input type="checkbox" name="defaults" value="1"',($_POST["defaults"]?" checked":""),' onclick="columnShow(this.checked, 5);">Default values</label>
',(support("comment")?checkbox("comments",1,$Ab,'Comment',"columnShow(this.checked, 6); toggle('Comment'); if (this.checked) this.form['Comment'].focus();",true).' <input id="Comment" name="Comment" value="'.h($a["Comment"]).'" maxlength="60"'.($Ab?'':' class="hidden"').'>':''),'<p>
<input type="submit" value="Save">
';if($_GET["create"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
';if(support("partitioning")){$ne=ereg('RANGE|LIST',$a["partition_by"]);print_fieldset("partition",'Partition by',$a["partition_by"]);echo'<p>
',html_select("partition_by",array(-1=>"")+$le,$a["partition_by"],"partitionByChange(this);"),'(<input name="partition" value="',h($a["partition"]),'">)
Partitions: <input name="partitions" size="2" value="',h($a["partitions"]),'"',($ne||!$a["partition_by"]?" class='hidden'":""),'>
<table cellspacing="0" id="partition-table"',($ne?"":" class='hidden'"),'>
<thead><tr><th>Partition name<th>Values</thead>
';foreach($a["partition_names"]as$e=>$b){echo'<tr>','<td><input name="partition_names[]" value="'.h($b).'"'.($e==count($a["partition_names"])-1?' onchange="partitionNameChange(this);"':'').'>','<td><input name="partition_values[]" value="'.h($a["partition_values"][$e]).'">';}echo'</table>
</div></fieldset>
';}echo'</form>
';}elseif(isset($_GET["indexes"])){$m=$_GET["indexes"];$Cc=array("PRIMARY","UNIQUE","INDEX");$D=table_status($m);if(eregi("MyISAM|M?aria",$D["Engine"])){$Cc[]="FULLTEXT";}$K=indexes($m);if($u=="sqlite"){unset($Cc[0]);unset($K[""]);}if($_POST&&!$n&&!$_POST["add"]){$v=array();foreach($_POST["indexes"]as$w){$f=$w["name"];if(in_array($w["type"],$Cc)){$B=array();$Zb=array();$r=array();ksort($w["columns"]);foreach($w["columns"]as$e=>$C){if($C!=""){$X=$w["lengths"][$e];$r[]=idf_escape($C).($X?"(".(+$X).")":"");$B[]=$C;$Zb[]=($X?$X:null);}}if($B){$ub=$K[$f];if($ub){ksort($ub["columns"]);ksort($ub["lengths"]);if($w["type"]==$ub["type"]&&array_values($ub["columns"])===$B&&(!$ub["lengths"]||array_values($ub["lengths"])===$Zb)){unset($K[$f]);continue;}}$v[]=array($w["type"],$f,"(".implode(", ",$r).")");}}}foreach($K
as$f=>$ub){$v[]=array($ub["type"],$f,"DROP");}if(!$v){redirect(ME."table=".urlencode($m));}queries_redirect(ME."table=".urlencode($m),'Indexes have been altered.',alter_indexes($m,$v));}page_header('Indexes',$n,array("table"=>$m),$m);$p=array_keys(fields($m));$a=array("indexes"=>$K);if($_POST){$a=$_POST;if($_POST["add"]){foreach($a["indexes"]as$e=>$w){if($w["columns"][count($w["columns"])]!=""){$a["indexes"][$e]["columns"][]="";}}$w=end($a["indexes"]);if($w["type"]||array_filter($w["columns"],'strlen')||array_filter($w["lengths"],'strlen')){$a["indexes"][]=array("columns"=>array(1=>""));}}}else{foreach($a["indexes"]as$e=>$w){$a["indexes"][$e]["name"]=$e;$a["indexes"][$e]["columns"][]="";}$a["indexes"][]=array("columns"=>array(1=>""));}echo'
<form action="" method="post">
<table cellspacing="0" class="nowrap">
<thead><tr><th>Index Type<th>Column (length)<th>Name</thead>
';$na=1;foreach($a["indexes"]as$w){echo"<tr><td>".html_select("indexes[$na][type]",array(-1=>"")+$Cc,$w["type"],($na==count($a["indexes"])?"indexesAddRow(this);":1))."<td>";ksort($w["columns"]);$l=1;foreach($w["columns"]as$e=>$C){echo"<span>".html_select("indexes[$na][columns][$l]",array(-1=>"")+$p,$C,($l==count($w["columns"])?"indexesAddColumn":"indexesChangeColumn")."(this, '".js_escape($u=="sql"?"":$_GET["indexes"]."_")."');"),"<input name='indexes[$na][lengths][$l]' size='2' value='".h($w["lengths"][$e])."'> </span>";$l++;}echo"<td><input name='indexes[$na][name]' value='".h($w["name"])."'>\n";$na++;}echo'</table>
<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add next"></noscript>
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["database"])){if($_POST&&!$n&&!isset($_POST["add_x"])){restart_session();if($_POST["drop"]){$_GET["db"]="";queries_redirect(remove_from_uri("db|database"),'Database has been dropped.',drop_databases(array(DB)));}elseif(DB!==$_POST["name"]){if(DB!=""){$_GET["db"]=$_POST["name"];queries_redirect(preg_replace('~db=[^&]*&~','',ME)."db=".urlencode($_POST["name"]),'Database has been renamed.',rename_database($_POST["name"],$_POST["collation"]));}else{$_=explode("\n",str_replace("\r","",$_POST["name"]));$re=true;$sb="";foreach($_
as$s){if(count($_)==1||$s!=""){if(!create_database($s,$_POST["collation"])){$re=false;}$sb=$s;}}queries_redirect(ME."db=".urlencode($sb),'Database has been created.',$re);}}else{if(!$_POST["collation"]){redirect(substr(ME,0,-1));}query_redirect("ALTER DATABASE ".idf_escape($_POST["name"]).(eregi('^[a-z0-9_]+$',$_POST["collation"])?" COLLATE $_POST[collation]":""),substr(ME,0,-1),'Database has been altered.');}}page_header(DB!=""?'Alter database':'Create database',$n,array(),DB);$Z=collations();$f=DB;$nc=null;if($_POST){$f=$_POST["name"];$nc=$_POST["collation"];}elseif(DB!=""){$nc=db_collation(DB,$Z);}elseif($u=="sql"){foreach(get_vals("SHOW GRANTS")as$ia){if(preg_match('~ ON (`(([^\\\\`]|``|\\\\.)*)%`\\.\\*)?~',$ia,$k)&&$k[1]){$f=stripcslashes(idf_unescape("`$k[2]`"));break;}}}echo'
<form action="" method="post">
<p>
',($_POST["add_x"]||strpos($f,"\n")?'<textarea id="name" name="name" rows="10" cols="40">'.h($f).'</textarea><br>':'<input id="name" name="name" value="'.h($f).'" maxlength="64">')."\n".($Z?html_select("collation",array(""=>"(".'collation'.")")+$Z,$nc):"");?>
<script type='text/javascript'>document.getElementById('name').focus();</script>
<input type="submit" value="Save">
<?php
if(DB!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}elseif(!$_POST["add_x"]&&$_GET["db"]==""){echo"<input type='image' name='add' src='".h(preg_replace("~\\?.*~","",ME))."?file=plus.gif&amp;version=3.3.1' alt='+' title='".'Add next'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["scheme"])){if($_POST&&!$n){$x=preg_replace('~ns=[^&]*&~','',ME)."ns=";if($_POST["drop"]){query_redirect("DROP SCHEMA ".idf_escape($_GET["ns"]),$x,'Schema has been dropped.');}else{$x.=urlencode($_POST["name"]);if($_GET["ns"]==""){query_redirect("CREATE SCHEMA ".idf_escape($_POST["name"]),$x,'Schema has been created.');}elseif($_GET["ns"]!=$_POST["name"]){query_redirect("ALTER SCHEMA ".idf_escape($_GET["ns"])." RENAME TO ".idf_escape($_POST["name"]),$x,'Schema has been altered.');}else{redirect($x);}}}page_header($_GET["ns"]!=""?'Alter schema':'Create schema',$n);$a=array("name"=>$_GET["ns"]);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Save">
';if($_GET["ns"]!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["call"])){$Pa=$_GET["call"];page_header('Call'.": ".h($Pa),$n);$Qa=routine($Pa,(isset($_GET["callf"])?"FUNCTION":"PROCEDURE"));$Jb=array();$lb=array();foreach($Qa["fields"]as$l=>$d){if(substr($d["inout"],-3)=="OUT"){$lb[$l]="@".idf_escape($d["field"])." AS ".idf_escape($d["field"]);}if(!$d["inout"]||substr($d["inout"],0,2)=="IN"){$Jb[]=$l;}}if(!$n&&$_POST){$qe=array();foreach($Qa["fields"]as$e=>$d){if(in_array($e,$Jb)){$b=process_input($d);if($b===false){$b="''";}if(isset($lb[$e])){$g->query("SET @".idf_escape($d["field"])." = $b");}}$qe[]=(isset($lb[$e])?"@".idf_escape($d["field"]):$b);}$i=(isset($_GET["callf"])?"SELECT":"CALL")." ".idf_escape($Pa)."(".implode(", ",$qe).")";echo"<p><code class='jush-$u'>".h($i)."</code> <a href='".h(ME)."sql=".urlencode($i)."'>".'Edit'."</a>\n";if(!$g->multi_query($i)){echo"<p class='error'>".error()."\n";}else{$G=connect();if(is_object($G)){$G->select_db(DB);}do{$j=$g->store_result();if(is_object($j)){select($j,$G);}else{echo"<p class='message'>".lang(array('Routine has been called, %d row affected.','Routine has been called, %d rows affected.'),$g->affected_rows)."\n";}}while($g->next_result());if($lb){select($g->query("SELECT ".implode(", ",$lb)));}}}echo'
<form action="" method="post">
';if($Jb){echo"<table cellspacing='0'>\n";foreach($Jb
as$e){$d=$Qa["fields"][$e];$f=$d["field"];echo"<tr><th>".$o->fieldName($d);$q=$_POST["fields"][$f];if($q!=""){if($d["type"]=="enum"){$q=+$q;}if($d["type"]=="set"){$q=array_sum($q);}}input($d,$q,(string)$_POST["function"][$f]);echo"\n";}echo"</table>\n";}echo'<p>
<input type="submit" value="Call">
<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["foreign"])){$m=$_GET["foreign"];if($_POST&&!$n&&!$_POST["add"]&&!$_POST["change"]&&!$_POST["change-js"]){if($_POST["drop"]){query_redirect("ALTER TABLE ".table($m)."\nDROP ".($u=="sql"?"FOREIGN KEY ":"CONSTRAINT ").idf_escape($_GET["name"]),ME."table=".urlencode($m),'Foreign key has been dropped.');}else{$Fa=array_filter($_POST["source"],'strlen');ksort($Fa);$da=array();foreach($Fa
as$e=>$b){$da[$e]=$_POST["target"][$e];}query_redirect("ALTER TABLE ".table($m).($_GET["name"]!=""?"\nDROP FOREIGN KEY ".idf_escape($_GET["name"]).",":"")."\nADD FOREIGN KEY (".implode(", ",array_map('idf_escape',$Fa)).") REFERENCES ".table($_POST["table"])." (".implode(", ",array_map('idf_escape',$da)).")".(in_array($_POST["on_delete"],$db)?" ON DELETE $_POST[on_delete]":"").(in_array($_POST["on_update"],$db)?" ON UPDATE $_POST[on_update]":""),ME."table=".urlencode($m),($_GET["name"]!=""?'Foreign key has been altered.':'Foreign key has been created.'));$n='Source and target columns must have the same data type, there must be an index on the target columns and referenced data must exist.'."<br>$n";}}page_header('Foreign key',$n,array("table"=>$m),$m);$a=array("table"=>$m,"source"=>array(""));if($_POST){$a=$_POST;ksort($a["source"]);if($_POST["add"]){$a["source"][]="";}elseif($_POST["change"]||$_POST["change-js"]){$a["target"]=array();}}elseif($_GET["name"]!=""){$ga=foreign_keys($m);$a=$ga[$_GET["name"]];$a["source"][]="";}$Fa=array_keys(fields($m));$da=($m===$a["table"]?$Fa:array_keys(fields($a["table"])));$pe=array();foreach(table_status()as$f=>$D){if(fk_support($D)){$pe[]=$f;}}echo'
<form action="" method="post">
<p>
';if($a["db"]==""&&$a["ns"]==""){echo'Target table:
',html_select("table",$pe,$a["table"],"this.form['change-js'].value = '1'; if (!ajaxForm(this.form)) this.form.submit();"),'<input type="hidden" name="change-js" value="">
<noscript><p><input type="submit" name="change" value="Change"></noscript>
<table cellspacing="0">
<thead><tr><th>Source<th>Target</thead>
';$na=0;foreach($a["source"]as$e=>$b){echo"<tr>","<td>".html_select("source[".(+$e)."]",array(-1=>"")+$Fa,$b,($na==count($a["source"])-1?"foreignAddRow(this);":1)),"<td>".html_select("target[".(+$e)."]",$da,$a["target"][$e]);$na++;}echo'</table>
<p>
ON DELETE: ',html_select("on_delete",array(-1=>"")+$db,$a["on_delete"]),' ON UPDATE: ',html_select("on_update",array(-1=>"")+$db,$a["on_update"]),'<p>
<input type="submit" value="Save">
<noscript><p><input type="submit" name="add" value="Add column"></noscript>
';}if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["view"])){$m=$_GET["view"];$Ya=false;if($_POST&&!$n){$Ya=drop_create("DROP VIEW ".table($m),"CREATE VIEW ".table($_POST["name"])." AS\n$_POST[select]",($_POST["drop"]?substr(ME,0,-1):ME."table=".urlencode($_POST["name"])),'View has been dropped.','View has been altered.','View has been created.',$m);}page_header(($m!=""?'Alter view':'Create view'),$n,array("table"=>$m),$m);$a=array();if($_POST){$a=$_POST;}elseif($m!=""){$a=view($m);$a["name"]=$m;}echo'
<form action="" method="post">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
<p>';textarea("select",$a["select"]);echo'<p>
';if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="submit" value="Save">
';if($_GET["view"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["event"])){$nb=$_GET["event"];$Ud=array("YEAR","QUARTER","MONTH","DAY","HOUR","MINUTE","WEEK","SECOND","YEAR_MONTH","DAY_HOUR","DAY_MINUTE","DAY_SECOND","HOUR_MINUTE","HOUR_SECOND","MINUTE_SECOND");$Jd=array("ENABLED"=>"ENABLE","DISABLED"=>"DISABLE","SLAVESIDE_DISABLED"=>"DISABLE ON SLAVE");if($_POST&&!$n){if($_POST["drop"]){query_redirect("DROP EVENT ".idf_escape($nb),substr(ME,0,-1),'Event has been dropped.');}elseif(in_array($_POST["INTERVAL_FIELD"],$Ud)&&isset($Jd[$_POST["STATUS"]])){$oe="\nON SCHEDULE ".($_POST["INTERVAL_VALUE"]?"EVERY ".q($_POST["INTERVAL_VALUE"])." $_POST[INTERVAL_FIELD]".($_POST["STARTS"]?" STARTS ".q($_POST["STARTS"]):"").($_POST["ENDS"]?" ENDS ".q($_POST["ENDS"]):""):"AT ".q($_POST["STARTS"]))." ON COMPLETION".($_POST["ON_COMPLETION"]?"":" NOT")." PRESERVE";queries_redirect(substr(ME,0,-1),($nb!=""?'Event has been altered.':'Event has been created.'),queries(($nb!=""?"ALTER EVENT ".idf_escape($nb).$oe.($nb!=$_POST["EVENT_NAME"]?"\nRENAME TO ".idf_escape($_POST["EVENT_NAME"]):""):"CREATE EVENT ".idf_escape($_POST["EVENT_NAME"]).$oe)."\n".$Jd[$_POST["STATUS"]]." COMMENT ".q($_POST["EVENT_COMMENT"]).rtrim(" DO\n$_POST[EVENT_DEFINITION]",";").";"));}}page_header(($nb!=""?'Alter event'.": ".h($nb):'Create event'),$n);$a=array();if($_POST){$a=$_POST;}elseif($nb!=""){$H=get_rows("SELECT * FROM information_schema.EVENTS WHERE EVENT_SCHEMA = ".q(DB)." AND EVENT_NAME = ".q($nb));$a=reset($H);}echo'
<form action="" method="post">
<table cellspacing="0">
<tr><th>Name<td><input name="EVENT_NAME" value="',h($a["EVENT_NAME"]),'" maxlength="64">
<tr><th>Start<td><input name="STARTS" value="',h("$a[EXECUTE_AT]$a[STARTS]"),'">
<tr><th>End<td><input name="ENDS" value="',h($a["ENDS"]),'">
<tr><th>Every<td><input name="INTERVAL_VALUE" value="',h($a["INTERVAL_VALUE"]),'" size="6"> ',html_select("INTERVAL_FIELD",$Ud,$a["INTERVAL_FIELD"]),'<tr><th>Status<td>',html_select("STATUS",$Jd,$a["STATUS"]),'<tr><th>Comment<td><input name="EVENT_COMMENT" value="',h($a["EVENT_COMMENT"]),'" maxlength="64">
<tr><th>&nbsp;<td>',checkbox("ON_COMPLETION","PRESERVE",$a["ON_COMPLETION"]=="PRESERVE",'On completion preserve'),'</table>
<p>';textarea("EVENT_DEFINITION",$a["EVENT_DEFINITION"]);echo'<p>
<input type="submit" value="Save">
';if($nb!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["procedure"])){$Pa=$_GET["procedure"];$Qa=(isset($_GET["function"])?"FUNCTION":"PROCEDURE");$rd=routine_languages();$Ya=false;if($_POST&&!$n&&!$_POST["add"]&&!$_POST["drop_col"]&&!$_POST["up"]&&!$_POST["down"]){$r=array();$p=(array)$_POST["fields"];ksort($p);foreach($p
as$d){if($d["field"]!=""){$r[]=(ereg("^($Sb)\$",$d["inout"])?"$d[inout] ":"").idf_escape($d["field"]).process_type($d,"CHARACTER SET");}}$Ya=drop_create("DROP $Qa ".idf_escape($Pa),"CREATE $Qa ".idf_escape($_POST["name"])." (".implode(", ",$r).")".(isset($_GET["function"])?" RETURNS".process_type($_POST["returns"],"CHARACTER SET"):"").(in_array($_POST["language"],$rd)?" LANGUAGE $_POST[language]":"").rtrim("\n$_POST[definition]",";").";",substr(ME,0,-1),'Routine has been dropped.','Routine has been altered.','Routine has been created.',$Pa);}page_header(($Pa!=""?(isset($_GET["function"])?'Alter function':'Alter procedure').": ".h($Pa):(isset($_GET["function"])?'Create function':'Create procedure')),$n);$Z=get_vals("SHOW CHARACTER SET");sort($Z);$a=array("fields"=>array());if($_POST){$a=$_POST;$a["fields"]=(array)$a["fields"];process_fields($a["fields"]);}elseif($Pa!=""){$a=routine($Pa,$Qa);$a["name"]=$Pa;}echo'
<form action="" method="post" id="form">
<p>Name: <input name="name" value="',h($a["name"]),'" maxlength="64">
',($rd?'Language'.": ".html_select("language",$rd,$a["language"]):""),'<table cellspacing="0" class="nowrap">
';edit_fields($a["fields"],$Z,$Qa);if(isset($_GET["function"])){echo"<tr><td>".'Return type';edit_type("returns",$a["returns"],$Z);}echo'</table>
<p>';textarea("definition",$a["definition"]);echo'<p>
<input type="submit" value="Save">
';if($Pa!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["sequence"])){$Db=$_GET["sequence"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP SEQUENCE ".idf_escape($Db),$x,'Sequence has been dropped.');}elseif($Db==""){query_redirect("CREATE SEQUENCE ".idf_escape($_POST["name"]),$x,'Sequence has been created.');}elseif($Db!=$_POST["name"]){query_redirect("ALTER SEQUENCE ".idf_escape($Db)." RENAME TO ".idf_escape($_POST["name"]),$x,'Sequence has been altered.');}else{redirect($x);}}page_header($Db!=""?'Alter sequence'.": ".h($Db):'Create sequence',$n);$a=array("name"=>$Db);if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p><input name="name" value="',h($a["name"]),'">
<input type="submit" value="Save">
';if($Db!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["type"])){$Ac=$_GET["type"];if($_POST&&!$n){$x=substr(ME,0,-1);if($_POST["drop"]){query_redirect("DROP TYPE ".idf_escape($Ac),$x,'Type has been dropped.');}else{query_redirect("CREATE TYPE ".idf_escape($_POST["name"])." $_POST[as]",$x,'Type has been created.');}}page_header($Ac!=""?'Alter type'.": ".h($Ac):'Create type',$n);$a["as"]="AS ";if($_POST){$a=$_POST;}echo'
<form action="" method="post">
<p>
';if($Ac!=""){echo"<input type='submit' name='drop' value='".'Drop'."'".confirm().">\n";}else{echo"<input name='name' value='".h($a['name'])."'>\n";textarea("as",$a["as"]);echo"<p><input type='submit' value='".'Save'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["trigger"])){$m=$_GET["trigger"];$Dc=trigger_options();$he=array("INSERT","UPDATE","DELETE");$Ya=false;if($_POST&&!$n&&in_array($_POST["Timing"],$Dc["Timing"])&&in_array($_POST["Event"],$he)&&in_array($_POST["Type"],$Dc["Type"])){$Zd=" $_POST[Timing] $_POST[Event]";$_b=" ON ".table($m);$Ya=drop_create("DROP TRIGGER ".idf_escape($_GET["name"]).($u=="pgsql"?$_b:""),"CREATE TRIGGER ".idf_escape($_POST["Trigger"]).($u=="mssql"?$_b.$Zd:$Zd.$_b).rtrim(" $_POST[Type]\n$_POST[Statement]",";").";",ME."table=".urlencode($m),'Trigger has been dropped.','Trigger has been altered.','Trigger has been created.',$_GET["name"]);}page_header(($_GET["name"]!=""?'Alter trigger'.": ".h($_GET["name"]):'Create trigger'),$n,array("table"=>$m));$a=array("Trigger"=>$m."_bi");if($_POST){$a=$_POST;}elseif($_GET["name"]!=""){$a=trigger($_GET["name"]);}echo'
<form action="" method="post" id="form">
<table cellspacing="0">
<tr><th>Time<td>',html_select("Timing",$Dc["Timing"],$a["Timing"],"if (/^".preg_quote($m,"/")."_[ba][iud]$/.test(this.form['Trigger'].value)) this.form['Trigger'].value = '".js_escape($m)."_' + selectValue(this).charAt(0).toLowerCase() + selectValue(this.form['Event']).charAt(0).toLowerCase();"),'<tr><th>Event<td>',html_select("Event",$he,$a["Event"],"this.form['Timing'].onchange();"),'<tr><th>Type<td>',html_select("Type",$Dc["Type"],$a["Type"]),'</table>
<p>Name: <input name="Trigger" value="',h($a["Trigger"]),'" maxlength="64">
<p>';textarea("Statement",$a["Statement"]);echo'<p>
<input type="submit" value="Save">
';if($_GET["name"]!=""){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}if($Ya){echo'<input type="hidden" name="dropped" value="1">';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["user"])){$vd=$_GET["user"];$ra=array(""=>array("All privileges"=>""));foreach(get_rows("SHOW PRIVILEGES")as$a){foreach(explode(",",($a["Privilege"]=="Grant option"?"":$a["Context"]))as$fd){$ra[$fd][$a["Privilege"]]=$a["Comment"];}}$ra["Server Admin"]+=$ra["File access on server"];$ra["Databases"]["Create routine"]=$ra["Procedures"]["Create routine"];unset($ra["Procedures"]["Create routine"]);$ra["Columns"]=array();foreach(array("Select","Insert","Update","References")as$b){$ra["Columns"][$b]=$ra["Tables"][$b];}unset($ra["Server Admin"]["Usage"]);foreach($ra["Tables"]as$e=>$b){unset($ra["Databases"][$e]);}$lc=array();if($_POST){foreach($_POST["objects"]as$e=>$b){$lc[$b]=(array)$lc[$b]+(array)$_POST["grants"][$e];}}$kb=array();$Rc="";if(isset($_GET["host"])&&($j=$g->query("SHOW GRANTS FOR ".q($vd)."@".q($_GET["host"])))){while($a=$j->fetch_row()){if(preg_match('~GRANT (.*) ON (.*) TO ~',$a[0],$k)&&preg_match_all('~ *([^(,]*[^ ,(])( *\\([^)]+\\))?~',$k[1],$ta,PREG_SET_ORDER)){foreach($ta
as$b){if($b[1]!="USAGE"){$kb["$k[2]$b[2]"][$b[1]]=true;}if(ereg(' WITH GRANT OPTION',$a[0])){$kb["$k[2]$b[2]"]["GRANT OPTION"]=true;}}}if(preg_match("~ IDENTIFIED BY PASSWORD '([^']+)~",$a[0],$k)){$Rc=$k[1];}}}if($_POST&&!$n){$Tb=(isset($_GET["host"])?q($vd)."@".q($_GET["host"]):"''");$mb=q($_POST["user"])."@".q($_POST["host"]);$sd=q($_POST["pass"]);if($_POST["drop"]){query_redirect("DROP USER $Tb",ME."privileges=",'User has been dropped.');}else{if($Tb!=$mb){$n=!queries(($g->server_info<5?"GRANT USAGE ON *.* TO":"CREATE USER")." $mb IDENTIFIED BY".($_POST["hashed"]?" PASSWORD":"")." $sd");}elseif($_POST["pass"]!=$Rc||!$_POST["hashed"]){queries("SET PASSWORD FOR $mb = ".($_POST["hashed"]?$sd:"PASSWORD($sd)"));}if(!$n){$zc=array();foreach($lc
as$ab=>$ia){if(isset($_GET["grant"])){$ia=array_filter($ia);}$ia=array_keys($ia);if(isset($_GET["grant"])){$zc=array_diff(array_keys(array_filter($lc[$ab],'strlen')),$ia);}elseif($Tb==$mb){$Wd=array_keys((array)$kb[$ab]);$zc=array_diff($Wd,$ia);$ia=array_diff($ia,$Wd);unset($kb[$ab]);}if(preg_match('~^(.+)\\s*(\\(.*\\))?$~U',$ab,$k)&&(!grant("REVOKE",$zc,$k[2]," ON $k[1] FROM $mb")||!grant("GRANT",$ia,$k[2]," ON $k[1] TO $mb"))){$n=true;break;}}}if(!$n&&isset($_GET["host"])){if($Tb!=$mb){queries("DROP USER $Tb");}elseif(!isset($_GET["grant"])){foreach($kb
as$ab=>$zc){if(preg_match('~^(.+)(\\(.*\\))?$~U',$ab,$k)){grant("REVOKE",array_keys($zc),$k[2]," ON $k[1] FROM $mb");}}}}queries_redirect(ME."privileges=",(isset($_GET["host"])?'User has been altered.':'User has been created.'),!$n);if($Tb!=$mb){$g->query("DROP USER $mb");}}}page_header((isset($_GET["host"])?'Username'.": ".h("$vd@$_GET[host]"):'Create user'),$n,array("privileges"=>array('','Privileges')));if($_POST){$a=$_POST;$kb=$lc;}else{$a=$_GET+array("host"=>$g->result("SELECT SUBSTRING_INDEX(CURRENT_USER, '@', -1)"));$a["pass"]=$Rc;if($Rc!=""){$a["hashed"]=true;}$kb[DB!=""&&!isset($_GET["host"])?idf_escape($_GET["db"]).".*":""]=array();}echo'<form action="" method="post">
<table cellspacing="0">
<tr><th>Server<td><input name="host" maxlength="60" value="',h($a["host"]),'">
<tr><th>Username<td><input name="user" maxlength="16" value="',h($a["user"]),'">
<tr><th>Password<td><input id="pass" name="pass" value="',h($a["pass"]),'">
';if(!$a["hashed"]){echo'<script type="text/javascript">typePassword(document.getElementById(\'pass\'));</script>';}echo
checkbox("hashed",1,$a["hashed"],'Hashed',"typePassword(this.form['pass'], this.checked);"),'</table>

';echo"<table cellspacing='0'>\n","<thead><tr><th colspan='2'><a href='http://dev.mysql.com/doc/refman/".substr($g->server_info,0,3)."/en/grant.html#priv_level' target='_blank' rel='noreferrer'>".'Privileges'."</a>";$l=0;foreach($kb
as$ab=>$ia){echo'<th>'.($ab!="*.*"?"<input name='objects[$l]' value='".h($ab)."' size='10'>":"<input type='hidden' name='objects[$l]' value='*.*' size='10'>*.*");$l++;}echo"</thead>\n";foreach(array(""=>"","Server Admin"=>'Server',"Databases"=>'Database',"Tables"=>'Table',"Columns"=>'Column',"Procedures"=>'Routine',)as$fd=>$tc){foreach((array)$ra[$fd]as$wc=>$va){echo"<tr".odd()."><td".($tc?">$tc<td":" colspan='2'").' lang="en" title="'.h($va).'">'.h($wc);$l=0;foreach($kb
as$ab=>$ia){$f="'grants[$l][".h(strtoupper($wc))."]'";$q=$ia[strtoupper($wc)];if($fd=="Server Admin"&&$ab!=(isset($kb["*.*"])?"*.*":"")){echo"<td>&nbsp;";}elseif(isset($_GET["grant"])){echo"<td><select name=$f><option><option value='1'".($q?" selected":"").">".'Grant'."<option value='0'".($q=="0"?" selected":"").">".'Revoke'."</select>";}else{echo"<td align='center'><input type='checkbox' name=$f value='1'".($q?" checked":"").($wc=="All privileges"?" id='grants-$l-all'":($wc=="Grant option"?"":" onclick=\"if (this.checked) formUncheck('grants-$l-all');\"")).">";}$l++;}}}echo"</table>\n",'<p>
<input type="submit" value="Save">
';if(isset($_GET["host"])){echo'<input type="submit" name="drop" value="Drop"',confirm(),'>';}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["processlist"])){if(support("kill")&&$_POST&&!$n){$xd=0;foreach((array)$_POST["kill"]as$b){if(queries("KILL ".(+$b))){$xd++;}}queries_redirect(ME."processlist=",lang(array('%d process has been killed.','%d processes have been killed.'),$xd),$xd||!$_POST["kill"]);}page_header('Process list',$n);echo'
<form action="" method="post">
<table cellspacing="0" onclick="tableClick(event);" class="nowrap">
';$l=-1;foreach(process_list()as$l=>$a){if(!$l){echo"<thead><tr lang='en'>".(support("kill")?"<th>&nbsp;":"")."<th>".implode("<th>",array_keys($a))."</thead>\n";}echo"<tr".odd().">".(support("kill")?"<td>".checkbox("kill[]",$a["Id"],0):"");foreach($a
as$e=>$b){echo"<td>".(($u=="sql"?$e=="Info"&&$b!="":$e=="current_query"&&$b!="<IDLE>")?"<code class='jush-$u'>".shorten_utf8($b,100,"</code>").' <a href="'.h(ME.($a["db"]!=""?"db=".urlencode($a["db"])."&":"")."sql=".urlencode($b)).'">'.'Edit'.'</a>':nbsp($b));}echo"\n";}echo'</table>
<p>
';if(support("kill")){echo($l+1)."/".sprintf('%d in total',$g->result("SELECT @@max_connections")),"<p><input type='submit' value='".'Kill'."'>\n";}echo'<input type="hidden" name="token" value="',$O,'">
</form>
';}elseif(isset($_GET["select"])){$m=$_GET["select"];$D=table_status($m);$K=indexes($m);$p=fields($m);$ga=column_foreign_keys($m);if($D["Oid"]=="t"){$K[]=array("type"=>"PRIMARY","columns"=>array("oid"));}parse_str($_COOKIE["adminer_import"],$Mc);$ae=array();$B=array();$Kb=null;foreach($p
as$e=>$d){$f=$o->fieldName($d);if(isset($d["privileges"]["select"])&&$f!=""){$B[$e]=html_entity_decode(strip_tags($f));if(ereg('text|lob',$d["type"])){$Kb=$o->selectLengthProcess();}}$ae+=$d["privileges"];}list($J,$pa)=$o->selectColumnsProcess($B,$K);$t=$o->selectSearchProcess($p,$K);$cb=$o->selectOrderProcess($p,$K);$M=$o->selectLimitProcess();$cc=($J?implode(", ",$J):($D["Oid"]=="t"?"oid, ":"")."*")."\nFROM ".table($m);$yd=($pa&&count($pa)<count($J)?"\nGROUP BY ".implode(", ",$pa):"").($cb?"\nORDER BY ".implode(", ",$cb):"");if($_GET["val"]&&is_ajax()){header("Content-Type: text/plain; charset=utf-8");foreach($_GET["val"]as$Ua=>$a){echo$g->result("SELECT".limit(idf_escape(key($a))." FROM ".table($m)," WHERE ".where_check($Ua).($t?" AND ".implode(" AND ",$t):"").($cb?" ORDER BY ".implode(", ",$cb):""),1));}exit;}if($_POST&&!$n){$fe="(".implode(") OR (",array_map('where_check',(array)$_POST["check"])).")";$La=$xc=null;foreach($K
as$w){if($w["type"]=="PRIMARY"){$La=array_flip($w["columns"]);$xc=($J?$La:array());break;}}foreach((array)$xc
as$e=>$b){if(in_array(idf_escape($e),$J)){unset($xc[$e]);}}if($_POST["export"]){cookie("adminer_import","output=".urlencode($_POST["output"])."&format=".urlencode($_POST["format"]));dump_headers($m);$o->dumpTable($m,"");if(!is_array($_POST["check"])||$xc===array()){$fc=$t;if(is_array($_POST["check"])){$fc[]="($fe)";}$i="SELECT $cc".($fc?"\nWHERE ".implode(" AND ",$fc):"").$yd;}else{$ee=array();foreach($_POST["check"]as$b){$ee[]="(SELECT".limit($cc,"\nWHERE ".($t?implode(" AND ",$t)." AND ":"").where_check($b).$yd,1).")";}$i=implode(" UNION ALL ",$ee);}$o->dumpData($m,"table",$i);exit;}if(!$o->selectEmailProcess($t,$ga)){if($_POST["save"]||$_POST["delete"]){$j=true;$qb=0;$i=table($m);$r=array();if(!$_POST["delete"]){foreach($B
as$f=>$b){$b=process_input($p[$f]);if($b!==null){if($_POST["clone"]){$r[idf_escape($f)]=($b!==false?$b:idf_escape($f));}elseif($b!==false){$r[]=idf_escape($f)." = $b";}}}$i.=($_POST["clone"]?" (".implode(", ",array_keys($r)).")\nSELECT ".implode(", ",$r)."\nFROM ".table($m):" SET\n".implode(",\n",$r));}if($_POST["delete"]||$r){$bd="UPDATE";if($_POST["delete"]){$bd="DELETE";$i="FROM $i";}if($_POST["clone"]){$bd="INSERT";$i="INTO $i";}if($_POST["all"]||($xc===array()&&$_POST["check"])||count($pa)<count($J)){$j=queries($bd." $i".($_POST["all"]?($t?"\nWHERE ".implode(" AND ",$t):""):"\nWHERE $fe"));$qb=$g->affected_rows;}else{foreach((array)$_POST["check"]as$b){$j=queries($bd.limit1($i,"\nWHERE ".where_check($b)));if(!$j){break;}$qb+=$g->affected_rows;}}}queries_redirect(remove_from_uri("page"),lang(array('%d item has been affected.','%d items have been affected.'),$qb),$j);}elseif(!$_POST["import"]){if(!$_POST["val"]){$n='Double click on a value to modify it.';}else{$j=true;$qb=0;foreach($_POST["val"]as$Ua=>$a){$r=array();foreach($a
as$e=>$b){$e=bracket_escape($e,1);$r[]=idf_escape($e)." = ".(ereg('char|text',$p[$e]["type"])||$b!=""?$o->processInput($p[$e],$b):"NULL");}$i=table($m)." SET ".implode(", ",$r);$fc=" WHERE ".where_check($Ua).($t?" AND ".implode(" AND ",$t):"");$j=queries("UPDATE".(count($pa)<count($J)?" $i$fc":limit1($i,$fc)));if(!$j){break;}$qb+=$g->affected_rows;}queries_redirect(remove_from_uri(),lang(array('%d item has been affected.','%d items have been affected.'),$qb),$j);}}elseif(is_string($Ea=get_file("csv_file",true))){cookie("adminer_import","output=".urlencode($Mc["output"])."&format=".urlencode($_POST["separator"]));$j=true;$hb=array_keys($p);preg_match_all('~(?>"[^"]*"|[^"\\r\\n]+)+~',$Ea,$ta);$qb=count($ta[0]);begin();$Xa=($_POST["separator"]=="csv"?",":($_POST["separator"]=="tsv"?"\t":";"));foreach($ta[0]as$e=>$b){preg_match_all("~((\"[^\"]*\")+|[^$Xa]*)$Xa~",$b.$Xa,$Kd);if(!$e&&!array_diff($Kd[1],$hb)){$hb=$Kd[1];$qb--;}else{$r=array();foreach($Kd[1]as$l=>$Nc){$r[idf_escape($hb[$l])]=($Nc==""&&$p[$hb[$l]]["null"]?"NULL":q(str_replace('""','"',preg_replace('~^"|"$~','',$Nc))));}$j=insert_update($m,$r,$La);if(!$j){break;}}}if($j){queries("COMMIT");}queries_redirect(remove_from_uri("page"),lang(array('%d row has been imported.','%d rows have been imported.'),$qb),$j);queries("ROLLBACK");}else{$n=upload_error($Ea);}}}$Ca=$o->tableName($D);page_header('Select'.": $Ca",$n);session_write_close();$r=null;if(isset($ae["insert"])){$r="";foreach((array)$_GET["where"]as$b){if(count($ga[$b["col"]])==1&&($b["op"]=="="||(!$b["op"]&&!ereg('[_%]',$b["val"])))){$r.="&set".urlencode("[".bracket_escape($b["col"])."]")."=".urlencode($b["val"]);}}}$o->selectLinks($D,$r);if(!$B){echo"<p class='error'>".'Unable to select the table'.($p?".":": ".error())."\n";}else{echo"<form action='' id='form'>\n","<div style='display: none;'>";hidden_fields_get();echo(DB!=""?'<input type="hidden" name="db" value="'.h(DB).'">'.(isset($_GET["ns"])?'<input type="hidden" name="ns" value="'.h($_GET["ns"]).'">':""):"");echo'<input type="hidden" name="select" value="'.h($m).'">',"</div>\n";$o->selectColumnsPrint($J,$B);$o->selectSearchPrint($t,$B,$K);$o->selectOrderPrint($cb,$B,$K);$o->selectLimitPrint($M);$o->selectLengthPrint($Kb);$o->selectActionPrint();echo"</form>\n";$Y=$_GET["page"];if($Y=="last"){$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));$Y=floor(max(0,$Va-1)/$M);}$i="SELECT".limit((+$M&&$pa&&count($pa)<count($J)&&$u=="sql"?"SQL_CALC_FOUND_ROWS ":"").$cc,($t?"\nWHERE ".implode(" AND ",$t):"").$yd,($M!=""?+$M:null),($Y?$M*$Y:0),"\n");echo$o->selectQuery($i);$j=$g->query($i);if(!$j){echo"<p class='error'>".error()."\n";}else{if($u=="mssql"){$j->seek($M*$Y);}$Ic=array();echo"<form action='' method='post' enctype='multipart/form-data'>\n";$H=array();while($a=$j->fetch_assoc()){if($Y&&$u=="oracle"){unset($a["RNUM"]);}$H[]=$a;}if($_GET["page"]!="last"){$Va=(+$M&&$pa&&count($pa)<count($J)?($u=="sql"?$g->result(" SELECT FOUND_ROWS()"):$g->result("SELECT COUNT(*) FROM ($i) x")):count($H));}if(!$H){echo"<p class='message'>".'No rows.'."\n";}else{$kd=$o->backwardKeys($m,$Ca);echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);' onkeydown='return editingKeydown(event);'>\n","<thead><tr>".(!$pa&&$J?"":"<td><input type='checkbox' id='all-page' onclick='formCheck(this, /check/);'> <a href='".h($_GET["modify"]?remove_from_uri("modify"):$_SERVER["REQUEST_URI"]."&modify=1")."'>".'edit'."</a>");$nd=array();$ba=array();reset($J);$de=1;foreach($H[0]as$e=>$b){if($D["Oid"]!="t"||$e!="oid"){$b=$_GET["columns"][key($J)];$d=$p[$J?($b?$b["col"]:current($J)):$e];$f=($d?$o->fieldName($d,$de):"*");if($f!=""){$de++;$nd[$e]=$f;$C=idf_escape($e);echo'<th><a href="'.h(remove_from_uri('(order|desc)[^=]*|page').'&order%5B0%5D='.urlencode($e).($cb[0]==$C||$cb[0]==$e||(!$cb&&count($pa)<count($J)&&$pa[0]==$C)?'&desc%5B0%5D=1':'')).'">'.(!$J||$b?apply_sql_function($b["fun"],$f):h(current($J)))."</a>";}$ba[$e]=$b["fun"];next($J);}}$Zb=array();if($_GET["modify"]){foreach($H
as$a){foreach($a
as$e=>$b){$Zb[$e]=max($Zb[$e],min(40,strlen(utf8_decode($b))));}}}echo($kd?"<th>".'Relations':"")."</thead>\n";foreach($o->rowDescriptions($H,$ga)as$ha=>$a){$Dd=unique_array($H[$ha],$K);$Ua="";foreach($Dd
as$e=>$b){$Ua.="&".(isset($b)?urlencode("where[".bracket_escape($e)."]")."=".urlencode($b):"null%5B%5D=".urlencode($e));}echo"<tr".odd().">".(!$pa&&$J?"":"<td>".checkbox("check[]",substr($Ua,1),in_array(substr($Ua,1),(array)$_POST["check"]),"","this.form['all'].checked = false; formUncheck('all-page');").(count($pa)<count($J)||information_schema(DB)?"":" <a href='".h(ME."edit=".urlencode($m).$Ua)."'>".'edit'."</a>"));foreach($a
as$e=>$b){if(isset($nd[$e])){$d=$p[$e];if($b!=""&&(!isset($Ic[$e])||$Ic[$e]!="")){$Ic[$e]=(is_mail($b)?$nd[$e]:"");}$x="";$b=$o->editVal($b,$d);if(!isset($b)){$b="<i>NULL</i>";}else{if(ereg('blob|bytea|raw|file',$d["type"])&&$b!=""){$x=h(ME.'download='.urlencode($m).'&field='.urlencode($e).$Ua);}if($b===""){$b="&nbsp;";}elseif($Kb!=""&&ereg('text|blob',$d["type"])&&is_utf8($b)){$b=shorten_utf8($b,max(0,+$Kb));}else{$b=h($b);}if(!$x){foreach((array)$ga[$e]as$A){if(count($ga[$e])==1||end($A["source"])==$e){$x="";foreach($A["source"]as$l=>$Fa){$x.=where_link($l,$A["target"][$l],$H[$ha][$Fa]);}$x=h(($A["db"]!=""?preg_replace('~([?&]db=)[^&]+~','\\1'.urlencode($A["db"]),ME):ME).'select='.urlencode($A["table"]).$x);if(count($A["source"])==1){break;}}}}if($e=="COUNT(*)"){$x=h(ME."select=".urlencode($m));$l=0;foreach((array)$_GET["where"]as$y){if(!array_key_exists($y["col"],$Dd)){$x.=h(where_link($l++,$y["col"],$y["val"],$y["op"]));}}foreach($Dd
as$Ka=>$y){$x.=h(where_link($l++,$Ka,$y));}}}if(!$x){if(is_mail($b)){$x="mailto:$b";}if($be=is_url($a[$e])){$x=($be=="http"&&$vc?$a[$e]:"$be://www.adminer.org/redirect/?url=".urlencode($a[$e]));}}$R=h("val[$Ua][".bracket_escape($e)."]");$q=$_POST["val"][$Ua][bracket_escape($e)];$Vd=h(isset($q)?$q:$a[$e]);$xf=strpos($b,"<i>...</i>");$Xd=is_utf8($b)&&$H[$ha][$e]==$a[$e]&&!$ba[$e];$ge=ereg('text|lob',$d["type"]);echo(($_GET["modify"]&&$Xd)||isset($q)?"<td>".($ge?"<textarea name='$R' cols='30' rows='".(substr_count($a[$e],"\n")+1)."'>$Vd</textarea>":"<input name='$R' value='$Vd' size='$Zb[$e]'>"):"<td id='$R' ondblclick=\"".($Xd?"selectDblClick(this, event".($xf?", 2":($ge?", 1":"")).")":"alert('".h('Use edit link to modify this value.')."')").";\">".$o->selectVal($b,$x,$d));}}if($kd){echo"<td>";}$o->backwardKeysPrint($kd,$H[$ha]);echo"</tr>\n";}echo"</table>\n";}if($H||$Y){$Ld=true;if($_GET["page"]!="last"&&+$M&&count($pa)>=count($J)&&($Va>=$M||$Y)){$Va=$D["Rows"];if(!isset($Va)||$t||($D["Engine"]=="InnoDB"&&$Va<max(1e4,2*($Y+1)*$M))){ob_flush();flush();$Va=$g->result("SELECT COUNT(*) FROM ".table($m).($t?" WHERE ".implode(" AND ",$t):""));}else{$Ld=false;}}echo"<p class='pages'>";if(+$M&&$Va>$M){$Id=floor(($Va-1)/$M);echo'<a href="'.h(remove_from_uri("page"))."\" onclick=\"pageClick(this.href, +prompt('".'Page'."', '".($Y+1)."'), event); return false;\">".'Page'."</a>:",pagination(0,$Y).($Y>5?" ...":"");for($l=max(1,$Y-4);$l<min($Id,$Y+5);$l++){echo
pagination($l,$Y);}echo($Y+5<$Id?" ...":"").($Ld?pagination($Id,$Y):' <a href="'.h(remove_from_uri()."&page=last").'">'.'last'."</a>");}echo" (".($Ld?"":"~ ").lang(array('%d row','%d rows'),$Va).") ".checkbox("all",1,0,'whole result')."\n";if($o->selectCommandPrint()){?>
<fieldset><legend>Edit</legend><div>
<input type="submit" value="Save" title="Double click on a value to modify it." class="jsonly">
<input type="submit" name="edit" value="Edit">
<input type="submit" name="clone" value="Clone">
<input type="submit" name="delete" value="Delete" onclick="return confirm('Are you sure? (' + (this.form['all'].checked ? <?php echo$Va,' : formChecked(this, /check/)) + \')\');">
</div></fieldset>
';}print_fieldset("export",'Export');$Na=$o->dumpOutput();echo($Na?html_select("output",$Na,$Mc["output"])." ":""),html_select("format",$o->dumpFormat(),$Mc["format"])," <input type='submit' name='export' value='".'Export'."' onclick='eventStop(event);'>\n","</div></fieldset>\n";}if($o->selectImportPrint()){print_fieldset("import",'Import',!$H);echo"<input type='file' name='csv_file'> ",html_select("separator",array("csv"=>"CSV,","csv;"=>"CSV;","tsv"=>"TSV"),$Mc["format"],1);echo" <input type='submit' name='import' value='".'Import'."'>","<input type='hidden' name='token' value='$O'>\n","</div></fieldset>\n";}$o->selectEmailPrint(array_filter($Ic,'strlen'),$B);echo"</form>\n";}}}elseif(isset($_GET["variables"])){$Vb=isset($_GET["status"]);page_header($Vb?'Status':'Variables');$me=($Vb?show_status():show_variables());if(!$me){echo"<p class='message'>".'No rows.'."\n";}else{echo"<table cellspacing='0'>\n";foreach($me
as$e=>$b){echo"<tr>","<th><code class='jush-".$u.($Vb?"status":"set")."'>".h($e)."</code>","<td>".nbsp($b);}echo"</table>\n";}}elseif(isset($_GET["script"])){header("Content-Type: text/javascript; charset=utf-8");if($_GET["script"]=="db"){$Gc=array("Data_length"=>0,"Index_length"=>0,"Data_free"=>0);foreach(table_status()as$a){$R=js_escape($a["Name"]);json_row("Comment-$R",nbsp($a["Comment"]));if(!is_view($a)){foreach(array("Engine","Collation")as$e){json_row("$e-$R",nbsp($a[$e]));}foreach($Gc+array("Auto_increment"=>0,"Rows"=>0)as$e=>$b){if($a[$e]!=""){$b=number_format($a[$e],0,'.',',');json_row("$e-$R",($e=="Rows"&&$a["Engine"]=="InnoDB"&&$b?"~ $b":$b));if(isset($Gc[$e])){$Gc[$e]+=($a["Engine"]!="InnoDB"||$e!="Data_free"?$a[$e]:0);}}elseif(array_key_exists($e,$a)){json_row("$e-$R");}}}}foreach($Gc
as$e=>$b){json_row("sum-$e",number_format($b,0,'.',','));}json_row("");}else{foreach(count_tables(get_databases())as$s=>$b){json_row("tables-".js_escape($s),$b);}json_row("");}exit;}else{$je=array_merge((array)$_POST["tables"],(array)$_POST["views"]);if($je&&!$n&&!$_POST["search"]){$j=true;$ua="";if($u=="sql"&&count($_POST["tables"])>1&&($_POST["drop"]||$_POST["truncate"]||$_POST["copy"])){queries("SET foreign_key_checks = 0");}if($_POST["truncate"]){if($_POST["tables"]){$j=truncate_tables($_POST["tables"]);}$ua='Tables have been truncated.';}elseif($_POST["move"]){$j=move_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ua='Tables have been moved.';}elseif($_POST["copy"]){$j=copy_tables((array)$_POST["tables"],(array)$_POST["views"],$_POST["target"]);$ua='Tables have been copied.';}elseif($_POST["drop"]){if($_POST["views"]){$j=drop_views($_POST["views"]);}if($j&&$_POST["tables"]){$j=drop_tables($_POST["tables"]);}$ua='Tables have been dropped.';}elseif($_POST["tables"]&&($j=queries(($_POST["optimize"]?"OPTIMIZE":($_POST["check"]?"CHECK":($_POST["repair"]?"REPAIR":"ANALYZE")))." TABLE ".implode(", ",array_map('idf_escape',$_POST["tables"]))))){while($a=$j->fetch_assoc()){$ua.="<b>".h($a["Table"])."</b>: ".h($a["Msg_text"])."<br>";}}queries_redirect(substr(ME,0,-1),$ua,$j);}page_header(($_GET["ns"]==""?'Database'.": ".h(DB):'Schema'.": ".h($_GET["ns"])),$n,true);if($o->homepage()){if($_GET["ns"]!==""){echo"<h3>".'Tables and views'."</h3>\n";$cd=tables_list();if(!$cd){echo"<p class='message'>".'No tables.'."\n";}else{echo"<form action='' method='post'>\n","<p>".'Search data in tables'.": <input name='query' value='".h($_POST["query"])."'> <input type='submit' name='search' value='".'Search'."'>\n";if($_POST["search"]&&$_POST["query"]!=""){search_tables();}echo"<table cellspacing='0' class='nowrap' onclick='tableClick(event);'>\n",'<thead><tr class="wrap"><td><input id="check-all" type="checkbox" onclick="formCheck(this, /^(tables|views)\[/);"><th>'.'Table'.'<td>'.'Engine'.'<td>'.'Collation'.'<td>'.'Data Length'.'<td>'.'Index Length'.'<td>'.'Data Free'.'<td>'.'Auto Increment'.'<td>'.'Rows'.(support("comment")?'<td>'.'Comment':'')."</thead>\n";foreach($cd
as$f=>$z){$Ub=(isset($z)&&!eregi("table",$z));echo'<tr'.odd().'><td>'.checkbox(($Ub?"views[]":"tables[]"),$f,in_array($f,$je,true),"","formUncheck('check-all');"),'<th><a href="'.h(ME).'table='.urlencode($f).'">'.h($f).'</a>';if($Ub){echo'<td colspan="6"><a href="'.h(ME)."view=".urlencode($f).'">'.'View'.'</a>','<td align="right"><a href="'.h(ME)."select=".urlencode($f).'">?</a>';}else{foreach(array("Engine"=>"","Collation"=>"","Data_length"=>"create","Index_length"=>"indexes","Data_free"=>"edit","Auto_increment"=>"auto_increment=1&create","Rows"=>"select")as$e=>$x){echo($x?"<td align='right'><a href='".h(ME."$x=").urlencode($f)."' id='$e-".h($f)."'>?</a>":"<td id='$e-".h($f)."'>&nbsp;");}}echo(support("comment")?"<td id='Comment-".h($f)."'>&nbsp;":"");}echo"<tr><td>&nbsp;<th>".sprintf('%d in total',count($cd)),"<td>".nbsp($u=="sql"?$g->result("SELECT @@storage_engine"):""),"<td>".nbsp(db_collation(DB,collations()));foreach(array("Data_length","Index_length","Data_free")as$e){echo"<td align='right' id='sum-$e'>&nbsp;";}echo"</table>\n";if(!information_schema(DB)){echo"<p>".($u=="sql"?"<input type='submit' value='".'Analyze'."'> <input type='submit' name='optimize' value='".'Optimize'."'> <input type='submit' name='check' value='".'Check'."'> <input type='submit' name='repair' value='".'Repair'."'> ":"")."<input type='submit' name='truncate' value='".'Truncate'."'".confirm("formChecked(this, /tables/)")."> <input type='submit' name='drop' value='".'Drop'."'".confirm("formChecked(this, /tables|views/)",1).">\n";$_=(support("scheme")?schemas():get_databases());if(count($_)!=1&&$u!="sqlite"){$s=(isset($_POST["target"])?$_POST["target"]:(support("scheme")?$_GET["ns"]:DB));echo"<p>".'Move to other database'.": ",($_?html_select("target",$_,$s):'<input name="target" value="'.h($s).'">')," <input type='submit' name='move' value='".'Move'."' onclick='eventStop(event);'>",(support("copy")?" <input type='submit' name='copy' value='".'Copy'."' onclick='eventStop(event);'>":""),"\n";}echo"<input type='hidden' name='token' value='$O'>\n";}echo"</form>\n";}echo'<p><a href="'.h(ME).'create=">'.'Create table'."</a>\n";if(support("view")){echo'<a href="'.h(ME).'view=">'.'Create view'."</a>\n";}if(support("routine")){echo"<h3>".'Routines'."</h3>\n";$Qd=routines();if($Qd){echo"<table cellspacing='0'>\n",'<thead><tr><th>'.'Name'.'<td>'.'Type'.'<td>'.'Return type'."<td>&nbsp;</thead>\n";odd('');foreach($Qd
as$a){echo'<tr'.odd().'>','<th><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'callf=':'call=').urlencode($a["ROUTINE_NAME"]).'">'.h($a["ROUTINE_NAME"]).'</a>','<td>'.h($a["ROUTINE_TYPE"]),'<td>'.h($a["DTD_IDENTIFIER"]),'<td><a href="'.h(ME).($a["ROUTINE_TYPE"]!="PROCEDURE"?'function=':'procedure=').urlencode($a["ROUTINE_NAME"]).'">'.'Alter'."</a>";}echo"</table>\n";}echo'<p>'.(support("procedure")?'<a href="'.h(ME).'procedure=">'.'Create procedure'.'</a> ':'').'<a href="'.h(ME).'function=">'.'Create function'."</a>\n";}if(support("sequence")){echo"<h3>".'Sequences'."</h3>\n";$Sd=get_vals("SELECT sequence_name FROM information_schema.sequences WHERE sequence_schema = current_schema()");if($Sd){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Sd
as$b){echo"<tr".odd()."><th><a href='".h(ME)."sequence=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."sequence='>".'Create sequence'."</a>\n";}if(support("type")){echo"<h3>".'User types'."</h3>\n";$Q=types();if($Q){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."</thead>\n";odd('');foreach($Q
as$b){echo"<tr".odd()."><th><a href='".h(ME)."type=".urlencode($b)."'>".h($b)."</a>\n";}echo"</table>\n";}echo"<p><a href='".h(ME)."type='>".'Create type'."</a>\n";}if(support("event")){echo"<h3>".'Events'."</h3>\n";$H=get_rows("SHOW EVENTS");if($H){echo"<table cellspacing='0'>\n","<thead><tr><th>".'Name'."<td>".'Schedule'."<td>".'Start'."<td>".'End'."</thead>\n";foreach($H
as$a){echo"<tr>",'<th><a href="'.h(ME).'event='.urlencode($a["Name"]).'">'.h($a["Name"])."</a>","<td>".($a["Execute at"]?'At given time'."<td>".$a["Execute at"]:'Every'." ".$a["Interval value"]." ".$a["Interval field"]."<td>$a[Starts]"),"<td>$a[Ends]";}echo"</table>\n";}echo'<p><a href="'.h(ME).'event=">'.'Create event'."</a>\n";}if($cd){echo"<script type='text/javascript'>ajaxSetHtml('".js_escape(ME)."script=db');</script>\n";}}}}page_footer();