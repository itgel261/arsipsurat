@if ( $mss->perihal  == "Full Corporate Offer (FCO)")

<!DOCTYPE html>
<html lang="en">
  <head>
  <head>
    <title>FORMULIR KEBUTUHAN BASIS MSS | {{ $mss->perihal }}</title>
    <link rel="icon" type="image/png" href="{{ asset('dashmin/img/GEL.png') }}">
    <style>
    /* General Body Styles */
    @page {
        size: A4; /* Specify A4 size */
        margin: 0; /* Remove default margins */
    }

    body {
        margin: 20mm; /* Set your own margins */
        font-family: 'Times New Roman', Times, serif;
        background-image: url('{{ asset('img/KOP.png') }}');
        background-size: contain; /* Adjusts the image to fit within the body without stretching */
        background-repeat: no-repeat; /* Prevents the image from repeating */
        background-position: center; /* Centers the image */
        height: 100vh; /* Ensures the body takes the full height */
    }

    /* Ensure background image is printed */
    @media print {
        body {
            -webkit-print-color-adjust: exact; /* Ensure color and background images are printed */
            print-color-adjust: exact;
        }
    }
</style>

  </head>
  <body onload="window.print()">
    <center>
      <table width="450">
        <tr>
        <tr>
            <td><img src="{{ asset('dashmin/img/GEL.png') }}" width="110" height="110" /></td>
            <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
            <center>
                        <table width="545">
                            <tr>
                                <td style="text-align: left">Jakarta, {{ formatDateIndonesian($mss->tglSurat) }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <tr>
                            <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; text-align: center; font-weight: bold; font:uppercase" class="text">
                                <u>{{ $mss->perihal }}</u>
                            </td>
                            </tr>
                            <tr>
                            <td style="text-align: center; font-weight: bold; font:italic">{{ $mss->prefix }}</td>
                            </tr>
                        </table> 
                        <br>
                        <table width="545">
                            <tr>
                            <td>Dear {{ $mss->pttujuan }} </td>
                            </tr>
                            <tr>
                            <td>Hereby, we are pleased to confirm with Full Corporate authority and responsibilty to provide you the following commodity herein after descrived upon the terms and conditions as stated bellow :</td>
                            </tr>
                        </table>
                        <br /><br />
                        <table width="545">
                            <td width="20"> 1. </td>
                            <td width="200">Commodity</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->nama }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 2. </td>
                            <td width="200">Source</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->Source }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 3. </td>
                            <td width="200">Country of Origin</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->country }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 4. </td>
                            <td width="200">Typical Specification</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->spec }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 5. </td>
                            <td width="200">Validity Offer</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->vo }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 6. </td>
                            <td width="200">Quantity</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->qty }} (+/- 10%) for two barge</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 7. </td>
                            <td width="200">Loading Port</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->lp }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 8. </td>
                            <td width="200">Destination Port</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->dp }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20"> 9. </td>
                            <td width="200">Price Scheme</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->cif }}</td>
                        <table width="545">
                            <td width="200"></td>
                            <td width="10"></td>
                            <td width="335">{{ $mss->fob }}</td>
                        </table>
                        <table width="545">
                            <td width="200"> </td>
                            <td width="10"></td>
                            <td width="335">{{ $mss->freight }}</td>
                        </table>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20">10. </td>
                            <td width="200">Shipping Schedule</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->shipschedule }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20">11. </td>
                            <td width="200">Term of Coal Delivery</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->tcd }}</td>
                            </tr>
                        </table>
                        <table width="545">
                            <td width="20">12. </td>
                            <td width="200">Surveyor</td>
                            <td width="10">:</td>
                            <td width="335">{{ $mss->surveyor }}</td>
                            </tr>
                        </table>
                        <br>
                    </center>
  </body>
</html>

@endif






@if ( $mss->perihal  == "Surat Izin Masuk Tambang")

<!DOCTYPE html>
<html lang="en">
  <head>
  <head>
    <title>FORMULIR KEBUTUHAN BASIS MSS | {{ $mss->perihal }}</title>
    <link rel="icon" type="image/png" href="{{ asset('dashmin/img/GEL.png') }}">
    <style>
    /* General Body Styles */
    @page {
        size: A4; /* Specify A4 size */
        margin: 0; /* Remove default margins */
    }

    body {
        font-family: 'Times New Roman', Times, serif;
        background-image: url('{{ asset('img/KOP.png') }}');
        background-size: contain; /* Adjusts the image to fit within the body without stretching */
        background-repeat: no-repeat; /* Prevents the image from repeating */
        background-position: center; /* Centers the image */
        height: 99vh; /* Ensures the body takes the full height */
    }

    /* Ensure background image is printed */
    @media print {
        body {
            -webkit-print-color-adjust: exact; /* Ensure color and background images are printed */
            print-color-adjust: exact;
        }
    }
</style>
  </head>
  <body onload="window.print()"><br><br><br><br><br><br>
  <center style="margin-top: 50px;">


                        <table width="545">
                            <tr>
                                <td style="text-align: right">Jakarta, {{ formatDateIndonesian($mss->tglSurat) }}</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="545">
                            <tr>
                            <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; font-weight: bold; text-transform:uppercase" class="text">
                                {{ $mss->pttujuan }}
                            </td>
                            </tr>
                            <tr>
                            <td>{!! $mss->alamat !!}</td>
                            </tr>
                        </table> 
                        <br>
                        <table width="545">
                            <tr>
                            <td style="font-family: 'Times New Roman', Times, serif; font-size: 18px; text-align: center; font-weight: bold; text-transform:uppercase" class="text">
                                <u>{{ $mss->perihal }} {{ $mss->ptkunjungan }}</u>
                            </td>
                            </tr>
                            <tr>
                            <td style="text-align: center; font-weight: bold; font-style: italic;">{{ $mss->prefix }}</td>
                            </tr>
                        </table> 
                        <br>
                        <table width="545">
                            <tr>
                            <td>Dear {{ $mss->pttujuan }} </td>
                            </tr>
                            <tr>
                            <td>Kami PT. Global Energi Lestari (GEL) sebagai pemilik tambang batubara. Menindaklanjuti pengajuan permintaan kunjungan yang akan dilakukan oleh {{ $mss->pttujuan }} di tambang {{ $mss->ptkunjungan }} pada tanggal {{ $mss->tglSurat }}. Berikut nama yang akan melakukan kunjungan:</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="545">
                            <tr>
                            <td>{!! $mss->keterangan !!}</td>
                            </tr>
                        </table>
                        <br><br>
                        <table width="545">
                            <tr>
                            <td>Demikianlah surat izin kunjungan ini kami buat. Mohon dapat dipergunakan sebagaimana mestinya.</td>
                            </tr>
                        </table>
                        <br /><br />
                        <table width="545">
                            <tr>
                            <td>Hormat Kami,</td>
                            </tr>
                        </table>
                        <br>
                    </center>
  </body>
</html>

@endif