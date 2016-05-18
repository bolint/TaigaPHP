<?php

namespace Taiga\Service;


use Taiga\Service;

class PrioritiesService extends Service
{

    /**
     * Projects Endpoint constructor.
     * @param Api $root
     */
    public function __construct($root)
    {
        parent::__construct($root, 'priorities');
    }

    /**
     * @params array $params
     *  - project: project id
     *
     * @return \stdClass[]
     */
    public function getList($params = [])
    {
        $this->get(null, $params);
    }

    /**
     * @param $id
     * @return array
     */
    public function getById($id)
    {
        return $this->get($id);
    }

}
