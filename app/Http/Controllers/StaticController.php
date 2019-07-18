<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticController extends Controller
{

    public static function fakeArrayData()
    {
        $city = [
            'ເມືອງຈັນທະບູລີ',
            'ເມືອງສີໂຄດຕະບອງ',
            'ເມືອງໄຊເສດຖາ',
            'ເມືອງສີສະຕະນາກ',
            'ເມືອງນາຊາຍທອງ',
            'ເມືອງໄຊທານີ',
            'ເມືອງຫາດຊາຍຟອງ',
            'ເມືອງສັງທອງ',
            'ເມືອງປາກງື່ມ',
            'ເມືອງຜົ້ງສາລີ',
            'ເມືອງໃໝ່',
            'ເມືອງຂວາ',
            'ເມືອງສຳພັນ',
            'ເມືອງບູນເໜືອ',
            'ເມືອງຍອດອູ',
            'ເມືອງຫຼວງນ້ຳທາ',
            'ເມືອງສິງ',
            'ເມືອງລອງ',
            'ເມືອງວຽງພູຄາ',
            'ເມືອງນາແລ',
            'ເມືອງບູນໃຕ້',
            'ເມືອງໄຊ',
            'ເມືອງຫລາ',
            'ເມືອງນາໝໍ້',
            'ເມືອງງາ',
            'ເມືອງແບງ',
            'ເມືອງຮູນ',
            'ເມືອງປາກແບ່ງ',
            'ເມືອງຫ້ວຍຊາຍ',
            'ເມືອງຕົ້ນເຜີ້ງ',
            'ເມືອງເມິງ',
            'ເມືອງຜາອຸດົມ',
            'ເມືອງປາກທາ'
        ];

        $province = [
            'ຜົ້ງສາລີ',
            'ຫຼວງນໍ້າທາ',
            'ຫົວພັນ',
            'ບໍ່ແກ້ວ',
            'ອຸດົມໄຊ',
            'ໄຊຍະບູລີ',
            'ຊຽງຂວາງ',
            'ຫຼວງພະບາງ',
            'ແຂວງວຽງຈັນ',
            'ນະຄອນຫຼວງວຽງຈັນ',
            'ບໍລິຄຳໄຊ',
            'ຄຳມ່ວນ',
            'ສະຫວັນນະເຂດ',
            'ສາລະວັນ',
            'ເຊກອງ',
            'ອັດຕະປື',
            'ແຂວງຈຳປາສັກ',
            'ແຂວງໄຊສົມບູນ',
        ];

        $viilage = [
            'ບ້ານ ໂພນໄຊ',
            'ບ້ານ ຫັດສະດີ',
            'ບ້ານ ຫັດສະດີ',
            'ບ້ານ ໂພນທັນ',
            'ບ້ານ ສາຍລົມ',
            'ບ້ານ ສີໄຄ',
            'ບ້ານ ຈອມມະນີ',
            'ບ້ານ ຈອມເພັດ',
            'ບ້ານ ຄຳຮຸ່ງ',
            'ບ້ານ ທ່ານາແລ້ງ',
            'ບ້ານ ດອນໜູນ',
            'ບ້ານ ສີຖານີ',
            'ບ້ານ ຊຽງຍືນ',
            'ບ້ານ ຮ່ອງແກ',
            'ບ້ານ ສະພັງເມິກ',
            'ບ້ານ ສີຖານີ',
            'ບ້ານ ວັດຈັນ',
            'ບ້ານ ໂພນປ່າເປົ້າ',
            'ໂຮງກາຍຍາສີນ',
            'ບ້ານ ໂພນທັນ',
            'ບ້ານ ໜອງແຮ້ວ',
            'ບ້ານ ສາຍລົມ',
            'ບ້ານ ໜອງທາ',
            'ບ້ານ ຫາດຊາຍຂາວ',
            'ບ້ານ ນາຄຳ',
        ];


        $imgFood = [
            'http://www.tourismlaos.org/files/images/Laofood-Khaipen.JPG',
            'http://www.tourismlaos.org/files/images/Laofood-Khaopiaksen.jpg',
            'http://www.tourismlaos.org/files/images/Laofood-Khaopoon.JPG',
            'http://www.tourismlaos.org/files/images/Laofood-Khaopoonnamjeow.jpg',
            'http://www.tourismlaos.org/files/images/Laofood-Khaopoonnamsin.jpg',
            'http://www.tourismlaos.org/files/images/Laofood-Laosausage.JPG',
            'http://www.tourismlaos.org/files/images/Laofood-Noodlesoup.JPG',
            'http://www.tourismlaos.org/files/images/Laofood-Orlam.JPG',
            'http://www.tourismlaos.org/files/images/Laofood-Sinhsavanh.jpg',
            'http://www.tourismlaos.org/files/images/Laofood-Sommoo.jpg',
            'http://www.tourismlaos.org/files/images/Laofood-Khao%20Jee%20Sandwich.JPG',
            'https://img.theculturetrip.com/1024x/wp-content/uploads/2018/01/tuna-salad-2098253_1280.jpg',
            'https://cdn.vox-cdn.com/thumbor/aSgtriNKhNjjptpTz1Hm_BPJi-Y=/0x0:2976x2232/1200x0/filters:focal(0x0:2976x2232):no_upscale()/cdn.vox-cdn.com/uploads/chorus_asset/file/13111127/Kop_Jai_Lai_Lao_Sausage.jpg',
            'https://heyraahi.com/wp-content/uploads/2018/12/A2H-19.jpg',
            'https://www.storynosh.com/wp-content/uploads/2018/11/IMG_0031_2-760x490.jpg',
            'https://img.apmcdn.org/5c763969342a3bc590cb2ceb5ef6be89d38f6d61/uncropped/c74677-20170308-appetites.jpg',
            'http://smilepolitely.com/?ACT=33&f=img-2619.jpg&fid=33&d=20815&',
            'https://www.activetravel.asia/images/sien-savanh-lao-beef-jerky-laos-food.jpg',
            'https://livingnomads.com/wp-content/uploads/2016/03/khao-jee-baguettes-lao-food.jpg',
            'https://www.seriouseats.com/2018/05/20180503-Guide-to-Lao-Food-Tam-Muk-Muang-Jai-Williams.jpg',
            'https://www.travellaosonline.com/wp-content/uploads/2014/09/The-pork-Larb-along.jpg',
        ];


        $userimg = [
            'http://www.venmond.com/demo/vendroid/img/avatar/big.jpg',
        ];


        $data = [];
        for ($i = 0; $i <= 35; $i++) {
            $data[] = [
                'id' => $i,
                'imgProfile'=>$userimg[array_rand($userimg, 1)],
                'resName' => 'Soukjai',
                'uploadTime' => strtotime('now'),
                'uploadTimeStamp' => strtotime('now') - mt_rand(1000, 9000),
                'img' => $imgFood[array_rand($imgFood, 1)],
                'lovePoint' => mt_rand(0, 1020),
                'address' => [
                    'city' => $city[array_rand($city, 1)],
                    'province' => $province[array_rand($province, 1)],
                    'village' => $viilage[array_rand($viilage, 1)],
                ],

            ];
        }
        return $data;
    }
}
