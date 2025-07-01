<?php

namespace App;

enum JenisTransaksi: String
{
    case Debit = 'debit';
    case Kredit = 'kredit';
}
