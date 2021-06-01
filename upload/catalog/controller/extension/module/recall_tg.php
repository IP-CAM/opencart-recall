<?php
class ControllerExtensionModuleRecallTg extends Controller {
    
    public function index() {
		$this->load->language('extension/module/recall_tg');
        return $this->load->view('extension/module/recall_tg');
    }
    
    public function send() {
        if (isset($this->request->server['HTTP_X_REQUESTED_WITH']) && !empty($this->request->server['HTTP_X_REQUESTED_WITH']) && strtolower($this->request->server['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
            
            $token = $this->config->get('module_callback_token');
            $chat_id = $this->config->get('module_callback_chat_id');

            $send_data = [
                'Телефон' => $this->request->post['phone'],
                'Страница запроса' => $this->request->post['route'],          
            ];
            $txt = '';
            foreach($send_data as $key => $value) {
                $txt .= "<b>".$key."</b> ".$value."%0A";
            };

            fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");
            return;
        }
    }
}
    