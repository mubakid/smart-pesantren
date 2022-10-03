<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MOU</title>
    <style type="text/css">
        @font-face {
            font-family: 'bookman';
            src: url({{ storage_path('fonts/bookman old style.ttf') }}) format("truetype");
        }

        body {
            font-family: "bookman";
            font-size: 14px;
        }

    </style>
</head>

<body>
    <img style="width: 100%" src="{{ public_path('assets/bakid/kop.png') }}" alt="assets/img/kop.png">
    <div style="text-align:center"><b>
            <p> <b> SURAT PERNYATAAN</b></p>
    </div><br>
    yang bertanda tangan dibawah ini :
    <table border="0" cellspacing="5" cellpading="10">
        <tr>
            <td width="150">
                Nama <br>
                Tempat, Tanggal lahir<br>
                Alamat<br>
                No. Hp<br>
                Wali Santri dari<br>
                Tempat, Tanggal lahir<br>
                Alamat<br>
            </td>

            <td width="500">
                : {{ $data->family->a_nama }}<br>
                : {{ $data->desa }}, {{ $data->kecamatan }}, {{ $data->kota }}<br>
                : {{ $data->family->a_phone }}<br>
                : {{ $data->nama }} <br>
                : {{ $data->tempat_lahir }}, {{ $data->tanggal_lahir }}<br>
                : {{ $data->desa }}, {{ $data->kecamatan }}, {{ $data->kota }}<br>
            </td>
        </tr>
    </table>
    <table>
        <tr>
            <td>
                <p> Menyatakan bahwa kami :
                <ol type="1" start="1">
                    <li>Menyerahkan anak kami sepenuhnya kepada pengasuh dan pengurus Pondok Pesantren Miftahul
                        Ulum Banyuputih Kidul Jatiroto Lumajang untuk mendidik dan mengawasi menurut ajaran agama
                        Islam Ahlus Sunnah Wal Jamaah dan Hukum Negara Republik Indonesia;
                    </li>
                    <li>Ridlo atas segala sanksi yang diberikan oleh pengasuh, pengurus, kepala atau ketua lembaga
                        kepada anak kami, jika anak kami melakukan pelanggaran terhadap peraturan Pondok Pesantren;
                    </li>
                    <li>Menerima dengan hati legawa atas pengembalian anak kami jika anak kami sudah tidak sanggup
                        untuk mentaati peraturan atau melampaui poin pelanggaran yang telah ditetapkan oleh Pondok
                        Pesantren;
                    </li>
                    <li>Siap mengajukan permohonan pengunduran diri anak kami kepada pihak Madrasah dan Sekolah
                        Tinggi jika anak kami bermasalah di Pondok Pesantren dan kemudian anak kami dikeluarkan dari
                        Pondok Pesantren;
                    </li>
                    <li>Siap menghadap pengasuh, pengurus, kepala atau ketua lembaga jika kami dipanggil ke Pondok
                        Pesantren yang berkaitan dengan anak kami;
                    </li>
                    <li>Bertanggung jawab atas biaya administrasi anak kami di Pondok Pesantren;
                    </li>
                    <li>Menyelesaikan secara kekeluargaan atas kemungkinan terjadinya konflik anak kami dengan
                        keluarga besar Pondok Pesantren;
                    </li>
                    <li>Sanggup menjaga nama baik almamater Pondok Pesantren;
                    </li>
                    <li>Tidak memperkenankan atau menjemput anak kami lebih dari satu kali dalam waktu tiga bulan
                        dengan tanpa adanya keperluan yang bersifat syar&#39;i;
                    </li>
                    <li>Memintakan ijin anak kami kepada pengasuh dan pengurus Pondok Pesantren pada saat pulang
                        atau boyong;
                    </li>
                    <li>Ikut serta dalam mendidik dan mengawasi anak kami ketika berada di rumah ;
                    </li>
                    <li>Memperbolehkan/tidak memperbolehkan merokok kepada kami jika sudah kelas Madrasah
                        Tsanawiyah Diniyah (MTsD);
                    </li> <br> <br>
                    Demikian surat pernyataan ini kami buat dengan sebenarnya.
                </ol>
                </p>
            </td>
        </tr>
    </table>
    <table style="margin-top: 10px; margin-left:300px">
        <tr>
            <td align="left" valign="top">
                <br>
                {{-- Kepala MTS Miftahul Ulum 2 --}}
                <br>
                <br>
                <br><br><br>
                <br>
                {{-- <b> SAHRONI, S.PdI., M.Pd</b> --}}
            </td>
            <td align="left" width="150" height="105">
            </td>
            <td align="left" valign="top">
                Lumajang,{{ Carbon\Carbon::now()->isoFormat('D MMMM Y') }} <br>
                Orang tua / Wali Santri
                <br>
                <br>
                <br><br><br>
                <br>
                {{ $data->family->a_nama }}
            </td>
        </tr>
    </table>
</body>

</html>
