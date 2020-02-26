<?php

namespace Makineza\Event;

interface SubscriptionProviderInterface
{
    
    public function __construct(Dispatcher $dispatcher);
}