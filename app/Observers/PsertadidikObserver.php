<?php

namespace App\Observers;


use App\Models\Ppdb;
use App\Models\Wali;
use App\Models\Kelas;
use App\Models\Tinggal;
use App\Models\Kegemaran;
use App\Models\Kesehatan;
use App\Models\Naikkelas;
use App\Models\Ibukandung;
use App\Models\Pendidikan;
use App\Models\Ayahkandung;
use App\Models\Psertadidik;
use App\Models\Perkembangan;

class PsertadidikObserver
{
    /**
     * Handle the Psertadidik "created" event.
     */
    public function created(Psertadidik $psertadidik) : void
    {
        Tinggal::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Kesehatan::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Pendidikan::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Ayahkandung::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Ibukandung::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Wali::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Kegemaran::create([
            'psertadidik_id' => $psertadidik->id
        ]);
        Perkembangan::create([
            'psertadidik_id' => $psertadidik->id
        ]);

        Ppdb::create([
            'psertadidik_id'=> $psertadidik->id
        ]);

        // $kelas = Kelas::all();
        Naikkelas::create([
            'psertadidik_id' =>$psertadidik->id,
            'kelas_id' => 1,
            'thnplajaran_id' => 1

        ]);


    }

    /**
     * Handle the Psertadidik "updated" event.
     */
    public function updated(Psertadidik $psertadidik): void
    {
        //
    }

    /**
     * Handle the Psertadidik "deleted" event.
     */
    public function deleted(Psertadidik $psertadidik): void
    {
        //
    }

    /**
     * Handle the Psertadidik "restored" event.
     */
    public function restored(Psertadidik $psertadidik): void
    {
        //
    }

    /**
     * Handle the Psertadidik "force deleted" event.
     */
    public function forceDeleted(Psertadidik $psertadidik): void
    {
        //
    }
}
