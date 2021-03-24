<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FsaformsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       
        DB::table('f_s_a_forms')->insert(
            [
            [
                'name_surname' => 'test_name_surname1',
                'email'=> 'test_mail1@gmail.com',
                'phone'=>  '123456789',
                'passport'=>  'file/test_pass.pdf',
                'transcript'=> 'file/test_trans.pdf',
                'graduation_document'=>  'file/test_grad.pdf',
                'graduation_average'=>  '10',
                'language_document'=> 'file/lang.pdf',
                               
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9), 
                'created_at'=>  now(),           
            ],
            [
                'name_surname' => 'test_name_surname2',
                'email'=> 'test_mail2@gmail.com',
                'phone'=>  '113456789',
                'graduation_average'=>  '10',
                'passport'=>  'file/test_pass2.pdf',
                'transcript'=> 'file/test_trans2.pdf',
                'graduation_document'=>  'file/test_grad2.pdf',
                'language_document'=> 'file/lang2.pdf',
                                  
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),   
                'created_at'=>  now(),         
            ],
            [
                'name_surname' => 'test_name_surname3',
                'email'=> 'test_mail3@gmail.com',
                'phone'=>  '323456789',
                'passport'=>  'file/test_pass3.pdf',
                'transcript'=> 'file/test_trans3.pdf',
                'graduation_document'=>  'file/test_grad3.pdf',
                'graduation_average'=>  '10',
                'language_document'=> 'file/lang3.pdf',
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),   
                 'created_at'=>  now(),         
            ],
            [
                'name_surname' => 'test_name_surname4',
                'email'=> 'test_mail4@gmail.com',
                'phone'=>  '423456789',
                'passport'=>  'file/test_pass4.pdf',
                'transcript'=> 'file/test_trans4.pdf',
                'graduation_document'=>  'file/test_grad4.pdf',
                'language_document'=> 'file/lang4.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),  
                 'created_at'=>  now(),          
            ],
            [
                'name_surname' => 'test_name_surname5',
                'email'=> 'test_mail5@gmail.com',
                'phone'=>  '523456789',
                'passport'=>  'file/test_pass5.pdf',
                'transcript'=> 'file/test_trans5.pdf',
                'graduation_document'=>  'file/test_grad5.pdf',
                'language_document_document'=> 'file/lang5.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),  
                 'created_at'=>  now(),          
            ],
            [
                'name_surname' => 'test_name_surname6',
                'email'=> 'test_mail6@gmail.com',
                'phone'=>  '623456789',
                'passport'=>  'file/test_pass6.pdf',
                'transcript'=> 'file/test_trans6.pdf',
                'graduation_document'=>  'file/test_grad6.pdf',
                'language_document'=> 'file/lang6.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),  
                 'created_at'=>  now(),          
            ],
            [
                'name_surname' => 'test_name_surname7',
                'email'=> 'test_mail7@gmail.com',
                'phone'=>  '723456789',
                'passport'=>  'file/test_pass7.pdf',
                'transcript'=> 'file/test_trans7.pdf',
                'graduation_document'=>  'file/test_grad7.pdf',
                'language_document'=> 'file/lang7.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9), 
                 'created_at'=>  now(),           
            ],
            [
                'name_surname' => 'test_name_surname8',
                'email'=> 'test_mail8@gmail.com',
                'phone'=>  '823456789',
                'passport'=>  'file/test_pass8.pdf',
                'transcript'=> 'file/test_trans8.pdf',
                'graduation_document'=>  'file/test_grad8.pdf',
                'language_document'=> 'file/lang8.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),  
                 'created_at'=>  now(),          
            ],
            [
                'name_surname' => 'test_name_surname9',
                'email'=> 'test_mail9@gmail.com',
                'phone'=>  '923456789',
                'passport'=>  'file/test_pass9.pdf',
                'transcript'=> 'file/test_trans9.pdf',
                'graduation_document'=>  'file/test_grad9.pdf',
                'language_document'=> 'file/lang9.pdf',
                'graduation_average'=>  '10',
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9), 
                 'created_at'=>  now(),           
            ],
            [
                'name_surname' => 'test_name_surname10',
                'email'=> 'test_mail10@gmail.com',
                'phone'=>  '103456789',
                'graduation_average'=>  '10',
                'passport'=>  'file/test_pass10.pdf',
                'transcript'=> 'file/test_trans10.pdf',
                'graduation_document'=>  'file/test_grad10.pdf',
                'language_document'=> 'file/lang10.pdf',                
                 
                'explanation' => 'Test Paragraf',
                'department_id'=>mt_rand(1,9),
                 'created_at'=>  now(),          
            ]
            ]                             
    );
    }
}
