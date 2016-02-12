<?php
    class Contact
    {
        //Properties
        private $first_name;
        private $last_name;
        private $email_address;
        private $phone;
        private $street_address;
        private $city;
        private $state;
        private $zip_code;
        private $notes;
        private $contact_id;

        //Constructor
        function __construct( $first_name , $last_name , $email_address , $phone , $street_address , $city , $state , $zip_code , $notes)
        {
            $this->first_name = $first_name;
            $this->last_name = $last_name;
            $this->email_address = $email_address;
            $this->phone = $phone;
            $this->street_address = $street_address;
            $this->city = $city;
            $this->state = $state;
            $this->zip_code = $zip_code;
            $this->notes = $notes;
            $this->contact_id = rand(1000000,999999);
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
        function getPhone()
        {
          return $this->phone;
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
        function getContactID()
        {
            return $this->contact_id;
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
        function setPhone($phone)
        {
            $this->phone = $phone;
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

        // static funcitons
        static function getAll()
        {
            return $_SESSION['list_of_contacts'];
        }
        static function deleteAll()
        {
            $_SESSION['list_of_contacts'] = array();
        }

        // additional functions
        function getFullName()
        {
            return $this->first_name . " " . $this->last_name;
        }
        function saveContact()
        {
            array_push($_SESSION['list_of_contacts'], $this);
        }
        function deleteContact()
        {
            $contact_key = array_search($this, $_SESSION['list_of_contacts']);
            unset($_SESSION['list_of_contacts'][$contact_key]);
        }

    }
?>
