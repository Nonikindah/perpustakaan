<?php
/**
 * Created by PhpStorm.
 * User: nonik indahwati
 * Date: 8/10/2018
 * Time: 6:38 PM
 */

use Carbon\Carbon;

if (!function_exists('getHariFromCarbon')) {
    /**
     * Mendapatkan nama hari dari object carbon
     *
     * @param \Carbon\Carbon $carbon
     * @return string
     */
    function getHariFromCarbon($carbon)
    {
        $daftarHari = [
            'Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'
        ];

        return $daftarHari[$carbon->dayOfWeek];
    }
}

if (!function_exists('getBulanFromCarbon')) {
    /**
     * Mendapatkan nama bulan dari object carbon
     *
     * @param \Carbon\carbon $carbon
     * @return string
     */
    function getBulanFromCarbon($carbon)
    {
        $daftarBulan = [
            'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'
        ];

        return $daftarBulan[$carbon->month - 1];
    }
}

if (!function_exists('zeroPrefix')) {
    /**
     * Memberi tambahan 0 pada angka yang lebih kecil dari 10
     *
     * @param int $number
     * @return string
     */
    function zeroPrefix($number)
    {
        if ($number < 10)
            return '0' . $number;

        return $number;
    }
}

if (!function_exists('formatDate')) {
    /**
     * Melakukan formatting tanggal
     *
     * @param Carbon $carbon
     * @return string
     */
    function formatDate(Carbon $carbon) {
        return $carbon->day . ' ' . getBulanFromCarbon($carbon) . ' ' . $carbon->year;
    }

}

// . ', ' . zeroPrefix($carbon->hour) . ':' . zeroPrefix($carbon->minute)