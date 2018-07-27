<?php

namespace Wildside\MailgunEu;

use Illuminate\Mail\TransportManager as BaseTransportManager;
use Wildside\MailgunEu\MailgunTransport;

class TransportManager extends BaseTransportManager {

    /**
     * Create an instance of the Mailgun Swift Transport driver.
     *
     * @return \Wildside\MailgunEu\MailgunTransport
     */
    protected function createMailgunDriver()
    {
        $config = $this->app['config']->get('services.mailgun', []);

        return new MailgunTransport(
            $this->guzzle($config),
            $config['secret'], $config['domain']
        );
    }
}
