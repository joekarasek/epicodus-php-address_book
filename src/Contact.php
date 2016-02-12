<?php
    class Contact
    {
        //Properties
        private $first_name;
        private $last_name;
        private $email_address;
        private $street_address;
        private $city;
        private $state;
        private $zip_code;
        private $notes;

        //Constructor
        function __construct( $first_name , $last_name , $email_address , $street_address , $city , $state , $zip_code , $notes)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email_address = $email_address;
            $this->street_address = $street_address;
            $this->city = $city;
            $this->state = $state;
            $this->zip_code = $zip_code;
            $this->notes = $notes;
        }

        // Getters
        function getFirstName()
        {
            return $this->first_name;
        }
        function getLastName()
        {
            return $this->last_name;
        }
        function getEmailAddress()
        {
            return $this->email_address;
        }
        function getStreetAddress()
        {
            return $this->street_address;
        }
        function getCity()
        {
            return $this->city;
        }
        function getState()
        {
            return $this->state;
        }
        function getZipCode()
        {
            return $this->zip_code;
        }
        function getNotes()
        {
            return $this->notes;
        }

        //Setters
        function setFirstName($first_name)
        {
            $this->first_name = $first_name;
        }
        function setLastName($last_name)
        {
            $this->last_name = $last_name;
        }
        function setEmailAddress($email_address)
        {
            $this->email_address = $email_address;
        }
        function setStreetAddress($street_address)
        {
            $this->street_address = $street_address;
        }
        function setCity($city)
        {
            $this->city = $city;
        }
        function setState($state)
        {
            $this->state = $state;
        }
        function setZipCode($zip_code)
        {
            $this->zip_code = $zip_code;
        }
        function setNotes($notes)
        {
            $this->notes = $notes;
        }

    }
?>
