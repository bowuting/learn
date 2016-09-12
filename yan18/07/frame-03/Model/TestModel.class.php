<?php
/****
燕十八 公益PHP讲堂

论  坛: http://www.zixue.it
微  博: http://weibo.com/Yshiba
YY频道: 88354001
****/


class TestModel extends Model {
    protected $table = 'test';
    
    public function reg($data) {
        return $this->db->autoExecute($this->table,$data,'insert');
    }


    // 取所有的数据
    public function select() {
        return $this->db->getAll('select * from ' . $this->table);
    }

}




