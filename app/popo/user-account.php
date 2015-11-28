<?php
/*
 * iDimensionz/{sendgrid-webapi-v3-examples}
 * user-account.php
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
require __DIR__.'/../../vendor/autoload.php';
require_once 'SendGridRequestFactory.php';

use iDimensionz\SendGridWebApiV3\Api\Users\UserApi;
use \popo\SendGridRequestFactory;

// Get your API as an argument from the command line
$apiKey = $argv[1];
// Every API object requires a SendGrid request object to send the API commands to SendGrid.
$sendGridRequest = SendGridRequestFactory::getSendGridRequest($apiKey);

$userApi = new UserApi($sendGridRequest);
$userAccountDto = $userApi->getAccount();

echo PHP_EOL . 'ACCOUNT' . PHP_EOL;
echo 'Type: ' . $userAccountDto->getType() . PHP_EOL;
echo 'Reputation: ' . $userAccountDto->getReputation() . PHP_EOL;
echo PHP_EOL;
