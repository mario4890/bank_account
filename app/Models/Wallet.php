<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wallet extends Model
{
    use HasFactory;

    public function getAll(): Object
    {
        $sql = $this->where('active', 1)
            ->get();

        return $sql;
    }

    public function getByID(int $walletID): Wallet
    {
        $sql = $this->find($walletID);

        return $sql;
    }

    public function getByName(string $name): Wallet
    {
        $sql = $this->where('name', $name)->first();

        return $sql;
    }

    public function getByAmount(float $amount): Wallet
    {
        $sql = $this->where('amount', $amount)->first();

        return $sql;
    }

    public function getByActive(int $active): Wallet
    {
        $sql = $this->where('active', $active)->get();

        return $sql;
    }

    private function setName(string $name): Wallet
    {
        $this->name = $name;

        return $this;
    }

    private function setAmount(float $amount): Wallet
    {
        $this->amount = $amount;

        return $this;
    }

    private function setActive(int $active): Wallet
    {
        $this->active = $active;

        return $this;
    }

    public function addAmount(float $amount) {
        $this->amount += $amount;
        $this->save();

        return $this;
    }

    public function subtractAmount(float $amount) {
        $this->amount -= $amount;
        $this->save();

        return $this;
    }
}
