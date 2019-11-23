<?php 
class Company{
    private $id; 
    private $company_name;
	private $company_rfc;
	private $company_address;
	private $business_stream;
    private $company_website_url;
    private $company_country;

    function __construct() { }

    public function get_id()
    {
        return $this->id;
    }

    public function get_company_name()
    {
        return $this->company_name;
    }

    public function get_company_rfc()
    {
        return $this->company_rfc;
    }

    public function get_company_address()
    {
        return $this->company_address;
    }

    public function get_business_stream()
    {
        return $this->business_stream;
    }

    public function get_company_website_url()
    {
        return $this->company_website_url;
    }

    public function get_company_country()
    {
        return $this->company_country;
    }

    public function set_id($id)
    {
        $this->id = $id;
    }

    public function set_company_name($company_name)
    {
        $this->company_name = $company_name;
    }

    public function set_company_rfc($company_rfc)
    {
        $this->company_rfc = $company_rfc;
    }

    public function set_company_address($company_address)
    {
        $this->company_address = $company_address;
    }

    public function set_business_stream($business_stream)
    {
        $this->business_stream = $business_stream;
    }

    public function set_company_website_url($company_website_url)
    {
        $this->company_website_url = $company_website_url;
    }

    public function set_company_country($company_country)
    {
        $this->company_country = $company_country;
    }

}

?>