<?php


class Subject{

    public string $message;
    private ObserversInterface $observers;


    public function __construct()
    {
        $this->observers = [];
    }


    public function attach(\ObserversInterface $observer): void
    {
        echo "Subject: Attached an observer.\n";
        $this->observers[]=$observer;
    }


    public function notify(): void
    {
        echo "Subject: Notifying observers...\n";
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }


    /**
     * Get the value of message
     */ 
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @return  self
     */ 
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }
}