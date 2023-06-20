<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('images')->delete();
        
        \DB::table('images')->insert(array (
            0 => 
            array (
                'id' => 1,
                'source' => 'RjhW3rToAc9QbGmP1UNj8jYwmNIKHZjgmLQrujkQ.jpg',
                'item_id' => 1,
            ),
            1 => 
            array (
                'id' => 2,
                'source' => 'jzMJlb95LQiBYgU0qYf3pbKZdNZEQwmHLUJ3a8vy.jpg',
                'item_id' => 1,
            ),
            2 => 
            array (
                'id' => 3,
                'source' => '4ySTqGQ7YgUtQ2sx87ibMTWAyVqLlpnS9p4BBZjr.jpg',
                'item_id' => 1,
            ),
            3 => 
            array (
                'id' => 4,
                'source' => 'gLtzlsNHhDuajlhHByiUdNb4PQeXVYsHJiqynvce.jpg',
                'item_id' => 2,
            ),
            4 => 
            array (
                'id' => 5,
                'source' => 'VUvZaJTzBJ78usVu91lsJcDia54LCCfG98zNf7Nu.jpg',
                'item_id' => 2,
            ),
            5 => 
            array (
                'id' => 6,
                'source' => 'EchcWV4Z2V4LGzVIAAcPktoi3gdKrrEehsWWd8wa.jpg',
                'item_id' => 2,
            ),
            6 => 
            array (
                'id' => 7,
                'source' => 'bob9dg0langY461F8n9x3BNCNCEGLjQNiSovh7Kf.jpg',
                'item_id' => 3,
            ),
            7 => 
            array (
                'id' => 8,
                'source' => 'LNYqYHls2A5zgGqVyJchXCZCPL8efGAhKqmFFqqK.jpg',
                'item_id' => 3,
            ),
            8 => 
            array (
                'id' => 9,
                'source' => 'DxdQP1ly13GuS6d9imRRbKr69I8mk7c3LeP56tSa.jpg',
                'item_id' => 3,
            ),
            9 => 
            array (
                'id' => 10,
                'source' => 'arDm8ryxgrGGhCojDZ54GEaoydGKjVEwzV9PIdVo.jpg',
                'item_id' => 4,
            ),
            10 => 
            array (
                'id' => 11,
                'source' => 'aDXqNfqK7Y1jJroX2tj3U86VNln9XoS2gs5MCqVi.jpg',
                'item_id' => 4,
            ),
            11 => 
            array (
                'id' => 12,
                'source' => '2vyr5lBPMfesHYAQWHb0rFXNOfzLBXiG2jEoOnhs.png',
                'item_id' => 4,
            ),
            12 => 
            array (
                'id' => 13,
                'source' => 'WudUkFMudD2J0cC3bo28168DvHQhFayjmzcNeYOs.jpg',
                'item_id' => 5,
            ),
            13 => 
            array (
                'id' => 14,
                'source' => '1XoLSTULadFHdZazMPHkwGZhtQfje80VKYfHKmXz.jpg',
                'item_id' => 5,
            ),
            14 => 
            array (
                'id' => 15,
                'source' => 'H9TNKDYD2eRP20kO2MySIACfBZ5LUdNyLSmJn1Sp.jpg',
                'item_id' => 5,
            ),
            15 => 
            array (
                'id' => 16,
                'source' => 'ufonRdF11kwr1RMf8xySIGthW9Fe870UW77sTMEF.jpg',
                'item_id' => 6,
            ),
            16 => 
            array (
                'id' => 17,
                'source' => 'UCQzoUmygRdKyZmY5z98yCu1e2y1khzVsFIQWLDg.jpg',
                'item_id' => 6,
            ),
            17 => 
            array (
                'id' => 18,
                'source' => 'PwuivxYVJ2zuIgGCzCBrTqYuoEIz9yHvW3OfVeBu.jpg',
                'item_id' => 6,
            ),
            18 => 
            array (
                'id' => 19,
                'source' => 'XnxueMa3hhC7IPyHf6MBcvFgY402YAoS6QdXdA2E.jpg',
                'item_id' => 7,
            ),
            19 => 
            array (
                'id' => 20,
                'source' => 'XzSRb5BuTzlg0B0MixW6jdCNYxXrMK4Z5aK5HUXL.jpg',
                'item_id' => 7,
            ),
            20 => 
            array (
                'id' => 21,
                'source' => 'bEyf20vDv3fZxhL1ccokXcrTVqXXvv1MHrvs2SYi.jpg',
                'item_id' => 8,
            ),
            21 => 
            array (
                'id' => 22,
                'source' => '2bEWcnCNOrLnqjNDKYpqabmVvlUqTXBedzoRtpV0.jpg',
                'item_id' => 8,
            ),
            22 => 
            array (
                'id' => 23,
                'source' => 'Nm12HUg0AyvHMfFRTPqAuOYmMfrHN8Ajc1TkV7tx.jpg',
                'item_id' => 8,
            ),
            23 => 
            array (
                'id' => 24,
                'source' => 'Tn7ea0OEKkh1z4yrhZl1Px3RqpSJ9F2hTVYH2gmU.jpg',
                'item_id' => 9,
            ),
            24 => 
            array (
                'id' => 25,
                'source' => 'YnYtiLzDI3RvHUDbaPrq5mQwm4kelr0xE1dTLZos.jpg',
                'item_id' => 9,
            ),
            25 => 
            array (
                'id' => 26,
                'source' => 'nfbvBeE827vvet10aFQZBnezCoMZTH0qumbXItEn.jpg',
                'item_id' => 9,
            ),
            26 => 
            array (
                'id' => 27,
                'source' => 'Dz2cQE5by2VldogN5fNR7NwZPe26sgw1nvNniC1k.jpg',
                'item_id' => 10,
            ),
            27 => 
            array (
                'id' => 28,
                'source' => 'DHSHV7sNGSlxzIpZ64GoY7IEOU0OY47Cf0rvbrKk.jpg',
                'item_id' => 10,
            ),
            28 => 
            array (
                'id' => 29,
                'source' => 'VZptnKRphiWYMZCt8zJbwJh5CVEcdIErRnjTM0Kr.jpg',
                'item_id' => 11,
            ),
            29 => 
            array (
                'id' => 30,
                'source' => 'E5HWb4kIOS2T9m6FGRRRP6dV5r3RBIDm9n1GS6Ch.jpg',
                'item_id' => 11,
            ),
            30 => 
            array (
                'id' => 31,
                'source' => 'nJKGeQxFT3QPSbs3IpxKNfIxKu4LTjnXnbvy8eIo.jpg',
                'item_id' => 11,
            ),
            31 => 
            array (
                'id' => 32,
                'source' => 'e0O3U8OGyeeJaHSbT6BTdrNEdAQF0z5Wx8UzPvsL.jpg',
                'item_id' => 12,
            ),
            32 => 
            array (
                'id' => 33,
                'source' => '20doNJrDiPdLytWfq1maI3rSXi1suApkkaL7IlGI.jpg',
                'item_id' => 12,
            ),
            33 => 
            array (
                'id' => 34,
                'source' => 'TBFEXlJVbkG6w6cXigepk2VzfbeJvcSSemztfJVx.jpg',
                'item_id' => 12,
            ),
            34 => 
            array (
                'id' => 35,
                'source' => 'OciQvnU6b4zNt7vHtMP8aJo2iwQNBpCjYBdEIKNq.jpg',
                'item_id' => 14,
            ),
            35 => 
            array (
                'id' => 36,
                'source' => 'bfUeNZDOiyHo1BWvT58XsmH169shO0F1sxsd6oQA.jpg',
                'item_id' => 15,
            ),
            36 => 
            array (
                'id' => 37,
                'source' => 'T3SV0rIC5dSgsYjmg5M8Idm52v9j7Pq9kD5crvWG.jpg',
                'item_id' => 16,
            ),
            37 => 
            array (
                'id' => 38,
                'source' => 'NwCSAjVUudVC2ZkRpc2vrWUbmEZjf8xirDQthPmB.jpg',
                'item_id' => 16,
            ),
            38 => 
            array (
                'id' => 39,
                'source' => 'WuBwzrBGKliFmP7QZgJHjsGXlErqQyLiQnVC9mgw.jpg',
                'item_id' => 16,
            ),
        ));
        
        
    }
}