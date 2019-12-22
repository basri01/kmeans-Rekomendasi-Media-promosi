<?php

// memanggil class k-means
include_once "vendor/bdelespierre/php-kmeans/src/KMeans/Space.php";
include_once "vendor/bdelespierre/php-kmeans/src/KMeans/Point.php";
include_once "vendor/bdelespierre/php-kmeans/src/KMeans/Cluster.php";

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Sistem Informasi Integrasi Data Mining</title>
  </head>
  <body>

    <?php

    // prepare 50 2D points to be clustered
    // $points = [
    // 	'Obat A' => [1, 1], 'Obat B' => [2, 1], 'Obat C' => [4, 3], 'Obat D' => [5, 4]
    // ];

    $points = [
      'Penyakit A' => [0, 0, 0], 'Penyakit B' => [1, 1, 3], 'Penyakit C' => [1, 3, 2], 'Penyakit D' => [1, 4, 1]
    ];


    // $points = [
    //   [0, 0, 0], [118, 118, 118], [3, 3, 3], [129, 129, 129],
    //   [4, 4, 4], [137, 137, 137], [0, 0, 0], [20, 20, 20],
    //   [25, 25, 25], [0, 0, 0], [194, 194, 194], [59, 59, 59],
    //   [156, 156, 156], [21, 21, 21], [102, 102, 102], [0, 0, 0],
    //   [96, 96, 96], [0, 0, 0], [0, 0, 0], [9, 9, 9],
    //   [75, 75, 75], [5, 5, 5], [0, 0, 0], [13, 13, 13],
    //   [0, 0, 0]
    // ];

    // print_r($points);

    // [ 'Label1' => [1, 1], 'Label2' => [8, 7], 'Label3' => [1, 2]];

    // $points = [
    // 	[80,55],[86,59],[19,85],[41,47],[57,58],
    // 	[76,22],[94,60],[13,93],[90,48],[52,54],
    // 	[62,46],[88,44],[85,24],[63,14],[51,40],
    // 	[75,31],[86,62],[81,95],[47,22],[43,95],
    // 	[71,19],[17,65],[69,21],[59,60],[59,12],
    // 	[15,22],[49,93],[56,35],[18,20],[39,59],
    // 	[50,15],[81,36],[67,62],[32,15],[75,65],
    // 	[10,47],[75,18],[13,45],[30,62],[95,79],
    // 	[64,11],[92,14],[94,49],[39,13],[60,68],
    // 	[62,10],[74,44],[37,42],[97,60],[47,73],
    // ];

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

        foreach ($points as $key => $value) {

          echo "<tr>";
          echo "<td>".$key."</td>";
          echo "<td width='30px'>".$value[0]."</td>";
          echo "<td width='30px'>".$value[1]."</td>";
          echo "<td width='30px'>".$value[2]."</td>";
          echo "</tr>";

        }

         ?>

      </tbody>
    </table>
    <!-- tabel data yang akan diproses -->

    <?php

    echo "<br />";

    // memanggil objek dari folder Space.php
    $space = new KMeans\Space(3);

    foreach ($points as $i => $point) {

      $tes = $space->addPoint($point);
      print_r($tes);

    }

    // $data = $space[$point];
    // echo $data;

    // $tes = $space->solve(2, KMeans\Space::SEED_DASV);

    // echo "<pre>";
    // print_r($tes);
    // echo "</pre>";

    // foreach ($points as $i => $point) {
    //
    //   $tes2 = $space->newPoint($point);
    //   echo "<pre>";
    //   print_r($tes2);
    //   echo "</pre>";
    //
    // }

    // $tes2 = $space->newPoint($points);
    // echo "<pre>";
    // print_r($tes2);
    // echo "</pre>";


    // $Objek = new Point;
    //
    // $tes = $Objek->getDistanceWith();
    // echo $tes;

    echo "done.";
    echo "Determining clusters <br />";

    // membuat batas cluster
    $clusters = $space->solve(3);

    foreach ($clusters as $i => $cluster) {

      printf("Cluster %d [%d,%d]: %d points <br />", $i, $cluster[0], $cluster[1], count($cluster));

    }
    // membuat batas cluster

    // resolve 3 clusters using David Arthur and Sergei Vassilvitskii seeding algorithm
    $clusters = $space->solve(3, KMeans\Space::SEED_DASV);

    // $x = $point[0];
    // $y = $point[1];
    //
    // echo $x;
    // echo $y;

    // or
    // list($x,$y) = $point->getCoordinates();

    // $clusters1 = $space->solve(2, KMeans\Space::SEED_DASV);
    // echo "<pre>";
    // print_r($clusters1);
    // echo "</pre>";



    echo "<hr />";

    foreach ($cluster as $point) {
      printf('[%d,%d] ', $point[0], $point[1]);
    }

    // $data = $space[$point];
    // $space->addPoint($coordinate, $data);

    // $clusters = $space->initializeClusters(2, KMeans\Space::SEED_DEFAULT, function ($space, $clusters)
    // {
    //   echo $clusters;
    // });

    echo "<hr />";

    $clusters = $space->solve(3, KMeans\Space::SEED_DEFAULT, function($space, $clusters) {

      static $iterations = 0;
      // printf("Iteration: %d <br />", ++$iterations);

      // menampilkan tabel hasil perhitungan
      echo "<h3>Menampilkan Hasil Pengelompokan</h3>";



      ?>


      <!-- nilai rata - rata centroid -->
      <h3>Nilai Rata - rata Centroid Pada Pengulangan Ke-<?php printf("%d", ++$iterations); ?> </h3>

      <table border="1">
        <thead>
          <tr>
            <th>a</th>
            <th>b</th>
            <th>c</th>
          </tr>
        </thead>
        <tbody align="center">

          <?php

          // nilai rata-rata centroid
          foreach ($clusters as $i => $cluster) {

            echo "<tr>";
            echo "<td width='30px'>".$cluster[0]."</td>";
            echo "<td width='30px'>".$cluster[1]."</td>";
            echo "<td width='30px'>".$cluster[2]."</td>";
            echo "</tr>";

          }
          // nilai rata-rata centroid

           ?>

        </tbody>
      </table>
      <!-- nilai rata - rata centroid -->

      <?php

      // untuk hasil dari cluster
      foreach ($clusters as $i => $cluster) {

        printf("<p> Cluster %d [%d,%d]: %d points </p>", $i, $cluster[0], $cluster[1], count($cluster));

      }
      // untuk hasil dari cluster

      echo "<hr />";


    });

     ?>

  </body>
</html>
