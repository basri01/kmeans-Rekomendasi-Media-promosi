

                <?php
                // untuk mengatasi error pada division by zero
                error_reporting(E_ALL ^  E_NOTICE);
    // untuk memanggil fungsi
                require_once 'kmeans.php';
                $proses = new Proses;
                $query= $konek->query('SELECT DISTINCT asal_daerah FROM tb_mahasiswa');

                $asal_daerah = [];
                $media_cetak = [];
                $media_elektronik = [];
                $media_online = [];
                $personal_salling = [];
                $pendekatan = [];

                while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {


                    $asal_daerah[] = $data['asal_daerah'];

                            // mengambil data berdasarkan Media
                    $daerah = $data['asal_daerah'];

                    $sql1    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Cetak' AND asal_daerah = '".$daerah."' ";
                    $result1 = $konek->query($sql1);

                    $sql2    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Elektronik' AND asal_daerah = '".$daerah."' ";
                    $result2 = $konek->query($sql2);

                    $sql3    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Media Online' AND asal_daerah = '".$daerah."' ";
                    $result3 = $konek->query($sql3);

                    $sql4    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Personal Salling' AND asal_daerah = '".$daerah."' ";
                    $result4 = $konek->query($sql4);

                    $sql5    = "SELECT COUNT(informasi) FROM tb_mahasiswa WHERE informasi = 'Pendekatan' AND asal_daerah = '".$daerah."' ";
                    $result5 = $konek->query($sql5);

                    while ($hasil1 = mysqli_fetch_array($result1)) {
                        $media_cetak[] = $hasil1[0];
                    }

                    while ($hasil2 = mysqli_fetch_array($result2)) {
                        $media_elektronik[] = $hasil2[0];
                    }

                    while ($hasil3 = mysqli_fetch_array($result3)) {
                        $media_online[] = $hasil3[0];
                    }

                    while ($hasil4 = mysqli_fetch_array($result4)) {
                        $personal_salling[] = $hasil4[0];
                    }

                    while ($hasil5 = mysqli_fetch_array($result5)) {
                        $pendekatan[] = $hasil5[0];
                    }

                }

                $datacluster = array();

                foreach ($asal_daerah as $key => $value) {
                    $datacluster[$key]['asal_daerah'] = $value;
                }

                foreach ($media_cetak as $key => $value) {
                    $datacluster[$key]['media_cetak'] = $value;
                }

                foreach ($media_elektronik as $key => $value) {
                    $datacluster[$key]['media_elektronik'] = $value;
                }

                foreach ($media_online as $key => $value) {
                    $datacluster[$key]['media_online'] = $value;
                }

                foreach ($personal_salling as $key => $value) {
                    $datacluster[$key]['personal_salling'] = $value;
                }

                foreach ($pendekatan as $key => $value) {
                    $datacluster[$key]['pendekatan'] = $value;
                }

                $data = [];

                foreach ($datacluster as $key => $value) {

                    $hasil = [
                    'asal_daerah' => $value['asal_daerah'],
                    $value['media_cetak'],
                    $value['media_elektronik'],
                    $value['media_online'],
                    $value['personal_salling'],
                    $value['pendekatan']
                    ];

                    array_push($data, $hasil);

                }

                

                ?>
                    <!-- /.row -->
                   
<!-- untuk penentuan centroid atau inisialisasi -->

<?php

