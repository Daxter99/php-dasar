<?php
// Date
// echo date("l, d-M-Y");

// Time
// echo time();
// echo date("l, d-M-Y", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime (0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
// echo date("l", mktime(0, 0, 0, 5, 22, 2002));

// strtotime
echo date("l", strtotime("22 may 2002"));
