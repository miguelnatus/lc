<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contato extends CI_Controller{

    public function envio(){
		date_default_timezone_set('America/Sao_Paulo');

		$this->load->library('form_validation');
		$this->form_validation->set_rules('nome','Nome','required');
		$this->form_validation->set_rules('email','Email','required');
		$this->form_validation->set_rules('telefone','Telefone','required');
		$this->form_validation->set_rules('assunto','Assunto','required');
		$this->form_validation->set_rules('mensagem','Mensagem','required');
		$this->form_validation->set_error_delimiters("<span class='form-error'>","</span>");
		
		if ($this->form_validation->run() == TRUE) {
			
			$dados_form = $this->input->post();
			$html = '<p>'.$dados_form["mensagem"].'</p>
					 <p>Nome: '.$dados_form["nome"].'</p>
                     <p>Email: '.$dados_form["email"].'</p>
                     <p>Assunto: '.$dados_form["assunto"].'</p>
				     <p>Telefone: '.$dados_form["telefone"].'</p>';

			$config = Array(
			    'protocol' => 'smtp',
			    'smtp_host' => 'smtp.kinghost.net',
			    'smtp_port' => '587',
			    'smtp_user' => 'site@lcincorporacoes.com.br',
			    'smtp_pass' => 'maiL5c2i418',
			    'charset'   => 'utf-8',
			    'mailtype'  => 'html'
			);

			$this->email->initialize($config);
			$this->email->set_newline("\r\n"); 
			$this->email->from('site@lcincorporacoes.com.br', 'LC Incorporações');
			$this->email->to('lc@lcincorporacoes.com.br,leandro@lcincorporacoes.com.br,cassiana@construtoralc.com.br');
			$this->email->subject('Site');
			$this->email->message($html);

			if ($this->email->send()) {
				$this->session->set_flashdata('success','E-mail enviado com sucesso!');
				redirect("contato/#formulario");
			}else{
				echo $this->email->print_debugger();
			}

		}else{
			$data['title'] = "Contato";
			$data['file'] = "contato";
			$data["descricao"] = "Desde 2002 a LC Incorporações atua no mercado imobiliário nas áreas de incorporação e construção. São mais de 120 unidades residenciais e comerciais, totalizando mais de 20.000 m² construídos ao longo de 8 anos. Está sediada na cidade de Taquara, Rio Grande Sul, atuando na região do Paranhana, Serra e Litoral.";
			$data['imagem'] = base_url() . "imgs/empreendimentos/foto-gardens.jpg";

			$this->load->template("contato",$data);
		}
    }

}