<?php

namespace App\Imports;

use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class ImportRegularStudent implements ToModel, WithStartRow, WithHeadingRow, WithValidation
{
    public function rules(): array
    {
        return [
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',
            'company' => 'required'
        ];

    }

    public function model(array $row)
    {
        $name = $row['name'];
        $email = $row['email'];
        $password = $row['password'];
        $company = $row['company'];
        $new_student = new User([
            'name' => $name,
            'email' => strtolower($email),
            'password' => Hash::make($password),
            'email_verified_at' => now(),
            'created_at' => now(),
            'updated_at' => now(),
            'referral' => generateUniqueId(),
            'language_id' => Settings('language_id') ?? '19',
            'language_name' => Settings('language_name') ?? 'English',
            'language_code' => Settings('language_code') ?? 'en',
            'language_rtl' => Settings('language_rtl') ?? '0',
            'country' => Settings('country_id'),
            'lms_id' => Auth::user()->lms_id,
            'company' => $company,
        ]);
        if (isModuleActive('UserType')) {
            $user = User::find($new_student->id);
            if ($user) {
                applyDefaultRoleToUser($user);
            }
        }
        return $new_student;
    }

    public function startRow(): int
    {
        return 2;
    }

    public function headingRow(): int
    {
        return 1;
    }
}
