<style type="text/css">
  .button-flat-circle {
  border: 1px solid #801515;        /* border: tebal[px] tipe[solid,dashed,dotted] warna[#hex, rgb()]; */
  background-color: #801515;        /* ubah warna background */
  color: #FFFFFF;                   /* ubah warna font */
  font-size: 15px;                  /* ubah ukuran font */
  width: 60px;                     /* set panjang button. ukuran width = ukuran height */
  height: 40px;                    /* set tinggi button. ukuran width = ukuran height */
  line-height: 3px;                /* set line height = font size */
  text-align: center;               /* text posisi center */
  border-radius: 10%;               /* set radius sudut pada button */
}
            /* ubah background saat button ditekan */

</style>
<html>
  <head>
    <title>Operasi Dua Bilangan dengan PHP</title>
  </head>
  <body>
    <h2>Operasi Dua Bilangan dengan PHP</h2>
    <form action="proseshitung.php" method="post">
      <table width="50%" border=0>
        <tr>
          <td>Bilangan Awal </font></td>
          <td></td>
          <td><input type="text" name="awal"></td>
          
        </tr>
        <tr>
          <td>Bilangan Akhir</font></td>
           <td></td>
          <td><input type="text" name="akhir"></td>
        </tr>
        <tr>
          <td colspan="3"><input type="submit" name="Hitung" value="Hitung" class="button-flat-circle"></td>
        </tr>
      </table>
    </form>
  </body>
</html>
</html>