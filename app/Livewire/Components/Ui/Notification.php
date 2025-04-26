<?php

namespace App\Livewire\Components\Ui;

use Livewire\Component;

class Notification extends Component
{
    const DEFAULT_TYPE = 'info';
    const DEFAULT_DURATION = 4000;

    public $notifications = [];
    public $nextId = 1;

    protected $listeners = ['notify' => 'showNotification'];

    public function showNotification(array $data)
    {
        $notification = $data['data'] ?? $data;

        $id = $this->nextId++;
        $this->notifications[$id] = [
            'id' => $id,
            'message' => $notification['message'],
            'type' => $notification['type'] ?? self::DEFAULT_TYPE,
            'duration' => $notification['duration'] ?? self::DEFAULT_DURATION,
            'show' => true
        ];

        $this->dispatch('hide-notification', id: $id, duration: $this->notifications[$id]['duration']);
    }

    public function hideNotification($id)
    {
        if (isset($this->notifications[$id])) {
            $this->notifications[$id]['show'] = false;

            $this->dispatchBrowserEvent('schedule-notification-removal', ['id' => $id]);
        }
    }

    public function removeNotification($id)
    {
        if (isset($this->notifications[$id])) {
            unset($this->notifications[$id]);
        }
    }

    public function render()
    {
        $this->notifications = array_filter($this->notifications, function ($notification) {
            return !empty($notification) && isset($notification['id']);
        });

        return view('livewire.components.ui.notification');
    }
}
