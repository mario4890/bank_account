<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    private function setWalletID(int $walletID): History
    {
        $this->wallet_id = $walletID;

        return $this;
    }

    private function setHistoryActionID(int $historyActionID): History
    {
        $this->history_action_id = $historyActionID;

        return $this;
    }

    public function newEntity(int $walletID, int $historyActionID): History
    {
        $this->setWalletID($walletID);
        $this->setHistoryActionID($historyActionID);
        $this->save();

        return $this;
    }
}
