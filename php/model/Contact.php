<?php 
class Contact{
    private $id; 
    private $company_id;
	private $contact_name;
	private $contact_address;
	private $contact_email;
    private $contact_phone;

    function __construct() { }

    public function get_id()
    {
        return $this->id;
    }

    public function get_company_id()
    {
        return $this->company_id;
    }

    public function get_contact_name()
    {
        return $this->contact_name;
    }

    public function get_contact_address()
    {
        return $this->contact_address;
    }

    public function get_contact_email()
    {
        return $this->contact_email;
    }

    public function get_contact_phone()
    {
        return $this->contact_phone;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_contact_name($contact_name)
    {
        $this->contact_name = $contact_name;
    }

    public function set_contact_address($contact_address)
    {
        $this->contact_address = $contact_address;
    }

    public function set_contact_email($contact_email)
    {
        $this->contact_email = $contact_email;
    }

    public function set_contact_phone($contact_phone)
    {
        $this->contact_phone = $contact_phone;
    }

    public function set_company_id($company_id)
    {
        $this->company_id = $company_id;
    }

}

?>