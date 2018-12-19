<?php

namespace Heidelpay\PhpPaymentApi;

use Heidelpay\PhpPaymentApi\Exceptions\JsonParserException;
use Heidelpay\PhpPaymentApi\ParameterGroups\AbstractParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\AccountParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\AddressParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\BasketParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\CompanyParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\ConfigParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\ContactParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\CriterionParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\ExecutiveParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\FrontendParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\IdentificationParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\NameParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\PaymentParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\PresentationParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\RequestParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\SecurityParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\TransactionParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\UserParameterGroup;
use Heidelpay\PhpPaymentApi\ParameterGroups\RiskInformationParameterGroup;

/**
 * Abstract request/response class
 *
 * @license Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 * @copyright Copyright © 2016-present heidelpay GmbH. All rights reserved.
 *
 * @link  http://dev.heidelpay.com/heidelpay-php-payment-api/
 *
 * @author  Jens Richter
 *
 * @package heidelpay\php-payment-api
 */
abstract class AbstractMethod implements MethodInterface
{
    /**
     * AccountParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\AccountParameterGroup
     */
    protected $account;

    /**
     * AddressParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\AddressParameterGroup
     */
    protected $address;

    /**
     * BasketParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\BasketParameterGroup
     */
    protected $basket;

    /**
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\CompanyParameterGroup
     */
    protected $company;

    /**
     * ConfigParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\ConfigParameterGroup
     */
    protected $config;

    /**
     * ContactParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\ContactParameterGroup
     */
    protected $contact;

    /**
     * CriterionParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\CriterionParameterGroup
     */
    protected $criterion;

    /**
     * FrontendParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\FrontendParameterGroup
     */
    protected $frontend;

    /**
     * IdentificationParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\IdentificationParameterGroup
     */
    protected $identification;

    /**
     * NameParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\NameParameterGroup
     */
    protected $name;

    /**
     * PaymentParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\PaymentParameterGroup
     */
    protected $payment;

    /**
     * PresentationParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\PresentationParameterGroup
     */
    protected $presentation;


    /**
     * RequestParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\RequestParameterGroup
     */
    protected $request;

    /**
     * RiskInformationParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\RiskInformationParameterGroup
     */
    protected $riskinformation;

    /**
     * SecurityParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\SecurityParameterGroup
     */
    protected $security;

    /**
     * TransactionParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\TransactionParameterGroup
     */
    protected $transaction;

    /**
     * UserParameterGroup
     *
     * @var \Heidelpay\PhpPaymentApi\ParameterGroups\UserParameterGroup
     */
    protected $user;

    /**
     * Account getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\AccountParameterGroup
     */
    public function getAccount()
    {
        if ($this->account === null) {
            return $this->account = new AccountParameterGroup();
        }

        return $this->account;
    }

    /**
     * Address getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\AddressParameterGroup
     */
    public function getAddress()
    {
        if ($this->address === null) {
            return $this->address = new AddressParameterGroup();
        }

        return $this->address;
    }

    /**
     * Basket getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\BasketParameterGroup
     */
    public function getBasket()
    {
        if ($this->basket === null) {
            return $this->basket = new BasketParameterGroup();
        }

        return $this->basket;
    }

    /**
     * Company getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\CompanyParameterGroup
     */
    public function getCompany()
    {
        if ($this->company === null) {
            return $this->company = new CompanyParameterGroup();
        }

        return $this->company;
    }

    /**
     * Config getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\ConfigParameterGroup
     */
    public function getConfig()
    {
        if ($this->config === null) {
            return $this->config = new ConfigParameterGroup();
        }

        return $this->config;
    }

    /**
     * Contact getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\ContactParameterGroup
     */
    public function getContact()
    {
        if ($this->contact === null) {
            return $this->contact = new ContactParameterGroup();
        }

        return $this->contact;
    }

