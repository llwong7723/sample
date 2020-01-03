<?php
class ControllerCommonHome extends Controller {
	public function index() {
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}

		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$deviceType = $this->checkDevice();

		if($deviceType == 0) {
			$this->response->setOutput($this->load->view('common/home', $data));
		} elseif($deviceType == 1) {
			$this->response->setOutput($this->load->view('common/m_home', $data));
		} else {
			$this->response->setOutput($this->load->view('common/t_home', $data));
		}

	}

	private function checkDevice() {
	// checkDevice() : checks if user device is phone, tablet, or desktop
	// RETURNS 0 for desktop, 1 for mobile, 2 for tablets

		if (is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "mobile"))) {
			return is_numeric(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), "tablet")) ? 2 : 1 ;
		} else {
			return 0;
		}
	}
}
