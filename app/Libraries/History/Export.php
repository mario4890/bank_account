<?php

namespace App\Libraries\History;

use App\Models\History;

class Export
{
    public function csv($walletID)
    {
        $fileName       = 'history.csv';
        $historyObj     = new History();
        $history        = $historyObj->getByWalletID($walletID);

        $headers = array(
            "Content-type"          => "text/csv",
            "Content-Disposition"   => "attachment; filename=$fileName",
            "Pragma"                => "no-cache",
            "Cache-Control"         => "must-revalidate, post-check=0, pre-check=0",
            "Expires"               => "0"
        );

        $columns = array('Wallet ID', 'Wallet name', 'Action', 'Date');

        $file = fopen($fileName, 'w');
        fputcsv($file, $columns);

        foreach ($history as $value) {
            $row['Wallet ID']   = $value->wallet_id;
            $row['Wallet name'] = $value->wallet->name;
            $row['Action']      = $value->historyAction->name;
            $row['Date']        = $value->created_at;

            fputcsv($file, array($row['Wallet ID'], $row['Wallet name'], $row['Action'], $row['Date']));
        }

        return response()->download($fileName, 'tweets.csv', $headers);
    }
}
