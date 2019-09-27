<style type="text/css">
table {
  border-collapse: collapse;

}

table, th, td {
  border: 1px solid black;

}	
.button {
  background-color: #b34700; /* Green */
  border: none;
  color: white;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
}
input[type=text] {
  -webkit-transition: width 0.4s ease-in-out;
  transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
  width: 100%;
}

</style>

<html>
<head>
<h1><center>Nilai Akhir Mahasiswa</center></h1>
</head>
<body>
		<form action="proses.php" method="post">
		<table border="1" align="center">
			<tr>
			<td> Nilai Ujian Praktek </td>
			<td> <input type="text" name="np"> </td>
			</tr>
			<tr>
			<td> Ujian Pilihan Ganda </td>
			<td> <input type="text" name="pg"> </td>
			</tr>
			<tr>
			<td> Kehadiran </td>
			<td> <input type="text" name="hadir"> </td>
			</tr>
			<tr>
			<td> Sikap </td>
			<td> <input type="text" name="sikap"> </td>
			</tr>
			<tr>
			<td colspan="2"><input type="Submit" value="Submit" class="button"></td>
			</tr>
			
		</table>
		</form>
		
</body>
</html>

