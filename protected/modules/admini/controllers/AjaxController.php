<?php
/**
 * 后台公共AJAX
 *
 * @author        shuguang <5565907@qq.com>
 * @copyright     Copyright (c) 2007-2013 bagesoft. All rights reserved.
 * @link          http://www.bagecms.com
 * @package       BageCMS.admini.Controller
 * @license       http://www.bagecms.com/license
 * @version       v3.1.0
 */

class AjaxController extends XAdminiBase{

	/**
	 * 属性内容
	 *
	 * @return [type] [description]
	 */
	public function actionAttr2content() {
		$catalog = intval( $this->_gets->getPost( 'catalog' ) );
		$attrModel = Attr::model()->findAll( array( 'condition'=>'scope=:scope AND catalog_id=:catalogId', 'params'=>array( 'scope'=>'post', ':catalogId'=>$catalog ) ) );

		if ( $attrModel ) {
			$var['state'] = 'success';
			$var['message'] = '找到属性';
			$var['text'] = $this->renderPartial( '/_include/attr2content', array( 'attrModel'=>$attrModel ), true );
		}else {
			$var['state'] = 'error';
			$var['message'] = '没有属性';
		}
		exit( CJSON::encode( $var ) );
	}

	/**
	 * 测试邮件发送
	 */
	public function actionMailTest() {

		$data = $this->_gets->getParam( 'Config' );
		try {
			$var['state'] = 'success';
			$var['message'] = '发送成功';
			XMail::send();
			var_dump($data);
		} catch ( Exception $e ) {
			$var['state'] = 'error';
			$var['message'] = '错误：'. $e->getMessage();
		}
		exit( CJSON::encode( $var ) );
	}

	/**
	 * 获取专题
	 */
	public function actionGetSpecial() {
		$catalog_id = intval( $this->_gets->getPost( 'catalog_id' ) );
		$special = Special::model()->findAll( array( 'select'=>array('id','title'), 'condition'=>'catalog_id=:catalog_id', 'params'=>array( ':catalog_id'=>$catalog_id ) ) );
		$options = '';
		if ( !empty($special) ) {
			foreach($special as $val){
				$options .= "<option value='{$val['id']}'>{$val['title']}</option>";
			}
		}
		echo $options;
	}

	/**
	 * 获取地区
	 */
	public function actionGetDistrict() {
		$city_id = intval( $this->_gets->getPost( 'city_id' ) );
		$district = District::model()->findAll( array( 'select'=>array('id','name'), 'condition'=>'city_id=:city_id', 'params'=>array( ':city_id'=>$city_id ) ) );
		$options = '';
		if ( !empty($district) ) {
			foreach($district as $val){
				$options .= "<option value='{$val['id']}'>{$val['name']}</option>";
			}
		}
		echo $options;
	}
}
