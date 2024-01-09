<?php

namespace App\Imports;

use DateTime;
use Carbon\Carbon;
use App\Models\Piutang;
use App\Models\EClaimCoding;
use App\Models\RealisasiDispute;
use App\Models\TransaksiPiutang;
use App\Models\SimrsJenisTindakan;
use App\Models\PetaTarifTindakanEklaim;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\Importable;
use Illuminate\Support\Facades\Log;

class ExcelImportMateri implements ToModel
{
    use Importable;

    public function model(array $row)
    {
        $id_tindakan = $row[0];
        $nama_tindakan = $row[1];
        $kelompok = $row[2];

        if (!$id_tindakan) {
            return null;
        }

        $simrs_jenis_tindakan = SimrsJenisTindakan::where('idtindakan', $id_tindakan)->first();
        if (empty($simrs_jenis_tindakan)) {
            $simrs_jenis_tindakan = new SimrsJenisTindakan();
            $simrs_jenis_tindakan->idtindakan = $id_tindakan;
            $simrs_jenis_tindakan->nmtindakan = $nama_tindakan;
            $simrs_jenis_tindakan->save();
        }

        $peta_tarif = PetaTarifTindakanEklaim::where('simrs_jenis_tindakan_id', $simrs_jenis_tindakan->id)->first();
        if (empty($peta_tarif)) {
            $peta_tarif = new PetaTarifTindakanEklaim();
            $peta_tarif->simrs_jenis_tindakan_id = $simrs_jenis_tindakan->id;
        }
        $peta_tarif->kelompok_tarif_eklaim = $kelompok;
        $peta_tarif->save();

        return null;
    }
}
