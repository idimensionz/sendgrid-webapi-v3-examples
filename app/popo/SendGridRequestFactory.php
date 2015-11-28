<?php
/*
 * iDimensionz/{sendgrid-webapi-v3-examples}
 * SendGridRequestFactory.php
 *  
 * The MIT License (MIT)
 * 
 * Copyright (c) 2015 iDimensionz
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 * 
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 * 
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
*/

namespace popo;

use iDimensionz\SendGridWebApiV3\Guzzle\AuthenticationOptionSetter;
use iDimensionz\SendGridWebApiV3\Authentication\AuthenticationApiKey;
use iDimensionz\SendGridWebApiV3\Guzzle\HttpClient;
use iDimensionz\SendGridWebApiV3\SendGridRequest;

class SendGridRequestFactory
{
    /**
     * @param string $apiKey
     * @return SendGridRequest
     */
    public static function getSendGridRequest($apiKey = '')
    {
        // Instantiate an authentication class (with an OptionSetter class for a Guzzle HTTP client)
        $authenticationOptionSetter = new AuthenticationOptionSetter();
        $authentication = new AuthenticationApiKey($authenticationOptionSetter, $apiKey);
        // Instantiate an HTTP client (we use a Guzzle HTTP client here)
        $httpClient = new HttpClient(['base_url' => 'https://api.sendgrid.com/v3/']);
        // Instantiate a SendGrid request object.
        $sendGridRequest = new SendGridRequest($authentication, "https://api.sendgrid.com/v3/", $httpClient);

        return $sendGridRequest;
    }
}
 