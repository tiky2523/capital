<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "building".
 *
 * @property int $id_building
 * @property string|null $bud_type Budget type	ประเภทงบ 1; งบประมาณรายจ่าย 2;งบค่าเสื่อม
 * @property string|null $f_year fiscal_year	ปีงบประมาณที่จะส่งคำขอ
 * @property string|null $d_type department_type	ประเภทหน่วยงาน ตาม สนย.
 * @property string|null $hcode hospital_code	รหัสหน่วยงาน สนย.
 * @property string|null $hname hospital_name	ชื่อหน่วยงาน
 * @property int|null $rank_cup rank_cup	เรียงลำดับที่ CUP
 * @property int|null $rank_sso rank_sso	เรียงลำดับที่ กลุ่มสสอ.
 * @property int|null $rank_hos rank_hos	เรียงลำดับที่ กลุ่ม ผอ.รพ.
 * @property int|null $rank_CR rank_CR	เรียงลำดับ กรรมการระดับจังหวัด
 * @property string|null $b_list building_list	รายการสิ่งก่อสร้าง
 * @property string|null $b_type building_type	ประเภทอาคารสิ่งก่อสร้าง ตามโปรแกรมคำขอ
 * @property string|null $p_type plan_type	ประเภทแบบแผน 1; ออกแบบเอง, 2: ใช้แบบมาตรฐาน
 * @property string|null $p_no plan_number	แบบเลขที่แบบ
 * @property string|null $u_price Unit price	ราคาต่อหน่วย
 * @property string|null $unit_no unit	จำนวนที่ต้องการ
 * @property string|null $b_binding1 Budget binding1	งบผูกพันปีที่เสนอ
 * @property string|null $b_binding2 Budget binding2	งบผูกพันปีหน้าต่อจากปีที่เสนอขอ
 * @property string|null $b_binding3 Budget binding3	งบผูกพันต่อจากปีที่เสนอ 2 ปี
 * @property string|null $t_budget total_budget	จำนวนเงินหลังการปัดเศษ
 * @property string|null $b_locate building_location	สถานที่ก่อสร้าง
 * @property string|null $amphur amphur	อำเภอ
 * @property string|null $tumbon tumbon	ตำบล
 * @property string|null $hos_lev hos_level	ระดับสถานบริการ ตาม service plan
 * @property string|null $t_build
 * @property string|null $reason resonal	เหตุผลความจำเป็น
 * @property string|null $l_time Lifetime	อายุการใช้งาน
 * @property string|null $pop population	ประชากรในพื้นที่
 * @property string|null $opd_visit opd_visit	บริการผู้ป่วยนอก
 * @property string|null $active_bed active_bed	เตียงรับผู้ป่วยในโรงพยาบาล คำานวณจากจำานวน วันนอนผู้ป่วยในหารด้วย 365 วัน
 * @property string|null $SUM_AdjRw SUM_AdjRw	ผลรวม adjRW
 * @property string|null $EC Excellence Center	อธิบายเหตุผลความจำเป็น
 * @property string|null $ES Extend service	เพิ่มศักยภาพการให้บริการและขยายเตียง อธิบาย
 * @property string|null $PCC PCC	เป็นแม่ข่าย PCC หรือไม่ 1;เป็น, 0;ไม่เป็น
 * @property string|null $Famine Famine	ระดับความกันดาร
 * @property string|null $new_b new building	กรณีสร้างใหม่ไม่เคยมีมาก่อนอธิบายเหตุผล
 * @property string|null $personels manpower	จำนวนบุคลากรที่ปฎิบัติงาน
 * @property string|null $d_update date()	วันที่ปรับปรุงข้อมูล
 */
class Building extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'building';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rank_cup', 'rank_sso', 'rank_hos', 'rank_CR'], 'integer'],
            [['d_update'], 'safe'],
            [['bud_type', 'unit_no', 'hos_lev', 't_build', 'l_time', 'PCC', 'Famine', 'personels'], 'string', 'max' => 4],
            [['f_year', 'd_type', 'hcode', 'hname', 'b_type', 'p_type', 'p_no', 'u_price'], 'string', 'max' => 45],
            [['b_list', 'reason', 'EC', 'ES', 'new_b'], 'string', 'max' => 255],
            [['b_binding1', 'b_binding2', 'b_binding3', 't_budget'], 'string', 'max' => 20],
            [['b_locate', 'amphur', 'tumbon'], 'string', 'max' => 25],
            [['pop', 'opd_visit', 'active_bed', 'SUM_AdjRw'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_building' => 'Id Building',
            'bud_type' => 'ประเภทงบ',
            'f_year' => 'ปีงบประมาณที่จะส่งคำขอ',
            'd_type' => 'ประเภทหน่วยงาน ตาม สนย.',
            'hcode' => 'รหัสหน่วยงาน สนย.',
            'hname' => 'ชื่อหน่วยงาน',
            'rank_cup' => 'เรียงลำดับที่ CUP',
            'rank_sso' => 'เรียงลำดับที่ กลุ่มสสอ.',
            'rank_hos' => 'เรียงลำดับที่ กลุ่ม ผอ.รพ.',
            'rank_CR' => 'เรียงลำดับ กรรมการระดับจังหวัด',
            'b_list' => 'รายการสิ่งก่อสร้าง',
            'b_type' => 'ประเภทอาคารสิ่งก่อสร้าง',
            'p_type' => 'ประเภทแบบแผน',
            'p_no' => 'แบบเลขที่แบบ',
            'u_price' => 'ราคาต่อหน่วย',
            'unit_no' => 'จำนวนที่ต้องการ',
            'b_binding1' => 'งบผูกพันปีที่เสนอ',
            'b_binding2' => 'งบผูกพันปีต่อจากปีเสนอ 1 ปี',
            'b_binding3' => 'งบผูกพันต่อจากปีที่เสนอ 2 ปี',
            't_budget' => 'จำนวนเงินหลังการปัดเศษ',
            'b_locate' => 'สถานที่ก่อสร้าง',
            'amphur' => 'อำเภอ',
            'tumbon' => 'ตำบล',
            'hos_lev' => 'ระดับสถานบริการ ตาม service plan',
            't_build' => 'ประเภทคำขอ',
            'reason' => 'เหตุผลความจำเป็น',
            'l_time' => 'อายุการใช้งาน',
            'pop' => 'ประชากรในพื้นที่',
            'opd_visit' => 'opd_visit',
            'active_bed' => 'active_bed',
            'SUM_AdjRw' => 'SUM_AdjRw',
            'EC' => 'Excellence Centerอธิบายเหตุผล',
            'ES' => 'เพิ่มศักยภาพการบริการและขยายเตียงอธิบาย',
            'PCC' => 'เป็นแม่ข่าย PCC ',
            'Famine' => 'ระดับความกันดาร',
            'new_b' => 'กรณีสร้างใหม่ไม่เคยมีมาก่อนอธิบายเหตุผล',
            'personels' => 'จำนวนบุคลากรที่ปฎิบัติงาน',
            'd_update' => 'วันที่ปรับปรุงข้อมูล',
        ];
    }
}
