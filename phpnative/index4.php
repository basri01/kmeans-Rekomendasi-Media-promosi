<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Integrasi Data Mining</title>
  </head>
  <body>

    <?php

    require_once 'fungsi.php';
    $proses = new Proses;

    // $data = [
    //   [1, 1, 2], [2, 1, 3], [4, 3, 2], [5, 4, 1]
    // ];

    $data = [
      [118, 71, 46], [3, 12, 2], [129, 105, 58], [137, 62, 10],
      [20, 15, 46], [25, 5, 6], [194, 151, 88], [59, 134, 46],
      [102, 75, 14], [96, 123, 30], [15, 5, 10], [65, 43, 6]
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
          <th>c</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        $n = 1;

        foreach ($data as $key => $value) {

          echo "<tr>";
          echo "<td>".$n++."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "<td width='30px'>".$value[2]."</td>";
          echo "</tr>";

        }

        ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <h2>Inisialisasi atau Penentuan Centroid</h2>

    <!-- untuk penentuan centroid atau inisialisasi -->
    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
        </tr>
      </thead>
      <tbody align="center">
        <?php

        /*
        fungsi untuk menentukan berapa jumlah centroid awal
        dan proses pengambilannya secara acak
        */
        $centroid = $proses->CentroidAwal($data, 3);
        $c = 1;

        foreach ($centroid as $key => $value) {

          foreach ($value as $key1 => $value1) {

            echo "<tr>";
            echo "<td>c".$c++."</td>";
            echo "<td width='30px'>".$value1[0]."</td>";
            echo "<td width='30px'>".$value1[1]."</td>";
            echo "<td width='30px'>".$value1[2]."</td>";
            echo "</tr>";

          }

        }

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
          <th>c</th>
          <th>c1</th>
          <th>c2</th>
          <th>c3</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // variabel untuk menentukan masuk pada kelompok apa
        $cluster1 = 1;
        $cluster2 = 2;
        $cluster3 = 3;

        /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
        */
        $cls = [];

        // variabel array untuk jumlah kolom yang ada pada himpunan data
        $k1 = [];
        $k2 = [];
        $k3 = [];

        // variabel array untuk jumlah centroid
        $c1 = [];
        $c2 = [];
        $c3 = [];

        // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
        $hasil = $proses->RumusPersamaanED($data, $centroid);

        // untuk mengambil data dari himpunan data
        foreach ($data as $key1 => $value1) {

          $k1[] = $value1[0];
          $k2[] = $value1[1];
          $k3[] = $value1[2];

        }

        // hasil dari proses perhitungan
        foreach ($hasil as $key2 => $value2) {

          $c1[] = $value2[0];
          $c2[] = $value2[1];
          $c3[] = $value2[2];

        }

        // manampilkan data pada hasil iterasi
        for ($i=0; $i < count($data); $i++) {

          echo "<tr>";
          echo "<td width='30px'>".$i."</td>";

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k3[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c3[$i]."</td>";
          }

          // untuk proses pembagian cluster
          if ($c1[$i] < $c2[$i] && $c1[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;

          } else if ($c2[$i] < $c1[$i] && $c2[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;

          } else if ($c3[$i] < $c1[$i] && $c3[$i] < $c2[$i]) {

            echo "<td width='30px'>".$cluster3."</td>";
            $cls[] = $cluster3;

          }

          echo "<tr>";

        }

        ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <h2>Mencari Nilai Rata - rata</h2>

    <!-- tabel untuk mencari nilai rata -->
    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        // untuk mengambil nilai cluster
        $tes1 = [];
        $tes2 = [];
        $tes3 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          } else if ($value == 3) {
            $tes3[] = $value;
          }

        }

        // untuk mengambil nilai yang masuk pada cluster
        // kolom a
        $c1 = [];
        $c2 = [];
        $c3 = [];
        // kolom b
        $d1 = [];
        $d2 = [];
        $d3 = [];
        // kolom c
        $e1 = [];
        $e2 = [];
        $e3 = [];

        // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
        for ($j=0; $j < count($cls); $j++) {

          // kolom 1 pada a
          for ($i=0; $i < 1; $i++) {

            if ($k1[$i] AND $cls[$j] == 1) {
              $c1[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 2) {
              $c2[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 3) {
              $c3[] = $k1[$j];
            }

          }

          // kolom 2 pada b
          for ($i=0; $i < 1; $i++) {

            if ($k2[$i] AND $cls[$j] == 1) {
              $d1[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 2) {
              $d2[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 3) {
              $d3[] = $k2[$j];
            }

          }

          // kolom 3 pada c
          for ($i=0; $i < 1; $i++) {

            if ($k3[$i] AND $cls[$j] == 1) {
              $e1[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 2) {
              $e2[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 3) {
              $e3[] = $k3[$j];
            }

          }

        }

        // proses untuk menjumlah dan membagi hasil array
        $hasil1 = array_sum($c1)/count($c1);
        $hasil2 = array_sum($c2)/count($c2);
        $hasil3 = array_sum($c3)/count($c3);
        $hasil4 = array_sum($d1)/count($d1);
        $hasil5 = array_sum($d2)/count($d2);
        $hasil6 = array_sum($d3)/count($d3);
        $hasil7 = array_sum($e1)/count($e1);
        $hasil8 = array_sum($e2)/count($e2);
        $hasil9 = array_sum($e3)/count($e3);

        // akhir proses pencarian nilai rata - rata dari hasil pengelompokans
        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<td width='30px'>".$hasil7."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil5."</td>";
        echo "<td width='30px'>".$hasil8."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c3</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<td width='30px'>".$hasil6."</td>";
        echo "<td width='30px'>".$hasil9."</td>";
        echo "<tr>";

        $centroid_baru = [
          [
            [$hasil1, $hasil4, $hasil7],
            [$hasil2, $hasil5, $hasil8],
            [$hasil3, $hasil6, $hasil9]
          ]
        ];

        ?>

      </tbody>
    </table>
    <!-- tabel untuk mencari nilai rata -->


    <h3>Iterasi ke-2</h3>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
          <th>c1</th>
          <th>c2</th>
          <th>c3</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // variabel untuk menentukan masuk pada kelompok apa
        $cluster1 = 1;
        $cluster2 = 2;
        $cluster3 = 3;

        /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
        */
        $cls = [];

        // variabel array untuk jumlah kolom yang ada pada himpunan data
        $k1 = [];
        $k2 = [];
        $k3 = [];

        // variabel array untuk jumlah centroid
        $c1 = [];
        $c2 = [];
        $c3 = [];

        // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
        $hasil = $proses->RumusPersamaanED($data, $centroid_baru);

        // untuk mengambil data dari himpunan data
        foreach ($data as $key1 => $value1) {

          $k1[] = $value1[0];
          $k2[] = $value1[1];
          $k3[] = $value1[2];

        }

        // hasil dari proses perhitungan
        foreach ($hasil as $key2 => $value2) {

          $c1[] = $value2[3];
          $c2[] = $value2[4];
          $c3[] = $value2[5];

        }

        // manampilkan data pada hasil iterasi
        for ($i=0; $i < count($data); $i++) {

          echo "<tr>";
          echo "<td width='30px'>".$i."</td>";

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k3[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c3[$i]."</td>";
          }

          // untuk proses pembagian cluster
          if ($c1[$i] < $c2[$i] && $c1[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;

          } else if ($c2[$i] < $c1[$i] && $c2[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;

          } else if ($c3[$i] < $c1[$i] && $c3[$i] < $c2[$i]) {

            echo "<td width='30px'>".$cluster3."</td>";
            $cls[] = $cluster3;

          }

          echo "<tr>";

        }

        ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <h2>Mencari Nilai Rata - rata</h2>

    <!-- tabel untuk mencari nilai rata -->
    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        // untuk mengambil nilai cluster
        $tes1 = [];
        $tes2 = [];
        $tes3 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          } else if ($value == 3) {
            $tes3[] = $value;
          }

        }

        // untuk mengambil nilai yang masuk pada cluster
        // kolom a
        $c1 = [];
        $c2 = [];
        $c3 = [];
        // kolom b
        $d1 = [];
        $d2 = [];
        $d3 = [];
        // kolom c
        $e1 = [];
        $e2 = [];
        $e3 = [];

        // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
        for ($j=0; $j < count($cls); $j++) {

          // kolom 1 pada a
          for ($i=0; $i < 1; $i++) {

            if ($k1[$i] AND $cls[$j] == 1) {
              $c1[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 2) {
              $c2[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 3) {
              $c3[] = $k1[$j];
            }

          }

          // kolom 2 pada b
          for ($i=0; $i < 1; $i++) {

            if ($k2[$i] AND $cls[$j] == 1) {
              $d1[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 2) {
              $d2[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 3) {
              $d3[] = $k2[$j];
            }

          }

          // kolom 3 pada c
          for ($i=0; $i < 1; $i++) {

            if ($k3[$i] AND $cls[$j] == 1) {
              $e1[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 2) {
              $e2[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 3) {
              $e3[] = $k3[$j];
            }

          }

        }

        // proses untuk menjumlah dan membagi hasil array
        $hasil1 = array_sum($c1)/count($c1);
        $hasil2 = array_sum($c2)/count($c2);
        $hasil3 = array_sum($c3)/count($c3);
        $hasil4 = array_sum($d1)/count($d1);
        $hasil5 = array_sum($d2)/count($d2);
        $hasil6 = array_sum($d3)/count($d3);
        $hasil7 = array_sum($e1)/count($e1);
        $hasil8 = array_sum($e2)/count($e2);
        $hasil9 = array_sum($e3)/count($e3);

        // akhir proses pencarian nilai rata - rata dari hasil pengelompokans
        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<td width='30px'>".$hasil7."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil5."</td>";
        echo "<td width='30px'>".$hasil8."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c3</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<td width='30px'>".$hasil6."</td>";
        echo "<td width='30px'>".$hasil9."</td>";
        echo "<tr>";

        $centroid_baru = [
          [
            [$hasil1, $hasil4, $hasil7],
            [$hasil2, $hasil5, $hasil8],
            [$hasil3, $hasil6, $hasil9]
          ]
        ];

        ?>

      </tbody>
    </table>
    <!-- tabel untuk mencari nilai rata -->

    <h3>Iterasi ke-3</h3>

    <table border="1">
      <thead>
        <tr>
          <th>obyek</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
          <th>c1</th>
          <th>c2</th>
          <th>c3</th>
          <th>cluster</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // variabel untuk menentukan masuk pada kelompok apa
        $cluster1 = 1;
        $cluster2 = 2;
        $cluster3 = 3;

        /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
        */
        $cls = [];

        // variabel array untuk jumlah kolom yang ada pada himpunan data
        $k1 = [];
        $k2 = [];
        $k3 = [];

        // variabel array untuk jumlah centroid
        $c1 = [];
        $c2 = [];
        $c3 = [];

        // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
        $hasil = $proses->RumusPersamaanED($data, $centroid_baru);

        // untuk mengambil data dari himpunan data
        foreach ($data as $key1 => $value1) {

          $k1[] = $value1[0];
          $k2[] = $value1[1];
          $k3[] = $value1[2];

        }

        // hasil dari proses perhitungan
        foreach ($hasil as $key2 => $value2) {

          $c1[] = $value2[6];
          $c2[] = $value2[7];
          $c3[] = $value2[8];

        }

        // manampilkan data pada hasil iterasi
        for ($i=0; $i < count($data); $i++) {

          echo "<tr>";
          echo "<td width='30px'>".$i."</td>";

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$k3[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c1[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c2[$i]."</td>";
          }

          for ($j=0; $j < 1; $j++) {
            echo "<td width='30px'>".$c3[$i]."</td>";
          }

          // untuk proses pembagian cluster
          if ($c1[$i] < $c2[$i] && $c1[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster1."</td>";
            $cls[] = $cluster1;

          } else if ($c2[$i] < $c1[$i] && $c2[$i] < $c3[$i]) {

            echo "<td width='30px'>".$cluster2."</td>";
            $cls[] = $cluster2;

          } else if ($c3[$i] < $c1[$i] && $c3[$i] < $c2[$i]) {

            echo "<td width='30px'>".$cluster3."</td>";
            $cls[] = $cluster3;

          }

          echo "<tr>";

        }

        ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <h2>Mencari Nilai Rata - rata</h2>

    <!-- tabel untuk mencari nilai rata -->
    <table border="1">
      <thead>
        <tr>
          <th>centroid</th>
          <th>a</th>
          <th>b</th>
          <th>c</th>
        </tr>
      </thead>
      <tbody align="center">

        <?php

        // mulai proses pencarian nilai rata - rata dari hasil pengelompokan
        // untuk mengambil nilai cluster
        $tes1 = [];
        $tes2 = [];
        $tes3 = [];

        foreach ($cls as $key => $value) {

          if ($value == 1) {
            $tes1[] = $value;
          } else if ($value == 2) {
            $tes2[] = $value;
          } else if ($value == 3) {
            $tes3[] = $value;
          }

        }

        // untuk mengambil nilai yang masuk pada cluster
        // kolom a
        $c1 = [];
        $c2 = [];
        $c3 = [];
        // kolom b
        $d1 = [];
        $d2 = [];
        $d3 = [];
        // kolom c
        $e1 = [];
        $e2 = [];
        $e3 = [];

        // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
        for ($j=0; $j < count($cls); $j++) {

          // kolom 1 pada a
          for ($i=0; $i < 1; $i++) {

            if ($k1[$i] AND $cls[$j] == 1) {
              $c1[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 2) {
              $c2[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 3) {
              $c3[] = $k1[$j];
            }

          }

          // kolom 2 pada b
          for ($i=0; $i < 1; $i++) {

            if ($k2[$i] AND $cls[$j] == 1) {
              $d1[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 2) {
              $d2[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 3) {
              $d3[] = $k2[$j];
            }

          }

          // kolom 3 pada c
          for ($i=0; $i < 1; $i++) {

            if ($k3[$i] AND $cls[$j] == 1) {
              $e1[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 2) {
              $e2[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 3) {
              $e3[] = $k3[$j];
            }

          }

        }

        // proses untuk menjumlah dan membagi hasil array
        $hasil1 = array_sum($c1)/count($c1);
        $hasil2 = array_sum($c2)/count($c2);
        $hasil3 = array_sum($c3)/count($c3);
        $hasil4 = array_sum($d1)/count($d1);
        $hasil5 = array_sum($d2)/count($d2);
        $hasil6 = array_sum($d3)/count($d3);
        $hasil7 = array_sum($e1)/count($e1);
        $hasil8 = array_sum($e2)/count($e2);
        $hasil9 = array_sum($e3)/count($e3);

        // akhir proses pencarian nilai rata - rata dari hasil pengelompokans
        echo "<tr>";
        echo "<td>c1</td>";
        echo "<td width='30px'>".$hasil1."</td>";
        echo "<td width='30px'>".$hasil4."</td>";
        echo "<td width='30px'>".$hasil7."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c2</td>";
        echo "<td width='30px'>".$hasil2."</td>";
        echo "<td width='30px'>".$hasil5."</td>";
        echo "<td width='30px'>".$hasil8."</td>";
        echo "<tr>";

        echo "<tr>";
        echo "<td>c3</td>";
        echo "<td width='30px'>".$hasil3."</td>";
        echo "<td width='30px'>".$hasil6."</td>";
        echo "<td width='30px'>".$hasil9."</td>";
        echo "<tr>";

        $centroid_baru = [
          [
            [$hasil1, $hasil4, $hasil7],
            [$hasil2, $hasil5, $hasil8],
            [$hasil3, $hasil6, $hasil9]
          ]
        ];

        ?>

      </tbody>
    </table>
    <!-- tabel untuk mencari nilai rata -->


  </body>
</html>
