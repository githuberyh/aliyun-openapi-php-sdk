<?php

namespace cr\Request\V20160607;

/**
 * Request of CreateNamespace
 *
 */
class CreateNamespaceRequest extends \RoaAcsRequest
{

    /**
     * @var string
     */
    protected $uriPattern = '/namespace';

    /**
     * @var string
     */
    protected $method = 'PUT';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'cr',
            '2016-06-07',
            'CreateNamespace',
            'cr'
        );
    }
}
