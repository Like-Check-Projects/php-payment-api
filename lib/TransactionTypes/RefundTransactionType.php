<?php

namespace Heidelpay\PhpPaymentApi\TransactionTypes;

use Heidelpay\PhpPaymentApi\Constants\TransactionType;

/**
 * Transaction type refund
 *
 * This payment type will be used to give a charge amount or even parts of
 * it back to the given account.
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present Heidelberger Payment GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-api/
 *
 * @author  Jens Richter
 *
 * @package heidelpay\php-payment-api\transaction-types
 */
trait RefundTransactionType
{
    /**
     * Payment type refund
     *
     * This payment type will be used to give a charge amount or even parts of
     * it back to the given account.
     *
     * @param mixed $paymentReferenceId payment reference id (unique id of the debit or capture)
     *
     * @return $this
     *
     * @throws \Heidelpay\PhpPaymentApi\Exceptions\UndefinedTransactionModeException
     */
    public function refund($paymentReferenceId)
    {
        $this->getRequest()->getPayment()->set('code', $this->getPaymentCode() . TransactionType::REFUND);
        $this->getRequest()->getFrontend()->set('enabled', 'FALSE');
        $this->getRequest()->getIdentification()->set('referenceId', $paymentReferenceId);
        $this->prepareRequest();

        return $this;
    }
}
