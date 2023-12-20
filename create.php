<?php 
    $data[] = array(
        'no' => 1,
        'nim' => 2207412045,
        'nama' => 'Zain',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

    $data[] = array(
        'no' => 2,
        'nim' => 2207412038,
        'nama' => 'Rico',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

    $data[] = array(
        'no' => 3,
        'nim' => 2207412039,
        'nama' => 'Dennis',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

    $data[] = array(
        'no' => 4,
        'nim' => 2207412035,
        'nama' => 'Bagus',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

    $data[] = array(
        'no' => 5,
        'nim' => 2207412043,
        'nama' => 'Izra',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );


    $data[] = array(
        'no' => 6,
        'nim' => 2207412040,
        'nama' => 'Ishom',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

    $data[] = array(
        'no' => 7,
        'nim' => 2207412030,
        'nama' => 'Toka',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

        $data[] = array(
        'no' => 8,
        'nim' => 2207412028,
        'nama' => 'Laila',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

        $data[] = array(
        'no' => 9,
        'nim' => 2207412027,
        'nama' => 'padel',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );

        $data[] = array(
        'no' => 10,
        'nim' => 2207412044,
        'nama' => 'zahra',
        'kelas' => 'CCIT 3B',
        'prodi' => 'Teknik Informatika',
        'jurusan' => 'Teknik Informatika dan Komputer'
    );




    $jsonfile = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents('zain.json', $jsonfile);

?>