$iterasi = 1;
while (true) {

              // variabel untuk menentukan masuk pada kelompok apa
  $cluster1 = 1;
  $cluster2 = 2;
  $cluster3 = 3;


              /* cara ini untuk mengubah data menjadi array atau mengambil data secara berurut pada kolom
              */
              // variabel array untuk jumlah kolom yang ada pada himpunan data
              $k1 = [];
              $k2 = [];
              $k3 = [];
              $k4 = [];
              $k5 = [];

              // variabel array untuk jumlah centroid
              $cnt1 = [];
              $cnt2 = [];
              $cnt3 = [];


              // mengambil hasil dari perhitungan persamaan ED dan mangambil hasil perhitungan
              $hasil_iterasi = $proses->RumusPersamaanED($data, $centroid);

              // untuk mengambil data dari himpunan data
              foreach ($data as $key1 => $value1) {

                $k1[] = $value1[0];
                $k2[] = $value1[1];
                $k3[] = $value1[2];
                $k4[] = $value1[3];
                $k5[] = $value1[4];

            }

              // hasil dari proses perhitungan
            foreach ($hasil_iterasi as $key2 => $value2) {

                $cnt1[] = $value2[0];
                $cnt2[] = $value2[1];
                $cnt3[] = $value2[2];

            }

              // mengubah data menjadi array hasil centroid
            $cluster = [$cnt1, $cnt2, $cnt3];

              // untuk mengambil hasil dari cluster
            $cls = [];

              // manampilkan data pada hasil iterasi
            for ($i=0; $i < count($data); $i++) {

                // untuk proses pembagian cluster
                if ($cnt1[$i] < $cnt2[$i] && $cnt1[$i] < $cnt3[$i] ) {

                  $cls[] = $cluster1;

              } else if ($cnt2[$i] < $cnt1[$i] && $cnt2[$i] < $cnt3[$i] ) {

                  $cls[] = $cluster2;

              } else if ($cnt3[$i] < $cnt1[$i] && $cnt3[$i] < $cnt2[$i] ) {

                  $cls[] = $cluster3;
              }

          }

          // echo "<pre>";
          //   print_r($cnt1);

              // mengambil hasil untuk menentukan nilai terkecil atau jarak terdekat pada hasil cluster
          $hasil_minimal = $proses->NilaiTerkecil($cluster, $data);

              // untuk mengeksekusi apa bila terdapat nilai 0 pada index pertam
          if (!$k1[0] != 0) {
            $k1[0] = sprintf("%02d", 0);
        }

        if (!$k2[0] != 0) {
            $k2[0] = sprintf("%02d", 0);
        }

        if (!$k3[0] != 0) {
            $k3[0] = sprintf("%02d", 0);
        }

        if (!$k4[0] != 0) {
            $k4[0] = sprintf("%02d", 0);
        }

        if (!$k5[0] != 0) {
            $k5[0] = sprintf("%02d", 0);
        }

        /* mulai proses pencarian nilai rata - rata dari hasil pengelompokan untuk mengambil nilai yang masuk pada cluster */
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

        // kolom d
        $f1 = [];
        $f2 = [];
        $f3 = [];

        // kolom e
        $g1 = [];
        $g2 = [];
        $g3 = [];


              // untuk menentukan apa bila ada nilai yang memiliki cluster yang sama pada saat pembagian cluster
        for ($j=0; $j < count($cls); $j++) {

                // menampilkan data menjadi 1
            for ($i=0; $i < 1; $i++) {

                  // kolom 1 pada a
              if ($k1[$i] AND $cls[$j] == 1) {
                $c1[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 2) {
                $c2[] = $k1[$j];
            } else if ($k1[$i] AND $cls[$j] == 3) {
                $c3[] = $k1[$j];
            }

                  // kolom 2 pada b
            if ($k2[$i] AND $cls[$j] == 1) {
                $d1[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 2) {
                $d2[] = $k2[$j];
            } else if ($k2[$i] AND $cls[$j] == 3) {
                $d3[] = $k2[$j];

            }

                  // kolom 3 pada c
            if ($k3[$i] AND $cls[$j] == 1) {
                $e1[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 2) {
                $e2[] = $k3[$j];
            } else if ($k3[$i] AND $cls[$j] == 3) {
                $e3[] = $k3[$j];

            }

            if ($k4[$i] AND $cls[$j] == 1) {
                $f1[] = $k4[$j];
            } else if ($k4[$i] AND $cls[$j] == 2) {
                $f2[] = $k4[$j];
            } else if ($k4[$i] AND $cls[$j] == 3) {
                $f3[] = $k4[$j];
            }

            if ($k5[$i] AND $cls[$j] == 1) {
                $g1[] = $k5[$j];
            } else if ($k5[$i] AND $cls[$j] == 2) {
                $g2[] = $k5[$j];
            } else if ($k5[$i] AND $cls[$j] == 3) {
                $g3[] = $k5[$j];

            }

        }
                // menampilkan data menjadi 1

    }

              // hasil penyamaan atara cluster dan data
    $cluster = [
    [$c1, $c2, $c3],
    [$d1, $d2, $d3],
    [$e1, $e2, $e3],
    [$f1, $f2, $f3],
    [$g1, $g2, $g3],
    ];


              // untuk mengambil hasil nilai rata rata
    $nilai_rata = $proses->NilaiRatarata($cluster);

    $nilrat1 = [];
    $nilrat2 = [];
    $nilrat3 = [];


    foreach ($nilai_rata as $key => $value) {

        $nilrat1[] = $value[0];
        $nilrat2[] = $value[1];
        $nilrat3[] = $value[2];


    }

              // hasil centroid baru
    $centroid_baru = [$nilrat1, $nilrat2, $nilrat3];

              // untuk mengambil hasil centroid baru
    $centroid = $proses->CentroidBaru($centroid_baru);

    $hasil_baru = [];

    $tabel_iterasi = array();

              // untuk mengambil data
    foreach ($data as $key => $value) {

                // untuk mengambil data berdasarkan baris
        $tabel_iterasi[$key]['data'] = $value;

    }

              // untuk mengambil hasil centroid c1, c2, c3
    foreach ($hasil_iterasi as $key => $value) {

                // untuk mengambil jarak centroid
        $tabel_iterasi[$key]['jarak_centroid'] = $value;

    }

              // untuk mengambil nilai terkecil atau jarak terdekat
    foreach ($hasil_minimal as $key => $value) {

                // untuk mengambil jarak centroid
        $tabel_iterasi[$key]['jarak_terdekat'] = $value;

    }

              // untuk mengambil cluster
    foreach ($cls as $key => $value) {

                // untuk mengambil clustering
        $tabel_iterasi[$key]['cluster'] = $value;

    }


              // untuk menggabungkan kedua array
    array_push($hasil_baru, $tabel_iterasi);

    ?>

    <!-- untuk menampikan data -->
    <?php foreach ($hasil_baru as $key => $value): ?>


                <?php $no = 1 ?>

                <?php foreach ($value as $key1 => $value1): ?>
                 
            <?php endforeach; ?>

        </tbody>
    </table>
    <!-- untuk menampilkan tabel -->
</div>
</div>
<?php endforeach; ?>

<!--  -->
<!-- tabel untuk mencari nilai rata -->



<?php

                // memanggil function cluster baru
$cluster_baru = $proses->ClusterBaru($cls, $iterasi);

if (!$cluster_baru) {

                  // berhenti
  break;

}

}

// untuk mengambil asal daerah
$daerah = array();
foreach ($data as $key => $value) {
    $daerah[$key] = $value['asal_daerah'];
}

$media = array('Media Cetak', 'Media EleKtronik', 'Media Online', 'Personal Salling', 'Pendekatan');

$t = [];
$a = [];

foreach ($centroid_baru as $key => $value) {
    $max = $value[0];
    for ($i=0; $i < count($media); $i++) { 
        if ($value[$i] > $max) {
            $t[$key] = $media[$i];
        }
    }
    $a[] = max($value);
}

$nil1 = [];
$nil2 = [];
$nil3 = [];

$dar1 = [];
$dar2 = [];
$dar3 = [];

$ctr1 = [];
$ctr2 = [];
$ctr3 = [];

for ($i=0; $i < count($cls); $i++) { 

    // untuk centroid
    if ($cls[$i] == 1) {
        $nil1[] = $cls[$i];
    } else if ($cls[$i] == 2) {
        $nil2[] = $cls[$i];
    } else if ($cls[$i] == 3) {
        $nil3[] = $cls[$i];
    }

    // untuk daerah
    if ($cls[$i] == 1) {
        $dar1[] = $daerah[$i];
    } else if ($cls[$i] == 2) {
        $dar2[] = $daerah[$i];
    } else if ($cls[$i] == 3) {
        $dar3[] = $daerah[$i];
    }

}

for ($i=0; $i < count($nil1); $i++) { 
    $ctr1[] = $t[0];
}
for ($i=0; $i < count($nil2); $i++) { 
    $ctr2[] = $t[1];
}
for ($i=0; $i < count($nil3); $i++) { 
    $ctr3[] = $t[2];
}

$qq = array_merge($nil1, $nil2, $nil3);
$ww = array_merge($dar1, $dar2, $dar3);
$ee = array_merge($ctr1, $ctr2, $ctr3);

$baru = [];
$hasil = array();
foreach ($qq as $key => $value) {
   $hasil['cls'][$key] = $value;
}

foreach ($ww as $key => $value) {
   $hasil['dar'][$key] = $value;
}

foreach ($ee as $key => $value) {
   $hasil['ctr'][$key] = $value;
}
array_push($baru, $hasil);

?>

<h2>Rekomendasi</h2>
<div class="panel-body">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Centroid</th>
                <th>Alternatif</th>
                <th>Media</th>
            </tr>
        </thead>
        <tbody>
            <?php 

            foreach ($baru as $key => $value) {
                for ($i=0; $i < count($value['cls']); $i++) {
                    echo "<tr>"; 
                    echo "<td>".$value['cls'][$i]."</td>";
                    echo "<td>".$value['dar'][$i]."</td>";
                    echo "<td>".$value['ctr'][$i]."</td>";
                    echo "</tr>";
                }
            }

            ?>
        </tbody>
    </table>


</div>
<!-- /.panel-body -->
</div>
<!-- /.panel -->
</div>
<!-- /.col-lg-6 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<!-- jQuery -->
<script src="../vendor/jquery/jquery.min.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="../vendor/metisMenu/metisMenu.min.js"></script>

<!-- DataTables JavaScript -->
<script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
<script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

<!-- Custom Theme JavaScript -->
<script src="../dist/js/sb-admin-2.js"></script>

<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>

</body>

</html>
