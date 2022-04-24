<?php

namespace Systems\CustomClass;
//use Systems\CustomClass;
use Illuminate\Database\Eloquent\Model;
use Cyberduck\LaravelExcel\Contract\SerialiserInterface;
use Systems\Applicant;

class ApplicantSerializer implements SerialiserInterface
{

    public function getData($data)
    {
//         TODO: Implement getData() method.
        $row = [];
        $row[0]  = $data->first_name;
        $row[1]  = $data->second_name;
        $row[2]  = $data->third_name;
        $row[3]  = $data->last_name;
        $row[4]  = $data->qualification;
        $row[5]  = $data->birth_date;
        $row[6]  = $data->card_no;
        $row[7]  = $data->card_source;
        $row[8]  = $data->mobile;
        $row[9]  = $data->home;
        $row[10] = $data->english;
        $row[11] = $data->computer;
        $row[12] = $data->work;
        $row[13] = $data->sex;
        $row[14] = $data->course_id;
        return $row;
    }

    public function getHeaderRow()
    {
        // TODO: Implement getHeaderRow() method.
        return[
            'الإسم الأول',
            'الإسم الثاني',
            'الإسم الثالث',
            'اللقب',
            'المؤهل',
            'تاريخ الميلاد',
            'رقم البطاقة',
            'محل الإصدار',
            'رقم الجوال',
            'رقم المنزل',
            'استخدام الكمبيوتر',
            'اللغة الإنجليزية',
            'الوظيفه',
            'الجنس',
            'الدورة المراد التسجيل فيها',


            ];
    }


}
