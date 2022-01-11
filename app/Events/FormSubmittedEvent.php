<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class FormSubmittedEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    private $modelType;
    private $data;
    private $eventType;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($modelType, $data, $eventType)
    {
        $this->modelType = $modelType;
        $this->data = $data;
        $this->eventType = $eventType;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new Channel('my-channel');
    }

    public function broadcastAs()
    {
        return 'form-submitted';
    }

    public function broadcastWith()
    {
        return [
            'model_type' => $this->modelType,
            'event_type' => $this->eventType,
            'data' => $this->data
        ];
    }
}
