<?php

namespace Checkbox\Mappers\Receipts\Payments;

use Checkbox\Models\Receipts\Payments\CashPaymentPayload;

class CashPaymentMapper
{
    public function jsonToObject($json): ?CashPaymentPayload
    {
        if (is_null($json)) {
            return null;
        }

        $receipt = new CashPaymentPayload(
            $json['value'],
            $json['label'] ?? ''
        );

        return $receipt;
    }

    public function objectToJson(CashPaymentPayload $obj)
    {
        pre('objectToJson', $obj);
    }
}