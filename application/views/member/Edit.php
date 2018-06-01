<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>member</title>
</head>
<body>
	<h1>แก้ไขข้อมูล Member</h1>
	<?=form_open('member/Edit/'.$rs['id']);?>
	<table>
		<tr>
			<td>ชื่อ member</td>
			<td><input type="text" name="member_name" value="<?=$rs['member_name'];?>"></td>
		</tr>
		<tr>
			<td>เบอร์โทร</td>
			<td><input type="text" name="member_tel" value="<?=$rs['member_tel'] ;?>"></td>
		</tr>
		<tr>
			<td>ที่อยู่</td>
			<td><textarea name="member_addr" rows="5" cols="60"><?=$rs['member_address'] ?></textarea></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td><input onclick = "javascript:return confirm('คูรต้องการแก้ไขข้อมูลหรือไม่')" type="submit" name="btsave" value="บันทึก"><?=anchor('member','ยกเลิก');?></input></td>
		</tr>
	</table>
	<?=form_close();?>
</body>
</html>
