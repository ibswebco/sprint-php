<?php

namespace Sprint;

class SprintResource
{
    public function __construct(
        protected SprintConnector $connector
    ) { }
}