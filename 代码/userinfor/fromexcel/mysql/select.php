<html>
<head>
<STYLE>
<!--
body, table, tr, td {font-size: 12px; font-family: Verdana, MS sans serif, Arial, Helvetica, sans-serif}
td.index {font-size: 10px; color: #000000; font-weight: bold}
td.empty {font-size: 10px; color: #000000; font-weight: bold}
td.dt_string {font-size: 10px; color: #000090; font-weight: bold}
td.dt_int {font-size: 10px; color: #909000; font-weight: bold}
td.dt_float {font-size: 10px; color: #007000; font-weight: bold}
td.dt_unknown {font-size: 10px; background-color: #f0d0d0; font-weight: bold}
td.empty {font-size: 10px; background-color: #f0f0f0; font-weight: bold}
-->
</STYLE>
</head>
<body text="#000000" link="#000000" vlink="#000000" alink="#000000" topmargin="0" leftmargin="10" marginwidth="0" marginheight="0">

<table width="100%" align="center" bgcolor="#FFCCCC">
<tr>
	<td>&nbsp;</td>
	<td width="50%"><font color="#FFFFFF" size="+3">网站用户信息导入&gt;学生信息导入</font></td>
	<td width="50%" align="right"><font color="#FFFFFF" size="+2">Output in MySQL database from E </font></td>
	<td>&nbsp;</td>
</tr>
</table>




<table width="100%" border="0" align="center" bgcolor="#FFFFCC">
<tr>
<td>&nbsp;</td>
<td bgcolor="#FFFFCE">
<p>&nbsp;</p>
选择学生信息表的 .xls 文件
<p>&nbsp;</p>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td>
 <form name="exc_upload" method="post" action="studentdatainput.php" enctype="multipart/form-data">
  Excel file:&nbsp;<input type="file" size=30 name="excel_file">
  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <input type="button" value="Import" onClick="javascript:if(document.exc_upload.excel_file.value.length==0) { alert('You must specify a file first'); return; }; submit();">
 </form>
</td>
</tr>
<tr>
<td>&nbsp;</td>
<td align="right">
<p>&nbsp;</p>
<p>&nbsp;</p>
<p>&nbsp;</p>
<a href="http://www.zakkis.ca" style="font-size: 9px; text-decoration: none; font-family: Verdana, Geneva, Arial, Helvetica, sans-serif;">ZAKKIS Tech. 2002  All Rights Reserved.</a>&nbsp;&nbsp;
</td>
</tr>
</table>


</body>
</html>