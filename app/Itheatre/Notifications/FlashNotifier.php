<?php namespace App\Itheatre\Notifications;

use Illuminate\Session\Store;

class FlashNotifier {

    /**
     * @var \Illuminate\Session\Store
     */
    private $session;

    function __construct(Store $session)
    {
        $this->session = $session;
    }

    public function message($message, $level = 'info') {
        $this->session->flash('flash_notification.message', $message);
        $this->session->flash('flash_notification.level', $level);
    }

    public function success($message) {
        $this->message($message, 'success');
    }

    public function danger($message) {
        $this->message($message, 'danger');
    }

    public function overlay($message) {
        $this->mesage($message);
        $this->session->flash('flash_notification.overlay', true);
    }
}