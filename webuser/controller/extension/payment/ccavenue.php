<?php
//lib
require_once(DIR_SYSTEM.'library/tmd/system.php');
//lib
class ControllerExtensionPaymentccavenue extends Controller {
	private $error = array();

	public function index() {
		$this->registry->set('tmd', new TMD($this->registry));
		$keydata=array(
		'code'=>'tmdkey_ccavenue',
		'eid'=>'MTk2MTM=',
		'route'=>'extension/payment/ccavenue',
		);
		$ccavenue=$this->tmd->getkey($keydata['code']);
		$data['getkeyform']=$this->tmd->loadkeyform($keydata);
		
		$this->load->language('extension/payment/ccavenue');

		$this->document->setTitle($this->language->get('heading_title1'));

		$this->load->model('setting/setting');

		if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) {
			$this->request->post['ccavenue_action']='https://secure.ccavenue.com/transaction/transaction.do?command=initiateTransaction';
			$this->model_setting_setting->editSetting('payment_ccavenue', $this->request->post);

			$this->session->data['success'] = $this->language->get('text_success');

			$this->response->redirect($this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		}

		$data['heading_title'] = $this->language->get('heading_title');

		$data['text_enabled'] = $this->language->get('text_enabled');
		$data['text_disabled'] = $this->language->get('text_disabled');
		$data['text_all_zones'] = $this->language->get('text_all_zones');
		$data['text_yes'] = $this->language->get('text_yes');
		$data['text_no'] = $this->language->get('text_no');
		$data['text_redirect'] = $this->language->get('text_redirect');
		$data['text_iframe'] = $this->language->get('text_iframe');
		$data['text_edit'] = $this->language->get('text_edit');
	
	
		$data['entry_Merchant_Id'] = $this->language->get('entry_Merchant_Id');
		$data['entry_action'] = $this->language->get('entry_action');
		$data['entry_total'] = $this->language->get('entry_total');
		$data['entry_workingkey'] = $this->language->get('entry_workingkey');
		$data['entry_access_code'] = $this->language->get('entry_access_code');
		$data['entry_completed_status'] = $this->language->get('entry_completed_status');
		$data['entry_failed_status'] = $this->language->get('entry_failed_status');
		$data['entry_pending_status'] = $this->language->get('entry_pending_status');
		$data['entry_geo_zone'] = $this->language->get('entry_geo_zone');
		$data['entry_status'] = $this->language->get('entry_status');
		$data['entry_sort_order'] = $this->language->get('entry_sort_order');
		$data['entry_checkout_method'] = $this->language->get('entry_checkout_method');
		
		$data['help_checkout_method'] = $this->language->get('help_checkout_method');
		$data['help_workingkey'] = $this->language->get('help_workingkey');
		$data['help_total'] = $this->language->get('help_total');

		$data['button_save'] = $this->language->get('button_save');
		$data['button_cancel'] = $this->language->get('button_cancel');

 		if (isset($this->session->data['warning'])) {
			$data['error_warning'] = $this->session->data['warning'];
		
			unset($this->session->data['warning']);
		} else {
			$data['error_warning'] = '';
		}

 		if (isset($this->error['Merchant_Id'])) {
			$data['error_Merchant_Id'] = $this->error['Merchant_Id'];
		} else {
			$data['error_Merchant_Id'] = '';
		}
		if (isset($this->error['access_code'])) {
			$data['error_access_code'] = $this->error['access_code'];
		} else {
			$data['error_access_code'] = '';
		}
		if (isset($this->error['total'])) {
			$data['error_total'] = $this->error['total'];
		} else {
			$data['error_total'] = '';
		}
		if (isset($this->error['workingkey'])) {
			$data['error_workingkey'] = $this->error['workingkey'];
		} else {
			$data['error_workingkey'] = '';
		}


		$data['breadcrumbs'] = array();

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_home'),
			'href' => $this->url->link('common/dashboard', 'user_token=' . $this->session->data['user_token'], true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('text_extension'),
			'href' => $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true)
   		);

   		$data['breadcrumbs'][] = array(
       		'text'      => $this->language->get('heading_title'),
			'href' => $this->url->link('extension/payment/worldpay', 'user_token=' . $this->session->data['user_token'], true)
   		);

		$data['action'] = $this->url->link('extension/payment/ccavenue', 'user_token=' . $this->session->data['user_token'], true);

		$data['cancel'] = $this->url->link('marketplace/extension', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true);

		if (isset($this->request->post['payment_ccavenue_Merchant_Id'])) {
			$data['payment_ccavenue_Merchant_Id'] = $this->request->post['payment_ccavenue_Merchant_Id'];
		} else {
			$data['payment_ccavenue_Merchant_Id'] = $this->config->get('payment_ccavenue_Merchant_Id');
		}

			
		if (isset($this->request->post['payment_ccavenue_total'])) {
			$data['payment_ccavenue_total'] = $this->request->post['payment_ccavenue_total'];
		} else {
			$data['payment_ccavenue_total'] = $this->config->get('payment_ccavenue_total'); 
		} 
	
		if (isset($this->request->post['payment_ccavenue_action'])) {
			$data['payment_ccavenue_action'] = $this->request->post['payment_ccavenue_action'];
		} else {
			$data['payment_ccavenue_action'] = $this->config->get('payment_ccavenue_action'); 
		} 
		if (isset($this->request->post['payment_ccavenue_access_code'])) {
			$data['payment_ccavenue_access_code'] = $this->request->post['payment_ccavenue_access_code'];
		} else {
			$data['payment_ccavenue_access_code'] = $this->config->get('payment_ccavenue_access_code'); 
		} 
		