    /**
     * Criterion getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\CriterionParameterGroup
     */
    public function getCriterion()
    {
        if ($this->criterion === null) {
            return $this->criterion = new CriterionParameterGroup();
        }

        return $this->criterion;
    }

    /**
     * Frondend getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\FrontendParameterGroup
     */
    public function getFrontend()
    {
        if ($this->frontend === null) {
            return $this->frontend = new FrontendParameterGroup();
        }

        return $this->frontend;
    }

    /**
     * Identification getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\IdentificationParameterGroup
     */
    public function getIdentification()
    {
        if ($this->identification === null) {
            return $this->identification = new IdentificationParameterGroup();
        }

        return $this->identification;
    }

    /**
     * Name getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\NameParameterGroup
     */
    public function getName()
    {
        if ($this->name === null) {
            return $this->name = new NameParameterGroup();
        }

        return $this->name;
    }

    /**
     * Payment getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\PaymentParameterGroup
     */
    public function getPayment()
    {
        if ($this->payment === null) {
            return $this->payment = new PaymentParameterGroup();
        }

        return $this->payment;
    }

    /**
     * Presentation getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\PresentationParameterGroup
     */
    public function getPresentation()
    {
        if ($this->presentation === null) {
            return $this->presentation = new PresentationParameterGroup();
        }

        return $this->presentation;
    }

    /**
     * Request getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\RequestParameterGroup
     */
    public function getRequest()
    {
        if ($this->request === null) {
            return $this->request = new RequestParameterGroup();
        }

        return $this->request;
    }

    /**
     * RiskInformation getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\RiskInformationParameterGroup
     */
    public function getRiskInformation()
    {
        if ($this->riskinformation === null) {
            return $this->riskinformation = new RiskInformationParameterGroup();
        }

        return $this->riskinformation;
    }

    /**
     * Security getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\SecurityParameterGroup
     */
    public function getSecurity()
    {
        if ($this->security === null) {
            return $this->security = new SecurityParameterGroup();
        }

        return $this->security;
    }

    /**
     * Transaction getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\TransactionParameterGroup
     */
    public function getTransaction()
    {
        if ($this->transaction === null) {
            return $this->transaction = new TransactionParameterGroup();
        }

        return $this->transaction;
    }

    /**
     * User getter
     *
     * @return \Heidelpay\PhpPaymentApi\ParameterGroups\UserParameterGroup
     */
    public function getUser()
    {
        if ($this->user === null) {
            return $this->user = new UserParameterGroup();
        }

        return $this->user;
    }

    /**
     * @inheritdoc
     */
    public function toJson($options = 0)
    {
        return json_encode($this->jsonSerialize(), $options);
    }

    /**
     * @inheritdoc
     */
    public function toArray($doSort = false)
    {
        $result = [];
        $request = get_object_vars($this);

        if ($doSort) {
            ksort($request);
        }

        foreach ($request as $parameterGroup => $parameterValues) {
            if ($parameterValues === null) {
                continue;
            }

            $paramValues = get_object_vars($parameterValues);
            if ($doSort) {
                ksort($paramValues);
            }

            $tempResult = $result;
            $result = array_merge(
                $tempResult,
                $this->buildParameterArray($parameterValues, $parameterGroup)
            );
        }
        return $result;
    }

    public function buildParameterArray($requestParameter, $parentParameterName)
    {
        $result = [];
        if (!($requestParameter instanceof AbstractParameterGroup || is_array($requestParameter))) {
            if ($requestParameter !== null) {
                $result[strtoupper($parentParameterName)] = $requestParameter;
                return $result;
            }
        } else {
            if (is_object($requestParameter)) {
                $requestParameter = get_object_vars($requestParameter);
            }
            foreach ($requestParameter as $parameterName => $parameterSubValue) {
                $tempResult = $result;
                $result = array_merge(
                    $tempResult,
                    $this->buildParameterArray($parameterSubValue, $parentParameterName . '.' . $parameterName)
                );
            }
        }
        return $result;
    }

