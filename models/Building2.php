<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "building2".
 *
 * @property int $id_building
 * @property string|null $bud_type ประเภทงบ 1; งบประมาณรายจ่าย 2;งบค่าเสื่อม
 * @property string|null $f_year ปีงบประมาณที่จะส่งคำขอ
 * @property string|null $d_type ประเภทหน่วยงาน ตาม สนย.
 * @property string|null $hmain โรงพยาบาลแม่ข่าย
 * @property string|null $hcode รหัสหน่วยงาน สนย.
 * @property string|null $hname ชื่อหน่วยงาน
 * @property string|null $amphur อำเภอ
 * @property string|null $tumbon ตำบล
 * @property int|null $rank_cup เรียงลำดับCUP
 * @property int|null $rank_sso เรียงลำดับที่ กลุ่มสสอ.
 * @property int|null $rank_hos เรียงลำดับที่ กลุ่ม ผอ.รพ.
 * @property int|null $rank_CR เรียงลำดับ กรรมการระดับจังหวัด
 * @property string|null $b_list รายการสิ่งก่อสร้าง
 * @property string|null $p_type ประเภทแบบแผน
 * @property string|null $p_no แบบเลขที่แบบ
 * @property string|null $u_price ราคาต่อหน่วย
 * @property string|null $unit_no จำนวนที่ต้องการ
 * @property string|null $budget งบประมาณที่ขอ
 * @property string|null $t_budget จำนวนเงินหลังการปัดเศษ
 * @property string|null $hos_lev ระดับสถานบริการ  service plan
 * @property string|null $t_build ประเภทคำขอ
 * @property string|null $reason เหตุผลความจำเป็น
 * @property string|null $l_time อายุการใช้งาน
 * @property string|null $pop ประชากรในพื้นที่
 * @property string|null $opd_visit opd_visit
 * @property string|null $active_bed active_bed
 * @property string|null $SUM_AdjRw SUM_AdjRw
 * @property string|null $EC หตุผลเปิดศูนย์ความเป็นเลิศทางการแพทย์
 * @property string|null $ES เพิ่มศักยภาพการให้บริการและขยายเตียง อธิบาย
 * @property string|null $PCC เป็นแม่ข่าย PCC หรือไม่
 * @property string|null $Famine ระดับความกันดาร
 * @property string|null $new_b กรณีขอใหม่ไม่เคยมีมาก่อนอธิบายเหตุผล
 * @property string|null $personels จำนวนบุคลากรที่ปฎิบัติงาน
 * @property string|null $d_update date()	วันที่ปรับปรุงข้อมูล
 */
class Building2 extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'building2';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rank_cup', 'rank_sso', 'rank_hos', 'rank_CR'], 'integer'],
            [['d_update'], 'safe'],
            [['bud_type', 'f_year', 'd_type', 'hmain', 'hcode', 'hname', 'p_type', 'p_no', 'u_price', 'unit_no', 'budget', 't_budget'], 'string', 'max' => 45],
            [['amphur', 'tumbon', 'hos_lev', 't_build', 'l_time', 'PCC', 'Famine', 'personels'], 'string', 'max' => 25],
            [['b_list', 'reason', 'EC', 'ES', 'new_b'], 'string', 'max' => 255],
            [['pop', 'opd_visit', 'active_bed', 'SUM_AdjRw'], 'string', 'max' => 50],
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
            'hmain' => 'โรงพยาบาลแม่ข่าย',
            'hcode' => 'รหัสหน่วยงาน สนย.',
            'hname' => 'ชื่อหน่วยงาน',
            'amphur' => 'อำเภอ',
            'tumbon' => 'ตำบล',
            'rank_cup' => 'เรียงลำดับCUP',
            'rank_sso' => 'เรียงลำดับที่ กลุ่มสสอ.',
            'rank_hos' => 'เรียงลำดับที่ กลุ่ม ผอ.รพ.',
            'rank_CR' => 'เรียงลำดับ กรรมการระดับจังหวัด',
            'b_list' => 'รายการสิ่งก่อสร้าง',
            'p_type' => 'ประเภทครุภัณฑ์',
            'p_no' => 'แบบเลขที่แบบ',
            'u_price' => 'ราคาต่อหน่วย',
            'unit_no' => 'จำนวนที่ต้องการ',
            'budget' => 'งบประมาณที่ขอ',
            't_budget' => 'จำนวนเงินหลังการปัดเศษ',
            'hos_lev' => 'ระดับสถานบริการ service plan',
            't_build' => 'ประเภทคำขอ',
            'reason' => 'เหตุผลความจำเป็น',
            'l_time' => 'อายุการใช้งาน',
            'pop' => 'ประชากรในพื้นที่',
            'opd_visit' => 'opd_visit',
            'active_bed' => 'active_bed',
            'SUM_AdjRw' => 'SUM_AdjRw',
            'EC' => 'กรณีเปิดศูนย์ความเป็นเลิศทางการแพทย์',
            'ES' => 'กรณีเพิ่มศักยภาพการให้บริการขยายบริการอธิบาย',
            'PCC' => 'เป็นแม่ข่าย PCC',
            'Famine' => 'ระดับความกันดาร',
            'new_b' => 'กรณีขอใหม่ไม่เคยมีมาก่อนอธิบายเหตุผล',
            'personels' => 'จำนวนบุคลากรที่ปฎิบัติงาน',
            'd_update' => 'วันนที่ปรับปรุงข้อมูล',
        ];
    }
    public function getChos(){
        return $this->hasone(CHos::className(), ['code5'=>'hcode']);
    }
    public function getCsp(){
        return $this->hasone(CSp::className(), ['code_sp'=>'hos_lev']);
    }
    public function getCbuild2(){
        return $this->hasone(CBuild2::className(), ['code_b'=>'b_type']);
    }
    public function getDist(){
        return $this->hasone(Districts::className(), ['DISTRICT_ID'=>'tumbon']);
    }
    public function getAmp(){
        return $this->hasone(Amphures::className(), ['AMPHUR_ID'=>'amphur']);
    }
}
