<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Integrasi Data Mining</title>
  </head>
  <body>

    <?php

    // prepare 50 2D points to be clustered
    $data = [
    	'Obat A' => [1, 1], 'Obat B' => [2, 1], 'Obat C' => [4, 3], 'Obat D' => [5, 4]
    ];

    ?>

    <!-- tabel data yang akan diproses -->

    <h2>Himpunan Data Penderita Penyakit</h2>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        foreach ($data as $key => $value) {

          echo "<tr>";
          echo "<td>".$key."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "</tr>";

        }

         ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <?php

    // cluster
    $c1 = 1;
    $c2 = 1;
    $c3 = 2;
    $c4 = 1;

    ?>

    <h2>Inisialisasi atau Penentuan Centroid</h2>

    <!-- untuk penentuan centroid atau inisialisasi -->
    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
        </tr>
      </thead>
      <tbody align="center">
        <?php

        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$c1."</td>";
        echo "<td width='30px'>".$c2."</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$c3."</td>";
        echo "<td width='30px'>".$c4."</td>";
        echo "</tr>";

         ?>
      </tbody>
    </table>
    <!-- untuk penentuan centroid atau inisialisasi -->

    <hr />

    <h2>Pengelompokan Data</h2>

    <h3>Iterasi ke-1</h3>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
          <th>c1</th>
          <th>c2</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        $cluster1 = 1;
        $cluster2 = 2;
        $cls = [];

        foreach ($data as $key => $value) {

          $kolom1 = $value[0];
          $kolom2 = $value[1];

          $hitung1 = sqrt(pow($kolom1 - $c1, 2) + pow($kolom2 - $c2, 2));
          $hitung2 = sqrt(pow($kolom1 - $c3, 2) + pow($kolom2 - $c4, 2));

          echo "<tr>";
          echo "<td>".$key."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "<td width='30px'>".$hitung1."</td>";
          echo "<td width='30px'>".$hitung2."</td>";

          if ($hitung1 < $hitung2) {
            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;
          } else {
            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;
          }

          echo "</tr>";

        }

         ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <h2>Mencari Nilai Rata - rata</h2>

    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        $cluster1 = 1;
        $cluster2 = 2;
        $kolom1 = [];
        $kolom2 = [];

        foreach ($data as $key => $value) {

          $kolom1[] = $value[0];
          $kolom2[] = $value[1];

        }

        $tes1 = [];
        $tes2 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          }

        }

        $c = [];
        $d = [];
        $e = [];
        $f = [];

        for ($j=0; $j < count($cls); $j++) {

          // kolom 1
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom1[$i] AND $cls[$j] == 1) {
              $c[] = $kolom1[$j];
            } else if ($kolom1[$i] AND $cls[$j] == 2) {
              $d[] = $kolom1[$j];
            }

          }

          // kolom 2
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom2[$i] AND $cls[$j] == 1) {
              $e[] = $kolom2[$j];
            } else if ($kolom2[$i] AND $cls[$j] == 2) {
              $f[] = $kolom2[$j];
            }

          }

        }

        $jum1 = 0;
        $jum2 = 0;
        $jum3 = 0;
        $jum4 = 0;

        foreach ($c as $key => $value) {

          $jum1 += $value;

        }

        foreach ($d as $key => $value) {

          $jum2 += $value;

        }

        foreach ($e as $key => $value) {

          $jum3 += $value;

        }

        foreach ($f as $key => $value) {

          $jum4 += $value;

        }

        $hasil1 = $jum1/count($c);

        $hasil2 = $jum2/count($d);

        $hasil3 = $jum3/count($e);

        $hasil4 = $jum4/count($f);
        // akhir proses pencarian nilai rata - rata dari hasil pengelompokan

        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<tr>";

         ?>

      </tbody>
    </table>

    <h3>Iterasi ke-2</h3>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
          <th>c1</th>
          <th>c2</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        $cluster1 = 1;
        $cluster2 = 2;
        $cls = [];

        foreach ($data as $key => $value) {

          $kolom1 = $value[0];
          $kolom2 = $value[1];

          $hitung1 = sqrt(pow($kolom1 - $hasil1, 2) + pow($kolom2 - $hasil3, 2));
          $hitung2 = sqrt(pow($kolom1 - $hasil2, 2) + pow($kolom2 - $hasil4, 2));

          echo "<tr>";
          echo "<td>".$key."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "<td width='30px'>".$hitung1."</td>";
          echo "<td width='30px'>".$hitung2."</td>";

          if ($hitung1 < $hitung2) {
            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;
          } else {
            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;
          }

          echo "</tr>";

        }

         ?>

      </tbody>
    </table>

    <h2>Mencari Nilai Rata - rata</h2>

    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        $cluster1 = 1;
        $cluster2 = 2;
        $kolom1 = [];
        $kolom2 = [];

        foreach ($data as $key => $value) {

          $kolom1[] = $value[0];
          $kolom2[] = $value[1];

        }

        $tes1 = [];
        $tes2 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          }

        }

        $c = [];
        $d = [];
        $e = [];
        $f = [];

        for ($j=0; $j < count($cls); $j++) {

          // kolom 1
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom1[$i] AND $cls[$j] == 1) {
              $c[] = $kolom1[$j];
            } else if ($kolom1[$i] AND $cls[$j] == 2) {
              $d[] = $kolom1[$j];
            }

          }

          // kolom 2
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom2[$i] AND $cls[$j] == 1) {
              $e[] = $kolom2[$j];
            } else if ($kolom2[$i] AND $cls[$j] == 2) {
              $f[] = $kolom2[$j];
            }

          }

        }

        $jum1 = 0;
        $jum2 = 0;
        $jum3 = 0;
        $jum4 = 0;

        foreach ($c as $key => $value) {

          $jum1 += $value;

        }

        foreach ($d as $key => $value) {

          $jum2 += $value;

        }

        foreach ($e as $key => $value) {

          $jum3 += $value;

        }

        foreach ($f as $key => $value) {

          $jum4 += $value;

        }

        $hasil1 = $jum1/count($c);

        $hasil2 = $jum2/count($d);

        $hasil3 = $jum3/count($e);

        $hasil4 = $jum4/count($f);
        // akhir proses pencarian nilai rata - rata dari hasil pengelompokan

        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<tr>";

         ?>

      </tbody>
    </table>

    <h3>Iterasi ke-3</h3>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
          <th>c1</th>
          <th>c2</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        $cluster1 = 1;
        $cluster2 = 2;
        $cls = [];

        foreach ($data as $key => $value) {

          $kolom1 = $value[0];
          $kolom2 = $value[1];

          $hitung1 = sqrt(pow($kolom1 - $hasil1, 2) + pow($kolom2 - $hasil3, 2));
          $hitung2 = sqrt(pow($kolom1 - $hasil2, 2) + pow($kolom2 - $hasil4, 2));

          echo "<tr>";
          echo "<td>".$key."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "<td width='30px'>".$hitung1."</td>";
          echo "<td width='30px'>".$hitung2."</td>";

          if ($hitung1 < $hitung2) {
            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;
          } else {
            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;
          }

          echo "</tr>";

        }

         ?>

      </tbody>
    </table>

    <h2>Mencari Nilai Rata - rata</h2>

    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        $cluster1 = 1;
        $cluster2 = 2;
        $kolom1 = [];
        $kolom2 = [];

        foreach ($data as $key => $value) {

          $kolom1[] = $value[0];
          $kolom2[] = $value[1];

        }

        $tes1 = [];
        $tes2 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          }

        }

        $c = [];
        $d = [];
        $e = [];
        $f = [];

        for ($j=0; $j < count($cls); $j++) {

          // kolom 1
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom1[$i] AND $cls[$j] == 1) {
              $c[] = $kolom1[$j];
            } else if ($kolom1[$i] AND $cls[$j] == 2) {
              $d[] = $kolom1[$j];
            }

          }

          // kolom 2
          for ($i=0; $i < 1; $i++) {

            // echo $kolom1[$i];
            if ($kolom2[$i] AND $cls[$j] == 1) {
              $e[] = $kolom2[$j];
            } else if ($kolom2[$i] AND $cls[$j] == 2) {
              $f[] = $kolom2[$j];
            }

          }

        }

        $jum1 = 0;
        $jum2 = 0;
        $jum3 = 0;
        $jum4 = 0;

        foreach ($c as $key => $value) {

          $jum1 += $value;

        }

        foreach ($d as $key => $value) {

          $jum2 += $value;

        }

        foreach ($e as $key => $value) {

          $jum3 += $value;

        }

        foreach ($f as $key => $value) {

          $jum4 += $value;

        }

        $hasil1 = $jum1/count($c);

        $hasil2 = $jum2/count($d);

        $hasil3 = $jum3/count($e);

        $hasil4 = $jum4/count($f);
        // akhir proses pencarian nilai rata - rata dari hasil pengelompokan

        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<tr>";

         ?>

      </tbody>
    </table>

  </body>
</html>
