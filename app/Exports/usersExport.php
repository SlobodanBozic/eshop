<?php

namespace App\Exports;

use App\User;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class usersExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
      // For exporting complete table without any condition
      // return User::all();

      //For exporting selected columns of table with condition
      $usersData = User::select('id','name', 'email')->where('status', 1)->orderBy('id','Asc')->get();
      return $usersData;


    }

    public function headings(): array {
      return ['Id','Name','Email'];
    }




}
