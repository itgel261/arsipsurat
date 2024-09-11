@extends('dashboard.layouts.main')

@section('container')

@php
    function monthToRoman($monthNumber) {
        $romanMonths = [
            1 => 'I', 2 => 'II', 3 => 'III', 4 => 'IV',
            5 => 'V', 6 => 'VI', 7 => 'VII', 8 => 'VIII',
            9 => 'IX', 10 => 'X', 11 => 'XI', 12 => 'XII'
        ];
        return $romanMonths[$monthNumber] ?? '';
    }

    function formatDateIndonesian($date)
    {
        $englishDayNames = ['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
        $indonesianDayNames = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];

        $englishMonthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        $indonesianMonthNames = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

        $day = date('l', strtotime($date));
        $month = date('F', strtotime($date));

        $dayIndex = array_search($day, $englishDayNames);
        $monthIndex = array_search($month, $englishMonthNames);

        $indonesianDay = $indonesianDayNames[$dayIndex];
        $indonesianMonth = $indonesianMonthNames[$monthIndex];

        return date('j', strtotime($date)) . ' ' . $indonesianMonth . ' ' . date('Y', strtotime($date));
    }

    $monthNumber = date('n', strtotime($ga->tglSurat));
    $romanMonth = monthToRoman($monthNumber);
    $formattedDate = formatDateIndonesian($ga->tglSurat);
@endphp

<!-- Recent Sales Start -->
<div class="container-fluid pt-4 px-4">
                <div class="bg-light text-center rounded p-4">
                    <div class="d-flex align-gaems-center justify-content-between mb-4">
                        <a href="/dashboard/ga" class="btn btn-success"><i class="bi bi-arrow-left-square"></i> Kembali</a>
                        <a href="/dashboard/ga/{{ $ga->noSurat }}/cetak" class="btn btn-secondary"><i class="bi bi-printer"></i> Cetak</a>
                    </div>
                    <center style="margin-top: 50px;">
                        <table style="align-content: center">
                            <tr>
                            <td><img src="{{ asset('dashmin/img/GEL.png') }}" width="110" height="110" /></td>
                            <td style="font-family: 'Times New Roman', Times, serif; font-size: 13px">
                                <center>
                                <font size="5"><b>GLOBAL ENERGI LESTARI</b> </font><br />
                                </center>
                            </td>
                            </tr>
                            <td>
                            <td colspan="2"><hr style="border: 1px solid" /></td>
                            </td>
                        </table>
                        <br />
                        <table width="545">
                            <tr>
                            <td>Jakarta, {{ formatDateIndonesian($ga->tglSurat) }}</td>
                            </tr>
                            <tr>
                            <td>Nomor : {{ $ga->noSurat }}/GEL/GA-AG/{{ $romanMonth }}/2024</td>
                            </tr>
                            <tr>
                            <td>Perihal : {{ $ga->perihal }}</td>
                            </tr>
                            
                            
                        </table> 
                        <br>
                        <table width="545">
                            <tr>
                            <td>Kepada</td>
                            </tr>
                            <tr>
                            <td>Building Management</td>
                            </tr>
                            <tr>
                            <td>PT Buanagraha Arthaprima</td>
                            </tr>
                            <tr>
                            <td>Gedung Artha Graha Jl. Jendral Sudirman Kav. 52-53</td>
                            </tr>
                            <tr>
                            <td>Jakarta - Indonesia</td>
                            </tr>
                        </table>
                        <br>
                        <table width="545">
                            <tr>
                            <td>Dengan hormat,</td>
                            </tr>
                            <tr>
                            <td>Yang bertanda tangan dibawah ini:</td>
                            </tr>
                            <tr>
                            <td width="200" style="font-weight: bold">NAMA</td>
                            <td width="10" style="font-weight: bold">:</td>
                            <td width="335" style="font-weight: bold">TONY</td>
                            </tr>
                            <tr>
                            <td width="200" style="font-weight: bold">JABATAN</td>
                            <td width="10" style="font-weight: bold">:</td>
                            <td width="335" style="font-weight: bold">CORPORATE BUSINESS CONTROL MANAGER</td>
                            </tr>
                        </table>
                        <table width="545">
                        <tr>
                            <td>Dengan ini mengajukan permohonan pembuatan kartu akses Gedung Artha Graha untuk karyawan PT. Global Energi Lestari, berikut data karyawan kami</td>
                            </tr>
                        </table>
                        <table width="545">
                            <tr>
                            <td>
                                {!! $ga->keterangan !!}
                            </td>
                            </tr>
                            <br /><br />
                        </table>
                        <br /><br />
  
                        <br /><br /><br />
                        <table width="545">
                            <tr>
                                <td style="text-align: left">Pada Hari & Tanggal : {{ formatDateIndonesian($ga->tglSurat) }}</td>
                            </tr>
                            <tr>
                                <td width="400"></td>
                                <td style="text-align: left">An. {{ $ga->ttd }}</td>
                            </tr>
                        </table>
                        <br>
                        <table>
                        <tr>
                        <td width="400"></td>
                            <td >
                                <img src="{{ asset('dashmin/img/' . $ga->ettd) }}" width="110" height="110" />
                            </td>
                        </tr>
                    </table>
              
                        <table width="400" style="margin-bottom: 100px">
                            <tr>
                                <td width="340"></td>
                                <td style="text-align: left">{{ $ga->namaTtd }}</td>
                            </tr>
                        </table>
                    </center>
                </div>
            </div>
<!-- Recent Sales End -->


@endsection