    /**
     * @inheritdoc
     */
    public function jsonSerialize()
    {
        $return = [];
        foreach (get_object_vars($this) as $field => $value) {
            $return[$field] = $value;
        }

        return $return;
    }

    /**
     * @inheritdoc
     */
    public static function fromJson($json)
    {
        $instance = new static();
        $instance->mapFromJson($json);

        return $instance;
    }

    /**
     * @inheritdoc
     */
    public static function fromPost(array $post)
    {
        $instance = new static();
        $instance->mapFromPost($post);

        return $instance;
    }

    /**
     * Maps a JSON string into single ParameterGroup instances.
     *
     * @param string $json
     *
     * @throws JsonParserException
     */
    protected function mapFromJson($json)
    {
        $mapClass = json_decode($json);

        if ($mapClass === null) {
            throw new JsonParserException(
                'Error during JSON parsing! Last JSON error message: ' . json_last_error_msg(),
                json_last_error()
            );
        }

        foreach ($mapClass as $parameterGroupName => $parameterGroupObject) {
            $parameterGroupGetterFunc = 'get' . ucfirst($parameterGroupName);
            if (!empty($parameterGroupObject) && is_callable([$this, $parameterGroupGetterFunc])) {
                foreach ($parameterGroupObject as $property => $value) {
                    $this->{$parameterGroupGetterFunc}()->set($property, $value);
                }
            }
        }
    }

    /**
     * Maps a POST array into single ParameterGroup instances.
     *
     * @param array $post
     */
    protected function mapFromPost(array $post)
    {
        echo print_r($post, 1);
        if (empty($post)) {
            return;
        }

        foreach ($post as $paramGroupKey => $value) {
            $values = explode('_', strtolower($paramGroupKey), 2);
            if (count($values) < 2) {
                continue;
            }

            list($paramGroupName, $paramGroupProp) = $values;

            $parameterGroupGetterFunc = 'get' . ucfirst($paramGroupName);
            if ($paramGroupProp !== null && is_callable([$this, $parameterGroupGetterFunc])) {
                $parameterGroup = $this->{$parameterGroupGetterFunc}();

                if (array_key_exists($paramGroupProp, get_object_vars($parameterGroup))) {
                    $parameterGroup->set($paramGroupProp, $value);
                } else {
                    $this->mapParameterToAttribute($parameterGroup, $paramGroupProp, $value);
                }
            }
        }

        $this->getCompany()->getLocation()->set('zip', '123456');
        //$this->getCompany()->getExecutive()[1]->set('family', '123456');
        //echo print_r($this->getCompany()->getExecutive(), 1);
    }

    protected function mapParameterToAttribute($parameterGroup, $paramGroupProp, $value)
    {
        $values = explode('_', strtolower($paramGroupProp), 2);

        if (count($values) < 2) {
            if ($parameterGroup instanceof AbstractParameterGroup) {
                $parameterGroup->set($paramGroupProp, $value);
            }
        } else {
            list($paramGroupName, $paramGroupString) = $values;
            $parameterGroupGetterFunc = 'get' . ucfirst($paramGroupName);
            //echo $parameterGroupGetterFunc . '';
            //echo print_r($parameterGroup, 1);
            if ($paramGroupProp !== null && is_callable([$parameterGroup, $parameterGroupGetterFunc])) {
                $parameterGroup = $parameterGroup->{$parameterGroupGetterFunc}();
                $this->mapParameterToAttribute($parameterGroup, $paramGroupString, $value);
            }

            echo $paramGroupName . "\n\t";
            if (is_numeric($paramGroupName)) {
                //echo $paramGroupString;
                $executives = $this->getCompany()->executive;
                if ((int)$paramGroupName + 1 > count(($this->getCompany()->executive))) {
                    //array_push($this->getCompany()->executive, new ExecutiveParameterGroup());
                    $this->getCompany()->executive[] = new ExecutiveParameterGroup();
                    echo 'hello ' . $paramGroupName . ' - ' . print_r($executives, 1);
                }
                //$this->getCompany()->getExecutive()[$paramGroupString];
            }
        }
    }
}
