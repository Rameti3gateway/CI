<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>member</title>
</head>
<body>
	<h1>เพิ่มข้อมูล Member</h1>
	<?php echo form_open('member/Add');?>
	<table>
		<tr>
			<td>ชื่อ member</td>
			<td><input type="text" name="member_name" value="" required="required"></td>
		</tr>
		<tr>
			<td>เบอร์โทร</td>
			<td><input type="text" name="member_tel" value="" required="required"></td>
		</tr>
		<tr>
			<td>ที่อยู่</td>
			<td><textarea name="member_addr" rows="5" cols="60" value="" required="required"></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input type="submit" name="btsave" value="บันทึก"><?=anchor('member','ยกเลิก');?></input></td>
		</tr>
	</table>
	<?php echo form_close();?>
</body>
</html>