		if (isset($this->request->post['payment_ccavenue_workingkey'])) {
			$data['payment_ccavenue_workingkey'] = $this->request->post['payment_ccavenue_workingkey'];
		} else {
			$data['payment_ccavenue_workingkey'] = $this->config->get('payment_ccavenue_workingkey'); 
		} 

		
		if (isset($this->request->post['payment_ccavenue_completed_status_id'])) {
			$data['payment_ccavenue_completed_status_id'] = $this->request->post['payment_ccavenue_completed_status_id'];
		} else {
			$data['payment_ccavenue_completed_status_id'] = $this->config->get('payment_ccavenue_completed_status_id');
		}	
		
			
		if (isset($this->request->post['payment_ccavenue_failed_status_id'])) {
			$data['payment_ccavenue_failed_status_id'] = $this->request->post['payment_ccavenue_failed_status_id'];
		} else {
			$data['payment_ccavenue_failed_status_id'] = $this->config->get('payment_ccavenue_failed_status_id');
		}	
								
		if (isset($this->request->post['payment_ccavenue_pending_status_id'])) {
			$data['payment_ccavenue_pending_status_id'] = $this->request->post['payment_ccavenue_pending_status_id'];
		} else {
			$data['payment_ccavenue_pending_status_id'] = $this->config->get('payment_ccavenue_pending_status_id');
		}
									
		

		if (isset($this->request->post['payment_ccavenue_voided_status_id'])) {
			$data['payment_ccavenue_voided_status_id'] = $this->request->post['payment_ccavenue_voided_status_id'];
		} else {
			$data['payment_ccavenue_voided_status_id'] = $this->config->get('payment_ccavenue_voided_status_id');
		}

		$this->load->model('localisation/order_status');

		$data['order_statuses'] = $this->model_localisation_order_status->getOrderStatuses();

		if (isset($this->request->post['payment_ccavenue_geo_zone_id'])) {
			$data['payment_ccavenue_geo_zone_id'] = $this->request->post['payment_ccavenue_geo_zone_id'];
		} else {
			$data['payment_ccavenue_geo_zone_id'] = $this->config->get('payment_ccavenue_geo_zone_id');
		}

		$this->load->model('localisation/geo_zone');

		$data['geo_zones'] = $this->model_localisation_geo_zone->getGeoZones();

		if (isset($this->request->post['payment_ccavenue_checkout_method'])) {
			$data['payment_ccavenue_checkout_method'] = $this->request->post['payment_ccavenue_checkout_method'];
		} else {
			$data['payment_ccavenue_checkout_method'] = $this->config->get('payment_ccavenue_checkout_method');
		}
		
		if (isset($this->request->post['payment_ccavenue_status'])) {
			$data['payment_ccavenue_status'] = $this->request->post['payment_ccavenue_status'];
		} else {
			$data['payment_ccavenue_status'] = $this->config->get('payment_ccavenue_status');
		}
		
		if (isset($this->request->post['payment_ccavenue_sort_order'])) {
			$data['payment_ccavenue_sort_order'] = $this->request->post['payment_ccavenue_sort_order'];
		} else {
			$data['payment_ccavenue_sort_order'] = $this->config->get('payment_ccavenue_sort_order');
		}

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');
		
		$this->response->setOutput($this->load->view('extension/payment/ccavenue', $data));
	}

	private function validate() {
		if (!$this->user->hasPermission('modify', 'extension/payment/ccavenue')) {
			$this->error['warning'] = $this->language->get('error_permission');
		}
		
		$ccavenue=$this->config->get('tmdkey_ccavenue');
		// if (empty(trim($ccavenue))) {			
		// $this->session->data['warning'] ='Module will Work after add License key!';
		// $this->response->redirect($this->url->link('extension/payment/ccavenue', 'user_token=' . $this->session->data['user_token'] . '&type=payment', true));
		// }

		if (!isset($this->request->post['payment_ccavenue_Merchant_Id'])) {
			$this->error['Merchant_Id'] = $this->language->get('error_Merchant_Id');
		}
		if (!isset($this->request->post['payment_ccavenue_Merchant_Id'])) {
			$this->error['Merchant_Id'] = $this->language->get('error_Merchant_Id');
		}
		if (!isset($this->request->post['payment_ccavenue_total'])) {
			$this->error['total'] = $this->language->get('error_total');
		}		
		if (!isset($this->request->post['payment_ccavenue_access_code'])) {
			$this->error['access_code'] = $this->language->get('error_access_code');
		}
		if (!isset($this->request->post['payment_ccavenue_workingkey'])) {
			$this->error['workingkey'] = $this->language->get('error_workingkey');
		}

		return !$this->error;
	}
	
	public function keysubmit() {
		$json = array(); 
		
      	if (($this->request->server['REQUEST_METHOD'] == 'POST')) {
			$keydata=array(
			'code'=>'tmdkey_ccavenue',
			'eid'=>'MTk2MTM=',
			'route'=>'extension/payment/ccavenue',
			'moduledata_key'=>$this->request->post['moduledata_key'],
			);
			$this->registry->set('tmd', new TMD($this->registry));
            $json=$this->tmd->matchkey($keydata);       
		} 
		
		$this->response->addHeader('Content-Type: application/json');
		$this->response->setOutput(json_encode($json));
	}
}
?>