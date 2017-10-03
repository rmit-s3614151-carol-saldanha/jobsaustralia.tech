<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
            'id' => '2f9e1caf-7408-4535-a376-bdfd89767845',
            'name' => 'Aaron Horler',
            'email' => 'aaron@aaronhorler.dev',
            'password' => bcrypt('secret'),
            'title' => 'Student',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Mordialloc',
            'experience' => 2,
            'education' => 5,
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 1,
            'html' => 1,
            'css' => 1,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 1,
            'winserver' => 1,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 1,
            'perl' => 0,
            'bash' => 1,
            'batch' => 1,
            'cisco' => 1,
            'office' => 1,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);

        DB::table('users')->insert([
            'id' => 'a4ca6a90-c70e-4035-b019-b8a09949c913',
            'name' => 'Bob Smith',
            'email' => 'bobsmith@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Business analyst',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 3,
            'education' => 0,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 1,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 1,
            'perl' => 0,
            'bash' => 1,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 1,
            'go' => 0,
            'ruby' => 0,
            'asp' => 0,
            'scala' => 0,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);
        
        DB::table('users')->insert([
            'id' => '4238b75b-034c-4c80-92f1-0188a03806df',
            'name' => 'Dean Winchester',
            'email' => 'deanwinchester@live.com',
            'password' => bcrypt('secret'),
            'title' => 'Programmer',
            'sector' => 'Information Technology',
            'state' => 'wa',
            'city' => 'Perth',
            'experience' => 2,
            'education' => 1,
            'java' => 0,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 0,
            'css' => 1,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'perl' => 0,
            'bash' => 0,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 1,
            'scala' => 0,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);
        
        DB::table('users')->insert([
            'id' => 'c033ac4a-4a33-4790-a380-1f84a708193c',
            'name' => 'Kara Danvers',
            'email' => 'karad@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Software Developer',
            'sector' => 'Information Technology',
            'state' => 'sa',
            'city' => 'adelaide',
            'experience' => 5,
            'education' => 2,
            'java' => 1,
            'python' => 1,
            'c' => 1,
            'csharp' => 1,
            'cplus' => 1,
            'php' => 1,
            'html' => 1,
            'css' => 1,
            'javascript' => 1,
            'sql' => 1,
            'unix' => 1,
            'winserver' => 1,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 1,
            'perl' => 1,
            'bash' => 1,
            'batch' => 1,
            'cisco' => 1,
            'office' => 1,
            'r' => 1,
            'go' => 1,
            'ruby' => 1,
            'asp' => 1,
            'scala' => 1,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);
        
        DB::table('users')->insert([
            'id' => 'b91da612-2d95-4363-90e5-1908be164fbf',
            'name' => 'Alec Lightwood',
            'email' => 'alightwood@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Consultant',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 4,
            'education' => 1,
            'java' => 1,
            'python' => 0,
            'c' => 1,
            'csharp' => 0,
            'cplus' => 0,
            'php' => 0,
            'html' => 1,
            'css' => 0,
            'javascript' => 0,
            'sql' => 0,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 0,
            'linuxdesktop' => 0,
            'macosdesktop' => 0,
            'perl' => 0,
            'bash' => 1,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 0,
            'asp' => 1,
            'scala' => 0,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);
        
        DB::table('users')->insert([
            'id' => '9dbfbe3f-d151-4be6-8cba-730afeb971fc',
            'name' => 'Jillian Banks',
            'email' => 'jillianbanks@gmail.com',
            'password' => bcrypt('secret'),
            'title' => 'Project Manager',
            'sector' => 'Information Technology',
            'state' => 'vic',
            'city' => 'Melbourne',
            'experience' => 1,
            'education' => 2,
            'java' => 1,
            'python' => 0,
            'c' => 0,
            'csharp' => 0,
            'cplus' => 1,
            'php' => 0,
            'html' => 0,
            'css' => 0,
            'javascript' => 0,
            'sql' => 1,
            'unix' => 0,
            'winserver' => 0,
            'windesktop' => 1,
            'linuxdesktop' => 1,
            'macosdesktop' => 0,
            'perl' => 0,
            'bash' => 1,
            'batch' => 0,
            'cisco' => 0,
            'office' => 0,
            'r' => 0,
            'go' => 0,
            'ruby' => 1,
            'asp' => 0,
            'scala' => 0,
            'cow' => 0,
            'actionscript' => 0,
            'assembly' => 0,
            'autohotkey' => 0,
            'coffeescript' => 0,
            'd' => 0,
            'fsharp' => 0,
            'haskell' => 0,
            'matlab' => 0,
            'objectivec' => 0,
            'objectivecplus' => 0,
            'pascal' => 0,
            'powershell' => 0,
            'rust' => 0,
            'swift' => 0,
            'typescript' => 0,
            'vue' => 0,
            'webassembly' => 0,
            'apache' => 0,
            'aws' => 0,
            'docker' => 0,
            'nginx' => 0,
            'saas' => 0,
            'ipv4' => 0,
            'ipv6' => 0,
            'dns' => 0,
            'notifymarketing' => 0,
            'notifynewjob' => 1,
        ]);
    }
}
