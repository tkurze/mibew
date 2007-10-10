<?php
/*
 * This file is part of Web Instant Messenger project.
 *
 * Copyright (c) 2005-2007 Internet Services Ltd.
 * All rights reserved. This program and the accompanying materials
 * are made available under the terms of the Eclipse Public License v1.0
 * which accompanies this distribution, and is available at
 * http://www.eclipse.org/legal/epl-v10.html
 *
 * Contributors:
 *    Evgeny Gryaznov - initial API and implementation
 */
?>
<html>
<head>



<link rel="stylesheet" type="text/css" media="all" href="/webim/styles.css" />


<link rel="shortcut icon" href="/webim/images/favicon.ico" type="image/x-icon"/>
<title>
	<?php echo getstring("app.title") ?>	- <?php echo getstring("page_agents.title") ?>
</title>

<meta http-equiv="keywords" content="<?php echo getstring("page.main_layout.meta_keyword") ?>">
<meta http-equiv="description" content="<?php echo getstring("page.main_layout.meta_description") ?>">
</head>

<body bgcolor="#FFFFFF" text="#000000" link="#2971C1" vlink="#2971C1" alink="#2971C1">

<table width="100%" cellpadding="2" cellspacing="0" border="0">
<tr>
<td valign="top" class="text">
	
 <table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="left" valign="top"> 
		<h1><?php echo getstring("page_agents.title") ?></h1>
 </td><td align="right" class="text" valign="top"><table cellspacing="0" cellpadding="0" border="0"><tr><td class="textform"><?php echo getstring2("menu.operator",array($page['operator'])) ?></td><td class="textform"><img src='/webim/images/topdiv.gif' width="25" height="15" border="0" alt="|" /></td><td class="textform"><a href="/webim/operator/index.php" title="<?php echo getstring("menu.main") ?>"><?php echo getstring("menu.main") ?></a></td></tr></table></td></tr></table> 
	

	<?php echo getstring("page_agents.intro") ?>

<br><br>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
   <td class="text"><b><?php echo getstring("page_agents.agents") ?></b></td>
   <td align="right">
	<table cellspacing="0" cellpadding="0" border="0">
	<tr>
    <td><img src='/webim/images/buttons/createagent.gif' border="0" altKey="page_agents.new_agent" /></td>
   	<td width="10"></td>
    <td class="text">
		<a href='/webim/operator/operator.php' title="<?php echo getstring("page_agents.new_agent") ?>">
			<?php echo getstring("page_agents.new_agent") ?>
		</a>
    </td>
	</tr>
	</table>
</td>
</tr>
<tr>
   <td colspan="2" height="15"></td>
</tr>
</table>

<table width="100%" cellspacing="0" cellpadding="0" border="0">
<tr>
	<td class='table' bgcolor='#276db8' height='30'><span class='header'><?php echo getstring("page_agents.login") ?></span></td><td width='3'></td>
	<td class='table' bgcolor='#276db8' height='30'><span class='header'><?php echo getstring("page_agents.agent_name") ?></span></td><td width='3'></td>
	<td class='table' bgcolor='#276db8' height='30'><span class='header'><?php echo getstring("page_agents.agent_commonname") ?></span></td>
</tr>
<?php foreach( $page['allowedAgents'] as $a ) { ?>
<tr>
	<td height='45' class='table'>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
	    <td><img src='/webim/images/tbliclogin.gif' width="10" height="15" border="0" alt="" /></td>
    	<td class="table">
    		<a href='/webim/operator/operator.php?op=<?php echo $a['vclogin'] ?>'>
    			<?php echo htmlspecialchars($a['vclogin']) ?>
    		</a>
    	</td>
		</tr>
		</table>
	</td><td background='/webim/images/tablediv3.gif'><img width='3' height='1' border='0' alt='' src='/webim/images/free.gif'></td>
	<td height='45' class='table'>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
	    <td><img src='/webim/images/tbllabyel.gif' width="5" height="5" border="0" alt="" /></td>
    	<td class="table"><?php echo htmlspecialchars($a['vclocalename']) ?></td>
		</tr>
		</table>
	</td><td background='/webim/images/tablediv3.gif'><img width='3' height='1' border='0' alt='' src='/webim/images/free.gif'></td>
	<td height='45' class='table'>
		<table cellspacing="0" cellpadding="0" border="0">
		<tr>
	    <td><img src='/webim/images/tbllabyel.gif' width="5" height="5" border="0" alt="" /></td>
    	<td class="table"><?php echo htmlspecialchars($a['vccommonname']) ?></td>
		</tr>
		</table>
	</td>
</tr>
<tr><td height='2' colspan='7'></td></tr><tr><td bgcolor='#e1e1e1' colspan='7'><img width='1' height='1' border='0' alt='' src='/webim/images/free.gif'></td></tr><tr><td height='2' colspan='7'></td></tr>
<?php } ?>
</table>
</td>
</tr>
</table>

</body>
</html>

