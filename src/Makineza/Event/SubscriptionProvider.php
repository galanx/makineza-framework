<?php

namespace Makineza\Event;

class SubscriptionProvider implements SubscriptionProviderInterface
{
    
    protected $dispatcher;
    protected $subscribers = [];
    
    public function __construct(Dispatcher $dispatcher)
    {
        $this->dispatcher = $dispatcher;

    }
    
    public function start()
    {
        $this->load();
        $this->attach();
    }
    
    protected function load()
    {
        $this->subscribers = [];
    }
    
    private function attach()
    {
        foreach ($this->subscribers as $subscriber) {
            $this->dispatcher->addSubscriber($subscriber);
        }
    }
    
    
}