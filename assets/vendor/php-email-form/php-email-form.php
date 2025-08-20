<?php

class PHP_Email_Form {
    public $ajax = false;
    public $to;
    public $from_name;
    public $from_email;
    public $subject;
    public $smtp = [];
    private $messages = [];

    public function add_message($content, $label = '', $length = 0) {
        $this->messages[] = [$label, $content];
    }

    public function send() {
        // Simulasi pengiriman email
        $output = "Pesan berhasil dikirim ke: {$this->to}\n";
        foreach ($this->messages as $msg) {
            $output .= "{$msg[0]}: {$msg[1]}\n";
        }
        return nl2br($output);
    }
}