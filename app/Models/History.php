<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    use HasFactory;

    public function getByWalletID(int $walletID): Object
    {
        $sql = $this->with('wallet', 'historyAction')
            ->where('wallet_id', $walletID)
            ->get();

        return $sql;
    }

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

    public function wallet()
    {
        return $this->hasOne(Wallet::class, 'id', 'wallet_id');
    }

    public function historyAction()
    {
        return $this->hasOne(HistoryAction::class, 'id', 'history_action_id');
    }
}
