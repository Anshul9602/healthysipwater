<?php
class ControllerInformationIonizer extends Controller {
	public function index() {

		$this->load->language('information/contact');

		$this->document->setTitle('Water ionizer');

		$data['breadcrumbs'] = array();

		$data['breadcrumbs'][] = array(
			'text' => $this->language->get('text_home'),
			'href' => $this->url->link('common/home')
		);

		$data['breadcrumbs'][] = array(
			'text' => 'Water Ionizer',
			'href' => $this->url->link('information/ionizer')
		);

		$data['heading_title'] = $this->language->get('Water Ionizer');




		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('information/ionizer', $data));
	}



}