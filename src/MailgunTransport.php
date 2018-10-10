<?php

namespace Wildside\MailgunEu;

use Illuminate\Mail\Transport\MailgunTransport as BaseMailgunTransport;

class MailgunTransport extends BaseMailgunTransport {

    /**
     * Set the domain being used by the transport.
     *
     * @param  string  $domain
     * @return string
     */
    public function setDomain($domain)
    {
        $this->url = $domain.'/messages.mime';

        return $this->domain = $domain;
    }
}
