<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>member</title>
</head>
<body>
	<h1>แสดงข้อมูล Memmber</h1>
	<?=anchor("member/add","เพิ่มข้อมูล");?>
	<table border="1px">
		<thead>
			<tr>
				<th>ลำดับ</th>
				<th>ชื่อ Member</th>
				<th>เบอร์โทรศัพท์</th>
				<th>ปรับแต่ง</th>
				<th>more</th>
				
			</tr>
		</thead>
		<tbody>
			<?php 
				if (count($rs)==0){
					echo "<tr>
							<td colspan='4' align='center'>--no data--</td>	
						  </tr>";
				} else {
					$no= 1;
					foreach ($rs as $r) 
					{
						echo "<tr>";
							echo "<td align='center'>".$no."</td>";
							echo "<td>".$r['member_name']."</td>";
							echo "<td>".$r['member_tel']."</td>";	
							echo "<td>".$r['member_address']."</td>";	
							echo "<td align='center'>";
								echo anchor("member/edit/".$r['id'],"แก้ไข")."&nbsp";
								echo anchor("member/del/".$r['id'],"ลบ",array("onclick" => "javascript:return confirm('คูรต้องการลบข้อมูลหรือไม่');"));
							echo "</td>";
						echo "<tr>";
						$no++;
					}
				}
			?>
		
		</tbody>
    </table>
</body>
</html>