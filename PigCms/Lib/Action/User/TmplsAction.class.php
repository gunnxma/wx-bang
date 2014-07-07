<?php

/**
 * 通用模板管理
 * */
class TmplsAction extends UserAction {

    public function index() {
        $db = D('Wxuser');
        $where['token'] = session('token');
        $where['uid'] = session('uid');
        $info = $db->where($where)->find();
        $this->assign('info', $info);
        $this->display();
    }

    public function add() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tpltypeid'] = 1;
                $data['tpltypename'] = '101_index';
                break;
            case 2:
                $data['tpltypeid'] = 2;
                $data['tpltypename'] = '102_index';
                break;
            case 3:
                $data['tpltypeid'] = 3;
                $data['tpltypename'] = '103_index';
                break;
            case 4:
                $data['tpltypeid'] = 4;
                $data['tpltypename'] = '104_index';
                break;
            case 5:
                $data['tpltypeid'] = 5;
                $data['tpltypename'] = '105_index';
                break;
            case 6:
                $data['tpltypeid'] = 6;
                $data['tpltypename'] = '106_index_ydkds';
                break;
            case 7:
                $data['tpltypeid'] = 7;
                $data['tpltypename'] = '107_index_2d8si';
                break;
            case 8:
                $data['tpltypeid'] = 8;
                $data['tpltypename'] = '108_index_giw93x';
                break;
            case 9:
                $data['tpltypeid'] = 9;
                $data['tpltypename'] = '109_index_0fdis';
                break;
            case 10:
                $data['tpltypeid'] = 10;
                $data['tpltypename'] = '110_index_2skz7';
                break;
            case 11:
                $data['tpltypeid'] = 11;
                $data['tpltypename'] = '111_index_78yus';
                break;
            case 12:
                $data['tpltypeid'] = 12;
                $data['tpltypename'] = '112_index_kj7y5';
                break;
            case 13:
                $data['tpltypeid'] = 13;
                $data['tpltypename'] = '113_index_jks6z';
                break;
            case 14:
                $data['tpltypeid'] = 14;
                $data['tpltypename'] = '114_index_mnsz6';
                break;
			case 15:
                $data['tpltypeid'] = 15;
                $data['tpltypename'] = '115_index_ms76x';
                break;
            case 151:
                $data['tpltypeid']=151;
                $data['tpltypename']='tpl_151_index';
                break;
            case 152:
                $data['tpltypeid']=152;
                $data['tpltypename']='tpl_152_index';
                break;
            case 153:
                $data['tpltypeid']=153;
                $data['tpltypename']='tpl_153_index';
                break;
            case 154:
                $data['tpltypeid']=154;
                $data['tpltypename']='tpl_154_index';
                break;
            case 157:
                $data['tpltypeid']=157;
                $data['tpltypename']='tpl_157_index';
                break;
            case 158:
                $data['tpltypeid']=158;
                $data['tpltypename']='tpl_158_index';
                break;
            case 160:
                $data['tpltypeid']=160;
                $data['tpltypename']='tpl_160_index';
                break;
            case 161:
                $data['tpltypeid']=161;
                $data['tpltypename']='tpl_161_index';
                break;
            case 162:
                $data['tpltypeid']=162;
                $data['tpltypename']='tpl_162_index';
                break;
            case 163:
                $data['tpltypeid']=163;
                $data['tpltypename']='tpl_163_index';
                break;
            case 166:
                $data['tpltypeid']=166;
                $data['tpltypename']='tpl_166_index';
                break;
            case 167:
                $data['tpltypeid']=167;
                $data['tpltypename']='tpl_167_index';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
        //
        M('Home')->where(array('token'=>session('token')))->save(array('advancetpl'=>0));
    }

    public function lists() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 4:
                $data['tpllistid'] = 4;
                $data['tpllistname'] = 'ktv_list';
                break;
            case 1:
                $data['tpllistid'] = 1;
                $data['tpllistname'] = 'yl_list';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function content() {
        $gets = $this->_get('style');
        $db = M('Wxuser');
        switch ($gets) {
            case 1:
                $data['tplcontentid'] = 1;
                $data['tplcontentname'] = 'yl_content';
                break;
            case 3:
                $data['tplcontentid'] = 3;
                $data['tplcontentname'] = 'ktv_content';
                break;
        }
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }
    
    public function background() {
        $data['color_id'] = $this->_get('style');
        $db = M('Wxuser');
        $where['token'] = session('token');
        $db->where($where)->save($data);
    }

    public function insert() {
        
    }

    public function upsave() {
	
    }

}

?>